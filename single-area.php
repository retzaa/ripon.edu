<?php
/**
 * The Template for displaying all single posts
 */

get_header();

$overview_url = get_cmb_value( "area_url" );
$faculty = get_cmb_value( "area_faculty_list" );

the_showcase();

?>
	<div id="primary" class="area wrap group" role="main">

		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
		<div class="third">
			<div class="tab-nav">
				<ul>
					<li class="area-overview">Overview</li>
					<li class="area-faculty">Faculty</li>
					<?php do_area_tab_nav( "Career Tracks", "tracks" ) ?>
					<?php do_area_tab_nav( "Off-Campus Study", "off_campus" ) ?>
					<?php do_area_tab_nav( "Unique Opportunities", "opportunities" ) ?>
					<?php do_area_tab_nav( "Ensembles", "ensembles" ) ?>
					<?php do_area_tab_nav( "Facilities", "facilities" ) ?>
					<?php do_area_tab_nav( "Events Schedule", "events" ) ?>
					<?php do_area_tab_nav( "Past Productions", "productions" ) ?>
					<?php do_area_tab_nav( "Alumni Profiles", "alumni" ) ?>
					<?php do_area_tab_nav( "Graduate Success", "success" ) ?>
					<?php do_area_tab_nav( "Clinical Supervisors", "supervisors" ) ?>
					<?php do_area_tab_nav( "Be a Teacher", "teacher" ) ?>
				</ul>
			</div>
		</div><!-- #content -->
		<div class="two-third tab-container">

			<h1><?php the_title(); ?></h1>
			<div class="tab-content first area-overview">
				<h2>Overview</h2>
				<?php the_content(); ?>

				<div class="two-third no-pad advising">
					<h2>Advising</h2>
					<p>Ripon College encourages all students to embrace a Four-Year Career Development Plan.</p>
					<p>This plan is based on the premise that career planning is a development process that involves learning and decision-making over an extended period of time.</p>
					<p><a href="#" class="btn-red-full">Advising</a></p>
				</div>
				<div class="third sidebar">
					<div class="widget-book">
						<h4>Course &amp; Requirements</h4>
						<ul>
							<li><a href="<?php  ?>"><?php the_title(); ?> Course Overview</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tab-content area-faculty">
				<h2>Faculty</h2>

				<?php 
				$faculty_query = new WP_Query( array(
					"post__in" => $faculty,
					"post_type" => 'faculty'
				) );

				if ( $faculty_query->have_posts() ) : 
					?>

				<div class="faculty-directory">
				<?php

					// Start the Loop.
					while ( $faculty_query->have_posts() ) : $faculty_query->the_post();
						?>
						<div class="faculty-entry">
							<?php the_post_thumbnail(); ?>
							<div class="info">
								<a href="<?php the_permalink(); ?>" class="btn"><i class="fa fa-lg fa-search"></i></a>
								<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
								<p class="faculty-title"><?php print get_cmb_value( "faculty_title" ); ?></p>
								<a href="mailto:<?php print get_cmb_value( "faculty_email" ); ?>"><?php print get_cmb_value( "faculty_email" ); ?></a>
							</div>
						</div>
						<?php

					endwhile;

					?>
				</div>
				<?php
				endif;

				wp_reset_query();
				
				?>

			</div>

			<?php do_area_tab_content( "Career Tracks", "tracks" ) ?>
			<?php do_area_tab_content( "Off-Campus Study", "off_campus" ) ?>
			<?php do_area_tab_content( "Unique Opportunities", "opportunities" ) ?>
			<?php do_area_tab_content( "Ensembles", "ensembles" ) ?>
			<?php do_area_tab_content( "Facilities", "facilities" ) ?>
			<?php do_area_tab_content( "Events Schedule", "events" ) ?>
			<?php do_area_tab_content( "Past Productions", "productions" ) ?>
			<?php do_area_tab_content( "Alumni Profiles", "alumni" ) ?>
			<?php do_area_tab_content( "Graduate Success", "success" ) ?>
			<?php do_area_tab_content( "Clinical Supervisors", "supervisors" ) ?>
			<?php do_area_tab_content( "Be a Teacher", "teacher" ) ?>

		</div>
			<?php
			endwhile;
		endif;
		 ?>

	</div><!-- #primary -->
<?php

get_footer();

?>