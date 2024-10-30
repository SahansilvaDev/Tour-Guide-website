<?php include './header.php';?>






	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">COLOMBO HOTELS & RESORTS</div>
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
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/hotel.png" alt=""><span>Hotels <br> &<br> Resorts</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/things.png" alt="">Things to Do</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/restaurant.png" alt="">Restaurant</div>
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

							<div class="search_panel active">
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

							<div class="search_panel">
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
								<div class="hotel_title_content">
									<h1 class="hotel_title">Hilton Colombo Residence</h1>
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<div class="hotel_location">200 Union Place, 00100 Colombo, Sri Lanka </div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
								</div>
							</div>




							<!-- Hotel Gallery -->

							<div class="w3-content w3-display-container" style="max-width:800px">
							<img class="mySlides" src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.1.jpg" style="width:100%;">
							<img class="mySlides" src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.2.jpg" style="width:100%">
							<img class="mySlides" src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.3.jpg" style="width:100%;">
							<img class="mySlides" src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.6.jpg" style="width:100%;">
							<img class="mySlides" src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.7.jpg" style="width:100%;">
							<div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">


														<!-- Listing Image -->

							<div class="hotel_review">
										<div class="hotel_review_content">
											<div class="hotel_review_title">very good</div>
											<div class="hotel_review_subtitle">100 reviews</div>
										</div>
										<div class="hotel_review_rating text-center">8.5</div>
									</div>
								</div>

							<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
								<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
								<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
								<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
								<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
								<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
								<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
								<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
							</div>
							</div>

							<script>
							var slideIndex = 1;
							showDivs(slideIndex);

							function plusDivs(n) {
							showDivs(slideIndex += n);
							}

							function currentDiv(n) {
							showDivs(slideIndex = n);
							}

							function showDivs(n) {
							var i;
							var x = document.getElementsByClassName("mySlides");
							var dots = document.getElementsByClassName("demo");
							if (n > x.length) {slideIndex = 1}
							if (n < 1) {slideIndex = x.length}
							for (i = 0; i < x.length; i++) {
								x[i].style.display = "none";
							}
							for (i = 0; i < dots.length; i++) {
								dots[i].className = dots[i].className.replace(" w3-white", "");
							}
							x[slideIndex-1].style.display = "block";
							dots[slideIndex-1].className += " w3-white";
							}
							</script>


							<!-- Hotel Info Text -->

							<div class="hotel_info_text">
								<p>Located in the heart of Colombo city, Hilton Colombo Residence offers rooms and suites with panoramic views of the city, harbor or Indian Ocean. Boasting an outdoor pool, it also has a fitness center, squash court and tennis court.

Spacious suites at Hilton Colombo Residence feature comfortable lounge areas with 40-inch LED Televisions and BlueRay. Modern amenities include a washing machine and ironing facilities.

Enjoy the state of the art gymnasium or relax at the sauna and hot tub. Interesting day trips around Colombo are easily arranged at the tour desk. The accommodations also provides spacious meeting and banquet venues.

Enjoy cuisines from around the globe at FLOW, the newly-built multi-cuisine restaurant. Light refreshments are offered at the BASICO Bar & Lounge. It also offers 24-hour in-room dining service.

Hilton Colombo Residence is a 30-minute drive from Colombo International Airport making it an ideal destination for business, leisure or family.

Couples in particular like the location – they rated it 8.2 for a two-person trip.

