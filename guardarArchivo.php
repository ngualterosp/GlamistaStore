<?php

$archivo = fopen("archivos/emails.txt","a") or die ("Error");
$email=$_REQUEST['email'];
$nombre=$_REQUEST['nombre'];
$var = $nombre . "," . $email;
fwrite($archivo,$var);
fwrite($archivo,"\n");

 ?>

 <?php include('header.php'); ?>

 <!DOCTYPE html>




     <!-- ================ offer section start ================= -->
     <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
       <div class="container">
         <div class="row">
           <div class="col-xl-5">
             <div class="offer__content text-center">
               <h3>Ya estas suscrito a nuestros clientes</h3>
                 <div><h2></h2>
                 <h3> Bienvenido</h3> </div>

                 <li class="nav-item"><a class="button button-header" href="index.php">Volver</a></li>
             </div>
           </div>
         </div>
       </div>
     </section>
     <!-- ================ offer section end ================= -->




 <?php include('footer.php'); ?>
