$(document).ready(function () {
	/* Get the checkboxes values based on the class attached to each check box */
	$("#buttonClass").click(function() {
	    getValueUsingClass();
	});

});

function getValueUsingClass(){
	/* declare an checkbox array */
	var chkArray = [];
	
	/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
	$(".act:checked").each(function() {
		chkArray.push($(this).val());
	});
	
	/* we join the array separated by the comma */
	var selected;
	selected = chkArray.join(';') + ";";
	
	/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
	if(selected.length > 1){
             var url = $('#url_crear').val();
             location.href = url +"?ids=" + selected;
	}else{
		alert("seleccione una actividad");	
	}
}



