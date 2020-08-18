<div class="container-cart-single" id="cart-single">
	<div class="container-button-cart">
		<button class="btn-icon-cart" style="position: relative;">
			<i class="fas fa-shopping-cart"></i>
			<label  class="label_cant">3</label>
			<label class="label_total">
				$590.00
			</label>
		</button>

	</div>
	<div class="container-info-cart">
		<div style="text-align: center;">
			<label style="margin: 0;padding: 10px;">No se han agregado productos</label>
		</div>
		<div class="container-items">
			<div class="container-item-cart">
				<div class="icon-trash-container">
					<label class="label-icon-trash icon-trash">
						<i class="fas fa-trash-alt icon-trash"></i>
					</label>
				</div>
				<div>
					<img src="http://localhost/WebPage/mvc/image/products/comida_hamster.png" class="image-cart">
				</div>
				<div class="container-info-item">

					<div class="info-item">
						<label>Alimento para Hámster</label>
						<label class="label_total_item">$65</label>
					</div>
					<div class="container-cant-item">
						<div class="number">
							<input class="number__field" type="number" id="number1" min="1"  step="1" value="2">
						</div>
						<label class="label_price_item">$65.00</label>
					</div>

				</div>
			</div>
			<div class="container-item-cart">
				<div class="icon-trash-container">
					<label class="label-icon-trash icon-trash">
						<i class="fas fa-trash-alt icon-trash"></i>
					</label>
				</div>
				<div>
					<img src="http://localhost/WebPage/mvc/image/products/pecera_panoramica_20cm.png" class="image-cart">
				</div>
				<div class="container-info-item">

					<div class="info-item">
						<label>Pecera Panorámica 5L</label>
						<label class="label_total_item">$65</label>
					</div>
					<div class="container-cant-item">
						<div class="number">
							<input class="number__field" type="number" id="number1" min="1"  step="1" value="2">
						</div>
						<label class="label_price_item">$65.00</label>
					</div>

				</div>
			</div>
			<div class="container-item-cart">
				<div class="icon-trash-container">
					<label class="label-icon-trash icon-trash">
						<i class="fas fa-trash-alt icon-trash"></i>
					</label>
				</div>
				<div>
					<img src="http://localhost/WebPage/mvc/image/products/calentador.jpg" class="image-cart">
				</div>
				<div class="container-info-item">

					<div class="info-item">
						<label>Calentador 200W</label>
						<label class="label_total_item">$65</label>
					</div>
					<div class="container-cant-item">
						<div class="number">
							<input class="number__field" type="number" id="number1" min="1"  step="1" value="2">
						</div>
						<label class="label_price_item">$65.00</label>
					</div>

				</div>
			</div>
		</div>
		<div class="container-btns">
			<div class="container-btns-cart">
				<button class="btn btn-primary btn-continue-shopping">Continuar Compra</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".label-icon-trash").click(function(){
			console.log("Change icon");
			if($(this).hasClass("icon-trash")){
				$(this).html('<i class="fas fa-times icon-times"></i>');
				$(this).addClass("icon-times");
				$(this).removeClass("icon-trash");
			}else if($(this).hasClass("icon-times")){
				$(this).html('<i class="fas fa-trash-alt icon-trash"></i>');
				$(this).addClass("icon-trash");
				$(this).removeClass("icon-times");
			}
			//setTimeout(function(){
			//	$(this).html('<i class="fas fa-trash-alt icon-trash"></i>');
			//	$(this).addClass("icon-trash");
			//	$(this).removeClass("icon-times");
			//},2000);
		});
	})
