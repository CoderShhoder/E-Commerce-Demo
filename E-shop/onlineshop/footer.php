<footer id="footer" style="background:#15161D;">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p style="color:white;">This is our Database Management System mini project:<br>
									Harshit Kumar<br>
									Upendra Gupta<br>
									Harsh Raj</p>
								<ul class="footer-links">
									<li><a href="#" style="color:white;"><i class="fa fa-map-marker" style="color:white;"></i>AMC ENGINEERING COLLEGE,Bangalore</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex" style="color:white;"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Upendra Gupta, Harshit Kumar, Harsh Raj</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>

						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#" style="color:white;">Mobiles</a></li>
									<li><a href="#" style="color:white;">Men</a></li>
									<li><a href="#" style="color:white;">Women</a></li>
									<li><a href="#" style="color:white;">Kids</a></li>
									<li><a href="#" style="color:white;">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Social</h3>
								<ul class="footer-links">
									<li><a href="#" style="color:white;"><i class="fa fa-facebook" style="color:white;"></i> Facebook</a></li>
									<li><a href="#" style="color:white;"><i class="fa fa-instagram" style="color:white;"></i> Instagram</a></li>
									<li><a href="#" style="color:white;"><i class="fa fa-twitter" style="color:white;"></i> Twitter</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
