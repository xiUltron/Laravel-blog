$('button[name="btnPublish"]').click( function () {
    $.post('statuses', $('#statusPublishForm').val(), function (html) {
        $('.statuses').prepend(html)
    })
});