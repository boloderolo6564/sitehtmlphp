<?php include_once("header.php");
$res = semelhantename($pesquisa);
foreach ($res as $lista){
$quantidade = 100;
echo"<div style = 'float:left;max-width:300px;max-height:396px;'  class = esporte >";
echo"<a href=".constant('URL_LOCAL_SITE_NEWS').$lista["id"].">";
echo"<button class= button type= button>";
echo"<img class = imagem ; src=".$lista["imagens"].">";
echo"<h3 id = crossfit>".$lista["titulo"]."</h3>";
echo"<p id = crossfit>".reduzirStr($lista["descricao"],$quantidade)."</p>";
echo"</button>";
echo"</a>";
echo"</div>";}
include_once("footer-news.php");






?>