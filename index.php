<?php if ( is_page( '146' ) ): ?>
<!-- is_page( '146' ) (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
    <?php get_template_part('parts/column_the_content'); ?>
    <?php get_template_part('parts/content_parts'); ?>
    <?php get_template_part('parts/button'); ?>
<?php get_footer(); ?>
<?php elseif ( is_page( '170' ) ): ?>
<!-- is_page( '170' ) (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
<div id="package">
<?php get_template_part('parts/content_parts'); ?>
</div>
<?php get_footer(); ?>
<?php elseif ( is_page( '321' ) ): ?>
<!-- is_page( '321' ) (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<style>
    .txt-ranking { overflow: hidden;     margin: -1em  -1em 1em -1em;}
</style>
<?php echo get_template_part( "parts/header_parts" ); ?>
<div id="content">
<?php get_template_part('parts/content_parts'); ?>
<?php get_footer(); ?>
<?php elseif( is_page() || is_category() || is_tag() || is_search() ): ?>
<!-- is_page( '34' )/page/category/tag/search (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<!--コンテンツ-->
<div id="content">
<?php get_template_part('parts/content_parts'); ?>
<?php get_footer(); ?>
<?php elseif( is_archive( 'column' ) ): ?>
<!-- archive( 'column' ) (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
<?php get_template_part('parts/content_parts'); ?>
<?php get_template_part('parts/button'); ?>
<?php get_footer(); ?>
<?php elseif( is_singular("column") ): ?>
<!-- is_singular("column") (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<div id="content">
<?php get_template_part('parts/content_parts'); ?>

<?php get_template_part('parts/button'); ?>
<?php get_footer(); ?>
<?php elseif( is_single() || is_home() ): ?>
<!-- index/single (index.php)
======================================================================================================================================== -->
<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<div id="content">
<?php get_template_part('parts/content_parts'); ?>
<?php get_footer(); ?>
<?php endif; ?>