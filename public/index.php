<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>The Midnight Watch</title>
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<div id="bodywrap">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?p=woundomatic">Wound-o-Matic</a></li>
					<li><a href="index.php?p=buildcost">Building Costs</a></li>
				</ul>
			</nav>

			<section id="content">
				<?php checkPageInclude(); ?>
			</section>
		</div>
	</body>
</html>
<?php
function checkPageInclude( $page )
{
	if( isset( $_GET['p'] ) )
	{
		includePage();
	}
	else
	{
		include "../app/home.php";
	}
}

function includePage( $page )
{
	if( isset( $_GET['p'] ) )
	{
		switch ( $_GET['p']) {
			case 'woundomatic':
				include "../app/woundomatic/woundomatic.php";
				break;
			default:
				# code...
				break;
		}
	}
}
?>