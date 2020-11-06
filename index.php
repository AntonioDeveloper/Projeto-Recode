<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Squad-8</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/style.css">
    </head>
<body>
   
<div class="container-fluid px-0">
    <video autoplay muted loop id="myVideo">
        <source src="./img/VID-20201102-WA0003.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video> 
    
    <!-- Transparência escura -->
    <div class="overlay"></div>

                <!-- Começo da nav-menu -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand text-light" href="#"><b>LOGO</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="#">Inicio<span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Cursos</a>
                            </li>
                    
                    <!-- começo do dropdown -->
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Entrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ação</a>
                                <a class="dropdown-item" href="#">Outra ação</a>
                                <a class="dropdown-item" href="#">Algo mais aqui</a>
                            </div>
                            </li>
                    </ul>
                </div>

                        <!--Fim do dropdown-->
            </nav>
                        <!-- Fim da Nav-menu -->

                    <!-- começo da parte do texto -->
            <div id="content" class="col-lg-6 col-md-6 col-sm-6">
            <h2>JUMP</h2>
            <p style="font-size:1.1rem;">Frase que resuma o projeto,mas que deixe claro sua intenção,proposta e quem queremos impactar.</p>
            </div>
                    <!-- fim da parte do texto -->
            


                    <!-- inicio do rodape -->
            <footer id="rodape">    
            <p>Copyright &copy; SQUAD-8 - Recode PRO - 2020</p>

                    <!-- fim do rodape -->
                    
        </footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>