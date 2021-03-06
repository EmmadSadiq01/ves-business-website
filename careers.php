<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VES | Careers</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/button.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">

    <!-- loader css -->
    <link rel="stylesheet" href="loader.css">
</head>
<style>
    .career_container {
        position: relative;
        top: 5rem;
        margin-bottom: 10rem;
        margin-top: 5rem;
    }

    .em_form-file {
        overflow: hidden;
        position: relative;
        width: 100%;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        display: flex;
        border: 2px solid #f13a11;
        border-radius: 5px;
        padding: 10px;
    }

    .em_form-file input {
        position: absolute;
        font-size: 50px;
        opacity: 0;
        right: 0;
        top: 0;
        cursor: pointer;
    }
    .em_form-file small {
    margin-left: 14px;
}
</style>

<body>
    <!-- <div id=" preloader">
        <div id="loaderBox">
            <div id="loader"></div>
            <div class="loaderText">
                <p>Welcome to <b>Visualize Enterprises Solutions</b></p>
            </div>
        </div>
    </div> -->
    <!-- MENU BAR -->
    <div class="grid-container" id="home_screen">

    <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="index">
                    <!-- <div class="ves-logo">
                    </div> -->

                    <img src="images/logo-navbar.png" alt="">
                    <!-- <img class="logo" src="images/logo.png" alt="ves"> -->
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#about" class="nav-link">Services</a>
                            <div class="sub-menu">
                                <!-- <ul>
                                    <li>link</li>
                                    <li>link</li>
                                    <li>link</li>
                                    <li>link</li>
                                </ul> -->
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#class" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="careers.php" class="nav-link active">Careers</a>
                        </li>


                        <!-- <li class="nav-item">
                        
                    </li> -->
                    </ul>

                    <!-- <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul> -->
                    <ul class="social-icon ml-lg-3">
                        <li><a href="https://mhs.ves-engr.com/" target="_blank" class="mybtn btn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                CLIENT LOGIN
                            </a></li>
                    </ul>

                </div>

            </div>
        </nav>
        <div class="career_container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="careen_content">
                            <h3>new openings</h3>
                            <p>We???re on our way to become the technology provider of choice for IT & Security Solutions.
                            </p>
                            <p>In order to be the best, we need the best people with us for the ride.</p>
                            <p>You???ll be working on a variety cutting-edge technology projects in a fun, supportive,
                                state
                                of the art environment with like-minded individuals, who are the best at what they do.
                            </p>
                            <p>With projects in Canada, UK, New Zealand, Saudi Arabia, Kuwait, Bahrain, Oman, Turkey,
                                and of
                                course the United Arab Emirates you will have ample opportunity to travel and gain
                                international exposure.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="career_form">
                            <form action="careers_upload.php" method="post" class="contact-form webform" enctype="multipart/form-data">
                                <input type="text" class="form-control" name="cf-name" placeholder="Name">

                                <input type="email" class="form-control" name="cf-email" placeholder="Email">
                                <!-- <input type="file" class="form-control" name="image[]" placeholder="Attach your CV"> -->
                                <div class="em_form-file">
                                    Upload CV <small>pdf | docx | image</small>
                                    <input type="file" name="image[]">
                                </div>

                                <!-- <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea> -->

                                <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="site-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="ves-logo">
                            <img src="./images/logo.png" alt="ves-logo">
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Contact</h6>
                        <ul class="footer-links">
                            <li><i class="fas fa-phone mr-2"></i>+92 333 2063683</li>
                            <li><i class="fab fa-whatsapp mr-2"></i> +971 555 996024</li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6>Categories</h6>
                        <ul class="footer-links">
                            <li><a href="#home" class="">Home</a></li>
                            <li><a href="#" class="">Careers</a></li>
                            <li><a href="#class" class="">Portfolio</a></li>
                            <li><a href="https://mhs.ves-engr.com" class="" target="_blank">Client Login</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                            <a href="#home">VES</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <ul class="whatsapp-chat" style="margin-top: -122px !important;">
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-51562cd6-a04b-4413-81b2-1e14b5370a84"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    </script>
    <script>
        // $(window).on('load', function () {
        //     setTimeout(function () {
        //         $("#preloader").fadeOut('slow');
        //         $("#home_screen").fadeIn('slow');
        //     }, 1000)
        // })
    </script>
</body>

</html>