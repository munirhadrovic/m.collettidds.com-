<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
        <link rel="stylesheet" href="css/themes/anes.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme?>" data-position="fixed">
		    <h1><img src="img/logo/logo2.jpg" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://marketrivals.com" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider/slider01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/care_to_share_hm_pg.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider/slider02.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider/slider04.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/slider/slider05.jpg" alt="">
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#homes" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#staff" data-transition="<?php echo $transitionefect ?>">Our Staff</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#banda" data-transition="<?php echo $transitionefect ?>">Before and After's</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">News</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   
		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
							<li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>


                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#aboutUS" data-transition="<?php echo $transitionefect ?>">Home</a></div>
                        </div>
                             <button name="button" id="btn2" value="click">Testimonials</button>


				</div>

			</div>	
				

		</div>

<!--Page2-->


<!-- strana Home-->


        <div data-role="page" id="homes" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#aboutUS" data-transition="<?php echo $transitionefect ?>">About US</a></div>
                    <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#testMN" data-transition="<?php echo $transitionefect?>">Testimonials</a></div>
                </div>
            </div>
        </div>


<!--Page AboutUS-->

        <div data-role="page" id="aboutUS" data-themes="<?php echo $theme?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme?>">
                <div class="paragraphs">
                    <h3>Sitting in Our Chair</h3>
                    <img src="img/aboutUsIm/about_4.jpg">
                    <h2>About Colletti D.D.S.</h2>
                    <p>In August of 1985, Dr. Colletti established his own General Dentistry practice in Lombard, IL where he has been providing family dental care and orthodontia care for over twenty years. The dentist office, located at 237 S. Main Street, offers patients the most advanced dental facility and experienced, professional staff in the Lombard area. Its attractive and comfortable office décor, along with the caring and friendly attention that you receive, makes a visit to the dentist as enjoyable as possible.</p>
                    <p>Whether you visit us for a teeth cleaning, cavity care, teeth bleaching, laser teeth whitening, dental crown, bonding or veneer for teeth, dental implant or tooth extraction, we offer you the best of dental care in professional yet comfortable surroundings. Regardless of your age, experience in the dentist chair, or pain threshold, Dr. Colletti and his staff will assist you in the areas of general dentistry, endodontics, periodonotics, orthodontics, cosmetic dentistry, esthetic dentistry, sedation dentistry or general dental hygiene.</p>
                    <p>Dr. Colletti is a member of the American Dental Association, Illinois Dental Society, Chicago Dental Society, International Dental Laser Association, American Association of Functional Orthodintics, Academy of General Dentistry, U.S. Chamber of Commerce, and the Knights of Columbus.</p>
                    <p>Everyone at Dr. Colletti's practice is dedicated to making your visit comfortable and to answering your dental questions. Please feel free to Contact Us to request more information about our services and procedures.</p>
                    <p>Dr. Colletti accepts cash, check, money order, Visa, MasterCard, Discover, American Express, and Care Credit. Also, a senior citizen's discount is offered. For your convenience, we will bill your insurance company. Payment in full is due at the time services are rendered unless previous arrangements have been made.
                    </p>
                    <h2>Healthy Teeth and Gums for Life!</h2>
                    <p>Providing dental care in Lombard, IL for over 20 years, Dr. Colletti and his staff offer professional and caring dental service. Dr. Colletti’s dentist office offers dental cleanings, cosmetic dentistry, dental crowns, root canals, dental laser services, bridges, dentures, orthodontics, teeth whitening, oral surgery, dental surgery and more. Call us today to schedule your appointment at 630.620.8304.</p>
                </div>

            </div>
        </div>


