<?php
include("./model/conexao.php");
include("./model/classcrud.php");
include("./model/variaveis.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <title>Gerador de personas</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/aos.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!-- MAIN CSS -->
   <link rel="stylesheet" href="assets/css/templatemo-digital-trend.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <!-- Nav bar -->
   <nav class="navbar navbar-expand-lg">
      <div class="container">
         <a class="navbar-brand" href="index.php">
            <i class="fa fa-line-chart"></i>
            IT Solutions
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a href="../persona/views/consulta.php" class="nav-link contact">Personas cadastradas</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- Hero -->
   <section class="hero hero-bg d-flex justify-content-center align-items-center">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
               <div class="hero-text">
                  <h1 class="text-white" data-aos="fade-up">Gere suas personas de maneira <strong>rápida</strong> e <strong>eficiente</strong>
                  </h1>
                  <a href="#about" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Iniciar!</a>
               </div>
            </div>
            <div class="col-lg-6 col-12">
               <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                  <img src="assets/images/team-work-rafiki2.png" class="img-fluid img-hero" alt="working girl">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Conteúdo principal -->
   <section class="about section-padding pb-0" id="about">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 mx-auto col-md-10 col-12">
               <div class="about-info">
                  <h2 class="mb-4" data-aos="fade-up">O mais prático<strong> Gerador de personas</strong> disponível!</h2>
               </div>
               <div class="about-image" data-aos="fade-up" data-aos-delay="200">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Form-->
   <section class="form" id="">
      <form method="POST" action="/persona/control/ctr-cadastro-persona.php">
         <h3 class="titulo-avatar">Para começar, selecione um avatar que represente sua persona!</h3>
         <div class="form-row avatar-persona">
            <div class="form-check form-check-inline form-group col-md-2">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="https://i.ibb.co/s3YTFNW/avatar1.png" required>
               <label class="form-check-label" for="inlineRadio1"><img src="https://i.ibb.co/s3YTFNW/avatar1.png" class="img-thumbnail" alt="Avatar1"></label>
            </div>
            <div class="form-check form-check-inline form-group col-md-2">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="https://i.ibb.co/xzrZsHJ/avatar2.png" required>
               <label class="form-check-label" for="inlineRadio2"><img src="https://i.ibb.co/xzrZsHJ/avatar2.png" class="img-thumbnail" alt="Avatar2"></label>
            </div>
            <div class="form-check form-check-inline form-group col-md-2">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="https://i.ibb.co/fFyqJ6L/avatar3.png">
               <label class="form-check-label" for="inlineRadio3"><img src="https://i.ibb.co/fFyqJ6L/avatar3.png" class="img-thumbnail" alt="Avatar3"> </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-2">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="https://i.ibb.co/p012xKX/avatar4.png">
               <label class="form-check-label" for="inlineRadio4"><img src="https://i.ibb.co/p012xKX/avatar4.png" class="img-thumbnail" alt="..."> </label>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
               <label for="personaname">Nome da persona</label>
               <input type="text" class="form-control" id="personaname" name="nome" required>
            </div>
            <div class="form-group col-md-3">
               <label for="personayearold">Idade</label>
               <input type="text" class="form-control" id="personayearold" name="idade" required>
            </div>
            <div class="form-group col-md-3">
               <label for="personacountry">Gênero</label>
               <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genero" required>
                  <option selected>Selecione</option>
                  <option value="M">M</option>
                  <option value="F">F</option>
               </select>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
               <label for="personajob">Profissão</label>
               <input type="text" class="form-control" id="personajob" name="profissao" required>
            </div>
            <div class="form-group col-md-6">
               <label for="personasalary">Salário</label>
               <input type="text" class="form-control" id="personasalary" name="salario" required>
            </div>
         </div>
         <div class="form-group">
            <label for="personahobbie">Hobbies</label>
            <textarea class="form-control" id="personahobbie" rows="4" placeholder="Ex: Jogar bolar, ver seriados, ler livros, etc" name="hobbie" maxlength="500" required></textarea>
         </div>
         <div class="form-row">
            <div class="form-group col-md-5">
               <label for="personadistrict">Bairro</label>
               <input type="text" class="form-control" id="personadistrict" name="bairro" required>
            </div>
            <div class="form-group col-md-5">
               <label for="personacity">Cidade</label>
               <input type="text" class="form-control" id="personacity" name="cidade" required>
            </div>
            <div class="form-group col-md-2">
               <label for="personacountry">Estado</label>
               <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="estado" required>
                  <option selected>Selecione</option>
                  <option>AC</option>
                  <option>AL</option>
                  <option>AP</option>
                  <option>AM</option>
                  <option>BA</option>
                  <option>CE</option>
                  <option>DF</option>
                  <option>ES</option>
                  <option>GO</option>
                  <option>MA</option>
                  <option>MT</option>
                  <option>MS</option>
                  <option>MG</option>
                  <option>PA</option>
                  <option>PB</option>
                  <option>PR</option>
                  <option>PE</option>
                  <option>PI</option>
                  <option>RJ</option>
                  <option>RN</option>
                  <option>RS</option>
                  <option>RO</option>
                  <option>RR</option>
                  <option>SC</option>
                  <option>SP</option>
                  <option>SE</option>
                  <option>TO</option>
               </select>
            </div>
         </div>
         <button type="submit" class="btn btn-primary">Cadastrar!</button>
      </form>

   </section>
   <!--Footer-->
   <footer class="site-footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
               <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Criando <strong>soluções</strong> para seu negócio.</h1>
            </div>
            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
               <h4 class="my-4">Contate-nos</h4>
               <p class="mb-1">
                  <i class="fa fa-phone mr-2 footer-icon"></i>
                  +55 71 999 999 999
               </p>
               <p>
                  <a href="#">
                     <i class="fa fa-envelope mr-2 footer-icon"></i>
                     contato@itsolution.com
                  </a>
               </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
               <h4 class="my-4">Nosso endereço:</h4>
               <p class="mb-1">
                  <i class="fa fa-home mr-2 footer-icon"></i>
                  Av. Santos Dumont - 000, Salvador - BA, Brasil
               </p>
            </div>
            <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
               <p class="copyright-text">Copyright &copy; 2021 IT Solutions
               </p>
            </div>
            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
               <ul class="social-icon">
                  <li><a href="#" class="fa fa-instagram"></a></li>
                  <li><a href="#" class="fa fa-twitter"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   <!-- SCRIPTS -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/aos.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/smoothscroll.js"></script>
   <script src="assets/js/custom.js"></script>
</body>

</html>