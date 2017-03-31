<?php get_header(); ?>

<div class="container">
	
	<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<?php 
		$args = array('post_type'=>'slider', 'showposts'=>5);
		$my_slider = get_posts( $args );
		$count_indicator = 0;
		if($my_slider) : foreach ($my_slider as $post ) : setup_postdata( $post );
	 ?>


    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count_indicator; ?>" <?php if($count_indicator == 0): ?> class="active" <?php endif;?>></li>
    <?php 
    	$count_indicator++;
    	endforeach;
    	endif;
    ?>   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

	<?php 
		$count_images = 0;
		if($my_slider) : foreach ($my_slider as $post ) : setup_postdata( $post );
	?>

    <div class="item <?php if($count_images == 0) echo "active"; ?>">
    	<?php the_post_thumbnail('full' ); ?>      
      <div class="carousel-caption">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
    
    <?php 
    	$count_images++;
    	endforeach;
    	endif;
    ?>
  </div>


	<?php if($my_slider) : ?>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

	<?php endif; ?>

</div>

</div>
</div>


<!-- SALES -->
<div class="product_home">
  <div class="container">
  <div class="row">

    <?php 
        $args = array('post_type'=>'sales', 'showposts'=>-1);
        $my_sales = get_posts( $args );
        $count_sales = 1;
        if($my_sales) : foreach ($my_sales as $post) : setup_postdata( $post );
     ?>	
			
			<div class="col-md-4 col-lg-4">
			<section>
				<a href="<?php get_field('link')?>">
					
			      	<?php
						$image = get_field('image');

						if( !empty($image) ): ?>
							<img class="img-thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>

			      <h2><?php the_title(); ?></h2>
			      <p><?php echo get_field('description')?></p>
			    

				</a>   


			</section>
			</div>
			<?php if ( $count_sales % 3 === 0 ) { echo '</div><div class="row">'; } ?>

		 

    <?php 
      $count_sales++;
      endforeach;
      endif;
    ?>

  </div>
</div>

</div>


<!-- MOST SELLED -->

<div class="product_home">
	
<div class="container">
        <div class="row">
                    <div id="myCarousel" class="multiple-items">
                     <!-- Carousel items -->


								<?php 
							        $args = array('post_type'=>'most_selled', 'showposts'=>-1);
							        $my_most_selled = get_posts( $args );
							        $count_most_selled = 0;
							        if($my_most_selled) : foreach ($my_most_selled as $post) : setup_postdata( $post );
							     ?>	

                                <div class="item">
                                    
										<section>

											<a href="<?php get_field('link')?>">
												<?php
													$image = get_field('image');

													if( !empty($image) ): ?>
														<img class="image-thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												
												<?php endif; ?>

										      <h2><?php the_title(); ?></h2>
										      <p><?php echo get_field('description')?></p>
											</a>

										</section>

                                        
                                    
                                </div>

								<?php 
								    $count_most_selled++;
								    endforeach;
								    endif;
								?>

							
                                
                            

                        
                        <!--/carousel-inner-->
                    </div><!--/myCarousel-->
           
        </div>
    </div>


</div>





<?php get_footer(); ?>