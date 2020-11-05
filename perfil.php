<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu Perfil - Novo Site</title>
    <link rel="stylesheet" type="text/css" href="css/perfil.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./js/funcoes.js"></script>
  </head>

  <body>
    <!-- Início do menu -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-lg-2 navbar navbar-expand-lg navbar-light d-flex 
        align-items-start">          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="col collapse navbar-collapse pt-2" id="navbarSupportedContent">           
          <ul class="navbar-nav mr-auto d-flex flex-column">
            <li class="nav-item mx-auto">
              <a href="index.php">
              <img src="./img/leao.png" alt="logo do site" width="100px" />
              </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="perfil.php">
                  <img class="avatar mb-2 mx-auto" src="./img/avatar.png"
                  alt="foto do usuário">
                  <span> Meu Perfil </span> </a>
            </li>
            <li class="nav-item mx-auto active">
                <a class="nav-link" href="cursos.php"> Cursos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="certificados.php"> Certificados </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="parceiros.php"> Parceiros </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="configuracao.php"> Configuração </a>
            </li>
          </ul>
          </div>
        </nav>
          <!-- Fim do menu -->
          
          <!-- Início da seção perfil -->
          <!-- Seção 1 -->
        <section class="container col-lg-9">
          <div style="border-bottom: 1px solid  #238b98; padding-bottom: 10px;">
            <form class="d-flex align-items-center mt-5">
                <div class="col-lg-3 d-flex justify-content-center">
                  <img src="./img/avatar.png" class="avatar-perfil" alt="perfil" />
                </div>
                
                <div class="col-lg-9">
                  <div class="row mb-3">
                    <div class="col-lg-3">
                      <input type="text" class="form-control form-grupo1" id="apelido" name="apelido">
                      <small for="apelido">Apelido:</small>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" class="form-control form-grupo1" id="nome" name="nome">
                      <small for="nome">Nome:</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <input type="text" class="form-control form-grupo1" id="data-nasc" name="data-nasc">
                      <small for="data-nasc">Data de Nascimento:</small>
                    </div>
                    <div class="col-lg-6">
                    <input type="text" class="form-control form-grupo1" id="sexo" name="sexo">
                    <small for="sexo">Sexo:</small>
                    </div>
                  </div>
                </div> 
            </form>  
         </div>
      </section>
                      <!-- Fim da seção perfil -->
          </div>
        </div>

    <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
