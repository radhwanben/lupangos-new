
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lupangos | messages</title>
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
            body{
                
                background: #efefef;
            }



.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 500px;
    overflow-y: scroll
}
.users{
    display: flex;
    flex-direction: column;
    max-height: 638px;
    overflow-y: scroll 
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto;
}
.mat-msg{
    background : #3781e83d !important;

}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}
.p{
    margin-bottom:0px;
}
.p1{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 22px;
    display: flex;
    align-items: center;
    letter-spacing: 0.15px;
}
.p2{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 19px;
    display: flex;
    align-items: center;
    letter-spacing: 0.15px;
}
.p3{
    font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
font-size: 11px;
line-height: 16px;
/* or 100% */

display: flex;
align-items: center;
letter-spacing: 0.75px;
}
.blue:hover{
    border-left : 4px solid #3782E8 !important;
    background : #3781e83d !important;
    


}
.msg{
    padding-left: 0px!important;
}
.action{
    margin: auto;
}
        </style>
</head>
<body >


<?php
include '././includes/navbarauth.php';

?>

    <!--Content-->

    <main class="content">
        <div class="container p-0">
    

    
            <div class="bg-white">
                <div class="row g-0">
                    <div class="col-12 col-lg-4  border-right users">
    
                        <div class="px-4 d-none d-md-block">
                            <div class="py-3">
                                <input type="checkbox">
                                <p style="display: contents; color:#848484;">Sélectionner</p>
                            </div>
                        </div>

                        <a href="#" class="list-group-item msg list-group-item-action border-0 blue ">
                            <!-- <div class="badge bg-success float-right">5</div> -->
                            <div class="d-flex align-items-start">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-5 mx-2" alt="Vanessa Tucker" width="60" >
                                    </div>
                                    <div class="col-7">
                                        <div class="flex-grow-1 ml-3">
                                            <p class="p p1">Nicolas</p>
                                            <p class="p p2">Nicolas</p>
                                            <p class="p p3">23 avr 15:22 / Bonsoir,</p>
                                        </div>
                                    </div>
                                    <div class="col-1 action">
                                        <button type="button" class="btn shadow-none btn-primary fw-bolder btn-floating">
                                           <!--  <i class="fas fa-magic"></i> -->
                                           1
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item msg list-group-item-action border-0 blue ">
                            <!-- <div class="badge bg-success float-right">5</div> -->
                            <div class="d-flex align-items-start">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-5 mx-2" alt="Vanessa Tucker" width="60" >
                                    </div>
                                    <div class="col-7">
                                        <div class="flex-grow-1 ml-3">
                                            <p class="p p1">Nicolas</p>
                                            <p class="p p2">Nicolas</p>
                                            <p class="p p3">23 avr 15:22 / Bonsoir,</p>
                                        </div>
                                    </div>
                                    <div class="col-1 action">
                                        <button type="button" class="btn shadow-none btn-primary fw-bolder btn-floating">
                                           <!--  <i class="fas fa-magic"></i> -->
                                           5
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item msg list-group-item-action border-0 blue ">
                            <!-- <div class="badge bg-success float-right">5</div> -->
                            <div class="d-flex align-items-start">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-5 mx-2" alt="Vanessa Tucker" width="60" >
                                    </div>
                                    <div class="col-7">
                                        <div class="flex-grow-1 ml-3">
                                            <p class="p p1">Nicolas</p>
                                            <p class="p p2">Nicolas</p>
                                            <p class="p p3">23 avr 15:22 / Bonsoir,</p>
                                        </div>
                                    </div>
                                    <div class="col-1 action">
                                        <button type="button" class="btn shadow-none btn-white text-gray fw-bolder btn-floating">
                                            <i class="fas fa-trash"></i>
                                           
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>





    
                        <hr class="d-block d-lg-none mt-1 mb-0">
                    </div>
                    <div class="col-12 col-lg-8 ">
                        <div class="py-2 px-4 border-bottom d-none d-lg-block">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative">
                                    <svg width="40" class="mx-2" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17" stroke="#848484"/>
                                        <circle cx="17.5" cy="13.125" r="7.15625" stroke="#848484"/>
                                        <path d="M5.80615 29.5312C7.97859 25.6357 12.3995 22.9688 17.5 22.9688C22.6005 22.9688 27.0215 25.6357 29.1939 29.5312" stroke="#848484"/>
                                        </svg>
                                        
                                </div>
                                <div class="flex-grow-1 pl-3">
                                    <strong>Nicolas</strong>
                                    <div class="text-muted small"><em>Typing...</em></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="position-relative">
                            <div class="chat-messages p-4">
    
                                <div class="chat-message-right pb-4">
                                    <div class="flex-shrink-1 bg-light rounded mat-msg py-2 px-3 mr-3">
                                       
                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                    </div>
                                </div>
    
                                <div class="chat-message-left pb-4">
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            
                                       Lorem ipsum dolored aspernatur ab excepturi asperiores?
                                    </div>
                                </div>
    
                                <div class="chat-message-right  mb-4">
                                    <div class="flex-shrink-1 bg-light mat-msg rounded py-2 px-3 mr-3">
                                       
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel ducimus modi! Maiores sit at mollitia soluta natus minima 
                                    </div>
                                </div>
                                <div class="chat-message-left pb-4">
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            
                                       Lorem ipsum dolored aspernatur ab excepturi asperiores?
                                    </div>
                                </div>
    
                             

    
                            </div>
                        </div>
    
                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type your message">
                                <button class="btn shadow-none" style="border: 1px solid #cdcdcd;"><svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.7201 11.2896L10.4073 22.545C9.61857 23.266 8.40235 23.2396 7.64566 22.485L4.15466 19.0036C3.36091 18.2121 3.37263 16.9228 4.18063 16.1459L17.306 3.52428C18.0904 2.76998 19.334 2.78128 20.1046 3.54971L21.8113 5.25175C22.6181 6.05632 22.5907 7.37136 21.7511 8.14165L10.1418 18.7927C9.50194 19.3797 8.51344 19.3591 7.89862 18.746V18.746C7.24906 18.0982 7.26507 17.0413 7.93395 16.4135L16.4307 8.43868" stroke="#848484" stroke-width="1.2" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--End Content-->
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