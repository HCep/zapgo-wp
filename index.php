<?php
get_header(); ?>
<?php if(!is_front_page()){ ?>
    <div class="page-banner" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
    <h1 class="page-title"> 
        <?php echo the_title(); ?>
    </h1>
    <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
    </div>


<?php } ?>


<main>
    <div class="container-fluid px-0 mx-0">
        <?php the_content(); ?>

			





	</div>
</main>

<?php get_footer(); ?>
