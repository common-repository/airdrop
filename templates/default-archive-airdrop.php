<?php
/**
 * The template for displaying archive airdrop post type
 *
 * @package airdrop
 */

get_header(); ?>

	<?php
	do_action( 'airdrop_wrapper' ); ?>
	<?php if ( have_posts() ) : ?>
		<header class="airdrop-page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
			?>
		</header><!-- .page-header -->
		<?php endif; ?>
	<div class="row">
		
		<?php
		while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'airdrop-item col-lg-4 col-md-4 col-sm-4 col-xs-6' ); ?> >
		<div class="row">
			<div class="airdrop-thumbnail-wrap col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<figure class="airdrop-thumbnail">
		<?php if( has_post_thumbnail() ) {
			echo '<a rel="bookmark" href="'.esc_url( get_permalink() ) . '">';
			the_post_thumbnail( 'airdrop-main-thumbnail' );
			echo '</a>';	
		}
		 ?>
		</figure>
	</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
			<table class="airdrop-single-summary" style="width: 100%; border-collapse: collapse;">
				<tr>
					<td colspan="2"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title( '<h1 class="airdrop-name">', '</h1>' ); ?></a></td>
				</tr>
				<tr class="airdrop-summary-published">
					<td colspan="2"><p><?php echo get_the_date( get_option( 'date_format' ) ); ?></p></td>
				</tr>
			</table>

		</div>
	</div><!-- /.row -->
	</article>
			<?php
		endwhile; // End of the loop.
		the_posts_pagination();
		?>
	</div><!-- /.row -->
	</div><!-- #primary -->
<?php do_action( 'airdrop_wrapper_close' ); ?>

<?php
get_footer();