<!--Page Testimonials-->

        <div data-role="page" id="testMN" data-theme="<?php echo $theme?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme?>">
                <div class="paragraphs"
                     <div>
                         <h2>Testimonials</h2>
                         <p>We know that it is hard to find a new dentist. Happy and satisfied patients are always our top priority, that is why we ask our patients to write us a testimonial on their experience. It is one of the best ways we can show you what it is like to be a patient of Dr. Colletti D.D.S in Lombard Illinois. Want to submit a testi monial, please <a href="#contactform">click here.</a></p>
                     </div>

                    <h1 class="words">What our Patients Say about Us:</h1>
                        <h2 class="subtitle">I WENT MANY YEARS WITHOUT SEEING A DENTIST BECAUSE</h2>
                             <p>I was so afraid of going due to past experiences. My husband was the same way when he was younger, but found M. Colletti and has been going for years. So reluctantly I went, and have to say I am so happy I did. Obviously I needed some work done, but Colletti just has a way with people and he always makes me smile. Linda is a great hygentist too, very personable! - <em>Elizabeth P.</em></p>
                        <h2 class="subtitle">I AM BOTH AN OLD PATIENT OF DR. COLLETTI AND A NEW PATIENT.</h2>
                             <p>I am not an easy patient for any physican having been cursed with 2 orphan diseases. Dr. Colletti is the only dentist who spent his time doing research and speaking with my specialist to create a plan of treatment that was both safe, appropriate and as I have always know him to be kind and reasuring. So glad to hear a second generation is in the offing with the graduation of his son. Thanks for the considerate care from the front office and kudos to Doc, a job well done! - <em>Elizabeth P.</em></p>
                        <h2 class="subtitle">WHAT CAN I SAY. MIKE HAS TO BE ONE OF THE BEST DENTIST...</h2>
                             <p>in the business. His operation is excellent. The Staff is polite and professional. As far as Dr.Colletti he makes sure you get the best results while making you feel comfortable in a situation (Dental) that most tend to not enjoy. Thanks Again Mike. - <em>Philip D.</em></p>
                        <h2 class="subtitle">I LIKE TO THINK THAT I AM PROOF THAT ONE IS NEVER TOO OLD...</h2>
                             <p>nor is it to late to dream of having a perfect smile. Dr. Michael Colletti had the vision to make my dream come true.- <em>Donna C.</em></p>
                        <h2 class="subtitle">I THINK DR. COLLETTI IS A GENTLE DENTIST AND A GOOD ONE AT THAT.</h2>
                             <p>He makes sure that his patients are comfortable and tells you what he is doing, which I like. Of all my years with different dentists, Dr. Colletti has been the best. he knows what he needs to do right away with his patients.- <em>Rita G.</em></p>
                        <h2 class="subtitle">YEARS AGO ON THE EVE OF A HOLIDAY, I HAD A DENTAL EMERGENCY.</h2>
                             <p>I was so upset and my regular dentist was out of town and did not have a substitute on call. The closest dentist to my house was Dr. Colletti and at 8:00, I called him and he told me to come right in. He fixed my problem in no time and would not accept my money for helping me. I knew that if I ever changed dentists, I would pick him. I did and I am very glad that I did.- <em>Muriel L.</em></p>
                        <h2 class="subtitle">THE BEST DENTIST EVER. PERFECT FOR CHICKENS...</h2>
                             <p>(...er people) like me who are not into pain.- <em>Chris O.</em></em></p>
                        <h2 class="subtitle">DR. COLLETTI AND HIS STAFF ARE FRIENDLY AND ALWAYS PROFESSIONAL.</h2>
                             <p>The staff go above and beyond to take care of the patients. They even kept an eye on my daughter when I couldn't find a sitter. It was great that I could keep my appointment!- <em>Gina M.</em></p>
                        <h2 class="subtitle">I AM A PATIENT OF DR. COLLETTI AND HE DOES AN AMAZING JOB!</h2>
                             <p>My teeth looked absolutely amazing after he did some major work on my class 3 teeth. Braces, Teeth Cleaning, Fillings, anything for my teeth, I'm There! The place is clean, fancy, and grand. The staffs are always friendly and smiling. I would recommend Dr. Colletti to all my friends. - <em>Fanny M.</em></p>
                        <h2 class="subtitle">I AM A NEW PATIENT WITH DR. COLETTI AND I AM THRILLED TO HAVE HIM TREAT ME.</h2>
                             <p>Like many people, I don't spend as much time on my oral hygiene as I should. Although Dr. Coletti and his staff have pointed out the need for this, they didn't make me feel like a schmuck for it. They were very compassionate. Also, they utilize all the latest cutting edge technology, like laser therapy, and very effective pain minimization! - <em>Jerry M.</em></p>
                        <h2 class="subtitle">DR. COLLETTI AND HIS STAFF HAVE A HIGH LEVEL OF PROFESSIONALISM...</h2>
                             <p>and attention to detail. I learn something new every time I visit, and the visit is virtually pain-free. His calm demeanor and good sense of humor also keep you relaxed at all times. I have been a patient for years, and would recommend Dr. Colletti and his staff to anyone.- <em>David B.</em></p>
                        <h2 class="subtitle">I HAVE FINALLY FOUND A DENTIST I LIKE.</h2>
                             <p>Dr. Colletti and his team really make me feel at ease. Plus, watching TV while being cleaned is a great distraction. I recommend Dr. Colletti to everyone!!- <em>Janelle G.</em></p>
                        <h2 class="subtitle">LET ME FIRST START BY SAYING THANK YOU VERY MUCH!</h2>
                             <p>As I arrived for my teeth cleaning, I felt very nervous as if I were going to confession in grammar school. From the moment I came through the doors, I felt immediately relaxed. The office felt like I was at the country club for dinner. Everyone was cordial and professional and most of all, all educated regarding my teeth and gums and told me what was going on in my mouth without being condescending or rude. The BEST dental experience of my life.- <em>Robert L.</em></p>
                </div>
            </div>
        </div>


