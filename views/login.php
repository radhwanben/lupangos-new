<?php

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
            .bonjour{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */

                text-align: center;
                letter-spacing: 0.15px;
            }
            .txt{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                align-items: center;
                text-align: center;
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
            <h2 class="mt-4 bonjour">Bonjour !</h1>
            <p class="txt">Connecter-vous pour découvrir toutes <br> nos fonctionnalités</p>

            <form action="/login" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="email"  name="email"  id="form1Example1" class="form-control" required />
                <label class="form-label" for="form1Example1">Email </label>
                </div>
            
                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" id="form1Example2" name="password" class="form-control" required />
                <label class="form-label" for="form1Example2">Mot de passe</label>
                </div>
            

            
                <!-- Submit button -->
                <input type="submit" class="btn btn-primary btn-block shadow-none" name="btn-login" value="Se Connecter" />
                                <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                
            
                        <div class="justify-content-center text-center mt-4">
                            <!-- Simple link -->
                          <p>Envie de nous rejoindre ?  <a href="/app/register">Créer un compte</a> </p>  
                        </div>
                    </div>
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