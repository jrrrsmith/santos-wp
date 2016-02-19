<?php

/**
 * Template Name: Venue Page
 */

get_header(); 

?>
	<div class="main">
		<div class="vertical-tabs-container">
		  <div class="vertical-tabs">
		    <a href="#tab1" class="js-vertical-tab vertical-tab is-active" rel="tab1">About Us</a>
		    <a href="#tab2" class="js-vertical-tab vertical-tab" rel="tab2">Venue Specs</a>
		    <a href="#tab3" class="js-vertical-tab vertical-tab" rel="tab3">Bottle Service</a>
		    <a href="#tab4" class="js-vertical-tab vertical-tab" rel="tab4">Press</a>
		  </div>

		  <div class="vertical-tab-content-container">
		    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active" rel="tab1">About Us</a>
		    <div id="tab1" class="js-vertical-tab-content vertical-tab-content">
		    	<img class="leading-img" src="<?php bloginfo('template_url');?>/images/outside.jpg" />
		      <p>In 2008, Andrew W.K. and his friends, Spencer Sweeney, Ron Castellano, and Larry Golden opened Santos Party House, a two-level, 8,000-square-foot (740 m2) live music venue designed to function as a nightclub, concert hall and lounge. It took the partners, three years to create, design & finish the creation of the space, with the downstairs (SouthPole) space opening on May 2008, and the upstairs (NorthPole) space opening on June 2008. In total, the venue features three bars, black walls and ceilings, dark wood floors, tall columns, and an array of ever-changing decorations.  Originally named the “Lafayette Street Jungle Gym”, Santos is centrally located in downtown New York City, straddling Chinatown and Tribeca. Blurring the lines between music and art culture.  Santos is designed to function as a concert hall, dance club, and lounge.</p>
		    </div>

		    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab2">Venue Specs</a>
		    <div id="tab2" class="js-vertical-tab-content vertical-tab-content">
		      <p>Ut laoreet augue et neque pretium non sagittis nibh pulvinar. Etiam ornare tincidunt orci quis ultrices. Pellentesque ac sapien ac purus gravida ullamcorper. Duis rhoncus sodales lacus, vitae adipiscing tellus pharetra sed. Praesent bibendum.</p>
		    </div>

		    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab3">Bottle Service</a>
		    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
		      <p>Donec mattis mauris gravida metus laoreet non rutrum sem viverra. Aenean nibh libero, viverra vel vestibulum in, porttitor ut sapien. Phasellus tempor lorem id justo ornare tincidunt. Nulla faucibus, purus eu placerat fermentum, velit mi iaculis nunc, bibendum tincidunt ipsum justo eu mauris. Nulla facilisi. Vestibulum vel lectus ac purus tempus suscipit nec sit amet eros. Nullam fringilla, enim eu lobortis dapibus, quam magna tincidunt nibh, sit amet imperdiet dolor justo congue turpis.</p>
		    </div>

		    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab4">Press</a>
		    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
		      <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus dui urna, mollis vel suscipit in, pharetra at ligula. Pellentesque a est vel est fermentum pellentesque sed sit amet dolor. Nunc in dapibus nibh. Aliquam erat volutpat. Phasellus vel dui sed nibh iaculis convallis id sit amet urna. Proin nec tellus quis justo consequat accumsan. Vivamus turpis enim, auctor eget placerat eget, aliquam ut sapien.</p>
		    </div>
		  </div> <!-- END OF VERTICAL TABS -->
		</div> <!-- END OF VERTICAL TABS CONTAINER -->
	</div> <!-- END OF MAIN -->

<?php get_footer(); ?>
