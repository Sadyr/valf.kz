<!-- start header -->
<!-- finish header -->
<?php

get_header();
?>
<!-- start header -->
<!-- finish header -->


<?php

/*
Template Name: MaestroSmartPremix
Template Post Type: post, page,tovar, product
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1299574373.js" crossorigin="anonymous"></script>



<link rel="stylesheet" href="productd.css">
    <title>Настенные газовые котлы</title>
</head>
<body>

<div>
	<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>
   


  <div class="card">
   <div class="card">
		 <?php 
        $product_image = get_field( 'image' );
         $product_url = get_permalink() ; 
         $product_description = get_field( 'описание_товара' );
         //$product_power = get_field( 'power' );   
      ?>
    <h2 class="h2-top title" ><?php the_title();?>  </h2>
</div>

<div class=" container container-2 container-top ">
        <img   class="item img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/Maestro-top.webp"?>  style="width: 50%;" alt="airfel" >

    <div class="item-top ">
		
			<?php echo $product_description;?>

       
        <div class="button addToCart">  <button class="tiny btn btn-primary ">Добавить в корзину</button> 
        </div>

    </div>
    
</div>



<?php

/*echo do_shortcode ('[digifexDuoShortCode]');*/

		


get_footer();
?>


