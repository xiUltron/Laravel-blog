$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('button[name="btnPublish"]').click( function () {
    $.post('statuses', {$content:$('#statusPublishForm').val()}, function (html) {
        $('.statuses').prepend(html)
    })
});