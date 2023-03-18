<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple Store - Contact Page</title>
	<link href="template.css" rel="stylesheet" />
</head>

<body> 

	<div class="container">
	
		<?php 

include 'FirstSection.php';
include 'connection.php';
$query="select * from question";

$conn=mysqli_query($conn,$query);
$num=mysqli_num_rows($conn);
?>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Page</h2>
				<p class="col-12 text-center">This is <b>Simple Contact </b>From to send email to our store inbox</p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">
					          <input type="text" name="name" class="form-control" placeholder="Name" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Send
					          </button>
					        </div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							<address>
								Al-Nasser street-Gaza Palestine
							</address>
							<a href="tel:9705900000" class="tm-contact-link">
								<td>+9705900000</td>
							</a><br>
							<a href="mailto:info@company.co" class="tm-contact-link">
							<td>info@ourstor.com</td>
							</a>
							
						</div>
					</div>
				</div>
			</div>
            
	
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
				
					<!-- FAQ -->
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">FAQs</h2>
						<p class="text-center">This section comes with Accordion tabs for different questions and answers about Simple House HTML CSS template. Thank you. #666</p>
						<div class="tm-accordion">
						<?php
				         while($data=mysqli_fetch_assoc($conn)){ ?>
							<button class="accordion"><?php echo $data["question"]  ?>
							<input type="checkbox" class="check"  >
							</button>
							
							<?php } ?>
							
						</div>	
						
					</div>
				</div>
			</div>
			
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2022 Our Store
            
            </p>
		</footer>
	</div>
	
	
</body>
</html>