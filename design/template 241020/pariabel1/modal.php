<div id="viewModalDemo" class="modal fade" role="dialog">
	<div class="box-table">
		<div class="display-table">
			<div class="modal-overlay" data-dismiss="modal"></div>
			<div class="display-table-cell">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="box-modal">


							<div class="box-close-alt" data-dismiss="modal">
								<i class="fas fa-times"></i>
							</div>

							<img src="./assets/images/logo-icon-blue.png">


							<div class="vLogin">
								<h3>
									Login <br /> Pariabel Product
								</h3>
								<form method="POST" action="products-member.php">
									<div class="box-field">
										<input type="text" name="" class="text-field" placeholder="Email">
										<i class="fas fa-envelope icon-field"></i>
									</div>
									<div class="box-field">
										<input type="text" name="" class="text-field" placeholder="Password">
										<i class="fas fa-lock icon-field"></i>
									</div>
									<button class="btn-blue-alt">
										Login
									</button>
								</form>
								<div class="account">
									Don't have an account ? <span class="actRegister">Register</span>
								</div>
								<div class="account-alt">
									<span class="actPass">Forgot Password ?</span>
								</div>
							</div>

							<div class="vRegister display-none">
								<h3>
									Create Account
								</h3>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="Name">
									<i class="fas fa-user icon-field"></i>
								</div>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="No. Telp">
									<i class="fas fa-phone icon-field"></i>
								</div>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="Email">
									<i class="fas fa-envelope icon-field"></i>
								</div>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="Password">
									<i class="fas fa-lock icon-field"></i>
								</div>
								<button class="btn-blue-alt actConfirmRegister">
									Register
								</button>
								<div class="account">
									Already have an account ? <span class="actLogin">Login</span>
								</div>
								<div class="account-alt">
									<span class="actPass">Forgot Password ?</span>
								</div>
							</div>

							<div class="vConfirmRegister display-none">
								<h3>
									Confirm Account
								</h3>
								
								<div class="desc-modal">
									<p>Thank You </p>
									You have created a product pariabel account. Please check your email to verify your account
								</div>

								<div class="account">
									Already have an account ? <span class="actLogin">Login</span>
								</div>
								
							</div>

							<div class="vPass display-none">
								<h3>
									Forget Password
								</h3>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="Email">
									<i class="fas fa-envelope icon-field"></i>
								</div>
								<button class="btn-blue-alt actConfirmPass">
									Process
								</button>
								<div class="account">
									Already have an account ? <span class="actLogin">Login</span>
								</div>
								<div class="account-alt">
									<span class="actRegister">Register</span>
								</div>
							</div>

							<div class="vConfirmPass display-none">
								<h3>
									Confirm Password
								</h3>
								
								<div class="desc-modal">
									Please check your email. We have sent you a new password.
								</div>

								<div class="account">
									Already have an account ? <span class="actLogin">Login</span>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>



<div id="viewModalShare" class="modal fade" role="dialog">
	<div class="box-table">
		<div class="display-table">
			<div class="modal-overlay" data-dismiss="modal"></div>
			<div class="display-table-cell">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="box-modal">


							<div class="box-close-alt" data-dismiss="modal">
								<i class="fas fa-times"></i>
							</div>

							<p>Hallo</p>
							<p>
								Let's share this page with your friends or business partners right now.
							</p>

							<div class="box-button-share">
								<button class="button-share">
									<i class="fab fa-facebook-f"></i>
								</button>
								<button class="button-share">
									<i class="fab fa-twitter"></i>
								</button>
								<button class="button-share">
									<i class="fas fa-envelope"></i>
								</button>
								<button class="button-share">
									<i class="fab fa-whatsapp"></i>
								</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

<div id="viewModalLogout" class="modal fade" role="dialog">
	<div class="box-table">
		<div class="display-table">
			<div class="modal-overlay" data-dismiss="modal"></div>
			<div class="display-table-cell">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="box-modal">

							<div class="box-close-alt" data-dismiss="modal">
								<i class="fas fa-times"></i>
							</div>

							<div class="icon-modal">
								<i class="fas fa-question-circle"></i>
							</div>

							<p>
								Halo <b>Andriana Putra</b>. Are you sure you want to exit this page?
							</p>

							<div class="text-center">
								<button class="btn-silver" data-dismiss="modal">
									Cancel
								</button>
								&nbsp;
								<a href="products.php">
									<button class="btn-blue">
										Logout
									</button>
								</a>
							</div>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

<div id="viewModalEditProfile" class="modal fade" role="dialog">
	<div class="box-table">
		<div class="display-table">
			<div class="modal-overlay" data-dismiss="modal"></div>
			<div class="display-table-cell">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="box-modal">

							<div class="box-close-alt" data-dismiss="modal">
								<i class="fas fa-times"></i>
							</div>

							<div class="icon-modal">
								<i class="fas fa-user"></i>
							</div>

							<h3>
								Change Profile
							</h3>

							<form method="POST" action="my-account.php">
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="Name">
									<i class="fas fa-user icon-field"></i>
								</div>
								<div class="box-field">
									<input type="text" name="" class="text-field" placeholder="No. Telp">
									<i class="fas fa-phone icon-field"></i>
								</div>
								<div class="upload-document">
									<label class="button-upload">
									 	Upload Foto
									 	 <input type="file" class="text-file-alt">
									 </label>
									 <input type="text" class="text-field text-file"  disabled="disabled">
								</div>

								<div class="text-center">
									<button class="btn-silver" data-dismiss="modal">
										Cancel
									</button>
									&nbsp;
									<button class="btn-blue">
										Submit
									</button>
								</div>
							</form>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

<div id="viewModalEditAccount" class="modal fade" role="dialog">
	<div class="box-table">
		<div class="display-table">
			<div class="modal-overlay" data-dismiss="modal"></div>
			<div class="display-table-cell">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="box-modal">

							<div class="box-close-alt" data-dismiss="modal">
								<i class="fas fa-times"></i>
							</div>

							<div class="icon-modal">
								<i class="fas fa-user"></i>
							</div>

							<h3>
								Change Account
							</h3>

							<form method="POST" action="account.php">
								
								<div class="title-field">Email</div>
								<div class="box-field">
									<input type="text" name="" class="text-field">
									<i class="fas fa-envelope icon-field"></i>
								</div>

								<div class="title-field">Password</div>
								<div class="box-field">
									<input type="text" name="" class="text-field">
									<i class="fas fa-lock icon-field"></i>
								</div>

								<div class="text-center">
									<button class="btn-silver" data-dismiss="modal">
										Cancel
									</button>
									&nbsp;
									<button class="btn-blue">
										Submit
									</button>
								</div>
							</form>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>