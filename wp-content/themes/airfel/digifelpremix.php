<!-- start header -->
<!-- finish header -->
<?php

get_header();
?>
<!-- start header -->
<!-- finish header -->


<?php

/*
Template Name:digifelpremix
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
	
	<?php 
        $product_image = get_field( 'image' );
         $product_url = get_permalink() ; 
         $product_description = get_field( 'описание_товара' );
         //$product_power = get_field( 'power' );   
      ?>
	
   <div class="card">

    <h2 class="h2-top title" ><?php the_title();?>  </h2>
</div>


<div class="container container-2 container-top ">
     <img   class="item img"  src="<?php echo  ( $product_image) ?>
"  style="width: 50%;" alt="<?php the_title();?>" >

    <div class="item-top ">
		<?php echo $product_description;?>
          <div class="button addToCart">  <button class="tiny btn btn-primary ">Добавить в корзину</button> 
        </div>

    </div>
    
</div>


<div class="container container-2 container-main">
    <img   class="item-main img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/digifel-premix-main.webp"?> alt="Digifel Premix" >
    <h2 class="h2-main ">AIRFEL DIGIFEL PREMIX - КОНДЕНСАЦИОННЫЕ КОТЛЫ   </h2>
    <p class="paragraph-main  item-main "  > 
        Новый конденсационный котел Digifel Premix вашего надежного и безопасного бренда Airfel в соответствии с регламентами ErP является экологически чистым продуктом, который бережно относится
         к окружающей среде, благодаря классу Nox 
         6 и обеспечивает высокий КПД и экономию за счет полной модуляции пламени и наноса с управляемой частотой.
    </p>
</div>



                <h2 class="h2-improve">Преимущества</h2> 

 <div class="container container-2">

<ul  class="item-improve"  >
 <li>Тепловая мощность 23 кВт, 24 кВт, 26 кВт, 30 кВти 38 кВт</li>
 <li>Соответствие регламентам ErP</li>
  <li>Широкий интервал модуляции 1:6</li>
  <li>Технология полного сжигания благодаря горелке Premix (с предварительным смешиванием)</li>
  <li>Класс энергоэффективности А</li>
  <li>Высокая экономия топлива благодаря технологии конденсации </li>
  <li>Теплообменник из нержавеющей стали нового поколения </li>
  <li>Возможность работы на природном газе и LPG (при LPG только с пропаном) </li>
  <li>Вентилятор с регулируемой частотой</li>
  <li>Насос PWM с частотно-регулируемым электроприводом</li>
  <li>Более высокая энергоэффективность благодаря технологии ColdBurner</li>
  <li>Класс NOx 6 – экологически безопасный продукт по показателям эмиссии</li>
  <li>Экологически безопасный продукт благодаря низким показателям эмиссии</li>
  <li>Диагностика неисправностей и системы защиты</li>
  <li>Возможность работы с системой «теплый пол»*</li>
  <li>Возможность интегрированной работы с датчиком температуры наружного воздуха (дополнительно)</li>
  <li>Возможность интегрированной работы с автоматическим контроллером (дополнительно)  </li>
  <li>Изготовлен на заводе Daikin
  </li>
</ul>

<img   class="item-improve img" src=<?php echo  (get_template_directory_uri()) . "/assets/img/digifelpremix-improve.webp"?> style="width: 50%;" alt="Digifel Premix" >
</div>


<div class=" container container-2 container-red-icon  ">
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-droplet "></i></div><h6>Технология кондиционирования ЖК экрана</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-a "></i></div><h6>Энергоэффективность</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-sharp fa-solid fa-gauge-high"></i></div><h6>Мощность</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-fire-flame-curved"></i></div><h6>Сжигание предварительно приготовленной смеси</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-regular fa-bell-slash"></i></div><h6>Бесшумная работа</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-tv"></i></div><h6>ЖК экран</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-plug"></i></div><h6>Экономия электроэнергии</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-temperature-low"></i></div><h6>Терморегулирование</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-shower"></i></div><h6>Режим комфорта</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-arrow-up-from-water-pump"></i></div><h6>Насос с преобразователем частоты</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-battery-full"></i></div><h6>Два теплообменника</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-regular fa-square"></i></div><h6>Компактные размеры</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-leaf"></i></div><h6>Экологически безопасный продукт</h6></div>
   <div class="items-red  fa-lg" ><div class="item-red-icon"><i class="fa-solid fa-layer-group"></i></div><h6>Изготовлено в Турции</h6></div>
      </div> 



      
      <div class="container container-2 container-control-bg ">
        <h2 class="h2-control">AIRFEL ON/OFF АВТОМАТИЧЕСКИЙ КОНТРОЛЛЕР    </h2> 


        <p  class="item-control .container-control-bg" >

            Более экономичный котел благодаря автоматическим контроллерам Airfel 

            Благодаря проводным и беспроводным 
            автоматическим контроллерам Airfel ON/OFF с 
            широким ЖК экраном, которые позволяют составлять 
            дневную/недельную программу, вы всегда будете в окружении комфорта и экономии! <br>
            <br>

            *  Возможность работы в 4 разных режимах <br>
            *  Недельный режим – Комфортный режим – Экономный режим – Ручной режим <br>
            *  Широкая площадь покрытия<br>
            *  Двухстороння связь между котлом и комнатным блоком<br>
            *   Настольное исполнение благодаря специальной подставке в беспроводных моделях<br>
        
        
            
         </p>
     
     <img   class="item-control img"  src=<?php echo  (get_template_directory_uri()) . "/assets/img/woman.webp"?>  style="width: 50%;" alt="Digifel Premix" >
     </div>
     

      
      <div class="container container-2 container-white-icon ">
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-code"></i></div><h6>Программирование на неделю        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-wifi"></i></div><h6>Широкая площадь покрытия </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-bolt"></i></div><h6>Смарт-оптимизация мощности        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-recycle"></i></div><h6>Высокая экономия        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-circle-nodes"></i></div><h6>Двухсторонняя связь
        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-fire-flame-curved"></i></div><h6>Индикатор пламени        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-regular fa-snowflake"></i></div><h6>Защита от замерзания        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-regular fa-moon"></i></div><h6>Ночной режим        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-sun"></i></div><h6>Дневной режим        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-wrench"></i></div><h6>Ручная калибровка
        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-shield-halved"></i></div><h6>Специальный настенный блок        </h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-plug"></i></div><h6>Кабельная проводка 5 м</h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-battery-full"></i></div><h6>Работа от аккумулятора</h6></div>
        <div class="items-white fa-lg" ><div class="item-white-icon"><i class="fa-solid fa-tv"></i></div><h6>Широкий ЖК экран</h6></div>
           </div> 
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

        

<?php

/*echo do_shortcode ('[digifexDuoShortCode]');*/

		


get_footer();
?>