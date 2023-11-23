<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Processamento</title>
</head>
<body>
    
<header>
    <h1>Cadastro de Cliente | Edy Pane </h1>
</header>

    <main class="text">
        <?php 
            $nome = $_GET["nome"];           // Criando uma variavel do tipo GET para guardar o nome
            $sobrenome = $_GET["sobrenome"];  // Criando uma variavel do tipo GET para guardar o sobrenome
            $email = $_GET["email"];
            echo "<p> É um prazer te conhecer, a Edy Pane agradece $nome $sobrenome ! Entraremos em contato com você ! </p>";
        
        ?>

        <button class="text-js">

            <a href="javascript:history.go(-1)"> Voltar para pagina anterior</a>

        </button>
    </main>
    <!--  -->
</body>
</html>