<!DOCTYPE html>
<html lang="en">
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "registro"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>
    <?php if($paginaUrl === "sessao"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>
    <?php if($paginaUrl === "viewNews"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>
    <?php if($paginaUrl === "principal"):?>
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "login"):?>
        <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "cadastrar-noticias"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/cadastrarnoticias.css">
    <?php endif; ?>
    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/cadastrarnoticias.css">
    <?php endif; ?>


    
    <header>
    <a class="logo"  href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>"><p class = "home">InfoSports</p></a>
    
    <div class = "menu">
        <nav id = "bar">
        <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'contato'?>">
        <button id="botao" type="button">contato</button>
        </a>
        <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'registro'?>">
        <button id="botao" type="button">registro</button>
        </a>
        <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'login'?>">
        <button id="botao" type = "button">login</button> 
        </a>  
        <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'cadastrar-noticias'?>">
        <button id="botao" type = "button"> Registar noticiais</button> 
        </a> 
        </a>  
        <a href="<?=constant('URL_LOCAL_SITE_PAGINA').'sair'?>">
        <button id="botao" type = "button"> Sair</button> 
        </a> 
        </nav>
        </div>
    </header>
    <br>
    <?php
    include_once("functions.php")
    ?>