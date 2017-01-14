<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta class
//require_once("PHPMailer/class.phpmailer.php");
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");

$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {
    $mail->Host = 'mx1.hostinger.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port       = 587; //  Usar 587 porta SMTP
    $mail->Username = 'contato@monkeysofsampa.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'Sampamonkey22'; // Senha do servidor SMTP (senha do email usado)

    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->SetFrom('contato@monkeysofsampa.com.br', 'Contato Monkeys of Sampa'); //Seu e-mail
    $mail->AddReplyTo('contato@monkeysofsampa.com.br', 'Contato Monkeys of Sampa'); //Seu e-mail
    $mail->Subject = $assunto;//Assunto do e-mail


    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress($email, $email);

    //Campos abaixo são opcionais
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddCC('monkeys.sampa@outlook.com', 'Monkeys Outlook'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo


    //Define o corpo do email
    $mail->MsgHTML('<p>'.$mensagem.'<p>');

    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();
    echo "Materialize.toast('E-mail enviado. Responderemos o mais rápido possível!', 4000)";

    //caso apresente algum erro é apresentado abaixo com essa exceção.
}catch (phpmailerException $e) {
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>