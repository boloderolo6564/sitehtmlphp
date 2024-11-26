<?php include_once("header.php");?>
<div class = "noticias" >
        <form class = "login12" method="POST" action="#">
            <p style="color:white;font-size:20px;text-align:center;">Preencha os dados e escreva a noticia </p><br>
            <label class="texto12" for = "#titulo"></label>
            <input class = "caixa12"style="margin-bottom:4%;margin-right:6%" placeholder="Titulo da noticia" name = "titulo" type="text">
            <div class="input-box">
                <!-- <input type="text" id="imagem" name="imagem" placeholder="Imagem"> -->
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <label class="texto12" for = "#categoria" style= "color:white;">Categoria:</label>
            <select name = "categoria" id ='categoria'><?php  $categoria = categoria();foreach($categoria as $list){$list = $list["Categoria"];echo"<option value=".$list.">".$list."</option>";}?></select>
            </a>  
            <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'cadastrar-categoria'?>">
            <button  type = "button"> Nova categoria</button> 
            </a></br>
            <label class="texto12" for ="#descricao" name ="descricao"></label>
            <textarea name = "descricao" placeholder = "conteúdo" style = "margin-top:5%;width:70%;height:40%;padding: 10px;font-size: 16px;" rows = "4" cols= "50"></textarea></br>

            <button style = "width:20%;height:5%;cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-right:3%;margin-top: 3% ;"type = "submit">Registrar</button><br>
            
            
            
            
        </form>
</div>
<?php include_once("footer.php"); var_dump($categoria);?>

