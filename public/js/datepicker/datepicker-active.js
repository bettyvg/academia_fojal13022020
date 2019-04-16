$(document).ready(function () {
 "use strict";
 
	// Datepickers
		$('#fecha2').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#fecha2').datepicker('option', 'minDate', selectedDate);
			}
		});
		$('#fecha2').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#fecha2').datepicker('option', 'maxDate', selectedDate);
			}
		});
 
});