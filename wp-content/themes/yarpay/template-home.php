<?php /* Template Name: home */
set_query_var('ENTRY', 'homee');
get_header();
?>
<section class="home-ss" style="background-image: url('<?php the_field('background'); ?>');">
	<div class="x-container fullheight">
		<div class="title_a">
			<h1><?php the_title(); ?></h1>
			<div class="bajada">
				<?php the_field('subtitle'); ?>
			</div>
			<div class="link">
				<a href="<?php echo site_url(); ?>/tienda" class="btn">Shop Now</a>
			</div>
		</div>
		<div class="scrollbot">
			<a href="#section2">
				<span class="scrollbtn"></span>
				<i><?php the_field('title_productos'); ?></i>
			</a>
		</div>
	</div>
</section>
<section class="section_two" id="section2">
	<div class="x-container">
		<div class="sub-title-left">
			<h2><?php the_field('title_productos'); ?></h2>
			<div class="bajada">
				<?php the_field('subtitle_productos'); ?>
			</div>
		</div>
	</div>	
	<div class="list-brodcast">
		<?php
			$listbroad = get_field('listbroad');
			foreach ($listbroad as $li) {
				?>
		<div class="list-first">
			<div class="left">
				<?php 
					if (!empty($li['next_title'])) { ?>
					<div class="line"><?php echo $li['next_title']; ?></div>
				<?php } ?>
				<div class="backgroundc">
					<h3><?php echo $li['title']; ?></h3>
					<div class="bajada">
						<?php echo $li['content']; ?>
					</div>
					<?php
						$link = $li['link'];
						if (!empty($link)) {
							?>
						<div class="link">
							<a href="<?php echo $link; ?>" class="mylink">
								<?php echo $li['link_name']; ?>
							</a>
						</div>
							<?php
						}
					?>
				</div>
			</div>
			<div class="right">
				<div class="swiper-carousel">
					<div class="swiper-container">
						<div class="swiper-wrapper">
				<?php
					foreach ($li['slider'] as $slider) {
						?>
						 <div class="swiper-slide">
						 	<img src="<?php echo $slider['imagen']; ?>">
						 </div>
						<?php
					}
				?>
						</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-core">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
					</div>
				</div>
			</div>
		</div>
				<?php
			}
		?>
	</div>
</section>
<section class="instagram-sect">
	<div class="x-container">
		<div class="title-s">
			<h2>Síguenos en @yarpay</h2>
		</div>
		<div class="instagram_list">
			<?php
				$list_instagram = get_field('list_instagram');
				foreach ($list_instagram as $ls) {
					?>
			<div class="instagram_item">
				<img src="<?php echo $ls['imagen']; ?>">
			</div>
					<?php
				}
			?>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery('header').removeClass('header-notactive');
</script>
<?php get_footer();