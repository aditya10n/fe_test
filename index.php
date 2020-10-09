<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NIBBLE - FRONT END TEST</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/nibble_logo.png" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Paytone+One:400,700" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-lg-10" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#page-top">
                    <img src="assets/img/nibble_logo.png" width="40" height="40" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto text-md-center text-left">
                        <!-- Dynamic Menu -->
                        <?php
                            $con = mysqli_connect("localhost","root","");
                            mysqli_select_db($con, "nibble_front_end_test");
                            $menu = mysqli_query($con,"SELECT * FROM menu ORDER BY id_menu ASC");
                        
                        while($dataMenu = mysqli_fetch_assoc($menu)){
                            $id_menu = $dataMenu['id_menu'];
                            $submenu = mysqli_query($con,"SELECT * FROM submenu WHERE id_menu='$id_menu' ORDER BY id_submenu ASC");
                            if(mysqli_num_rows($submenu) == 0){
                                echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="'.$dataMenu['link_menu'].'">'.$dataMenu['name_menu'].'</a></li>';
                            }else{
                                echo '
                                <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                                    <a href="'.$dataMenu['link_menu'].'" class="nav-link dropdown-toggle" data-toggle="dropdown">'.$dataMenu['name_menu'].' <b class="caret"></b></a>
                                    <ul class="dropdown-menu">';
                                    while($dataSubmenu = mysqli_fetch_assoc($submenu)){
                                        echo '<li class="dropdown-item">
                                        <a href="'.$dataSubmenu['link_submenu'].'">'.$dataSubmenu['name_submenu'].'</a></li>';
                                    }
                                echo '
                                    </ul>
                                </li>
                                ';
                            }
                        }
                        ?>
                        <!-- Dynamic Menu -->
                    </ul>
                    <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                        <a class="btn btn-primary btn-lg js-scroll-trigger" href="#about">JOIN US</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h4 class="text-uppercase text-white" 
                        style="
                            font-family: Paytone One;
                            font-size: 30px;
                            ">BUILD UP YOUR</h4>
                        <h1 class="text-uppercase text-white" 
                        style="
                            font-family: Paytone One;
                            font-size: 100px;
                        ">STRENGTH</h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white font-weight-bold mb-5" 
                        style="
                            font-family: Arimo;
                            font-size: 12;
                            font-weight: bold;
                            ">Build Your Body and Fitness with Professional Touch</p>
                        <a class="btn btn-primary btn-lg js-scroll-trigger" href="#about">JOIN US</a>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
