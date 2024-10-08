<?php echo "teste <br>"; ?>
<?php $nome = "thyago<br>"; ?>
<?php echo $nome; ?>
<?php
 $meutexto = "texto";
 $numero = 1231;
 $decimal = 10.5;
 $logico = true;
 $array = array("thyago","rogerio","marcos");
 $listaNoticias[0] = array("titulo" => "meu titulo", "descricao" => "minha descrição", "imagem" => "imagem.png");
 $object;
 $null = null;
 echo ($array[1]); echo"<br>";

 var_dump($meutexto); echo"<br>";
var_dump($numero); echo"<br>";
var_dump($decimal); echo"<br>";
var_dump($logico); echo"<br>";
var_dump($null);echo"<br>";
var_dump($listaNoticias);echo "<br>";echo ($listaNoticias[0]['titulo']);


?>
<?php 
    $text = "sla o que escrever.";
    function letramaiuscula($text){
        $text = strtoupper($text);
        return $text;
    }
    echo("</br>".letramaiuscula($text));
    ?>