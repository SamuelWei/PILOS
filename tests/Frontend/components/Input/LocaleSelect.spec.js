import { mount } from '@vue/test-utils';
import { BFormSelect } from 'bootstrap-vue';
import LocaleSelect from '../../../../resources/js/components/Inputs/LocaleSelect.vue';
import { createContainer, createLocalVue } from '../../helper';

const localVue = createLocalVue();

describe('LocaleSelect', () => {
  beforeEach(() => {
    vi.mock('../../../../resources/js/i18n.js', async () => {
      const mod = await import('../../../../resources/js/i18n.js');
      return {
        ...mod,
        getLocaleList: () => {
          return {
            de: 'German',
            en: 'English',
            ru: 'Russian'
          };
        }
      };
    });
  });

  it('check v-model and props', async () => {
    const view = mount(LocaleSelect, {
      localVue,
      mocks: {
        $t: key => key
      },
      propsData: {
        value: 'en',
        state: null,
        disabled: false,
        required: false,
        id: 'locale'
      },
      attachTo: createContainer()
    });

    // check default value
    const select = view.findComponent(BFormSelect);
    expect(select.element.value).toBe('en');

    // check options
    const options = select.findAll('option');
    expect(options.length).toBe(4);
    expect(options.at(0).element.value).toBe('');
    expect(options.at(0).text()).toBe('app.select_locale');
    expect(options.at(0).attributes('disabled')).toBeTruthy();

    expect(options.at(1).element.value).toBe('de');
    expect(options.at(2).element.value).toBe('en');
    expect(options.at(3).element.value).toBe('ru');

    // check if event is emitted on change
    await select.setValue('de');
    expect(view.emitted('input')[0][0]).toBe('de');

    // check input id attribute
    expect(select.attributes('id')).toBe('locale');

    // check required attribute
    expect(select.attributes('required')).toBeUndefined();
    await view.setProps({ required: true });
    expect(select.attributes('required')).toBe('required');

    // check disabled attribute
    expect(select.attributes('disabled')).toBeUndefined();
    await view.setProps({ disabled: true });
    expect(select.attributes('disabled')).toBe('disabled');

    // check state prop
    expect(select.props('state')).toBeNull();
    await view.setProps({ state: false });
    expect(select.props('state')).toBe(false);

    view.destroy();
  });
});
