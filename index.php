<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inícial - Loja de Cupcakes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="menu">
    <header>
        <img src="imagens/LOGO1.jpg" alt="Logo da Loja de Cupcakes">
        <h1>Home</h1>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Início</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav> 
    </header>

    <main>
        <h2>Cardápio Completo</h2>
        <section class="best-sellers" id="cardapio-container">
            <section class="cupcakes">
                <section class="cupcake">
                    <img src="imagens/cupcake.jpg" alt="Cupcake de Chocolate">
                    <h3>Cupcake de Chocolate</h3>
                    <p>Delicioso cupcake de chocolate com cobertura de ganache.</p>
                    <p class="price">R$ 5,00</p>
                    <button onclick="window.location.href='cardapio.php';">Ver Cardápio</button>
                </section>
    
                <section class="cupcake">                
                    <img src="imagens/cupcake2.jpg" alt="Cupcake de Morango">
                    <h3>Cupcake de Morango</h3>
                    <p>Cupcake de morango com recheio de geleia de morango.</p>
                    <p class="price">R$ 5,00</p>
                    <button onclick="window.location.href='cardapio.php';">Ver Cardápio</button>
                </section>
    
                <section class="cupcake">
                    <img src="imagens/cupcake3.jpg" alt="Cupcake de Baunilha">
                    <h3>Cupcake de Baunilha</h3>
                    <p>Cupcake de baunilha com cobertura de chantilly.</p>
                    <p class="price">R$ 5,00</p>
                    <button onclick="window.location.href='cardapio.php';">Ver Cardápio</button>
                </section>
    
                <section class="cupcake">
                    <img src="imagens/cupcake4.jpg" alt="Cupcake Red Velvet">
                    <h3>Cupcake Red Velvet</h3>
                    <p>Cupcake red velvet com cream cheese frosting.</p>
                    <p class="price">R$ 5,00</p>
                    <button onclick="window.location.href='cardapio.php';">Ver Cardápio</button>
                </section>
            </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Loja de Cupcakes</p>
    </footer>
    <script src="js/carrinho.js"></script>
</body>
</html>