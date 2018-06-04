$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* Удаление входящего сообщения */

function adminmessagedelete($id) {
    $.ajax({

        url: '/message/delete/'+$id,
        method: 'POST',
        success: function(data) {
            if (data) {
                $('.mail_'+$id).remove();
            }
        }
    })
}


/* Удаление исходящего сообщения */

function adminmymessagedelete($id) {
    $.ajax({

        url: '/mymessage/delete/'+$id,
        method: 'POST',
        success: function(data) {
            if (data) {
                $('.mymail_'+$id).remove();
            }
        }
    })
}