<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
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
        <link rel="stylesheet" href="view/pages/reservar/reservar.css"> <!-- Importação da folha de estilo da página específica -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/l10n/id.js"></script>
    </head>
<body>
<header>
            <div class="header-section logo">
                <a href="index.php"><img src="view/base/imgs/logo2.svg" alt="" class="hotel-logo"></a>
            </div>
            <div class="header-section logo">
            </div>
            <div class=" header-section profile">
                <div id="cadastroLogin">
                        <div class="perfil-id">
                            <p class="perfil-nome"><?php echo $_SESSION['username']; ?></p>
                            <a href="#" class="display-picture"><i class="bi bi-person-circle icone-perfil"></i></a>

                        </div>
                        <!--TOGGLE MENU-->
                        <div class="card hidden">
                            <ul>
                                <li><a href="#">Perfil</li></a>
                                <li><a href="#">Conta</li></a>
                                <li><a href="#">Configurações</li></a>
                                <li><a href="#">Sair</li></a>
                            </ul>
                        </div>
                </div>
            </div>
        </header>
        <main>	
            <div class="card">
    
                <!--Card image-->
                <div class="view overlay">
                  <img class="card-img-top" src="view/base/imgs/reservas3.jpg" alt="Card image cap">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
            
                <!--Card content-->
                <div class="card-body">
                    <form class="reservar">
                        <div class="form-group location">
                            <label for="hotel">Hotel:</label>
                            <select id="cars" name="hotellist" form="reservar">
                                <option value="" disabled selected hidden>Escolha um hotel</option>
                                <option value="fasano">Fasano Angra</option>
                                <option value="mercure">Mercure Angra</option>
                            </select>
                        </div>
                        <div class="form-group check-in">
                            <label for="check-in">Check-in</label>
                            <input type="text" name="check-in" id="check-in" class="form-input" placeholder="Data de Entrada">
                        </div>
                        <div class="form-group check-out">
                            <label for="check-out">Check-out</label>
                            <input type="text" name="check-out" id="check-out" class="form-input" placeholder="Data de Saída">
                        </div>
                        <div class="form-group reservas-botoes">
                            <button type="reset" class="btn btn-primary reservas-botao">Limpar</button>
                            <button type="submit" class="btn btn-primary reservas-botao">Reservar</button>
                        </div>
                      </form>
                </div>
            </div>
        </main>
    </body>
    <script src="view/base/base.js"></script>
    <script src="view/pages/reservar/reservar.js"></script>
</body>
</html>