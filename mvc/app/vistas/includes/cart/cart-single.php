<div class="container-cart-single">
	<div class="container-button-cart">
		<button class="btn-icon-cart">
			<i class="fas fa-shopping-cart"></i>
		</button>

	</div>
	<div class="container-info-cart">
		<div>
			<div class="container-item-cart">
				<div>
					<image src="image/logo/logoBW.svg" width="50">
				</div>
				<div>
					Filtro para Pecera
				</div>
			</div>
		</div>
	</div>
</div>

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
	transform:translateX(204px);
	transition: 1s;
}
.container-item-cart{
	display: flex;
	padding: 1rem;
}

</style>

<script type="text/javascript">
	$(".btn-icon-cart").click(function(){
		if($(".container-info-cart").hasClass("show-info-cart")){
			$(".container-info-cart").removeClass("show-info-cart");
		}else{
			$(".container-info-cart").addClass("show-info-cart");
		}
	    
	})
</script>