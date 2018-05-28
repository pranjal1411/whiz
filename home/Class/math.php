<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if (isset($_SESSION['u_id'])) {
  // Makes it easier to read
  $first_n = $_SESSION['u_first'];
  $last_n = $_SESSION['u_last'];
  $Email = $_SESSION['u_email'];
  $isschool = $_SESSION['is_school'];
}
else {

    $_SESSION['message'] = "You must log in before viewing your profile page!";
		header("location: index.php?error=You must log in before viewing your profile page!");
}

$class = 1 ;$sub = "math" ;
if(isset($_GET["cls"])){
  $class = $_GET["cls"] ;
}
if(isset($_GET["sub"])){
  $sub = $_GET["sub"] ;
}

$dir    = 'cl/'.$class.'/'.$sub;
$file  = array() ;
if(scandir($dir)!=FALSE){ $file = scandir($dir,1)  ; }


$count = count($file) ;
$count = $count - 2 ;

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>N E E V</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/Login_v2/assets/css/main.css" />
    <style>
      tr{
        font-size: 1.5em;
      }
    </style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="/Login_v2/home.php" class="logo"><strong><font size="10">N E E V</font></strong> </a>
					<nav id="nav">
						<a href="/Login_v2/logout.php">	<button type="submit" name="login">
									Logout
							</button></a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
					<marquee>	<h1>Topics</h1></marquee>

					</header>

            <input type="radio" onclick="check()" id="vid" value="vid" name="choice" checked>
            <label for="vid">VIDEO</label>
            <input type="radio" onclick="check()" id="ws" value="ws" name="choice">
            <label for="ws">WORKSHEET</label>
          <br><br>
          <div class="table-wrapper">
          										<table>

          										</table>
          									</div>



			</section>


		<!-- Scripts <a href="#" class="button"></a> -->
			<script src="/Login_v2/assets/js/jquery.min.js"></script>
			<script src="/Login_v2/assets/js/skel.min.js"></script>
			<script src="/Login_v2/assets/js/util.js"></script>
			<script src="/Login_v2/assets/js/main.js"></script>
      <script src="../navigate.js"></script>
    <!--  <script>
      var cnt=1;
      var topics=new array();
      topics[0]=
      var dir=
        $(document).ready(function(){

          //  var div1=$("<div></div>").html('<span class="icon fa-sort-numeric-asc"></span><h3><a id="sub1" href="#home/class/math.php">NUMBERS</a></h3>');
            //$(".inner").append(div1);
            var tb="";
            for(var i=0;i<cnt;i++){
            }
            $("table").append();
        });
      </script>
-->
<script>
var choice="video";
function check(){
  var isChecked=$('#vid').prop('checked');
  if(isChecked===true)
    choice="video";
  else
    choice="worksheet";
}

var cnt="<?php echo $count ?>"
var topics =<?php echo json_encode($file);?>;
var dir = "<?php echo $dir ?>"
  $(document).ready(function(){

    //  var div1=$("<div></div>").html('<span class="icon fa-sort-numeric-asc"></span><h3><a id="sub1" href="#home/class/math.php">NUMBERS</a></h3>');
      //$(".inner").append(div1);
      var tb="";
      for(var i=0;i<cnt;i++){

          tb+="<tr><td><a href='"+dir+"/"+topics[i]+"/"+choice+"'>"+topics[i]+"</a></td></tr>";
      }

      $("table").append(tb);
  });

</script>
	</body>
</html>
