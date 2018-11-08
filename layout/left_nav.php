<!DOCTYPE html>
<html>
<head>
  <title>Smart City</title>

  <!-- bootstrap linking -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- css style -->
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
<style>
	.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 1px;}
  .sidenav a {font-size: 18px;}
}


.knockout {
  background: url(http://www.publicdomainpictures.net/pictures/180000/velka/green-grass-1464621149kmj.jpg) ;
  color: red;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  font-weight: bold;
  font-size: 20px;
  font-family: 'Luckiest Guy', cursive;
  /*width: 600px;*/
  margin: auto;
  text-align: center;
}

body{
  background: #bbc9c0;
}
</style>

<body>


<div class="row">

  <div class="col-sm-5">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Feeds</a>
    <a href="traffic.php">Traffic</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>

<span class="knockout" style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; Smart City</span>
</div>

<div class="col-sm-11">
	<!-- <div class="knockout"><a href="http://127.0.0.1/Smart%20City-1.0.0v" rel="Like cool shit? visit my site">Smart City</a></div>
  </div> -->
</div>
<div class="row">

</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</head>