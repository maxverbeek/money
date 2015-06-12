var radios = $('.radio .option-input');
var amount = $('#paypal-amount');
var custom = $('.radio .custom');

radios.on('click', function ()
{
	amount.val($(this).val());
	custom.removeClass('focussed');
});

custom.on('click change', function ()
{
	radios.attr('checked', false);
	$(this).addClass('focussed')
	amount.val($(this).val());
});

custom.on('blur', function ()
{
	var me = $(this);
	var value = me.val();

	value = value.toString().replace(',', '.');

	if (! value || isNaN(value))
	{
		return;
	}

	me.val(parseFloat(Math.round(value * 100) / 100).toFixed(2));
});

$('#paypal-form').submit(function ()
{
	amount.val(amount.val().replace(',', '.'));

	if (isNaN(amount.val()))
	{
		alert('You must provide a valid number in the \'custom\' field.');
		return false;
	}

	return true;
});