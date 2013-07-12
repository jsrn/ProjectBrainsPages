function formatSelect()
{
	var html = '<option value="" disabled selected>Choose tile</option>';
	html += wrapOption( 25, 'Wooden Floor' );
	html += wrapOption( 100, 'Wooden Wall' );
	$(".materials-select").html( html );
}

function wrapOption( cost, option )
{
	return '<option value="' + cost + '">' + option + '</option>';
}

$(function()
{
	formatSelect();
});