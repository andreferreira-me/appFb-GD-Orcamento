<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<title>Facebook App - Orçamento Graciele Dombek</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
	<script>
		window.fbAsyncInit = function () {
			FB.init({
				appId: '685306458280343',
				xfbml: true,
				version: 'v2.3'
			});
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</head>
<body>
<div class="container">
	<div id="box" class="col-lg-8 col-lg-offset-3">
		<h2 class="text-center">Solicite seu Orçamento</h2>

		<div class="col-lg-10 col-lg-offset-1 text-justify">
			<p>Para solicitar o seu orçamento de ensaio fotográfico, preencha os campos abaixo e clique no botão "Solicitar orçamento"!</p>
			<p>Entrarei em contato o mais breve possível, enviando os detalhes sobre o meu trabalho! Obrigado pelo interesse!</p>
		</div>

		<div class="clearfix"></div>

		<form name="enviarOrcamento">
			<div class="row text-center">
				<div class="col-xs-4 text-right">
					<label for="nome">Nome:</label>
				</div>
				<div class="col-xs-4 text-left">
					<input id="nome" name="nome" type="text" placeholder="Informe seu nome"/>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-4 text-right"><label for="email">E-mail:</label></div>
				<div class="col-xs-4 text-left"><input id="email" name="email" type="text" placeholder="Informe seu e-mail"/></div>
			</div>
			<div class="row text-center">
				<div class="col-xs-4 text-right"><label for="telefone">Telefone:</label></div>
				<div class="col-xs-4 text-left"><input id="telefone" name="telefone" type="text" placeholder="Informe seu telefone"/></div> <!-- TODO: Formatar máscara do telefone -->
			</div>
			<div class="row text-center">
				<div class="col-xs-4 text-right"><label for="ensaios">Tipo de Ensaio:</label></div>
				<div class="col-xs-4 text-left"><select id="ensaios" name="ensaios">
						<option>Bebê</option>
						<option>Criança</option>
						<option>15 anos</option>
						<option>Jovem</option>
						<option>Gestante</option>
						<option>Outros</option>
					</select></div>
			</div>
			<div id="divMsg" class="row text-center">
				<div class="col-xs-4 text-right"><label for="mensagem">Mensagem:</label></div>
				<div class="col-xs-4 text-left"><textarea id="mensagem" name="mensagem" placeholder="Envie uma mensagem junto com o pedido de orçamento"></textarea>
				</div>
			</div>
			<div class="row text-center">
				<input type="button" id="enviaOrcamento" class="btn btn-success btn-lg" value="Solicitar Orçamento">
			</div>
		</form>
	</div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>