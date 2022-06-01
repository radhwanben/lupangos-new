<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1</title>
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
            .p{
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                letter-spacing: 0.15px;
            }
            .btnbg{
                background: #C4C4C4 !important;
            }
        </style>
</head>
<body>
<?php

include './includes/navbar.php';

?>
<div class="container ">
    <div class="row text-center justify-content-center mt-5">
        <!-- <div class="col-md-4"></div> -->
        <div class="col-md-6 text-center  mt-5">
            <h2 class="mt-4 fw-bolder mt-5">Enregister son titre foncier </h2>
            <h4 class="mt-4 fw-bolder mt-4">Bonjour!</h4>
            <p class="fw-normal  mt-3 p">Connectez-vous ou créez un compte <br> pour déposter votre annonce</p>
            <div class=" d-grid gap-2 d-md-block">
               <a href="/login"><button class="btn btn-primary shadow-none m-2"  type="button">Me connecter</button></a> 
               <a href="/register"><button class="btn btn-primary shadow-none m-2 btnbg" type="button">Créer un compte</button></a>
            </div>           

        </div>
       <!--  <div class="col-md-4"></div> -->
    </div>
</div>    
<br>
<br>
<br>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<?php

include './includes/footer.php';

?>
</body>
</html>