$(document).ready(function() {//Start when document will ready.		
	$("#login_button" ).click(function() {
		var usuario = $("#username").val();
		var senha = $("#senha").val();
		if (usuario == "" && senha == "") {
			$("#msg").html("Account Validated!!!");
			return true;
		}
		else{ 
			$("#msg").html('***Guerreiro ou Senha Incorretos***');
	    }
	});
});
 



