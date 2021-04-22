<style>
	body{
		margin:0;
	}
	.wrapper-error{
		position: relative;
		background:#e9edb8;
		height:100vh;
		overflow: hidden;
	}
	
	.logo-img{
		width:20%;
	}
	
	.center-img{
		margin: auto;
  		position: absolute;
  		top: 50px;
		left: 0;
		bottom: 0;
		right: 0;
		opacity:0.4;
	}
	
	.bottom-img{
		position: absolute;
 		bottom: 0;
        width: 100%;
	}
	.error{
		position:relative;
		text-align: center;
		z-index:1001;
		max-width:1024px;
		margin:0 auto;
	 }
	
	h1{
		 font-family: "Open Sans", sans-serif;
		 font-size: 32px;
		 line-height: 1.5;
		 color: #434242;
	}
	
	.error p{
		 font-family: "Open Sans", sans-serif;
		 font-size: 18px;
		 line-height: 1.5;
		 color: #434242;
	}
</style>

<div class="wrapper-error">
	<img class="logo-img" src="<?php echo get_template_directory_uri()?>/assets/img/logo_big_img.png">
	<img class="center-img" src="<?php echo get_template_directory_uri()?>/assets/img/404.png">
	<div class="error">
		<h1>Ошибка 404</h1>
		<p>Добро пожаловать на страницу 404! Вы находитесь здесь, потому что ввели адрес страницы, которая уже не существует или была перемещена по другому адресу.</p>
		<p>Возможно, запрашиваемая Вами страница была перенесена или удалена. Также возможно, Вы допустили небольшую опечатку при вводе адреса – такое случается даже с нами, поэтому еще раз внимательно проверьте.</p>
	</div>
	<img class="bottom-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-us-background.png">
</div>