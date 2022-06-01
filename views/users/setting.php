<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupangos | dashboard | settings</title>
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
                background: #d5d5d538;
            }
            *{
                font-family: 'Open Sans';
            }
            #btnbg{
                background: rgb(173 171 171);
            }
        </style>
</head>
<body>
   

 <?php
include '././includes/navbarauth.php';

?>

<div class="container bg-white mt-5 p-4">
  <h4 class="fw-bolder">Paramétres</h4>
  <h6 class="fw-bolder">Informations de compte</h6>

    <form action="">
       <div class="form-check form-check-inline mt-4">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
        <label class="form-check-label fw-normal" for="inlineRadio1">Monsieur</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
        <label class="form-check-label" for="inlineRadio2">Madame</label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"  />
        <label class="form-check-label" for="inlineRadio3">Société</label>
      </div>


        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4 mt-2">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Nom (du dirigeant pour les sociétés)</label>
                </div>
                <div id="textExample1" class="form-text px-4">
                    *champ requis
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" />
                    <label class="form-label" for="form6Example2">Prénom (du dirigeant pour les sociétés)</label>
                </div>
                <div id="textExample1" class="form-text px-4">
                    *champ requis
                </div>
            </div>
            
            
        </div>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4 mt-2">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Téléphone (du dirigeant pour les sociétés)</label>
                </div>
                <div id="textExample1" class="form-text px-4">
                    *champ requis
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" />
                    <label class="form-label" for="form6Example2">Numéro de patente </label>
                </div>
                <div id="textExample1" class="form-text px-4">
                    *champ requis
                </div>
            </div>
            
            
        </div>
        <input type="submit" id="btnbg" class="btn  mt-3 shadow-none text-white" value="Enregister les modifications" >
        

    </form>

        <h6 class="mt-4 fw-bolder">E-mail</h6>
        <form action="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4 mt-2">
 
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">philippe.olympe@gmail.com </label>
                    </div>
                    <div id="textExample1" class="form-text px-4">
                        *champ requis
                    </div>



                    <h5 class="mt-4 fw-bolder">Documents</h5>
                    <h6 class="fw-bolder mt-3">Titre foncier </h6>

                    <div class="input-group">
                        <span class="input-group-text border-0">File 1</span>
                        <input type="file" id="form6Example2" class="form-control" />
                    </div>

                    <div class="input-group mt-4">
                        <span class="input-group-text border-0">File 2</span>
                        <input type="file" id="form6Example2" class="form-control" />
                    </div>



                    <h6 class="mt-4 fw-bolder">Piéce d’identité </h6>

                    <div class="input-group">
                        <span class="input-group-text border-0">File 1</span>
                        <input type="file" id="form6Example2" class="form-control" />
                    </div>

                    <h6 class="mt-4 fw-bolder">Autres documents </h6>

                    <div class="input-group">
                        <span class="input-group-text border-0">File 1</span>
                        <input type="file" id="form6Example2" class="form-control" />
                    </div>

                    <div class="input-group mt-4">
                        <span class="input-group-text border-0">File 2</span>
                        <input type="file" id="form6Example2" class="form-control" />
                    </div>


                    <input type="submit" id="btnbg" class="btn  mt-5 shadow-none text-white"  value="Enregister les modifications" >




                </div>
                
                
            </div>
        </form>    
        
</div>





    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>

<?php
include '././includes/footer.php';

?>

</body>
</html>