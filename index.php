<?php 
$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['email'])) ? $_POST['email'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['altura'])) ? $_POST['altura'] : null;

 $resposta = 0;

 include_once("configuração.php");
 include_once("configuração/conexao.php");
 include_once("functions.php");
 $resposta = calcularImc($peso, $altura);
 $classificacao = classificarImc($resposta);
 cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
 
 var_dump($resposta);

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];

}else{
  $paginaUrl = null;
}

include_once("header.php");

if($paginaUrl === "principal.php"){
  include_once("principal.php");
}elseif($paginaUrl === "contato"){
include_once("html/contato.php");
}elseif($paginaUrl === "login"){
include_once("html/login.php");
}elseif($paginaUrl === "registro"){
include_once("html/registro.php");
 }else{
  echo"404 página não existe";
 }
function timeZone(){
    
}
?>

</html>