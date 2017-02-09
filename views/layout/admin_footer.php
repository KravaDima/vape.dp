<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
					<!-- <ul>
						<li><a href="#">United Kingdom</a> <span> </span></li>
						<li><a href="#">Terms of Use</a> <span> </span></li>
						<li><a href="#">Nike Inc.</a> <span> </span></li>
						<li><a href="#">Launch Calendar</a> <span> </span></li>
						<li><a href="#">Privacy & Cookie Policy</a> <span> </span></li>
						<li><a href="#">Cookie Settings</a></li>
						<div class="clear"> </div>
					</ul> -->
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
			CKEDITOR.replace("description");
		</script>
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
	</body>
</html>