;(function($) {
    'use strict';

    $.plugin('ocDropzone', {

        /**
         * Contains form element if useForm is used.
         */
        $form: null,

        /**
         * Dropzone instance.
         */
        dropzone: null,

        /**
         * Dropzone options
         */
        options: {},

        defaults: {
            url: null,
            useForm: true,
            paramName: 'file',
            autoProcessQueue: true,
            uploadMultiple: true,
            parallelUploads: 1,
            maxFiles: 1,
            previewsContainerSelector: '.js--dropzone-previews-container',
            previewTemplateSelector: '.js--dropzone-preview-template',
            clickableSelector: '.js--dropzone-clickable'
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
            var opts = me.opts;

            // Applies HTML data attributes to the current options
            me.applyDataAttributes();

            me.options.url = opts.url;
            me.options.paramName = opts.paramName;

            if (opts.useForm) {
                me.$form = me.$el.closest('form');

                var action = me.$form.attr('action');

                if (typeof action === typeof undefined || action === false) {
                    action = window.location.href;
                }

                me.options.url = action;

                //this options are needed to be able to use the parent form and their submit button
                me.options.autoProcessQueue = false;
                me.options.uploadMultiple = opts.maxFiles > 1;
                me.options.parallelUploads = opts.maxFiles;
                me.options.maxFiles = opts.maxFiles;

                me._on(me.$form, 'submit', $.proxy(me.onFormSubmitted, me));
            }

            var $previewTemplate = me.$el.find(opts.previewTemplateSelector);
            me.options.previewTemplate = $previewTemplate.html()
                .replace('<table>', '') //Workaround as innerHTML removes tr and td as they are not valid in a div
                .replace('</table>', '')
                .replace('<tbody>', '')
                .replace('</tbody>', '');
            $previewTemplate.remove();

            //Preview container
            var $previewsContainer = me.$el.find(opts.previewsContainerSelector);
            me.options.previewsContainer = $previewsContainer.get(0);

            //Clickable
            var $clickable = me.$el.find(opts.clickableSelector);
            me.options.clickable = $clickable.get(0);

            me.dropzone = new Dropzone(
                me.$el.get(0),
                me.options
            );
        },

        onFormSubmitted: function (event) {
            var me = this;

            event.preventDefault();
            event.stopPropagation();
            me.dropzone.processQueue();
        }
    });
})(jQuery);
