
<?php
// Cortesia de matedecoca@hotmail.com 18.03.2002
///////////////////////////////////////////////////
// El siguiente codigo reune todas las variables mandadas a travez del http
// post y las manda al correo electronico deseado.
// Intrucciones:
// 1) Arma el formulario que quieras.
// 2) Escribe el nombre del file en donde se encuentra este codigo en el tag
// de <form> de tu formulario ejem: <form action="mifile.php" method="post">
// 3) Corrige el mail, dominio y remitente deseado.
// 4) Todo listo, y a mandar formularios.
// El codigo se puede adaptar facilmente tambien para otros fines.
// espero que este codigo les sirva de algo.
// Cordialmente MateDeCoca
///////////////////////////////////////////////////

// $msg = "Este es el contenido del formulatio mandado\n\n";

// $field_name = array_keys($HTTP_POST_VARS); // guardamos todos los nombres de los "fields" existentes en el formulario
// $value_name = array_values($HTTP_POST_VARS);// guardamos todos los valores en sus respectivas variables

// for ($i=0;$i<count($field_name);$i++)
// {
// $msg .= "".$field_name[$i].": ".$value_name[$i]."\n\n"; // $msg reune el nombre de la variable y su valor
// }

$nombresyapellidos = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$comentario = $_POST["message"];

// echo $nombre;

$contenido = "NOMBRE: " . $nombresyapellidos . "\nEMAIL: " . $email . "\nASUNTO: " . $subject . "\nCOMENTARIO: " . $comentario;

//$recipient = "informes@mr.com.pe"; // el mail deseado
// $recipient = "miguekos1233@gmail.com"; // el mail deseado
$recipient = "larry.ruiz@acceso.com.pe"; // el mail deseado
$subject = "Nuevo Pedido"; // el titulo del mail
$mailheaders = "From: MRINNOVA <mr.com.pe>"; 
// quien lo manda y el dominio
//$mailheaders .= "Reply-To: ".$email."\n\n"; // responder a: Importante! si quieres que el replay:to funcione tienes
//que tener en el formulario un field que tiene como nombre "mail".

mail($recipient, $subject, $contenido, $mailheaders);// mandamos el mail con los todos los datos
// mail($recipient, $subject, $contenido); // mandamos el mail con los todos los datos
echo ("ok");
//header("Location: https://mientrasmasmejor.com"); // y vamos a la pagina en donde nos dan las gracias por haber llenado en formulario
?>