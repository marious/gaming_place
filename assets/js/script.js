$(function() {
    $('ul.nav a, a.navbar-brand, a.go-cart').on('click', function(e) {
        var url = this.href;
        var $content = $('.content');

        $.ajax({
            type: "POST",
            url: url,
            timeout: 2000,
            success: function(data) {
                $('.panel-body').html($(data).find('.content').hide().fadeIn(400));
            }
        });

        return false;
    });


    $('form.cart-add').on('submit', function(e) {
        var action = $(this).attr('action');
        var cartData = $(this).serialize();
        console.log(cartData);

        $.ajax({
            type: "POST",
            url: action,
            data: cartData,
            timeout: 2000,
            success: function(data) {
                $('form.cart-aside').load('http://localhost/gaming/cart/index #cart-content');
            }
        });

        return false;

    });

    $('form.update').on('submit', function(e) {
        var url = $(this).attr('action');
        var updateData = $('form.update').serialize();

        console.log(updateData);

        $.ajax({
            type: "POST",
            url: url,
            data: updateData,
            timeout: 2000,
            success: function() {
                $('form.cart-aside').load('http://localhost/gaming/cart/index #cart-content');
            }
        });

        return false;
    });
});


/*
var output = '<tr>';
                 output += '<td><input type="text" maxlength="3" class="qty" value="'+ parsed['qty'] +'"></td>';
                 output += '<td>'  + parsed['name'] + '</td>';
                 output += '<td style="text-align: right">' + parsed['price'] + '</td>';
                output += '</tr>';

                $('table.cart-table').append(output);
*/