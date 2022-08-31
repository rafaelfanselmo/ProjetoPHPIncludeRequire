<?php 
// o riquire ou include tem a mesma função
//porém o riquire é mais rigoroso e intolerante aos erros
// o include_once só permite incluir um include no arquivo

include 'header.php';
?>
<?php 
echo "Oplá pessoal! Arquivos header e footer Includes";
?>
<?php 
include 'footer.php';
?>