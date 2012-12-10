$(document).ready(function(){
	$('#eliminarBoli, #eliminarCuenta').popupWindow({ 
		scrollbars:'1',
		height:250,
		width:250,
	});
	
	 $('#uso').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
	     	return false;
	});
})