import { createLocalVue, mount } from '@vue/test-utils';
import RoomList from '../../../../resources/js/views/rooms/Index';
import BootstrapVue, { BCard, IconsPlugin } from 'bootstrap-vue';
import store from '../../../../resources/js/store';
import moxios from 'moxios';
import RoomComponent from '../../../../resources/js/components/Room/RoomComponent';
import sinon from 'sinon';
import VueRouter from 'vue-router';
import NewRoomComponent from '../../../../resources/js/components/Room/NewRoomComponent';

const localVue = createLocalVue();
localVue.use(BootstrapVue);
localVue.use(IconsPlugin);
localVue.use(VueRouter);

function overrideStub (url, response) {
  const l = moxios.stubs.count();
  for (let i = 0; i < l; i++) {
    const stub = moxios.stubs.at(i);
    if (stub.url === url) {
      const oldResponse = stub.response;
      const restoreFunc = () => { stub.response = oldResponse; };

      stub.response = response;
      return restoreFunc;
    }
  }
}

describe('RoomList', function () {
  beforeEach(function () {
    moxios.install();
  });

  afterEach(function () {
    moxios.uninstall();
  });

  const exampleRoomListResponse = {
    myRooms: [
      {
        id: 'abc-def-123',
        name: 'Meeting One',
        owner: 'John Doe',
        type: {
          id: 2,
          short: 'ME',
          description: 'Meeting',
          color: '#4a5c66',
          default: false
        }
      }
    ],
    sharedRooms: [
      {
        id: 'def-abc-123',
        name: 'Meeting Two',
        owner: 'John Doe',
        type: {
          id: 2,
          short: 'ME',
          description: 'Meeting',
          color: '#4a5c66',
          default: false
        }
      },
      {
        id: 'def-abc-456',
        name: 'Meeting Three',
        owner: 'John Doe',
        type: {
          id: 2,
          short: 'ME',
          description: 'Meeting',
          color: '#4a5c66',
          default: false
        }
      }
    ]
  };

  const exampleUser = { id: 1, firstname: 'John', lastname: 'Doe', locale: 'de', permissions: ['rooms.create'], modelName: 'User' };

  it('check list of rooms', function (done) {
    moxios.stubRequest('/api/v1/rooms', {
      status: 200,
      response: { data: exampleRoomListResponse }
    });

    moxios.stubRequest('/api/v1/application', {
      status: 200,
      response: { data: { user: exampleUser } }
    });

    const view = mount(RoomList, {
      localVue,
      mocks: {
        $t: (key) => key
      },
      store
    });

    store.dispatch('initialize', {});

    RoomList.beforeRouteEnter.call(view.vm, undefined, undefined, async next => {
      next(view.vm);
      await view.vm.$nextTick();

      expect(view.vm.rooms).toEqual(exampleRoomListResponse);
      const rooms = view.findAllComponents(RoomComponent);
      expect(rooms.length).toBe(3);

      expect(rooms.filter(room => room.vm.shared === false).length).toBe(1);
      expect(rooms.filter(room => room.vm.shared === true).length).toBe(2);
      done();
    });
  });

  it('click on room in list', function (done) {
    const spy = sinon.spy();

    const router = new VueRouter();
    router.push = spy;

    const exampleRoomListEntry = {
      id: 'abc-def-123',
      name: 'Meeting One',
      owner: 'John Doe',
      type: {
        id: 2,
        short: 'ME',
        description: 'Meeting',
        color: '#4a5c66',
        default: false
      }
    };

    const view = mount(RoomComponent, {
      localVue,
      router,
      mocks: {
        $t: (key) => key
      },
      propsData: {
        id: exampleRoomListEntry.id,
        name: exampleRoomListEntry.name,
        type: exampleRoomListEntry.type
      },
      store
    });

    view.findComponent(BCard).trigger('click');

    moxios.wait(() => {
      sinon.assert.calledOnce(spy);
      sinon.assert.calledWith(spy, { name: 'rooms.view', params: { id: exampleRoomListEntry.id } });
      done();
    });
  });

  it('test reload function and room limit reach event', function (done) {
    moxios.stubRequest('/api/v1/rooms', {
      status: 200,
      response: {
        data: {
          myRooms: [
            {
              id: 'abc-def-123',
              name: 'Meeting One',
              owner: 'John Doe',
              type: {
                id: 2,
                short: 'ME',
                description: 'Meeting',
                color: '#4a5c66',
                default: false
              }
            }
          ],
          sharedRooms: []
        }
      }
    });

    moxios.stubRequest('/api/v1/application', {
      status: 200,
      response: { data: { settings: { room_limit: -1 }, user: exampleUser } }
    });

    const view = mount(RoomList, {
      localVue,
      mocks: {
        $t: (key) => key
      },
      store
    });

    store.dispatch('initialize', {});

    RoomList.beforeRouteEnter.call(view.vm, undefined, undefined, async next => {
      next(view.vm);
      await view.vm.$nextTick();
      // find current amount of rooms
      const rooms = view.findAllComponents(RoomComponent);
      expect(rooms.length).toBe(1);

      // change response and fire event
      overrideStub('/api/v1/rooms', {
        status: 200,
        response: {
          data: {
            myRooms: [
              {
                id: 'abc-def-123',
                name: 'Meeting One',
                owner: 'John Doe',
                type: {
                  id: 2,
                  short: 'ME',
                  description: 'Meeting',
                  color: '#4a5c66',
                  default: false
                }
              },
              {
                id: 'abc-def-456',
                name: 'Meeting Two',
                owner: 'John Doe',
                type: {
                  id: 2,
                  short: 'ME',
                  description: 'Meeting',
                  color: '#4a5c66',
                  default: false
                }
              }
            ],
            sharedRooms: []
          }
        }
      });

      // find new room component and fire event
      const newRoomComponent = view.findComponent(NewRoomComponent);
      expect(newRoomComponent.exists()).toBeTruthy();
      newRoomComponent.vm.$emit('limitReached');

      moxios.wait(function () {
        view.vm.$nextTick();
        // check if now two rooms are displayed
        const rooms = view.findAllComponents(RoomComponent);
        expect(rooms.length).toBe(2);
        done();
      });
    });
  });
});
