$(document).ready(function () {

    $('.js-form-submit').click(function (e) {
        e.preventDefault();
        var trigger = $(this);
        var formWrapper = trigger.closest(".js-form-wrapper");
        var ajaxResponseWrapper = formWrapper.find(".js-ajax-response");
        var ajaxHandlerPath = trigger.attr("data-ajax");
        var data = formWrapper.find("input,textarea").serialize();
        $.ajax({
            url: ajaxHandlerPath,
            data: data,
            type: 'POST',
            success: function (response) {
                ajaxResponseWrapper.html(response);
                trigger.removeClass("disabled");
            }
        });
    });

    $("img").unveil();
});