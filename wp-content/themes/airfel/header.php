<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"   href="img/favicon.ico" type="image/x-icon">
	    <script src="https://kit.fontawesome.com/1299574373.js" crossorigin="anonymous"></script>

  <title><?php wp_title( $sep, $echo, $seplocation ); ?></title>
<?php wp_head(); ?>
	
	
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(89941457, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89941457" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<!-- start header -->
<body>

	
	 <div class="container-2 container-nav  ">
        <div class="item-nav ">
	<div class="breadcrumb">

</div>



		 
		 </div>

        <div class="item-nav brand"> <a href="<?php bloginfo('url');?>"><i class="fa-solid fa-fire-flame-curved"></i> Airfel</a> </div>
        <div class="item-nav ">
          

            <div class="nav-element" >
                <!--<a class="nav-element" data-bs-toggle="modal" data-bs-target="#exampleModal"  href="#"> Заказать звонок</a>-->
				
								<a class="nav-element" data-bs-toggle="modal"    data-bs-target="#exampleModal"      > <i class="fa-solid fa-phone"></i> Заказать звонок</a> 

                <!--<a class="nav-element"data-bs-toggle="modal" data-bs-target="#cartShop"  href="#">Корзина</a>-->
				<a class="nav-element" data-bs-toggle="modal"    data-bs-target="#cartShop"  onclick="displayCart();"    > <i class="fa-solid fa-cart-shopping"></i>  Корзина</a>
                <a class="nav-element" href="#"   data-bs-toggle="modal"    data-bs-target="#search"  ><i class="fa-solid fa-magnifying-glass"></i>Поиск</a>


            </div>
        </div>

       </div>
	
	
	 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Заказать звонок</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body ">

			<form id="contactForm" action="<?php bloginfo('url');?>/call.php" method="post">

                  <div class="mb-3">
                  <input class="form-control"  type="phone" id="fname" name="phone"  required placeholder="Введите Ваш телефон">
                  </div>
                        <!-- Email address input -->
                  <div class="mb-3">
                    <input class="form-control" id="emailAddress" type="email"  name = "email" required placeholder="Введите Email" data-sb-validations="required, email" />
                  </div>
                        <div class="d-grid">
                          <button class="btn btn-primary btn-lg" type="submit">Отправить</button>
                        </div>
									                  </form>
 
                
        </div>
       
      </div>
    </div>
  </div>
  
		
		
		 <div class="modal fade" id="cartShop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <script> update(); </script>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 >Список желаемых товаров</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <!--   <div class="container "> -->
				 <!--  <div class="row "> -->
				 <!-- <div class="col ">	-->			
			<form id="contactForm"  action="<?php bloginfo('url');?>/send-shop-list.php" method="post">
				<p class="cart-num"></p>
              <!--<div class="container">-->
                 <div class="products-container">
                      <div class="products">
						  <div class="product"> <h6>Корзина пуста! </h6> <h6>Пожалуйста, выберите желаемые товары! </h6></div>
                      </div>
					 

                <!-- </div>-->
                </div>	
									 <input type='hidden' name='idshopname' id='idshop'>

				 <div class="d-grid">
					 
					 <div class='test'> </div>
                  <textarea  name="comment" class="form-control"placeholder="Коментарий к заявке" aria-label="With textarea"></textarea>
                                    </div>

					 <div class="mb-3">
                 <input class=" maini form-control"  type="phone" id="fname" name="phone"  required placeholder="Введите Ваш телефон">
                  </div>
                  <div class="mb-3">
                    <input class=" maini form-control" id="emailAddress" type="email"  name = "email" required                                        placeholder="Введите Email" data-sb-validations="required, email" />
                  </div>
                     <div class="d-grid">
                          <button class=" maini btn btn-primary btn-lg" type="submit">Отправить</button> <br>
                     </div>										
	         </form>
			<button  onclick="clearCart()"  id="maini" class=" maini clear btn btn-danger btn-lg" >Очистить корзину</button>     
           <!--    </div>-->
				
       <!--   </div> -->
       
     <!-- </div> -->
    </div>
  </div>
		    </div>
		    </div>

  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			 <script> update(); </script>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 >Поиск по сайту</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
       <script async src="https://cse.google.com/cse.js?cx=53821c8732ea24f12">
</script>
<div class="gcse-search"></div>
    </div>
  </div>
		    </div>
		    </div>

  