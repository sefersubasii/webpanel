window.multilingual = function(editing = false){
    $('.content-wrapper').multilingual({"editing": editing});

    $('.table').on('draw.dt', function(){
        $('.content-wrapper').multilingual({"editing": editing});
    });

    $('.language-selector').removeClass('d-none');
}

tinymce.init({
    selector: '.richTextBox',  // change this value according to your HTML
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    base_url: '/backend/js/tinymce',
    language: 'tr_TR',
    plugins: 'image code',
    file_picker_callback (callback, value, meta) {
        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

        tinymce.activeEditor.windowManager.openUrl({
          url : '/file-manager/tinymce5',
          title : 'Dosya Yöneticisi',
          width : x * 0.8,
          height : y * 0.8,
          onMessage: (api, message) => {
            callback(message.content, { text: message.text })
          }
        })
      }
});

$('.select2').select2({
    theme: 'bootstrap4',
    language: 'tr',
});

$('.select2-tags').select2({
    theme: 'bootstrap4',
    language: 'tr',
    tags: true,
    tokenSeparators: [','],
});

$('.select2-number-tags').select2({
    theme: 'bootstrap4',
    language: 'tr',
    tags: true,
    tokenSeparators: [','],
    createTag: function(term, data) {
        var value = term.term;

        if(isNaN(Number(value))) {
            return null;
        }

        return {
            id: value,
            text: value
        };
    },
});
