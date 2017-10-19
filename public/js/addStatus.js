$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('button[name="btnPublish"]').click(function () {
    sHtml = "<li>123123</li>";
    $.post('statuses/store',
        {content: $('#statusTextArea').val()},
        function () {
            $('.statuses').prepend(sHtml);
        }
    )
});