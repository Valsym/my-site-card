<?php

class Controller_Contacts extends Controller
{
	
	function action_index()
	{

		if(isset($_POST['your-name']) && isset($_POST['your-email']))
		{
			$name = $_POST['your-name'];
			$email =$_POST['your-email'];
			$subject = $_POST['your-subject'];
			$message =$_POST['your-message'];
			
			if($name != "" && $email !="")
			{
				$data["status"] = "access_granted";
				
				$to = 'simonvn@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
				$message = '
						<html>
							<head>
								<title>'.$subject.'</title>
							</head>
							<body>
								<p>Имя: '.$name.'</p>
								<p>email: '.$email.'</p>
								<p>email: '.$message.'</p>
							</body>
						</html>'; //Текст нащего сообщения можно использовать HTML теги
				$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
				$headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
				//throw new \Exception("mail(): Failed to connect to mailserver at localhost port 25, verify your SMTP and smtp_port setting in php.ini or use ini_set()\n");
				   try {
					   if (mail($to, $subject, $message, $headers)) //Отправка письма с помощью функции mail
							$message .= '<br />PHP считает, что письмо отправлено, проверяй ящик! Загляни в спам, если письма не видно';
				   } catch (\Exception $e) {
						//echo $e->getMessage();
						$message .= '<br />PHP считает, что письмо отправить не удалось...';
				   }
				   // покажем на странице введённые данные и результат отправки письма
				   echo($message);
			}
			else
			{
				$data["status"] = "access_denied";
			}
		}
		else
		{
			$data["status"] = "";
		}
		
		//$this->view->generate('login_view.php', 'template_view.php', $data);
		
		
		$this->view->generate('contacts_view.php', 'template_view.php', $data);
	}
}
