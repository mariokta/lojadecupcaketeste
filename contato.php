<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Loja de Cupcakes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="contact">
    <header>
        <img src="imagens/LOGO1.jpg" alt="Logo da Loja de Cupcakes">
        <h1>Contato</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="contato.php" class="active">Contato</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contato-form">            
                <h2>Fale Conosco</h2>            
                <form class="form" action="salva_mensagem.php" method="POST">
                    <br/>
                    <input type="text" placeholder="Nome" class="field" name="name" required>
                    <br/>
                    <input type="email" placeholder="E-mail" class="field" name="email" required>
                    <br/>
                    <input type="text" placeholder="Assunto do contato" class="field" name="assunto" required>
                    <br/>
                    <textarea placeholder="Digite seu texto aqui" class="field" name="message" rows="4" required></textarea>
                    <br/>
                    <button type="submit" class="btn" name="enviar">Enviar</button>
                    <button type="button" class="btn" onclick="resetForm()">Limpar</button>
            </form> 
            <script>
                function resetForm() {
                    document.querySelector(".form").reset();
                }
            </script>
        </section>

        <div class="contact-info">
            <img src="imagens/redes-sociais.jpg" alt="Ícone Redes Sociais">
        </div> 

        <div class="contact-details">
            <p>Para contato telefônico e WhatsApp, ligue ou envie mensagem para: <a href="tel:+551234567890">+55 (12) 3456-7890</a></p>
            <p>Instagram: <a href="https://www.instagram.com/mariosssousa/">https://www.instagram.com/mariosssousa/</a></p>
            <p>Facebook: <a href="https://www.facebook.com/mariosergio.silvasousa">https://www.facebook.com/mariosergio.silvasousa</a></p>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Loja de Cupcakes</p>
    </footer>
    <script src="js/carrinho.js"></script>
</body>

</html>
