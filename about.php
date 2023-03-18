<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Store - About Page</title>

	<link href="css/template.css" rel="stylesheet" />
</head>

<body> 

	<div class="container" >
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<?php 
include 'connection.php';
include 'FirstSection.php';
$query="select * from memebrs";
$conn=mysqli_query($conn,$query);
$num=mysqli_num_rows($conn);

?>

		<main>
			<header class="row tm-welcome-section"style="padding-left:60px">
				<h2 class="col-12 text-center tm-section-title">About Our Store</h2>
				<p class="col-12 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, 
					eum sequi? Debitis dolor quas aperiam corrupti iusto in perspiciatis inventore, 
					veniam quos ipsa eligendi nesciunt esse. Exercitationem itaque dolores labore.</p>
			</header>

			<div class="tm-container-inner tm-persons" >
				<div class="row">
				<?php
				while($data=mysqli_fetch_assoc($conn)){ ?>
					<article class="col-lg-6">
						<figure class="tm-person">
						<td><?php echo '<img src="data:image;base64,'.base64_encode($data['image']).'"alt="Image"
					class="img-fluid tm-person-img">'?></td>	
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name"><?php echo $data["name"]  ?></h4>
								<p class="tm-person-title"><?php echo $data["title"]  ?></p>
								<p class="tm-person-about"><?php echo $data["about"]  ?></p>
								
							</figcaption>
						</figure>
					</article>
					<?php } ?>
					
				</div>
			</div>
			<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" ></div>		
						</div>
					</div>
				</div>
			</div>
			<?php 

$conn=mysqli_connect($servername,$username,$password,$dbname);
$query="select * from food order by rand() limit 1";
$conn=mysqli_query($conn,$query);
$num=mysqli_num_rows($conn);

?>
			<div class="tm-container-inner tm-history">
			<?php
				while($data=mysqli_fetch_assoc($conn)){ ?>
				<div class="row">
					<div class="col-12">
					<td><?php echo '<img src="data:image;base64,'.base64_encode($data['image']).'"alt="Image"
					class="img-fluid tm-history-img" >'?></td>	
							<div class="tm-history-text"> 
								<h4 class="tm-history-title"><?php echo $data["title"]  ?></h4>
								<p class="tm-mb-p"><?php echo $data["description"]  ?></p>
							</div>
							<?php } ?>
						</div>	
					</div>
				</div>
				<div class="tm-history-inner">
						
						<footer class="tm-footer text-center">
							<p>Copyright &copy; 2022 Our Store</p>
						</footer>
					</div>
			</div>
			
		</main>
	

</body>
</html>