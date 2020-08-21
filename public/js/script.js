$('#article').summernote({
    height: 300
});

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('#sm-box').delay(3000).slideUp();
$('.add-to-cart').on('click', function () {

    $.ajax({
        url: BASE_URL + 'invest/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: {pid: $(this).data('id')},
        success: function (res) {
            location.reload();
        }
    });
});

$('.update-cart-item').on('click', function () {

    //var pid = $(this).data('id');
    //var op  = $(this).data('op');
    //console.log(pid, op);

    $.ajax({
        url: BASE_URL + 'invest/update-cart',
        type: 'GET',
        dataType: 'html',
        data: {pid: $(this).data('id'), op: $(this).data('op')},
        success: function (res) {
            location.reload();
        }
    });

});

$('.origin-text').on('focusout', function () {
    $('.target-text').val($(this).val().permalink());
});

