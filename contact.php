<?php include ('header.php');?>
					<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul>            
							<li><a id="modal_trigger" href="#modal" class="btn1">Login</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script></li> |   
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Subscribe</a></li>
						</ul>
					</div>
					<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
						<div class="login">
							<h3>Log In</h3>
							<h4>Already a Member</h4>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
							<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
							<input type="submit" value="Login" />
						</div>
					</div>
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<div class="clearfix"></div>
							<input type="submit"  value="Subscribe Now"/>
						</div>
					</div>	
                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
					 
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about-us.php">About Us</a></li>
      <li><a href="policy.php">Policies</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">		
				<div class="contact-section">
					<div class="contact-section-head">
						<h3>Contact us</h3>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7117.501119576765!2d75.80810483199916!3d26.879665067984263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5d806120941%3A0x986a835984679034!2sUniversity+Rajasthan+College!5e0!3m2!1sen!2sin!4v1521519965147" frameborder="0" style="border:0"></iframe>
					</div>
                    
                     
                    
                    
					<div class="contact-form-bottom">
						<div class="col-md-4 address">
							<address>
								<h5>Address:</h5>
								<p>Government Of Rajasthan</p>
								<p>Tilak Marg Secretariat</p>
								<p class="bottom">Jaipur , Rajasthan</p>
								<h5>Phone:</h5>
								<p> 0141 222 7656</p>
							</address>
						</div>
						<div class="col-md-4 contact-form">
						<form>
								<div class="contact-form-row">
									<div>
										<span>Name</span>
										<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
									</div>
									<div>
										<span>Email</span>
										<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
									</div>
									<div>
										<span>Phone</span>
										<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
									</div>
									<input type="submit" value="Submit" />
									<div class="clearfix"> </div>
								</div>
						</form>
					</div>
					<div class="col-md-4 contact-form-row ccomments">
						<div>
							<span>Enter text</span>
							<textarea value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"></textarea>
						</div>
						<div>
							<span>Security</span>
							<img src="images/security.jpg" class="code" alt="" />
							<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
			<?php include('footer.php');?>