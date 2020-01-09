<?

# alterar a variavel abaixo colocando o seu email
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
 // monta o e-mail na variavel $body

$thank="gracias.htm"; 

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nome: " . $name . " \r\n";
$mensaje .= "E-mail: " . $email . " \r\n";
$mensaje .= "Telefone: " . $phone . " \r\n";
$mensaje .= "Mensagem: " . $message . " \r\n" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y - H:i:s') .  " \r\n";


$para = 'brunoromero7@gmail.com';
$assunto = 'Formulario Açaí Tecnologia';

mail($para, $assunto, utf8_decode($mensaje), $header);

Header ("Location: $thank" ); 

?>
