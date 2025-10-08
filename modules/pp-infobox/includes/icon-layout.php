<?php
$has_link = apply_filters( 'pp_infobox_icon_link_enabled', true, $settings );
?>
<div class="pp-icon-wrapper animated">
	<?php if ( $settings->icon_type == 'icon' ) { ?>
		<?php if ( ! empty( $settings->icon_select ) ) { ?>
			<div class="pp-infobox-icon">
				<div class="pp-infobox-icon-inner">
					<span class="pp-icon <?php echo $settings->icon_select; ?>"></span>
				</div>
			</div>
		<?php } ?>
	<?php } else { ?>
		<?php if ( isset( $settings->image_select_src ) && ! empty( $settings->image_select_src ) ) { ?>
			<div class="pp-infobox-image">
			<?php if ( $has_link && ( 'button' == $settings->pp_infobox_link_type || 'read_more' == $settings->pp_infobox_link_type || 'title+image' == $settings->pp_infobox_link_type ) ) { ?>
			<a href="<?php echo esc_url( do_shortcode( $settings->link ) ); ?>" target="<?php echo $settings->link_target; ?>" aria-label="<?php echo htmlspecialchars( $settings->title ); ?>">
			<?php } ?>
				<img src="<?php echo esc_url( $settings->image_select_src ); ?>" alt="<?php echo $module->get_alt(); ?>"<?php echo pp_get_image_size_attrs( $settings->image_select ); ?> />
			<?php if ( $has_link && ( 'button' == $settings->pp_infobox_link_type || 'read_more' == $settings->pp_infobox_link_type || 'title+image' == $settings->pp_infobox_link_type ) ) { ?>
			</a>
			<?php } ?>
			</div>
		<?php } ?>
	<?php } ?>
</div>