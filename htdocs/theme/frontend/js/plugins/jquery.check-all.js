;(function($) {
    'use strict';

    $.plugin('ocCheckAll', {
        defaults: {
            container: document,
            checkboxes: 'input[type=checkbox]',
            showIndeterminate: true
        },

        /**
         * Default plugin initialisation function.
         * Registers an event listener on the change event.
         * When it's triggered, the parent form will be submitted.
         *
         * @public
         * @method init
         */
        init: function () {
            var me = this;

            // Applies HTML data attributes to the current options
            me.applyDataAttributes();

            me._init();
        },

        _init: function() {
            var me = this;
            var opts = me.opts;

            me._checkChildren();

            me.$el.on('change', function(e) {
                var $children = $(opts.checkboxes, opts.container).not(me.$el);
                $children.prop('checked', $(me.$el).prop('checked'));
            });

            $(opts.container).on('change', opts.checkboxes, function(e) {
                me._checkChildren();
            });
        },

        _checkChildren: function() {
            var me = this;
            var opts = me.opts;

            var totalCount = $(opts.checkboxes, opts.container).not(me.$el).length;
            var checkedCount = $(opts.checkboxes, opts.container)
                .filter(':checked').not(me.$el).length;

            var indeterminate = opts.showIndeterminate &&
                checkedCount > 0 && checkedCount < totalCount;

            me.$el.prop('indeterminate', indeterminate);
            me.$el.prop('checked', checkedCount === totalCount && totalCount !== 0);
        }
    });
})(jQuery);
