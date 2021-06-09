<?php
include("../model/conexao.php");
include("../model/classcrud.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Gerador de personas</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/aos.css">
   <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <!-- MAIN CSS -->
   <link rel="stylesheet" href="../assets/css/templatemo-digital-trend.css">
   <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
   <!-- MENU BAR -->
   <nav class="navbar navbar-expand-lg">
      <div class="container">
         <a class="navbar-brand" href="../index.php">
            <i class="fa fa-line-chart"></i>
            IT Solutions
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a href="#" class="nav-link contact">Personas cadastradas</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- HERO -->
   <div class=" justify-content-center align-items-center titulo-consulta">
      <h1 class="titulo-consulta" data-aos="fade-up">Personas cadastradas</h1>
   </div>
   <section class="table-view">
      <table class="table">
         <thead>
            <tr>
               <th scope="col">Avatar</th>
               <th scope="col">Nome</th>
               <th scope="col">Profissão</th>
               <th scope="col">Ações</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $Crud = new classcrud();
            $BFetch = $Crud->selectDB("*", "persona", "", array());
            while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            ?>
               <tr>
                  <th scope="row" class="thumb-consulta"><img class="img-thumbnail" src="<?php echo $Fetch['avatar'] ?>"></th>
                  <td class="info-consulta"><?php echo $Fetch['nome'] ?></td>
                  <td class="info-consulta"><?php echo $Fetch['profissao'] ?></td>
                  <td class="td-button info-consulta">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id_venda_<?php echo $Fetch['id'] ?>">Visualizar</button>
                     <button type="button" class="btn btn-danger Deletar" href="<?php echo "../control/ctr-deletar-persona.php?id={$Fetch['id']}"; ?>">Deletar</button>
                  </td>
                  <!-- The Modal -->
                  <div class="modal" id="id_venda_<?php echo $Fetch['id'] ?>">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <!-- Modal Header -->
                           <div class="modal-header">
                              <h4 class="modal-title"><?php echo $Fetch['nome'] ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <!-- Modal body -->
                           <div class="modal-body">
                              <?php
                              $Crud = new classcrud();
                              $Persona = $Crud->selectDB("*", "persona", "where id = '" . $Fetch['id'] . "'", array());
                              $Fetch1 = $Persona->fetch(PDO::FETCH_ASSOC);
                              ?>
                              <div>
                                 <img class="avatar-modal" src="<?php echo $Fetch1['avatar'] ?>">
                                 <p>Profissão:<?php echo $Fetch1['profissao'] ?></p>
                                 <p>Idade:<?php echo $Fetch1['idade'] ?></p>
                                 <p>Gênero:<?php echo $Fetch1['genero'] ?></p>
                                 <p>Salário: R$<?php echo $Fetch1['idade'] ?></p>
                                 <p>Hobbies:<?php echo $Fetch1['hobbie'] ?></p>
                                 <p>Bairro:<?php echo $Fetch1['bairro'] ?></p>
                                 <p>Cidade:<?php echo $Fetch1['cidade'] ?></p>
                                 <p>Estado:<?php echo $Fetch1['estado'] ?></p>
                              </div>
                           </div>
                           <!-- Modal footer -->
                           <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </tr>
            <?php
            }
            ?>
         </tbody>
      </table>
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
   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/aos.js"></script>
   <script src="../assets/js/owl.carousel.min.js"></script>
   <script src="../assets/js/smoothscroll.js"></script>
   <script src="../assets/js/custom.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script>
      /* confirmar antes de deletar*/

      $('.Deletar').on('click', function(event) {
         event.preventDefault();
         var Link = $(this).attr('href');
         if (confirm("Deseja mesmo apagar esse dado?")) {
            window.location.href = Link;
         } else {
            return false;
         }
      });
   </script>
</body>

</html>