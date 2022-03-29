
<!DOCTYPE html>
<html>
<title>Home</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>

@media only screen and (max-width: 601px) {.w3-top {position:static;}}

</style>
<body id="myPage">



<div class="w3-top">

<ul class="w3-navbar w3-card-2 w3-black w3-large">
  <li><a href="home.php"  title="Go To home" class="w3-teal" ><i class="fa fa-home w3-large"><img  src="logo/logo.png"  style="min-height:35px;max-height:45px;"></i>HOME</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a href="reservation.php">Reservation</a></li>
  <li><a href="login.php">Admin login</a></li>
</ul>
</div>

<div class="w3-image w3-animate-opacity">
  <img class="testimg" src="res.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
   
  
      </div>
  

    




<div class="w3-container w3-padding-64 w3-center">
  <div class="w3-padding-bottom w3-modal-content w3-center">
  <h1 class="w3-padding-bottom w3-badge w3-center ">OUR TEAM</h1>
 </div>
	
<p>Meet the staff:</p>
				
<div class="w3-row test"><br>


<div class="w3-quarter">
  <img src="staff/chef.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmed El-Bradai</h3>
  <p>Chef</p>
</div>

<div class="w3-quarter">
  <img src="staff/chef1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aliaa Abdo</h3>
  <p>Chef</p>
</div>

<div class="w3-quarter">
  <img src="staff/chef.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmed El-Bradai</h3>
  <p>Chef</p>
</div>

<div class="w3-quarter">
  <img src="staff/chef1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aliaa Abdo</h3>
  <p>Chef</p>
</div>

<div class="w3-quarter">
  <img src="staff/gerson1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Maysa Badr</h3>
  <p>Waiter</p>
</div>

	
<div class="w3-quarter">
  <img src="staff/gerson.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mostafa Emad</h3>
  <p>Waiter</p>
</div>

<div class="w3-quarter">
  <img src="staff/gerson1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Maysa Badr</h3>
  <p>Waiter</p>
</div>

<div class="w3-quarter">
  <img src="staff/gerson.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mostafa Emad</h3>
  <p>Waiter</p>
</div>


</div>
</div>


<div class="w3-row-padding w3-padding-64 w3-theme-l1">

<div class="w3-quarter">
<h2>Information about us :</h2>
<p>We are a Greek restaurant with more than 35 years of experience, one of our most important goals is to make the customer happy, and that we have the best chefs in Greece and the waiters at the highest level of service</p>
<h2>These are some of our best dishes :</h2>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="food/food.jpg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>Taramasalata</h3>
  <h4>20 €</h4>

  <p>A mainstay of any Greek meal are classic dips such<div></div> as tzatziki (yogurt, cucumber and garlic), melitzanosalata (aubergine), and fava (creamy split pea purée). But the delectable taramasalata (fish roe dip) is a must. This creamy blend of pink or white fish roe, with either a potato or bread base, is best with a drizzle of virgin olive.</p>
  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="food/food1.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Moussaka</h3>
  <h4>30 €</h4>
  <p>Variations on moussaka are found throughout the Mediterranean <div></div> and the Balkans, but the iconic Greek oven-bake is based on layers of sautéed aubergine, minced lamb, fried puréed tomato, onion, garlic   and spices like cinnamon and allspice, a bit of potato, then a final fluffy topping of béchamel sauce   and cheese.</p>

  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="food/food2.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>Courgette balls</h3>
  <h4>10 €</h4>
  <p>Sometimes a patty, sometimes a lightly fried ball, <div> </div>be sure to try these starters any chance you get.<div></div> The fritter is usually made from grated or puréed courgette blended with dill,<div></div> mint, or other top-secret spice combinations. Paired with tzatziki, for its cooling freshness, you just can’t lose.</p>
 
  </div>
  </div>
</div>

</div>






<div></div>

<!-- Google Maps -->
<div class="w3-padding-bottom w3-modal-content w3-center">
  <h1 class="w3-padding-bottom w3-badge w3-center ">Our Location</h1>
 </div>

<div id="googleMap" style="width:100%;height:420px;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:5,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<footer class="w3-container w3-padding-32 w3-theme w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"><img  src="logo/facebook.png"  style="min-height:40px;max-height:40px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"><img  src="logo/twitter.png"  style="min-height:33px;max-height:33px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"><img  src="logo/google.png"  style="min-height:33px;max-height:33px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Linkedin" ><i  class="fa fa-linkedin"><img  src="logo/linked.png"  style="min-height:33px;max-height:33px;"></i></a>
  <p>&#169; Copyright</p>			

  <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>				
</footer>


<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.width = "300px";
    document.getElementsByClassName("w3-sidenav")[0].style.textAlign = "center";
    document.getElementsByClassName("w3-sidenav")[0].style.fontSize = "40px";
    document.getElementsByClassName("w3-sidenav")[0].style.paddingTop = "10%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}

function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>

</body>
</html>