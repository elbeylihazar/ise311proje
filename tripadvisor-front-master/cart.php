<?php   
 session_start();  
 include('connection.php'); 
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Simple PHP Mysql Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="./assets/css/reset.css" />
            <link rel="stylesheet" href="./assets/css/fonts.css" />
            <link rel="stylesheet" href="./assets/css/font-icons.css" />
            <link rel="stylesheet" href="./assets/css/style.css" />
            <link rel="stylesheet" href="./assets/css/responsive.css" />
      </head>  
      <body>
      <section class="section-2">
      <div class="container">
        <div class="section-title">
      <br>
        <h2>Top experiences on Tripadvisor</h2>
        </div>
        <div class="carrousel">
        <div>
            <div class="carrousel-images">
              <img src="./assets/img/eiffel.jpg" alt="Tour Eiffel" />
            </div>
            <div class="favorite"></div>
            <h4>Eiffel Tower</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>140 000</p>
            </div>
            <p class="item-description">
              Architectural Buildings, Art Museums
            </p>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/louvre.jpg" alt="Louvre" />
              <div class="favorite"></div>
            </div>
            <h4>Louvre Museum</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>20 000</p>
            </div>
            <p class="item-description">
              Architectural Buildings, Art Museums
            </p>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/louvre.jpg" alt="Louvre" />
              <div class="favorite"></div>
            </div>
            <h4>Louvre Museum</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>190 000 avis</p>
            </div>
            <p class="item-description">
              Architectural Buildings, Art Museums
            </p>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/arcTriomphe.jpg" alt="Arc de Triomphe" />
              <div class="favorite"></div>
              <i class="icon-arrow_right"></i>
            </div>
            <h4>Triumphal arch</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>110 000</p>
            </div>
            <p class="item-description">
              Architectural Buildings, Historic Sites
            </p>
          </div>
        </div>

        <div class="carrousel">
          <div>
            <div class="carrousel-images">
              <img src="./assets/img/bristol.jpg" alt="Bristol" />
            </div>
            <div class="favorite"></div>
            <h4>Bistrol</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>167 000</p>
            </div>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/bristol.jpg" alt="Bristol" />
            </div>
            <div class="favorite"></div>
            <h4>Bistrol</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>120 000 </p>
            </div>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/reserve.jpg" alt="Reserve" />
              <div class="favorite"></div>
            </div>
            <h4>Hotel and Spa</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>180 000 </p>
            </div>
          </div>
          <div>
            <div class="carrousel-images">
              <img src="./assets/img/georgev.jpg" alt="George V" />
              <div class="favorite"></div>
              <i class="icon-arrow_right"></i>
            </div>
            
            <h4>Four Seasons Hotel George V</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>30 000</p>
            </div>
          </div>
        </div>

        <div class="carrousel">
        
          <div>
            <div class="carrousel-images">
              <img src="./assets/img/verjus.jpg" alt="Verjus" />
            </div>
            <div class="favorite"></div>
            <h4>Drinks</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>130 000</p>
            </div>
            <p class="item-description">
              20€ 
            </p>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/114.jpg" alt="Faubourg" />
              <div class="favorite"></div>
            </div>
            <h4>Le 114 Faubourg</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>120 000</p>
            </div>
            <p class="item-description">20€</p>
          </div>

          <div>
            <div class="carrousel-images">
              <img src="./assets/img/114.jpg" alt="Faubourg" />
              <div class="favorite"></div>
            </div>
            <h4>Le 114 Faubourg</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>140 000</p>
            </div>
            <p class="item-description">25€</p>
          </div>


          <div>
            <div class="carrousel-images">
              <img src="./assets/img/frenchie.jpg" alt="Frenchie" />
              <div class="favorite"></div>
              <i class="icon-arrow_right"></i>
            </div>
            <h4>Frenchie</h4>
            <div class="carrousel-reviews">
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <i class="icon-bubble_rating_full_refresh"></i>
              <p>140 000 avis</p>
            </div>
            <p class="item-description">
              15€
            </p>
          </div>
        </div>
      </div>
    </section>
           <br />  
           <div class="container" style="width:700px;">  
                <h3 text-align="center">Simple PHP Mysql Shopping Cart</h3><br />  
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" text-align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" text-align="right">Total</td>  
                               <td text-align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>