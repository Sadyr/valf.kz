<!-- start header -->
<!-- finish header -->
<?php
/* 
Template Name: Главная
*/
get_header();
?>



<!-- start top navbar -->
<!-- finish top navbar -->

<!-- start content space -->
    <section class="about ">
        <div class=".container ">
            <div class="row  p-3 ">
                <div class="col">
                    <h5 class=" p-3 text-center fw-bold"> Газовые котлы</h5>
                    <div class=" line"></div>
<?php                        
            $terms = get_terms( 'gazovie_kotel' );
					$cars = array($terms[8],$terms[9],$terms[6],$terms[5], $terms[1],$terms[10],$terms[14],$terms[16],$terms[12],$terms[15],$terms[7],$terms[2],$terms[0],$terms[3],$terms[17],$terms[4],$terms[11],$terms[13]);
					
					
			

if( $cars && ! is_wp_error($cars) ){
  foreach( $cars as $car ){
    $url = get_term_link( $car );
    echo "<h6><a   href='$url' class='list-group-item-action text-center' >". $car->name ."</a></h6>";
      }
} 
 
           
?>                 
                </div>
                <div class="col">
                    <h5 class=" p-3 text-center fw-bold">Трубы и фитинги</h5>
                    <div class="line"></div>
                       <?php                        
            $terms = get_terms( 'trubi_i_fitingi' );
if( $terms && ! is_wp_error($terms) ){
	 
  foreach( $terms as $term ){
	 
    $url = get_term_link( $term );
	 
    echo "<h6><a   href='$url' class=' list-group-item-action text-center' >". $term->name ."</a></h6>";
      }
}
?>
            <!-- любой текст 
                </div>
                <div class="col">
                    <h6 class=" p-3 text-center fw-bold">Арматуры</h6>
                    <div class="line"></div>
           // <?php                        
           // $terms = get_terms( 'armaturi' );
		    

//if( $terms && ! is_wp_error($terms) ){
 // foreach( $terms as $term ){
  //  $url = get_term_link( $term );
  //  echo "<h6><a   href='$url' class='list-group-item-action text-center' >". $term->name ."</a></h6>";
  //    }
//} 
             
//?>
-->
                       
                </div>
                <div class="col">
                    <h5 class=" p-3 text-center fw-bold">Противопожарные</h5>
                    <div class="line"></div>
            <?php                        
            $terms = get_terms( 'protivopozharnie' );

if( $terms && ! is_wp_error($terms) ){
  foreach( $terms as $term ){
    $url = get_term_link( $term );
    echo "<h6><a   href='$url' class=' list-group-item-action text-center' >". $term->name ."</a></h6>";
      }
} 
             
?>
                </div>
                <div class="col">
                    <h5 class=" p-3 text-center fw-bold">Хомуты</h5> 
                    <div class="line"></div>
            <?php                        
            $terms = get_terms( 'homuti_silikoni_peni' );

if( $terms && ! is_wp_error($terms) ){
  foreach( $terms as $term ){
    $url = get_term_link( $term );
    echo "<h6><a   href='$url' class=' list-group-item-action text-center' >". $term->name ."</a></h6>";
      }
} 
             
?>
                </div>
            </div>
        </div>
    
    </section>



<!-- finish content space -->
<!--  start footer and bottom navbar -->
<!--  finish footer and bottom navbar -->






<?php
get_footer();


?>

