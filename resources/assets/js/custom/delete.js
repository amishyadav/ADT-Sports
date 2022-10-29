'use strict';

window.deleteItem = function (url, header) {
    var callFunction = arguments.length > 3 && arguments[3] !== undefined
        ? arguments[3]
        : null
    swal({
        title: 'Delete !',
        text: 'Are you sure want to delete this ' + header + ' ?',
        icon: sweetAlertIcon,
        buttons: {
            confirm: 'Yes, Delete',
            cancel: 'No, Cancel',
        },
    }).then((result) => {
        if (result) {
            livewire.emit('refresh')
            deleteItemAjax(url, header, callFunction)
        }
    });
};

function deleteItemAjax (url, header, callFunction = null) {
    $.ajax({
        url: url,
        type: 'DELETE',
        dataType: 'json',
        success: function (obj) {
            if (obj.success) {
                livewire.emit('refresh')
            }
            swal({
                icon: 'success',
                title: 'Deleted!',
                confirmButtonColor: '#6571FF',
                text: header + ' has been deleted.',
                timer: 2000,
                buttons: {
                    confirm: 'Ok',
                },
            })
            if (callFunction) {
                eval(callFunction);
            }
        },
        error: function (data) {
            swal({
                title: '',
                text: data.responseJSON.message,
                confirmButtonColor: '#009ef7',
                icon: 'error',
                timer: 5000,
                buttons: {
                    confirm: $('.okVariable').val(),
                },
            })
        },
    })
}
