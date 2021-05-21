<!DOCTYPE html>
<html>
<head>

<title>Drinks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="drinks-receta.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

    <header>
    
        <body>
            
        <div class="headeer">
          <h1>DRINKS</h1>
          <p>Food To Your Heart</p>
        </div>

  </header>
<main>



  <div class="btopnav" id="bmyTopnav">
    <a href="index.php " class="bactive">  <i class="fa fa-home" > </i>Home</a>
    <a href="Food.php">  <i class="fa fa-cutlery" > </i> Food</a>
    <a href="Dessert.php">  <i class="fa fa-birthday-cake" > </i>Dessert</a>
    <a href="Drinks.php">  <i class="fa fa-glass" > </i>Drinks</a>

    <div class="bdropdown">
      <button class="bdropbtn"> 
        <i class="bfa bfa-caret-down"></i>
      </button>
      <div class="bdropdown-content">
      </div>
    </div> 
    
    <a href="#login-id01"><i class="fa fa-sign-in" > </i>Log In   </a>
    <a href="javascript:void(0);" style="font-size:15px;" class="bicon" onclick="myFunction()">&#9776;</a>
  </div>
  <script>
  function myFunction() {
    var x = document.getElementById("bmyTopnav");
    if (x.className === "btopnav") {
      x.className += " bresponsive";
    } else {
      x.className = "btopnav";
    }
  }
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("bmyTopnav");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  </script>
  


<br>
<br>
<br>
  <h1 style="text-align: center ; color:white ; font-family:Papyrus,Arial, sans-serif; font-size: 400%;">Hot Buttered Rum Single Serving
</h1>
  <br>
  <br>
  <br>

  <div class="imagebox">
    <p style="text-align:center;">   <img src="Foto/Drinks/img3.webp"></p>
  </div>
  
<br>
    <p style="color:purple">Nothing sets the mood on a cold winter day better than a roaring fire and a hot buttered rum. This is a single-serving recipe. If done right, this drink tastes like melted caramel swirling over your tongue. That makes it too sweet to drink with a meal, but also one of the best dessert drinks ever made. Drink these in moderation.

    </p>    
        
<p id="ingredients"><ins>Ingredients</ins></p>

<form name="Ingredients" title="Ingredients"> 

    <input type="checkbox" id="i1" name="i1" value="butter">
    <label for="i1"> 1 teaspoon butter
    </label><br>
    <input type="checkbox" id="i2" name="i2" value="salt">
    <label for="i2"> 1 teaspoon brown sugar
    </label><br>
    <input type="checkbox" id="i3" name="i3" value="pepper">
    <label for="i3"> 1 pinch ground cinnamon (Optional)
    </label><br>
    <input type="checkbox" id="i4" name="i4" value="turkey">
    <label for="i4"> 1 pinch ground nutmeg (Optional)
    </label><br>
    <input type="checkbox" id="i4" name="i4" value="stock">
    <label for="i4">1 pinch ground allspice (Optional)
    </label><br>
    <input type="checkbox" id="i4" name="i4" value="stock">
    <label for="i4">1 dash vanilla extract
    </label><br>
    <input type="checkbox" id="i4" name="i4" value="stock">
    <label for="i4">2 ounces rum
    </label><br>
    <input type="checkbox" id="i4" name="i4" value="stock">
    <label for="i4">1 cup boiling water, or as needed
    </label><br>
    

</form>
<br>
<dl><dt><ins>Instructions</ins></dt>
                <dd>
                    <ol>
                        <li>Place butter, sugar, cinnamon, nutmeg, allspice, and vanilla extract in the bottom of an Irish coffee glass. Pour in rum and hot water. Stir.
                        </li>
                    </ol>
                </dd>
            </dl>
<hr>

