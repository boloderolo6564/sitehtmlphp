<?php include_once("header.php");?>
<div class = "noticias" >
        <form class = "login12" method="POST" action="#">
            <p style="color:white;font-size:20px;text-align:center;">Preencha os dados e escreva a noticia </p><br>
            <label class="texto12" for = "#titulo"></label>
            <input class = "caixa12"style="margin-bottom:4%;margin-right:6%" placeholder="Titulo da noticia" name = "titulo" type="text">
            <label class="texto12" for = "#imagem"></label>
            <input class = "caixa12" style = "width:37%" placeholder="caminho da imagem" name="imagem" type="text"><br>
            <label class="texto12" for = "#categoria"></label>
            <input class = "caixa12" style="margin-right:6%" placeholder="Categoria" name ="categoria" type="text">
            <label class="texto12" for ="#descricao" name ="descricao"></label>
            <textarea name = "descricao" placeholder = "conteúdo" style = "margin-top:5%;width:70%;height:40%;padding: 10px;font-size: 16px;" rows = "4" cols= "50"></textarea></br>

            <button style = "width:20%;height:5%;cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-right:3%;margin-top: 3% ;"type = "submit">Registrar</button><br>
            
            
            
            
        </form>
</div>
<?php include_once("footer.php");?>

