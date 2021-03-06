<!DOCTYPE html>
<html>
<head>

<title>Drinks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Drinks.css">
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
    <div class="bdropdown">
      <button class="bdropbtn">  <i class="fa fa-glass" > </i> Drinks
        <i class="bfa bfa-caret-down"></i>
      </button>
      <div class="bdropdown-content">
        <a href="#hot">Hot</a>
        <a href="#cold">Cold</a>
        <a href="#al">Alcoholic</a>
        <a href="#nonal">Non-Alcoholic</a>
       <a href="#new">New Drinks</a>
      </div>
    </div> 
    
    <a href="#signin"><i class="fa fa-sign-in" > </i>Log In   </a>
    <a href="yourRecipe2.php"> <i class="fa fa-caret-right icons" aria-hidden="true"></i></i> Your Recipe  </a>

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
  
<div class="cont">


  <div class="container">


    <h1 class="cold" id="hot">Hot Drinks </h1>
    <br>
<div class="box1">
    <div class="imagebox">
        <img src="Foto/Drinks/img1.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Hot Apple Cider </h2>    
    <p>
Step 1
Pour the apple cider and maple 
syrup into a large stainless steel saucepan.<br>
Step 2
Place the cinnamon sticks, cloves, 
allspice berries, orange peel and lemon 
peel in the center of a washed square of 
cheesecloth; fold up the sides of the cheesecloth
 to enclose the bundle, then tie it up with a length
  of kitchen string. Drop the spice bundle into the cider mixture.<br>
Step 3...  <a href="drinks1.php" style="color:purple" >Read more</a>
</p>
</div>
    </div>
</div>
<div class="box1">
    <div class="imagebox">
        <img src="Foto/Drinks/img2.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Cioccolata Calda </h2>    
    <p>
        Step 1
        Mix the cocoa powder and sugar together in a small saucepan.
         Stir the 1 1/2 cups milk into the saucepan until the sugar has dissolved.
          Place over low heat; slowly bring the mixture to a low simmer.<br>
        Step 2
        Whisk 2 tablespoons of milk together with the cornstarch in a small cup;
         slowly whisk the cornstarch slurry into the cocoa mixture. Continue cooking,
          whisking continually...   <a href="drinks2.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>

<div class="box1">
    <div class="imagebox">
        <img src="Foto/Drinks/img3.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Hot Buttered Rum Single Serving </h2>    
    <p>
        Step 1
        Place butter, sugar, cinnamon, nutmeg, allspice, 
        and vanilla extract in the bottom of an Irish coffee glass.
         Pour in rum and hot water. Stir...   <a href="drinks3.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>

<div class="box1">
    <div class="imagebox">
        <img src="Foto/Drinks/img16.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Hot Spiced Christmas Wine </h2>    
    <p>
        Step 1
Use a sharp knife or a vegetable peeler to remove
 the zest from the oranges in strips, being careful
  to remove only the orange part, leaving the pith behind.
   Then, juice the oranges into a large, heavy-bottomed pot.

Step 2...  <a href="drinks4.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<hr>

<h1 class="cold" id="cold">Cold Drinks </h1>

<div class="box2">
    <div class="imagebox">
        <img src="Foto/Drinks/img4.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Champagne Punch III </h2>    
    <p>
        Step 1
        In large punch bowl, combine the cranberry juice concentrate,
         pink lemonade concentrate, limeade concentrate, white wine, club 
         soda and ...   <a href="drinks5.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>

<div class="box2">
    <div class="imagebox">
        <img src="Foto/Drinks/img5.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Vanilla Winter White Russian </h2>    
    <p>
        Step 1
        In a small pitcher, stir together the vanilla flavored vodka,
         coffee liqueur, Irish cream, and milk. Place one scoop of vanilla
          ice cream into ...   <a href="drinks6.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>
<div class="box2">
    <div class="imagebox">
        <img src="Foto/Drinks/img6.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Sweet Lime Iced Tea </h2>    
    <p>
        Step 1
Pour the water into a gallon sized jar over the tea bags.
 Allow to steep for 45 minutes. Remove and discard the tea bags.
 Stir in the sugar and lime juice until ...  <a href="drinks7.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>



<div class="box2">
    <div class="imagebox">
        <img src="Foto/Drinks/img17.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Creamy Green Drink </h2>    
    <p>
        Step 1
Blend water, spinach, parsley, avocado,
 lemon juice, and safflower oil together
  in a blender until smooth...  <a href="drinks8.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>

<hr>

<h1 class="cold" id="al">Alcoholic Drinks </h1>




<div class="box3">
    <div class="imagebox">
        <img src="Foto/Drinks/img7.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Grandma's Apple Pie 'Ala Mode' Moonshine </h2>    
    <p>
        Step 1
        Bring the apple cider, apple juice, cinnamon sticks, whole clove,
         white sugar, and brown sugar to a boil in a large pot; reduce heat to 
         medium ...  <a href="drinks9.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<div class="box3">
    <div class="imagebox">
        <img src="Foto/Drinks/img8.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Brain Hemorrhage </h2>    
    <p>
        Step 1
        Pour schnapps into a shot glass.
        <br>
        Step 2
        Very gently pour Irish cream liqueur over the schnapps.
         Wait until the Irish cream liqueur begins to clump and ...  <a href="drinks10.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<div class="box3">
    <div class="imagebox">
        <img src="Foto/Drinks/img9.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Classic Spanish Sangria </h2>    
    <p>
        Step 1
