<?php
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }
  }
    function listas(){
    $listaImagens[0] = array(
        "site" => "html/boxe.php",
        "Nome" => "Boxe",
        "descricao" => "Descubra a força interior e a técnica impecável necessáriaspara se destacar no ringue. Desafie-se a superar seus limites físicos e mentais enquanto aprende os segredos deste esporte de combate emocionante.",
        "imagem" => "imagens/boxe.jpg"); 
    $listaImagens[1] = array(
        "site"=>"html/crossfit.php",
        "Nome" => "Crossfit",
        "descricao" => "Entre na arena do crossfit e desafie seu corpo em um treinamento intenso e variado que irá transformar sua força, resistência e condicionamento físico. Supere seus limites e alcance novos patamares de desempenho.",
        "imagem" => "imagens/crossfit.jpg"
    );
    $listaImagens[2] = array(
        "site"=>"html/basquete.php",
        "Nome" => "BASQUETE",
        "descricao" => "Drible, passe, arremesse! Junte-se ao emocionante mundo do basquete e experimente a empolgação de jogar em equipe, competir em partidas acirradas e fazer cestas incríveis.",
        "imagem" => "imagens/basquete.jpg"
    );
    $listaImagens[3] = array(
        "site"=>"html/corrida.php",
        "Nome" => "CORRIDA",
        "descricao" => "Calce seus tênis e sinta a energia pulsante das corridas. Desafie-se em diferentes distâncias, supere obstáculos e descubra os benefícios incríveis para a saúde e o bem-estar que a corrida proporciona.",
        "imagem" => "imagens/corrida.jpg"
    );
    $listaImagens[4] = array(
        "site"=>"html/surf.php",
        "Nome" => "SURF",
        "descricao" => "Sinta a liberdade e a conexão com o mar enquanto desliza pelas ondas no surf. Experimente a emoção de pegar a onda perfeita, domine as técnicas e mergulhe no estilo de vida descontraído e vibrante do surf.",
        "imagem" => "imagens/surf.jpg"
    );
    $listaImagens[5] = array(
        "site"=>"html/trilha.php",
        "Nome" => "TRILHA",
        "descricao" => "Aventure-se pelos caminhos menos percorridos e descubra a beleza da natureza enquanto se desafia em trilhas emocionantes. Deixe a rotina para trás e explore novos horizontes ao ar livre.",
        "imagem" => "imagens/trilha.jpg"
    );
    $listaImagens[6] = array(
        "site"=>"html/tenis.php",
        "Nome" => "TÊNIS",
        "descricao" => "Experimente a elegância e a velocidade do tênis, um esporte que combina habilidade, estratégia e agilidade. Jogue com paixão, vença com classe e desfrute da competição saudável em quadra.",
        "imagem" => "imagens/tenis.jpg"
    );
    $listaImagens[7] = array(
        "site"=>"html/novo.php",
        "Nome" => "Novo",
        "descricao" => "Experimente a elegância e a velocidade do tênis, um esporte que combina habilidade, estratégia e agilidade. Jogue com paixão, vença com classe e desfrute da competição saudável em quadra.",
        "imagem" => "imagens/tenis.jpg"
    );
    return $listaImagens;
        };

    function categoria(){
        $pdo = Database::conexao();
        $sql = "SELECT Categoria FROM categoria_tb";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $list;

    }


    function cadastrarcategoria($categoria){
        $categoria = strtoupper($categoria);
        $pdo = Database::conexao();
        $sql = "SELECT Categoria FROM categoria_tb  where Categoria = '$categoria'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(empty($list)){
            if(!$categoria ){return;}
            $pdo = Database::conexao();
            $sql = "INSERT into categoria_tb(`Categoria`) values (:Categoria)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':Categoria', $categoria);
            $result = $stmt->execute();
            return $resposta = "CADASTRO EFETIVADO";
        }
        else{
            return $resposta = "CATEGORIA JÁ EXISTE";
        }
    }  
    
    function calcularImc($peso, $altura){
        $resposta = 0;
        if($peso && $altura){
            $resposta = $peso / ($altura * $altura);  
        }
        return round($resposta,2);
    }
    function imcBuscarPorId($id)
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM imc_tb WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function semelhante($categoria){
        if(!$categoria){return;}
        $pdo = Database::conexao();
        $sql = "select * from `news_tb`  where `categoria` like '%$categoria%' limit 5";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;

    }
