<?php get_header()?>
	<div class='content'>
		<section class='landing'>
			<p>Want to find your dream home?</p>
			<div class='btn'>
				<div>Start the process now!</div>
			</div>
		</section>

		<section class='searchForm'>
			<div class='form'>
				<div class='inputs'>
					<div class='cityProp'>
						<input type="text" placeholder="City or Zip">
						<select name="propType" id="propType">
							<option disabled selected>Property Type</option>
							<option value="House/Condo">House/Condo</option>
							<option value="House Only">House Only</option>
							<option value="Condo Only">Condo Only</option>
							<option value="Lots/Land">Lots/Land</option>
							<option value="Multi-Unit Residential">Multi-Unit Residential</option>
							<option value="Mobile Home">Mobile Home</option>
							<option value="Rental">Rental</option>
							<option value="Commercial">Commercial</option>
							<option value="Farm">Farm</option>
						</select>
					</div>
					<div class='brba'>
						<input type="text" placeholder="Min. Price">
						<input type="text" placeholder="Max. Price">
						<select name="beds" id="beds">
							<option disabled selected>Beds</option>
							<option value="1+">1+</option>
							<option value="2+">2+</option>
							<option value="3+">3+</option>
							<option value="4+">4+</option>
							<option value="5+">5+</option>
						</select>
						<select name="baths" id="baths">
							<option disabled selected>Baths</option>
							<option value="1+">1+</option>
							<option value="2+">2+</option>
							<option value="3+">3+</option>
							<option value="4+">4+</option>
							<option value="5+">5+</option>
						</select>
					</div>
				</div>
				<div class='btn'>
					<p>Find the Perfect Home</p>
				</div>
			</div>
		</section>

		<section class='videoPlusCallsToAction'>
			<div class='howToVid'>
				<!-- embed video -->
				<iframe src="https://player.vimeo.com/video/148142207" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class='cTA'>
				<div class='callToAction worth'>
					<p>What's my home worth?</p>
				</div>
				<div class='callToAction move'>
					<p>Help me move</p>
				</div>
				<div class='callToAction dream'>
					<p>Find my dream home</p>
				</div>
			</div>
		</section>

		<section class='nashville'>
			<div class='nashHeader'>
				<p>Nashville</p>
			</div>
			<div class='nashInfo'>
				<p>
				The Nashville Metropolitan area encompasses 13 counties and nearly 2 million people. Located on the Cumberland River, Nashville is an up and coming city with a small town feel. This area is filled with cafes, restaurants, boutiques, and antique shops. Many of the restaurants feature live music, drawing in crowds that come for the food and stay for the music. Whether you are looking for a quiet gallery visit or a night out on the town, there is always something to see and do in Nashville.

				Musician’s flock to the area - it isn’t called the Music City for nothing - and the arts community is thriving. All of the Big Four record labels have a presence in Nashville. The music industry employs nearly 20,000 people each year in Nashville, making it the second largest music-producing center in the United States. (Second only to New York City.) In addition to the arts, Nashville is a center for healthcare, banking, and the transportation industry. In fact, the largest employment sector in Nashville is the healthcare industry, employing approximately 200,000 residents. Nashville is also the home of several colleges and universities, including Belmont University and Vanderbilt.
				</p>
			</div>
		</section>

		<section class='featuredListings'>
			<p>Featured Listings</p>
			<div class='listGrid'>
				<div class='listing'></div>
				<div class='listing'></div>
			</div>
		</section>

		<section class='testimonies'>
			<div class='testimony'>
				<!-- img -->
				<p>quote goes here</p>
			</div>
			<div class='testimony'>
				<!-- img -->
				<p>quote goes here</p>
			</div>
		</section>

		<section class='blog'></section>

	</div>
<?php get_footer()?>