<!--Page Testimonial Form-->

        <div id="contactform" data-role="page data-theme="<?php echo $theme?>">
            <div class="ui-content" data-role="main">
                <div class="ui-grid-solo" data-theme="<?php echo $theme?>">
                    <section id="navigation-menu-contact">
                        <ul id="menu-contact">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
                        </ul>
                    </section>
                    <form data-parsley-validate method="post" action="mail.php" data-ajax="false">
                        Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
                        E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
                        Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
                        Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
                        Message:<br>
                        <textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
                        <input type="submit" value="Send" name="submit" class="btn">
                    </form>
                </div>

            </div>

        </div>

<!--Page Staff-->
        <div data-role="page" id="staff" data-theme="<?php echo $theme?>">
            <div class="ui-content" data-role="main">
                <div class="ui-grid-a" data-theme="<?php echo $theme?>">
                    <div class="paragraphs">
                         <div class="ui-block-a">
                                <h2>Meet the Team</h2>
                                <p class="subtitle">PROVIDING DENTAL CARE IN LOMBARD, IL FOR OVER 20 YEARS, DR. COLLETTI AND HIS STAFF OFFER PROFESSIONAL AND CARING DENTAL SERVICE.</p>
                                <a href="#colletti" data-transition="<?php echo $transitionefect?>"><img src="img/picture/page2-img2.jpg" alt=""><p>Dr. Michael Colletti</p></a>
                                <img src="img/picture/page2-img3.jpg" alt=""><p>Dental Assistant</p>
                                <img src="img/picture/page2-img7.jpg" alt=""><p>Dental Assistant</p>
                                <img src="img/picture/page2-img5.jpg" alt=""><p>Office Manager</p>
                                <img src="img/picture/page2-img6.jpg" alt=""><p>Dental Hygienist</p>
                         </div>
                         <div class="ui-block-b">
                                <h2>Doctor’s Greeting</h2>
                                <img src="img/picture/page2-img1.jpg" alt="">
                                <p><em>Michael T. Colletti, DDS received his Doctor of Dental Science from Loyola University in 1984, after which he received an Oral Cancer Research Fellowship at the University of Chicago.We offer treatment that promotes Healthy Teeth and Gums for Life”</em></p>
                                <img src="img/picture/Screenshot_1.png">
                                <h2>Newsletter!</h2>

                                <form method="post" action="mail.php">
                                    <div class="ui-field-contain">
                                        <label for="email">E-mail:</label>
                                        <input type="email" name="email" id="email" placeholder="Enter Email:" value="">
                                    </div>
                                        <input type="submit" data-inline="true" value="subscribe">
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>



