<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="Desserts-receta.css">
   
    <title>Food To Your Heart</title>
</head>
<body>
    <header>

          <div class="headeer">
            <h1>DESSERTS</h1>
            <p>Food To Your Heart</p>            
          </div>

    </header>
    
    <main>
      <div class="btopnav" id="bmyTopnav">
        <a href="index.php " class="bactive"> <i class="fa fa-home icons"></i>  Home</a>
        <a href="Food.html"><i class="fa fa-cutlery icons"> </i>  Food</a>
        <a href="Dessert.html"><i class="fa fa-birthday-cake icons"> </i>  Desserts</a>
      <a href="Drinks.html"><i class="fa fa-glass icons"> </i>  Drinks</a>
      <a href="#signin"> <i class="fa fa-birthday-cake icons"></i>  Log In</a>
        
      </div>
     
       <br>
       <br>
          

       <br>
       <h1 style="text-align: center;font-family: papyrus, arial, sans-serif;font-size:400%; color: rgb(235, 119, 173)">Popcorn Cake</h1>
       <p style="text-align:center;"><img src="FOTO/Desserts/4nb.jpg"  alt="popcorn cake" class="ImageSpin"></p>
       <br>
       <br>
        

       <p id="ingredients"><ins>Ingredients</ins></p>


            <form name="Ingredients" title="Ingredients"> 
                <input type="checkbox" id="i1" name="i1" value="apple">
                <label for="i1"> 1 cup butter</label><br>
                <input type="checkbox" id="i2" name="i2" value="soda">
                <label for="i2"> 32 marshmallows</label><br>
                <input type="checkbox" id="i3" name="i3" value="cinammon">
                <label for="i3"> 16 cups popped popcorn</label><br>
                <input type="checkbox" id="i4" name="i4" value="baking">
                <label for="i4"> 1 cup small gumdrops (no black ones)</label><br>
                <input type="checkbox" id="i5" name="i5" value="salt">
                <label for="i5"> 1 cup chocolate covered peanuts</label><br>
                <input type="checkbox" id="i6" name="i6" value="sugar">
                <label for="i6">1 cup candy-coated chocolate pieces</label><br>
            </form>

<hr>
<dl>
  <dt><ins>Instructions</ins></dt>
  <dd>
      <ol>
          <li>Melt butter and marshmallows in a large heavy pan over low heat. Stir often.</li>
          <li>Put popcorn into large container. Pour marshmallow mixture over top. Stir to mix well. Add peanuts and candy. Mix together.</li>
          <li>Pack mixture into greased 10 inch tube pan or 12 cup bundt pan. Let cake set until cool, and turn out onto plate to serve. Cut into wedges for all different size kids.</li>
       
         
      </ol>
  </dd>
</dl>
<?php
$str = "Popcorn cake";
echo $str . "<br>";
echo trim($str,"ake");
?> 


<hr>
    </main>

<footer class="footer">
       
  <div id="block_container">
  <div id="div1" >
    <ul class="nav">
      <li><a href="https://www.twitter.com/" class="fa fa-twitter" id="signin"></a></li>
      <li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
      <li><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a></li>  
      <li><a href="https://www.instagram.com/" target="_b;anck" class="fa fa-instagram"></a></li>
      <li><a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a></li> 
    </ul>
  </div>
 
  




  <div>
     
      
      <button onclick="document.getElementById('login-id01').style.display='block'" id="login1" style="width:auto;">Login</button>
      
      <div id="login-id01" class="login-modal">
        
        <form class="login-modal-content animate" action="/action_page.php" method="post">
          <div class="login-imgcontainer">
            <span onclick="document.getElementById('login-id01').style.display='none'" class="login-close" title="Close Modal">&times;</span>
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
        var regex = /^[a-zA-Z0-9.!#$%&???*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i; 
          
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
  </div>
</div>

<div>
<table>
<tr>
<th><a href="Food.html">FOOD</a></th>
  <th><a href="Dessert.html">DESSERT</a></th>
  <th><a href="Drinks.html">DRINKS</a></th>
</tr>
<tr>
  <td>Meat</td>
  <td>Baking</td>
  <td>Hot</td>
</tr>
<tr>
  <td>Vegetarian </td>
  <td>Nonbaking</td>
  <td>Cold</td>
</tr>
<tr>
  <td>Vegan</td>
  <td>Frozen</td>
  <td>Alcoholic</td>
</tr>
<tr>
  <td></td>
  <td>Pastries</td>
  <td>Non-Alcoholic</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>New Drinks</td>
</tr>
</table>

</div>
 
</footer>
</body>
</html>