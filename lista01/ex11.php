<?php

function getBrowser() {
    return $_SERVER['HTTP_USER_AGENT'];
}

$user_agent = getBrowser();

switch (true) {
    case strpos($user_agent, 'Firefox'):
        $navegador = 'Firefox';
        break;
    case strpos($user_agent, 'Chrome'):
        $navegador = 'Chrome';
        break;
    case strpos($user_agent, 'Safari'):
        $navegador = 'Safari';
        break;
    case strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7'):
        $navegador = 'Internet Explorer';
        break;
    default:
        $navegador = 'Navegador desconhecido!';
}
echo $navegador;
?>