<!--Page Colletti-->
        <div data-role="page" id="colletti" data-theme="<?php echo $theme?>">
            <div data-role="main" class="ui-content">
                <div class="ui-grid-solo" data-theme="<?php echo $theme?>">
                    <div class="ui-block-a">

                        <h2>Dr. Michale T. Colletti, D.D.S.</h2>
                        <img src="img/picture/page2-img1.jpg">
                        <p class="words">ABOUT MICHAEL T. COLLETTI, D.D.S.</p>
                        <p>Michael T. Colletti, DDS received his Doctor of Dental Science from Loyola University in 1984, after which he received an Oral Cancer Research Fellowship at the University of Chicago. Upon completion of his Fellowship, he was associated in private dental practice in Chicago with Dr. Richard Pipia.
                        In August of 1985, Dr. Colletti established his own General Dentistry practice in Lombard, IL where he has been providing family dental care and orthodontia care for over twenty years. The dentist office, located at 237 S. Main Street, offers patients the most advanced dental facility and experienced, professional staff in the Lombard area. Its attractive and comfortable office décor, along with the caring and friendly attention that you receive, makes a visit to the dentist as enjoyable as possible.
                        Whether you visit us for a teeth cleaning, cavity care, teeth bleaching, laser teeth whitening, dental crown, bonding or veneer for teeth, dental implant or tooth extraction, we offer you the best of dental care in professional yet comfortable surroundings. Regardless of your age, experience in the dentist chair, or pain threshold, Dr. Colletti and his staff will assist you in the areas of general dentistry, endodontics, periodonotics, orthodontics, cosmetic dentistry, esthetic dentistry, sedation dentistry or general dental hygiene.
                        Dr. Colletti is a member of the American Dental Association, Illinois Dental Society, Chicago Dental Society, International Dental Laser Association, American Association of Functional Orthodintics, Academy of General Dentistry, U.S. Chamber of Commerce, and the Knights of Columbus.
                        A widower who was blessed with 21 years of a wonderful marriage to Jean, the doctor continues to cherish his time with daughter Kristen and son Vincent. In his spare time, Dr. Colletti enjoys trips to Florida in the winter and Alaska in the summer to pursue his passion for golf and fishing.
                        What Dr. Colletti also loves doing is practicing General Dentistry, as he considers it a privilege to have his patients place their trust in his care.</p>

                    </div>
                </div>
            </div>
        </div>



<!--Page Services-->
        <div data-role="page" id="services" data-theme="<?php echo $theme?>">
            <div data-role="main" clas="ui-content">
                <div class="ui-grid-solo" data-theme="<?php echo $theme?>">
                    <div class="ui-block-a">
                    <h2>Diagnostic & Custom Smile Design</h2>
                    <img src="img/picture/page3-img1.jpg">
                    <p style="font-size: 20px; color: blue;">WE CUSTOMIZE YOUR CLEANING AS PART OF YOUR PERSONALIZED CARE.</p>
                    <p>Dr. Colletti and his highly trained team of licensed, certified hygienists and dental assistants offer a complete range of general dental services. Please Contact Us for more information on any listed service or with any questions. </p>
                    <h2>Full Range of Cosmetic Dentistry Treatment</h2>
                        <img src="img/picture/page3-img2.jpg">
                        <p>Dr. Colletti knows that the best way to ensure oral health is through diagnosis and treatment.We provide teeth cleanings, sealants, fluoride treatment, digital radiography, diagnostic imaging, custom dental appliances and more!</p>
                        <a href="#page1" class="ui-btn ui-btn-corner-all">read more</a>
                        <img src="img/picture/page3-img3.jpg">
                        <p>The field of Restorative Dentistry is one in which Dr. Colletti takes great pride, as it helps keep your smile bright.The wide range of restorative dental services offered include Bonding, Veneers, Enamel Reshaping and Crowns.</p>
                        <a href="#banda" class="ui-btn ui-btn-corner-all">read more</a>
                        <img src="img/picture/page3-img4.jpg">
                        <p>Dr. Colletti knows that the best way to ensure oral health is through diagnosis and treatment.We specialize treatment in Endodontics, Periodontics, Prosthodontics, Oral Surgery and Orthodontics.</p>
                        <a href="#page1" class="ui-btn ui-btn-corner-all">read more</a>
                        <h2>Cosmetic Dentistry</h2>
                        <img src="img/picture/pic1.png">
                        <p>Comprehensive Exam & Evaluation</p>
                        <img src="img/picture/pic2.png">
                        <p>Orthodontics</p>
                        <img src="img/picture/pic3.png">
                        <p>Restorative Dentistry</p>
                        <h2>Services</h2>
                        <ul>
                            <li>
                                <a href="#">Diagnostic & Preventive</a>
                            </li>
                            <li>
                                <a href="#">Porcelain Veneers</a>
                            </li>
                            <li>
                                <a href="#">Dental Implants</a>
                            </li>
                            <li>
                                <a href="#">Dental Bridge</a>
                            </li>
                            <li>
                                <a href="#">Zoom Whitening</a>
                            </li>
                            <li>
                                <a href="#">Invisalign</a>
                            </li>
                            <li>
                                <a href="#">Laser Dentistry</a>
                            </li>
                            <li>
                                <a href="#">Tooth Bonding</a>
                            </li>
                            <li>
                                <a href="#">Porcelain Crowns</a>
                            </li>
                            <li>
                                <a href="#">White Fillings</a>
                            </li>
                            <li>
                                <a href="#">Teeth Whitening</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


