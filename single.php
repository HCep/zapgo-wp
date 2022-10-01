<?php
get_header(); ?>
<?php if(!is_front_page()){ ?>
    <div class="single-banner" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
        <div class="single-banner-container">
                <h1 class="single-title"> 
                    <?php echo the_title(); ?>
                </h1>
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>

                    <hr class="my-2" stlye="background-color:#E3E5E8; colo:#E3E5E8;">
        </div>
   
    </div>


<?php } ?>


<main>
    <div class="single-container mx-auto">
        <?php the_content(); ?>

			


	</div>
</main>

<?php get_footer(); ?>
