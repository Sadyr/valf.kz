		
			<div class=" container container-2">
        <div class="item-info">
			<h4 >Информация</h4>
              <ul class="list-unstyled">
                <li>Каталоги</li>
                <li>Филиалы-Магазины</li>
                <li>Сервис-Запчати</li>
				    <li>Акции-проекты</li>
				    
              </ul></div>
        <div class="item-info">
			<h4 >Контакты и Адрес</h4>
              <ul class="list-unstyled">
                <li>Адрес: г.Алматы, ул. Тлендиева 156 </li>
				  <li>График работы: пн-пт: 09:00-18:00</li>
				   <li>  Контактные телефоны: </li>
                <li> 8 727 242 33 43</li>
				  <li> 8 778 933 51 01</li>
				    <li>8 778 490 61 51</li>
				   <li> 8 778 414 53 72</li>
                <li>email: info@valf.kz</li>

              </ul></div>
        <div class="item-info">
			<form id="" action="<?php bloginfo('url');?>/call.php" method="post">

              <h4 >Заказать звонок</h4>
              <ul class="list-unstyled">
                <form id="contactForm">      
                  <div class="mb-3">
                  <input class="form-control"  type="phone" id="fname" name="phone"  required placeholder="Введите Ваш телефон">
                  </div>
                        <!-- Email address input -->
                  <div class="mb-3">
                    <input class="form-control" id="emailAddress" type="email"  name = "email" required placeholder="Введите Email" data-sb-validations="required, email" />
                  </div>
                              <!-- Form submit button -->
                        <div class="d-grid">
                          <button class="btn btn-primary btn-lg" type="submit">Отправить</button>
                        </div>
									                  </form>
				  </div>

    </div>


<!--  finish footer and bottom navbar -->

<?php wp_footer(); ?>

</body>
</html>
