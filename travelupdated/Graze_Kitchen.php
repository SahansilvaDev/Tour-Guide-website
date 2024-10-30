<?php include './header.php'; ?> 






	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">COLOMBO RESTAURANT</div>
			<div class="button book_button"><a href="colombo.php">Colombo<span></span><span></span><span></span></a></div>			

		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

<!-- Search -->

<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">

							<!-- Search Tabs -->

							<div class="search_tabs_container">
								<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/img/Vector.png" alt="">Search All</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/place.png" alt="">destinations</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/hotel.png" alt="">Hotels <br> &<br> Resorts</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/things.png" alt="">Things to Do</div>
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/restaurant.png" alt=""><span>Restaurant</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">Vacation <br>Item rentals</div>

								</div>		
							</div>



							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
										<input type="text" class="destination search_input" required="required">
									</div>
									
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
										<input type="text" class="destination search_input" required="required">
									</div>
									
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>
							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>LOCATION</div>
										<input type="text" class="destination search_input" required="required">
									</div>
									<div class="search_item">
										<div>check in</div>
										<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
									</div>
									<div class="search_item">
										<div>check out</div>
										<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
									</div>
									<div class="search_item">
										<div>adults</div>
										<select name="adults" id="adults_1" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_1" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="extras">
										<ul class="search_extras clearfix">
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_1" class="search_extras_cb">
													<label for="search_extras_1">Restaurants and Bars</label>
												</div>	
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_2" class="search_extras_cb">
													<label for="search_extras_2">Swimming Pools</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_3" class="search_extras_cb">
													<label for="search_extras_3">Wireless Internet</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_4" class="search_extras_cb">
													<label for="search_extras_4">Reservations</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_5" class="search_extras_cb">
													<label for="search_extras_5">Fitness Centers</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_6" class="search_extras_cb">
													<label for="search_extras_6">Car Parking</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_7" class="search_extras_cb">
													<label for="search_extras_7">Business Centers</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_8" class="search_extras_cb">
													<label for="search_extras_8">Meeting Rooms</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="more_options">
										<div class="more_options_trigger">
											<a href="#">load more options</a>
										</div>
										<ul class="more_options_list clearfix">
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_1" class="search_extras_cb">
													<label for="more_options_1">Childcare Services</label>
												</div>	
											</li>
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_2" class="search_extras_cb">
													<label for="more_options_2">Laundry Services</label>
												</div>
											</li>
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_3" class="search_extras_cb">
													<label for="more_options_3">Pet-Friendly Policies</label>
												</div>
											</li>
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_4" class="search_extras_cb">
													<label for="more_options_4">Private Parking</label>
												</div>
											</li>
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_5" class="search_extras_cb">
													<label for="more_options_5">Wheelchair Accessible</label>
												</div>
											</li>
										</ul>
									</div>
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							

							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
										<input type="text" class="destination search_input" required="required">
									</div>
									
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel active">
								<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>LOCATION</div>
										<input type="text" class="destination search_input" required="required">
									</div>
								
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
										<input type="text" class="destination search_input" required="required">
									</div>
									
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>

		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content"><div class="hotel_review_rating text-center">#24</div>
									<h1 class="hotel_title">Graze Kitchen</h1>
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<div class="hotel_location">Number 2 Sir Chittampalam A Gardiner Mawatha Hilton Colombo, Colombo 00200 Sri Lanka<br></div>
								</div>										

								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="https://goo.gl/maps/Kh4276VV3mTTqTfH8">location<span></span><span></span><span></span></a></div>
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
								</div>
							</div>
                                        <div class="hotel_review_content">
											<div class="hotel_review_title">#24 of 708 Restaurants in Colombo<br></div>
											<a href="#" class="tooltip-test" title="Sun
