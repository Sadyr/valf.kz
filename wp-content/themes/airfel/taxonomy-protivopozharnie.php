<!-- start header -->
<!-- finish header -->
<?php
/* 
Template Name: Таксономии-Противопожарные
*/
get_header();
?>
<div>
	<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>

<section class="main-content">

  <h2 class="text-center text-uppercase ">
      <?php 
      $current_term = single_term_title( "", false );
      echo $current_term;
      ?> </h2>
  <div class="container">
    <div class="row">
    <?php
            if(have_posts()) {
              while(have_posts()) {
                the_post();
               ?>
      <div class="col-lg-3 col-xs-6 col-sm-4" >
      <?php 
        $product_image = get_field( 'image' );
         $product_url = get_permalink() ; 
         $product_description = get_field( 'описание_товара' );
         //$product_power = get_field( 'power' );   
      ?>
      
        <div class="product-card product title"  data-name="<?php the_title();?>" data-price='100'  data-id="<?php echo get_the_id();
;?>">
          <div class="product-thumb">
            <a href="<?php  echo $product_url  ?>" > <img src="<?php echo $product_image;?>" alt="<?php the_title();?>"> </a>
          </div>
          <div class=" card product-details">
            <h4 class="title"><a href="<?php echo  $product_url;  ?>"><?php the_title();?> </a></h4>
            <p><?php echo $product_description;?></p>
            <div class="product-bottom-details d-flex justify-content-between">
             
				  <button class="tiny btn  "> <a href="<?php  echo $product_url  ?>" >Подробнее </a></button>  
        <div class="product-links product" data-name="<?php the_title();?>" data-price='100'  data-id="<?php echo get_the_id();
;?>">
               <button class="tiny btn btn-primary addToCart ">Добавить в корзину</button> 
			                    

              </div>
              

            </div>
          </div>
      

      

  
         
               
        </div> 
      </div>

    
 <?php }
            } ?> 
 
  
    </div>
  </div>


    


</section>

<?php
get_footer();
?>