<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "contato@faminta.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $name = $_POST['name'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$email
  $subject = $_POST['subject'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem  =  "<strong>Nome: </strong>" .$name;
  $mensagem .= "<br><strong>Assunto: </strong>" .$subject;
  $mensagem .= "<br><strong>Enviado por: </strong>" .$email;
  $mensagem .= "<br><strong>Mensagem: </strong>" .$_POST['message'];  
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  faminta.com.br<contato@faminta.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@faminta.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path: <".$email.">\n";
  $headers .= "MIME-Version: 1.0\n";
 
mail($para, $subject, $mensagem, $headers);  //função que faz o envio do email.
echo "<script>alert('Mensagem enviada com sucesso!')</script>";
echo "<script>window.location = 'index.html';</script>";
?>