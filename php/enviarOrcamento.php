<?php
	$nome = $_POST['nome'];
	$email = $_POST['email']; // TODO: Validar E-mail
	$telefone = $_POST['telefone'];
	$ensaios = $_POST['ensaios'];
	$mensagem = $_POST['mensagem'];

	$to = 'Graciele Dombek <andreferreira.pp@gmail.com>';
	$subject = "Orçamento - Ensaio de $ensaios"; // TODO: Formatar HTML do e-mail enviado
	$message = "De: $nome\n
				E-mail: $email\n
				Telefone: $telefone\n
				Tipo de Ensaio: $ensaios\n
				Observações: $mensagem";
	$headers = 'From: Orçamento Fanpage <contato@gracieledombek.com.br>';

	return $envio = mail($to, $subject, $message, $headers, '-fcontato@gracieledombek.com.br');