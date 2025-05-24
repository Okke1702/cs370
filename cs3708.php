<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monuments Section</title>
    <link rel="stylesheet" href="./CSS/style1.css">
    <?php
    include "header.php";
    include "./database/north_class.php";
    
    ?>
     <script src="./js/js_monument.js"></script>
</head>
<body>
    <div class="head">
      <div class="head1">
        <h1>Monuments of the World</h1>
      </div>
    </div>
    <div class = "zone">
        <h2>Zone-Based Categorization</h2>
        <?php
        $north = new north;
        $show_north = $north ->show_north();
        $south = new south;
        $show_south = $south ->show_south();
        $east = new east;
        $show_east = $east ->show_east();
        $west = new west;
        $show_west = $west ->show_west();
        ?>
        <ul>
            <li>
              <details>
              <summary>
              North
              </summary>
              <?php
            if ($show_north) {
                while ($result = $show_north->fetch_assoc()) {    
            ?>
             <details>
                    <summary>
                      <?php
                      echo $result['name']
                      ?>
                    </summary>
                    <p>
                      <div class = "history"> <?php echo $result['history']?></div>
                      <span id="more-content" style= "display:none" ><?php echo $result['more_content']?></span>
                      <span id="toggle-btn" style=" color: blue; cursor: pointer; text-decoration: underline;" class="toggle-btn" onclick="toggleContent()">More</span>
                    </p>
                    
                    <br>
                    <br>

                    <img class="img1" src='<?php echo $result['img']?>' alt="">
                    <div class = "img1">
                        <iframe style="width: 100%; height: 100%;" 
                        src='<?php echo $result['link_lo']?>' 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                     
                    </div>
                  </details>       
            <?php
                }
            }
            ?>
              </details>
             
            </li>
            <li>
            <details>
              <summary>
              South
              </summary>
              <?php
            if ($show_south) {
                while ($result = $show_south->fetch_assoc()) {    
            ?>
             <details>
                    <summary>
                      <?php
                      echo $result['name']
                      ?>
                    </summary>
                    <p>
                      <div class = "history"> <?php echo $result['history']?></div>
                      <span id="more-content" style= "display:none" ><?php echo $result['more_content']?></span>
                      <span id="toggle-btn" style=" color: blue; cursor: pointer; text-decoration: underline;" class="toggle-btn" onclick="toggleContent()">More</span>
                    </p>
                    
                    <br>
                    <br>

                    <img class="img1" src='<?php echo $result['img']?>' alt="">
                    <div class = "img1">
                        <iframe style="width: 100%; height: 100%;" 
                        src='<?php echo $result['link_lo']?>' 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                     
                    </div>
                  </details>       
            <?php
                }
            }
            ?>
              </details>
            </li>
            <li>
            <details>
              <summary>
              East
              </summary>
              <?php
            if ($show_east) {
                while ($result = $show_east->fetch_assoc()) {    
            ?>
             <details>
                    <summary>
                      <?php
                      echo $result['name']
                      ?>
                    </summary>
                    <p>
                      <div class = "history"> <?php echo $result['history']?></div>
                      <span id="more-content" style= "display:none" ><?php echo $result['more_content']?></span>
                      <span id="toggle-btn" style=" color: blue; cursor: pointer; text-decoration: underline;" class="toggle-btn" onclick="toggleContent()">More</span>
                    </p>
                    
                    <br>
                    <br>

                    <img class="img1" src='<?php echo $result['img']?>' alt="">
                    <div class = "img1">
                        <iframe style="width: 100%; height: 100%;" 
                        src='<?php echo $result['link_lo']?>' 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                     
                    </div>
                  </details>       
            <?php
                }
            }
            ?>
              </details>
            </li>
            <li>
            <details>
              <summary>
              West
              </summary>
              <?php
            if ($show_west) {
                while ($result = $show_west->fetch_assoc()) {    
            ?>
             <details>
                    <summary>
                      <?php
                      echo $result['name']
                      ?>
                    </summary>
                    <p>
                      <div class = "history"> <?php echo $result['history']?></div>
                      <span id="more-content" style= "display:none" ><?php echo $result['more_content']?></span>
                      <span id="toggle-btn" style=" color: blue; cursor: pointer; text-decoration: underline;" class="toggle-btn" onclick="toggleContent()">More</span>
                    </p>
                    
                    <br>
                    <br>

                    <img class="img1" src='<?php echo $result['img']?>' alt="">
                    <div class = "img1">
                        <iframe style="width: 100%; height: 100%;" 
                        src='<?php echo $result['link_lo']?>' 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                     
                    </div>
                  </details>       
            <?php
                }
            }
            ?>
              </details>
            </li>
        </ul>
    </div>
    <br>
    <div class="head1">
        <h1>World Wonder</h1>
      </div>
      <div class = "zone">
            
             
              <?php
              $wonder = new wonder;
              $show_wonder = $wonder ->show_wonder();
            if ($show_wonder) {
                while ($result = $show_wonder->fetch_assoc()) {    
            ?>
             <details>
                    <summary>
                      <?php
                      echo $result['name']
                      ?>
                    </summary>
                    <p>
                      <div class = "history"> <?php echo $result['history']?></div>
                      <span id="more-content" style= "display:none" ><?php echo $result['more_content']?></span>
                      <span id="toggle-btn" style=" color: blue; cursor: pointer; text-decoration: underline;" class="toggle-btn" onclick="toggleContent()">More</span>
                    </p>
                    
                    <br>
                    <br>

                    <img class="img1" src='<?php echo $result['img']?>' alt="">
                    <div class = "img1">
                        <iframe style="width: 100%; height: 100%;" 
                        src='<?php echo $result['link_lo']?>' 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                     
                    </div>
                  </details>       
            <?php
                }
            }
            ?>
             
      </div>
      <br>
      <br>
      <br>
      <br>
      
      <?php
include "footer.php";
?>
</body>
</html>