<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dados do Cliente</h1>
    
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST["senha"]);
        
        
        $databaseUrl = getenv("DATABASE_URL");
        
        
        $conexao = pg_connect($databaseUrl);
        
        
        pg_query_params(
            $conexao,
            "INSERT INTO usuarios (email_usuario, senha_usuario) VALUES ($1, $2)",
            array($email, $senha)
        );
        
        
        echo "<p><strong>Cadastro realizado com sucesso!</strong></p>";
    }
    ?>
    
    <form method="POST"> 
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
