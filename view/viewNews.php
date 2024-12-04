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
echo"<img style = width:100%;height:100%; src=".$site["imagens"].">";
echo"<h3>".$site["titulo"]."</h3>";
echo"<p style =text-align:left;>".$site["descricao"]."</p>";
echo"</labek>";
echo"</div>";
echo"<section>";
echo"<aside>";
echo"<div>";
foreach(semelhante($site["categoria"]) as $list ){
  
  echo"<div style= ';float:left;'class = esporte >";
  echo"<a href=".constant('URL_LOCAL_SITE_NEWS').$list["id"].">";
  echo"<button class= button type= button>";
  echo"<img class = imagem src=".$list["imagens"].">";
  echo"<h3 id = crossfit>".$list["titulo"]."</h3>";
  echo"<p id = crossfit>".reduzirStr($list["descricao"],100)."</p>";
  echo"</button>";
  echo"</a>";
  echo"</div>";
};
echo"</div>";
echo"</aside>";
echo"</section>";

include_once("footer-news.php");
?>