Have the fruit, rum, wine, and orange juice well chilled.
 Slice the lemon, lime and orange into thin rounds and place
  in a large glass pitcher. Pour in the rum and sugar.
   Chill in refrigerator for 2 ...   <a href="drinks11.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>



<div class="box3">
    <div class="imagebox">
        <img src="Foto/Drinks/img18.jpg">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Boston Sour </h2>    
    <p>
       Step 1 Mix whiskey, lemon juice, maple syrup and egg white in
        a cocktail shaker. Shake for 15 seconds. (We like using maple
         syrup to sweeten cocktails instead of simple syrup: it gives them 
         a nuanced sweetness! You can use either.)
Step 2 Add ice to the cocktail shaker and shake...  <a href="drinks12.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>


<hr>

<h1 class="cold" id="nonal">Non-Alcoholic Drinks </h1>


<div class="box4">
    <div class="imagebox">
        <img src="Foto/Drinks/img10.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Campfire S'Mores Frappuccino </h2>    
    <p>Step 1
        Blend ice, milk, marshmallow topping, 
        espresso, cocoa powder, and sugar together in
         a blender until ...  <a href="drinks13.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<div class="box4">
    <div class="imagebox">
        <img src="Foto/Drinks/img11.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Virgin Sunset </h2>    
    <p>
        Fill a glass with ice. Pour orange juice, pineapple juice,
         and cranberry juice over the ice and ...   <a href="drinks14.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>


<div class="box4">
    <div class="imagebox">
        <img src="Foto/Drinks/img12.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Thanksgiving Refreshment </h2>    
    <p>
        Step 1
Fill a tall glass with ice; add cranberry juice
 and top with sparkling water. Garnish drink with a lime wedge...   <a href="drinks15.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<div class="box4">
    <div class="imagebox">
        <img src="Foto/Drinks/img19.jpg">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Non-Alcoholic Champagne </h2>    
    <p>
        Step 1
        Chill club soda, ginger ale and grape juice overnight.
        
        Step 2
        In a large pitcher combine club soda...  <a href="drinks16.php" style="color:purple" >Read more</a> </p>
</div>
    </div>
</div>

<hr>

<h1 class="cold" id="new">New Drinks </h1>


<div class="box5">
    <div class="imagebox">
        <img src="Foto/Drinks/img13.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Swedish Christmas Glogg </h2>    
    <p>
        Step 1
Gently simmer the red wine, port wine, cinnamon sticks, 
whole cloves, and orange peel in a large pot set over medium-low heat.
 Stir in the sugar, rum, and brandy. Continue simmering 5 minutes more, 
 stirring to completely dissolve the sugar, and the mixture is steaming
  but ...  <a href="drinks17.php" style="color:purple" >Read more</a>
</p>
</div>
    </div>
</div>


<div class="box5">
    <div class="imagebox">
        <img src="Foto/Drinks/img14.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Grilled Lemon Limeade </h2>    
    <p>
        Step 1
        Preheat grill for medium heat and lightly oil the grate.
        
        Step 2...   <a href="drinks18.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>


<div class="box5">
    <div class="imagebox">
        <img src="Foto/Drinks/img15.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Rainbow Juice </h2>    
    <p>
        Step 1
Run beets, carrots, oranges, spinach, blueberries, 
and ginger through a juicer according to manufacturer's 
instructions...  <a href="drinks19.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>



<div class="box5">
    <div class="imagebox">
        <img src="Foto/Drinks/img20.webp">
    </div>
    <div class="details"> 
        <div class="content">

    <h2>Boba  </h2>    
    <p>
        Step 1
Bring water to a boil in a large stockpot.
 Pour in tapioca and simmer for 25 minutes.
  Stir occasionally to prevent sticking. 
  Remove from heat and let balls sit in water for 25 minutes.

Step 2
Return stockpot to the heat... <a href="drinks20.php" style="color:purple" >Read more</a></p>
</div>
    </div>
</div>

</div>
</div>
</main>
<br>



<!--Footer-->
        

<footer class="footer">
       
    <div id="block_container">
    <div id="div1" >
      <ul class="nav">
        <li><a href="https://twitter.com/" target="_blank" class="fa fa-twitter" id="signin"></a></li>
        <li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
        <li><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a></li>  
        <li><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a></li>
        <li><a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a></li> 
      </ul>
    </div>
   
    
    <?php
    file_put_contents('/home/recipes/files/tmp.txt', "Allrecipes+ is a great online recipes! \n Visit https://www.allrecipes.com/ to know more!");
    
    $file_handle = fopen('/home/recipes/files/tmp.txt', 'r');
    $contents = fread($file_handle, filesize('/home/recipes/files/tmp.txt'));
    fclose($file_handle);
    ?>
  
  
  
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
  <th><a href="Food.php">FOOD</a></th>
    <th><a href="Dessert.php">DESSERT</a></th>
    <th><a href="Drinks.php">DRINKS</a></th>
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
