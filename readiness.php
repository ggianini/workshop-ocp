<?php
$filename = '/tmp/readiness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Estou pronto para ser acessado! Essa mensagem significa que o readiness não falhou";
}
?>
