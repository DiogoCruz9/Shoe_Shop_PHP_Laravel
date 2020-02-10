/*
var stripe = Stripe('pk_test_yjhNdD4bkSK83ywfLF7gY5a3');

stripe.createToken('bank_account', {
    country: 'US',
    currency: 'usd',
    routing_number: '110000000',
    account_number: '000123456789',
    account_holder_name: 'Jenny Rosen',
    account_holder_type: 'individual',
}).then(function(result) {
    // Handle result.error or result.token
});
*/

Stripe.setPublishableKey('pk_test_yjhNdD4bkSK83ywfLF7gY5a3');


var $form = $('#checkout-form');


$form.submit(function (event) {

    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken({
        number:$('#card-number').val(),
        cvc:$('#card-cvc').val(),
        exp_month:$('#card-expiry-month').val(),
        exp_year:$('#card-expiry-year').val(),
        name:$('#card-name').val()
    }, stripeResponseHandler);
    return false;
});


function stripeResponseHandler(status, response) {
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    }else{
        var token=response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        $form.get(0).submit();
    }

}

