<?php
require_once '../_app/Config.inc.php';
require_once '../_app/Frameworks/PHPMailer/class.phpmailer.php';

$arrData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$arrClear  =  array_map('strip_tags',$arrData);
$arrSpace  =  array_map('trim',$arrClear);

$request = $arrSpace['request'];
$json = null;
unset($arrSpace['request']);

switch ($request) {
	case 'envia_mail':
		
			$mail = new PHPMailer();

			$mail->IsSMTP(); 
			//ESTE BLOCO VC CONFIGURA OS DADOS DE SEU EMAIL TIPO; CONTATO@PUBLISHEWEB.COM.BR
			$mail->Username = ''; // SEU EMAL EX: CONTATO@PUBLISHEWEB.COM.BR
			$mail->Password = ''; // SENHA DO EMAIL 
			$mail->Host = ""; // SMTP.+SEU DOMINIO

			//$mail->SMTPSecure = 'ssl';
			 
			// Porta do servidor SMTP 
			$mail->Port = '';//465

			$mail->SMTPAuth = true; 
			
			// Define o remetente
			// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
			$mail->From = $arrSpace['email']; 
			$mail->FromName = $arrSpace['nome']; 

			// Define os destinatário(s)

			$mail->AddAddress("");//AQUI VC POE O SEU EMAIL
			
	
			$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

			$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
			// Define a mensagem (Texto e Assunto)
			// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
			$mail->Subject  = "Mensagem do site PublisheWeb"; // Assunto da mensagem
			$mail->Body = 'Telefone: '. $arrSpace['telefone'].'<br>Seviço: '.$arrSpace['servico'].'<br>mensagem: '. $arrSpace['mensagem'];
			//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
		
			// Envia o e-mail
			$enviado = $mail->Send();
			if($enviado):
				//$json['sucesso'] = "E-mail enviado com sucesso!";
				$json['sucesso'] =  '<span class="box_msg"><p> Sucesso no envio por <b>' . $arrSpace['email'] . '</b> na data ' . date('d/m/Y H:i:s') . 
			'</p></span>' ;
			else:
				$json['alerta'] = '<span class="box_msgerro">Não foi possivel enviar</span>';
			endif;
		break;

}
echo json_encode($json);