<!--Page Before and After's-->
        <div data-role="page" data-theme="<?php echo $theme?>" id="banda">
            <div data-role="main" class="ui-content">
                <div class="ui-grid-solo" data-theme="<?php echo $theme?>">
                    <h3 style="font-family: cursive">Smile Makeover</h3>
                    <p>Almost anyone can have the perfect smile they dream about. But there is a more to the perfect smile than just white teeth, including healthy gums</p>
                    <a href="#" class="ui-btn ui-mini ui-btn-corner-all">read more</a>
                    <h3>Porcelain Veneers</h3>
                    <p>Veneers are a thin shell of porcelain or resin that is bonded to the surface of your teeth. This can change their shape, shade, and position to improve the cosmetics of your teeth and smile</p>
                    <a href="#" class="ui-btn ui-btn-corner-all ui-mini">read more</a>
                    <h3>lumineers</h3>
                    <p>This is one way to quickly get that beautiful smile. Lumineers are porcelain veneers that offer a way to a permanently whiter and perfectly aligned smile.</p>
                    <a href="#" class="ui-btn ui-mini ui-btn-corner-all"
                    <div class="ui-grid-a">
                        <h3>Performing Cosmetic Dentistry Miracles</h3>
                        <p>The field of Restorative Dentistry is one in which Dr. Colletti takes great pride, as it helps keep your smile bright. The wide range of restorative dental services offered include Bonding, Veneers, Enamel Reshaping and Crowns.</p>
                        <img src="img/picture/page4-img1.jpg">
                        <h2>A Combination of art and Science to Optimally Improve Dental Health</h2>
                        <p>At Colletti D.D.S., we offer the most advanced technology available in cosmetic dentistry. Teeth Whitening, Porcelain Veneers, and full and partial porcelain Crowns are some examples of how we redesign our patients' smiles, giving them healthy teeth and gums for life!</p>
                        <h2>Before and After's</h2>
                    </div>
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <img src="img/picture/page4-img2.jpg">
                            <p>Before</p>
                        </div>
                        <div class="ui-block-b">
                            <img src="img/picture/page4-img3.jpg">
                            <p>After</p>
                        </div>
                    </div>
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <img src="img/picture/page4-img4.jpg">
                            <p>Before</p>
                        </div>
                        <div class="ui-block-b">
                            <img src="img/picture/page4-img5.jpg">
                            <p>After</p>
                        </div>
                        <a href="#" class="ui-btn ui-btn-corner-all">Restorative Denistry Photos</a>
                    </div>
                    </div>

                </div>

            </div>
        </div>
	<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>	
					<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
						Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
						E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
						Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
						Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
						Message:<br>
						<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
						<input type="submit" value="Send" name="submit" class="btn">
					</form>
				</div>
			</div>
		
		</div>
<!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
