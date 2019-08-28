<?php
require_once('backend.php');

$rows = getAllProjects();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Mayrelis Morejon - Software Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	     <!--  <a class="navbar-brand" href="index.html">M</a> -->
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Projects</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  

    <section class="site-hero" style="background-color: #000000" id="section-home" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row intro-text align-items-center justify-content-center">
          <div class="col-md-10 text-center">
            <h1 class="site-heading site-animate">Hello, I'm <strong>Mayrelis Morejon</strong></h1>
            <p class="lead site-subheading mb-4 site-animate"> Software developer based in Florida International University , who enjoys building things that live on the internet. I love programming</p>
            <p><a href="#about-section" class="smoothscroll">More On Me</a></p>
          </div>
        </div>
      </div>
    </section> <!-- section -->

    <section class="ftco-section ftco-services-2 bg-light" id="about-section">
			<div class="container">
				<div class="row">
          <div class="col-md-4 heading-section ftco-animate">
            <h2 class="mb-4">About Me</h2>
            <p>Hello! I'm Mayrelis , a software developer based in Florida International University , who enjoys building things that live on the internet. I love programming</p>
            <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
              <div class="icon justify-content-center align-items-center d-flex"><span>EDS Service Solution</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Administrative Assistant</h3>
                <p> From 04/2013 – 05/2014 </p>
		               <li>Assisted H.R create and maintain filing systems</li>
		               <li>Management of network and communications services</li>
		               <li>Solved challenges quickly and effectively</li>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate mt-lg-5">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-md-5 pt-lg-4">
              <div class="icon justify-content-center align-items-center d-flex"><span>One Homecare Solutions</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">OMG Intake Coordinator</h3>
                 <p> From 06/2014 – 03/2015 </p>
		               <li> Responsible for managing and sending out all reauthorization request for each month</li>
		               <li> Able to organize and review all equipment compliance report</li>
		               <li> CIn charge of submitting all Medical Reviews to insurance company for approvals</li>
                <hr>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span>Publicis Sapient</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Quality Engineer Assurance</h3>
               <p> From 04/2015 – Present </p>
		               <li> Manually tested sites in various browsers and mobile devices to ensure cross-browser compatibility and responsiveness</li>
		               <li> Regression Testing and Manual Testing</li>
		               <li> Configure and set up test and manage test environments</li>
		               <li> Communicate with multi-disciplinary teams of engineers, designers, producers, and clients on a daily basis</li>
                <hr>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section bg-light" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Skills</span>
            <h2 class="mb-4">My Skills</h2>
       
          </div>
        </div>
				
				<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
        </div>

        <div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="icon-code"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Explore</a></h3>
								<h4>JAVA</h4>
								<h4>PYTHON</h4>
								<h4>PHP</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="icon-laptop"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Create</a></h3>
								<h4>JAVASCRIPT</h4>
								<h4>HTML</h4>
								<h4>CSS</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="icon-database"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Learn</a></h3>
								<h4>MYSQL</h4>
								<h4>DJANGO</h4>
								<h4>MANUAL Testing</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		  	


    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
     <span class="subheading">Projects</span>
            <h2 class="mb-4">My Projects</h2>
          
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="<?=$rows[0][4]?>" class="block-20" style="background-image: url('<?=$rows[0][3]?>');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	               
                </div>
                <h3 class="heading"> <?=$rows[0][1]?></h3>
		<?=$rows[0][2]?>
              	<a href="<?=$rows[0][4]?>"> Link to github </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="<?=$rows[1][4]?>" class="block-20" style="background-image: url('<?=$rows[1][3]?>');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                
                </div>
                <h3 class="heading"><?=$rows[1][1]?></h3>
		<?=$rows[1][2]?>
            
              	<a href="<?=$rows[1][4]?>"> Link to github </a>

              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="<?=$rows[2][4]?>" class="block-20" style="background-image: url('<?=$rows[2][3]?>');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	               
                </div>
                <h3 class="heading"><?=$rows[2][1]?></h3>
		<?=$rows[2][2]?>
                
              	<a href="<?=$rows[2][4]?>"> Link to github </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="education-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">

    		<span class="subheading">Education</span>
            <h2 class="mb-4">My Education</h2>
						<div class="centered line"></div>
					</div>
				</div>

				<div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	               
                </div>				
							<h3 class="col-full text-center">FIU Florida International University</h3>
							<div class="col-full text-center">Bachelor of Computer Science <span class="bullet">
						</div>

						<div class="col-full text-center">
							I'm a student in Computer Sciences at Florida Inetrnational University. Here I have gained strong knowledge a wide variety of subjects including data structures, networking, audio and programming.							
							<p><strong>Graduating in:</strong> Descember 2019</p>
						</div>
					</div>
      	

                <div> <h3 class="col-full text-center">MDC Miami Dade College</h3>
							<div class="col-full text-center">Associate of Computer Science <span class="bullet">
						</div>

						<div class="col-full text-center">
							I completed two courses at ROC Twente. The first course was a computer science course after which I did an additional year in application development. This combination gave me a good understanding of both hardware and software. The application development course was originally a two year track but I graduated a year early.							
							<p><strong>Graduated:</strong> 2017</p>
						</div>
          </span></div>
					</div>
				</div>
			</div>
		</span>
	</div>
</div>

    <footer class="ftco-footer ftco-section text-center">
      <div class="container">
        
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact Me</h2>
            	
	              
	                <a href="#"><span class="icon icon-phone"></span> <span class="text">786-202-1496</span></a><br>
	                <a href="mailto:mayrelismorejon21@gmail.com"> <span class="icon icon-envelope"></span> <span class="text">mayrelismorejon21@gmail.com</span></a><br>
	            	<a href="/resume.pdf"><span class="icon icon-pencil"></span> <span class="text">Download Resume</span></a>
                <!-- <a href="/resume.pdf" target="_blank" rel="nofollow noopener noreferrer" class=" icon icon-pencil"> Download Resume</a> -->
	            
            
          </div>
        </div>
        
      </div>
    </footer>

    
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
