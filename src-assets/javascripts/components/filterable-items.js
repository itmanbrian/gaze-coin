$(document).ready(function() {
    var filterList = {
        init: function () {
            $('#sortable-list').mixItUp({
                selectors: {
                    target: '.sortable-item',
                    filter: '.filter'
                },
                load: {
                    filter: '.executive-team'
                }
            });
        }
    };
    filterList.init();
});
