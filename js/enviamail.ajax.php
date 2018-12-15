
<?php
require_once '../_app/Config.inc.php';
require_once '../_app/Frameworks/PHPMailer/class.phpmailer.php';

$arrData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$arrClear  =  array_map('strip_tags',$arrData);
$arrSpace  =  array_map('trim',$arrClear);

$action = $arrSpace['action'];
$jSon = null;
unset($arrSpace['action']);



switch ($action):
case 'envia_mail':

			$mail = new PHPMailer();

			$mail->IsSMTP(); 
			//ESTE BLOCO VC CONFIGURA OS DADOS DE SEU EMAIL TIPO; CONTATO@PUBLISHEWEB.COM.BR
			$mail->Username = MAILUSER; // SEU EMAL EX: CONTATO@PUBLISHEWEB.COM.BR
			$mail->Password = MAILPASS; // SENHA DO EMAIL 
			$mail->Host = MAILHOST; // SMTP.+SEU DOMINIO

			//$mail->SMTPSecure = 'ssl';
			$mail->SMTPSecure = 'tls';

			// Porta do servidor SMTP 
			$mail->Port = MAILPORT;

			$mail->SMTPAuth = true; 
			
			// Define o remetente
			// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
			$mail->From = $arrSpace['email']; 
			$mail->FromName = $arrSpace['nome']; 

			// Define os destinatário(s)
			//$mail->AddAddress($arrSpace['email'], $arrSpace['nome']);

			$mail->AddAddress(MAILUSER);//AQUI VC POE O SEU EMAIL
			
			$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

			$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
			// Define a mensagem (Texto e Assunto)
			// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
			$mail->Subject  = "Mensagem do site PublisheWeb"; // Assunto da mensagem
			$mail->Body = 'Telefone: '. $arrSpace['telefone'].'<br>Seviço: '.$arrSpace['servico'].'<br>mensagem: '. $arrSpace['mensagem'];
			//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";

			// Envia o e-mail
			$enviado =  $mail->Send();
			$mail->ClearAllRecipients();
			$mail->ClearAttachments();

			if($enviado):
				//$json['sucesso'] = "E-mail enviado com sucesso!";
				$jSon['sucesso'] =  '<span class="box_msg"><p> Sucesso no envio por <b>' . $arrSpace['email'] . '</b> na data ' . date('d/m/Y H:i:s') . 
				'</p></span>' ;
			else:
				$jSon['alerta'] = '<span class="box_msgerro">Não foi possivel enviar</span>';
			endif;

			break;
			case 'send_news':
			$mail = new PHPMailer();

			$mail->IsSMTP(); 
			//ESTE BLOCO VC CONFIGURA OS DADOS DE SEU EMAIL TIPO; 
			$mail->Username = MAILUSER; 
			$mail->Password = MAILPASS; 
			$mail->Host = MAILHOST; 

			$mail->SMTPSecure = 'tls';

			// Porta do servidor SMTP 
			$mail->Port = MAILPORT;

			$mail->SMTPAuth = true; 
			
			// Define o remetente
		
			$mail->From = $arrSpace['email_news']; 
			$mail->FromName = $arrSpace['nome_news']; 

			// Define os destinat�rio(s)

			$mail->AddAddress(MAILUSER);
			
			$mail->IsHTML(true); 

			$mail->CharSet = 'utf-8'; 
		
			$mail->Subject  = "PublisheWeb | Newsletter"; // Assunto da mensagem
			$mail->Body = 'Nome: '. $arrSpace['nome_news'].'<br>Email: '.$arrSpace['email_news'];


			// Envia o e-mail
			$enviado =  $mail->Send();

			$mail->ClearAllRecipients();
			$mail->ClearAttachments();
			if($enviado):
				$jSon['sucesso'] =  '<span class="box_msg"><p> Enviaremos novidades para <b>' . $arrSpace['email_news'] . '</b>
				</p></span>' ;
			else:
				$jSon['alerta'] = '<span class="box_msgerro">N�o foi possivel enviar</span>';
			endif;
			break;

			endswitch;
			echo json_encode($jSon);
