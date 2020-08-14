<?php
require __DIR__ . '/vendor/autoload.php';
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sample App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


	<div class="container" style="margin-top: 50px">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Surname</th>
		      <th scope="col">Mobile</th>
		      <th scope="col">Address</th>
		      <th scope="col">Text</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php for ($i=1; $i < 21 ; $i++): ?>
			    <tr>
			      <th scope="row"><?php echo $i; ?></th>
			      <td><?php echo $faker->name ?></td>
			      <td><?php echo $faker->lastname ?></td>
			      <td><?php echo $faker->e164PhoneNumber ?></td>
			      <td><?php echo $faker->address ?></td>
			      <td><?php echo $faker->text ?></td>
			    </tr>
		  	<?php endfor; ?>
		  </tbody>
		</table>
	</div>	

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>