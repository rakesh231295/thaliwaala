<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thaliwala</title>
	<link rel="icon" href="assets/images/thaliwala/thali.png">
	<link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Elsie&family=Lexend:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/aos.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/photoswipe.min.css">
	<link rel="stylesheet" href="assets/css/default-skin.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-query.css">
    <style>
    @media (max-width: 540px) {
    .hide {
        display: none;
    }
}
        .btnbulk{
            width: 195px;
            height: 64px;
            background: #F55A36;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
           
        }
    </style>
    
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $address = $_POST['address'];

    // Email details
    $to = "thaliwala.com@gmail.com"; // replace with your email address
    $subject = "New Bulk Order Request";
    $message = "
    <html>
    <head>
        <title>New Bulk Order Request</title>
    </head>
    <body>
        <p>Hello,</p>
        <p>You have received a new bulk order request with the following details:</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $number</p>
        <p><strong>No. of Persons:</strong> $person</p>
        <p><strong>Date:</strong> $date</p>
        <p><strong>Address:</strong> $address</p>
    </body>
    </html>
    ";

    // Set headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Thaliwalaa <$email>" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
                alert('Form submitted successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('There was an error submitting the form. Please try again.');
                window.location.href='index.php';
              </script>";
    }
}
?>


    
    
</head>
<body>
	<div class="site_content">
		<!-- Preloader Start -->
		<div id="overlayer">
			<div id="spinner">
				<img src="assets/images/thaliwala/thaliwalaa_logo.png" alt="header-logo" class="homepage1-logo" style="width:335px;">
				<div class="spinner-ie"></div>
			</div>
		</div>   
		<!-- Preloader End -->
		<!-- Header Section Start -->
		<header id="header-homepage1">
			<div class="header-full-section">
				<div class="header-logo">
					<a href="index.php">
<!--                        <h2 style="color:#FFDE9F;font-family: 'Elsie';">Thaliwala</h2>-->
						<img src="assets/images/thaliwala/thaliwalaa_logo.png" alt="header-logo" class="homepage1-logo" style="width:235px;">
					</a>
				</div>
				<div class="header-menu-wrap">
					<div class="header-nav-wrap">
						<nav class="navbar navbar-expand-xl p-0">
							<div class="navbar-collapse" id="navbarSupportedContent">
								<div class="navbar-nav mx-auto align-items-center">
									<ul class="nav-left p-0">
										
										
										<li class="nav-item dropdown">
											<a class="nav-link active" href="#">
												Home
											</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#about">
												About Us
											</a>
										</li>
                                        <li class="nav-item dropdown">
											<a class="nav-link" href="#Services">
												Services
											</a>
										</li>
                                        <li class="nav-item dropdown">
											<a class="nav-link" href="#menu">
												Menu
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#gallery">Our Gallery</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="mobile-menu-wrap d-lg-none d-block">
					<div class="mb-header-left">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedmobile" aria-controls="navbarSupportedmobile" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedmobile">
							<span class="close-menu"><i class="fa-regular fa-xmark"></i></span>
							<nav id='cssmenu'>										
								<ul class="open-detail-menu">
									
									<li><a href='index.php'>Home</a></li>
									<li><a href='#about'>About us</a></li>
									<li><a href='#Services'>Services</a></li>
									<li><a href='#menu'>Menu</a></li>
									<li><a href='#gallery'>Our Gallery</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="header-cart-sec">
					<div class="mobile-menu-icon">
						<a data-bs-toggle="collapse" href="#navbarSupportedmobile" role="button">
							<i class="fa-solid fa-bars" style="color:#EE6B4A"></i>
						</a>	
					</div>
				
						<a href="#contact" class="dicover-menu-btn hide" style="margin-top:0;background: #F55A36;color:#fff;">Contact us</a>
					
				</div>
			</div>
			<div class="header-boder"></div>
		</header>
		<!-- Header Section End -->
		<!-- Hero Section Start -->
		<section id="hero-section">
			<div class="container line index-hero-tb">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="hero-Wrapper-full">
					<div class="hero-heading">
						<h1 class="hero-title wow fadeInDown"  data-wow-duration="1s" data-wow-delay="2.5s">Where Every Craving Finds it’s Match</h1>
						<div class="hero-img-sec1">
							<img src="assets/images/thaliwala/1.png" alt="food-img">
						</div>
					</div>
					<div class="hero-bottom" >
						<div class="hero-bottom-wrapper">
							<div class="hero-left">
								<div class="hero-left-full">
									<div class="line-sec">
										<div class="yellow-line"></div>
									</div>
									<div class="line-txt-sec">
										<p class="hero-para">We have a proper passion for cooking. Love is the secret ingredient that makes all our meals taste better and magical.
										</p>
									</div>
								</div>
								<div class="dicover-menu-btn">
									<a href="#contact">Contact us</a>
								</div>	 
							</div>
							<div class="hero-right" data-aos="fade-left"  data-aos-duration="1000">
								<div class="hero-img-sec">
									<img src="assets/images/thaliwala/thali.png" alt="food-img">
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!-- Hero Section End -->
		<!-- Hero Video Section Start -->
		<section id="hero-video-sec" class="reveal">
			<div class="hero-video-sec-full">
				<h2 class="d-none">Video Section</h2>
				<div id="expand2" class="video-homepage image">
					<img src="assets/images/thaliwala/bg.jpg" alt="food-img" >
					<div class="video_button">
                        
						<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#hero-video-modal">
							<div class="video_sec_play">
								<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="mask0_505_17229" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
										<rect width="40" height="40" fill="white"/>
									</mask>
									<g mask="url(#mask0_505_17229)">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20 4.16669C28.7432 4.16669 35.8334 11.2553 35.8334 20C35.8334 28.7448 28.7432 35.8334 20 35.8334C11.2553 35.8334 4.16669 28.7448 4.16669 20C4.16669 11.2553 11.2553 4.16669 20 4.16669Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M25 19.9919C25 18.64 18.0709 14.3152 17.2849 15.0928C16.4988 15.8705 16.4233 24.0401 17.2849 24.891C18.1465 25.7449 25 21.3438 25 19.9919Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
							</div>
						</a>
					</div>
				</div> 
			</div>
		</section>
		<!-- Hero Video Section End -->
		<!-- Our Restaurant Section Start-->
		<section id="restaurant-section" class="reveal">
			<div class="container line ptb-100" id="about">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="restaurant-sec-wrapper">
					<div class="restaurant-first-sec">
						<div class="restaurant-first-sec-wrap">
							<div class="restaurant-img1 pbmit-animation-style1 reveal">
								<img src="assets/images/thaliwala/our.jpg" alt="food-img">
							</div>

							<div class="restaurant-second-img-sec">
								<div class="restaurant-img2 ">
									<img src="assets/images/thaliwala/our2.jpg" alt="food-img">
								</div>
<!--
								<div class="round-details">
									<div class="round-shape">
										<img src="assets/images/Homepage1/round-txt-img.png" class="txt-img" alt="round-img">
										<img src="assets/images/Homepage1/round-img.png" class="white-bg" alt="round-img">
									</div>
								</div>
