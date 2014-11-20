(function( $ ) {
	$.fn.checkboxbutton = function()
	{
		var l = this.prev('label')
		l.before('<label>'+l.html()+'</label>');
		
		this
		.css({'position':'absolute','left':'-1000px'})
		.button({
			icons: {primary: 'ui-icon-circle-close'},
			text: false 
		})
		.on('click',function ()
		{
			$(this).button('option', 'icons', {primary: this.checked ? 'ui-icon-circle-check':'ui-icon-circle-close'});
			hasCanged = true;
		})
		.filter(":checked").button({icons: {primary: "ui-icon-circle-check"}});
	};
})( jQuery );

