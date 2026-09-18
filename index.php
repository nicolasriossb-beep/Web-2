<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Dados do Cliente</h1>
    
   
    <form method="POST"> 
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars($_POST["email"]);
            echo "<p><strong>Email recebido:</strong> " . $email . "</p>";
        } 
        ?>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $senha = htmlspecialchars($_POST["senha"]);
            echo "<p><strong>Senha recebida:</strong> " . $senha . "</p>";
        } 
        ?>
        
        <!-- Campo para informar o e-mail -->
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        
        <!-- Botão para enviar o formulário -->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
