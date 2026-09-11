<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
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
        
        <!-- Campo para informar o e-mail -->
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <!-- Botão para enviar o formulário -->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
