<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>/**
* Template Name: Green
* Updated: May 30 2023 with Bootstrap v5.3.0
* Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Nunito", sans-serif;
  color: #444444;
}

a {
  text-decoration: none;
  color: #5cb874;
}

a:hover {
  color: #80c792;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Nunito", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #5cb874;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #78c48c;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  background: #fbfbfb;
  font-size: 15px;
  height: 40px;
  padding: 0;
}

#topbar .contact-info a {
  line-height: 0;
  color: #444444;
  transition: 0.3s;
}

#topbar .contact-info a:hover {
  color: #5cb874;
}

#topbar .contact-info i {
  color: #5cb874;
  line-height: 0;
  margin-right: 5px;
}

#topbar .contact-info .phone-icon {
  margin-left: 15px;
}

#topbar .social-links a {
  color: #6f6f6f;
  padding: 4px 12px;
  display: inline-block;
  line-height: 1px;
  transition: 0.3s;
}

#topbar .social-links a:hover {
  color: #5cb874;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  height: 70px;
}

#header.header-scrolled {
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}

#header .logo a {
  color: #5cb874;
}

#header .logo img {
  max-height: 40px;
}

.scrolled-offset {
  margin-top: 70px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  color: #222222;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #5cb874;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  color: #5cb874;
  padding: 8px 25px;
  margin-left: 30px;
  border-radius: 4px;
  border: 2px solid #5cb874;
  transition: 0.3s;
  font-size: 14px;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
  background: #5cb874;
  color: #fff;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #5cb874;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #222222;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {   
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(9, 9, 9, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #222222;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #5cb874;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #5cb874;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 70vh;
  background-color: rgba(9, 9, 9, 0.8);
  overflow: hidden;
  position: relative;
}

#hero .carousel,
#hero .carousel-inner,
#hero .carousel-item,
#hero .carousel-item::before {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-item::before {
  content: "";
  background-color: rgba(45, 103, 60, 0.8);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 50px;
  right: 50px;
}

#hero .container {
  text-align: center;
}

#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 30px;
  line-height: 0;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: 0.6;
  transition: 0.3s;
}

#hero .carousel-indicators li.active {
  opacity: 1;
  background: #5cb874;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  animation-delay: 0.8s;
  background: #5cb874;
}

#hero .btn-get-started:hover {
  background: #6ec083;
}

@media (max-width: 992px) {
  #hero {
    height: 100vh;
  }

  #hero .carousel-container {
    top: 66px;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 120vh;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f8fcf9;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::before {
  content: "";
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #5cb874;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
  font-size: 14px;
  color: #919191;
}



/*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/

.about p{
    font-size:15px;
    color:black;
   
}
.about .content h3 {
  font-weight: 700;
  font-size: 28px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-bottom: 10px;
}

.about .content ul i {
  font-size: 50px;
  padding-right: 4px;
  color: black;
}

.about .content p:last-child {
  margin-bottom: 0;
}



@media (max-width: 768px) {
  .why-us .content-item {
    padding: 40px 0;
  }
}



/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services p{
    font-size:15px;
    color:black;
}
.services .icon-box {
  text-align: center;
  padding: 70px 20px 80px 20px;
  transition: all ease-in-out 0.3s;
  background: #fff;
  box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
}

.services .icon-box .icon {
  margin: 0 auto;
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: ease-in-out 0.3s;
  position: relative;
}

.services .icon-box .icon i {
  font-size: 36px;
  transition: 0.5s;
  position: relative;
}

.services .icon-box .icon svg {
  position: absolute;
  top: 0;
  left: 0;
}

.services .icon-box .icon svg path {
  transition: 0.5s;
  fill: #f5f5f5;
}

.services .icon-box h4 {
  font-weight: 600;
  margin: 10px 0 15px 0;
  font-size: 22px;
}

.services .icon-box h4 a {
  color: #222222;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  border-color: #fff;
  box-shadow: 0px 0 35px 0 rgba(0, 0, 0, 0.08);
}

.services .iconbox-blue i {
  color: #47aeff;
}

.services .iconbox-blue:hover .icon i {
  color: #fff;
}

.services .iconbox-blue:hover .icon path {
  fill: #47aeff;
}

.services .iconbox-orange i {
  color: #ffa76e;
}

.services .iconbox-orange:hover .icon i {
  color: #fff;
}

.services .iconbox-orange:hover .icon path {
  fill: #ffa76e;
}

.services .iconbox-pink i {
  color: #e80368;
}

.services .iconbox-pink:hover .icon i {
  color: #fff;
}

.services .iconbox-pink:hover .icon path {
  fill: #e80368;
}

.services .iconbox-yellow i {
  color: #ffbb2c;
}

.services .iconbox-yellow:hover .icon i {
  color: #fff;
}

.services .iconbox-yellow:hover .icon path {
  fill: #ffbb2c;
}

.services .iconbox-red i {
  color: #ff5828;
}

.services .iconbox-red:hover .icon i {
  color: #fff;
}

.services .iconbox-red:hover .icon path {
  fill: #ff5828;
}

.services .iconbox-teal i {
  color: #11dbcf;
}

.services .iconbox-teal:hover .icon i {
  color: #fff;
}

.services .iconbox-teal:hover .icon path {
  fill: #11dbcf;
}

/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: #5cb874;
  padding: 80px 0;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
  border-radius: 4px;
}

.cta .cta-btn:hover {
  background: #fff;
  color: #5cb874;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}



/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  border-top: 3px solid #5cb874;
  border-bottom: 3px solid #5cb874;
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info i {
  font-size: 20px;
  color: #5cb874;
  float: left;
  width: 44px;
  height: 44px;
  background: #eaf6ed;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #222222;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #555555;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #5cb874;
  color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #5cb874;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  border-top: 3px solid #5cb874;
  border-bottom: 3px solid #5cb874;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #5cb874;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #5cb874;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #6ec083;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #fbfbfb;
  min-height: 40px;
}

@media (max-width: 992px) {
  .breadcrumbs {
    margin-top: 66px;
  }
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #3c3c3c;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #090909;
  color: #fff;
  font-size: 14px;
  text-align: center;
  padding: 30px 0;
}

#footer h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
  position: relative;
  font-family: "Poppins", sans-serif;
  padding: 0;
  margin: 0 0 15px 0;
}

#footer p {
  font-size: 15;
  font-style: italic;
  padding: 0;
  margin: 0 0 40px 0;
}

#footer .social-links {
  margin: 0 0 40px 0;
}

#footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #5cb874;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .social-links a:hover {
  background: #449d5b;
  color: #fff;
  text-decoration: none;
}

#footer .copyright {
  margin: 0 0 5px 0;
}

#footer .credits {
  font-size: 13px;
}</style>


    </head>
    <body class="antialiased">
        
        <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">Farm Connect</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
          <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
        </ul>
     
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Farm Connect</span></h2>
              <p class="animate__animated animate__fadeInUp">FarmConnect is a traceability website that ensures transparency in the transportation process of farm produce.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>At FarmConnect, we are dedicated to revolutionizing the agricultural supply chain through our innovative supply chain system. Our platform connects farmers, drivers, and administrators bringing transparency, efficiency, and traceability to the entire process. By leveraging cutting-edge technologies such as blockchain and smart contracts, we empower farmers to showcase their produce, streamline logistics, and ensure fair trade. Our mission is to create a sustainable and equitable agricultural ecosystem, where quality products reach consumers while supporting local farmers. </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our system has specific services that are unique to us.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="https://cdn-icons-png.flaticon.com/128/3875/3875734.png" alt="Product Listing Icon" height="60" width="60">
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Product Listing</a></h4>
              <p>Framers are able to input their products and list them.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="https://cdn-icons-png.flaticon.com/128/3222/3222662.png" alt="Order Management Icon" height="60" width="60">
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Order Management</a></h4>
              <p>The system allows users to manage orders semalessly. This includes order placement, order tracking, and order fulfillment sttaus updates.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="https://cdn-icons-png.flaticon.com/128/411/411763.png" alt="Delivery Icon" height="60" width="60">
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Delivery Coordination</a></h4>
              <p>The system simplifies delivery coordination by assigning drivers, providing delivery instructions, and tracking the status of deliveries in real-time.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="https://cdn-icons-png.flaticon.com/128/9375/9375453.png" alt="Quality Icon" height="60" width="60">
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Quality Assurance</a></h4>
              <p>The system ensures product quality by enabling farmers to specify quality standards, certifications, and labels.</p>
            </div>
          </div>

        

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Strathmore Uni,Nairobi,Kenya</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>farmconnect@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254737774888</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.776585644368!2d36.80994637381012!3d-1.3093298986782318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f112e9eff4827%3A0x17a918597484c8ea!2sStrathmore%20University!5e0!3m2!1sen!2ske!4v1689079232171!5m2!1sen!2ske"frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
           
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Farm Connect</h3>
     
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Farm Connect</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>
</html>
