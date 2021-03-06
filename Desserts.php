<?php
    include_once("db/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- <link rel="stylesheet" href="Dessert.css"> -->
    <link rel="stylesheet" href="DessertsP.css">
    <title>Food To Your Heart</title>
</head>
<body>
    <header>

          <div class="headeer">
                       <?php
class Headeri {
  public $name;
  public $taste;
  public function __construct($name, $taste) {
    $this->name = $name;
    $this->taste = $taste; 
  }
  public function intro() {
    echo "Our {$this->name} are {$this->taste}."; 
  }
}

// underheader is inherited from headeri
class underheader extends Headeri {
  public function message() {
    echo "Food To Your Heart";
    echo '<br>'; 
  }
}

$underheader = new underheader("Desserts", "delicious");
$underheader->message();
$underheader->intro();
?>
            <h1>DESSERTS</h1>
            <p>Food To Your Heart</p>            
          </div>

    </header>
    
    <main>
      <div class="btopnav" id="bmyTopnav">
        <a href="index.php " class="bactive"> <i class="fa fa-home icons"></i>  Home</a>
        <a href="Food.html"><i class="fa fa-cutlery icons"> </i>  Food</a>
        <div class="bdropdown">
          <button class="bdropbtn"> <i class="fa fa-birthday-cake icons"></i>  Desserts
            <i class="bfa bfa-caret-down"></i>
          </button>
          <div class="bdropdown-content">
            <a href="#Baking">Baking</a>
            <a href="#Non-Baking">Non-Baking</a>
            <a href="#Frozen">Frozen</a>
             <a href="#Pastries">Pastries</a>
        </div>
      </div> 
      <a href="Drinks.html"><i class="fa fa-glass icons"> </i>  Drinks</a>
      <a href="#signin"> <i class="fa fa-birthday-cake icons"></i>  Log In</a>
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
        <br>
        <br>
        
        <em>
        <h2 id=Baking style="text-align: center;">BAKING</h2>
        </em>
    <div class="wrapper">
        <?php
            $sql = "SELECT * FROM tbl_desserts WHERE categories_id=1";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

            while($row = mysqli_fetch_assoc($resultset)) {
                echo "<div class=\"card\">
                        <img src=\"{$row['image_url']}\">
                        <div class=\"info\">
                        <h5>{$row['name']}</h5>
                        <p>
                            {$row['description']}
                             <a href=\"\" target=\"_blank\" style=\"text-decoration: none; color: rgb(255, 15, 107);\">Read more</a>
                        </p>
                    </div>
                    </div>";
            }
        ?>
        <div class="card">
            <img src="FOTO/Desserts/1b.jpg" alt="Apple cake">
            <div class="info">
                <h5>Apple Cake</h5>
                <p>Step 1
                    Beat 2 1/4 cup flour, milk, 1/4 cup sugar, yeast, 
                    6 tablespoons butter, vanilla extract, and
                     1 pinch salt in a large bowl with an electric mixer
                     on high until dough is smooth, about 5 minutes;
                     spread into baking dish and press dough up the sides.
                     Press apple slices into dough...
                     <a href="dessert1.php" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                   
                    </p>
                
                
            </div>
        </div>
            <div class="card">
                <img src="FOTO/Desserts/2b.jpg" alt="Chocolate Cake">
                <div class="info">
                    <h5>Chocoloate Cake</h5>
                    <p>Preheat oven to 350 degress F(175 degress C).Grease 
                        and flour a 9x13-inch pan.In a large bowl,combine 
                        2 cups all-purpose flour,2 cups white sugar,A cup unsweetened
                         cocoa,2 teaspoons baking soda. 1 teaspoon ...
                         <a href="dessert2.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                    </p>
                    
                    
                </div>
            </div>

                <div class="card">
                    <img src="FOTO/Desserts/3b.jpg" alt="Chocolate Cake">
                    <div class="info">
                        <h5>Coffe Cake</h5>
                        <p>Preheat oven to 425 degrees F(220 degress C).Grease and flour a 9 inch 
                            square pan.In a large bowl mix together the flour,baking powder,sugar 
                            and salt.Cut inthe shortening with a pastry blender to the size of small peas.In
                             a separate small bowl,beat the eg well,then stir in the mild and vanilla.
                             Add the egg-milk mixture to the ...
                             <a href="dessert3.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                             </p>
                        
        </div>
    </div>
    <div class="card">
        <img src="FOTO/Desserts/4b.jpg" alt="Carrot Cake">
        <div class="info">
            <h5>Carrot Cake</h5>
            <p>In a medium bowl, combine grated carrots and brown sugar. Set aside for 60 minutes, 
                then stir in raisins.Preheat oven to 175 degrees C. Grease and flour two 10 inch cake pans.
                In a large bowl, beat eggs until light. Gradually beat in the white sugar, oil and vanilla.
                 Stir in the pineapple. Combine the flour ...
                 <a href="dessert4.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
            </p>
            
            
        </div>
    </div>
</div>
                <!--wrapper-->
                <br>
<hr>
                <em>
                <h2 id=Non-Baking style="text-align: center;">NON-BAKING</h2>
                </em>
                <br>
                <br>
        <div class="wrapper">
            <div class="card">
                <img src="FOTO/Desserts/1nb.jpg" alt="Classic Tiramisu">
                <div class="info">
                    <h5>Classis Tiramisu</h5>
                    <p>Combine egg yolks and sugar in the top of a double boiler,iver boiling water
                        .Reducee heat to low,and cook for about 10minutes,stirring constantly.
                        Remove from heat and whip yolks until thick and lemon colored. 
                        Add mascarpone to whipped yolks...
                        <a href="dessert5.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                        </p>
                   
                </div>
            </div>

            <div class="card">
                <img src="FOTO/Desserts/2nb.jpg" alt="Cherry cheese cake">
                <div class="info">
                    <h5>Cherry cheese cake</h5>
                    <p>In medium bowl, mix cracker crumbs, melted buttery sticks,
                    and 2 tablespoons powdered sugar. Press in bottom and 1/2 inch
                    up sides of 9-inch springform pan. Set aside.In large bowl, beat cream cheese substitute and 1/2 cup powderedsugar with ...
                    <a href="dessert6.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                </p>
                    
                </div>
            </div>

            <div class="card">
                <img src="FOTO/Desserts/3nb.jpg" alt="Zebra cake">
                <div class="info">
                    <h5>Zebra Cake</h5>
                    <p>In separate bowls, prepare each pudding mix, using only one
                    cup of milk per box. Let stand for about 5 minutes until
                    slightly firm, then fold 1/2 of the whipped topping into each one.
                    Place a layer of graham crackers in the bottom of an 8x8 inch pan.
                    Spread half of the ...
                    <a href="dessert7.php" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                </p>
                    
                </div>
            </div>
            <div class="card">
                <img src="FOTO/Desserts/4nb.jpg" alt="Popcorn Cake">
                <div class="info">
                    <h5>Popcorn cake</h5>
                    <p>Melt butter and marshmallows in a large heavy pan over low heat. Stir often.
                        Put popcorn into large container. Pour marshmallow mixture over top. Stir to mix well.
                         Add peanuts and candy. Mix ...
                         <a href="dessert8.php" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                        </p>
                    
                </div>
            </div>
        </div>

        <!--wrapper-->
        <br>
        <hr>
        <em>
        <h2 id=Frozen style="text-align: center;">FROZEN</h2>
        </em>
        <br>
        <br>
        <div class="wrapper">
            <div class="card">
                <img src="FOTO/Desserts/1f.jpg" alt="Fruited icecream ">
                <div class="info">
                    <h5>Fruited icecream</h5>
                    <p>
                    Combine 2 (14 ounce) cans sweetened condensed milk,5 cups milk,
                    2 cups heavy cream,2 tablespoons vanilla extract,?? teaspoon salt
                    3 cups chopped ...
                    <a href="dessert9.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                </p>
                    
                </div>
            </div>


            <div class="card">
                <img src="FOTO/Desserts/2f.jpg" alt="Yogurt ice pops">
                <div class="info">
                    <h5>Yogurt ice pops</h5>
                    <p>
                    Place the mixed blueberries, raspberries, strawberries,
                    sliced bananas, yogurt, and sugar into a blender.
                    Cover, and blend until fruit is chunky or smooth, as desired.
                    Fill paper cups ...
                    <a href="dessert10.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                    </p>
                    
                </div>
            </div>


            <div class="card">
                <img src="FOTO/Desserts/3f.jpg" alt="Vanilla frozen yogurt">
                <div class="info">
                    <h5>Vanilla frozen yogurt</h5>
                    <p>
                    Stir the 3 cups nonfat Greek yogurt,??? cup white sugar,
                    1 teaspoon vanilla extract together until the sugar
                    has dissolved. Cover. Refrigerate 1 hour.
                    Pour the chilled mixture into an ice cream maker and
                    freeze according to ...
                    <a href="dessert11.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                </p>
                    
                </div>
            </div>
            <div class="card">
                <img src="FOTO/Desserts/4f.jpg" alt="Avocado paletas">
                <div class="info">
                    <h5>Avocado paletas</h5>
                    <p>
                        Bring water and sugar to a boil together in a saucepan; stir continually 
                        until sugar dissolves. Set aside to cool.Pour sugar-water mixture into a blender with avocados,
                        lime juice, and salt...
                        <a href="dessert12.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>                        
                    </p>
                    
                </div>
            </div>
        </div>     

        <!--wrapper-->
        <br>
        <hr>
        <em>
        <h2 id=Pastries style="text-align: center;">PASTRIES</h2>       
        </em>
        <br>
        <br>
        <div class="wrapper">
            <div class="card">
                <img src="FOTO/Desserts/1p.jpg" alt="Cinammon rolls">
                <div class="info">
                    <h5>Cinammon rolls</h5>
                    <p>In the pan of your bread machine, combine water, 1/4 cup melted butter,
                    vanilla pudding, 1 cup warm milk, egg, 1 tablespoon sugar, salt,
                    bread flour, and yeast. Set machine to Dough cycle; press Start.
                    When Dough cycle has finished, turn dough out onto a lightly floured
                    surface and roll into ...
                    <a href="dessert13.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                 </p>
                    
        
                </div>
            </div>
        
        
            <div class="card">
                <img src="FOTO/Desserts/2p.jpg" alt="Apple strudel">
                <div class="info">
                    <h5>Apple strudel</h5>
                    <p>
                    Combine apples, 3/4 cup sugar, raisins, walnuts,
                    and cinnamon in a large bowl for the filling.
                    Dust a flat work surface lightly with flour. Unroll puff pastry
                    and sprinkle lightly with flour. Roll out slightly and mark
                    into 3 equal sections...
                    <a href="dessert14.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                    </p>
                   
                </div>
            </div>
        
        
            <div class="card">
                <img src="FOTO/Desserts/3p.jpg" alt="Pinwheels">
                <div class="info">
                    <h5>Pinwheels</h5>
                <p>
                    Dust a flat work surface lightly with flour. Unroll puff
                    pastry and roll out to a rectangle. Spread a thin layer of
                    herbed cream cheese over the puff pastry. Cover with Swiss cheese
                    slices, leaving a 1-inch border...
                    <a href="dessert15.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                 </p>

                </div>
            </div>
            <div class="card">
                <img src="FOTO/Desserts/4p.jpg" alt="Puff shells">
                <div class="info">
                    <h5>Puff shells</h5>
                    <p>
                        Beat egg and water together in a small bowl.
                        Cut two rounds from each sheet of puff pastry using a 3-inch round cutter, forming 8 circles. 
                        Use a 2 1/2-inch round cutter to cut ...
                        <a href="dessert16.html" target="_blank" style="text-decoration: none; color: rgb(255, 15, 107);">Read more</a>
                    </p>

                </div>
            </div>
        </div>
        
        
        <hr>
        
        <?php
        include_once("extra/footer.php");
        // array i arrayve
        $arrayyyy = array(array("https://www.facebook.com","_blank","footer/images/rrjetetsociale/modern_fb.png","48","46","Facebook logo"),
                          array("https://www.twitter.com","_blank","footer/images/rrjetetsociale/modern_tw.png","47","46","Twitter logo"),
                          array("https://www.instagram.com","_blank","footer/images/rrjetetsociale/modern_ig.png","48","46","Instagram logo"),
                          array("https://www.linkedin.com","_blank","footer/images/rrjetetsociale/modern_07.png","49","46","Linkedin logo"));
        sort($arrayyyy);
        $footeri = new Footer();
        $footeri->shfaq($arrayyyy);
    ?>
  

</body>    
</html>    
