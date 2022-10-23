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

<div class="container container-2 container-top ">
        <img   class="item img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/Maestro-top.webp"?>  style="width: 50%;" alt="airfel" >

    <div class="item-top ">
		
			<?php echo $product_description;?>

       
        <div class="button addToCart">  <button class="tiny btn btn-primary ">Добавить в корзину</button> 
        </div>

    </div>
    
</div>


<div class="container container-2 container-main">
    <img   class="item-main img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/maestro-main.webp"?> alt="paris" >
    <h2 class="h2-main   ">AIRFEL MAESTRO SMART PREMIX -  ОТОПИТЕЛЬНЫЙ КОТЕЛ </h2> <br>

    <p class="paragraph-main  item-main "  > 
        Airfel всегда рядом с тобой, с новым отопительным котлом Maestro Smart Premix,
         изысканностью, практичностью, безопасностью, 
         экономией и эффективностью. Подготовься к знакомству с абсолютно новым отопительным котлом. <br>
         <br>
         Элегантная черная стеклянная панель
Компактный дизайн нового поколения
Экономная производительность благодаря запатентованному теплообменнику
Встроенное управление и автоматический онлайновый контроллер

    </p>
</div>



                <h2 class="h2-improve">НЕПРОХОДЯЩАЯ ИЗЫСКАННОСТЬ                </h2> 

 <div class="container container-2">

<p  class="item-improve"  >
    Airfel Maestro Smart Premix превосходит все, что мы ожидаем от отопительного котла благодаря привлекательной, элегантной стеклянной передней панели черного цвета и футуристическому дизайну... Комбинированный котел нового поколения, который открывает новые горизонты благодаря онлайн-управлению, п
    реподносит вам особый комфорт благодаря цифровому термостату. И наконец, самое главное, все эти преимущества представлены в одном котле.
</p>

<img   class="item-improve img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/maestro-improve.webp" ?> style="width: 50%;" alt="paris" >
</div>





<h2 class="h2-technology">НЕПРОХОДЯЩАЯ ТЕХНОЛОГИЯ</h2> 

<div class=" container container-2 container-technology   ">
    <img   class=" container container-2 item-container-technology "  src=<?php echo  (get_template_directory_uri()) . "/assets/img/maestro-technology.webp"?>  alt=" Airfel Maestro Smart Premix " >

        
        <div class=" container container-2 item-container-technology ">
            <p class="tech-par">Вы сможете с легкостью управлять котлом благодаря приложению Airfel.</p>
            <div  class="item-tech container-2 container  ">
            <div class="item-icon"><i class="fa-solid fa-temperature-quarter"></i></div> 
            <div class="item-text">Всегда нужная температура <br>
                Задай требуемую температуру и в твоем доме всегда будет одинаковая температура </div> 
            </div>

            <div  class="item-tech container ">
                <div class="item-icon"><i class="fa-brands fa-app-store-ios"></i></div> 
                <div class="item-text">Мобильное управление <br>
                    Вы можете управлять своим котлом со своего телефона. </div> 
                </div>

                
                <div  class="item-tech container-2 container ">
                    <div class="item-icon"><i class="fa-solid fa-chalkboard-user"></i></div> 
                    <div class="item-text">Смарт-режимы <br>
                        Вы можете обеспечить автоматическую смену режимов «дом», «сон», «вне дома» согласно программы на неделю или расположения. </div> 
                    </div>

                    <div  class="item-tech container-2 container">
                        <div class="item-icon"><i class="fa-solid fa-hand-holding-heart"></i></div> 
                        <div class="item-text">Экономия <br>
                            Вы сможете легко обеспечить экономию благодаря смарт-режимам. </div> 
                        </div>

                        <div  class="item-tech container-2 container ">
                            <div class="item-icon"><i class="fa-solid fa-signal"></i></div> 
                            <div class="item-text">Управление электропотреблением <br>
                                Вы можете просмотреть процент потребления электроэнергии и обеспечить эффективное использование. </div> 
                            </div>
                


           
           
         </div> 

</div>



<h2 class="h2-technology-white ">НЕПРОХОДЯЩАЯ ТЕХНОЛОГИЯ</h2> 

<div class=" container container-2 container-technology-white    ">
    <img   class=" container container-2 item-container-technology-white "  src=<?php echo  (get_template_directory_uri()) . "/assets/img/tech-white-girl.webp" ?> alt="Airfel Maestro Smart Premix " >

        
        <div class="container container-2 item-container-technology-white  ">
            <div  class="item-tech-white  container-2 container ">
            <div class="item-icon-white "><i class="fa-solid fa-house"></i></div> 
            <div class="item-text-white ">Режим «дом» <br>
                Отрегулируй температуру для создания комфортной атмосферы в доме, исключая, таким образом, бессмысленную работу котла при сохранении комфорта. </div> 
            </div>

            <div  class="item-tech-white  container-2 container ">
                <div class="item-icon-white "><i class="fa-solid fa-moon"></i></div> 
                <div class="item-text-white ">Режим «сон» <br>
                    Уменьшив температуру на 1-2 градуса во время сна, вы не только обеспечите здоровый сон, а и экономию.</div> 
                </div>

                
                <div  class="item-tech-white  container-2 container ">
                    <div class="item-icon-white "><i class="fa-solid fa-chalkboard-user"></i></div> 
                    <div class="item-text-white ">Режим «вне дома» <br>
                        Нет смысла поддерживать уровень температуры, если дома никого нет. Уменьшив температуру в режиме «вне дома», вы не только обеспечите экономию, 
                        а и обеспечите достижение требуемой температуры по прибытию домой, сохраняя, таким образом, комфортную атмосферу. </div> 
                    </div>

                    <div  class="item-tech-white  container-2 container ">
                        <div class="item-icon-white "><i class="fa-solid fa-location-crosshairs"></i></i></div> 
                        <div class="item-text-white ">Автоматическое управление <br>
                            Технология определения нахождения обеспечит обогрев вашего дома до прибытия вас или членов вашей семьи. </div> 
                        </div>

                        <div  class="item-tech-white  container-2 container ">
                            <div class="item-icon-white "><i class="fa-solid fa-house-user"></i></div> 
                            <div class="item-text-white ">Программа на неделю <br>
                                Программа на неделю обеспечит автоматический нагрев дома согласно расписания. </div> 
                            </div>

                        <div  class="item-tech-white  container-2 container ">
                            <div class="item-icon-white "><i class="fa-regular fa-hand-point-up"></i></div> 
                            <div class="item-text-white ">Ручное управление <br>
                                Вы можете выполнить переключение между смарт-режимами в зависимости от настройки времени. </div> 
                            </div>
                


           
           
         </div> 

</div>





  


        
<script src="js/bootstrap.bundle.min.js">
    
</script>
</body>
</html>

<?php

/*echo do_shortcode ('[digifexDuoShortCode]');*/

		


get_footer();
?>