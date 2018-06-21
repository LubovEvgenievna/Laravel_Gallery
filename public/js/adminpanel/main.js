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

/* Редактор категорий */
function showCategoryRed($id) {
    $(".cat-red-on-"+$id).css('display','table-row');
    $(".cat-red-off-"+$id).css('display','none');
    $(".print-error-msg").css('display','none');
}

function showCategoryRedClose($id) {
    $(".cat-red-on-"+$id).css('display','none');
    $(".cat-red-off-"+$id).css('display','table-row');
    $(".print-error-msg").css('display','none');
}

function saveCategory($id) {
    $.ajax({
        type: "POST",
        url: "/category",
        data: $('#category-form-'+$id).serialize(),
        success: function(data) {
            if($.isEmptyObject(data.error)){
                $("td.title-"+data.id).empty();
                $(".title-"+data.id).append(data.title);
                $("td.sort_id-"+data.id).empty();
                $(".sort_id-"+data.id).append(data.sort_id);
                showCategoryRedClose(data.id);
            }else{
                printErrorMsg(data.error);
            }
        }
    });
    return false;

    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
}

function deleteCategory($id) {
    $.ajax({

        url: '/category/delete/'+$id,
        method: 'POST',
        success: function(data) {
            if (data) {
                $('.cat-red-off-'+$id).remove();
            }
        }
    })
}

function newCat() {
    $(".newCat").css('display','block');
}

$(document).ready(function() {
    $(".btn_newCategory").on('click',function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/category/newcategory",
            data: $('#newCategory-form').serialize(),
            success: function(data) {
                if($.isEmptyObject(data.error)){
                window.location.reload();
            }else{
                printErrorMsg(data.error);
            }
            }
        });
        return false;
    });

    function printErrorMsg (msg) {
        $(".print-error-msg-newcat").find("ul").html('');
        $(".print-error-msg-newcat").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg-newcat").find("ul").append('<li>'+value+'</li>');
        });
    }
});

/* Редактор фото */
function workRed($id) {
    $(".work-red-on-"+$id).css('display','block');
    $(".work-red-off-"+$id).css('display','none');
}

function workRedClose($id) {
    $(".work-red-on-" + $id).css('display', 'none');
    $(".work-red-off-" + $id).css('display', 'block');
}

function saveWork($id) {
        $.ajax({
            type: "POST",
            url: "/edit",
            data: $('#edit-form-'+$id).serialize(),
            success: function(data) {
                if($.isEmptyObject(data.error)){
                    $(".worktitle-"+data.id).empty();
                    $(".worktitle-"+data.id).append(data.worktitle);
                    $(".title-"+data.id).empty();
                    $(".title-"+data.id).append('<p class="title-'+data.title+'">'+data.category+'</p>');
                    $(".description-"+data.id).empty();
                    $(".description-"+data.id).append(data.description);
                    workRedClose(data.id);
                }
            }
        });
        return false;
}