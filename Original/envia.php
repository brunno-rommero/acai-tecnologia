<?

# alterar a variavel abaixo colocando o seu email
$destinatario = "suporte@acaitecnologia.com.br";
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
 // monta o e-mail na variavel $body
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Telefone: " . $phone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";
// envia o email
mail($destinatario, $body, "From: $email\r\n");
// redireciona para a página de obrigado
//header("location:obrigado.htm");

?>
