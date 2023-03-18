
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple Store</title>
	<link href="css/template.css" rel="stylesheet" />
</head>

<body> 


	<div class="container">
	
	<?php 

include 'FirstSection.php';
include 'connection.php';
$query="select * from food";
$conn=mysqli_query($conn,$query);

$num=mysqli_num_rows($conn);
?>
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Our Store</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>
			
			

			<!-- Store -->
			<div class="row tm-gallery" style="padding-left:60px">
				<!-- Store page 1 -->
				
					<?php
				while($data=mysqli_fetch_assoc($conn)){ ?>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
						<td><?php echo '<img src="data:image;base64,'.base64_encode($data['image']).'"alt="Image"
					class="img-fluid tm-gallery-img">'?></td>	
							<figcaption>
								<h4 class="tm-gallery-title"><?php echo $data["title"]  ?></h4>
								<p class="tm-gallery-description"><?php echo $data["description"]  ?></p>
								<p class="tm-gallery-price"><?php echo '$'.$data["price"]  ?></p>
							</figcaption>
						</figure>
					</article>
					
					<?php } ?>
					
				</div> <!-- Store page 1 -->
		
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to for additional permissions about our templates. Thank you.</p>
							<a href="about.php" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
			
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2022 Our Store</p>
		</footer>
	</div>

</body>
</html>