<!--<?php
	/*session_start();
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];

	require_once("PHPMailerAutoload.php");

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "alison.soldadoo@gmail.com";
	$mail->Password = "123";


	$mail->setFrom("alison@gmail.com","Alura Curso PHP e MySql");
	$mail->addAddress("alison.soldadoo@gmail.com");
	$mail->Subject = "Email de contato da loja";
	$mail->msgHTML = ("<html>de:{$nome}<br>email:{$email}<br>mensagem:{$msg}</html>");
	$mail->AltBody = "de:{$nome}\nemail:{$email}\nmensagem:{$msg}";

	if ($mail->send()){
		$_SESSION["success"] = "Mensagem foi enviada com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION["danger"] = "Erro ao enviar mensagem" . $mail-> ErrorInfo;
		header("Location: contato.php");
	}

	die();*/
?>-->
<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["msg"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "henrique.soldadoo@gmail.com";
$mail->Password = "maximuz123123";

$mail->setFrom("henrique.soldadoo@gmail.com", "Nome da pessoa");
$mail->addAddress("henrique.soldadoo@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();