-->
							</div>
						</div>
					</div>
					<div class="restaurant-second-sec">
						<div class="restaurant-second-sec-wrap">
							<p class="rest-txt1"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>Our Restaurant<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
							<h2 class="rest-txt2 wow fadeInUp" data-wow-duration="1s">For Every Special Occasion</h2>
							<p class="rest-para wow fadeInUp" data-wow-duration="1.5s">At Thaliwala, we satisfy every craving with our wide range of delicious, carefully crafted dishes. From savory to sweet, each offering is designed to bring you authentic flavors that cater to all your taste desires.</p>
							<div class="restaurant-second-bottom wow fadeInUp" data-wow-duration="2s">
								<div class="restaurant-second-bottom-wrap">
									<div class="restaurant-second-img">
										<img src="assets/images/Homepage1/restaurant-3.png" alt="food-img">
									</div>
									<div>
										<h3 class="rest-txt3">Authentic Flavors with a Modern Twist</h3>
										<p class="rest-txt4">Thaliwala offers traditional dishes with a contemporary twist, blending heritage recipes with modern cooking techniques to create a unique and delicious culinary experience.</p>
									</div>
								</div>
								<div class="restaurant-second-bottom-wrap mt-40">
									<div class="restaurant-second-img">
										<img src="assets/images/Homepage1/restaurant-4.png" alt="food-img">
									</div>
									<div>
										<h3 class="rest-txt3">Hygienic & Quality Assured</h3>
										<p class="rest-txt4">At Thaliwala, every dish is prepared in a clean, sanitized kitchen using fresh ingredients, ensuring the highest standards of hygiene and quality for a safe, flavorful meal.</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Our Restaurant Section End -->
		<!-- Ticker Section Start -->
		<section id="ticker-section" style="background:#F55A36;">
			<div class="ticker-wrap">
				<h2 class="d-none">Ticker Section</h2>
				<div class="marquee">
					<div class="marquee_group">
                        <p>Corporate orders</p>
                        <p aria-hidden="true">Birthday</p>
                        <p aria-hidden="true">Lunch</p>
                        <p aria-hidden="true">Dinner</p>
                        <p aria-hidden="true">Bulk orders</p>
                        <p aria-hidden="true">Anniversaries</p>
                        <p aria-hidden="true">House parties</p>
					</div>
					<div aria-hidden="true" class="marquee_group">
						<p>Corporate orders</p>
                        <p>Birthday</p>
                        <p>Lunch</p>
                        <p>Dinner</p>
                        <p>Bulk orders</p>
                        <p>Anniversaries</p>
                        <p>House parties</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Ticker Section End -->
		<!-- Services Section Start -->
		<section id="home3-services-sec" class="mt-100">
			<div class="container" id="Services">
				<div class="home2-services-top">
					<p class="homemenu-txt1 wow fadeInUp" data-wow-duration="1s"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>Thaliwalaa<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
					<h2 class="homemenu-txt2 wow fadeInUp" data-wow-duration="1.2s">Services </h2>
				</div>
                
					<div class="menupage-6-menu-bottom" >
						<div class="menupage-6-menu-bottom-full wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
							<a href="#">
								<img src="assets/images/thaliwala/Corporate.jpg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Corporate orders</p>
							
						</div>
						<div class="menupage-6-menu-bottom-full wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
							<a href="#">
								<img src="assets/images/thaliwala/Birthday.jpg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Birthday</p>
							
						</div>
						<div class="menupage-6-menu-bottom-full wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
							<a href="#">
								<img src="assets/images/thaliwala/Lunch.jpg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Lunch</p>
							
						</div>
						<div class="menupage-6-menu-bottom-full wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
							<a href="#">
								<img src="assets/images/thaliwala/Dinner.jpeg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Dinner</p>
							
						</div>
						<div class="menupage-6-menu-bottom-full mt-60 wow fadeInUp " data-wow-duration="1.4s" >
							<a href="#">
								<img src="assets/images/thaliwala/Bulk.webp" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Bulk Orders</p>
							
						</div>
					
						<div class="menupage-6-menu-bottom-full mt-60 wow fadeInUp" data-wow-duration="1.8s">
							<a href="#">
								<img src="assets/images/thaliwala/Anniversaries.jpg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">Anniversaries</p>
							
						</div>
						<div class="menupage-6-menu-bottom-full mt-60 wow fadeInUp" data-wow-duration="2.1s" >
							<a href="#">
								<img src="assets/images/thaliwala/House.jpg" class="img-fluid" alt="menu-img">
							</a>
							<p class="home3-menu-txt1">House parties</p>
							
						</div>
					</div>
			</div>	
		</section>  
		<!-- Services Section End -->
		<!-- Counter Section Start  -->
		<section id="counter-section" class="mt-50 reveal" data-aos="fade-down" data-aos-duration="1000">
			<div class="container">
				<div class="counter-full-section">
					<div class="counter-wrap">
						<div class="counter-img">
							<svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M89.3103 0.238579C88.5218 0.675604 88.326 1.28677 88.3184 3.33411C88.3117 5.16156 88.334 5.26183 88.8779 5.87046C89.6881 6.77734 90.844 6.77734 91.6541 5.87046C92.1941 5.26613 92.2205 5.15101 92.2205 3.39216C92.2205 2.37777 92.1154 1.31707 91.9869 1.03523C91.5591 0.0959011 90.2633 -0.289721 89.3103 0.238579ZM81.4923 8.05656C80.5674 8.56903 80.2592 9.69521 80.7721 10.6871C81.1802 11.4763 81.8578 11.6927 83.92 11.6927C85.6788 11.6927 85.7939 11.6663 86.3983 11.1263C86.9228 10.6576 87.0323 10.4184 87.0323 9.73821C87.0323 9.05804 86.9228 8.81881 86.3983 8.35012C85.7896 7.80619 85.6894 7.78391 83.8619 7.79055C82.6605 7.79505 81.7872 7.89297 81.4923 8.05656ZM94.1338 8.35012C93.6092 8.81881 93.4997 9.05804 93.4997 9.73821C93.4997 10.4184 93.6092 10.6576 94.1338 11.1263C94.7381 11.6663 94.8532 11.6927 96.6121 11.6927C98.6742 11.6927 99.3519 11.4763 99.76 10.6871C100.283 9.67527 99.9204 8.45078 98.969 8.01727C98.6872 7.88886 97.6264 7.78371 96.6121 7.78371C94.8532 7.78371 94.7381 7.8101 94.1338 8.35012ZM46.0944 10.7383C35.8883 11.7605 26.2977 16.8369 19.7365 24.6901C6.82825 40.1398 7.6507 62.8993 21.6423 77.4347C27.404 83.4203 35.0199 87.4253 43.4791 88.9183C47.1209 89.5611 52.9371 89.5613 56.551 88.9187C61.0442 88.1199 65.2848 86.6415 69.1426 84.5291C71.6461 83.1582 72.2847 82.5396 72.2847 81.485C72.2847 80.8826 72.1609 80.5451 71.8128 80.1968C71.0379 79.4218 70.3896 79.3714 69.2626 79.9982C64.5533 82.6182 61.0758 84.0047 57.2351 84.7943C44.8477 87.3406 31.6064 82.951 23.3895 73.5742C18.4028 67.8834 15.4751 61.1604 14.6384 53.4776C13.7933 45.7193 15.8817 37.1715 20.2392 30.5536C26.2229 21.4662 35.5236 15.8343 46.5266 14.6358C49.112 14.3541 51.2148 14.376 54.109 14.7149C67.8298 16.3211 79.2597 25.5679 83.6084 38.5795C84.6207 41.6086 85.1255 44.0904 85.4138 47.4584C86.013 54.4545 84.1699 62.2762 80.5086 68.2753C79.5134 69.9062 79.3334 70.7032 79.7997 71.415C80.2127 72.0453 81.197 72.4755 81.9127 72.3387C82.6136 72.2048 83.1714 71.5217 84.4776 69.198C86.5943 65.4327 88.1092 61.1193 88.9205 56.5484C89.5661 52.9112 89.5675 47.0976 88.9241 43.4765C87.6562 36.3422 84.7579 30.0665 80.2262 24.6426C71.9203 14.7016 59.015 9.44425 46.0944 10.7383ZM89.56 13.0495C89.3331 13.1453 88.9592 13.4629 88.7294 13.7551C88.3703 14.2115 88.3115 14.5429 88.3115 16.1075C88.3115 18.147 88.5296 18.825 89.3171 19.2322C90.3289 19.7554 91.5534 19.3926 91.9869 18.4412C92.1154 18.1593 92.2205 17.0986 92.2205 16.0843C92.2205 14.3453 92.1898 14.206 91.683 13.6497C91.1061 13.0167 90.2271 12.7681 89.56 13.0495ZM36.0773 37.9545C34.0589 38.7075 32.7495 40.5262 32.7198 42.6171C32.7077 43.4687 32.7814 43.6497 33.3445 44.1531C34.2166 44.9328 35.1661 44.9324 35.9461 44.1524C36.33 43.7685 36.5174 43.3837 36.5174 42.9797C36.5174 42.2499 37.1174 41.5965 37.7878 41.5965C38.4582 41.5965 39.0583 42.2499 39.0583 42.9797C39.0583 43.8406 39.9831 44.7237 40.8849 44.7237C41.7799 44.7237 42.7165 43.9466 42.8814 43.067C43.0519 42.1588 42.5236 40.482 41.7869 39.5929C40.828 38.4359 39.6405 37.8411 38.1152 37.7547C37.3006 37.7084 36.5352 37.7834 36.0773 37.9545ZM61.6235 37.9466C59.4429 38.7869 58.2123 40.5139 58.2123 42.734C58.2123 45.171 61.5721 45.4187 62.0181 43.0147C62.0931 42.6109 62.2925 42.1267 62.4614 41.9385C63.1224 41.2019 64.4667 41.7489 64.4667 42.7543C64.4667 43.4145 65.0548 44.2861 65.6734 44.5423C66.4405 44.8601 67.4983 44.6136 67.9764 44.006C68.8217 42.9314 68.2248 40.4769 66.7871 39.1156C65.4359 37.836 63.2154 37.3333 61.6235 37.9466ZM40.4907 56.931C39.6708 57.2875 39.4492 57.7562 39.4492 59.133C39.4492 62.7353 41.8997 66.6662 45.2356 68.4151C51.9567 71.9388 59.9016 68.1846 61.456 60.7505C61.6245 59.9443 61.7185 58.9461 61.6647 58.5326C61.4763 57.0829 60.193 56.3371 58.9235 56.9395C58.1619 57.3008 57.957 57.7336 57.675 59.5778C57.2888 62.1015 55.7776 64.1734 53.5676 65.2091C52.5841 65.67 52.2065 65.7343 50.492 65.7331C48.1252 65.7316 47.2161 65.3833 45.6066 63.8611C44.2844 62.6106 43.6087 61.2741 43.3806 59.4586C43.1731 57.8057 42.9502 57.3348 42.1894 56.9412C41.499 56.5843 41.2905 56.583 40.4907 56.931ZM75.2014 75.1987C73.4519 76.9484 75.8373 79.6333 77.7279 78.0425C78.4804 77.4093 78.6622 76.6073 78.25 75.7386C77.6671 74.5104 76.1571 74.243 75.2014 75.1987ZM8.78509 80.7638C7.99664 81.2008 7.8008 81.812 7.79318 83.8593C7.78653 85.6867 7.80882 85.787 8.35275 86.3956C8.82144 86.9202 9.06067 87.0297 9.74083 87.0297C10.421 87.0297 10.6602 86.9202 11.1289 86.3956C11.6689 85.7913 11.6953 85.6762 11.6953 83.9173C11.6953 82.903 11.5902 81.8423 11.4618 81.5604C11.0339 80.6211 9.7381 80.2355 8.78509 80.7638ZM0.967107 88.5817C0.0422402 89.0942 -0.265984 90.2204 0.246876 91.2123C0.654974 92.0015 1.3326 92.2179 3.39478 92.2179C5.15363 92.2179 5.26875 92.1915 5.87308 91.6515C6.77997 90.8413 6.77997 89.6854 5.87308 88.8753C5.26445 88.3314 5.16419 88.3091 3.33674 88.3157C2.13531 88.3202 1.26204 88.4181 0.967107 88.5817ZM13.6086 88.8753C13.084 89.344 12.9745 89.5832 12.9745 90.2634C12.9745 90.9436 13.084 91.1828 13.6086 91.6515C14.2129 92.1915 14.328 92.2179 16.0869 92.2179C18.1491 92.2179 18.8267 92.0015 19.2348 91.2123C19.5874 90.5306 19.5874 89.9962 19.2348 89.3145C18.8267 88.5253 18.1491 88.3089 16.0869 88.3089C14.328 88.3089 14.2129 88.3353 13.6086 88.8753ZM9.03487 93.5747C8.80795 93.6705 8.43406 93.9881 8.20421 94.2803C7.84517 94.7366 7.78634 95.0681 7.78634 96.6327C7.78634 98.6722 8.00446 99.3502 8.79193 99.7573C9.80377 100.281 11.0283 99.9178 11.4618 98.9664C11.5902 98.6845 11.6953 97.6238 11.6953 96.6094C11.6953 94.8705 11.6646 94.7312 11.1578 94.1749C10.5809 93.5419 9.70194 93.2932 9.03487 93.5747Z" fill="#FFDE9F"/>
							</svg>
						</div>
						<h3 class="text-center">
							<span class="counter-txt" data-count="10">0</span>
							<span class="counter-txt-K">K</span>
						</h3>
						<p class="conter-name">Happy Customers</p>
					</div>
					<div class="counter-wrap">
						<div class="counter-img">
							<svg width="87" height="100" viewBox="0 0 87 100" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M33.2525 0.364438C31.3861 0.85345 29.6799 1.77872 28.3149 3.04219L27.2112 4.06358L25.8651 3.90064C19.0623 3.07657 13.0793 8.14527 12.7489 15.0129C12.5801 18.5175 13.6498 21.2642 16.1669 23.7901L17.6414 25.2699L16.9201 31.131C16.5233 34.3546 16.2027 37.4878 16.2072 38.0938L16.2158 39.1953L15.4923 39.3311C11.556 40.0696 9.97738 44.9789 12.7569 47.8369C13.446 48.5454 15.0877 49.3933 15.7762 49.3962C16.0178 49.3974 16.2158 49.4357 16.2158 49.4818C16.2158 50.2136 16.7513 52.9623 17.1234 54.1402C17.6883 55.9284 18.1044 56.4315 19.0183 56.4315C20.2488 56.4315 20.6653 55.4822 20.1161 53.9298C19.3208 51.6826 19.1463 49.8612 19.1463 43.8082V38.0741L19.5859 37.9744C21.6359 37.5095 31.2079 36.8981 36.4366 36.8981C41.8501 36.8981 50.6615 37.4733 53.2092 37.9928L53.7662 38.1063L53.6779 44.4848C53.5972 50.317 53.5524 50.9969 53.1558 52.4205C51.7757 57.3755 48.5267 61.3611 44.0164 63.6325C41.1439 65.0788 37.2322 65.7085 34.0279 65.2398C30.3041 64.6953 27.2827 63.1956 24.0966 60.3102C23.085 59.3941 22.6575 59.2265 21.988 59.4834C21.5124 59.6658 21.0731 60.6521 21.2151 61.2181C21.3773 61.8643 23.6185 63.9206 25.3671 65.0278C26.1308 65.5113 26.7578 66.0388 26.7601 66.2C26.7665 66.6519 26.0552 67.7112 25.5711 67.9703C25.3323 68.098 21.2391 69.5055 16.4752 71.0978C11.7111 72.69 7.26427 74.2831 6.59297 74.6379C5.86483 75.0229 4.73402 75.9136 3.78882 76.8469C2.52399 78.0955 2.04221 78.7453 1.39749 80.0713C0.0277426 82.8882 0 83.1181 0 91.6251V99.1893L0.514801 99.5941C1.35196 100.253 2.18073 100.101 2.64473 99.2036C2.88015 98.7484 2.93056 97.4001 2.93056 91.5513C2.93056 83.8238 3.00538 83.1341 4.05863 81.1605C4.80318 79.7652 6.7227 77.8879 8.11452 77.1939C8.75553 76.8743 12.4627 75.5352 16.3527 74.2182L23.4253 71.8236L26.4143 74.1248C28.0581 75.3904 29.5928 76.5943 29.8245 76.8L30.2457 77.1744L28.9287 78.4763C27.5156 79.8732 26.7689 81.1969 26.3975 82.9626C26.259 83.6206 26.1797 86.7389 26.1797 91.5191V99.04L26.6593 99.5195C27.2431 100.103 27.9122 100.132 28.5872 99.6006L29.0938 99.2022L29.1508 91.2485C29.2054 83.6382 29.2257 83.2566 29.6193 82.4058C30.3383 80.8518 31.1421 80.1391 33.3855 79.0667C34.5263 78.5213 38.5624 76.6277 42.3546 74.859L49.2494 71.6432L56.4212 74.023C63.8694 76.4945 65.8895 77.3154 66.9632 78.3071C67.5521 78.851 67.5982 78.9841 67.5982 80.1413V81.3889L66.7833 81.5192C65.7432 81.6857 64.4176 82.9517 64.1052 84.077C63.8207 85.1017 63.8106 96.3004 64.0933 97.3181C64.3728 98.3248 65.2967 99.3226 66.3062 99.708C67.026 99.9829 67.879 100.018 72.3049 99.9587C78.2172 99.8786 78.4887 99.8159 80.3186 98.1044C81.6223 96.8847 82.2084 95.6881 82.4772 93.6961C82.7789 91.4618 82.5876 87.0732 82.1391 85.9324C81.6059 84.5768 80.7445 83.4327 79.6829 82.6699L78.7158 81.975L78.774 77.0382C78.8441 71.0686 78.7074 71.3898 81.2499 71.2251C83.87 71.0554 85.2029 70.328 85.9834 68.6421C86.3172 67.9212 86.3452 67.2329 86.3452 59.7528C86.3452 52.2726 86.3172 51.5843 85.9834 50.8634C85.7845 50.4336 85.3687 49.8448 85.0596 49.555C83.8405 48.4117 83.9402 48.4213 73.1647 48.4213C61.9922 48.4213 62.4926 48.3558 61.083 50.0026C60.0163 51.2487 59.9495 51.8987 60.0169 60.3727C60.0745 67.6133 60.0903 67.8865 60.498 68.6421C61.4466 70.3999 62.6258 71.0505 65.1666 71.2173C67.4616 71.3681 67.5982 71.5002 67.5982 73.57C67.5982 74.3519 67.5513 74.9917 67.4941 74.9917C67.4366 74.9917 66.9312 74.7578 66.3707 74.4718C65.8102 74.1858 61.4831 72.6465 56.7551 71.0509C52.0272 69.4555 47.9535 68.0439 47.7026 67.9146C47.2228 67.6671 46.8311 67.0344 46.6258 66.1756C46.5193 65.7309 46.6133 65.5909 47.3309 65.1227C49.0519 64.0005 50.8626 62.3709 52.0842 60.8445C54.33 58.039 56.0577 54.0286 56.4185 50.7831L56.5598 49.5128L57.2987 49.3597C59.6175 48.8785 61.5417 46.6493 61.5417 44.4443C61.5417 42.2109 59.9803 40.1175 57.8467 39.4905L56.658 39.1412L56.6539 38.0667C56.6518 37.4757 56.3042 34.273 55.8814 30.9495L55.1131 24.9069L56.3724 23.5721C58.675 21.1312 59.7043 18.3422 59.531 15.0129C59.3618 11.7588 58.2939 9.34719 57.022 9.34719C56.4224 9.34719 55.4831 10.0894 55.4878 10.5595C55.4893 10.6986 55.7519 11.5598 56.0713 12.4731C56.7444 14.3971 56.83 16.0265 56.3542 17.8536C55.9473 19.4168 55.2789 20.5038 53.6988 22.1737C52.9714 22.942 52.3208 23.7923 52.2528 24.0629C52.185 24.3335 52.4132 26.8502 52.76 29.6556C53.1068 32.4609 53.3395 34.8071 53.2774 34.8694C53.215 34.9315 51.7742 34.8411 50.0754 34.6684C40.8573 33.731 32.0673 33.7308 22.7021 34.6676C20.9504 34.8428 19.489 34.954 19.4542 34.9145C19.4194 34.8753 19.6748 32.651 20.0216 29.9717C20.4377 26.7555 20.6003 24.8711 20.4998 24.4261C20.3902 23.9402 19.9131 23.3365 18.7917 22.2641C16.4955 20.0687 15.6296 18.2389 15.6296 15.5811C15.6296 13.1219 16.5893 10.9406 18.442 9.18835C20.4817 7.25946 22.982 6.47758 25.9227 6.84937C26.8021 6.96054 27.7493 6.99434 28.0273 6.92459C28.3055 6.85484 29.1464 6.23474 29.896 5.54684C31.4967 4.07804 32.8502 3.38526 34.759 3.05782C37.4666 2.59362 40.1148 3.43136 42.2651 5.43255C43.9709 7.02013 44.0846 7.06311 46.0758 6.87536C48.2421 6.67119 49.4174 6.75735 50.7582 7.21862C52.159 7.7006 52.5912 7.68556 53.1068 7.13676C53.7097 6.49497 53.6679 5.57536 53.0122 5.05978C51.8941 4.18022 48.8633 3.63865 46.5175 3.89928L45.0718 4.05987L43.9111 2.98533C41.1288 0.409373 36.9774 -0.611438 33.2525 0.364438ZM26.4991 18.5439C26.1507 18.8178 25.9843 19.1351 25.9843 19.5252C25.9843 20.2682 28.9959 27.4846 29.4496 27.8288C29.9564 28.2135 30.8131 28.1582 31.2593 27.712C31.8333 27.138 31.8358 26.5478 31.2708 25.1722C28.982 19.6018 28.4936 18.5784 28.0206 18.363C27.3347 18.0504 27.0891 18.0797 26.4991 18.5439ZM35.2265 18.6101L34.6783 19.0813L34.612 22.3544C34.5362 26.1082 34.6513 27.1966 35.1808 27.7261C35.67 28.2153 36.624 28.2085 37.1204 27.712C37.4869 27.3455 37.5111 27.0608 37.5111 23.1351V18.9487L36.9963 18.5439C36.3262 18.0168 35.8982 18.0328 35.2265 18.6101ZM44.2139 18.3721C43.9785 18.486 43.7439 18.6779 43.6927 18.7986C41.7024 23.4881 40.7582 25.7718 40.6236 26.2211C40.2246 27.5524 41.746 28.6572 42.8375 27.8288C43.2912 27.4846 46.3028 20.2682 46.3028 19.5252C46.3028 19.1351 46.1364 18.8178 45.788 18.5439C45.2222 18.0986 44.8614 18.0593 44.2139 18.3721ZM16.2158 44.3185C16.2158 46.7843 16.0724 46.9494 14.9263 45.8033C14.3943 45.2713 14.262 44.9849 14.262 44.3644C14.262 43.3073 15.1279 42.2615 16.0692 42.1817C16.1497 42.1751 16.2158 43.1365 16.2158 44.3185ZM57.4454 42.4658C58.0768 42.7923 58.6116 43.6607 58.6104 44.3576C58.609 45.2444 57.5261 46.4676 56.7424 46.4676C56.6957 46.4676 56.6575 45.5005 56.6575 44.3185C56.6575 43.1365 56.7057 42.1694 56.7649 42.1694C56.8239 42.1694 57.1301 42.3029 57.4454 42.4658ZM26.78 43.4657C26.4321 43.9078 26.375 44.2537 26.375 45.9166C26.375 47.7119 26.41 47.8879 26.8547 48.3324C27.1184 48.5962 27.5619 48.812 27.8403 48.812C28.1187 48.812 28.5622 48.5962 28.8259 48.3324C29.2745 47.884 29.3056 47.7197 29.3056 45.7926C29.3056 43.9928 29.2562 43.683 28.9148 43.3417C28.333 42.7598 27.2874 42.8206 26.78 43.4657ZM43.9584 43.3417C43.6157 43.6843 43.5676 43.9928 43.5676 45.8475C43.5676 47.8057 43.6012 47.994 44.0197 48.3873C44.8653 49.1815 46.116 48.745 46.4157 47.5509C46.4833 47.2817 46.5076 46.3216 46.4695 45.4173C46.4159 44.1413 46.3171 43.681 46.0283 43.362C45.5426 42.8255 44.4849 42.8151 43.9584 43.3417ZM83.119 51.7862C83.3816 52.1609 83.4232 53.2536 83.4232 59.7747C83.4232 68.8764 83.6313 68.1826 80.8621 68.3116C78.716 68.4114 77.9349 68.7306 76.9109 69.9271C75.944 71.0565 75.8038 71.9595 75.8038 77.0583V81.4502L73.2151 81.3957L70.6264 81.3412L70.5288 76.2616C70.4225 70.7396 70.3904 70.5728 69.2274 69.4963C68.3201 68.6564 67.7934 68.4798 65.7717 68.3374C62.7655 68.1256 63.007 68.8742 63.007 59.7678C63.007 52.5747 63.0265 52.1527 63.3792 51.7631C63.7478 51.3558 63.841 51.3519 73.2831 51.3519H82.815L83.119 51.7862ZM32.7222 54.0896C32.2721 54.587 32.2641 55.532 32.706 56.0202C33.1767 56.5403 34.8115 57.2124 35.9277 57.3447C37.0243 57.4746 38.6785 57.0491 39.6725 56.3817C40.4579 55.8542 40.6593 54.9365 40.1576 54.1708C39.7653 53.5724 38.8758 53.5408 37.8042 54.087C36.8432 54.577 36.0855 54.5759 34.9989 54.0827C33.9128 53.59 33.1724 53.5922 32.7222 54.0896ZM66.3097 54.6937C65.9657 55.0739 65.9376 55.4564 65.9376 59.7528C65.9376 64.0492 65.9657 64.4317 66.3097 64.8119C66.5633 65.0921 66.9177 65.2232 67.422 65.2232C68.7198 65.2232 68.7704 65.0176 68.7704 59.7528C68.7704 54.4879 68.7198 54.2824 67.422 54.2824C66.9177 54.2824 66.5633 54.4135 66.3097 54.6937ZM72.1709 54.6937C71.8268 55.0739 71.7987 55.4564 71.7987 59.7528C71.7987 64.0492 71.8268 64.4317 72.1709 64.8119C72.4244 65.0921 72.7788 65.2232 73.2831 65.2232C74.5809 65.2232 74.6315 65.0176 74.6315 59.7528C74.6315 54.4879 74.5809 54.2824 73.2831 54.2824C72.7788 54.2824 72.4244 54.4135 72.1709 54.6937ZM78.032 54.6937C77.6879 55.0739 77.6598 55.4564 77.6598 59.7528C77.6598 64.0492 77.6879 64.4317 78.032 64.8119C78.2856 65.0921 78.64 65.2232 79.1442 65.2232C80.4421 65.2232 80.4927 65.0176 80.4927 59.7528C80.4927 54.4879 80.4421 54.2824 79.1442 54.2824C78.64 54.2824 78.2856 54.4135 78.032 54.6937ZM45.0118 69.4635L45.5409 70.0894L44.7985 70.4618C44.3901 70.6666 41.6583 71.9545 38.7275 73.3238C35.0702 75.0325 33.324 75.7552 33.1595 75.6278C33.0278 75.5258 31.5791 74.4099 29.9405 73.148C28.302 71.8861 26.9611 70.8092 26.9611 70.7547C26.9611 70.7002 27.3945 70.2661 27.9239 69.7899C28.5227 69.2515 29.0141 68.5906 29.2239 68.0412C29.4775 67.3775 29.6387 67.1882 29.8729 67.2789C31.0268 67.7255 33.6494 68.1889 35.5574 68.2834C37.9515 68.4018 40.2272 68.117 42.4931 67.4154L43.6653 67.0526L44.074 67.9451C44.2987 68.4358 44.7207 69.1192 45.0118 69.4635ZM34.3678 84.735C33.4025 85.5167 34.0226 87.3 35.2597 87.3C36.0064 87.3 36.7297 86.5791 36.7297 85.8348C36.7297 84.626 35.3156 83.9676 34.3678 84.735ZM43.1595 84.735C42.1942 85.5167 42.8143 87.3 44.0514 87.3C44.7981 87.3 45.5213 86.5791 45.5213 85.8348C45.5213 84.626 44.1072 83.9676 43.1595 84.735ZM77.8868 85.0072C78.3151 85.3041 78.8787 85.9195 79.1395 86.3748C79.5871 87.156 79.6135 87.3768 79.6135 90.3283C79.6135 94.0481 79.498 94.7038 78.6775 95.6381C77.5103 96.9676 77.0704 97.0594 71.8544 97.0643C67.4712 97.0684 67.2102 97.0482 67.0189 96.6907C66.7081 96.1097 66.7464 84.9087 67.0604 84.5947C67.245 84.4101 68.4875 84.3652 72.206 84.4091L77.1081 84.4672L77.8868 85.0072ZM15.0775 88.729C14.6643 89.1689 14.6528 89.3165 14.6528 94.1853V99.1893L15.1676 99.5941C16.0048 100.253 16.8335 100.101 17.2975 99.2036C17.7142 98.3979 17.7142 89.8781 17.2975 89.0724C16.8214 88.1518 15.7723 87.9895 15.0775 88.729ZM34.3678 93.5267C33.4025 94.3084 34.0226 96.0917 35.2597 96.0917C36.0064 96.0917 36.7297 95.3708 36.7297 94.6264C36.7297 93.4177 35.3156 92.7593 34.3678 93.5267ZM43.1595 93.5267C42.1942 94.3084 42.8143 96.0917 44.0514 96.0917C44.7981 96.0917 45.5213 95.3708 45.5213 94.6264C45.5213 93.4177 44.1072 92.7593 43.1595 93.5267Z" fill="#FFDE9F"/>
							</svg>
						</div>
						<h3 class="text-center">
							<span class="counter-txt" data-count="15">0</span>
							<span class="counter-txt-K"></span>
						</h3>
						<p class="conter-name">professional chefs</p>
					</div>
					<div class="counter-wrap">
						<div class="counter-img">
							<svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_502_2618" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100">
									<rect width="100" height="100" fill="white"/>
								</mask>
								<g mask="url(#mask0_502_2618)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M49.3746 5.39464C47.9229 6.16116 47.9664 5.81942 47.8549 17.3021C47.7321 29.9536 48.0676 28.5946 44.0416 32.75C41.7537 35.1113 41.1318 35.8804 40.5538 37.0629C39.9041 38.3922 39.2292 40.6369 38.9705 42.3282L38.8635 43.0279L37.788 42.9388C36.1483 42.8028 35.0435 43.2004 33.8602 44.3524C33.0601 45.1317 32.776 45.5809 32.5185 46.4748C31.8739 48.7115 32.513 50.6515 34.573 52.7115C35.3237 53.4622 35.9378 54.1111 35.9378 54.1537C35.9378 54.1965 35.5643 54.2317 35.1074 54.2323C33.8106 54.2341 29.0018 54.9842 26.9498 55.5049C23.7072 56.3277 21.198 57.2824 20.6306 57.9094C20.1167 58.4772 20.2697 59.4661 20.9497 59.9716C21.4844 60.369 21.5138 60.3702 22.4151 60.0308C28.669 57.6763 34.5861 56.7831 42.2881 57.0315C59.052 57.5717 68.0776 63.786 70.5261 76.4739C70.743 77.5978 70.9761 79.4276 71.0441 80.5404L71.168 82.5633H55.4461C39.894 82.5633 39.7193 82.5676 39.2965 82.9617C38.7216 83.4973 38.7216 84.5602 39.2965 85.0958C39.7197 85.4901 39.8895 85.4942 56.159 85.4942H72.5941L73.007 86.4711L73.4197 87.4481H40.122H6.82431V86.7945C6.82431 85.4221 6.05349 85.4942 20.7246 85.4942C33.724 85.4942 33.9163 85.4885 34.3378 85.0958C34.9126 84.5602 34.9126 83.4973 34.3378 82.9617C33.9169 82.5695 33.7186 82.5633 21.6075 82.5633H9.30502L9.4289 80.5404C9.84079 73.8073 12.1624 68.1722 16.1385 64.2542C17.1172 63.2901 17.3755 62.9118 17.3755 62.4435C17.3755 61.648 16.7655 61.0701 15.9259 61.0701C14.2283 61.0701 10.2384 66.2013 8.55667 70.5466C7.3761 73.5971 6.43353 78.4426 6.43353 81.4611C6.43353 82.6799 6.43118 82.6852 5.5906 83.2776C4.59468 83.9795 4.05208 85.0082 3.93211 86.4223L3.84496 87.4481H3.0798C1.9348 87.4481 0.847246 88.0884 0.355637 89.0517C0.0101827 89.7291 -0.0456997 90.1078 0.0291358 91.2719C0.136016 92.9394 0.620395 93.8595 1.80272 94.6419L2.59484 95.1661H50.0061H97.4174L98.2095 94.6419C99.3919 93.8595 99.8762 92.9394 99.9831 91.2719C100.098 89.4874 99.6334 88.4356 98.4686 87.8414C97.791 87.4958 97.3189 87.4481 94.5743 87.4481H91.4509L91.904 86.4223C92.6389 84.7591 92.8599 83.391 92.7528 81.1672C92.6461 78.9454 92.4118 78.2234 91.6918 77.8953C91.0287 77.5933 90.7608 77.622 90.2299 78.0522C89.7838 78.4135 89.7686 78.519 89.7686 81.2274C89.7686 83.8671 89.7379 84.0942 89.2375 85.162C88.9456 85.7853 88.521 86.5561 88.2939 86.8748L87.8815 87.4542L82.3982 87.4022C76.2659 87.3443 76.6884 87.4561 76.4795 85.8351C76.3973 85.1954 76.144 84.6233 75.6663 83.9973L74.9724 83.0885L75.0635 81.3116C75.1401 79.8141 75.3283 79.0167 76.2601 76.2396C78.1427 70.6285 78.9133 66.9045 78.9207 63.382C78.9227 62.4503 78.9776 61.5492 79.0429 61.3792C79.1445 61.1142 79.6306 61.0701 82.4394 61.0701C86.2484 61.0701 85.9486 60.8622 85.9594 63.5125C85.9709 66.4012 87.0893 72.3952 87.8271 73.5232C88.4049 74.4064 89.8393 74.2769 90.2838 73.3013C90.4569 72.9214 90.3975 72.421 89.9876 70.8071C89.3442 68.2734 88.9483 65.5008 88.834 62.7301L88.7455 60.5798L89.8159 60.1074C91.9294 59.1746 93.517 57.062 93.9779 54.5684C94.0885 53.9705 94.1977 52.3682 94.2208 51.0079C94.2618 48.5835 94.253 48.5268 93.7741 48.1353C93.3179 47.7621 93.0987 47.7423 90.4524 47.8359C87.4186 47.9434 85.7712 48.3105 84.6086 49.1384L84.0045 49.5685V48.0059V46.4433L85.0395 46.1424C87.1321 45.5342 89.226 43.7837 90.218 41.8133C91.8987 38.4746 90.4784 33.5412 86.7009 29.5966C85.4631 28.3041 84.3617 27.8533 82.4413 27.8533C80.5388 27.8533 79.4815 28.2863 78.2099 29.5862C74.4322 33.4484 72.9781 38.4631 74.6647 41.8133C75.6567 43.7837 77.7505 45.5342 79.8432 46.1424L80.8782 46.4433V52.2913V58.1392H79.8162C78.5907 58.1392 77.8435 58.3797 77.196 58.9827C76.3271 59.7916 76.1636 60.401 75.9867 63.4853C75.7833 67.0376 75.2775 69.7777 74.2081 73.1233L73.4109 75.6163L72.9642 73.863C72.3802 71.5709 71.6824 69.7559 70.6113 67.7425L69.7408 66.1061L69.7367 56.6028C69.7306 42.8544 69.4942 40.3891 67.8629 37.0629C67.2843 35.8833 66.6548 35.1055 64.3726 32.75C60.3465 28.5946 60.682 29.9536 60.5593 17.3021C60.4473 5.78132 60.4956 6.14905 58.9979 5.38506C58.298 5.02808 57.8592 4.9931 54.166 5.00092C50.5112 5.00873 50.0307 5.0482 49.3746 5.39464ZM57.6264 10.7564V13.5896H54.2071H50.7877V10.7564V7.92321H54.2071H57.6264V10.7564ZM57.6264 21.5112C57.6264 29.4199 58.0387 30.6408 62.0439 34.5943C64.7159 37.2317 65.2227 37.9461 65.9584 40.1105C66.3994 41.4081 66.4883 42.0611 66.5706 44.6082L66.6669 47.588H66.0455C65.2778 47.588 64.4652 48.3414 64.4652 49.0534C64.4652 49.7521 65.2782 50.5189 66.0195 50.5189H66.6145V56.3851V62.2514L64.9785 60.928C60.3893 57.2159 53.7895 54.8738 46.3324 54.3108C45.3439 54.2364 44.5351 54.1354 44.5351 54.0865C44.5351 54.0379 44.9785 53.5994 45.5201 53.1123C46.0619 52.6252 46.7694 51.8424 47.0926 51.3727L47.6802 50.5189H53.6391H59.5982L60.0777 50.0392C60.3414 49.7754 60.5573 49.3318 60.5573 49.0534C60.5573 48.775 60.3414 48.3314 60.0777 48.0676L59.5982 47.588H53.9367H48.2753L47.9516 46.4645C47.6976 45.583 47.4103 45.1295 46.6188 44.3599C45.4885 43.2608 44.5738 42.8985 42.93 42.8985H41.8588L42.0273 41.8241C42.2303 40.529 42.8602 38.7857 43.5097 37.7206C43.7719 37.2908 45.0562 35.8839 46.364 34.5943C50.3764 30.6374 50.7877 29.4209 50.7877 21.5112V16.5205H54.2071H57.6264V21.5112ZM83.8941 31.0439C84.3306 31.3631 84.1575 31.7498 83.1401 32.7287L82.439 33.4032L81.5609 32.5415C80.606 31.6042 80.5005 31.3006 81.0247 30.9952C81.5212 30.706 83.4775 30.7392 83.8941 31.0439ZM85.2538 40.791C85.9936 42.0572 85.8871 42.4956 84.6968 43.0853C81.7749 44.5328 77.6484 42.6535 76.9881 39.5747C76.7155 38.3037 76.9795 36.9535 77.8664 35.0828L78.5612 33.6174L81.6383 36.7437C83.3308 38.4631 84.9578 40.2846 85.2538 40.791ZM87.2402 35.542C87.7707 36.7009 88.1982 38.6685 88.0202 39.1323C87.9358 39.3522 87.7461 39.2056 87.2998 38.5757C86.9664 38.1054 86.2019 37.2155 85.6005 36.5981L84.5072 35.4758L85.3652 34.6014C86.3511 33.5969 86.3492 33.5961 87.2402 35.542ZM38.9156 46.611C39.4385 47.1134 39.9104 47.3926 40.2365 47.3926C40.5626 47.3926 41.0345 47.1134 41.5573 46.611C42.2228 45.9715 42.5095 45.8294 43.1336 45.8294C44.5701 45.8294 45.5504 47.1987 45.1504 48.6472C44.8544 49.7193 44.2659 50.4012 42.1752 52.0943L40.2365 53.6643L38.2978 52.0943C36.2071 50.4012 35.6186 49.7193 35.3226 48.6472C34.9226 47.1987 35.9029 45.8294 37.3394 45.8294C37.9635 45.8294 38.2501 45.9715 38.9156 46.611ZM91.3344 51.5447C91.2864 52.0013 91.1985 52.8872 91.1394 53.5131C90.9501 55.5152 89.7977 57.093 88.1247 57.6407C87.6318 57.8021 86.5032 57.993 85.6165 58.0647L84.0045 58.1954V56.8422C84.0045 52.632 85.8744 50.7889 90.2045 50.7307L91.422 50.7142L91.3344 51.5447ZM97.0958 90.9986C97.0958 91.3393 96.9502 91.779 96.7724 91.9755C96.461 92.3198 94.7523 92.3329 50.0401 92.3329C7.1303 92.3329 3.60424 92.3085 3.27383 92.0095C3.0632 91.819 2.91646 91.4177 2.91646 91.0326V90.379H50.0061H97.0958V90.9986Z" fill="#FFDE9F"/>
								</g>
							</svg>
						</div>
						<h3 class="text-center">
							<span class="counter-txt" data-count="250">0</span>
							<span class="counter-txt-K">+</span>
						</h3>
						<p class="conter-name">Favourite Dishes</p>
					</div>
					<div class="counter-wrap">
						<div class="counter-img">
							<svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="mask0_502_2625" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100">
									<rect width="100" height="100" fill="white"/>
								</mask>
								<g mask="url(#mask0_502_2625)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M48.699 0.427177C48.1528 0.788745 47.6488 1.64549 45.8545 5.26176C44.6551 7.67905 43.6442 9.71602 43.6081 9.78829C43.572 9.86057 41.3658 10.2325 38.7057 10.6146C36.0455 10.9968 33.6071 11.4449 33.2869 11.6104C32.2975 12.122 31.7983 13.2164 32.0092 14.4107C32.1167 15.0178 32.6964 15.6738 35.8361 18.74L39.5363 22.3537L38.7468 26.8464C38.3123 29.3175 37.951 31.665 37.9433 32.0633C37.915 33.549 39.3019 34.8844 40.6624 34.6814C41.0121 34.6292 43.2096 33.5922 45.5458 32.3768C47.8819 31.1614 49.8831 30.1426 49.9929 30.1127C50.1029 30.0826 52.1246 31.0763 54.4856 32.3208C56.8469 33.5654 59.0098 34.6316 59.2921 34.6902C60.0564 34.849 61.5209 34.1313 61.8902 33.417C62.3354 32.5563 62.2827 31.835 61.4095 26.8464L60.6233 22.3537L64.3157 18.74C67.4798 15.6435 68.0271 15.0214 68.1394 14.3934C68.3174 13.3979 67.715 12.0394 66.9118 11.6239C66.5852 11.4551 64.1384 11 61.474 10.6124C58.8098 10.2251 56.6164 9.89534 56.5996 9.8801C56.5828 9.86467 55.5668 7.83063 54.342 5.35962C52.533 1.71054 51.9925 0.784643 51.4624 0.427372C50.617 -0.142425 49.5592 -0.142425 48.699 0.427177ZM52.2121 7.59681C54.2584 11.793 54.7909 12.5398 55.8928 12.7594C56.1909 12.8187 58.0609 13.0928 60.0484 13.3682C62.036 13.6436 63.9155 13.9197 64.2249 13.9816C64.7726 14.0912 64.6943 14.1879 61.3296 17.5564C58.2248 20.6648 57.8618 21.0969 57.7788 21.7839C57.7261 22.2191 58.0169 24.4442 58.4533 26.9441C58.8752 29.3614 59.1993 31.3634 59.1735 31.3931C59.1477 31.4228 57.2612 30.4658 54.981 29.2667C51.7921 27.5895 50.6623 27.0861 50.0863 27.0861C49.5102 27.0861 48.3804 27.5895 45.1915 29.2667C42.9113 30.4658 41.023 31.4228 40.9953 31.3931C40.9676 31.3634 41.3055 29.2251 41.7464 26.6413C42.45 22.5174 42.517 21.8689 42.2954 21.3341C42.1566 20.9989 40.5198 19.2232 38.6581 17.3883C36.7963 15.5533 35.3317 14.0494 35.4034 14.0462C35.4751 14.0431 37.5921 13.7417 40.1081 13.3762C43.4571 12.8898 44.8176 12.6148 45.1868 12.3495C45.5089 12.1181 46.4673 10.455 47.8399 7.74566C49.0217 5.41295 50.0398 3.50412 50.1023 3.50392C50.165 3.50392 51.1143 5.34556 52.2121 7.59681ZM16.0463 11.6256C15.6463 11.8426 15.1306 12.6691 14.0547 14.817C12.6832 17.5557 12.5674 17.7219 11.9575 17.826C11.6024 17.8866 10.3011 18.078 9.06557 18.2512C6.29609 18.64 5.71262 18.8808 5.26725 19.8192C4.6789 21.059 4.91389 21.5122 7.49174 24.1117L9.81605 26.4558L9.34549 29.1905C9.08647 30.6946 8.87375 32.2194 8.87258 32.5788C8.86926 33.4932 9.51309 34.3097 10.4611 34.5937C11.2424 34.8279 11.2834 34.8136 14.2211 33.3002L17.1914 31.7699L20.0656 33.2636C21.6464 34.0854 23.1189 34.7576 23.3374 34.7576C23.8998 34.7576 24.8099 34.2513 25.1689 33.7385C25.5817 33.1494 25.5506 32.2084 25.0138 29.0471L24.5585 26.3642L26.8631 24.1145C29.4015 21.6368 29.6587 21.1512 29.1188 19.8589C28.7207 18.9062 28.1201 18.6509 25.3762 18.2682C24.087 18.0883 22.7417 17.8907 22.3865 17.8285C21.7775 17.7221 21.6593 17.5527 20.2884 14.8155C19.1481 12.5382 18.7117 11.8509 18.2579 11.6161C17.5356 11.2426 16.7462 11.2459 16.0463 11.6256ZM82.0169 11.5032C81.418 11.746 81.2288 12.0411 79.7821 14.9917C78.5183 17.5687 78.413 17.7188 77.794 17.827C77.4345 17.8899 76.0855 18.0883 74.7963 18.2682C73.5071 18.4481 72.212 18.7171 71.9184 18.8662C70.9671 19.3492 70.5183 20.757 71.005 21.7318C71.1222 21.9664 72.1982 23.0905 73.3962 24.2297L75.5742 26.3011L75.0505 29.4895C74.4742 32.9994 74.534 33.6033 75.5228 34.2513C76.5964 34.9547 76.9683 34.8748 80.0564 33.2775L82.9721 31.7693L85.8772 33.2834C88.3527 34.5736 88.8783 34.7795 89.4323 34.6755C90.2265 34.5265 91.0452 33.8022 91.2237 33.0902C91.2993 32.7894 91.1368 31.2462 90.8467 29.5087L90.3369 26.4558L92.5563 24.2094C94.7679 21.971 95.209 21.4016 95.209 20.7846C95.209 20.1816 94.574 19.1154 94.0594 18.8543C93.7785 18.7117 92.1862 18.4005 90.5209 18.1628C88.8557 17.9252 87.4772 17.7147 87.4578 17.6953C87.4383 17.6758 86.7919 16.3621 86.0215 14.7762C84.9327 12.5347 84.4967 11.8284 84.0645 11.6049C83.4577 11.291 82.6403 11.2504 82.0169 11.5032ZM18.4267 17.6145C19.0502 18.8695 19.7296 19.9591 20.0156 20.1626C20.3248 20.3826 21.2913 20.6277 22.5549 20.8066C25.9319 21.2846 25.8139 21.0285 23.6556 23.196C22.3737 24.4835 21.7335 25.2783 21.6529 25.6822C21.5878 26.009 21.7234 27.3145 21.9541 28.5836C22.1846 29.8527 22.3332 30.9311 22.2842 30.9804C22.235 31.0294 21.1753 30.5369 19.929 29.8859C18.683 29.2348 17.4555 28.7021 17.2015 28.7021C16.9476 28.7021 15.7096 29.2376 14.4506 29.8919C13.1917 30.5463 12.1245 31.0448 12.0794 30.9997C12.0341 30.9546 12.1726 29.9627 12.3871 28.7955C13.0116 25.3963 13.0803 25.633 10.7968 23.3126C8.5282 21.0073 8.4069 21.286 11.8933 20.791C14.526 20.4173 14.6418 20.3232 16.0914 17.3853C16.6747 16.2033 17.1935 15.278 17.2445 15.329C17.2955 15.38 17.8274 16.4084 18.4267 17.6145ZM85.759 20.195C85.987 20.3546 87.2902 20.6558 88.6551 20.8647C90.0201 21.0733 91.1767 21.2838 91.2253 21.3327C91.2739 21.3813 90.5422 22.1488 89.5989 23.0384C88.6557 23.9277 87.777 24.8407 87.6465 25.0673C87.3164 25.6402 87.3526 26.7181 87.7776 28.9952C87.9784 30.0695 88.1128 30.9786 88.0767 31.0151C88.0405 31.0519 86.9808 30.5463 85.7219 29.8919C84.4629 29.2376 83.2108 28.7021 82.9397 28.7021C82.6686 28.7021 81.4413 29.2348 80.2122 29.8859C78.9834 30.5369 77.9328 31.0247 77.8778 30.9696C77.8229 30.9147 77.9723 29.7742 78.21 28.4353C78.4567 27.0463 78.5814 25.8049 78.5003 25.5445C78.4222 25.2937 77.5228 24.236 76.502 23.1942C74.3779 21.0266 74.2611 21.2817 77.5935 20.8102C78.7023 20.6533 79.8235 20.3847 80.0853 20.2132C80.3644 20.0304 81.0549 18.9164 81.7564 17.517L82.9516 15.1325L84.1481 17.5187C84.8062 18.831 85.5311 20.0355 85.759 20.195ZM48.5275 37.9318C47.1068 38.6577 46.7466 39.3367 45.0292 44.5244C44.1578 47.1568 43.4448 49.4983 43.4448 49.7282C43.4448 50.859 44.9874 51.4725 45.7904 50.6613C45.9943 50.4554 46.8788 48.1772 47.7563 45.5988C48.6337 43.0203 49.4397 40.8009 49.5475 40.6665C50.1138 39.961 52.0752 41.0169 53.1794 42.6218C54.5933 44.677 54.654 45.9388 53.6066 51.5059C52.9735 54.8712 52.9497 55.148 53.1778 56.487C53.689 59.487 55.5707 62.1094 58.0802 63.3189C58.7867 63.6594 59.3878 63.9514 59.4159 63.9678C59.444 63.9842 59.2731 64.4288 59.0362 64.9556C58.719 65.6606 58.6031 66.3009 58.5971 67.3788C58.5881 69.0345 58.9883 70.1461 60.015 71.3152L60.6239 72.0087L60.1215 72.4773C59.3501 73.1969 58.6486 74.7498 58.5365 75.9871C58.3972 77.5238 58.7733 78.8913 59.6857 80.1653L60.4592 81.2457L59.8718 81.9792C58.132 84.1525 58.0892 87.1582 59.7669 89.3559L60.4584 90.2621L59.7761 91.0173C59.0694 91.7996 58.4857 93.3466 58.4857 94.4374C58.4857 94.7767 58.6166 95.486 58.7766 96.0134C58.9366 96.5408 59.0684 96.9944 59.0696 97.0211C59.0708 97.0479 58.3207 97.07 57.4026 97.07C55.8907 97.07 55.6881 97.1151 55.2539 97.5495C54.9902 97.8132 54.7743 98.2566 54.7743 98.535C54.7743 98.8133 54.9902 99.2567 55.2539 99.5205L55.7332 100L65.2649 99.9988C71.3133 99.9982 75.0659 99.923 75.5341 99.7929C76.5223 99.5185 77.6096 98.5303 78.0708 97.4876C78.3964 96.7516 78.439 96.27 78.3825 93.9573L78.3173 91.2794L79.059 90.6283C80.4087 89.443 80.6551 88.7193 80.6558 85.9358C80.656 84.5928 80.5894 83.2546 80.5076 82.9622C80.3738 82.4846 80.4337 82.3914 81.0936 82.0521C81.9617 81.6055 82.7215 80.8271 83.2134 79.8803C83.674 78.9937 83.8422 75.3804 83.4827 74.0966C83.1597 72.942 82.3105 71.7967 81.3817 71.2621L80.6316 70.8304L80.718 68.1267C80.8162 65.0459 80.6324 64.0827 79.7389 62.9988C79.417 62.6083 78.7886 62.0936 78.3423 61.8549C77.5482 61.4302 77.3482 61.4189 68.9362 61.3234L60.3414 61.2257L59.2946 60.6459C57.5745 59.6931 56.524 58.2267 56.1036 56.1915C55.9184 55.2943 55.979 54.7032 56.6033 51.3249C57.3862 47.087 57.4612 45.7587 57.0143 44.0429C56.3698 41.569 54.4757 39.1312 52.3861 38.0871C50.9156 37.3522 49.7532 37.3056 48.5275 37.9318ZM41.956 54.9648C41.7341 55.1202 41.3951 55.6695 41.2029 56.1856C40.1372 59.0477 38.0844 62.174 36.1574 63.8704L35.2594 64.6609L34.9348 64.0176C34.4798 63.1164 33.7137 62.3364 32.799 61.8426C32.086 61.4579 31.7273 61.421 28.6969 61.421C25.6422 61.421 25.3113 61.4556 24.5669 61.8539C23.5435 62.4012 22.478 63.6367 22.1846 64.6163C22.0297 65.1334 21.9578 67.7361 21.9578 72.8308V80.2888L22.4373 80.7681C23.0483 81.3793 23.7973 81.3793 24.4083 80.7681L24.8878 80.2888V72.8679V65.4473L25.3592 64.8992L25.8307 64.3511H28.6746C31.3734 64.3511 31.5412 64.3737 31.9633 64.7959L32.4083 65.2408L32.4606 80.581L32.513 95.921L31.9385 96.4955L31.364 97.07H28.6969H26.0298L25.4588 96.499L24.8878 95.928V91.0206V86.1133L24.4083 85.634C24.1446 85.3703 23.7012 85.1544 23.4228 85.1544C23.1445 85.1544 22.701 85.3703 22.4373 85.634L21.9578 86.1133V91.0319C21.9578 94.3225 22.0363 96.2163 22.1953 96.7543C22.5123 97.8273 24.1305 99.4454 25.2035 99.7625C26.2568 100.074 31.137 100.074 32.1903 99.7625C32.7003 99.6119 33.3674 99.154 34.0143 98.511L35.0344 97.497L36.5537 98.2607C39.1603 99.5707 41.6635 99.9957 46.788 99.9984C49.5794 99.9998 49.8819 99.9656 50.3529 99.5951C51.0497 99.0471 51.0645 98.0345 50.3839 97.4991C49.9503 97.1582 49.4791 97.1084 45.8424 97.0196C42.5959 96.9403 41.4854 96.8402 40.2893 96.5197C37.7115 95.8286 36.1394 94.8042 35.6438 93.4924C35.505 93.1247 35.436 88.8101 35.436 80.4796V68.0168L36.2662 67.4727C39.3168 65.4741 42.0224 61.9764 43.6368 57.9442C44.3447 56.1766 44.3693 55.6658 43.7741 55.1066C43.2514 54.6157 42.5343 54.5596 41.956 54.9648ZM77.3445 64.733C77.7959 65.1844 77.824 65.3391 77.824 67.3788C77.824 69.4185 77.7959 69.5732 77.3445 70.0246L76.8651 70.5042H70.4038C63.2471 70.5042 63.0304 70.4723 62.1258 69.2863C60.9499 67.7447 61.4445 65.5612 63.1664 64.6929C64.0175 64.2638 64.1888 64.2534 70.4515 64.2534H76.8651L77.3445 64.733ZM79.7596 73.7181C80.5754 74.14 80.8039 74.9067 80.725 76.9579C80.6607 78.6314 80.6222 78.7718 80.1083 79.2137L79.5602 79.685H71.5912C63.6258 79.685 63.6219 79.6848 62.9632 79.2408C61.5482 78.2874 61.0655 76.7991 61.6881 75.3095C61.9715 74.6313 62.9873 73.7384 63.6621 73.5745C63.877 73.5223 67.4634 73.4694 71.6319 73.4569C77.9098 73.4381 79.3051 73.4829 79.7596 73.7181ZM76.8296 82.8989C77.6453 83.3208 77.8739 84.0875 77.7949 86.1387C77.7307 87.8122 77.6922 87.9526 77.1783 88.3945L76.6301 88.8658H70.2864C63.2578 88.8658 63.0285 88.8316 62.1258 87.6479C60.9499 86.1063 61.4445 83.9228 63.1664 83.0546C64.0149 82.6266 64.1997 82.615 70.1594 82.615C75.1302 82.615 76.3838 82.6684 76.8296 82.8989ZM75.0893 92.1865C75.4251 92.5223 75.48 92.8376 75.48 94.4329C75.48 97.2477 75.9125 97.07 69.0628 97.07C63.5342 97.07 63.4143 97.0616 62.7632 96.6279C61.4128 95.7286 61.0935 94.0694 62.0391 92.8671C62.8241 91.8691 63.2095 91.8117 69.1804 91.8035C74.4437 91.7963 74.7166 91.8138 75.0893 92.1865Z" fill="#FFDE9F"/>
								</g>
							</svg>
						</div>
						<h3 class="text-center">
							<span class="counter-txt" data-count="4.5">0</span>
							<span class="counter-txt-K"></span>
						</h3>
						<p class="conter-name">Customer Rating</p>
					</div>
				</div>
			</div>
		</section> 
		<!-- Counter Section End -->
		<!-- Menu Section Start -->
		<section id="homepage3-menu-sec ptb-100" >
			<div class="container line homepage3-menu-sec-home3" id="menu">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="homepage3-menu-sec-full">
					<div class="homepage3-menu-top-sec">
						<p class="homemenu-txt1 wow fadeInUp " data-wow-duration="1s"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>Our Menu<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
						<h2 class="homemenu-txt2 wow fadeInUp " data-wow-duration="1.4s">This Week’s Specials</h2>
						<p class="homemenu-txt3 wow fadeInUp " data-wow-duration="1.6s">Diam leo massa pellentesque a neque turpis cum mi gravida. Amet massa adipiscing mi dictum urna commodo. Fringilla ipsum etiam habitasse dolor lacus viverra.</p>
					</div>
					<div class="homepage3-menu-bottom-sec wow fadeInUp" data-wow-duration="2s">
						<div class="homepage3-menu-details">
							<div class="home3-menu-slide">
								<img src="assets/images/thaliwala/paneer-butter-masala-recipe.jpg" class="img-fluid" alt="menu-img">
								<p class="home3-menu-txt1">Paneer butter Masala</p>
								
							</div>
							<div class="home3-menu-slide">
								<img src="assets/images/thaliwala/Paneer-Tikka.jpg" class="img-fluid" alt="menu-img">
								<p class="home3-menu-txt1">Paneer Tikka</p>
								
							</div>
							<div class="home3-menu-slide">
								<img src="assets/images/thaliwala/Paneer-Do-Pyaza.jpg" class="img-fluid" alt="menu-img">
								<p class="home3-menu-txt1">Paneer Do Pyaza</p>
								
							</div>
							<div class="home3-menu-slide">
								<img src="assets/images/thaliwala/Mushroom-Masala.jpg" class="img-fluid" alt="menu-img">
								<p class="home3-menu-txt1">Mushroom Masala</p>
								
							</div>
							<div class="home3-menu-slide">
								<img src="assets/images/thaliwala/Tarka-dahl.jpg" class="img-fluid" alt="menu-img">
								<p class="home3-menu-txt1">Tarka Dal</p>
								
							</div>
						</div>
					</div>
					<div class="view-all-homepage1" style="margin-bottom:100px;">
						<a href="#contact">Contact Us</a>
					</div>
				</div>
			</div> 
		</section> 
		<!-- Menu Section End -->
		<!-- Booking Section Start -->
		<section id="reservation-sec" >
			<div class="menupage-1-reser-overlay"></div>
			<div class="container" id="contact">
				<div class="reservation-sec-full" data-aos="fade-down">
					<div class="reser-top">
						<p class="reser-txt1-menu1"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>For More Details<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
						<h2 class="reser-txt2-menu1">Contact Us</h2>
						<p class="reser-txt3-menu1">You can Call Us directly at <a href="tel:+919916104429"><span class="menupage1-no">+91 9916104429</span></a></p>
					</div>
					<div class="reser-bottom-sec">
						<form class="menupage1-form" method="POST">
                            <div class="form-menupage1">
                                <div class="single-input-form-menupage1">
                                    <input type="text" name="name" placeholder="Name" class="menupage1-form-custom name-icon" required>
                                </div>
                                <div class="single-input-form-menupage1">
                                    <input type="email" name="email" placeholder="Email Address" class="menupage1-form-custom email-icon" required>
                                </div>
                                <div class="single-input-form-menupage1">
                                    <input type="tel" name="number" placeholder="Phone Number" class="menupage1-form-custom mobile-icon" required>
                                </div>
                                <div class="single-input-form-menupage1">
                                    <input type="text" name="person" placeholder="No. of Person" class="menupage1-form-custom name-icon" required>
                                </div>
                                <div class="single-input-form-menupage1">
                                    <input type="text" name="date" id="datepicker" autocomplete="off" placeholder="dd/mm/yy" class="menupage1-form-custom arrow-icon" required>
                                </div>
                                <div class="single-input-form-menupage1">
                                    <input type="text" name="address" placeholder="Address.." class="menupage1-form-custom map-icon" required>
                                </div>
                            </div>
                            <div class="menupage-1-book-now-btn">
                                <button type="submit" class="btnbulk">Bulk Order</button>
                            </div>
                        </form>


					</div>
				</div>
			</div>
		</section>
		<!-- Booking Section End -->
		
		<!-- Gallery Section Start -->
		<section id="homepage1-gallery-sec">
			<div class="container line index-gallery-top" id="gallery">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="gallery-top-sec">
					<p class="gallery-txt1"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>OUR GALLERY<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
					<h2 class="gallery-txt">Thaliwala Hot Dishes</h2>
				</div>
			</div>

			<div class="gallery-food-slider" id="gallery">
				<div class="swiper-wrapper gallery-item-sec">
					<div class="swiper-slide gallery-slide">
						<div class="gallery-item">
							<a class="gallery-popup" href="assets/images/thaliwala/dal-tadka.png" data-caption="Kebab" data-width="600" data-height="800">
								<img src="assets/images/thaliwala/dal-tadka.png" class="img-fluid" alt="gallery item">
								<div class="content-overlay-home2"></div>
							</a>		
						</div>
						<div class="home2-gallery-overlay fadeIn-bottom fadeIn-right">
							<a class="gallery-popup" href="assets/images/thaliwala/dal-tadka.png" data-caption="Kebab" data-width="600" data-height="800">
								<p class="gallery-overlay-txt1">Dal Tadka</p>
								
							</a>
						</div>
					</div>
					<div class="swiper-slide gallery-slide">
						<div class="gallery-item">
							<a class="gallery-popup" href="assets/images/thaliwala/shahi-paneer.jpg" data-caption="Shahi Paneer" data-width="600" data-height="800">
								<img src="assets/images/thaliwala/shahi-paneer.jpg" class="img-fluid" alt="gallery item">
								<div class="content-overlay-home2"></div>
							</a>		
						</div>
						<div class="home2-gallery-overlay fadeIn-bottom fadeIn-right">
							<a class="gallery-popup" href="assets/images/thaliwala/shahi-paneer.jpg" data-caption="Shahi Paneer" data-width="600" data-height="800">
								<p class="gallery-overlay-txt1">Shahi Paneer</p>
								
							</a>
						</div>	
					</div>
					<div class="swiper-slide gallery-slide">
						<div class="gallery-item">
							<a class="gallery-popup" href="assets/images/thaliwala/Matar-Paneer.jpg" data-caption="Matar Paneer" data-width="600" data-height="800">
								<img src="assets/images/thaliwala/Matar-Paneer.jpg" class="img-fluid" alt="gallery item">
								<div class="content-overlay-home2"></div>
							</a>		
						</div>
						<div class="home2-gallery-overlay fadeIn-bottom fadeIn-right">
							<a class="gallery-popup" href="assets/images/thaliwala/Matar-Paneer.jpg" data-caption="Matar Paneer" data-width="600" data-height="800">
								<p class="gallery-overlay-txt1">Matar Paneer</p>
								
							</a>
						</div>	
					</div>
					<div class="swiper-slide gallery-slide">
						<div class="gallery-item">
							<a class="gallery-popup" href="assets/images/thaliwala/gallery-4.png" data-caption="Pasta" data-width="600" data-height="800">
								<img src="assets/images/thaliwala/gallery-4.png" class="img-fluid" alt="gallery item">
								<div class="content-overlay-home2"></div>
							</a>		
						</div>
						<div class="home2-gallery-overlay fadeIn-bottom fadeIn-right">
							<a class="gallery-popup" href="assets/images/thaliwala/gallery-4.png" data-caption="Pasta" data-width="600" data-height="800">
								<p class="gallery-overlay-txt1">Pasta</p>
								
							</a>
						</div>
					</div>
					<div class="swiper-slide gallery-slide">
						<div class="gallery-item">
							<a class="gallery-popup" href="assets/images/thaliwala/Paneer-Tikka-Masala.jpg" data-caption="Paneer-Tikka-Masala" data-width="600" data-height="800">
								<img src="assets/images/thaliwala/Paneer-Tikka-Masala.jpg" class="img-fluid" alt="gallery item">
								<div class="content-overlay-home2"></div>
							</a>		
						</div>
						<div class="home2-gallery-overlay fadeIn-bottom fadeIn-right">
							<a class="gallery-popup" href="assets/images/thaliwala/Paneer-Tikka-Masala.jpg" data-caption="Paneer-Tikka-Masala" data-width="600" data-height="800">
								<p class="gallery-overlay-txt1">Paneer Tikka Masala</p>
								
							</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="pswp__bg"></div>
				<div class="pswp__scroll-wrap">
					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>
					<div class="pswp__ui pswp__ui--hidden">
						<div class="pswp__top-bar">
							<!--  Controls are self-explanatory. Order can be changed. -->
							<div class="pswp__counter"></div>
							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
							<button class="pswp__button pswp__button--share" title="Share"></button>
							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
									<div class="pswp__preloader__cut">
										<div class="pswp__preloader__donut"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div>
						</div>
						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
						</button>
						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
						</button>
						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Gallery Section End -->
		<!-- Testimonial Section Start -->
		<section id="homepage1-testimonial-sec" class="reveal" style="display:none;">
			<div class="container line ptb-100">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="tesimonila-deatils">
					<div class="tesimonila-left pbmit-animation-style1 reveal">
						<img src="assets/images/thaliwala/testimonial.jpg" alt="client-img" class="img-fluid">
					</div>
					<div class="tesimonila-right" >
						<div class="tesimonila-right-top">
							<p class="tesimonial-txt1 wow fadeInUp" data-wow-duration="1s"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>TESTIMONIALS<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
							<h2 class="tesimonial-txt2 wow fadeInUp " data-wow-duration="1.4s">What Clients Said</h2>
						</div>
						<div class="tesimonial-slider-section wow fadeInUp " data-wow-duration="1.6s" >
							<div class="tesimonila-slide">
								<h3 class="d-none">Client Name</h3>
								<p class="tesimonial-txt3">“ This Thaliwala restaurant has left the best 
									impressions! Hospitable hosts, delicious 
									dishes, beautiful presentation, wide wine
									list and wonderful dessert. I recommend 
									to everyone! I would like to come back 
									here again and again.”
								</p>
								<h4 class="tesimonial-txt4">PAUL SERGEO</h4>
							</div>
							<div class="tesimonila-slide">
								<p class="tesimonial-txt3">“ This Thaliwala restaurant has left the best 
									impressions! Hospitable hosts, delicious 
									dishes, beautiful presentation, wide wine
									list and wonderful dessert. I recommend 
									to everyone! I would like to come back 
									here again and again.”
								</p>
								<h4 class="tesimonial-txt4">PAUL SERGEO</h4>
							</div>
							<div class="tesimonila-slide">
								<p class="tesimonial-txt3">“ This Thaliwala restaurant has left the best 
									impressions! Hospitable hosts, delicious 
									dishes, beautiful presentation, wide wine
									list and wonderful dessert. I recommend 
									to everyone! I would like to come back 
									here again and again.”
								</p>
								<h4 class="tesimonial-txt4">PAUL SERGEO</h4>
							</div>
							<div class="tesimonila-slide">
								<p class="tesimonial-txt3">“ This Thaliwala restaurant has left the best 
									impressions! Hospitable hosts, delicious 
									dishes, beautiful presentation, wide wine
									list and wonderful dessert. I recommend 
									to everyone! I would like to come back 
									here again and again.”
								</p>
								<h4 class="tesimonial-txt4">PAUL SERGEO</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial Section End -->
		<!-- Visit Section Start -->
		<section id="visit-restaurant-sec " class="reveal" style="padding-top:100px;">
			<div class="container line visit-restaurant-sec1">
				<span class="line-3"></span>
				<span class="line-4"></span>
				<span class="line-5"> </span>
				<div class="visit-restaurant-full">
					<div class="visit-restaurant-left" data-aos="fade-right">
						<div class="gallery-top-sec">
							<p class="visit-txt1"><span class="pr-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span>RIGHT HERE WAITING<span class="pf-10"><img src="assets/images/Homepage1/yellow-star.png" alt="yellow-star"></span></p>
							<h2 class="visit-txt2">Our Kitchen</h2>
							<p class="visit-txt3">15/A, 1st floor 4th link road, 1st cross, behind Ayappa temple, opposite: Nile Residency BTM Layout 1st stage 560068</p>
							<div class="homepage-calling">
								<p class="visit-no-txt">M:<a href="mailto:hello@thaliwalaa.com" class="Visit-no">hello@thaliwalaa.com</a></p>
								<p class="visit-no-txt">T:<a href="tel:+919916104429" class="Visit-no">+91 9916104429</a></p>
							</div>
							<div class="direction-btn">
								<a href="#about">About Us</a>
							</div>
						</div>
					</div>
					<div class="visit-restaurant-right map" data-aos="fade-left">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7568423680927!2d77.60102427620093!3d12.923343783440078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15b692d6c95f%3A0x331d696e255b8419!2s1st%20Cross%20Rd%2C%20BTM%201st%20Stage%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1728565172351!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>	
		<!-- Visit Section End -->
		<!-- Footer Section Start -->
		<footer id="footer-section" class="mt-100">
			<div class="container">
				<div class="footer-full-section">
					<div class="footer-first">
						<h3 class="d-none">Footer</h3>
