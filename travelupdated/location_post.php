<?php include './header.php';?>

<?php
include './login/db_conn.php'; 



// include './login/db_conn.php'; 


if (isset($_GET['locationId'])) {
    $locationId = $_GET['locationId'];
    // Sanitize the input to prevent SQL injection
    $locationId = $conn->real_escape_string($locationId);

    // Query the database to retrieve data related to the locationId
    $sql = "SELECT * FROM places WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $locationId); // Assuming id is an integer
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Display the data related to the locationId
        echo "Stay ID: " . $row["id"] . "<br>";
        echo "Stay City: " . $row["place_city"] . "<br>";
        echo "place_hed: " . $row["place_hed"] . "<br>";
        // Add more columns as needed
    } else {
        echo "No data found for location ID: $locationId.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "LocationId parameter not set in the URL.";
}
?>





	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Welcome Colombo</div>
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
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
								</div>
							</div>

							<!-- Search Panel -->

							<div class="search_panel active">
								<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
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
													<label for="search_extras_1">Pet Friendly</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_2" class="search_extras_cb">
													<label for="search_extras_2">Car Parking</label>
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
													<label for="search_extras_5">Private Parking</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_6" class="search_extras_cb">
													<label for="search_extras_6">Smoking Area</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_7" class="search_extras_cb">
													<label for="search_extras_7">Wheelchair Accessible</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input type="checkbox" id="search_extras_8" class="search_extras_cb">
													<label for="search_extras_8">Pool</label>
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
													<label for="more_options_1">Pet Friendly</label>
												</div>
											</li>
											<li class="more_options_item">
												<div class="clearfix">
													<input type="checkbox" id="more_options_2" class="search_extras_cb">
													<label for="more_options_2">Car Parking</label>
												</div>
											</li>
										</ul>
									</div>
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
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
										<select name="adults" id="adults_2" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_2" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
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
										<select name="adults" id="adults_3" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_3" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
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
										<select name="adults" id="adults_4" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_4" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
								<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>destination</div>
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
										<select name="adults" id="adults_5" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_5" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
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
										<select name="adults" id="adults_6" class="dropdown_item_select search_input">
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
									</div>
									<div class="search_item">
										<div>children</div>
										<select name="children" id="children_6" class="dropdown_item_select search_input">
											<option>0</option>
											<option>02</option>
											<option>03</option>
										</select>
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

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">

						<!-- Hotel Info -->

						<div class="hotel_info">

		

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column ">
								<div class="hotel_title_content">
									<h1 class="hotel_title"><?php echo $row["place_hed"]; ?></h1>
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="#">See Location on Map<span></span><span></span><span></span></a></div>
									
                </div>
              </div>
            <div class="iframe1 h-100">
              <iframe src="./pages/locationpost.php" scrolling="no" width="100%" height="550px" frameborder="0" id="myiframe"></iframe>
 </div>
							<style>

								@media(min-width:150px) and (max-width:340px) {
									iframe{
										height: 800px;
									}
								}

								@media(min-width:350px) and (max-width:500px) {
									iframe{
										height: 850px;
									}
								}


								
								@media(min-width:500px) and (max-width:600px) {
									iframe{
										height: 910px;
									}
								}

									@media(min-width:600px) and (max-width:650px) {
									iframe{
										height: 930px;
									}
								}

										@media(min-width:650px) and (max-width:700px) {
									iframe{
										height: 940px;
									}
								}

								
										@media(min-width:700px) and (max-width:750px) {
									iframe{
										height: 950px;
									}
								}

								
										@media(min-width:750px) and (max-width:780px) {
									iframe{
										height: 960px;
									}
								}


									/* @media(min-width:500px){
									iframe{
										height: 1000px;
									}
								}
								
								
								@media(min-width:600px){
									iframe{
										height: 1000px;
									}
								} */



								
								
								/* @media(min-width:800px){
									iframe{
										height: 1200px;
									}
								}


								
								@media(min-width:1000px){
									iframe{
										height: 1500px;
									}
								} */



							</style>

							<!-- Hotel Info Text -->

							<div class="hotel_info_text container">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum. Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum quam placerat non. Etiam venenatis nibh augue, sed eleifend justo tristique eu</p>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags container">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>

						</div>

						<!-- Rooms -->

						<div class="rooms container">

						<div class="view_location mb-5">
							<h2>View Locations</h2>
						</div>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@grovemade"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Double or Twin Room</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">FREE cancellation before 23:59 on 20 December 2017</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">View Location<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/room_2.jpg" alt="https://unsplash.com/@oowgnuj"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Double or Twin Room</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">FREE cancellation before 23:59 on 20 December 2017</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">View Location<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Reviews -->

						
						<!-- Location on Map -->

						<div class="location_on_map">
							<div class="location_on_map_title">location on map</div>

							<!-- Google Map -->

							<div class="travelix_map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

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
