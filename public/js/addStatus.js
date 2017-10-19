$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('button[name="btnPublish"]').click( function () {
    $.post('statuses', {content:'haha'}, function (html) {
        $('.statuses').prepend(html)
    })
});