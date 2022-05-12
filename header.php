<?php
if(!defined('ACCESS')) {header("Location: http://hashnetlinks.com/404.php");}
else
{
$title='';

switch (basename($_SERVER['PHP_SELF'])) {
    case 'index.php':
        $title='Habib-a-Pak Quran Academy | Learn the Quran with Tajweed Online';
       
        break;
    case 'home.php':
        $title='Home | Habib-a-Pak Quran Academy | Learn the Quran with Tajweed Online';
       
        break;
    case 'about-us.php':
        $title='About | Habib-a-Pak Quran Academy | Learn the Quran with Tajweed Online';
       
        break;
    case 'contact-us.php':
        $title='Contact | Habib-a-Pak Quran Academy | Learn the Quran with Tajweed Online';
  
        break;
    case 'courses.php':
        $title='Courses | Habib-a-Pak Quran Academy | Learn the Quran with Tajweed Online';
       
        break;
    case 'fee-structure.php':
        $title='Fee Strucutre | Habib-a-Pak Quran Academy';
       
        break;
    case 'free-trial.php':
        $title='Free Trial Strucutre | Habib-a-Pak Quran Academy';
       
        break;
    case 'pay-fees.php':
        $title='Pay Fees | Habib-a-Pak Quran Academy';
       
        break;   
    default:
        $title='Habib-a-Pak Quran Academy';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Favicon  -->
    <link rel="icon" type="image/x-icon" href="assects/img/Logo.png">
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicon CDN  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="assects/css/style.min.css">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>




</head>

<body class="p-sm-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none" id="pop_up_btn" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="msg" class="px-3 py-2 my-3"></p>
                </div>
                <div class="modal-footer">
                    <a href="index.php"><button type="button" class="btn btn-dark"
                            data-bs-dismiss="modal">Close</button></a>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow rounded " id="main_container">
        <Header>
            <!-- Top header  -->
            <div class="row" id="top_header">
                <div class="col-lg-2 d-flex justify-content-center p-2 align-items-">
                    <a href=""> <span class="iconify mx-2" data-icon="brandico:facebook-rect" style="color: #3b5998;"
                            data-width="16"></span></a>
                    <a href=""> <span class="iconify mx-2" data-icon="logos:twitter" data-width="16"></span></a>
                    <a href=""> <span class="iconify mx-2" data-icon="ci:instagram" style="color: #3b5998;"
                            data-width="20"></span></a>
                    <a href=""> <span class="iconify mx-2" data-icon="mdi:linkedin" style="color: #3b5998;"
                            data-width="20"></span></a>
                </div>
                <div class="col-lg-10 p-2">
                    <p class="text-md-start text-center mt-1"><strong>Skype</strong>: <em>habibapak</em>&nbsp; &nbsp;
                        Call :
                        <strong>USA</strong> +1 646 764
                        5047&nbsp;
                        <strong>Canada</strong> +1 647 898 9944&nbsp; <strong>Pakistan</strong> +92 335 041 3044&nbsp;
                        <strong>Whatsapp:
                            +</strong>1 416 902 9944&nbsp; &nbsp; &nbsp;<em><strong>Start your FREE Trial
                                now</strong></em>
                    </p>
                </div>
            </div>
            <!-- -------- -->
            <!-- Banner  -->
            <div class="row p-0">
                <div class="col-12 p-0">
                    <div id="banner_container">
                        <img src="assects/img/banner.png" alt="">
                    </div>
                </div>
            </div>
            <!-- ----------- -->
            <!-- Bottom Header  -->
            <div class="row p-3" id="bottom_header">
                <!-- Logo  -->
                <div class="col-lg-1 col-md-2   d-flex justify-content-center ">
                    <a href="index.php"> <img src="assects/img/Logo.png" alt="Logo"></a>
                </div>
                <!-- Title  -->
                <div class="col-lg-6 col-md-9 ps-lg-4  pt-2">
                    <h1 class="text-md-start text-center">Habib-a-Pak Quran Academy</h1>
                    <p class="text-md-start text-center">Learn the Quran with Tajweed Online</p>
                </div>
                <!-- Free trial banner  -->
                <div class="col-lg-5 col-12 d-flex justify-content-lg-center justify-content-end">
                    <img src="assects/img/stayhome-trial-450x80-1.png" alt="" class="">
                </div>

            </div>
            <!-- ---------  -->
            <!-- Navbar  -->
            <!-- Collapse button -->
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <span class="d-lg-none d-block mx-4 navbar-toggler-icon" onclick="expand_menu()"></span>
                </div>
            </div>
            <div class="row mt-5" id="navbar">
                <div class="col-12 position-relative">

                    <ul class="p-0 w-100 d-lg-flex d-none position-relative">
                        <a href="home.php">
                            <li class="mx-3">Home</li>
                        </a>
                        <a href="about-us.php">
                            <li class="mx-3">About Us</li>
                        </a>
                        <a href="courses.php">
                            <li class="mx-3">Courses</li>
                        </a>
                        <a href="fee-structure.php">
                            <li class="mx-3">Fee Structure</li>
                        </a>
                        <a href="pay-fees.php">
                            <li class="mx-3">Pay Fees</li>
                        </a>

                        <li class="mx-3" id="dropdown">Downloads <span class="iconify ms-2"
                                data-icon="ant-design:caret-down-filled" style="color:#444444;"></span>
                            <ul class=" p-0 mt-1 d-none position-absolute" style="z-index:111;">
                                <a href="#">
                                    <li class="px-2 py-1">Full Quran Pak</li>
                                </a>
                                <a href="#">
                                    <li class="px-2 py-1">Quran Pak 30 Paras</li>
                                </a>


                            </ul>

                        </li>

                        <a href="contact-us.php">
                            <li class="mx-3">Contact Us</li>
                        </a>
                        <a href="free-trial.php">
                            <li class="mx-3">Free Trial</li>
                        </a>

                    </ul>

                </div>

            </div>

            <!-- Mobile Menu  -->
            <div class="row" id="">
                <div class="col-12" id="mobile_menu">
                    <ul class="p-0 w-100">
                        <a href="home.php">
                            <li class="my-3 text-center">Home</li>
                        </a>
                        <a href="about-us.php">
                            <li class="my-3 text-center">About</li>
                        </a>
                        <a href="courses.php">
                            <li class="my-3 text-center">Courses</li>
                        </a>
                        <a href="fee-structure.php">
                            <li class="my-3 text-center">Fee Structure</li>
                        </a>
                        <a href="pay-fees.php">
                            <li class="my-3 text-center">Pay Fees</li>
                        </a>
                        <a href="">
                            <li class="my-3 text-center">Downloads </li>
                        </a>
                        <a href="contact-us.php">
                            <li class="my-3 text-center">Contact Us</li>
                        </a>
                        <a href="free-trial.php">
                            <li class="my-3 text-center">Free Trial</li>
                        </a>
                    </ul>
                </div>
            </div>
            <!-- ------------- -->
        </Header>


        <?php  }  ?>