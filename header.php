<!DOCTYPE html>
<html lang="en">
    <title>Home</title>
    <link rel = "stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "registro"):?>
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "login"):?>
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
</head>
<body>
    
    <header>
    <a class="logo"  href="index.html"><p class = "home">InfoSports</p></a>
    
    <div class = "menu">
        <nav id = "bar">
        <a href="html/contato.php">
        <button id="botao" type="button">contato</button>
        </a>
        <a href="html/registro.php">
        <button id="botao" type="button">registro</button>
        </a>
        <a href="html/login.php">
        <button id="botao" type = "button">login</button> 
        </a>  
        </nav>
        </div>
    
    </header>
    <br>
    
    <?php
    include_once("functions.php")
    ?>