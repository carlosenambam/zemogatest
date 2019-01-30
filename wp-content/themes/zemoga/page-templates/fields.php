<?php
/**
 * Template Name: Fields
 *
 * @package Zemoga
 */

get_header();
$devs = get_post_meta( get_the_id(), 'developers', true );
?>
<div class="dev_container container-fluid">
	<ul class="row devs_list">
	<?php
	foreach ( $devs as $dev ) {
		?>
		<li class="dev col-xs-12 col-sm-6 col-xl-4" title="<?php echo esc_attr( $dev['name'] ); ?>">
			<a href="<?php echo esc_attr( $dev['url'] ); ?>">
				<p class="name"><?php echo esc_html( $dev['name'] ); ?></p>
				<img class="photo" src="<?php echo esc_attr( $dev['photo'] ); ?>" alt="<?php echo esc_attr( $dev['name'] ); ?>">
				<p class="caption"><?php echo esc_html( $dev['caption'] ); ?></p>
			</a>
		</li>
		<?php
	}
	?>
	</ul>
</div>

<?php
get_footer();
