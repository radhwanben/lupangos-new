
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupangos</title>
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
         font-size: 18px;
         line-height: 25px;
        }
        @media only screen and (max-width: 1000px) {
          .searchb{
               margin-top:15px ;
            } 
            .green{
              width: 100%;
              margin-top: 20px;
             }  
        }

       
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding:0px !important;">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand mx-3" href="/app/">
        <svg width="78" height="72" viewBox="0 0 78 72" style="width: 73px;"  fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.07953 67.8968C3.07953 69.5645 3.07953 70.4645 3.35747 70.7027C3.58247 70.9012 3.91335 70.9939 4.93247 70.9939C5.6207 70.9939 6.13688 70.9807 6.45453 70.6233C6.61335 70.4512 6.77217 70.0939 6.79864 69.8424C6.81188 69.7233 6.83835 69.6439 6.94423 69.6439C7.03688 69.6439 7.05011 69.7101 7.05011 69.8689C7.05011 70.0145 6.95747 70.9939 6.85158 71.3645C6.77217 71.6557 6.706 71.7218 6.031 71.7218C5.09129 71.7218 4.41629 71.6954 3.8207 71.6821C3.23835 71.6557 2.76188 71.6424 2.23247 71.6424C2.08688 71.6424 1.7957 71.6424 1.49129 71.6557C1.18688 71.6557 0.855997 71.6821 0.591291 71.6821C0.419232 71.6821 0.326585 71.6424 0.326585 71.5498C0.326585 71.4836 0.379526 71.4439 0.538349 71.4439C0.736879 71.4439 0.895703 71.4174 1.01482 71.391C1.27953 71.338 1.3457 71.0468 1.39864 70.6762C1.46482 70.1336 1.46482 69.1012 1.46482 67.8968V65.5939C1.46482 63.6086 1.46482 63.238 1.43835 62.8277C1.41188 62.3777 1.306 62.1792 0.882468 62.0865C0.776586 62.0601 0.617762 62.0468 0.445703 62.0468C0.300114 62.0468 0.220703 62.0204 0.220703 61.9277C0.220703 61.8351 0.31335 61.8086 0.511879 61.8086C1.1207 61.8086 1.95453 61.8483 2.29864 61.8483C2.61629 61.8483 3.56923 61.8086 4.07217 61.8086C4.25747 61.8086 4.35011 61.8351 4.35011 61.9277C4.35011 62.0204 4.2707 62.0468 4.11188 62.0468C3.96629 62.0468 3.75453 62.0601 3.60894 62.0865C3.25158 62.1527 3.1457 62.3777 3.11923 62.8277C3.09276 63.2512 3.09276 63.6086 3.09276 65.5939V67.8968H3.07953Z" fill="#010101"/>
            <path d="M8.51928 65.5939C8.51928 63.6086 8.51928 63.238 8.49281 62.8277C8.46634 62.3777 8.36045 62.1792 7.93693 62.0865C7.83104 62.0601 7.60604 62.0468 7.43398 62.0468C7.2884 62.0468 7.20898 62.0204 7.20898 61.9277C7.20898 61.8351 7.30163 61.8086 7.50016 61.8086C8.1884 61.8086 9.00898 61.8483 9.40604 61.8483C9.72369 61.8483 10.5443 61.8086 11.0075 61.8086C11.206 61.8086 11.2987 61.8351 11.2987 61.9277C11.2987 62.0204 11.2193 62.0468 11.0869 62.0468C10.9413 62.0468 10.8619 62.0601 10.7031 62.0865C10.3457 62.1527 10.2399 62.3777 10.2134 62.8277C10.1869 63.2512 10.1869 63.6086 10.1869 65.5939V67.4204C10.1869 69.313 10.5707 70.1071 11.206 70.6365C11.7884 71.1262 12.3972 71.1659 12.834 71.1659C13.4031 71.1659 14.1178 70.9807 14.634 70.4645C15.3487 69.7498 15.3884 68.5718 15.3884 67.2218V65.5939C15.3884 63.6086 15.3884 63.238 15.3619 62.8277C15.3355 62.3777 15.2296 62.1792 14.806 62.0865C14.7002 62.0601 14.4752 62.0468 14.3296 62.0468C14.184 62.0468 14.1046 62.0204 14.1046 61.9277C14.1046 61.8351 14.1972 61.8086 14.3825 61.8086C15.0443 61.8086 15.8649 61.8483 15.8781 61.8483C16.0369 61.8483 16.8575 61.8086 17.3605 61.8086C17.5457 61.8086 17.6384 61.8351 17.6384 61.9277C17.6384 62.0204 17.559 62.0468 17.4002 62.0468C17.2546 62.0468 17.1752 62.0601 17.0163 62.0865C16.659 62.1527 16.5531 62.3777 16.5266 62.8277C16.5002 63.2512 16.5002 63.6086 16.5002 65.5939V66.9968C16.5002 68.4527 16.3546 69.988 15.256 70.9277C14.3296 71.7218 13.3899 71.8674 12.5428 71.8674C11.8546 71.8674 10.5972 71.8277 9.64428 70.9674C8.98251 70.3718 8.47957 69.4057 8.47957 67.513V65.5939H8.51928Z" fill="#010101"/>
            <path d="M20.206 65.5939C20.206 63.6086 20.206 63.238 20.1796 62.8277C20.1531 62.3777 20.0472 62.1792 19.6237 62.0865C19.5178 62.0601 19.2928 62.0468 19.1208 62.0468C18.9752 62.0468 18.8958 62.0204 18.8958 61.9277C18.8958 61.8351 18.9884 61.8086 19.1869 61.8086C19.8752 61.8086 20.6958 61.8483 21.0663 61.8483C21.5958 61.8483 22.3634 61.8086 22.959 61.8086C24.5869 61.8086 25.1825 62.3512 25.3943 62.5498C25.6855 62.8277 26.0428 63.4101 26.0428 64.0983C26.0428 65.9512 24.6796 67.2615 22.8266 67.2615C22.7605 67.2615 22.6149 67.2615 22.5487 67.2483C22.4825 67.2351 22.3899 67.2218 22.3899 67.1292C22.3899 67.0233 22.4825 66.9836 22.7605 66.9836C23.4884 66.9836 24.5075 66.163 24.5075 64.8262C24.5075 64.3895 24.4678 63.5159 23.7399 62.8674C23.2634 62.4307 22.734 62.3645 22.4296 62.3645C22.231 62.3645 22.0325 62.3777 21.9266 62.4174C21.8605 62.4439 21.8208 62.5233 21.8208 62.6689V67.8968C21.8208 69.1012 21.8208 70.1336 21.8869 70.6895C21.9266 71.0601 22.006 71.338 22.3899 71.391C22.5752 71.4174 22.8663 71.4439 23.0516 71.4439C23.1972 71.4439 23.2634 71.4836 23.2634 71.5498C23.2634 71.6424 23.1575 71.6821 23.0119 71.6821C22.1516 71.6821 21.331 71.6424 20.9869 71.6424C20.6825 71.6424 19.8619 71.6821 19.3458 71.6821C19.1737 71.6821 19.081 71.6424 19.081 71.5498C19.081 71.4836 19.134 71.4439 19.2928 71.4439C19.4913 71.4439 19.6502 71.4174 19.7693 71.391C20.034 71.338 20.1002 71.0468 20.1531 70.6762C20.2193 70.1336 20.2193 69.1012 20.2193 67.8968V65.5939H20.206Z" fill="#010101"/>
            <path d="M28.637 68.3471C28.5708 68.3471 28.5443 68.3735 28.5179 68.4529L27.8164 70.2397C27.684 70.5706 27.6179 70.875 27.6179 71.0338C27.6179 71.2721 27.737 71.4441 28.1341 71.4441H28.3326C28.4914 71.4441 28.5311 71.4706 28.5311 71.55C28.5311 71.6559 28.4517 71.6824 28.3061 71.6824C27.8826 71.6824 27.3267 71.6427 26.9164 71.6427C26.7708 71.6427 26.0561 71.6824 25.3811 71.6824C25.209 71.6824 25.1296 71.6559 25.1296 71.55C25.1296 71.4706 25.1826 71.4441 25.2885 71.4441C25.4076 71.4441 25.5929 71.4309 25.6988 71.4177C26.2943 71.3382 26.5458 70.9015 26.8105 70.2397L30.0929 62.1397C30.2517 61.7559 30.3311 61.6235 30.4635 61.6235C30.5826 61.6235 30.662 61.7427 30.7943 62.0471C31.112 62.7618 33.2032 67.9897 34.037 69.975C34.5267 71.1529 34.9105 71.3382 35.1885 71.4044C35.387 71.4441 35.5855 71.4574 35.7311 71.4574C35.837 71.4574 35.9032 71.4706 35.9032 71.5632C35.9032 71.6691 35.784 71.6956 35.3076 71.6956C34.8311 71.6956 33.8782 71.6956 32.8458 71.6691C32.6076 71.6559 32.4488 71.6559 32.4488 71.5632C32.4488 71.4838 32.5017 71.4574 32.6341 71.4441C32.7267 71.4177 32.8193 71.2985 32.7532 71.1397L31.7076 68.4529C31.6811 68.3868 31.6414 68.3603 31.5752 68.3603H28.637V68.3471ZM31.2973 67.6985C31.3635 67.6985 31.3767 67.6588 31.3635 67.6191L30.1855 64.403C30.1723 64.35 30.1591 64.2838 30.1193 64.2838C30.0796 64.2838 30.0532 64.35 30.0399 64.403L28.8355 67.6059C28.8223 67.6588 28.8355 67.6985 28.8885 67.6985H31.2973V67.6985Z" fill="#010101"/>
            <path d="M37.981 69.9088C38.0075 70.9279 38.1795 71.272 38.4442 71.3647C38.6692 71.4441 38.9207 71.4573 39.1192 71.4573C39.2648 71.4573 39.3442 71.4838 39.3442 71.5632C39.3442 71.6691 39.2251 71.6955 39.0398 71.6955C38.1928 71.6955 37.6634 71.6558 37.4251 71.6558C37.306 71.6558 36.6972 71.6955 36.009 71.6955C35.8369 71.6955 35.7178 71.6823 35.7178 71.5632C35.7178 71.4838 35.7972 71.4573 35.9295 71.4573C36.1016 71.4573 36.3398 71.4441 36.5119 71.3911C36.856 71.2853 36.909 70.9014 36.9222 69.7764L37.0413 62.0867C37.0413 61.822 37.081 61.6367 37.2134 61.6367C37.3589 61.6367 37.4781 61.8088 37.7031 62.047C37.8619 62.2191 39.8472 64.3102 41.7531 66.2029C42.6398 67.0897 44.4001 68.9691 44.6251 69.1808H44.6913L44.5589 63.3176C44.5457 62.5235 44.4266 62.272 44.1089 62.1397C43.9104 62.0602 43.606 62.0602 43.4207 62.0602C43.2619 62.0602 43.209 62.0205 43.209 61.9411C43.209 61.8352 43.3545 61.822 43.5531 61.822C44.2281 61.822 44.8634 61.8617 45.1281 61.8617C45.2737 61.8617 45.7634 61.822 46.4119 61.822C46.5839 61.822 46.7163 61.8352 46.7163 61.9411C46.7163 62.0205 46.6369 62.0602 46.4781 62.0602C46.3457 62.0602 46.2398 62.0602 46.081 62.1C45.7104 62.2058 45.6045 62.4838 45.5913 63.2117L45.4457 71.4573C45.4457 71.7485 45.3928 71.8676 45.2737 71.8676C45.1281 71.8676 44.9692 71.722 44.8237 71.5764C44.0031 70.7955 42.3354 69.0882 40.9722 67.7382C39.5428 66.322 38.1001 64.7338 37.8619 64.4823H37.8222L37.981 69.9088Z" fill="#010101"/>
            <path d="M57.4103 70.8088C57.4103 71.1662 57.3971 71.1927 57.2383 71.2853C56.3912 71.7353 55.1074 71.8677 54.0883 71.8677C50.8853 71.8677 48.053 70.3588 48.053 66.7456C48.053 64.6544 49.1383 63.1985 50.3294 62.4706C51.5868 61.7162 52.7515 61.6235 53.8368 61.6235C54.7368 61.6235 55.8883 61.7824 56.153 61.8353C56.4309 61.8882 56.8809 61.9677 57.1853 61.9809C57.3442 61.9941 57.3706 62.0471 57.3706 62.1397C57.3706 62.2853 57.278 62.6427 57.278 64.2838C57.278 64.4956 57.2383 64.5618 57.1324 64.5618C57.0397 64.5618 57.0133 64.4956 57 64.3897C56.9603 64.0853 56.8942 63.675 56.55 63.3044C56.153 62.8809 55.1074 62.2853 53.6383 62.2853C52.9236 62.2853 51.9706 62.3382 51.0574 63.0927C50.3294 63.7015 49.853 64.6809 49.853 66.2956C49.853 69.1015 51.6397 71.2059 54.3927 71.2059C54.7368 71.2059 55.1868 71.2059 55.5044 71.0603C55.703 70.9677 55.7559 70.7956 55.7559 70.5706V69.3397C55.7559 68.6912 55.7559 68.1882 55.7427 67.8044C55.7294 67.3544 55.6103 67.1559 55.1868 67.0632C55.0809 67.0368 54.8559 67.0235 54.6839 67.0235C54.5647 67.0235 54.4853 66.9971 54.4853 66.9177C54.4853 66.8118 54.578 66.7853 54.7633 66.7853C55.4383 66.7853 56.2589 66.825 56.6559 66.825C57.0662 66.825 57.7544 66.7853 58.178 66.7853C58.35 66.7853 58.4427 66.8118 58.4427 66.9177C58.4427 66.9971 58.3633 67.0235 58.2706 67.0235C58.1647 67.0235 58.0721 67.0368 57.9133 67.0632C57.5559 67.1294 57.4236 67.3544 57.4236 67.8044C57.4103 68.2015 57.4103 68.7177 57.4103 69.3662V70.8088V70.8088Z" fill="#010101"/>
            <path d="M59.634 66.7456C59.634 64.5088 61.1032 61.6235 65.0208 61.6235C68.2767 61.6235 70.3017 63.5162 70.3017 66.5074C70.3017 69.4985 68.2105 71.8677 64.9017 71.8677C61.1429 71.8677 59.634 69.0618 59.634 66.7456ZM68.4752 66.9971C68.4752 64.0721 66.7943 62.2588 64.6502 62.2588C63.1546 62.2588 61.434 63.0927 61.434 66.3485C61.434 69.0618 62.9296 71.2191 65.4443 71.2191C66.3576 71.2059 68.4752 70.7691 68.4752 66.9971Z" fill="#010101"/>
            <path d="M72.4458 71.5235C72.234 71.4309 72.1943 71.3647 72.1943 71.0735C72.1943 70.3588 72.2473 69.578 72.2605 69.3662C72.2737 69.1677 72.3135 69.0221 72.4193 69.0221C72.5385 69.0221 72.5517 69.1412 72.5517 69.2471C72.5517 69.4191 72.6046 69.6971 72.6708 69.9088C72.962 70.875 73.7296 71.2324 74.537 71.2324C75.7149 71.2324 76.284 70.4382 76.284 69.75C76.284 69.1147 76.0855 68.5059 75.0002 67.6588L74.4046 67.1824C72.962 66.0574 72.4723 65.1441 72.4723 64.0853C72.4723 62.6427 73.6767 61.6235 75.4899 61.6235C76.337 61.6235 76.8929 61.7559 77.2238 61.8485C77.3429 61.875 77.409 61.9147 77.409 62.0074C77.409 62.1794 77.3561 62.55 77.3561 63.5691C77.3561 63.8603 77.3164 63.9662 77.2105 63.9662C77.1179 63.9662 77.0782 63.8868 77.0782 63.7279C77.0782 63.6088 77.012 63.2118 76.7341 62.8677C76.5355 62.6162 76.1649 62.2324 75.3046 62.2324C74.3385 62.2324 73.7561 62.7882 73.7561 63.5824C73.7561 64.178 74.0605 64.6412 75.1458 65.4618L75.5164 65.7397C77.0914 66.9309 77.6605 67.8309 77.6605 69.075C77.6605 69.8294 77.3693 70.7294 76.4296 71.3515C75.7811 71.775 75.0399 71.8809 74.3517 71.8809C73.5973 71.8677 73.0017 71.775 72.4458 71.5235Z" fill="#010101"/>
            <path d="M50.6208 13.3279C50.6075 13.4603 50.5943 13.6059 50.581 13.7382C50.5678 13.8573 50.5546 13.9764 50.5413 14.0956L50.5016 14.4794L50.4355 14.8632C50.2766 15.8691 49.9855 16.8617 49.6413 17.8147L49.3502 18.5294C49.2575 18.7676 49.1384 18.9926 49.0193 19.2309C48.9663 19.35 48.9134 19.4691 48.8472 19.5882C48.6619 19.9323 48.4634 20.2632 48.2649 20.5941C48.1193 20.8191 47.9737 21.0309 47.8281 21.2426L47.6031 21.5603L47.3516 21.8647C47.1928 22.0632 47.034 22.2617 46.8619 22.447C46.8487 22.4603 46.8487 22.4603 46.8487 22.4735L46.2928 23.0426C45.5119 23.7706 44.6384 24.4588 43.6457 24.9353C43.6193 24.9485 43.5796 24.9617 43.5531 24.9882C43.4605 25.0279 43.381 25.0809 43.2752 25.1206L42.8913 25.2794L42.1634 25.5573C41.8457 25.6632 41.5546 25.8088 41.2634 25.9676C40.8796 26.1926 40.5222 26.4706 40.1781 26.8014C39.5296 27.4367 39.0002 28.2573 38.5766 29.1706C38.5634 29.197 38.5502 29.2367 38.5369 29.2632C38.0869 30.2823 37.756 31.4206 37.5575 32.572C37.4913 32.9691 37.4384 33.3661 37.3987 33.7764C37.359 34.1735 37.3457 34.5706 37.3457 34.9544V36.3044V39.0176L37.3325 40.5L37.3193 44.4309C37.3193 44.7485 37.3193 45.0661 37.3193 45.3838C37.3193 46.5353 37.306 47.6735 37.306 48.825C37.2928 50.5588 37.2928 52.2926 37.2663 54.0132C37.2663 54.4367 37.2531 54.8603 37.2531 55.2706C37.2399 56.2897 36.406 57.097 35.4002 57.0838C34.4075 57.0706 33.6002 56.2632 33.5869 55.2706C33.5869 54.847 33.5737 54.4235 33.5737 54.0132C33.5605 52.2794 33.5472 50.5456 33.534 48.825C33.5207 47.6735 33.5207 46.5353 33.5207 45.3838C33.5207 45.0661 33.5207 44.7485 33.5207 44.4309L33.5075 40.5L33.4943 39.0176V37.072V34.9544C33.4943 34.4382 33.5207 33.9353 33.5737 33.4323C33.6266 32.8764 33.706 32.3206 33.7987 31.7647C33.9972 30.6397 34.2884 29.5411 34.7119 28.4426C34.8178 28.1514 34.9502 27.8603 35.0825 27.5691C35.5193 26.6294 36.0619 25.7029 36.7634 24.8559C36.8428 24.75 36.9355 24.6573 37.0281 24.5514C37.306 24.2338 37.6105 23.9426 37.9413 23.6514C38.3781 23.2809 38.8413 22.95 39.331 22.6588C39.5163 22.5529 39.7016 22.4603 39.8869 22.3676C40.2178 22.2088 40.5619 22.0632 40.906 21.9441L41.0119 21.9044L41.0781 21.8779L41.1972 21.825L41.4355 21.7323L41.6737 21.6397C41.7531 21.6 41.8325 21.5603 41.9119 21.5206C42.0707 21.4411 42.2296 21.3617 42.3752 21.2691L42.8252 20.9647C42.984 20.872 43.1031 20.7397 43.2487 20.6338C43.381 20.5147 43.5399 20.422 43.659 20.2764L44.056 19.8926C44.0957 19.8397 44.1487 19.7867 44.1884 19.7338C44.2678 19.6411 44.334 19.5485 44.4134 19.4559L44.5987 19.2441L44.7575 19.0059C44.8634 18.847 44.9825 18.7014 45.0884 18.5426C45.2869 18.2117 45.4987 17.8941 45.6575 17.5367C45.7369 17.3647 45.8428 17.1926 45.909 17.0073L46.0413 16.7029L46.134 16.4647C46.3987 15.7367 46.6369 14.9691 46.756 14.2014L46.809 13.9103L46.8355 13.725L46.8487 13.6191C46.8752 13.4206 46.9016 13.2353 46.9149 13.0367C46.9281 12.6529 46.9678 12.2559 46.9413 11.872C46.9413 11.475 46.9149 11.1176 46.8619 10.7603C46.8355 10.6014 46.809 10.4426 46.7693 10.2838C46.7296 10.0853 46.6766 9.8735 46.6237 9.67497C46.4119 8.96027 46.1208 8.25879 45.7369 7.61027C45.6972 7.54409 45.6575 7.47791 45.6178 7.41174C45.009 6.41909 44.2016 5.54556 43.2752 4.89703C43.0634 4.75144 42.8384 4.60585 42.6134 4.48674C42.0178 4.15585 41.3825 3.90438 40.7207 3.75879C40.681 3.74556 40.6281 3.73232 40.5884 3.73232C40.231 3.65291 39.8737 3.61321 39.5163 3.59997C39.331 3.59997 39.1457 3.58674 38.9737 3.59997C38.881 3.59997 38.7884 3.59997 38.6957 3.61321L38.4046 3.63968L37.809 3.69262L37.306 3.78527L37.2399 3.7985L36.9487 3.85144L36.6707 3.91762C36.4855 3.95732 36.2869 3.99703 36.1016 4.04997C35.4531 4.2485 34.831 4.48674 34.2355 4.79115C34.156 4.83085 34.0634 4.88379 33.984 4.9235C33.3222 5.30732 32.7266 5.75732 32.1707 6.29997C31.959 6.51174 31.7605 6.74997 31.5752 6.98821C31.2972 7.35879 31.0325 7.74262 30.8075 8.16615C30.4369 8.85438 30.1722 9.62203 29.9605 10.4161C29.7884 11.1838 29.656 12.1235 29.5105 13.0235C29.3516 13.9367 29.1928 14.8367 28.8752 15.8029C28.7163 16.2794 28.4781 16.8088 28.1472 17.2191C27.8163 17.6426 27.4855 17.9603 27.181 18.2779C26.9428 18.5294 26.5457 18.5294 26.2943 18.2911C26.0693 18.0794 26.0428 17.7353 26.2149 17.4838C26.4796 17.1 26.7575 16.7426 26.9163 16.4117C27.0884 16.0809 27.1943 15.7632 27.2737 15.3661C27.3531 14.9691 27.3928 14.5456 27.4325 14.1088C27.4722 13.672 27.4987 13.2353 27.5252 12.7853C27.5781 11.8853 27.5913 11.0382 27.6972 10.0059C27.8428 9.02644 28.0546 8.03379 28.4384 7.08085C28.7428 6.32644 29.1266 5.5985 29.6031 4.9235C29.7222 4.73821 29.8546 4.56615 29.9869 4.39409C30.5693 3.66615 31.2575 3.01762 31.9987 2.46174C32.0913 2.39556 32.184 2.31615 32.2766 2.24997C33.1502 1.66762 34.0899 1.20438 35.0693 0.860265C35.3075 0.780854 35.559 0.714677 35.8105 0.635265L36.181 0.529383L36.5516 0.449971L37.2928 0.304383H37.306L38.0605 0.211736L38.4443 0.17203C38.5766 0.158795 38.709 0.158795 38.8413 0.14556C39.106 0.132324 39.384 0.132324 39.6487 0.132324C40.006 0.14556 40.3766 0.17203 40.734 0.224971C40.906 0.251442 41.0913 0.277913 41.2634 0.317619C42.3355 0.516148 43.3678 0.886736 44.3207 1.38968C44.8899 1.69409 45.4325 2.05144 45.9487 2.4485C46.8619 3.16321 47.656 3.99703 48.3178 4.9235C48.5163 5.18821 48.6884 5.46615 48.8605 5.74409C49.4163 6.64409 49.8399 7.61026 50.1575 8.62938C50.3163 9.13232 50.4355 9.66173 50.5281 10.1779C50.5413 10.2176 50.5413 10.2441 50.5413 10.2838C50.6207 10.7735 50.6605 11.2897 50.6737 11.7661C50.6869 12.2956 50.6472 12.8117 50.6208 13.3279Z" fill="#010101"/>
          </svg>    
      </a>

      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-primary green shadow-none" style="background-color: green ;" href="/put-ad" role="button">
                <i class="fas fa-plus me-2"></i>
                Déposer un terrain
              </a>
          </li>

        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class=" mx-2 nav-item dropdown">
                    <a
                    class="nav-link fw-bolder  dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                    >
                    En Savoir
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    </ul>
                </li>
               <li class="mx-2 nav-item diplay-block">
                    <a href="/prix" class=" nav-link fw-bolder text-success">Prix</a>
                </li>
                <li class="mx-2 nav-item diplay-block">
                    <a href="/app/login" class="nav-link fw-bolder"><i class="far fa-user-circle"></i> Connexion</a>
                </li>
           </ul> 
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>