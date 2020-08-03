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
					<div class="row" style="background: #dadadac9;width: 100%;height: 1000px;">
						<!-- Content -->
						<div class="container">
							<div class="row row-content-product-edition" style="margin: 1rem;padding: 1rem;background: white;border-radius: 5px;">
								<div class="" style="width: 100%;">
									<label class="title-section">Imágenes</label>
								</div>
								<div class="" style="width: 100%;">
									<form action="upload.php" method="POST">
										<input type="file" multiple>
										<p>Drag your files here or click in this area.</p>
									</form>
								</div>
							</div>
						</div>
					</div>

				</section>
			</div>

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
				$('form input').change(function () {
					$('form p').text(this.files.length + " file(s) selected");
				});
			});
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
<script type="text/javascript">
	(function () {
		var expand;
		expand = function () {
			var $input, $search;
			$search = $('.search');
			$input = $('.input');
			if ($search.hasClass('close')) {
				$search.removeClass('close');
				$input.removeClass('square');
			} else {
				$search.addClass('close');
				$input.addClass('square');
			}
			if ($search.hasClass('close')) {
				$input.focus();
			} else {
				$input.blur();
			}
		};
		$(function () {
			var $accordion, $wideScreen;
			$accordion = $('#accordion').children('li');
			$wideScreen = $(window).width() > 767;
			if ($wideScreen) {
				$accordion.on('mouseenter click', function (e) {
					var $this;
					e.stopPropagation();
					$this = $(this);
					if ($this.hasClass('out')) {
						$this.addClass('out');
					} else {
						$this.addClass('out');
						$this.siblings().removeClass('out');
					}
				});
			} else {
				$accordion.on('touchstart touchend', function (e) {
					var $this;
					e.stopPropagation();
					$this = $(this);
					if ($this.hasClass('out')) {
						$this.addClass('out');
					} else {
						$this.addClass('out');
						$this.siblings().removeClass('out');
					}
				});
			}
		});
		$(function () {
			var $container, $menu, $menubtn, $navbar;
			$menubtn = $('#hb');
			$navbar = $('.navbar');
			$menu = $('.navigation');
			$container = $('.site-inner');
			$menubtn.on('click', function (e) {
				if ($menubtn.hasClass('active')) {
					$menubtn.removeClass('active');
					$menu.removeClass('slide-right');
					$container.removeClass('slide-right');
					$navbar.removeClass('slide-right');
				} else {
					$menubtn.addClass('active');
					$menu.addClass('slide-right');
					$container.addClass('slide-right');
					$navbar.addClass('slide-right');
				}
			});
		});
		$(function () {
			var $button, clickOrTouch;
			clickOrTouch = 'click touchstart';
			$button = $('#search-button');
			$button.on(clickOrTouch, expand);
		});
		$(function () {
			var $box;
			$box = $('.sm-box');
			$box.on('click', function (e) {
				e.preventDefault();
				var $this;
				$this = $(this);
				if ($this.hasClass('active')) {
					$this.removeClass('active');
				} else {
					$this.addClass('active');
				}
			});
		});
	}.call(this));

	$("select").each(function() {
		var $this = $(this),
		$options = $(this).children("option").length;

		$this.addClass("select-hidden");
		$this.wrap("<div class='select'></div>");
		$this.after("<div class='select-styled'></div>");

		var $styledSelect = $this.next("div.select-styled");
		$styledSelect.text($this.children("option").eq(0).text());

		var $list = $("<ul />", {
			"class": "select-options"
		}).insertAfter($styledSelect);

		for (var i = 0; i < $options; i++) {
			$("<li />", {
				text: $this.children("option").eq(i).text(),
				rel: $this.children("option").eq(i).val()
			}).appendTo($list);
		}

		var $listItems = $list.children("li");

		$styledSelect.on("click", function(e) {
			e.stopPropagation();
			$("div.select-styled.active").each(function() {
				$(this).removeClass("active").next("ul.select-options").hide();
			});

			$(this).toggleClass("active").next("ul.select-options").toggle();
		});

		$listItems.on("click", function(e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass("active");
			$this.val($(this).attr("rel"));
			$list.hide();
		});

		$(document).on("click", function() {
			$styledSelect.removeClass("active");
			$list.hide();
		});

		$(".select-sibling").next(".select-styled").css({
			"border-top": "0px"
		});
	});

	(function () {
		var $addItem = $("#add-item");
		var $badge = $(".badge");
		var $count = 1;

		$addItem.on("click", function(e) {
			e.preventDefault();
			$badge.html($count++);
		});
	}.call(this));
</script>
</body>
</html>