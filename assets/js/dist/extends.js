(function($) {
    $('[id=show_clickbuy]').on('click',function () {
        $.ajax({
            url: "/ajax/clickbuy/"+$(this).attr('article'),
            success: function(data){
                $('#1clickpay_ajax').html(data);
                $('#add_product').on('click',function () {
                    let total_count;
                    $('#product_count').html(total_count=addRemoveProduct($('#product_count').html(),1));
                    $('#total_product_price').html('&#8376; '+$('#product_price').attr('price')*total_count);
                });
                $('#remove_product').on('click',function () {
                    let total_count;
                    $('#product_count').html(addRemoveProduct(total_count=$('#product_count').html(),-1));
                    $('#total_product_price').html('&#8376; '+$('#product_price').attr('price')*total_count);
                });
                $('#pay_product').on('click',function () {
                    $.ajax({
                        url: '/ajax/getpaylink/' + $(this).attr('article') + '/'+parseInt($('#product_count').html()),
                        dataType: 'json',
                        success: function (data) {
                           $('#pay-form').attr('src',data.url);
                           $('#modal-pay-form').modal('show');
                        }
                    });

                })

            }
        })

    })
    $('[id=autokz_buy]').on('click', function () {
        $('#autokz_link').attr('href','https://www.auto.kz/leonet/registration/retail.php?DETAIL_NUM='+$(this).attr('article'));
    });

    function addRemoveProduct(productCount,delta) {

        let intProductCount=parseInt(productCount);
        let intDelta=parseInt(delta);
        if (intProductCount<=1&&intDelta<0){
            return 1;
        }

        return intProductCount+intDelta;

    }
})(window.jQuery);
