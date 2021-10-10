$( document ).ajaxError(function( event, request, settings ) {
    msg = 'Đã xảy ra lỗi không mong muốn. Vui lòng liên hệ với quản trị viên';
    alert(msg);
});
