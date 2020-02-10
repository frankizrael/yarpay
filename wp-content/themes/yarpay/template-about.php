<?php /* Template Name: about */
set_query_var('ENTRY', 'aboutt');
get_header();
?>
<section class="about">
	<div class="list-brodcast">
		<?php
			$listbroad = get_field('listbroad');
			foreach ($listbroad as $li) {
				?>
		<div class="list-first">
			<div class="left">
				<div class="line"><?php echo $li['next_title']; ?></div>
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
				<div class="swiper-pagination"></div>
				<div class="swiper-core">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
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
<section class="responsbilidad">
	<div class="x-container">
		<div class="title-responsabilidad">
			<div class="title-s">
				<h2><?php the_field('title_responsabilidad'); ?></h2>
			</div>
			<div class="bajada">
				<?php the_field('content_responsabilidad'); ?>
			</div>
		</div>
		<div class="lines-responsabilidad">
			<div class="lines-content-a">
				<?php
					$content = get_field('list_responsabilidad');
					$a = 0;
					foreach ($content as $lk) {
						?>
				<div class="lines-unique <?php if($a == 0){ echo 'first'; } ?>">					
					<div class="lines-image" style="background: url('<?php echo $lk['background']; ?>'); ">						
					</div>
					<div class="lines-title">
						<h3><?php echo $lk['title']; ?></h3>
						<div class="bajada">
							<?php echo $lk['bajada']; ?>
						</div>
					</div>
				</div>
						<?php
					$a++;
					}
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();