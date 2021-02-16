<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/cart.js"></script>
		<link rel="stylesheet" href="css/cart.css">
		<title>КОРЗИНА</title>
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
				<h1 class = "cart-title">Корзина</h1>
				<div class="main-cart">
					<div class = "email-field">
						<h2 class="order-details">Детали заказа</h2>
						<p style="border-bottom: 1px solid black; margin-right: 20px; padding-bottom: 15px;">Итого: </p>
						<p>ФИО: <input type="text" id="ename"></p>
						<p>Email: <input type="text" id="email"></p>
						<p>Телефон: <input type="text" id="ephone"></p>
						<p><button class="send-email">Оформить заказ</button></p>
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