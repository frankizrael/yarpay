<?php
set_query_var('ENTRY', 'page');
get_header();
?>
<div id="page" class="container shadow">
	<div class="row">
		<div class="col-md-12 py-3">
			<div class="content">
				<h1 class="mb-3 mb-md-3"><?php the_title() ?></h1>
				<div class="post">
					<?php if (have_posts()):
						while (have_posts()):
							the_post();
							the_content();
						endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();