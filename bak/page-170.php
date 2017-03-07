<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
		<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
<div id="package">
<?php get_template_part('parts/content_parts'); ?>
</div>
<?php get_footer(); ?>