Hilton Colombo Residence has been welcoming explorebooked.com guests since Sep 02, 2023
Hotel chain/brand:
Hilton Hotels & Resorts</p>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>

						</div>

						<!-- Rooms -->

						<div class="rooms">

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.4.jpg" alt="https://unsplash.com/@grovemade"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Two-Bedroom Suite</div>
											<div class="room_price">$60/night</div>
											<div class="room_text">Bedroom 1:1 twin bed | Bedroom 2:1 queen bed</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.5.jpg" alt="https://unsplash.com/@oowgnuj"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Penthouse Suite</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">Bedroom 1:1 full bed | Bedroom 2:1 twin bed | Bedroom 3:1 queen bed</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>


						<!-- Room -->
						<div class="room">

							<!-- Room -->
							<div class="row">
								<div class="col-lg-2">
									<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.6.jpg" alt="https://unsplash.com/@oowgnuj"></div>
								</div>
								<div class="col-lg-7">
									<div class="room_content">
										<div class="room_title">Three-Bedroom Suite</div>
										<div class="room_price">$99/night</div>
										<div class="room_text">Bedroom 1:1 twin bed Bedroom 2:1 king bed Bedroom 3:1 twin bed</div>
										<div class="room_extra">Breakfast $7.50</div>
									</div>
								</div>
								<div class="col-lg-3 text-lg-right">
									<div class="room_button">
										<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
							</div>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.8.jpg" alt="https://unsplash.com/@oowgnuj"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Business Three-Bedroom Suite</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">Bedroom 1:1 twin bed Bedroom 2:1 queen bed Bedroom 3:1 full bed</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.9.jpg" alt="https://unsplash.com/@oowgnuj"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Executive Three-Bedroom Suite</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">Bedroom 1:1 full bed Bedroom 2:1 twin bed Bedroom 3:1 queen bed</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>

								<!-- Room -->
								<div class="room">

									<!-- Room -->
									<div class="row">
										<div class="col-lg-2">
											<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.10.jpg" alt="https://unsplash.com/@oowgnuj"></div>
										</div>
										<div class="col-lg-7">
											<div class="room_content">
												<div class="room_title">Deluxe Two-Bedroom Suite</div>
												<div class="room_price">$99/night</div>
												<div class="room_text">Bedroom 1:1 queen bed Bedroom 2:1 twin bed</div>
												<div class="room_extra">Breakfast $7.50</div>
											</div>
										</div>
										<div class="col-lg-3 text-lg-right">
											<div class="room_button">
												<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room -->
								<div class="room">

									<!-- Room -->
									<div class="row">
										<div class="col-lg-2">
											<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.11.jpg" alt="https://unsplash.com/@oowgnuj"></div>
										</div>
										<div class="col-lg-7">
											<div class="room_content">
												<div class="room_title">Business Two-Bedroom Suite</div>
												<div class="room_price">$99/night</div>
												<div class="room_text">Bedroom 1:1 twin bed Bedroom 2:1 queen bed</div>
												<div class="room_extra">Breakfast $7.50</div>
											</div>
										</div>
										<div class="col-lg-3 text-lg-right">
											<div class="room_button">
												<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
											</div>
										</div>
									</div>
								</div>

								<!-- Room -->
								<div class="room">

									<!-- Room -->
									<div class="row">
										<div class="col-lg-2">
											<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.12.jpg" alt="https://unsplash.com/@oowgnuj"></div>
										</div>
										<div class="col-lg-7">
											<div class="room_content">
												<div class="room_title">Executive Two-Bedroom Suite</div>
												<div class="room_price">$99/night</div>
												<div class="room_text">Bedroom 1:1 twin bed Bedroom 2:1 queen bed</div>
												<div class="room_extra">Breakfast $7.50</div>
											</div>
										</div>
										<div class="col-lg-3 text-lg-right">
											<div class="room_button">
												<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
											</div>
										</div>
									</div>
								</div>

								<!-- Room -->
								<div class="room">

									<!-- Room -->
									<div class="row">
										<div class="col-lg-2">
											<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.13.jpg" alt="https://unsplash.com/@oowgnuj"></div>
										</div>
										<div class="col-lg-7">
											<div class="room_content">
												<div class="room_title">Superior King Room</div>
												<div class="room_price">$99/night</div>
												<div class="room_text">1 full bedand1 king bed</div>
												<div class="room_extra">Breakfast $7.50</div>
											</div>
										</div>
										<div class="col-lg-3 text-lg-right">
											<div class="room_button">
												<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room -->
								<div class="room">

									<!-- Room -->
									<div class="row">
										<div class="col-lg-2">
											<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.14.jpg" alt="https://unsplash.com/@oowgnuj"></div>
										</div>
										<div class="col-lg-7">
											<div class="room_content">
												<div class="room_title">Superior Suite</div>
												<div class="room_price">$99/night</div>
												<div class="room_text">1 queen bed</div>
												<div class="room_extra">Breakfast $7.50</div>
											</div>
										</div>
										<div class="col-lg-3 text-lg-right">
											<div class="room_button">
												<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
											</div>
										</div>
									</div>
								</div>

							<!-- Room -->
							<div class="room">

							<!-- Room -->
							<div class="row">
								<div class="col-lg-2">
									<div class="room_image"><img src="images/travel_web/Western_province/Colombo/HOTELS&RESORTS/Hilton_Colombo_Residence/trend_5.15.jpg" alt="https://unsplash.com/@oowgnuj"></div>
								</div>
								<div class="col-lg-7">
									<div class="room_content">
										<div class="room_title">Deluxe Three-Bedroom Suite</div>
										<div class="room_price">$99/night</div>
										<div class="room_text">Bedroom 1:2 twin beds Bedroom 2:2 twin beds Bedroom 3:1 queen bed</div>
										<div class="room_extra">Breakfast $7.50</div>
									</div>
								</div>
								<div class="col-lg-3 text-lg-right">
									<div class="room_button">
										<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
						</div>



						<!-- Reviews -->

						<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">

								<!-- Review -->
		

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
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.746522606303!2d79.85125544449781!3d6.920876100648697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25914bf3dd555%3A0x4b82b49f0e7dd0a4!2sHilton%20Colombo%20Residences!5e0!3m2!1sen!2slk!4v1693630416216!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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

	<?php include './footer.php';?>