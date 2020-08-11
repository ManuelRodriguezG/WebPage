<!DOCTYPE html>
<html>
<head>
	<?php 
	
	include "../app/vistas/includes/librerias.php";
	
	?>
	<title>Dashboard</title>
</head>
<body>
	<div class="site-outer">
			<!--<nav class="navbar navbar-fixed-top slide-right">
				<section class="container-fluid">
					<div class="row">
						<div class="container-menu">
							<nav class="menu active" id="hb">
								<div></div>
								<div></div>
								<div></div>
							</nav>
							<div class="logotype">
								<div class="big">Dashboard</div>
							</div>
						</div>
					</div>
				</section>
			</nav>-->
			<div class="site-inner slide-right">
				<section class="" >
					<!-- ACCORDION ROW -->
					<div class="row" style="background: #dadadac9;width: 100%;">
						<!-- Content -->
						<div class="container">
							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<label class="title-section">Imágenes</label>
								</div>
								<div class="" style="width: 100%;">
									<form>
										<input type="file" multiple id="upload-image">
										<p>Drag your files here or click in this area.</p>
									</form>
									<div class="row container-images">
										
									</div>
								</div>
							</div>
							
							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<label class="title-section">Información del Producto</label>
								</div>
								<div class="" style="width: 100%;">
									<div>
										<label style="padding: 0px 10px;font-size:15px;margin: 0;">
											Nombre
										</label>
										<div class="container-input-animation">

											<input type="text" autocomplete="off" class="input-animation" id="costo-product">
										</div>
									</div>
									<div>
										<label style="padding: 0px 10px;font-size:15px;margin: 0;">
											Descripción
										</label>
										<div class="container-input-animation">

											<textarea autocomplete="off" class="input-animation" id="costo-product"></textarea>
										</div>
									</div>
									<div>
										<label style="padding: 0px 10px;font-size:15px;margin: 0;">
											Precio
										</label>
										<div class="container-input-animation">

											<input type="text" autocomplete="off" class="input-animation" id="costo-product">
										</div>
									</div>
								</div>

							</div>
							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<label class="title-section">Disponibilidad</label>
								</div>
								<div class="" style="width: 100%;">

									<div class="switch_box box_1">
										<label style="margin: 0;">Visibilidad del Producto</label>
										<input type="checkbox" class="switch_1">
									</div>
									<small style="color: gray;">Marcar para publicar el producto</small>
								</div>
								<div class="" style="width: 100%;">

									<div class="switch_box box_1">
										<label style="margin: 0;">Existencia</label>
										<input type="checkbox" class="switch_1">
										<div class="number">
											<input class="number__field" type="number" id="number1" min="1"  step="1" value="2">
										</div>
									</div>
									<small style="color: gray;">Marcar para declarar siempre existente</small>
								</div>

							</div>

							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<div>
										<label class="title-section">Categorias</label>
									</div>
									<small style="color: gray;">Ingresar categorias del producto Ejemplo: Peceras, Filtros, Pez Betta, Calefacción,Cerámica</small>
								</div>
								<div class="" style="width: 100%;">
									<div style="display: flex;">
										<div style="width: 80%;">

											<div class="container-input-animation">

												<input type="text" autocomplete="off" class="input-animation" id="costo-product">

											</div>
										</div>
										<div style="padding: 10px;width: 20%;justify-content: center;text-align: center;">
											<button class="btn btn-primary add_category"><i class="fas fa-plus"></i></button>
										</div>
									</div>
									<div class="container_categories row">
										<div style="width: fit-content;background: #eaeaea;padding: 5px 10px;border-radius: 21px;margin: 5px;">
											<label style="margin: 0;font-size: 15px;">Peceras</label>
											<label style="margin: 0;font-size: 15px;padding: 0 5px;cursor: pointer;"><i class="fas fa-times"></i></label>
										</div>
										<div style="width: fit-content;background: #eaeaea;padding: 5px 10px;border-radius: 21px;margin: 5px;">
											<label style="margin: 0;font-size: 15px;">Filtros</label>
											<label style="margin: 0;font-size: 15px;padding: 0 5px;cursor: pointer;"><i class="fas fa-times"></i></label>
										</div>
										<div style="width: fit-content;background: #eaeaea;padding: 5px 10px;border-radius: 21px;margin: 5px;">
											<label style="margin: 0;font-size: 15px;">Cerámica</label>
											<label style="margin: 0;font-size: 15px;padding: 0 5px;cursor: pointer;"><i class="fas fa-times"></i></label>
										</div>
									</div>

								</div>

							</div>
							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<label class="title-section">Variantes (Próximamente)</label>
								</div>
								<div class="" style="width: 100%;">

								</div>

							</div>
						</div>
					</div>

				</section>
			</div>
			<script type="text/javascript">
				jQuery('<button class="number__btn number__btn--down"></button>').insertBefore('.number__field');
				jQuery('<button class="number__btn number__btn--up"></button>').insertAfter('.number__field');

				jQuery('.number').each(function() {
					var spinner = jQuery(this),
					input = spinner.find('.number__field'),
					btnUp = spinner.find('.number__btn.number__btn--up'),
					btnDown = spinner.find('.number__btn.number__btn--down'),
					min = input.attr('min'),
					max = input.attr('max'),
					step = input.attr('step'); 
					btnUp.click(function() {
						var oldValue = parseFloat(input.val());
						if (oldValue >= max) {
							var newVal = oldValue;
						} else {
							var newVal = oldValue + parseFloat(step);
						}
						spinner.find("input").val(newVal);
						spinner.find("input").trigger("change");
					});

					btnDown.click(function() {
						var oldValue = parseFloat(input.val());
						if (oldValue <= min) {
							var newVal = oldValue;
						} else {
							var newVal = oldValue - parseFloat(step);
						}
						spinner.find("input").val(newVal);
						spinner.find("input").trigger("change");
					});
				});

			</script>
			<style type="text/css">
			.container-images{
				width: 100%;
				padding: 10px;
			}
			.image-product{
				width: 100px;
				object-fit: cover;
				height: 100px;
				border-radius: 5px;
			}
			.wrapper-image{
				margin: 5px;
			}
			.max-width{
				width: 100%;
			}
		</style>
		<style type="text/css">

		.number {
			display: inline-block;
			font-size: 0;
			background: #f2f2f2;
			height: 30px;
			float: right;
			margin-right: 10px;
			border-radius: 20px;
		}

		.number__field {
			-moz-appearance:textfield;
			display: inline-block;
			vertical-align: top;
			width: 55px;
			height: 30px;
			padding: 8px 15px;
			font-family: 'PT Sans', sans-serif;
			font-size: 14px;
			font-weight: 700;
			line-height: 26px;
			background: transparent;
			border: none;
			text-align: center;
			outline: none;
		}

		.number__btn {
			display: inline-block;
			vertical-align: top;
			position: relative;
			width: 30px;
			height: 30px;
			padding: 0;
			border: none;
			background: transparent;
		} 

		.number__btn--down::before {
			content: '';
			position: absolute; 
			display: block;
			left: 13px;
			top: 15px;
			height: 3px; 
			width: 10px;
			background: #a9a9a9;
		}
		.number__btn--up::before {
			content: '';
			position: absolute; 
			display: block;
			left: 10px;
			top: 15px;
			height: 3px; 
			width: 9px;
			background: #a9a9a9;
		}

		.number__btn--up::after {
			content: '';
			position: absolute; 
			display: block;
			left: 10px;
			top: 15px;
			height: 3px; 
			width: 9px;
			background: #a9a9a9;
			transform: rotate(90deg);
		}

		.number__field::-webkit-outer-spin-button,
		.number__field::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}


		input[type="checkbox"].switch_1{
			-webkit-appearance: none;
			-moz-appearance: none;
			float: right;
			appearance: none;
			width: 3.5em;
			height: 1.5em;
			background: #ddd;
			border-radius: 3em;
			position: relative;
			cursor: pointer;
			outline: none;
			-webkit-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out;
		}

		input[type="checkbox"].switch_1:checked{
			background: #0ebeff;
		}

		input[type="checkbox"].switch_1:checked + .number{
			display: none;
		}

		input[type="checkbox"].switch_1:after{
			position: absolute;
			content: "";
			width: 1.5em;
			height: 1.5em;
			border-radius: 50%;
			background: #fff;
			-webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
			box-shadow: 0 0 .25em rgba(0,0,0,.3);
			-webkit-transform: scale(.7);
			transform: scale(.7);
			left: 0;
			-webkit-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out;
		}

		input[type="checkbox"].switch_1:checked:after{
			left: calc(100% - 1.5em);
		}
	</style>
	<style type="text/css">
	.container-input-animation{
		padding: 10px;
		position: relative;
	}
	.text-label-input-animation.active{
		top: -2px;
		background: white;
		left: 29px;
		font-size: 14px;
	}
	.text-label-input-animation{
		position: absolute;
		top: 19px;
		left: 24px;
		color: rgba(0, 0, 0, 0.25);
		-webkit-transition:all 0.25s ease;
		transition:all 0.25s ease;
		-webkit-backface-visibility:hidden;
		pointer-events:none;
	}
	.input-animation, textarea{
		font-size: 17px;
		display: block;
		width: 100%;
		outline: none;
		height: calc(1.5em + .75rem + 2px);
		padding: 0.375rem .75rem;
		background: none;
		background-image: none;
		border: 1px solid #ced4da;
		color: black;
		border-radius: 5px;
		-webkit-transition:border-color .25s ease, box-shadow .25s ease;
		transition:border-color .25s ease, box-shadow .25s ease;
	}
