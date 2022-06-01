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
    <title>lupangos |Forget password</title>
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
        <div class="col-md-5 text-center mt-5">
            <h2 class="mt-4 fw-bolder mt-5">Mot de passe oublié</h2>
            <p>Entrez l'adresse e-mail  associée à votre compte</p>

            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Email </label>
                </div>
            
               
            

            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block shadow-none">Continuer</button>
            </form>




            <!-- MDB -->

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