<?php include_once("../header.php")?> 
<div class = "registro" >
        <form class = "login2">
            <p style="font-size:20px;text-align:center;">Preencha com os seus dados</p><br>
            <label class="texto" for = "nome">nome completo:</label>
            <input class = "caixa"style="margin-right:1.5% ;" id ="nome" type="text">
            <label class="texto" for = "senha">cpf:</label>
            <input class = "caixa"style="margin-top:2%;" id = "senha" type="text">
            <label class="texto" for = "email">Email:</label>
            <input class ="caixa" id = "email" type = "text">
            <label class="texto" for ="senha">Senha:</label>
            <input class="caixa" for ="senha" type="text">



            <button style = "cursor:pointer;padding:3px 30px;border-radius: 20px;background-color:aquamarine ;margin-right:3%;margin-top: 3% ;"type = "submit">Registrar</button><br>
            
            
            
            <a style ="font-size:13px ;color: aliceblue;margin-right: 3%;" href="login.html">login</a>
        </form>
</div>
<header>
        <a class="logo"  href="../index.php"><p class = "home">InfoSports</p></a>
        <a href="/html/registro.php"><p style="color: aliceblue;font-size:25px;">volte para o topo</p></a>
</header>
</body>
</html>