<!--                        <h1 style="color:#FFDE9F;">Thaliwala and burner story</h1>-->
						<img src="assets/images/thaliwala/thaliwalaa_logo.png" alt="footer-logo" style="width:280px;background:#fff;">
						<p class="homepage1-footer-txt1 mt-40">At Thaliwala, we satisfy every craving with our wide range of delicious, carefully crafted dishes.</p>
						<div class="footer-social-medial">
							<div class="social-media">
								<a href="https://www.facebook.com/profile.php?id=61559855813982&mibextid=LQQJ4d" target="_blank">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask id="mask0_502_2975" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
											<path d="M0 0H24V24H0V0Z" fill="white"></path>
										</mask>
										<g mask="url(#mask0_502_2975)">
											<path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z" fill="#99A9AD"></path>
										</g>
									</svg>
								</a>
							</div>
							
							<div class="social-media">
								<a href="https://www.instagram.com/thali_walaa/profilecard/?igsh=NXd3Mmd4YTVucjhk" target="_blank">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="rotate: 180deg;">
										<mask id="mask0_569_5758" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
											<path d="M0 0H24V24H0V0Z" fill="white"/>
										</mask>
										<g mask="url(#mask0_569_5758)">
											<path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7V7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9V9Z" fill="#99A9AD"/>
										</g>
									</svg>
								</a>
							</div>
                            <div class="social-media">
								<a href="https://api.whatsapp.com/send?phone=9916104429" target="_blank">
									<i class="fab fa-whatsapp"></i>
								</a>
							</div>
							
						</div>
					</div>
					<div class="footer-second ">
						<h4 class="homepage1-footer-txt2">WORKING HOURS</h4>
						<div class="working-hour-sec mt-40">
							<div class="working-day">
								<p class="homepage1-footer-txt1">Monday - Friday</p>
								<p class="homepage1-footer-txt1">Saturday</p>
								<p class="homepage1-footer-txt1">Sunday</p>
							</div>
							<div class="working-time">
								<p class="homepage1-footer-txt1">09:00 - 22:00</p>
								<p class="homepage1-footer-txt1">11:00 - 23:30</p>
								<p class="homepage1-footer-txt1">11:00 - 23:00</p>
							</div>
						</div>
					</div>
					<div class="footer-third">
						<h4 class="homepage1-footer-txt2">Office Details</h4>
						
						<p class="visit-txt3">15/A, 1st floor 4th link road, 1st cross, behind Ayappa temple, opposite: Nile Residency BTM Layout 1st stage 560068</p>
							<div class="homepage-calling">
								<p class="visit-no-txt">M:<a href="mailto:hello@thaliwalaa.com" class="Visit-no" style="color:#fff;">hello@thaliwalaa.com</a></p>
								<p class="visit-no-txt">T:<a href="tel:+919916104429" class="Visit-no"  style="color:#fff;">+91 9916104429</a></p>
							</div>
					</div>
				</div>
				
				
				<div class="homepage-copyright-sec">
					<div class="copyright-full-sec">
						<div class="copyright-left">
							<p class="copyright-txt-homepage1">© 2024 Copyright Thaliwalaa.com</p>
						</div>
						<div class="copyright-right">
							<div class="copyright-menu">
								<ul>
									<li><a href="javascript:void(0)">Privacy Policy</a></li>
									<li><a href="javascript:void(0)">Terms Of Use</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>


			</div>
		</footer>
		<!-- Footer Section End -->
		<!-- Fixed Search Bar Start -->
		
		<!-- Fixed Search Bar End -->
		<!-- Hero Video Modal Start -->
		<div class="modal fade homepage-video-modal" id="hero-video-modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<video class="video-sec" controls loop muted autoplay>
							<source src="assets/images/Homepage1/video.mp4" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
			<!-- Hero Video Modal End -->
			<!--Scroll Top to Bottom Start -->
			<div class="scroll-top" data-scroll="up" style="">		
			</div>
			<!--Scroll Top to Bottom  End -->
		</div>
		<script src="assets/js/jquery-min-3.6.0.js"></script>
		<script  src="assets/js/slick.min.js"></script>
		<script  src="assets/js/bootstrap.bundle.min.js"></script>
		<script  src="assets/js/aos.js"></script>
		<script  src="assets/js/jquery-ui.min.js"></script>
		<script src="assets/js/datepicker.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/photoswipe.min.js"></script>
		<script src="assets/js/photoswipe-ui-default.min.js"></script>
		<script src="assets/js/gallery-popup.js"></script>
		<script src="assets/js/TweenMax.min.js"></script>
		<script src="assets/js/ScrollMagic.js"></script>
		<script src="assets/js/animation.gsap.min.js"></script>
		<script src="assets/js/scolling.js"></script>
		<script  src="assets/js/custom.js"></script>
	</body>
	</html>