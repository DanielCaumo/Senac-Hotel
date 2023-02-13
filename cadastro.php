<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Importação das folhas de estilo -->
    <link rel="stylesheet" href="view/base/base.css"> <!-- Importação da base deve ser feita em todas as páginas para aplicar todos os padrões do projeto (estilos de header, botões, variáveis de cor...) -->
    <link rel="stylesheet" href="view/pages/index/index.css"> <!-- Importação da folha de estilo da página específica -->
</head>


<body>
    <?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='texto-cadastro'>
<h3>Cadastro feito com sucesso</h3>
<br/>Faça o login <a href='login.php' class='botao-cadastro'>Login</a></div>";
        }
    } else {
    ?>
        <header>
            <div class="header-section logo">
                <a href="index.php"><img src="view/base/imgs/logo2.svg" alt="" class="hotel-logo"></a>
            </div>
            <div class="header-section">
            </div>
            <div class=" header-section profile">
                <div class="perfil-id">
                    <p class="perfil-nome">Cadastrar</p>
                    <a href="#" class="display-picture"><i class="bi bi-person-circle icone-perfil"></i></a>
                </div>
                <!--TOGGLE MENU-->
                <div class="card">
                    <ul class="paper">
                        <li>
                            <form name="registration" action="" method="post">
                                <div class="form-div">
                                    <label for="username" class="labels">Nome de usuário:</label>
                                    <input type="text" name="username" placeholder="Username" required />
                                </div>
                                <div class="form-div">
                                    <label for="email" class="labels">email:</label>
                                    <input type="email" name="email" placeholder="Email" required />
                                </div>
                                <div class="form-div">
                                    <label for="password" class="labels">Senha:</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                </div>
                                <div class="form-div">
                                    <input type="submit" name="submit" value="Register" />
                                </div>
                            </form>
                            <div class="texto-cadastro">
                            </div>
                        </li>
                    </ul>
                </div>
        </header>
    <?php } ?>

    <main>
        <div class="fullPageTwoBanners">
            <div class="banner banner-1">
                <div class="text-box papel">
                    <p class="estrelas">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <h2 class="hotel-nome">Hotel Fasano Angra</h2>
                    <p class="hotel-endereco">Rod. Gov. Mário Covas, Km 512 - Porto Frade</p>
                    <p class="hotel-endereco">Angra dos Reis - RJ - Brasil</p>
                    <p class="telefone"></p>
                    <p class="redes-sociais">
                        <a href="#"><i class="bi bi-envelope icone-card"></i></a>
                        <a href="#"><i class="bi bi-facebook icone-card"></i></a>
                        <a href="#"><i class="bi bi-instagram icone-card"></i></a>
                    </p>
                    <div class="botoes">
                        <a href="https://www.fasano.com.br/hoteis/fasano-angra-dos-reis" target="_blank" class="botao papel">Conhecer</a>
                        <button type="button" onclick="alert('É necessário cadastrar uma conta e estar logado para reservar um quarto')" ; class="botao papel">Agendar</a>
                    </div>
                </div>
            </div>
            <div class="banner banner-2">
                <div class="text-box papel">
                    <p class="estrelas">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <h2 class="hotel-nome">Hotel Mercure Angra</h2>
                    <p class="hotel-endereco"> Estr. das Marinas, 111 - Praia do Jardim</p>
                    <p class="hotel-endereco">Angra dos Reis - RJ - Brasil</p>
                    <p class="telefone"></p>
                    <p class="redes-sociais">
                        <a href="#"><i class="bi bi-envelope icone-card"></i></a>
                        <a href="#"><i class="bi bi-facebook icone-card"></i></a>
                        <a href="#"><i class="bi bi-instagram icone-card"></i></a>
                    </p>
                    <div class="botoes">
                        <a href="https://all.accor.com/hotel/B210/index.pt-br.shtml" target="_blank" class="botao papel">Conhecer</a>
                        <button type="button" onclick="alert('É necessário cadastrar uma conta e estar logado para reservar um quarto')" ; class="botao papel">Agendar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Importação dos scripts -->
    <script src="view/base/base.js"></script> <!-- Importação de um script que aplica funções padrões para todo o projeto (se existir) -->
    <script src="view/pages/index/index.css"></script> <!-- Importação de um script que aplica funções específicas para a página (se existir) -->

</body>

</html>