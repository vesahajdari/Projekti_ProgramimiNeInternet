<?php
session_start();
include_once("db/db_connection.php");
include_once("logout.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food To Your Heart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="vendors_scripts/validation.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (sessionStorage.clickcount) {
                    sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                } else {
                    sessionStorage.clickcount = 1;
                }
                document.getElementById("rezultati").innerHTML = "Ju keni vizituar faqen hyrese " + sessionStorage.clickcount + " here ne kete sesion.";
            } else {
                document.getElementById("rezultati").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }
    </script>

    <style>
        #loading_spinner
        {
            display:none;
        }
    </style>


</head>
<body>
<!--Fillon header-->
<header>
    <!--Shrimi mbi foto-->
    <div class="image">
        <div class="text1">
            <h1 style="font-size:xxx-large;">FOOD TO YOUR HEART</h1>
            <p  onclick="clickCounter()" style="font-size: x-large;">We bring life to your table</p>
            <div id="rezultati"></div>
            <span onclick="openNav()">Menu</span>
        </div>
    </div>
</header>
<!--Meny levizese-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Food.html">Food</a>
    <a href="Desserts.php">Dessert</a>
    <a href="Drinks.html">Drinks</a>

</div>

<!--JS per meny levizese-->
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>


<main>



    <br><br><br>
    <div class="boxi1">
        <br>
        <br>
        <h1 style="font-size: xx-large; color: bisque;" class="teksti" >RECIPES OF THE MONTH</h1>
        <br>

        <div class="foodtheme">
            <br>
            <br>
            <em>
                <h2 style="text-align: center; font-size:xx-large; color: #f1f1f1;">FOOD</h2>
            </em>
            <br>
            <br>




            <div class="wrapper">

                <div class="card">

                    <img src="Foto/Food/RoastTurkey.jpg" alt="">

                    <div class="info">
                        <a href="RoastTurkey.html">
                            <h5>Roast Turkey</h5>
                        </a>
                        <p>Roast Turkey made with seasoned butter and broth
                            is basted for over 4 hours for an incredibly
                            tender meat and crispy skin is PERFECT for
                            holiday dinner!
                        </p>




                    </div>
                </div>

                <div class="card">

                    <img src="FOTO/Food/PizzaDough.jpg" alt="">

                    <div class="info">
                        <a href="PizzaDough.html">
                            <h5>Easy Pizza Dough</h5>
                        </a>
                        <p>Easy Pizza Dough made with flour, yeast,
                            sugar, oil, and seasoning takes your
                            homemade pizza to the next level, ready
                            in 60 minutes!</p>

                    </div>
                </div>


                <div class="card">

                    <img src="FOTO/Food/RainbowVegetables.jpg" alt="">

                    <div class="info">
                        <a href="RainbowVegetables.html">
                            <h5>Rainbow Roasted Vegetables</h5>
                        </a>
                        <p>
                            Rainbow Roasted Vegetables are the perfect
                            way to enjoy eating healthy, colorful vegetables
                            for adults and kids! Makes a perfect side for
                            quick meals or dinner parties where you want
                            to impress!</p>

                    </div>
                </div>

            </div>
            <br>
            <br>

        </div>
        <br>

        <div class="desserttheme">
            <br>
            <br>
            <em>
                <h2 style="text-align: center; font-size:xx-large; color: #f1f1f1;">DESSERTS</h2>
            </em>
            <br>
            <br>

            <div class="wrapper">
                <div class="card">
                    <img src="FOTO/Desserts/1b.jpg" alt="">
                    <div class="info">
                        <a href="dessert1.html">
                            <h5>Apple Cake</h5>
                        </a>
                        <p>Beat 2 1/4 cup flour, milk, 1/4 cup sugar, yeast,
                            6 tablespoons butter, vanilla extract, and
                            1 pinch salt in a large bowl with an electric mixer
                            on high until dough is smooth, about 5 minutes;
                            spread into baking dish and press dough up the sides.
                            Press apple slices into dough.
                            Mix 1 cup sugar, 3/4 cup flour, candied lemon peel,
                            cinnamon, nutmeg, and 1 pinch salt in a bowl.
                            Cut in 1/2 cup butter with a knife or pastry blender until
                            mixture resembles coarse crumbs; sprinkle over apples.
                            Allow dough to rise for 30 minutes.
                            Bake in preheated oven until cake is golden brown
                            and apples are tender, about 35 minutes.
                        </p>


                    </div>
                </div>
                <div class="card">
                    <img src="FOTO/Desserts/1nb.jpg" alt="">
                    <div class="info">
                        <a href="dessert5.html">
                            <h5>Classis Tiramisu</h5>
                        </a>
                        <p>Combine egg yolks and sugar in the top of a double boiler,iver boiling water
                            .Reducee heat to low,and cook for about 10minutes,stirring constantly.
                            Remove from heat and whip yolks until thick and lemon colored.
                            Add mascarpone to whipped yolks.Beat until combined.In a separate bowl
                            ,whip cream to stiff peaks.Gently fold into yolk mixture and set aside.Split the lady fingers
                            in half,and line the bottom and sides of a large glass bowl.Brush with coffe liqueur.</p>

                    </div>
                </div>
                <div class="card">
                    <img src="FOTO/Desserts/1f.jpg" alt="">
                    <div class="info">
                        <h5>Fruited icecream</h5>
                        <p>
                            Combine 2 (14 ounce) cans sweetened condensed milk,5 cups milk,
                            2 cups heavy cream,2 tablespoons vanilla extract,?? teaspoon salt
                            3 cups chopped fruit in freezer canister of ice cream maker.
                            Step 2
                            Freeze according to manufacturer's directions.</p>

                    </div>
                </div>

                <div class="card">
                    <img src="FOTO/Desserts/1p.jpg" alt="">
                    <div class="info">
                        <a href="dessert13.html">
                            <h5>Cinammon rolls</h5>
                        </a>
                        <p>In the pan of your bread machine, combine water, 1/4 cup melted butter,
                            vanilla pudding, 1 cup warm milk, egg, 1 tablespoon sugar, salt,
                            bread flour, and yeast. Set machine to Dough cycle; press Start.
                            When Dough cycle has finished, turn dough out onto a lightly floured
                            surface and roll into a 17x10 inch rectangle. Spread with
                            1/2 cup softened butter. In a small bowl, stir together brown sugar,
                            cinnamon, and pecans. Sprinkle brown sugar mixture over dough.
                            Roll up dough, beginning with long side. Slice into 16
                            one-inch slices; place in prepared pan. Let rolls
                            rise in a warm place until doubled.Bake rolls in preheated oven until browned.
                        </p>


                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
        <br>
        <div class="drinkstheme">
            <br>
            <br>
            <em>
                <h2 style="text-align: center; font-size:xx-large; color: #f1f1f1;">DRINKS</h2>
            </em>
            <br>
            <br>




            <div class="wrapper">
                <div class="card">

                    <img src="Foto/Drinks/img1.webp" alt="">

                    <div class="info">
                        <a href="drinks1.html"><h5>Hot Apple Cider</h5></a>
                        <p>Pour the apple cider and maple
                            syrup into a large stainless steel saucepan.<br>
                            Step 2
                            Place the cinnamon sticks, cloves,
                            allspice berries, orange peel and lemon
                            peel in the center of a washed square of
                            cheesecloth; fold up the sides of the cheesecloth
                            to enclose the bundle, then tie it up with a length
                            of kitchen string. Drop the spice bundle into the cider mixture.<br>

                        </p>




                    </div>
                </div>
                <div class="card">
                    <img src="Foto/Drinks/img4.webp" alt="">
                    <div class="info">
                        <a href="drinks5.html">
                            <h5>Champagne Punch III</h5>
                        </a>
                        <p>In large punch bowl, combine the cranberry juice concentrate,
                            pink lemonade concentrate, limeade concentrate, white wine, club
                            soda and</p>

                    </div>
                </div>


                <div class="card">
                    <img src="Foto/Drinks/img7.webp" alt="">
                    <div class="info">
                        <a href="drinks9.html">
                            <h5>Grandma's Apple Pie 'Ala Mode' Moonshine</h5>
                        </a>
                        <p>
                            Step 1
                            Bring the apple cider, apple juice, cinnamon sticks, whole clove,
                            white sugar, and brown sugar to a boil in a large pot; reduce heat to
                            medium ...</p>

                    </div>
                </div>
                <div class="card">
                    <img src="Foto/Drinks/img10.webp" alt="">
                    <div class="info">
                        <a href="drinks13.html">
                            <h5>Campfire S'Mores Frappuccino</h5>
                        </a>
                        <p>
                            Blend ice, milk, marshmallow topping,
                            espresso, cocoa powder, and sugar together in
                            a blender until ... </p>

                    </div>
                </div>


            </div>
            <br>
            <br>

        </div>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
    </div>
    <br><br>

    <div id="about" class="container-fluide">
        <div class="row" id="row">
            <div class="col-sm-8">
                <h2>About  US</h2><br>
                <h4>How it started...</h4>
                <p>As young women and passionate for cooking we decided to share our passion with others.<br>
                    We bring joy, love, fun, memories to our recipes that???s why they are always delicious .<br>
                    Even thou we started as e small recipe website, just to have a place to put our creations it seems like you <br>guys needed a website of this kind as a result we are growing every day.
                    <br>Be part of our journey, help us by sharing your recipe.
                </p>
                <br><a href="mailto:someone@example.com">Share here</a>
            </div>
            <div class="col-sm-4">
                <h1>To put you in our vibe:</h1>
                <p>Some love quotes for cooking</p>
                <ul >
                    <li>???A recipe has no soul. You as the cook must bring soul to the recipe.???<br>
                        ??? Thomas Keller</li>
                    <br>
                    <li>???Cooking is like painting or writing a song. Just as there are only so many notes or colors,<br>
                        there are only so many flavors???it???s how you combine them that sets you apart.???<br>
                        ??? Wolfgang Puck</li>
                    <br>
                    <li>???Cooking is at once child???s play and adult joy. And cooking done with care is an act of love.???<br>
                        ??? Craig Claiborne</li>
                </ul>


            </div>
        </div>
    </div>

    <br>


    <div class="map">
        <h1 style=" text-align: center; color: #f1f1f1;">Come and visite us, this is our location:</h1>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187813.94242086154!2d21.027075016406243!3d42.6487907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2sus!4v1610820467913!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p></div>


    <footer class="footer">

        <div id="block_container">
            <div id="div1" >
                <ul class="nav">
                    <li><a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a></li>
                    <li><a href="https://www.instagram.com/" target="_b;anck" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a></li>
                </ul>
            </div>






            <div>
                <?php
                if (isset($_SESSION) && isset($_SESSION["loggedin"])) {
                    echo "<div>
                        <form method='post'>
                            <button type='submit' name='logout' value='Logout'>Logout</button>
                        </form>
                    </div>";
                } else {
                    echo "<button onclick=\"document.getElementById('login-id01').style.display='block'\" id=\"login1\" style=\"width:auto;\">Login</button>";
                }
                ?>

                <div id="login-id01" class="login-modal">

                    <form class="login-modal-content animate" action="do_login.php" onsubmit="return do_login();" method="post">
                        <div class="login-imgcontainer">
                            <span onclick="document.getElementById('login-id01').style.display='none'" class="login-close" title="Close Modal">&times;</span>
                        </div>

                        <div class="login-container">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="emailid" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" id="password" required>

                            <button type="submit" name="login" value="DO LOGIN" id="login_button">Login</button>

                            <p id="loading_spinner"><img src="FOTO/loading_spinner.gif"></p>
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

                    function do_login() {
                        var email=$("#emailid").val();
                        var pass=$("#password").val();
                        if(email!="" && pass!="")
                        {
                            $("#loading_spinner").css({"display":"block"});
                            $.ajax
                            ({
                                type:'post',
                                url:'do_login.php',
                                data:{
                                    do_login:"do_login",
                                    email:email,
                                    password:pass
                                },
                                success:function(response) {
                                    console.log('response', response);

                                    if(response=="success")
                                    {
                                        window.location.href="index.php";
                                        alert("Successfully login!");
                                    }
                                    else
                                    {
                                        $("#loading_spinner").css({"display":"none"});
                                        alert("Wrong Details");
                                    }
                                }
                            });
                        }

                        else
                        {
                            alert("Please Fill All The Details");
                        }

                        return false;
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
            <p></p>

        </div>

    </footer>




</body>
</html>
