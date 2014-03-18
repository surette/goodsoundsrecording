function showPrices(frm)
{
	var message = "Your cost:\n\n"
	var total = new Number(0);

	$('input:radio:checked').each(function(index, value)
	{
		total += parseFloat($(value).val());
	});

	$('input:checkbox:checked').each(function(index, value)
	{
		total += parseFloat($(value).val());
	});

	message = message + "total: $ " + total;
	alert(message);
}