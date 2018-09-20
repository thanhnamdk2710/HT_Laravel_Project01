$(document).ready(function (){
    /**
     * Show alert when create, update, delete
     */
    $('div.alert').delay(1000).slideUp();

    /**
     * Show delete confimation when click button delete
     */
     $('.btn-delete-item').bind('click', function (e) {
        var form = $(this.form);
        var title = $(this).attr('data-title');
        var body = '<i>' + $(this).attr('data-confirm') + '</i>';
        $('#title-content').html(title);
        $('#body-content').html(body);
        $('#confirm').modal('show');
        $('#delete-btn').one('click', function () {
            form.submit();
        });
    });
});
