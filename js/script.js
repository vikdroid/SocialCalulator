function error_html(error) {
	//Generate error in bootstrap style.
	var errorhtml = " \
		<div class='alert alert-danger alert-dismissable'> \
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'> \
			&times; \
		</button> \
		<strong> \
			Warning ! \
		</strong>";
	errorhtml += error + "</div>";
	return errorhtml;
}

function validate(){
	var val1 = $('#val1').val();
	var val2 = $('#val2').val();
	var opt = $('#optn').val();
	if(val1=="" || val2=="")
	{
		$('#error').html("");
		$('#error').html(error_html("Enter All value required"));
		return false;
	}
	else
	{
		if(opt == "+")
		{
			var result = Number(val1) + Number(val2);
			document.getElementById("result").value = result;
			
		}
		if(opt=="-")
		{
			var result = Number(val1) - Number(val2);
			document.getElementById("result").value = result;
			
		}
		if(opt=="*")
		{
			var result = Number(val1) * Number(val2);
			document.getElementById("result").value = result;
			
		}
		if(opt=="/")
		{
			var result = Number(val1) / Number(val2);
			document.getElementById("result").value = result;
			
		}

	}

	return true;
}

function showhistory()
               {
               var http;
               if (window.XMLHttpRequest)
                 {
                 
                  http=new XMLHttpRequest();
                 }
               else
                 {

                 http=new ActiveXObject("Microsoft.XMLHTTP");
                 }
               http.onreadystatechange=function()
                 {
                 if (http.readyState==4 && http.status==200)
                   {
                   document.getElementById('history').innerHTML = http.responseText;
                   }
                 }
               http.open("post","result.php",true);
               http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               http.send();
               }