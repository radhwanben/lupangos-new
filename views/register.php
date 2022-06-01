<?php

    include 'includes/header.php';
    include 'class/user.php';

    $user=new user();
    session_start();
    
    if($user->is_loggedin() !="")
    {
        $user->redirect('/dashbord');
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupangos | register </title>
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
              font-style: normal;
              font-weight: 400;
              font-size: 16px;
              line-height: 24px;
              /* identical to box height, or 150% */

              letter-spacing: 0.15px;

            }
        </style>
</head>
<body>
<?php

include './includes/navbar.php';

?>
<div class="container ">
    <div class="row text-center justify-content-center">
        <!-- <div class="col-md-4"></div> -->
        <div class="col-md-5 text-center mt-5">
        

            <form class="mt-5"  action="/register" method="POST">
                <!-- Username input -->
                <div class="form-outline ">
                    <input type="text" id=""   name="uname" class="form-control" required />
                    <label class="form-label" for="form1Example2">Nom d'utilisateur</label>
                    
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>



                <!-- Email input -->
                <div class="form-outline ">
                <input type="email" id="form1Example1" name="email" class="form-control" required />
                <label class="form-label" for="form1Example1">Email </label>
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                   <p class="fw-normal">*champ requis</p> 
                </div>
            
                <!-- Password input -->
                <div class="form-outline ">
                <input type="password" name="password" id="form1Example2" class="form-control" required />
                <label class="form-label" for="form1Example2">Mot de passe</label>
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>

                <!-- Password input -->
                <div class="form-outline ">
                    <input type="text"  name="phone" id="form1Example2" class="form-control" required/>
                    <label class="form-label" for="form1Example2">Télephone portable</label>
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>
            
                <div class="row mb-3">
                
            
                    <div class="text-start ">
                        <!-- Simple link -->
                      <p class="fw-normal">Connectez-vous ou créez un compte pour déposter votre annonce </p>  
                    </div>
                </div>
            
                <!-- Submit button -->
                <input type="submit" name="btn-signup" class="btn  btn-block shadow-none" style="background:#757575 !important; color:white;" value="Créer un compte" /> 
                             

            </form>




            <!-- MDB -->

        </div>
       <!--  <div class="col-md-4"></div> -->
    </div>
</div>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>

<?php

include './includes/footer.php';

?>
</body>
</html>