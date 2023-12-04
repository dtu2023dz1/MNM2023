'use strict';
var tree_custom = {
    init: function() {
        $('#treeBasic').jstree({
            'core' : {
                'themes' : {
                    'responsive': false
                }
            },
            'types' : {
                'default' : {
                    'icon' : 'icofont icofont-folder font-theme'
                },
                'file' : {
                    'icon' : 'icofont icofont-file-alt font-dark'
                }
            },
            'plugins' : ['types']
        });
    }
};
(function($) {
    "use strict";
    tree_custom.init()
})(jQuery);
