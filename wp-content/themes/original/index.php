<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

<main>
	<?php
	$true = true;
	if ( $true ) :
		?>
	<p>
		<span>aaa</span>
	</p>
	<?php endif; ?>
	<h1>aaa</h1>
	<div>
		<p>array_diff_assoc</p>
	</div>
	<div>
		<p>aaa</p>
	</div>
	<a href=""
		target="_blank"
		target="_b">aaa</a>
	<p>aaa</p>
</main>
<?php get_footer(); ?>
