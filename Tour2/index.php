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
	    margin-top:-70%;
		margin-left:-10%;
		color:lightblue;
	}
	</style>
</head>
<body>
<?php
require_once '../classes/dbconnect.class.php';
$db = new Database;
$connect = $db->connectDB();
//var_dump($_POST);
if (!empty($_POST['numq']) && !empty($_POST['section']) && ($_POST['n1']<11) && ($_POST['n2']<11) && ($_POST['n3']<11) && ($_POST['n4']<11)) {
$num=$_POST['numq'];
$sec=$_POST['section'];
$_SESSION['sec']=$_POST['section'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$nu=substr("$num",9);
if ($nu<3) {
	$mul=1;
}else {
	$mul=2;
}
$res=(((($n1+$n2+$n3+$n4)/4)*$mul)/8)*10;
$res=round($res,2);
//var_dump($res);
$co = $connect->query("SELECT tour2,nom FROM groupe WHERE section LIKE '%$sec%'");
$c=$co->fetch();
$res+=$c['tour2'];
$_SESSION['score']=$res;
$_SESSION['nom']=$c['nom'];
//var_dump($res);
if ($res<100) {
$connect->exec("UPDATE groupe SET tour2=$res WHERE section LIKE '%$sec%'");
}//var_dump($res);
}
else {
	echo "";
}
?>
<?php
//var_dump($_POST);
$seco='Math';
if (!empty($_POST['section'])) {
	$seco=$_POST['section'];
}
$result = $connect->query("SELECT tour2,nom,section FROM groupe WHERE section LIKE '%$seco%'");
$ca=$result->fetch();
//var_dump($ca);
?>
	<div class="contact1">
		<div class="container-contact1">
		<div id="logout">
<button class="contact1-form-btn">
		<a href="../">
		<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
	</button>
</div>
			<div class="contact1-pic js-tilt" data-tilt>
			<div class="widget-simple-chart text-right card-box">
			<h3 class="text-success"><?=$ca['nom']?></h3>
               <div class="circliful-chart" data-dimension="190" data-text="<?php echo ''.$ca['tour2'].'%'?>" data-width="10" data-fontsize="25" data-percent="<?=$ca['tour2']?>" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
               <h3 class="text-success counter m-t-10"><?=$ca['tour2']?></h3>
               <p class="text-muted text-nowrap m-b-10"> Score Tour 2 pour le section <?=$ca['section']?></p>
           </div>
			</div>

			<form class="contact1-form validate-form" action="" method="post">
				<span clasn  s="contact1-form-title">
					Note pour chaque jury
				</span>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<?php echo "<select class=\"input1\" name=\"numq\">";
				 for ($i=1; $i < 6; $i++) { 
					echo "<option value=\"Question $i\">Question $i";
				 } 
				 echo "</select>";?>
				<span class="shadow-input1"></span>
				</div>
				<?php
                 /* echo "<datalist id=\"browsers\">";
                  for ($i=1; $i < 8; $i++) { 
                     echo "<option value=\"Question $i\">";
                  } 
                  echo "</datalist>";*/
                ?>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<?php
				echo "<select class=\"input1\" name=\"section\">";
				$corr = $connect->query("SELECT *FROM groupe WHERE desi = '1'");
                while($data=$corr->fetch()) {
					$a=$data['section'];
					echo '<option value='.$data['section'].'>'.$a;
				}
				echo "</select>";
				?>						
				<span class="shadow-input1"></span>
				</div>
				<?php
				/*echo "<datalist id=\"brow\">";
				$corr = $connect->query("SELECT *FROM groupe WHERE desi = '1'");
                while($data=$corr->fetch()) {
					echo '<option value='.$data['section'].'>';
				}
				echo "</datalist>";*/
				?>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input id="nn1" class="input1" type="float" name="n1" placeholder="Note jury 1" onchange="calmoy()">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="nn2" class="input1" type="float" name="n2" placeholder="Note jury 2" onchange="calmoy()">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input id="nn3" class="input1" type="float" name="n3" placeholder="Note jury 3" onchange="calmoy()">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input id="nn4" class="input1" type="float" name="n4" placeholder="Note jury 4" onchange="calmoy()">
					<span class="shadow-input1"></span>
				</div>
				<span class="">
					Moyenne
				</span>
				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input disabled id="result" class="input1" type="number" name="moy" placeholder="Moyenne">
					<span class="shadow-input1"></span>
				</div>
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Send
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
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

