export default {
  wait: 'Please wait...',
  error: 'An error occurred!',
  notFound: '404 | The requested route doesn\'t exists!',
  selectLocale: 'Please select a language',
  reload: 'Reload',
  yes: 'Yes',
  no: 'No',
  flash: {
    clientError: {
      message: 'An unknown error occurred in the application!',
      title: 'Error'
    },

    guestsOnly: {
      message: 'The request can only be done by guests!',
      title: 'Only for guests'
    },

    serverError: {
      message: '{message}',
      emptyMessage: 'An error occurred on the server during request!',
      title: 'Server-Error: {statusCode}'
    },

    unauthenticated: {
      message: 'You must be authenticated to execute the request!',
      title: 'Unauthenticated'
    },

    unauthorized: {
      message: 'You don\'t have the necessary rights to access the called route!',
      title: 'Unauthorized'
    }
  },

  footer: {
    legalNotice: 'Legal notice',
    privacyPolicy: 'Privacy policy',
    legalNoticeUrl: 'https://www.thm.de/ges/en/about',
    privacyPolicyUrl: 'https://www.thm.de/ges/en/datenschutz',
    separator: '|'
  },

  roles: {
    admin: 'Administrator',
    user: 'User'
  },

  permissions: {
    rooms: {
      create: 'Create rooms'
    },

    settings: {
      manage: 'Manage settings'
    },

    roles: {
      create: 'Create roles',
      delete: 'Delete roles',
      update: 'Edit roles',
      view: 'Show roles',
      viewAny: 'Show all roles'
    },

    users: {
      viewAny: 'Show all users'
    }
  },

  overwrite: 'Overwrite',
  save: 'Save',
  back: 'Back',
  previousPage: 'Previous page',
  nextPage: 'Next page',

  true: 'Yes',
  false: 'No'
};