</script>
<style type="text/css">
	.container-items{
		display: none;
	}
	.container-btns{
		display: none;
	}
	.info-item{
		display: block;
	}
	.label_total_item{
		margin: 0;
		color: gray;
		font-size: 13px;
		padding-left: 5px;
		float: right;
	}
	.container-cant-item{
		display: block;
		text-align: center;
	}
	.label_price_item{
		float: right;
	}
	.container-info-item{
		padding-left: 10px;
		width:100%;
	}
	.image-cart{
		width: 50px;
		height: 50px;
		object-fit: contain;
	}
	.label_total{
		margin: 0;
		color: black;
		font-size: 13px;
		position: relative;
		padding: 5px;
		display: none;
	}
	.label_cant{
		position: absolute;
		display: none;
		margin: 0;
		top: 0;
		background: black;
		padding: 0px 3px;
		color: white;
		right: 8px;
		border-radius: 0px 0px 3px 3px;
	}
	.btn-continue-shopping:hover{
		background: #b0ded3;
		border: 2px solid #b0ded3;
	}
	.btn-continue-shopping{
		border: 2px solid #b0ded3;
		border-radius: 20px;
		background: white;
		color: gray;
		margin: 10px;
	}
	.container-btns-cart{
		text-align: center;
	}
	.icon-trash{
		padding-top: 13px;
		cursor: pointer;
		color: #007bff;
	}
	.icon-times{
		padding-top: 13px;
		cursor: pointer;
		color: #dc3545;
		font-size:21px;
	}
	.label-icon-trash{
		padding: 10px 10px 10px 10px;
		margin: 0;
	}
	.icon-trash-container{
		background: white;

	}
	.number {
		display: inline-block;
		font-size: 0;
		background: #f2f2f2;
		height: 30px;
		float: left;
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
	.container-cart-single{
		position: fixed;
		top: 40vh;
		right: 0;
		z-index: 10;
	}
	.container-button-cart{
		width: 100%;
		margin-bottom: 2px;
		justify-content: right;
		text-align: right;
	}
	.btn-icon-cart{
		padding: 1rem;
		box-shadow: 0px 1px 2px 0px rgb(136 136 136 / 30%);
		border: none;
		background: white;
		outline: none !important;
	}
	.show-info-cart{
		transform:translateX(0px) !important;

	}
	.container-info-cart{
		background:white;
		display: none;
		transform:translateX(500px);
		transition: 1s;
		max-width: 250px;
	}
	.container-item-cart{
		display: flex;
		padding: 1rem;
	}
</style>

<script type="text/javascript">
	//$(".btn-icon-cart").click(function(){
	//	if($(".container-info-cart").hasClass("show-info-cart")){
	//		$(".container-info-cart").removeClass("show-info-cart");
	//	}else{
	//		$(".container-info-cart").addClass("show-info-cart");
	//	}
	//})
</script>
<script type="text/javascript">
	//local Storage
	//localStorage["cart-single"]
	class Cart{
		constructor(data = null){
			console.log(!localStorage["cart"]);
			var defaults = {
				total:0,
				data:null,
				discount:0,
				url_cart:"http://localhost/WebPage/mvc/cart"
			};
			
			if(!localStorage["cart"] && data != null){
				this.options = $.extend({},defaults,data);
				localStorage["cart"] = JSON.stringify(this.options);
			}else if(data != null){
				this.options = $.extend({},defaults,data);
				localStorage["cart"] = JSON.stringify(this.options);
			}else{
				this.options = defaults;
				localStorage["cart"] = JSON.stringify(defaults);
			}
			
			this.general_events();
			this.ready();
			this.updateCart();
		}

		addItem(data){
			console.log(localStorage["cart"]);
		}

		updateCart(){
			
			console.log(this.options);
		}

		ready(){
			$(document).ready(function(){
				$(".container-info-cart").css("display","inherit");
			});
		}

		general_events(){
			/*
				Cart information container transition
				*/
				$(".btn-icon-cart").click(function(){
				//Extra small    < 576px
				//small          >= 576px
				//Medium         >= 768px
				//Large          >= 992px
				//Extra Large	   >= 1200px
				console.log($(document).width());
				var width = $(document).width();
				/*--- SMALL ---*/
				if(width <= 576){
					$(".container-info-cart").css("width",+width+"px");
					$(".container-info-cart").css("max-width",+width+"px");
					if($(".container-info-cart").hasClass("show-info-cart")){
						$(".container-info-cart").removeClass("show-info-cart");
						$(".container-info-cart").css("transform","translateX("+width+"px)");
					}else{
						$(".container-info-cart").addClass("show-info-cart");
					}
					/*--- MEDIUM - EXTRA LARGE ---*/
				}else if(width > 576){
					$(".container-info-cart").css("width","auto");
					$(".container-info-cart").css("max-width","500px");
					if($(".container-info-cart").hasClass("show-info-cart")){
						$(".container-info-cart").removeClass("show-info-cart");
						$(".container-info-cart").css("transform","translateX("+$(".container-info-cart").width()+"px)");
					}else{
						$(".container-info-cart").addClass("show-info-cart");
					}
				}
				//if($(".container-info-cart").hasClass("show-info-cart")){
				//	$(".container-info-cart").removeClass("show-info-cart");
				//}else{
				//	$(".container-info-cart").addClass("show-info-cart");
				//}
			})
			}
		}

		window["cart"] = new Cart(/*{
			discount:0,
			data:{
				0:{
					item_name:"Alimento para Hámster",
					item_price:65,
					quantity:2,
					url_image:"http://localhost/WebPage/mvc/image/products/comida_hamster.png",
				},
				1:{
					item_name:"Pecera Panorámica 5L",
					item_price:65,
					quantity:2,
					url_image:"http://localhost/WebPage/mvc/image/products/pecera_panoramica_20cm.png",
				},
				2:{
					item_name:"Calentador 200W",
					item_price:65,
					quantity:2,
					url_image:"http://localhost/WebPage/mvc/image/products/calentador.jpg",
				}
			}
		}*/);

		/*-- Add product Simulation --*/
		var infoProduct = <?php echo json_encode(
			array(
				array(
					"item_name"=>"Calentador 200W",
					"item_price"=>65,
					"quantity"=>2,
					"url_image"=>"http://localhost/WebPage/mvc/image/products/calentador.jpg",
				),
				array(
					"item_name"=>"Pecera Panorámica 5L",
					"item_price"=>65,
					"quantity"=>2,
					"url_image"=>"http://localhost/WebPage/mvc/image/products/pecera_panoramica_20cm.png",
				),
				array(
					"item_name"=>"Alimento para Hámster",
					"item_price"=>65,
					"quantity"=>2,
					"url_image"=>"http://localhost/WebPage/mvc/image/products/comida_hamster.png",
				)
			)
		); ?>;
		console.log(infoProduct);
		var info = {
			item_name:"Alimento para Hámster",
			item_price:65,
			quantity:2,
			url_image:"http://localhost/WebPage/mvc/image/products/comida_hamster.png",
		};
		window["cart"].addItem(info);
	</script>