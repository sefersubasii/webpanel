try {
    window.Popper = require('popper.js').default
    window.$ = window.jQuery = require('jquery')
    require('bootstrap')
    require('admin-lte')
    require('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4')
    require('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input').init(); // require and init
    require('tinymce')
    require('select2')
    require('./datatable')
    require('./laravel')
    require('./multilingual')
    require('./custom')
} catch (e) {}
