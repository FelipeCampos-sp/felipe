
<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("../class/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host       = 'smtp.live.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br) No caso usei o do hotmail pra testar
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->SMTPSecure = 'tls';
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Username   = 'felipewebsp@hotmail.com'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password   = 'mercenario82'; // Senha do servidor SMTP (senha do email usado)

     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('felipewebsp@hotmail.com', 'Nome'); //Seu e-mail
     $mail->Subject = $_POST['nome'].' - '.$_POST['servico'];//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('felipewebsp@hotmail.com', 'Teste Locaweb');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
        
    $corpoEmail  = $_POST['mensagem']."</br>";
    $corpoEmail .= "Email Cliente: ";
    $corpoEmail .= $_POST['email'];

 
     //Define o corpo do email
     $mail->MsgHTML($corpoEmail); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     echo "Mensagem enviada com sucesso</p>\n";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>