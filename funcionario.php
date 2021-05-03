<?php 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <!--RESPONSIVE-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      <!-- BOOTSTRAP 5.0 -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
      <!--BOOTSTRAP 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!--FAVICON FONT TITLE-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/coffe.png" type="image/x-icon">
    
    <title> <BR> CAFÉ ZIN</title>
</head>
<body>
      <!-- NAVEGAÇÃO -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#home"><img src="images/logos/header.gif" class="logoHeader"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Voltar a Pagina Inicial</a>
            </li>
          </ul>
        </div>
      </nav>


      <!-- SECTION SOBRE -->
     <section>
      <div class="d-flex" id="sobre">
        <div class="row flex-wrap func">
          <h1>Funcionários:</h1>
          <table class="table table-striped">
            <thead>
              <th>ID</th>
              <th>Nome</th>
              <th>Matricula</th>
              <th>Editar</th>
              <th>Deletar</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Tayanne</td>
                <td>012</td>
                <td>Editar</td>
                <td>Deletar</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
     </section>

      <!-- RODAPÉ -->
     <footer>
      <div class="d-flex flex-row p-2 bd-highlight justify-content-around align-items-center flex-wrap" id="contato">
          <div class="p-2 bd-highlight">
            <h6>REDES SOCIAIS</h6>
            <a href="/"><img src="images/instagram.png" alt="Instagram"> Instagram</a><br>
            <a href="/"><img src="images/facebook.png" alt="Facebook"> Facebook</a><br>
            <a href="/"><img src="images/youtube.png" alt="Youtube"> Youtube</a>
          </div> 

          <div class="p-2 bd-highlight">
              <img src="images/logos/footer.png" id="logo"/>
              <h6>
                Todos os Direitos Fictícios. <br>
                Programação WEB 2021.1
              </h6>
          </div>

          <div class="p-2 bd-highlight">
            <h6>FALE COM A GENTE</h6>
            <a href="/"> <img src="images/whatsapp.png" alt="contato whatsapp"> Clique aqui e envie um whatsapp</a> <br> <br>
            <a href="/"> <img src="images/email.png" alt="contato e-mail">Clique aqui e envie um e-mail</a>
          </div>
      </div>
     </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>