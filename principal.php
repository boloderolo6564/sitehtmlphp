<body>
    <h2 class="n1">BEM VINDO A INFOSPORTS!</h2>
    <P class="n1">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte preferido.</P>
    <section>
    <?php
    include_once("header.php");
    include_once("functions.php");
    foreach(listas() as $lista){
        echo"<a href=".$lista["site"].">";
        echo"<div class = esporte>";
        echo"<button class= button type= button>";
            echo"<img class = imagem src=".$lista["imagem"].">";
            echo"<h3 id = crossfit>".$lista["Nome"]."</h3>";
            echo"<p id = crossfit>".$lista["descricao"]."</p>";
            echo"</button>";
            echo"</div>";
            echo"</div>";
            echo"</a>";
        }
        ?>
    <aside class = "sidebar">
    <form class = "formulario" >
    <div style="background-color:#d5d9e7;margin-left:88.5%;border-radius:15px;>
        <p style="color: rgb(18, 23, 27);>INDICE DE MASSA  CORPORAL(IMC)</p>
        <label for ="#nome">Nome</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "#nome" name="nome" type="text"><br>
        <label for ="#email">email</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "email" name="#email" type="text"><br>
        <label for ="#peso">Peso</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "#peso" name="#peso" type="text"><br>
        <label for ="#altura">Altura</label><br>
        <input id = "caixa"style="border-radius: 15px;background-color: rgb(186, 231, 233);" id ="#altura" name="altura" type ="text"><br>
        <button style="cursor:pointer;border-radius: 25px;padding: 1px 25px;background-color:blue;"><p style="color: aliceblue;" type="button" >CALCULAR</p></button>
        </div>    
    </form>  
    <h4>
        Resultado: <?= $resposta;?> <br/> 
        Classificação: <?= $classificacao;?>
    </h4>
    </section>
<?php include_once("footer.php")?>
</body>