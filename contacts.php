<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/contacts.js"></script>
		<link rel="stylesheet" href="css/contacts.css">
		<title>КОНТАКТЫ</title>
	</head>
	<body>
		<header>
			<div class = "header__section">
				<div class="top-menu">
		         	<ul>
			            <li><a href="/index.php">Магазин</a></li>
			            <li><a href="/whereToBuy.php">Как купить</a></li>
			            <li><a href="/aboutUs.php">О нас</a></li>
			            <li><a href="/faq.php">FAQ</a></li>
			            <li><a href="/contacts.php">Контакты</a></li>
		         	</ul>
	       		</div>
	       		<div class="cart-section">
	       			<a href="cart.php">	
		       			<div class="cart-img"><img src="images/cart.png"></div>
		       			<div class="mini-cart"></div>
		       		</a>
	       		</div>
	       	</div>
		</header>
		<div id = "block-content">
			<div id = "block-body">
				<h1 class = "contacts">КОНТАКТЫ</h1>
				<div class = "content_contacts">
					<div class="row">
						<p class="font_1">
							Если вы не нашли, что искали, или хотите заказать что-то особенное, напишите нам! Будем рады помочь.
						</p>
						<form class="contacts_data">
							<input type="text" name="fio" placeholder="ФИО"><br><p></p>
							<input type="text" name="email" placeholder="Эл. почта"><br><p></p>
							<input type="text" name="phone" placeholder="Телефон"><br><p></p>
							<textarea type="text" name="message" placeholder="Добавьте сообщение..."></textarea><br>
							<button>Отправить</button>
						</form>
						<div class="info">
							<h5>АДРЕС</h5>
							<P>ул. Строителей, д. 6, Чебоксары, Чувашская Республика</P><br>
							<h5>ТЕЛЕФОН</h5>
							<P>+7 (953) 016-93-81</P><br>
							<h5>EMAIL</h5>
							<P>di.mystadd@gmail.com</P>
						</div>				
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="special">
				<div id = "social_button">
					<a href="https://vk.com/blacklizzard27" target="_blank">
						<img src="images/vk.png" alt="ВКонтакте" title="ВКонтакте">
					</a>
					<a href="https://www.instagram.com/_blacklizzard_/" target="_blank">
						<img src="images/instagram.png" alt="Instagram" title="Instagram">
					</a>
					<a href="https://t.me/mystadd" target="_blank">
						<img src="images/telegram.png" alt="Telegram" title="Telegram">
					</a>
				</div>
				<p class="footer_copyright">© 2021 Магазин одежды «ClothesShop». Все права защищены.</p>
			</div>		
		</footer>
	</body>
</html>