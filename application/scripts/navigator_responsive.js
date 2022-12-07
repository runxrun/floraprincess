
var navigation_responseive = function(e)
{
	if(!$("[data-setscreen='sidemenu']").hasClass('rn_sidebar-active') && e)
	{
		$("[data-setscreen='setscreen']").addClass('rn_screen-active');
		$("[data-setscreen='sidemenu']").addClass('rn_sidebar-active');
	}
	else
	{
		$("[data-setscreen='setscreen']").removeClass('rn_screen-active');
		$("[data-setscreen='sidemenu']").removeClass('rn_sidebar-active');
		//$('#navigator_btn').prop("checked", false);
	}
};

$( document ).ready(function() {

	$('[data-setscreen="closemenu"], [data-setscreen="switchmenu"] input[type="checkbox"]').on("click", navigation_responseive);
	$('html').on('click', function(ev) {
		if(($(ev.target).closest('[data-setscreen="sidemenu"],[data-setscreen="switchmenu"]')).length == 0) { navigation_responseive(false) }
	})
});
