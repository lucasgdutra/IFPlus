$("form").validate({
    rules: {
        test: {
            minlength: 3,
            required: true
        }
    },
    showErrors: function (errorMap, errorList) {
        $.each(this.successList, function (index, value) {
            return $(value).popover("hide");
        });
        return $.each(errorList, function (index, value) {
            var _popover;
            _popover = $(value.element).popover({
                trigger: "manual",
                placement: "top",
                content: value.message,
                template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
            });
            // Bootstrap 3.x :
            //_popover.data("bs.popover").options.content = value.message;
            // Bootstrap 2.x :
            _popover.data("popover").options.content = value.message;
            return $(value.element).popover("show");
        });
    }
});