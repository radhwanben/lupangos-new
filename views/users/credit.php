
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lupangos | buy credit</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
    rel="stylesheet"
    />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@400;600;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    
    
        <style>
            body{
                font-family: 'Open Sans';
                font-weight: bold;
            }
            .brd:hover{
              border: 1px solid blue !important;
              border-radius: 4px;
            }
        </style>
</head>
<body>
<?php
include '././includes/navbarauth.php';

?>
<div class="container ">

  <div class="position-relative mt-5">
      <h5 class="position-absolute top-0 start-0 fw-bolder">Acheter des crédits</h5>
      <h5 class="position-absolute top-0 end-0 fw-bolder">Votre solde de crédits: <span class="text-primary">0 FCFA </span> </h5>
  </div>
  <br>
  <p class="mt-4">Maitrise votre budget et gagnez du temps: payez et consultez tous les titres foncier <br> gràce à vous crédits!</p>
  <br>

  <form action="">
    <div class="row">
        <div class="col-md-3" >
          <div class="card brd">
            <div class="card-body text-center ">
                <input type="radio">
              <p class="card-text fw-bolder fs-3 " style="display: contents;">100 000 CFA </p>
              <p style="margin-bottom: 0px;">80 € </p>
            </div>
            <div class="py-3 text-center fs-5" style="background: #c9c9c975 !important">+ 10 000 CFA 20 € offerts</div>
          </div>
        </div>

        <div class="col-md-3" >
            <div class="card brd">
              <div class="card-body text-center ">
                  <input type="radio">
                <p class="card-text fs-3 " style="display: contents;">50 000 CFA </p>
                <p style="margin-bottom: 0px;">35 € </p>
              </div>
            </div>
        </div>



        <div class="col-md-3" >
            <div class="card brd" >
              <div class="card-body text-center ">
                  <input type="radio">
                <p class="card-text fs-3 " style="display: contents;">20 000 CFA </p>
                <p style="margin-bottom: 0px;">15 € </p>
              </div>
            </div>
        </div>


        <div class="col-md-3" >
            <div class="card brd" >
              <div class="card-body text-center ">
                  <input type="radio">
                <p class="card-text fs-3  " style="display: contents;">7 000 CFA </p>
                <p style="margin-bottom: 0px;">160 € </p>
              </div>
            </div>
        </div>


      </div>

      <p class="mt-4 mb-2 fw-normal">Les montants des cérdits sont indiqués en TTC</p>
      <input type="checkbox" class="mx-2" >
      <p class="fw-bolder" style="display: contents; font-size: 0.9em;">Je reconnais avoir lu accepté les <a href="">Conditions Générales de Vente</a> (nos CGV ont évolué, n’hésitez pas à les consulter) et renonce à mon droit de rétractation. En validant ma commande j’accepte le commencement immédiat de la prestation.</p>
      <br>
      <a href="/payment" class="btn btn-primary mt-4 px-5 shadow-none" >Valider</a>
  </form>




</div>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<br>
<br>
<?php
include '././includes/footer.php';

?>
</body>
</html>