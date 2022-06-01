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
                background: #F5F5F5;
            }
            .title{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600 !important;
                font-size: 30px;
                line-height: 49px;
                /* identical to box height */

                text-align: center;
                letter-spacing: 0.15px;

                color: #000000;
            }
            .upload{
                width:100px;
                position:relative;
            }
            .upload .round{
                position :absolute;
                bottom:0;
                right:0;
                background:rgb(173, 171, 171);
                width:32px;
                height:32px;
                line-height:33px;
                overflow:hidden;
                border-radius:50%;
                text-align:center;
            }
            .upload .round input[type='file']{
                position: absolute;
                transform:scale(2);
                opacity:0;
            }
            input[type=file]::-webkit-file-upload-button{
                cursor:pointer;
            }
            .round{
              height: 100% !important;
              width: 100% !important;
              opacity:0%;
             
            }
            img{
              width:100px !important;
               
            }
            .w{
              display: flex;
            }
            .check{
              display: contents;
              font-family: 'Open Sans';
              font-style: normal;
              font-weight: 400 !important;
              font-size: 16px;
              line-height: 22px;
              /* identical to box height */

              display: flex;
              align-items: center;
              letter-spacing: 0.15px;

              color: #000000;
            }
            .chaque{
              font-family: 'Open Sans';
              font-style: normal;
              font-weight: 400 !important;
              font-size: 17px;
              line-height: 25px;
              /* identical to box height */



              letter-spacing: 0.15px;

              color: #000000;
            }
            .title2{
              font-family: 'Open Sans';
              font-style: normal;
              font-weight: 610 !important;
              font-size: 16px;
              line-height: 25px;
              /* identical to box height */

              display: flex;
              align-items: center;
              letter-spacing: 0.15px;

              color: #000000;
            }
            #annuler{
              background: #C4C4C4;
              border-radius: 4px !important;
              color:#fff;
              margin-right: 14px;
            }
            #annuler:hover{
              background: #a3a3a3;
              border-radius: 4px !important;
              color:#fff;
            }
            #modif{
              background: #3782E8;
              border-radius: 4px !important;
              color:white;
            }
            .modif:hover{
              background: #2e7deb;
              border-radius: 4px !important;
              color:white;
            }
            .mt{
              padding-top:29px!important;
            }
            
        </style>
</head>
<body>
<?php
include '././includes/navbarauth.php';

?>
<div class="container ">

<h3 class=" mt-5 text-center title">Gagnez de l’argent gràce à votre titre foncier</h3>
<p class="chaque text-center">Chaque fois qu'un client consulte votre titre gagnez 1000 FCFA</p>


<div class="container">
    <div class="card rounded-2 ">
        <div class="row">
            <div class="col-md-4 px-4 py-3">
                <p class="title2">Ajouter une nouveau terrain</p>
                <form>
                    <!-- text input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form1Example1" class="form-control" />
                      <label class="form-label" for="form1Example1">Nom prénom du propriétaire</label>
                    </div>
                  
                    <!-- text input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form1Example2" class="form-control" />
                      <label class="form-label" for="form1Example2">Référence du titre foncier</label>
                    </div>
                     <!-- text input -->
                     <div class="form-outline mb-4">
                        <span class=" trailing"> m2</span>
                         <input type="text" id="form1Example2" class="form-control" />
                         <label class="form-label" for="form1Example2">Surface du terrain</label>
                     </div>
                     <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Terrain bàti</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Terrain bàti</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Terrain bàti</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Terrain bàti</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     
                     <div class="form-outline mb-4">
                       <input class="form-control" type="file" id="formFileMultiple" multiple />
                    </div>
                    <p class="title2  mt">Modifiez le titre et la description</p>
                    <div class="form-outline mb-4">
                        <input type="text" id="form16" class="form-control"  />
                        
                        <label class="form-label" for="form16">Titre de l’annonce</label>
                        <div class="form-helper px-3 ">*champ requis</div>
                    </div>
                     
                  
              
                  
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
               
        </div>
        <div class="px-3">
                 <!-- Message input -->
                 <div class="form-outline mb-4">
                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                    <label class="form-label" for="form6Example7">Description de l’annonce</label>
                    <div class="form-helper px-3">*champ requis</div>
                </div>
        </div> 
        <div class="row">
            <div class="col-md-4 px-4">
                <p class="title2 mt">Modifiez le prix</p>
                     <!-- text input -->
                     <div class="form-outline mb-4">
                        <span class=" trailing"> FCFA</span>
                         <input type="text" id="form1Example2" class="form-control" />
                         <label class="form-label" for="form1Example2">Prix</label>
                     </div>
            </div>
        </div>  
        <!--Form Images-->
        <div class="row">
          <div class="col-md-12 px-4">
              <p class="title2 mt">Modifiez ou ajoutez des photos</p>
                <div class="w">   
                  <div class="upload">
                      <img src="./assets/img/cam.png" width="100" height="100">
                      <div class="round">
                          <input type="file" id="upload_file" onchange="getImagePreview(event) ">
                          <i class="fas fa-plus text-white"></i>
                      </div>
                  </div>
                  <div id="preview"></div>
                </div>    
          </div>
      </div>  
      <div class="p-3">
         <!-- Checkbox -->
         <div class="form-check d-flex ">
          <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
          <label class="form-check-label check" for="form5Example3">
            <p class="check">Souscrire au Pack 7 photos supplémentaires pour <span class="fw-bolder mx-1">5 000 CFA </span> 10.00 €  </p>
            
          </label>
          
         </div>
         <a href="" class="">En savoir plus</a>
    
      </div>
      
      
      <div class="p-3">
        <p class="title2">Modifiez la localisation</p>
      </div>

      <div class="buttons p-3 d-flex flex-row-reverse">

        <input id="modif" type="submit" class="btn shadow-none " value="Valider les modifications" />
        <a href="/dashbord" id="annuler" class="btn shadow-none ">Annuler</a>
      </div>

    </form>
    </div>
</div>
  




</div>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<script type="text/javascript" >
  function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    newimg.src=image;
    imagediv.appendChild(newimg);
  }

  
</script>
</body>
</html>