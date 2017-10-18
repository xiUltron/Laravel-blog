$('button[name="btnPublish"]').click( function () {
    $.post('statuses/store', $('#statusPublishForm').val(), function (html) {
        $('.statuses').prepend(html)
    })
});