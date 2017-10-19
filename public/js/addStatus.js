$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('button[name="btnPublish"]').click(function () {
    // $.post('statuses/store',
    //     $('#statusTextArea').val(),
    //     function (html) {
    //         $('.statuses').prepend(html)
    //     }
    // )
    alert('??');
});