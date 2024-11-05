<?php include_once("header.php")?>
</form method="POST" action="#">
<div class = "noticias" >
        <form class = "login12" method="POST" action="#">
            <p style="color:white;font-size:20px;text-align:center;">Preencha os dados e escreva a noticia </p><br>
            <label class="texto12" for = "#nome"></label>
            <input class = "caixa12"style="margin-bottom:4%;margin-right:6%" placeholder="Nome" name = "nome" type="text">
            <label class="texto12" for = "#sobrenome"></label>
            <input class = "caixa12" style = "width:37%" placeholder="Sobrenome" name="sobrenome" type="text"><br>
            <input class = "caixa12" style = "margin-right:%" placeholder="Telefone" name="telefone" type="text">
            <label class="texto12" for = "#email"></label>
            <input class = "caixa12" style="margin-left:7%;width:37%" placeholder="Email" name ="email" type="text">
            <label class="texto12" for ="#descricao" name ="mensagem"></label>
            <textarea name = "mensagem" placeholder = "Mensagem" style = "margin-top:5%;width:70%;height:40%;padding: 10px;font-size: 16px;" rows = "4" cols= "50"></textarea></br>

            <button style = "width:20%;height:5%;cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-right:3%;margin-top: 3% ;"type = "submit">Enviar</button><br>
            
            
            
            
        </form>
</div>
<?php include_once("footer.php");?>