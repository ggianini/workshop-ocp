<?php
$filename = '/tmp/liveness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Estou vivo! Essa mensagem significa que o liveness não falhou";
}
?>
