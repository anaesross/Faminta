<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "contato@faminta.com.br";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['nome'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
$email = $_POST['email'];
$assunto = $_POST['assunto'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br><strong>Assunto: </strong>" .$assunto;
$mensagem .= "<br><strong>Enviado por: </strong>" .$email;
$mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];
//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  faminta.com.br<contato@faminta.com.br>\n";
$headers .= "X-Sender:  <contato@faminta.com.br>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <".$email.">\n";
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
echo "<script>alert('Mensagem enviada com sucesso!')</script>";
echo "<script>window.location = 'index.html';</script>";
?>