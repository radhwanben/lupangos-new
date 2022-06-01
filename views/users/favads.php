
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lupangos | saved ads</title>
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
            *{
                font-family: 'Open Sans';
            }
            .camera{
                background: #161616;
            padding: 3px 6px;
            opacity: 0.8;
            border-radius: 11px;
            }
            .pt{
                color: #848484;
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 20px;
                margin-bottom:20px;
            }
            .pb{
                margin-bottom:0;
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 15px;
                color: #848484;
                
            }
            .title{
                font-family: 'Open Sans';
                font-style: normal;
                letter-spacing: 0.15px;
                font-size: 27px;
                line-height: 49px;
                margin-top:25px;
            }
            .ft{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 25px;
                margin-bottom:0;
                margin-top:15px;
            }
            .fb{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                letter-spacing: 0.15px;
                margin-top:10px;
            }
            @media only screen and (max-width: 1000px) {
                .tcard{
                   height:400px;
                   
                }
                .rowpad{
                    padding: 10px;
                }
            }
        </style>
</head>
<body>
<?php
include '././includes/navbarauth.php';

?>
    <div class="container">
        <h2 class="text-center fw-bolder title">Annonces sauvegardées</h2>
        <p class="fw-bolder ft">Retrouvez vos annonces sauvegardées sur tous vos appareils</p>
        <p class="fb">Si l’annonce n’est plus active sur le site, elle disparaitra automatiquement de votre sélection.</p>
        <div class="card mb-3 shadow-sm mt-5 rounded-1"  >
            <div class="row rowpad">
                <div style="background-image: url('https://mdbootstrap.com/img/new/standard/city/041.jpg');   background-repeat: no-repeat; background-size: 100% 100%;" class=" tcard col-md-3 rounded-start position-relative ">
                    <div class=" position-absolute bottom-0 end-0 py-2 px-3 ">
                        <div class="camera"> <a class="fw-bolder text-white " href=""><i class="fas fa-camera"></i> 3</a> </div>
                    </div>
                </div>
                <div class="col-md-6">
                 <h6 class="fw-bolder mt-2">Colocation étudiante à Cergy Préfecture</h6>
                 <p class="pt">480 €</p>
                 <p class="pb">Colocations</p>
                 <p class="pb">Viarmes 95270</p>
                 <p class="pb">23 avr 15:22</p>
                </div>
                <div class="col-md-3">
                    <button type="button" class="w-100 my-2 btn btn-outline-danger" data-mdb-ripple-color="dark">Signaler un terrain litigieux</button>
                    <button type="button" class="w-100 my-2 btn btn-outline-primary" data-mdb-ripple-color="dark">Envoyer un message</button>
                    <button type="button" class="w-100 my-2 btn btn-outline-dark" data-mdb-ripple-color="dark">Supprimer l’annonce</button>
                </div>
            </div>
        </div>  
    </div>








    <!-- MDB -->
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