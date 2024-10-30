<?php  include_once("index.php");
include_once("header.php");

if($_GET && isset($_GET['id'])){
    $paginaUrl = $_GET['id'];
  
  }else{
    $paginaUrl = null;
  }
$site = news($paginaUrl);

echo"<div  class = siteboxe>";
echo"<labek>";
echo"<img style = width: 1850px; src=".$site["imagens"].">";
echo"<h3>".$site["titulo"]."</h3>";
echo"<p style =text-align:left;>".$site["descricao"]."</p>";
echo"</labek>";
echo"</div>";
$lista = semelhante($site["categoria"]);




include_once("footer.php");
?>