<!--============================= Carousel============================= -->
      <div id="myCarousel" class="carousel slide">

        <!-- Indicators start -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Indicators end -->

        <div id="this-carousel-id" class="carousel slide">
          <div class="carousel-inner">
              <div class="item active">
               <?php echo $this->Html->image("sl3.jpg");?>
                <!-- <img src="misao.jpg" class="img-responsive"> -->
                <div class="container">
                  <div class="carousel-caption">
                    </div>
                </div>
              </div>

              <div class="item">
              <?php echo $this->Html->image("sl2.jpg");?>
                <!-- <img src="http://placehold.it/1500X500" class="img-responsive"> -->
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>

              <div class="item">
              <?php echo $this->Html->image("sl1.jpg");?>
                <!-- <img src="http://placehold.it/1500X500" class="img-responsive"> -->
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
        </div>
      </div><!-- Controls -->
    </div><!-- carousel -->

<?php
  $count = 1;
  echo'<div class="shohin" style="background-color:red; width:80%; height:auto; margin-left:9%;margin-top:3%;">';

        foreach ($item as $item):
          if($count == 1 || ($count -1) % 4 == 0  ){
            echo'<div class="container" style="float:left;">';
          }
         echo'<div class="item" style="width:15%; float:left; margin-left:57px; margin-right:57px;">';
            echo $this->Html->image($item['file'], array('url'=> array(
                  'controller' => 'users',
                  'action' => 'products',
                  'param1' => $item['id'])));

            echo'<div style="text-align:center;"><p style="font-size:14px;">'; echo $item['name'];
            echo'</br></p></div></a>';
            echo'<div style="text-align:center;"><p style="font-size:14px;margin-top:-10px;">$'; echo $item['price'];
            echo'</p></div>';
            echo'</div>';

          if($count % 4 == 0){
            echo'</div>';
            }
          $count++;
         endforeach;
    //  unset($item); 変数の破棄

    echo'</div>';
?>
