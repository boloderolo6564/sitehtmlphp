
<div class = "login" >
        <form method = "POST" action = "#" class = "login2">
            <label for = "usuario">Usuario:</label>
            <input style="border-radius: 10px;margin-right:-1% ;" id ="usuario" name="login" type="text"><br>
            <label  for = "senha">Senha:</label>
            <input style="border-radius: 10px;margin-top:2% ;" id = "senha" name = "senha" type="password"><br>
            <button style = "cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-left:4%;margin-top: 3% ;"type = "submit">Entrar</button><br>
            <a style ="font-size:13px ;color: aliceblue;margin-left: 4%;" href="<?=constant('URL_LOCAL_SITE_PAGINA').'registro'?>"  >registrar</a>
        </form>
</div>
<?php include_once("footer.php");?>
