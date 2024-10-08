<?php 
$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['email'])) ? $_POST['email'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['login'])) ? $_POST['login'] : null;
 
$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
  && !empty($_POST['senha'])) ? $_POST['senha'] : null;
  
$titulo = ($_SERVER["REQUEST_METHOD"] == "POST"
  && !empty($_POST['login'])) ? $_POST['login'] : null;
  
$imagem = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$descricao = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$resposta = 0;

include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("functions.php");
$resposta = calcularImc($peso, $altura);
$classificacao = classificarImc($resposta);


var_dump($resposta);

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];

}else{
  $paginaUrl = null;
}

if($paginaUrl === "principal"){
  cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
}elseif($paginaUrl === "registro"){
  cadastrarRegistro($nome, $email, $telefone,$login,$senha);
}elseif($paginaUrl === "contato"){
  cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);
}elseif($paginaUrl === "cadastrar-noticias"){
  cadastrarnews($nome,$imagem,$descricao);
}
 
include_once("header.php");
if($paginaUrl === "principal"){
  include_once("principal.php");
}elseif($paginaUrl === "contato"){
include_once("html/contato.php");
}elseif($paginaUrl === "login"){
include_once("html/login.php");
}elseif($paginaUrl === "registro"){
include_once("html/registro.php");
 }elseif($paginaUrl === "cadastrar-noticias"){
  include_once("html/news.php");
   }else{
  echo"404 página não existe";
 }
?>

</html>