//buscar
    function buscar($pesquisa){
        $paginaUrl = "pesquisa";
        return $pesquisa;
    }
     function semelhantename($categoria){
        if(!$categoria){return;}
        $pdo = Database::conexao();
        $sql = "select * from `news_tb`  where `titulo` like '%$categoria%' limit 5";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;

    }
     
    function cadastrarnews($titulo,$imagem,$descricao,$categoria){
        $site = "html/".$titulo.".php";
        $resposta = verificar($site);
        $categoria = strtoupper($categoria);
        if ($resposta == "nao"){
            cadastrarnoticias($site,$titulo,$descricao,$imagem,$categoria);

        }
        



    }
    
    function puxarid(){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM news_tb WHERE 1";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;

    }
    function news($id){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM news_tb WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0];

    }
    function folhear(){
        
        $quantidade = 100;
        foreach(puxarid() as $lista){
        
            echo"<div style = 'float:left;max-width:300px;max-height:396px;'  class = esporte >";
            echo"<a href=".constant('URL_LOCAL_SITE_NEWS').$lista["id"].">";
            echo"<button class= button type= button>";
                echo"<img class = imagem ; src=".$lista["imagens"].">";
                echo"<h3 id = crossfit>".$lista["titulo"]."</h3>";
                echo"<p id = crossfit>".reduzirStr($lista["descricao"],$quantidade)."</p>";
                echo"</button>";
                echo"</a>";
                echo"</div>";
            
            $site = $lista["site"];
            $titulo = $lista["titulo"];
            $descricao = $lista["descricao"];
            $imagem = $lista["imagens"];
            $conteudo = verificar($site);
            $resposta = $conteudo[0];
            $nada = "";
            $id = $conteudo[1];
            echo($nada);
            if($resposta == "nao"){
                cadastrarnoticias($site,$titulo,$descricao,$imagem,$categoria);
            }
        }
    }
   
    function verificarLogin($login){
        $pdo = Database::conexao();
        $sql = "SELECT `id`,`nome`,`login`,`senha` FROM register_tb WHERE `login` = '$login'";
        // var_dump($sql);die;
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $list = @$list[0];
        
        return $list;
    }

    function validaSenha($senhaDigitada, $senhaBd){
        
        if(!$senhaDigitada || !$senhaBd){return false;}
        if($senhaDigitada == $senhaBd){return true;}
        return false;
    }

    function protegerTela(){
        if(
            !$_SESSION || 
            !$_SESSION["usuario"]["status"] === 'logado'
        ){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        }
    }

    function registrarAcessoValido($usuarioCadastrado){
        $_SESSION["usuario"]["nome"] = $usuarioCadastrado['nome'];
        $_SESSION["usuario"]["id"] = $usuarioCadastrado['id'];
        $_SESSION["usuario"]["status"] = 'logado';

    }
    function limparSessao(){
        unset($_SESSION["usuario"]);
        header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    }
    function verificar($site)
    {   
        if (!$site){return;}
        $pdo = Database::conexao();
        $sql = "SELECT  `site` FROM `news_tb` WHERE 1";
        $sql2 = "SELECT `id` FROM `news_tb` WHERE 1";
        $stmt = $pdo->query($sql);
        $stmt2 = $pdo->query($sql2);
        $sites = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $id = $stmt2->fetchALL(PDO::FETCH_COLUMN);
        $resposta = "nao";
        foreach ($sites as $nome){

            if($site == $nome){
                $resposta = "sim";
                return $resposta;}
        return $resposta;
                

            
        }
    }
    
    function cadastrarnoticias($site,$titulo,$descricao,$imagem,$categoria)
    {       
        if(!$site|| !$titulo || !$descricao || !$imagem|!$categoria ){return;}
        $sql = "INSERT INTO `news_tb`(`site`, `titulo`, `descricao`, `imagens`,`categoria`)
        VALUES (:site,:titulo,:descricao,:imagem,:categoria)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':site', $site);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':categoria', $categoria);
        $result = $stmt->execute();
        return ($result)?true:false;


    }
    function cadastrar($nome,$email,$peso,$altura,$imc,$classificacao)
    {
        if(!$nome || !$email || !$peso || !$altura || !$imc || !$classificacao){return;}
        $sql = "INSERT INTO `imc_tb` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
        VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':altura', $altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }
    function cadastrarRegistro($nome,$email,$telefone,$login,$senha)
    {
        if(!$nome || !$email || !$telefone || !$login || !$senha){return;}
        $sql = "INSERT INTO `register_tb` (`nome`,`email`,`telefone`,`login`,`senha`)
        VALUES(:nome,:email,:telefone,:login,:senha)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $result = $stmt->execute();
        return ($result)?true:false;
    }
    function cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem)
    {
        if(!$nome || !$sobrenome || !$email || !$telefone || !$mensagem){return;}
        $sql = "INSERT INTO `contato_tb` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
        VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function classificarImc($imc){
        if($imc <= 16){
            return "magreza grave;";
        }elseif($imc > 16 && $imc <= 17){
            return "magreza moderada";
        }elseif($imc > 17 && $imc <= 18.5){
            return "magreza leve";
        }elseif($imc >= 18.6 && $imc<= 24.9){
            return "Peso Ideal";
        }elseif($imc >= 25 && $imc <= 29.9 ){
                "Sreturnobrepeso";
        }elseif($imc >= 30 && $imc <= 34.9){
            return "Obesidade";
        }elseif($imc >= 30 && $imc <= 34.9){
            return "Obesidade grau 1";
        }elseif($imc >= 35 && $imc <= 39.9){
            return "Obesidade grau 2 ou severa";
        }elseif($imc >= 40){
            return "Obesidade grau 3 ou morbida";
        }
    }
    function criptografia($senha){
        if(!$senha)return false;
        return sha1($senha);
    }
    function upload($imagem){
    if(!isset($_FILES["fileToUpload"])){return;}

    $target_dir = "assets/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            return $_FILES["fileToUpload"]["name"];
        } else {
            // echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
  }
    ?>

    
