<?php 
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("functions.php");
$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

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
 
@$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;
  
$titulo = ($_SERVER["REQUEST_METHOD"] == "POST"
  && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;
  
$uploadimagem = ($_SERVER["REQUEST_METHOD"] == "POST"
  && !empty($_POST['fileToUpload'])) ? $_POST['fileToUpload'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$categoria = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['categoria'])) ? $_POST['categoria'] : null;

$pesquisa = ($_SERVER["REQUEST_METHOD"] == "POST"
   && !empty($_POST['pesquisa'])) ? $_POST['pesquisa'] : null;
$resposta = 0;

$pesquisa = buscar($pesquisa);
$resposta = calcularImc($peso, $altura);
$classificacao = classificarImc($resposta);




if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];

}else{
  $paginaUrl = null;
}
include_once("view/header.php");

if($pesquisa == true){
  $paginaUrl = "pesquisa";
  
}

if($paginaUrl === "principal"){
  cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao); 
}elseif($paginaUrl === "registro"){
  cadastrarRegistro($nome, $email, $telefone,$login,$senha);
}elseif($paginaUrl === "contato"){
  cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);
}elseif($paginaUrl === "cadastrar-noticias"){
  
  $imagem = "assets/uploads/".upload($uploadimagem);
  cadastrarnews($titulo,$imagem,$descricao,$categoria);
}elseif($paginaUrl === "cadastrar-categoria"){
 $resposta = cadastrarcategoria($categoria);
  if ( $resposta == false){
    echo"<p  style = text-align:center;margin-bottom:-8%;margin-left:-3%>".$resposta."<</p>";
  }else{
    echo"<p style = text-align:center;margin-bottom:-8%;margin-left:-3%>".$resposta."</p>";
  }
}elseif($paginaUrl === "login"){
  $usuarioCadastrado = verificarLogin($login);


  
  
  if(
    $usuarioCadastrado &&
    validaSenha($senha, $usuarioCadastrado['senha'])

  ){
      registrarAcessoValido($usuarioCadastrado);
      $paginaUrl = "principal";
      
      
  }
}elseif($paginaUrl === "sair"){
  limparSessao();
}
 

if($paginaUrl === "principal"){
  include_once("view/principal.php");
}elseif($paginaUrl === "pesquisa"){
  include_once("view/pesquisar.php");
}elseif($paginaUrl === "cadastrar-categoria"){
  protegerTela();
  include_once("view/categoria.php"); 
}elseif($paginaUrl === "contato"){
  protegerTela();
  include_once("view/contato.php");
}elseif($paginaUrl === "login"){
include_once("view/login.php");
}elseif($paginaUrl === "registro"){
include_once("view/registro.php");
 }elseif($paginaUrl === "cadastrar-noticias"){
  protegerTela();
include_once("view/news.php");
}elseif($paginaUrl === "viewNews"){
include_once("view/viewNews.php");
}elseif($paginaUrl === "sessao"){
include_once("view/sessao.php");
  }else{
  echo"404 página não existe";
 }

?>
