<?php

require_once("Frameworks/PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.starttech.com.br"; // Endereço do servidor SMTP
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP 
$mail->Port = 587;//465

$mail->SMTPAuth = true; 
$mail->Username = 'contato@starttech.com.br'; // Usuário do servidor SMTP
$mail->Password = 'StarttechSite1107'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@starttech.com.br"; // Seu e-mail
$mail->FromName = "contato"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress('fulano@dominio.com.br', 'Fulano da Silva');
$mail->AddAddress('contato@starttech.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Publishe"; // Assunto da mensagem
$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)";
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}