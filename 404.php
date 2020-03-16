<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SFS
 */

get_header();
?>

<main class="main-404">
	<section class="sect-404">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<h2 class="title-404">Страница не найдена</h2>
				</div>
			</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<p class="number-404">404<p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<a href="<?php bloginfo('url') ?>">
							<button class="permalink">На главную</button>
						</a>
					</div>
				</div>
			</div>
	</section>
</main>

<?php
get_footer();
