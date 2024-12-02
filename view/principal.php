<?php
include_once("header.php");
include_once("functions.php");
include_once("index.php");?>
<body>

    <?php
    if (!$_SESSION){
      echo"<h2 style= display:flex;align-items:center;justify-content:center > BEM VINDO  A INFOSPORTS!</h2>";}
    else{
    foreach ($_SESSION as $lista);
    $nome = $lista["nome"];
    $id = $lista["id"];
    $status = $lista["status"];
     echo"<h2 style= display:flex;align-items:center;justify-content:center > BEM VINDO ".$nome." A INFOSPORTS!</h2>";}?>
    <P style="display:flex;align-items:center;justify-content:center">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte preferido.</P>
    <section>
        <div>
    <?php
    folhear();
    
    
        ?>
        
        </div>
    <aside class="sidebar">
    <form method="POST" action="#">
    <div style="background-color:bisque;padding:20%;text-align:center;border-radius:15px;">
        <p style="color: rgb(18, 23, 27);">INDICE DE MASSA  CORPORAL(IMC)</p>
        <label for ="#nome">Nome</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "#nome" name="nome" type="text"><br>
        <label for ="#email">email</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "#email" name="email" type="text"><br>
        <label for ="#peso">Peso</label><br>
        <input id = "caixa" style="border-radius: 15px;background-color: rgb(186, 231, 233)" id = "#peso" name="peso" type="text"><br>
        <label for ="#altura">Altura</label><br>
        <input id = "caixa"style="border-radius: 15px;background-color: rgb(186, 231, 233);" id ="#altura" name="altura" type ="text"><br>
        <button style="cursor:pointer;border-radius: 25px;padding: 1px 25px;background-color:blue;color: aliceblue;" class = "btnCalcular" type="submit">CALCULAR</button>
        </div>    
    </form>  
    <h4>
        Resultado: <?= $resposta;?> <br/> 
        Classificação: <?= $classificacao;?>
    </h4>
    </aside>
    </section>
<?php include_once("footer.php")?>
</body>