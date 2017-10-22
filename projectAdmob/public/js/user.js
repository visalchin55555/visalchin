$(document ).ready(function() {


    //Parameter
    $('#delete').click(function (event) {
        event.preventDefault();
        var form_del = $('form_del');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger m-l-10',
            buttonsStyling: false
        }).then(function () {

            $.ajax({
                type: "DELETE",
                url: $('#delete').attr('href'),
                data: {
                    "_token": $('#token').val()
                },
                success: function(msg) {
                    if(msg == '1'){
                        swal({
                            title: "Deleted",
                            text: "Event has been successfully deleted",
                            type: "success"
                        }).then(function() {
                            location.reload();
                        });
                    }else {
                        swal('Error!', 'Your file has not been deleted.', 'error');
                    }

                }
            });

        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });

});