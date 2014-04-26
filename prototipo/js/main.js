$(document).ready(function() {
	
	$('#btn-login').click(function(event) {

		var email = $('#loginEmail').val();
		var password = $('#loginPassword').val();

		if (email != "" && password != "") {
			$.ajax({
			   type: "POST",
			   url: "inc/login.php",
			   data: "email="+email+"&pwd="+password,
			   success: function(html){
			    if(html=='true') {
			    	window.location="album.php";
			    }
			    else {
			    	alert('E-mail ou senha errado');
			    }
			   }
			   /*beforeSend:function() {
			   	$("#add_err").html("Loading...")
			   }*/
			});
		}

		return false;
	});

	/*$('#btn_logout').click(function(event) {
		
		$.ajax({
			type: 'GET',
			url: 'inc/logout.php',
			success: function(html){
				$('#link_inicio').click();
			}
		});

		return false;
	});*/


	$('#btn_user_cadastro').click(function(event) {
		/* Act on the event */
		var nome = $('#user_nome').val();
		var sobrenome = $('#user_sobrenome').val();
		var email = $('#user_email').val();
		var idade = $('#user_idade').val();
		var sexo = $('#user_sexo').val();		
		var senha = $('#user_senha').val();

		$.ajax({
		   type: "POST",
		   url: "inc/cadastro_usuario.php",
		   data: "user_nome="+nome+"&user_sobrenome="+sobrenome+"&user_email="+email+"&user_idade="+idade+"&user_sexo="+sexo+"&user_senha="+senha,
		   success: function(formOk){
		    if(formOk=='true') {
		    	window.location="album.php";
		    }
		    else {
		    	alert('deu ruim');
		    }
		   }
		   /*beforeSend:function() {
		   	$("#add_err").html("Loading...")
		   }*/
		});


		return false;
	});


});
