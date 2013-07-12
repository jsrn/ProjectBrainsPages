$(function()
{
	$("input").val("");
	$("#partslist").on("keyup","input",function()
	{
		//alert( $(this).attr("data-material") );
		recalculateTotals();
	});
});

function recalculateTotals()
{
	calculateCost( "wood" );
	calculateCost( "stone" );
}

function calculateCost( type )
{
	var total = 0;
	$('input[data-material="' + type + '"]').each(function()
	{
		var cost = $(this).attr("data-cost");
		var amount = $(this).val();
		total += cost * amount;
	});

	$("#" + type + "-cost").html( total );
}