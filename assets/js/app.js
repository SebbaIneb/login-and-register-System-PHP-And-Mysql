function login() 
{
	$usr_text = document.getElementById('usr').value;
	$psw_text = document.getElementById('psw').value;

	console.log($usr_text + " , " + $psw_text)

	$.post("/assets/php/api.php",
	{
		"login" : 1,
		"usr"	: $usr_text,
		"psw"	: $psw_text 
	}).done(function (data) {
		if (data == "1") 
		{

		}else if(data == "000"){
			$("#erreur").html("User Not Found !!")
		}
	})

}