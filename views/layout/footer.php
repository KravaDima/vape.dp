<!---- start-bottom-grids---->
		<div class="bottom-grids">
			<div class="bottom-top-grids">
				<div class="wrap">
					<div class="bottom-top-grid">
						<h4>Помощь</h4>
						<ul>
							<li><a href=<?php ROOT; ?>"/contacts">Контакты</a></li>
							<li><a href="#">Shopping</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid">
						<h4>Как заказать?</h4>
						<ul>
							<li><a href="/payments">Доставка и Оплата</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid last-bottom-top-grid">
						<h4>Регистрация</h4>
						<p>Создайте один аккаунт для управления заказами и возможности быстрых покупок</p>
						<a class="learn-more" href=<?php ROOT;?>"/user/register">Перейти к регистрации</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="bottom-bottom-grids">
				<div class="wrap">
					<div class="bottom-bottom-grid">
					</div>
					<div class="bottom-bottom-grid">
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
				</div>
				<div class="footer-right">
					<p>(c)<a href="http://dripping.me/"> Dripping.me</a></p>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
		<script>
			$(document).ready(function() {
				$(".add-to-cart").click(function () {
					var id = $(this).attr("data-id");
					$.post("/cart/addAjax/"+id, {}, function (data) {
						$("#cart-count").html(data);
					});
					return false;
				});
			});
		</script>
		<script>
			function checkFoo(){
				var f = document.forms.order;
				var elm = f.elements;
				var isEmpty = false;
				var isChecked = false;
				for(var i=0; i<elm.length; i++){
					if(elm[i].type == "text"){
						if(elm[i].value == ""){
							elm[i].style.borderColor = "red";
							isEmpty = true;
						} else {
							elm[i].style.borderColor = "";
						}
					} else if(elm[i].type == "radio"){
						if (elm[i].checked) {
							isChecked = true;
						}
					}
				}
				if(isEmpty  || !(/\+380[0-9]{9}/.test(elm.phone.value))){
					alert("Заполните правильно все поля!");
				} else {
					f.submit();
				}
			}
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-87478366-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?137"></script>

		<!-- VK Widget -->
		<div id="vk_community_messages"></div>
		<script type="text/javascript">
		VK.Widgets.CommunityMessages("vk_community_messages", 129659246, {expandTimeout: "60000",tooltipButtonText: "Есть вопрос?"});
		</script>
	</body>
</html>