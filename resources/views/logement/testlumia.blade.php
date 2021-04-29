@extends('layouts.goodentete')

@section('content')

<body>
<div id="wrapper">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="" /></a>
                    </div>
                    <!-- end logo -->

                    <!-- top menu -->
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="active">
                                    <a href="index.html"><i class="icon-home"></i> Home </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#"><i class="icon-cog"></i> Features <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="media.html">Media</a></li>
                                        <li><a href="color-scheme.html">10 Theme colors</a></li>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="components.html">Components</a></li>
                                        <li><a href="animations.html">56 Animations</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="icon-variations.html">Icon variations</a></li>
                                        <li class="dropdown"><a href="#">3rd level <i class="icon-angle-right"></i></a>
                                            <ul class="dropdown-menu sub-menu">
                                                <li><a href="#">Example menu</a></li>
                                                <li><a href="#">Example menu</a></li>
                                                <li><a href="#">Example menu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#"><i class="icon-leaf"></i> Pages <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#"><i class="icon-briefcase"></i> Portfolio <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#"><i class="icon-book"></i> Blog <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="icon-envelope-alt"></i> Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>
    <section id="intro">

        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- Place somewhere in the <body> of your page -->
                    <div id="mainslider" class="flexslider">
                        <ul class="slides">
                            <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                                <img src="assets/img/slides/flexslider/img1.jpg" alt="" />
                                <div class="flex-caption primary">
                                    <h2>Bootstrap</h2>
                                    <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                </div>
                            </li>
                            <li data-thumb="assets/img/slides/flexslider/img2.jpg">
                                <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                                <div class="flex-caption warning">
                                    <h2>Responsive layout</h2>
                                    <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                </div>
                            </li>
                            <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                                <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                                <div class="flex-caption success">
                                    <h2>Rich of features</h2>
                                    <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="maincontent">
        <div class="container">

            <div class="row">
                <div class="span12">
                    <div class="call-action">

                        <div class="text">
                            <h2>You should love this stand out call action</h2>
                            <p>
                                Hover this call action box and see the call action button play nice animation to seek attention
                            </p>
                        </div>
                        <div class="cta">
                            <a class="btn btn-large btn-theme" href="#">
                                <i class="icon-plane icon-white"></i> Get a quote </a>
                        </div>

                    </div>
                    <!-- end tagline -->
                </div>
            </div>

            <div class="row">
                <div class="span3 features e_pulse">
                    <img src="assets/img/dummies/img1.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                            <h4>Responsive <br />twitter bootstrap</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="assets/img/dummies/img2.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                            <h4>Unparalleled <br />premium support</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="assets/img/dummies/img3.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                            <h4>Valid <br />HTML code</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="assets/img/dummies/img4.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
                            <h4>Flexible <br />multi usage</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <h4 class="rheading">Recent works<span></span></h4>
                    <div class="row">
                        <div class="span3">

                            <p class="hidden-phone">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus rhoncus elit egestas luctus. Nullam at lectus augue.
                            </p>

                            <a href="#" class="btn btn-theme">Read More</a>
                        </div>

                        <div class="span9">
                            <div id="latest-work" class="carousel btleft">
                                <div class="carousel-wrapper">
                                    <ul class="da-thumbs">

                                        <li>
                                            <img src="assets/img/dummies/work1.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Serenity theme</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="assets/img/dummies/work2.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Dark apps</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="assets/img/dummies/work3.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Mobile apps</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="assets/img/dummies/work4.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Mobile template</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="assets/img/dummies/work5.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Business theme</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="assets/img/dummies/work6.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Portfolio graphic</p>
                                                </div>
                                            </article>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="widget">
                        <h5>Interesting pages</h5>
                        <ul class="regular">
                            <li><a href="#">About our company</a></li>
                            <li><a href="#">How we do all stuff</a></li>
                            <li><a href="#">Our recent works</a></li>
                            <li><a href="#">Press releases</a></li>
                            <li><a href="#">Get in touch with us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>Flickr photostream</h5>
                        <div class="flickr-badge">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>How to find us</h5>
                        <address>
                            <i class="icon-home"></i> <strong>Lumia company, Inc.</strong><br>
                            X104 Awesome ville, Suite AB12<br>
                            Jakarta 12420 Indonesia
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-8890<br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                    <div class="widget">
                        <ul class="social">
                            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="verybottom">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <p>
                            &copy; Lumia - All right reserved
                        </p>
                    </div>
                    <div class="span6">
                        <div class="pull-right">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                                -->
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end wrapper -->
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/jquery.elastislide.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery-hover-effect.js"></script>
<script src="assets/js/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="assets/js/custom.js"></script>


@endsection