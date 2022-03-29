
<!DOCTYPE html>
<html>
<title>Reservation</title>

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
</ul>
</div>




<div class="w3-container w3-padding-64">
  <div class="w3-padding-bottom w3-modal-content w3-center">
  <h1 class="w3-padding-bottom w3-badge w3-center ">For Reservations</h1>
 </div>
 <br>
<form class="w3-container w3-card-4">

  <div class="w3-row-padding">
   
    <h2>Full Name :</h2>
  <div class="w3-half">
    <input class="w3-input w3-border" type="text" placeholder="First Name">
  </div>
  <div class="w3-half">
    <input class="w3-input w3-border" type="text" placeholder="Last Name">
  </div>

    <div class="w3-half">
      <h2>E-mail :</h2>
    </div>
    <div class="w3-half">
      <h2>Phone Nember :</h2>
    </div>
  <div class="w3-half">
    <input class="w3-input w3-border" type="text" placeholder="ex:myname@example.com"  class="w3-half">
</div>
  <div class="w3-half">
    <input class="w3-input w3-border" type="text" placeholder="Phone Nember" class="w3-half">
</div>


         <div class="w3-half">
            <h2>Reservation Date :</h2>
         </div>
         <div class="w3-half">
            <h2>Reservation Time :</h2>
         </div>

        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday" class="w3-half">
        </form>
        <form action="/action_page.php">
              <input type="time" id="appt" name="appt" class="w3-half">
         </form>
<br>
         
             <div class="w3-half">
               <h2>How many person will you be with ? </h2>
            </div>

             <div class="w3-half">
               <h2>Notes (optional) :</h2>
            </div>
      

        <div class="w3-half">
          <input class="w3-input w3-border" type="text" placeholder="ex:3" >
        </div>
        
         <div class=" w3-half" >      
        <textarea class="w3-input w3-border " placeholder="ex: We want to get welcomed with a glass of champaign" style="width:100%;"></textarea>
      </div> 

            <div class="w3-half">
               <h2>Table Number :</h2>
            </div>

             <div class="w3-half">
               <h2>Available :</h2>
            </div>

 <div class="custom-select w3-half" style="width:200px;">
  <select>
    <option value="0">Select Table:</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>

</div>
<div></div>
<br>

</form>
<input type="submit" class="w3-btn w3-btn-block w3-green w3-section" name="reservation" value="Reservation"">

</div>

</form>
</div>







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