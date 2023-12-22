<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Basic Page Needs
 ================================================== -->
    <meta charset="utf-8">
    <title>PIU - iHub</title>

    <!-- Mobile Specific Metas
 ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="educenter" />

    <!-- ** Plugins Needed for the Project ** -->

    <!-- Bootstrap NEW -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="assets/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="assets/images/LogoBulb.png" type="image/x-icon">
    <link rel="icon" href="assets/images/LogoBulb.png" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="assets/images/LogoHead250.png" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header class="fixed-top header">
        <!-- top header -->
        <div class="top-header py-2 ">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="tel:+443003030266"><strong>CALL</strong> </a>020 5038050
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.facebook.com/PioneerUni"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://twitter.com/Pioneer_Uni"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.instagram.com/pioneerinternationaluniversity/"><i
                                        class="ti-instagram"></i></a>
                            </li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.youtube.com/channel/UCS7s83R97tFLJTRO7FKPC0g"><i
                                        class="ti-youtube"></i></a>
                            </li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.linkedin.com/company/pioneer-international-university/"><i
                                        class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="/iNotice">NOTICE</a></li>
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="/iResearch">RESEARCH</a></li>
                            <li class="list-inline-item"><a
                                    class="list-inline-item text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="/iScholarship">SCHOLARSHIP</a></li>
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal"
                                    data-toggle="modal" data-target="#loginModal">login</a></li>
                            <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="#signupModal" data-toggle="modal" data-target="#signupModal">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="/"><img src="assets/images/LogoHead150.png" alt="Logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="/iAbout">About</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="/iProjects">PROJECTS</a>
                            </li>
                            <li class="nav-item @@events">
                                <a class="nav-link" href="/iEvents">EVENTS</a>
                            </li>
                            <li class="nav-item @@blog">
                                <a class="nav-link" href="/iBlog">BLOG</a>
                            </li>

                            <li class="nav-item @@contact">
                                <a class="nav-link" href="/iContact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->


    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone"
                                    placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName"
                                    placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail"
                                    placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword"
                                    name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone"
                                placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName"
                                placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
                                placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @yield('content')



    <!-- footer -->
    <footer>
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                        <h3 class="text-white">Subscribe Now</h3>
                        <form action="#">
                            <div class="input-wrapper">
                                <input type="email" class="form-control border-0" id="newsletter"
                                    name="newsletter" placeholder="Enter Your Email...">
                                <button type="submit" value="send" class="btn btn-primary">Join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <div class="footer bg-footer section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                        <!-- logo -->
                        <a class="logo-footer" href="/"><img class="img-fluid mb-4"
                                src="assets/images/Head250.png" alt="logo"></a>
                        <ul class="list-unstyled">
                            <li class="mb-2">Murang'a Road, 33421, Opposite K.I.C.D, Nairobi, KENYA. </li>
                            <li class="mb-2">Phone : 020 5038050</li>
                            <li class="mb-2">+254121765490</li>
                            <li class="mb-2">info@piu.ac.ke</li>
                        </ul>
                    </div>
                    <!-- company -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">COMPANY</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="assets/about.html">About Us</a></li>
                            <li class="mb-3"><a class="text-color" href="assets/teacher.html">Our Teacher</a></li>
                            <li class="mb-3"><a class="text-color" href="assets/contact.html">Contact</a></li>
                            <li class="mb-3"><a class="text-color" href="assets/blog.html">Blog</a></li>
                        </ul>
                    </div>
                    <!-- links -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">QUICK LINKS</h4>
                        <ul class="list-unstyled">
                            {{-- <li class="mb-3"><a class="text-color" href="assets/courses.html">COURSES</a></li>
                            <li class="mb-3"><a class="text-color" href="assets/events.html">EVENTS></li>
                            <li class="mb-3"><a class="text-color" href="assets/notice.html">NOTICE</a></li> --}}
                            <li class="mb-3"><a class="text-color" href="assets/scholarship.html">SCHOLARSHIP</a>
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.pioneergroupofschools.co.ke/">PIONEER GROUP OF
                                    SCHOOLS</a></li>
                            <li class="mb-3"><a class="text-color" href="https://pic.piu.ac.ke/">PIONEER
                                    INTERNATIONAL
                                    COLLEGE</a></li>
                            <li class="mb-3"><a class="text-color" href="https://piu.ac.ke/ict-services/">ICT
                                    SUPPORT</a></li>


                            </li>
                        </ul>
                    </div>
                    <!-- support -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">SOCIAL MEDIA</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.facebook.com/PioneerUni">FACEBOOK</a>
                            </li>
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.instagram.com/pioneerinternationaluniversity/">INSTAGRAM</a></li>
                            <li class="mb-3"><a class="text-color" href="https://twitter.com/Pioneer_Uni">X</a>
                            </li>
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.linkedin.com/company/pioneer-international-university/">LINKEDIN</a>
                            </li>
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.youtube.com/channel/UCS7s83R97tFLJTRO7FKPC0g">YOUTUBE</a></li>
                        </ul>
                    </div>
                    <!-- support -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">STUDENTS RESOURCES</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color"
                                    href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&#038;redirect_uri=https%3a%2f%2foutlook.office.com%2fmail%2f&#038;resource=00000002-0000-0ff1-ce00-000000000000&#038;response_mode=form_post&#038;response_type=code+id_token&#038;scope=openid&#038;msafed=0&#038;client-request-id=ca16b9d8-f0b0-4663-a5f5-89323ab75387&#038;protectedtoken=true&#038;domain_hint=piu.ac.ke&#038;nonce=636995437915659095.0d8abb59-6bb5-411c-a35a-846514cc3963&#038;state=DctBCoQwDEDRVs_hEaotaaJZDN7BG6S1YEEdkApz_Mniv923xphe6zTrFTMTEDNGmDkgIXvG0e-LpITsSHUxhOwEUNwSCUPMGZjA6jtMl9Rzqnf6_lZ527GVvT4lt0973vIH"
                                    target="_blank">STUDENT EMAIL</a>
                            </li>
                            <li class="mb-3"><a class="text-color" href="https://www.office.com/">OFFICE 365
                                    LOGIN</a>
                            </li>
                            <li class="mb-3"><a class="text-color"
                                    href="https://portal.hef.co.ke/auth/signin">HEF/HELB</a>
                            </li>
                            <li class="mb-3"><a class="text-color"
                                    href="https://www.turnitin.com/login_page.asp?lang=en_us">TURNITIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left text-center">
                        <p class="mb-0">Copyright &copy;
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>
                            , Pioneer International University. All Rights Reserved <a href="https://PIU-iHub.com/"
                                class="text-muted">PIU-iHub</a>
                        </p>
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.facebook.com/PioneerUni"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://twitter.com/Pioneer_Uni"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.instagram.com/pioneerinternationaluniversity/"><i
                                        class="ti-instagram"></i></a>
                            </li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.youtube.com/channel/UCS7s83R97tFLJTRO7FKPC0g"><i
                                        class="ti-youtube"></i></a>
                            </li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                    href="https://www.linkedin.com/company/pioneer-international-university/"><i
                                        class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="assets/plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="assets/plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="assets/plugins/venobox/venobox.min.js"></script>
    <!-- filter -->
    <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="assets/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="assets/js/script.js"></script>

    <!-- Bootstrap CSS and JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



</body>

</html>
