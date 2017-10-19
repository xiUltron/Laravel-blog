$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('button[name="btnPublish"]').click( function () {
    $.post('content', {content:$('#statusPublishForm').val()}, function (html) {
        $('.statuses').prepend(html)
    })
});