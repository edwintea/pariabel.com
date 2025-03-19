<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Pariabel | IT Consultant</title>
<meta name="description" content="We are IT consultant. Our focus is to provide technology solutions for your needs.
With us everything is easier." />
<meta name="keywords" content="Pariabeldotcom, Pariabel, IT Solution, Digital Studio, Web Development, Mobile App, Custom Software, Internet Of Things" />

<?php include"css.php"; ?>

</head>
<body>

<?php include"header-member.php"; ?>

<section>
	<div class="container">
		<div class="box-member-area">
			<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Your account change was successful
			</div>
			<div class="left-member-area">

				<?php include"menu-member.php"; ?>

			</div>
			<div class="right-member-area">
				<div class="u-box-link">
					<a href="my-account.php">
						Profile
					</a>
					<a href="account.php" class="u-active-link">
						Account
					</a>
				</div>

				<div class="u-box-field">
					<div class="u-left-field">
						Email <span>:</span>
					</div>
					<div class="u-right-field">
						contact.andriana@gmail.com 
					</div>
				</div>
				<div class="u-box-field">
					<div class="u-left-field">
						Password <span>:</span>
					</div>
					<div class="u-right-field">
						********** 
					</div>
				</div>
				<button class="btn-blue actEditAccount">Edit</button>
					
			</div>
			<div class="clearer"></div>
		</div>
	</div>
</section>

<!-- Contact Us -->
<section class="cd-section bg-img" style="background-image: url('./assets/images/img-contact-us.png');" id="section4" data-width="1024" data-height="768">
	<div class="overlay-img-black-alt"></div>
	<div class="container">
		<div class="box-contact">
			<div class="box-table">
				<div class="display-table">
					<div class="display-table-cell">

						<div class="box-connect">
							<h3>Contact Us</h3>
							<div class="left-connect">
								<img src="./assets/images/img-logo.png">
							</div>
							<div class="right-connect">
								<div class="title-connect">
									OFFICE
								</div>
								<div class="desc-connect">
									Puri Nirwana 1 <br />
									Jl. Kalasan Blok Y No. 10 Pabuaran <br />
									Cibinong - Bogor <br />
									Indonesia 
								</div>
								<div class="info-connect">
									<div class="list-info-connect">
										T : 
										<span>
											0858 - 9581 - 0666 
										</span>
									</div>
									<div class="list-info-connect">
										E : 
										<span>
											contact@pariabel.com 
										</span>
									</div>
									<div class="clearer"></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include"footer.php"; ?>

<?php include"modal.php"; ?>

<?php include"js.php"; ?>


</body>
</html> 