</main>
  <br>
  <br>

  <!--Footer-->
          
        
  <footer class="footer">
       
      <div id="block_container">
      <div id="div1" >
        <ul class="nav">
           <li><a href="https://twitter.com" class="fa fa-twitter"></a></li>
          <li><a href="https://facebook.com" class="fa fa-facebook"></a></li>
          <li><a href="https://youtube.com" class="fa fa-youtube"></a></li>  
          <li><a href="https://instagram.com" class="fa fa-instagram"></a></li>
          <li><a href="https://pinterest.com" class="fa fa-pinterest"></a></li>  
        </ul>
      </div>
     
    
      <div>
         
          
          <button onclick="document.getElementById('login-id01').style.display='block'" style="width:auto;">Login</button>
          
          <div id="login-id01" class="login-modal">
            
            <form class="login-modal-content animate" action="/action_page.php" method="post">
              <div class="login-imgcontainer">
                <span onclick="document.getElementById('login-id01').style.display='none'" class="login-close" title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="login-avatar">
              </div>
          
              <div class="login-container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="login-container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('login-id01').style.display='none'" class="login-cancelbtn">Cancel</button>
                <span class="login-psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>
          
          <script>
          // Get the modal
          var modal = document.getElementById('login-id01');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
          </script>
      </div>
      <div>
          
          <button onclick="document.getElementById('signup-id01').style.display='block'" style="width:auto;">Sign Up</button>
          
          <div id="signup-id01" class="signup-modal">
            <span onclick="document.getElementById('signup-id01').style.display='none'" class="signup-close" title="Close Modal">&times;</span>
           <form class="signup-content" id="signupform" method="POST" action="" onsubmit="return validateSignUp();">
          <div class="signup-container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input id="femail" type="text" placeholder="Enter Email" name="email" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" id="fpassword" placeholder="Enter Password" name="psw" required>
      
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" id="fpassword2" placeholder="Repeat Password" name="psw-repeat" onChange="return matchpass();" required>
            
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
      
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
            <div class="clearfix">
              <button type="button" onclick="document.getElementById('signup-id01').style.display='none'" class="signup-cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
      <script>
        function validateSignUp()
      {  
        var email=document.forms["signupform"]["femail"].value;  
        var password=document.forms["signupform"]["fpassword"].value; 
        var regex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i; 
          
        if (email==null || email=="" || regex.test(email) == false)
        {  
          alert("Email must be filled out ");  
          return false;  
        }
        else if(password.length<6)
        {  
          alert("Password must be at least 6 characters long.");  
          return false;  
          }  
      } 
    
        function matchpass()
      {  
        var firstpassword=document.forms["signupform"]["fpassword"].value;  
        var secondpassword=document.forms["signupform"]["fpassword2"].value;  
          
        if(firstpassword==secondpassword){  
        return true;  
        }  
        else{  
        alert("Passwords must be the same!");  
        return false;  
        }  
      }  
      </script>
          <script>
          // Get the modal
          var modal = document.getElementById('signup-id01');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>
      </div>
    </div>
    
    <div>
    <table>
    <tr>
    <th><a href="Food.php">FOOD</a></th>
      <th><a href="Dessert.phpl">DESSERT</a></th>
      <th><a href="Drinks.php">DRINKS</a></th>
    </tr>
    <tr>
      <td>Peter</td>
      <td>Griffin</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>Lois</td>
      <td>Griffin</td>
      <td>$150</td>
    </tr>
    <tr>
      <td>Joe</td>
      <td>Swanson</td>
      <td>$300</td>
    </tr>
    <tr>
      <td>Cleveland</td>
      <td>Brown</td>
      <td>$250</td>
    </tr>
    </table>
    
    </div>
     
    <?php
    $hostname       =       "localhost";
    $username       =       "root";
    $password       =       "root";
    $dbname         =       "phpAjaxDemo";

    $conn           =        mysqli_connect($hostname, $username, $password, $dbname) 
                             or die("Database connection failed." .mysqli_connect_error());
?>
    </footer>
  
  </body>
  
  </html>
  