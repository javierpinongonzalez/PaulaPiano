<?php
/**
 * Created by PhpStorm.
 * User: jAvi
 * Date: 23/09/2016
 * Time: 15:38
 */

$name = "Paula Cantero";

$lang = "es";
switch ($lang){
    case "es":
        $home = "Inicio";
        $learnMore = "Saber más";
        $title = "Pianista Profesional & Profesora Particular";
        $about = "Quien soy";
        $gallery = "Galería";
        $particular = "Clases Particulares";
        $weddings = "Bodas";
        $academy  = "Profesora de Academia";
        $stats = "Algunos números";
        $happyClients = "Alumnos Felices";
        $hoursOfWork = "Horas de Trabajo";
        $awards = "Premios";
        $yearsOfExperience = "Años de Experiencia";
        $testimonials = "Testimonios";
        $contact = "Contacto";
        $skills = "Que Hago";

        break;
    case "en":
        $home = "Home";
        $learnMore = "Learn more";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo($name." - ".$title) ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
    <div class="intro text-center">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1><?php echo($name) ?></h1>
                        <p><?php echo($title) ?></p>
                        <a href="#about" class="btn btn-default btn-lg page-scroll"><?php echo($learnMore) ?></a> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Navigation -->
<div id="nav">
    <nav class="navbar navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"> <a href="#page-top"></a> </li>
                    <li> <a class="page-scroll" href="#page-top"><?php echo($home) ?></a> </li>
                    <li> <a class="page-scroll" href="#about"><?php echo($about) ?></a> </li>
                    <li> <a class="page-scroll" href="#skills"><?php echo($skills) ?></a> </li>
                    <li> <a class="page-scroll" href="#portfolio"><?php echo($gallery) ?></a> </li>
                    <li> <a class="page-scroll" href="#testimonials"><?php echo($testimonials) ?></a> </li>
                    <li> <a class="page-scroll" href="#contact"><?php echo($contact) ?></a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2><?php echo($about) ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                    <a href="#portfolio" class="btn btn-primary btn-lg page-scroll"><?php echo($gallery) ?></a> </div>
            </div>
        </div>
    </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><?php echo($skills) ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 skill">
                <img src="img/boda1.png" alt="Project Title" style="height: 140px">
                <h4><?php echo($weddings) ?></h4>
            </div>
            <div class="col-md-4 col-sm-6 skill">
                <img src="img/particulares4.png" alt="Project Title" style="height: 140px">
                <h4><?php echo($particular) ?></h4>
            </div>
            <div class="col-md-4 col-sm-12 skill">
                <img src="img/academia2.png" alt="Project Title" style="height: 140px">
                <h4><?php echo($academy) ?></h4>
            </div>
            <!--<div class="col-md-3 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                <h4>WordPress</h4>
            </div>-->
        </div>
    </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2><?php echo($gallery) ?></h2>
            <hr>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".app">App Development</a></li>
                        <li><a href="#" data-filter=".branding">Branding</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>Web Design</small> </div>
                                <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>App Development</small> </div>
                                <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>Web Design</small> </div>
                                <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>Web Design</small> </div>
                                <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>App Development</small> </div>
                                <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>Branding</small> </div>
                                <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 branding app">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>App Development, Branding</small> </div>
                                <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>Web Design</small> </div>
                                <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><?php echo($stats) ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
                <div class="achievement-box"> <span class="count">310</span>
                    <h4><?php echo($happyClients) ?></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
                <div class="achievement-box"> <span class="count">4700</span>
                    <h4><?php echo($hoursOfWork) ?></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
                <div class="achievement-box"> <span class="count">30</span>
                    <h4><?php echo($awards) ?></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
                <div class="achievement-box"> <span class="count">8</span>
                    <h4><?php echo($yearsOfExperience) ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><?php echo($testimonials) ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row testimonials">
                    <div class="col-sm-4">
                        <blockquote><i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                            <div class="clients-name">
                                <p><strong>John Doe</strong><br>
                                    <em>CEO, Company Inc.</em></p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="col-sm-4">
                        <blockquote><i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                            <div class="clients-name">
                                <p><strong>Jane Doe</strong><br>
                                    <em>CEO, Company Inc.</em></p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="col-sm-4">
                        <blockquote><i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                            <div class="clients-name">
                                <p><strong>Chris Smith</strong><br>
                                    <em>CEO, Company Inc.</em></p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><?php echo($contact) ?></h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                </form>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container text-center">
        <div class="fnav">
            <p>Copyright &copy; 2016 Marcus Hansen. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
