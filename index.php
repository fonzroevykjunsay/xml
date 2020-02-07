<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://fonzjunsay.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("bag");
?>

 <h1>Gadgets</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $brand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $capacity = $data->getElementsByTagName("capacity")->item(0)->nodeValue;
     $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
 
 echo "<ul>
            <h2>$brand</h2>
              <ul>
                  <li>Cost: $description </li>
                  <li>Year: $capacity </li>
                  <li>Album: $color </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
