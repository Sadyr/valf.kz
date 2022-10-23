<html>
  <head>
    <title>Заявка на обратный звонок</title>
	   <script src="alert/dist/sweetalert-dev.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body>
  <script>

 function fireSweetAlert() {
      Swal.fire(
            'Ваша зявка успешно отправлена!',
            'Скоро мы с Вами свяжемся!'
        ).then(function() {
    window.location = 'index.php';
});
    }
	  
	  
	  
	  
        </script>

	  
	  
	  
	  
	  
	  
	  <?php
	  
	  //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'testsmtp/PHPMailer-master/src/Exception.php';
require'testsmtp/PHPMailer-master/src/PHPMailer.php';
require 'testsmtp/PHPMailer-master/src/SMTP.php';

// Настройки сервера на примере Яндекс почты
$mail = new PHPMailer;
$mail->isSMTP();                                     
$mail->Host         = 'srv-plesk53.ps.kz';
$mail->Port         = 587;
$mail->SMTPAuth     = true;
$mail->Username     = 'info@valf.kz'; // Если почта для домена, то логин это полный адрес почты
$mail->Password     = 'Balerion1997';
$mail->SMTPSecure   = 'TLS';


// Авторизация
$mail->CharSet = 'UTF-8';
$mail->From = 'info@valf.kz';
$mail->FromName = 'info@valf.kz';
$mailadr = 'info@valf.kz';
$mail->addAddress($mailadr);


// Контент  
#$select_urlico = $_POST['select_urlico'];
#$company_name = $_POST['company_name'];
#$loan_sum = $_POST['loan_sum'];
#$times = $_POST['times'];
#$select_zalog = $_POST['select_zalog'];
#$select_target = $_POST['select_target'];
#$select_address	 = $_POST['select_address'];
	  
$phone = $_POST['phone'];
$email = $_POST['email'];
$shopitem=$_POST['idshopname'];  
$comment=$_POST['comment'];  

#$mail->isHTML(true);                    
$mail->Subject = "Список желаемых товаров!";

$mail->Body ="
Телефон: $phone  \n 
Email:$email \n 
Список товаров:$shopitem \n 
Коментарий к заказу:$comment \n ";
#$email = $_POST['email']; // this is the sender's Email address


// Отправка
if(!$mail->send()) {
    echo 'Сообщение не может быть отправлено.';
    echo 'Ошибка: ' . $mail->ErrorInfo;
    exit;
}
else{
    if (count($_POST)>0) echo "<script> 
			 fireSweetAlert();
	
	   
</script>";
	
}
	  // window.location.replace('https://main.kernelx.ru');
?>

  </body>
</html>