</style>
<!-- NAVIGATION -->
<div class="navigation slide-right">


	<div class="navigation-content">
		<h3>Productos</h3>
		<ul class="navigation-menu">
			<!--<li><a href="#" class="active">Home</a></li>-->
			<li><a href="http://localhost/WebPage/mvc/dashboard/products/upload">Agregar Productos</a></li>
						<!--<li><a href="#">Kitchen cabinets</a></li>
						<li><a href="#">Counters</a></li>
						<li><a href="#">Other</a></li>-->
					</ul>
					<!--<h3>More</h3>
					<ul class="navigation-menu">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Info</a></li>
						<li><a href="#">Collaboration</a></li>
						<li><a href="#">Customer Service</a></li>
					</ul>-->
				</div>
			</div>
			
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('form input').change(function (e) {
					console.log(e.target.files[0]);
					$('form p').text(this.files.length + " file(s) selected");
					$(".container-images").attr("upload-count",this.files.length);
					$(".loader-upload-image").css("display","block");
					console.log(this.files);
					console.log(e.target.files);
					var files = this.files;
					console.log(this.files.length);
					var length = this.files.length;
					var reader = new FileReader();
					console.log(reader.readAsText(e.target.files[0]));
					console.log(reader);
					reader.onload = function(e) {
						console.log(e.target);
                        //$('.file-upload-image').attr('src', e.target.result);
                        
                    };
                    if(length == 0){
						//console.log(URL.createObjectURL(this.files[0]));
						//console.log(reader.readAsText(this.files[0]));
						//formData.append("file1",this.files);
					}else{
						for(var i = 0; i<length; i++){
							var arch=new FileReader();
							arch.addEventListener('load',addImage,false);
							arch.readAsDataURL(e.target.files[i]);
							//console.log(URL.createObjectURL(this.files[i]));
							//console.log(reader.readAsText(this.files[i]));
							//console.log(reader.readAsDataURL(i));
							//formData.append("file",this.files);
						}
					}
					//console.log(formData);
				});
				inputAnimation();
				activarTextoInputsAnimation();
				$(".add_category").click(function(){
					console.log("click add category");
				})
			});

			function addImage(ev){
				var count = $(".container-images").attr("upload-count");

				if(count-1 == 0){
					//ocultar loader
					$(".loader-upload-image").css("display","none");
				}
				$(".container-images").attr("upload-count",count-1)

				console.log(ev.target.result);
				//<div class="wrapper-image">
					//<div class="max-width">
						//<img src="image/products/pecera_20cm_rectangular.png" class="image-product">
					//</div>
				//</div>

				$(".container-images").append(
					'<div class="wrapper-image">'+
					'<div class="max-width">'+
					'<img src="'+ev.target.result+'" class="image-product new-image">'+
					'</div>'+
					'</div>'
					);
			}

			function inputAnimation(){
				$('.input-animation').on('keyup blur focus onchange', function (e) {

					var $this = $(this),
					label = $this.prev('label')
					if (e.type === 'keyup') {
						if ($this.val() === '') {
							label.removeClass('active highlight');
						} else {
							label.addClass('active highlight');
						}
					} else if (e.type === 'blur') {
						if( $this.val() === '' ) {
							label.removeClass('active highlight'); 
						} else {
							label.removeClass('highlight');   
						}   
					} else if (e.type === 'focus') {

						if( $this.val() === '' ) {
							label.removeClass('highlight'); 
						} 
						else if( $this.val() !== '' ) {
							label.addClass('highlight');
						}
					}
				});
			}

			function activarTextoInputsAnimation(){
				$(".input-animation").each(function(){
					console.log($(this).val());
					if($(this).val() != ""){
						console.log("diferente de vacio");
						console.log()
						$(this).siblings(".text-label-input-animation").addClass("active");
					}else{
						$(this).siblings(".text-label-input-animation").removeClass("active");
					}
				})
			}
		</script>
		<style type="text/css">
		form{
			position: relative;
			width: 100%;
			height: 200px;
			border: 2px dashed #adadad;
			border-radius: 10px;
		}
		form p{
			width: 100%;
			height: 100%;
			text-align: center;
			line-height: 170px;
			color: black;
			font-family: Arial;
		}
		form input{
			position: absolute;
			width: 100%;
			height: 100%;
			opacity: 0;
		}
		form button{
			margin: 0;
			color: black;
			background: #16a085;
			border: none;
			width: 508px;
			height: 35px;
			margin-top: -20px;
			margin-left: -4px;
			border-radius: 4px;
			border-bottom: 4px solid #117A60;
			transition: all .2s ease;
			outline: none;
		}
		form button:hover{
			background: #149174;
			color: #0C5645;
		}
		form button:active{
			border:0;
		}
	</style>
	<style type="text/css">
	.site-outer .row{
		margin: 0;
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 100;
		src: local('Roboto Thin'), local('Roboto-Thin'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 300;
		src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 400;
		src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: 700;
		src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
	}
	a {
		color: inherit;
	}
	a.active,
	a:active,
	a:focus,
	a:hover {
		color: inherit;
		text-decoration: none;
	}
	body {
		font-family: "Roboto", sans-serif;
		background: #fff;
	}
	.mg {
		margin: 7rem 0 4rem 0;
	}
	.big {
		color: #333;
		font-size: 4.5rem;
		font-weight: 700;
		margin: 1rem;
	}
	.head {
		color: #ca9964;
		font-size: 4.8rem;
		font-weight: 200;
		margin: 1rem;
	}
	*,
	*:before,
	*:after {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.site-outer {
		width: calc(100% - 250px);
	}
	.site-outer .navbar {
		background-color: #fff;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
	}
	.site-outer .navbar.slide-right {
		-webkit-transform: translate3d(250px, 0, 0);
		-moz-transform: translate3d(250px, 0, 0);
		transform: translate3d(250px, 0, 0);
	}
	.site-outer .site-inner {
		position: relative;
		margin: 0;
		padding: 0;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
	.site-outer .site-inner.slide-right {
		-webkit-transform: translate3d(250px, 0, 0);
		-moz-transform: translate3d(250px, 0, 0);
		transform: translate3d(250px, 0, 0);
	}
	.container-menu {
		margin: 0 auto;
	}
	.container-menu:before,
	.container-menu:after {
		content: "";
		display: block;
		zoom: 1;
	}
	.container-menu:after {
		clear: both;
	}
	.container-menu .menu {
		float: left;
		padding: 3rem 1.5rem;
		cursor: pointer;
		position: relative;
		display: inline-block;
		width: 8rem;
	}
	.container-menu .menu div {
		width: 50px;
		height: 0.4rem;
		background-color: #333;
		margin-bottom: 0.4rem;
		-webkit-transition: all 500ms ease;
		-moz-transition: all 500ms ease;
		transition: all 500ms ease;
		position: absolute;
	}
	.container-menu .menu div:nth-child(1) {
		left: 1.5rem;
		top: 2rem;
	}
	.container-menu .menu div:nth-child(2) {
		left: 1.5rem;
		top: 2.8rem;
	}
	.container-menu .menu div:nth-child(2):after {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 50px;
		height: 0.4rem;
		background-color: #333;
		-webkit-transition: all 350ms ease;
		-moz-transition: all 350ms ease;
		transition: all 350ms ease;
	}
	.container-menu .menu div:nth-child(3) {

		top: 3.6rem;
	}
	.container-menu .menu.active div:nth-child(1),
	.container-menu .menu.active div:nth-child(3) {
		width: 0;
	}
	.container-menu .menu.active div:nth-child(2) {
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		transform: rotate(-45deg);
	}
	.container-menu .menu.active div:nth-child(2):after {
		-webkit-transform: rotate(90deg);
		-moz-transform: rotate(90deg);
		transform: rotate(90deg);
	}
	.container-menu .logotype {
		cursor: pointer;
		float: left;
	}
	.container-menu .logotype div {
		margin: 0;
	}
	.container-menu .checkout {
		float: right;
		padding: 0.8rem 1.2rem 0;
	}
	.container-menu .checkout h3 {
		font-size: 1.8rem;
		font-weight: 300;
		text-transform: uppercase;
	}
	.accordion-group {
		overflow: hidden;
		margin: 0 auto;
		padding: 0;
		list-style: none;
		width: 100%;
		height: 700px;
		display: flex;
		align-items: center;
		-webkit-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		transition: all 300ms ease;
	}
	.accordion-group li {
		cursor: pointer;
		position: relative;
		display: flex;
		overflow: hidden;
		margin: 0;
		padding: 1.6em;
		list-style: none;
		width: 16.66666667%;
		height: inherit;
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
	}
	.accordion-group li h3 {
		position: relative;
		color: #fff;
		text-transform: uppercase;
		letter-spacing: 0.15rem;
		padding: 0;
		font-weight: 300;
		margin: 6.5rem 0 0;
	}
	.accordion-group li .accordion-overlay {
		position: absolute;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
	}
	.accordion-group li section {
		display: flex;
		align-items: center;
		width: 75%;
		height: 100%;
	}
	.accordion-group li section.big-section {
		width: 100%;
	}
	.accordion-group li section article {
		display: table-cell;
		vertical-align: middle;
		padding: 4rem;
		position: relative;
		right: -200%;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
	}
	.accordion-group li section article p {
		background-color: rgba(255, 255, 255, 0.8);
		padding: 1.6rem;
		color: #333;
		font-size: 1.6rem;
		letter-spacing: 0.15rem;
	}
	.accordion-group li section article p:before,
	.accordion-group li section article p:after {
		content: "";
		display: block;
		height: 1px;
	}
	.accordion-group li.out {
		width: 50%;
	}
	.accordion-group li.out section article {
		right: 0;
	}
	.navigation {
		background-color: #fff;
		overflow: auto;
		margin: 0;
		padding: 0;
		position: fixed;
		top: 0;
		left: 0;
		width: 250px;
		height: 100%;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
		-webkit-transform: translate3d(-250px, 0, 0);
		-moz-transform: translate3d(-250px, 0, 0);
		transform: translate3d(-250px, 0, 0);
	}
	.navigation:before,
	.navigation:after {
		content: "";
		display: block;
		zoom: 1;
	}
	.navigation:after {
		clear: both;
	}
	.navigation.slide-right {
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
	.navigation-login {
		padding: 2rem;
		line-height: 2;
		border: none;
		width: 100%;
		border-radius: 0;
		font-size: 1.8rem;
		background-color: #ca9964;
		font-weight: 100;
		color: #fff;
		text-transform: uppercase;
	}
	.navigation-search {
		padding: 2rem 2rem 0;
	}
	.navigation-content {
		padding:2rem;
	}
	.navigation-content h3 {
		color: #ca9964;
		text-transform: uppercase;
		letter-spacing: 0.1rem;
		padding: 0;
		font-weight: 300;
		font-size: 20px;
	}
	.navigation-content .navigation-menu {
		list-style: none;
		padding: 0;
	}
	.navigation-content .navigation-menu li {
		display: block;
		padding: 0.8rem 0;
		margin: 1rem 0;
	}
	.navigation-content .navigation-menu li a {
		color: #333;
		text-transform: uppercase;
		font-size: 1rem;
	}
	.navigation-content .navigation-menu li a.active,
	.navigation-content .navigation-menu li a:active,
	.navigation-content .navigation-menu li a:hover,
	.navigation-content .navigation-menu li a:focus {
		color: #ca9964;
		text-decoration: none;
	}
	.to-checkout {
		position: fixed;
		top: 0;
		right: 0;
		width: 450px;
		height: 100%;
		background-color: #ca9964;
		z-index: 10001;
		-webkit-transform: translate3d(450px, 0, 0);
		-moz-transform: translate3d(450px, 0, 0);
		transform: translate3d(450px, 0, 0);
	}
	.to-checkout-inner {
		padding: 2.5rem;
		color: #fff;
	}
	.to-checkout-list {
		padding: 0;
		margin: 0;
		display: block;
		list-style: none;
	}
	.to-checkout-list li a {
		color: #5aaed6;
	}
	#search {
		height: 35px;
		width: 100%;
		position: relative;
	}
	@media (max-width: 767px) {
		#search {
			width: auto;
		}
	}
	#search input {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		width: 35px;
		height: 35px;
		border: 1px solid #333;
		border-radius: 100%;
		background: transparent;
		color: #ca9964;
		font-size: 16px;
		font-weight: 400;
		outline: none;
		-webkit-transition: width 100ms ease-in-out;
		-moz-transition: width 100ms ease-in-out;
		transition: width 100ms ease-in-out;
	}
	#search input::-webkit-input-placeholder {
		color: transparent;
	}
	#search input:-moz-placeholder {
		color: transparent;
	}
	#search input::-moz-placeholder {
		color: transparent;
	}
	#search input:-ms-input-placeholder {
		color: transparent;
	}
	#search .search {
		background-color: transparent;
		position: absolute;
		top: 0;
		left: 0;
		height: 35px;
		width: 35px;
		padding: 0;
		border-radius: 100%;
		outline: none;
		border: 0;
		color: #333;
		cursor: pointer;
		-webkit-transition: all 300ms ease-in-out;
		-moz-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	#search .search:before,
	#search .search:after {
		content: "";
		position: absolute;
		width: 1rem;
		height: 0.1rem;
		background-color: #333;
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		transform: rotate(45deg);
		top: 3.3rem;
		left: 3rem;
		-webkit-transition: all 300ms ease-in-out;
		-moz-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	#search .close {
		-webkit-transition: all 400ms ease-in-out;
		-moz-transition: all 400ms ease-in-out;
		transition: all 400ms ease-in-out;
		right: 0;
		left: inherit;
	}
	#search .close:before {
		content: "";
		position: absolute;
		top: 1.7rem;
		left: 1.5rem;
		width: 27px;
		height: 4px;
		margin-top: -1px;
		margin-left: -13px;
		background-color: #ca9964;
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		transform: rotate(45deg);
		-webkit-transition: all 200ms ease-in-out;
		-moz-transition: all 200ms ease-in-out;
		transition: all 200ms ease-in-out;
	}
	#search .close:after {
		content: "";
		position: absolute;
		top: 1.7rem;
		left: 1.5rem;
		width: 27px;
		height: 4px;
		margin-top: -1px;
		margin-left: -13px;
		background-color: #ca9964;
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		transform: rotate(-45deg);
		-webkit-transition: all 200ms ease-in-out;
		-moz-transition: all 200ms ease-in-out;
		transition: all 200ms ease-in-out;
	}
	#search .square {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		padding: 0 4rem 0 1rem;
		width: 100%;
		height: 35px;
		border: 1px solid #333;
		border-radius: 0;
		color: #333;
		background-color: transparent;
		-webkit-transition: all 300ms ease-in-out;
		-moz-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	#search .square::-webkit-input-placeholder {
		color: #ca9964;
	}
	#search .square:-moz-placeholder {
		color: #ca9964;
	}
	#search .square::-moz-placeholder {
		color: #ca9964;
	}
	#search .square:-ms-input-placeholder {
		color: #ca9964;
	}
	#search .square.active #search .square:hover,
	#search .square:focus,
	#search .square:active {
		border-color: #ca9964;
	}
	.sm-box {
		padding: 1.5rem;
		height: 18rem;
		color: #fff;
		background-color: #fff;
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center center;
		width: 100%;
		position: relative;
		overflow: hidden;
		display: table;
		box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.35);
	}
	.sm-box-overlay {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		background-color: none;
		z-index: 998;
		-webkit-transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
		-moz-transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
		transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
	}
	.sm-box-basket {
		display: table-cell;
		position: relative;
		margin: 0 auto;
		vertical-align: middle;
		line-height: 135px;
		z-index: 999;
		-webkit-transition: all 250ms ease-in-out;
		-moz-transition: all 250ms ease-in-out;
		transition: all 250ms ease-in-out;
		-webkit-transform: translate3d(0, -100%, 0);
		-moz-transform: translate3d(0, -100%, 0);
		transform: translate3d(0, -100%, 0);
	}
	.sm-box-content {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		height: 4rem;
		width: 100%;
		color: #ca9964;
		z-index: 999;
		padding: 1rem 2rem;
		background-color: #fff;
		line-height: 1.5;
		-webkit-transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
		-moz-transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
		transition: all 250ms cubic-bezier(0.17, 0.67, 0.83, 0.67);
		-webkit-transform: translate3d(0, 100%, 0);
		-moz-transform: translate3d(0, 100%, 0);
		transform: translate3d(0, 100%, 0);
	}
	.sm-box.active,
	.sm-box:hover {
		box-shadow: 0 0 6px 4px rgba(0, 0, 0, 0.35);
	}
	.sm-box.active .sm-box-content,
	.sm-box:hover .sm-box-content {
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
	.sm-box.active .sm-box-content > i,
	.sm-box:hover .sm-box-content > i {
		-webkit-animation: rotate 500ms ease;
		-moz-animation: rotate 500ms ease;
		animation: rotate 500ms ease;
	}
	.sm-box.active .sm-box-basket,
	.sm-box:hover .sm-box-basket {
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
	.sm-box.active .sm-box-overlay,
	.sm-box:hover .sm-box-overlay {
		background-color: rgba(0, 0, 0, 0.6);
	}
	.product-box h2 {
		-webkit-transition: all 250ms ease;
		-moz-transition: all 250ms ease;
		transition: all 250ms ease;
	}
	.product-box:hover h2 {
		color: #ca9964;
	}
	.button {
		outline: none;
		border: 2px solid #fff;
		padding: 1.2rem 2rem;
		margin-bottom: 1rem;
		width: 100%;
		white-space: nowrap;
		font-size: 12px;
		text-transform: uppercase;
		font-weight: 400;
		vertical-align: middle;
		line-height: 18px;
		text-align: center;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		text-decoration: none;
		color: #ca9964;
		background-color: #fff;
		border-radius: 2rem;
		-webkit-transition: all 250ms ease;
		-moz-transition: all 250ms ease;
		transition: all 250ms ease;
		display: inline-block;
	}
	.button.active,
	.button:active,
	.button:focus,
	.button:hover {
		text-decoration: none;
		color: #fff;
		outline: none;
	}
	.button-red {
		background-color: #ca9964;
		color: #fff;
		border-color: #ca9964;
	}
	.button-red.active,
	.button-red:active,
	.button-red:focus,
	.button-red:hover {
		background-color: #d0a677;
		border-color: #d0a677;
	}
	.button-transparent {
		background-color: #fff;
		color: #ca9964;
		border-color: #ca9964;
	}
	.button-transparent.active,
	.button-transparent:active,
	.button-transparent:focus,
	.button-transparent:hover {
		background-color: #fff;
		color: #ca9964;
		border-color: #ca9964;
	}
	.modal-content {
		border-radius: 0px;
	}
	.modal-header {
		background-color: #ca9964;
		color: #fff;
	}
	.badge-red {
		background-color: #ca9964;
		color: #fff;
	}
	.badge-white {
		background-color: #fff;
		color: #ca9964;
	}
	.input-group-addon-holder {
		position: relative;
	}
	.input-group-addon-holder .number-icon {
		position: absolute;
		top: 16px;
		right: 15px;
	}
	.input-group-addon-holder .number-icon > i {
		display: none;
		color: #5aaed6;
		-webkit-transition: all 250ms ease;
		-moz-transition: all 250ms ease;
		transition: all 250ms ease;
	}
	.input-group-addon-holder .cvv-icon {
		position: absolute;
		top: 66px;
		right: 15px;
	}
	.input-group-addon-holder .cvv-icon > i {
		display: none;
		color: #5aaed6;
		-webkit-transition: all 250ms ease;
		-moz-transition: all 250ms ease;
		transition: all 250ms ease;
	}
	.input-group-addon {
		color: #333;
		border-color: #333;
		background-color: #fff;
		border-radius: 0;
	}
	.select-hidden {
		display: none;
		visibility: hidden;
		padding-right: 1rem;
	}
	.select {
		cursor: pointer;
		display: inline-block;
		position: relative;
		font-size: 16px;
		color: #333;
		width: 100%;
		height: 50px;
	}
	.form-control {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		width: 100%;
		height: 50px;
		border: 1px solid #333;
		border-radius: 0;
		background: transparent;
		color: #333;
		font-size: 16px;
		font-weight: 400;
		outline: none;
		-webkit-transition: all 300ms ease-in-out;
		-moz-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	.form-control::-webkit-input-placeholder {
		color: #333;
	}
	.form-control:-moz-placeholder {
		color: #333;
	}
	.form-control::-moz-placeholder {
		color: #333;
	}
	.form-control:-ms-input-placeholder {
		color: #333;
	}
	.form-control-sibling {
		border-top: 1px solid transparent;
	}
	.form-control.active .form-control:hover,
	.form-control:focus,
	.form-control:active {
		border-color: #ca9964;
	}
	.select-styled {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		width: 100%;
		height: 50px;
		border: 1px solid #333;
		border-radius: 0;
		background: transparent;
		padding: 1.3rem;
		color: #333;
		font-size: 16px;
		font-weight: 400;
		outline: none;
		-webkit-transition: all 300ms ease-in-out;
		-moz-transition: all 300ms ease-in-out;
		transition: all 300ms ease-in-out;
	}
	.select-styled:hover,
	.select-styled.active {
		border-color: #ca9964;
	}
	.select-options {
		list-style: none;
		display: none;
		position: absolute;
		top: 100%;
		left: 0;
		right: 0;
		z-index: 9999;
		margin: 0;
		padding: 0;
		background-color: #fff;
		border-left: 1px solid #ca9964;
		border-right: 1px solid #ca9964;
		border-bottom: 1px solid #ca9964;
	}
	.select-options li {
		margin: 0;
		height: 50px;
		padding: 1.3rem;
		-webkit-transition: all 250ms ease;
		-moz-transition: all 250ms ease;
		transition: all 250ms ease;
	}
	.select-options li:first-child {
		display: none;
	}
	.select-options li:hover {
		background-color: #d7b28a;
		color: #fff;
	}
	.footer {
		background-color: #333;
		padding: 2rem 0;
	}
	.footer-inner h3 {
		color: #595959;
	}
	.footer-inner .footer-list {
		padding: 0;
		margin: 0;
		display: block;
	}
	.footer-inner .footer-list li {
		display: block;
		color: #fff;
		margin-bottom: 0.8rem;
	}
	.footer-inner .footer-list li a:hover {
		text-decoration: underline;
	}
	.footer-inner .footer-list-inline {
		display: block;
	}
	.footer-inner .footer-list-inline li {
		display: inline-block;
		margin-right: 1.8rem;
	}
	@media (max-width: 767px) {
		.accordion-group {
			height: 360px;
		}
		.accordion-group li {
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.accordion-group li.out h3 {
			opacity: 0;
		}
		.accordion-group li h3 {
			opacity: 1;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			transform: rotate(90deg);
			width: 2.5rem;
			padding: 0;
			margin: 10rem 0;
		}
	}
	@-webkit-keyframes rotate {
		from {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		to {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
	@-moz-keyframes rotate {
		from {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		to {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
	@keyframes rotate {
		from {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		to {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
</style>

<!--<div class="loader-upload-image" style="position: fixed;top: 0;height: 100%;background: #ffffff8a;width: 100%;display:none">
	<div  style="transform: translateX(-50%)translateY(-50%);top: 50%;left: 50%;position: absolute;text-align: center;justify-content: center;">
		<label style="margin:0;text-shadow: 0px 0px 2px white;">Cargando Imágenes</label>
		<div style="width: 100%;text-align: center;justify-content: center;position: relative;">
			<i class="far fa-image" style="position: absolute;font-size: 50px;top: 46px;left: 46px;color: white;"></i>
			<svg version="1.1" id="L6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">

				<rect fill="none" stroke="#fff" stroke-width="4" x="25" y="25" width="50" height="50" style="stroke: black;fill: black;">
					<animateTransform attributeName="transform" dur="0.5s" from="0 50 50" to="180 50 50" type="rotate" id="strokeBox" attributeType="XML" begin="rectBox.end"></animateTransform>
				</rect>
				<rect x="27" y="27" fill="#fff" width="46" height="50" style="stroke: black;">
					<animate attributeName="height" dur="1.3s" attributeType="XML" from="50" to="0" id="rectBox" fill="freeze" begin="0s;strokeBox.end"></animate>
				</rect>
			</svg>
		</div>
	</div>
</div>-->
</body>
</html>