06:00 AM - 11:00 PM
Mon
06:00 AM - 11:00 PM
Tue
06:00 AM - 11:00 PM
Wed
06:00 AM - 11:00 PM
Thu
06:00 AM - 11:00 PM
Fri
06:00 AM - 11:00 PM
Sat
06:00 AM - 11:00 PM "><div class="hotel_review_subtitle"> Open Hours : Monday-Sunday: 06:00 AM - 11:00 PM</a><br></div>

										</div>


                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="./images/travel_web/Western_province/Colombo/RESTAURANT/Graze_Kitchen/cores1.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="./images/travel_web/Western_province/Colombo/RESTAURANT/Graze_Kitchen/cores1.2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="./images/travel_web/Western_province/Colombo/RESTAURANT/Graze_Kitchen/cores1.3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="./images/travel_web/Western_province/Colombo/RESTAURANT/Graze_Kitchen/cores1.4.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
  



							<!-- Hotel Info Text -->
                            <div class="hotel_info_text">
								<p>Details</p>
							</div>





                            <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-About-list" data-toggle="list" href="#list-About" role="tab" aria-controls="About">About</a>

                                <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">PRICE RANGE</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">CUISINES</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">FEATURES</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">MEALS</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-About" role="tabpanel" aria-labelledby="list-About-list">A multifaceted restaurant showcasing a live and interactive theater of dining experiences that evoke the senses. Live stations featuring Sri Lankan,Indian,Japanese,Chinese,Italian,Mediterranean, and Thai Specialities will provide key visual and sensory excitement to each area.</div>

                                    <div class="tab-pane fade show " id="list-home" role="tabpanel" aria-labelledby="list-home-list">LKR 5,440 - LKR 9,600</div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Italian, Chinese, Indian, International, Sushi, Asian, Sri Lankan</div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Reservations, Buffet, Seating, Parking Available, Validated Parking, Valet Parking, Highchairs Available, Wheelchair Accessible, Serves Alcohol, Full Bar, Accepts American Express, Accepts Mastercard, Accepts Visa, Free Wifi, Accepts Credit Cards, Table Service, Live Music</div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Breakfast, Lunch, Dinner, Brunch</div>
                                </div>
                            </div>
                            </div>









							<div class="hotel_info_text">
								<p></p>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
                                    <a href="#" class="tooltip-test" title="Breakfast"><li class="offers_icons_item"><img src="./images/res_icon/breakfastios.png" alt=""></a></li>
                                    <a href="#" class="tooltip-test" title="Brunch"><li class="offers_icons_item"><img src="./images/res_icon/brunchios.png" alt=""></a></li>
                                    <a href="#" class="tooltip-test" title="Lunch"><li class="offers_icons_item"><img src="./images/res_icon/lunchios.png" alt=""></a></li>
                                    <a href="#" class="tooltip-test" title="Dinner"><li class="offers_icons_item"><img src="./images/res_icon/dinnerios.png" alt=""></a></li>

								</ul>
							</div>

						</div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Graze Kitchen</h5>
                                    <p class="card-text"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6489866518846!2d79.84211841067867!3d6.9324903182463276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25924f53eff1b%3A0x306015a1545a9b9e!2sGraze%20Kitchen!5e0!3m2!1sen!2slk!4v1693707518525!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                    <a href="https://goo.gl/maps/Kh4276VV3mTTqTfH8" class="btn btn-primary">location</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Location and contact</h5>
                                    <p class="card-text"><b>#24 of 708 Restaurants in Colombo</b></p>

                                    <p class="card-text"><a href="https://goo.gl/maps/Kh4276VV3mTTqTfH8">Number 2 Sir Chittampalam A Gardiner Mawatha Hilton Colombo, Colombo 00200 Sri Lanka</a></p>
                                    <p class="card-text">1.3 miles from Gangaramaya (Vihara) Buddhist Temple</p>
                                    <p class="card-text"><a href="https://www.hiltoncolombo1.com/restaurant/graze-kitchen">Website</a></p>
                                    <p class="card-text"><a href="+94112492492">+94 11 2 492492</a></p>

                                </div>
                                </div>
                            </div>
                            </div>

						<!-- Reviews -->


						<!-- Location on Map -->

						<div class="location_on_map">
							<div class="location_on_map_title">location on map</div>

							<!-- Google Map 
		
							<div class="travelix_map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6489866518846!2d79.84211841067867!3d6.9324903182463276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25924f53eff1b%3A0x306015a1545a9b9e!2sGraze%20Kitchen!5e0!3m2!1sen!2slk!4v1693707518525!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/single_listing_custom.js"></script>

	<?php include './footer.php' ;?> 