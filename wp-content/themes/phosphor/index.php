<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Phosphor
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<!-----------------------------body-start---------------------------------->
	<section class="video_part">
    	<div class="container">
        	<iframe src="https://player.vimeo.com/video/94687794" width="70%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            
            <div class="description">
            	<div class="description_h1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                <div class="divider"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
            </div>
            
        </div>
    </section>
<!-----------------------------body-Finish--------------------------------->

<!-----------------------------Footer-Start----------------------------------->
	<div class="bottum_btn">
    	<div class="container">
        	<div class="start_btn"><a href="detail">START Assessment</a></div>
        </div>
    </div>
<!-----------------------------Footer-Finish---------------------------------->

	</div><!-- #primary -->


<?php get_footer(); ?>
