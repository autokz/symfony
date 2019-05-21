(function($) {
    var payHandler = function () {





        var widget = new cp.CloudPayments();
        widget.charge({ // options
                publicId: 'pk_e6236eb3f9e2d82d17cc11951b4bd',
                description: 'Оплата ТОО "LEOPART CENTER"! ЗАЧИСЛЕНИЕ СРЕДСТВ ЗА ОДНУ МИНУТУ!',
                amount: 100, //сумма
                currency: 'KZT',
                invoiceId: 10000, //номер заказа
                accountId: 'LOGIN', //плательщик
            },
            function (options) { // success
                //действие при успешном платеже
            },
            function (reason, options) { // fail
                //действие при неуспешном платеже
            });

        return false;
    };
    $("#test-cloud").on("click", payHandler); //кнопка "Оплатить"
})(window.jQuery);