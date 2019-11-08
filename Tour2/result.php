<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tour 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="../../plugins/switchery/switchery.min.css" rel="stylesheet" />
	<link href="../../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
	<style>
	#logout{
		width:0%;
	    margin-top:-42%;
		margin-left:-14%;
		color:lightblue;
	}
	</style>
</head>
<body>
<?php
require_once '../classes/dbconnect.class.php';
$db = new Database;
$connect = $db->connectDB();
?>
<?php
$result = $connect->query("SELECT tour2,nom,section,dst2 FROM groupe WHERE desi = '1' ORDER BY tour2 DESC");
$re = $connect->query("SELECT tour2,nom,section FROM groupe WHERE desi = '1' ORDER BY tour2 ")->fetchAll();
$ab=$re[2]['tour2'];
$connect->exec("UPDATE groupe SET dst2=1 WHERE tour2 >= '$ab' AND desi = '1'");
$connect->exec("UPDATE groupe SET dst2=0 WHERE tour2 < '$ab' AND desi = '1'");
//var_dump($re);
?>

	<div class="contact1">
		<div class="container-contact1">
	
			<?php
		while ($ca=$result->fetch()) {
			if ($ca['dst2']==0) {
			echo "<div class=\"contact1-pic js-tilt\" data-tilt><div class=\"widget-simple-chart text-right card-box\">
			<h3 class=\"text-success\">".$ca['nom']."</h3>
               <div class=\"circliful-chart\" data-dimension=\"190\" data-text=".$ca['tour2']."% data-width=\"10\" data-fontsize=\"25\" data-percent=".$ca['tour2']." data-fgcolor=\"red\" data-bgcolor=\"#ebeff2\"></div>
               <h3 class=\"text-success counter m-t-10\">".$ca['tour2']."</h3>
               <p class=\"text-muted text-nowrap m-b-10\"> Score Tour 2 pour le section ".$ca['section']."</p>
		   </div></div>";
			}
		else {
			echo "<div class=\"contact1-pic js-tilt\" data-tilt><div class=\"widget-simple-chart text-right card-box\">
			<h3 class=\"text-success\">".$ca['nom']."</h3>
               <div class=\"circliful-chart\" data-dimension=\"190\" data-text=".$ca['tour2']."% data-width=\"10\" data-fontsize=\"25\" data-percent=".$ca['tour2']." data-fgcolor=\"#5fbeaa\" data-bgcolor=\"#ebeff2\"></div>
               <h3 class=\"text-success counter m-t-10\">".$ca['tour2']."</h3>
               <p class=\"text-muted text-nowrap m-b-10\"> Score Tour 2 pour le section ".$ca['section']."</p>
		   </div></div>";			
		}

			}
		   ?>
			
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
function calmoy(){
	n1=Number(document.getElementById('nn1').value);
	n2=Number(document.getElementById('nn2').value);
	n3=Number(document.getElementById('nn3').value);
	n4=Number(document.getElementById('nn4').value);
	result=(n1+n2+n3+n4)/4;
	document.getElementById('result').value=result;	
}
</script>
    <script src="../../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../../plugins/counterup/jquery.counterup.min.js"></script>
    <script src="../../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
    <script src="../../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
             };

</script>
</body>
</html>

