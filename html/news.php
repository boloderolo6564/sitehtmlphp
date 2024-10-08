<?php include_once("header.php");?>
<div class = "noticias" >
        <form class = "login12" method="POST" action="#">
            <p style="color:white;font-size:20px;text-align:center;">Preencha os dados e escreva a noticia </p><br>
            <label class="texto12" for = "#nome"></label>
            <input class = "caixa12"style="margin-right:6%" placeholder="Titulo da noticia"name = "nome" type="text">
            <label class="texto12" for = "#email"></label>
            <input class = "caixa12" style = "width:37%"placeholder="caminho da imagem" name="email" type="text"><br>
            <label class="texto12" for ="#senha" name ="comentario"></label>
            <textarea name = "comentario" placeholder = "conteúdo" style = "margin-top:5%;width:70%;height:40%;padding: 10px;font-size: 16px;" rows = "4" cols= "50"></textarea></br>



            <button style = "width:20%;height:5%;cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-right:3%;margin-top: 3% ;"type = "submit">Registrar</button><br>
            
            
            
            
        </form>
</div>
<?php include_once("footer.php");?>

</body>
</html>