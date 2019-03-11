<?php 
require_once("../class/class.phpmailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();

$body = $time." Teste de envio de email PHPMailer";
            
$mail->IsSMTP(); 
$mail->SMTPDebug  = 0;                     
                                                       
                                                       
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "tls";
$mail->CharSet = 'UTF-8';
            
$mail->Host       = "smtp.gmail.com"; 
$mail->Port       = 587;                    
$mail->Username   = "devnathan45@gmail.com"; 
$mail->Password   = "nicolas1408";        
$mail->SetFrom('devnathan45@gmail.com', 'Novo Contato Solicitado');
            
$mail->AddReplyTo("devnathan45@gmail.com","Novo Contato Solicitado");
            
$mail->Subject    = "Contato solicitado de: ". $nome;
            
$mail->MsgHTML($nome.' gostaria de fazer uma simulacao! 
Os dados da pessoa é: '.
" E-mail: ". $email. "
Telefone: ".$telefone. " 
Descricao detalhada: ".$mensagem);
            
$address = "devnathan45@gmail.com";
$mail->AddAddress($address, "Contato");
            
if(!$mail->Send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    header('Location: ../index.php?mensagem=erro_ao_enviar');
} else {
    //echo "Seu email foi recebido perfeitamente! Aguarde que em no máximo 12 horas entraremos em contato com você! Obrigado ;)";
    header('Location: ../index.php?mensagem=sucesso_ao_enviar');
} 