<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Loja de Cupcakes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="cadastro">
    <header>
        <img src="imagens/LOGO1.jpg" alt="Logo da Loja de Cupcakes">
        <h1>Cadastro - Loja de Cupcakes</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="cadastro.php" class="active">Cadastro</a></li> <!-- Link para a página de Cadastro -->
                <li><a href="login.php">Login</a></li> <!-- Link para a página de Login -->
            </ul>
        </nav>
    </header>z

    <main>
        <section class="cadastro-form">
            <h2>Cadastre-se</h2>
            <div class="formulario">
            <form action= "formulario_cadastro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" placeholder="Digite seu nome" id="nome" name="nome" >
                <br/>
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Digite seu e-mail" id="email" name="email" >
                <br/>
                <label for="senha">Senha:</label>
                <input type="password" placeholder="Digite sua senha" id="senha" name="senha" >
                <br/>
                <button type="submit" class="btn" name="cadastrar">Cadastrar</button>
                <br/>
                
            </form>
        </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Loja de Cupcakes</p>
    </footer>
</body>
</html>
