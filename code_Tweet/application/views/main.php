<!-- <?php
// echo'<pre>';
// print_r($alltweet);
// echo'</pre>';
?> -->
<!-- <?php

// print_r ($this->session->all_userdata());

?> -->



<div class="row" style="height:auto; background-color:#F0F8FF;">

<!--///////////////////画面左ペイン//////////////////////////////-  -->
      <a href="<?php echo base_url() . "index.php/tweet/logout" ?>">ログアウト</a>
      <div style="float:left; width:15%; margin-left:10%;">
          <div style="background-color:#fff; margin-top:20px;">
            <div style="background-color:red;">
            	<img src="<?php echo base_url();?>assets/img/mv_1.jpg" style="width:221px;">
            </div>
            <div>
              <table>
                  <tr>
                      <td style="padding-right:15px; padding-left:15px;"><img src="<?php echo base_url();?>assets/img/<?php echo $this->session->userdata('img'); ?>" style="width:75px; height:75px; margin-left:0px; margin-top:-15px;" class="img-circle"></td>
                      <td style=""><td><p style="font-weight: bold;"><?php echo $this->session->userdata('name'); ?></p></td>
                </tr>
              </table>
           </div>
            <div>
              <table>
                  <tr>
                    	<td style="text-align:center; padding-left:15px; padding-right:15px; padding-top:5px;"><p>tweet</p></td>
                      <td style="text-align:center; padding-left:12px; padding-right:12px; padding-top:5px;"><p>follow</p></td>
                      <td style="text-align:center; padding-left:10px; padding-right:10px; padding-top:5px;"><p>follower</p></td>
                <tr>
                <tr>
                    <td style="text-align:center; padding-top:5px; color:#00AA00; font-weight: bold;"><p>50</p></td>
                    <td style="text-align:center; padding-top:5px; color:#00AA00; font-weight: bold;"><p>100</p></td>
                    <td style="text-align:center; padding-top:5px; color:#00AA00; font-weight: bold;"><p>2</p></td>
              </tr>
              </table>
            </div>

          </div>

          <div style="background-color:#fff;">
              <h3>#trend</h3>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>
              <p style="color:#00AA00; font-weight:bold; font-size:17px;">#misao</p>


          </div>
    </div>
<!--///////////////////ツイートのメイン//////////////////////////////-  -->
<?php
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y/m/d/H:i:s');
?>
      <div style="width:42%; margin-left:1%;float:left; margin-top:20px;">
           <div class="col-lg-12" style="background-color:#E6FFE9;">
             <div class="col-lg-1" style="float:left;">
             <img src="<?php echo base_url();?>assets/img/<?php echo $this->session->userdata('img'); ?>" style="width:45px; height:45px; margin-left:-10px; margin-top:10px;" class="img-circle">
           </div>
           <form>
           <div class="col-lg-11" style="float:left;">
             <div class="form-group" style="margin-top:10px;">
               <textarea placeholder="複数行に渡るテキストを入力できる。" rows="3" class="form-control" id="InputTextarea" style="border:2px #32CD32 solid;"></textarea>

               <input type="hidden" id="time" value="<?php echo date($date);?>">


             </div>
             <div style="margin-left:76%; padding-bottom:2%;"><button class="btn btn-success" style="margin-top:7px; margin-left:20px;" id="tweet"><p style="padding-left:20px; padding-right:20px; height:10px;">Tweet<p></button></div>
           </div>
         </form>
          </div>

        <?php
        $count =1;
         foreach ($alltweet as $tweet):

          if($count == 1){
          echo'<div style="width:100%; background-color:#fff; margin-top:20px; float:left;">';
        } else{
          echo'<div style="width:100%; background-color:#fff; margin-top:20px; float:left;">';
        }
          echo'<div style="width:13%; float:left;"><img src="'.base_url().'assets/img/'.$tweet['img'].'" style="width:45px; height:45px; margin-left:20px; margin-top:10px;" class="img-circle"></div>';
           echo'<div style="width:83%; float:left;"><h4>'.$tweet['name'].'</h4>';
           echo'<p style="word-wrap: break-word; color:#555555;">'.$tweet['tweet'].'</p>';
           echo'</div>';
           echo'<div style="width:100%; float:left;">';
            echo'<span class="glyphicon glyphicon-share-alt" aria-hidden="true" style="padding-left:50px; padding-top:10px; padding-bottom:10px; margin-left:30px; font-size:15px; color:#778899;"></span>';
           echo'<span class="glyphicon glyphicon-retweet" aria-hidden="true" style="padding-left:50px; font-size:15px; color:#778899;"></span>';
           echo'<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="padding-left:50px; font-size:15px; color:#778899;"></span>';
           echo'<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="padding-left:50px; font-size:15px; color:#778899;"></span>';
           echo'<span style="text-align:right; color:#778899; margin-left:164px;">'.$tweet['date'].'</span>';
           echo'</div>';
        echo'</div>';

        $count++;

         endforeach;?>

    </div>

<!--///////////////////画面右ペイン//////////////////////////////-  -->

      <div style="float:left; width:20%; margin-top:0px; margin-left:1%; float:left;">
            <div style="background-color:#fff;">
               <h3>Recommend friend</h3>
               <div>
                 <table>
                     <tr>
                         <td style="padding-right:15px; padding-left:15px;"> <img src="<?php echo base_url();?>assets/img/ore.jpg" style="width:50px; height:50px;" class="img-circle"></td>
                         <td><p style="font-weight: bold; font-size:12px; padding-right:30px; margin-top:6px;">あずまおう</p></td>
                         <td><button class="btn btn-sm" style="background-color:white; border-color:#00AA00; color:#00AA00; font-weight:bold; padding-bottom:0px;"; id="tweet"><p style="padding-left:5px; padding-right:5px;">Follow<p></button></td>
                   </tr>
                   <tr>
                       <td style="padding-right:15px; padding-left:15px;"> <img src="<?php echo base_url();?>assets/img/ore.jpg" style="width:50px; height:50px;" class="img-circle"></td>
                       <td><p style="font-weight: bold; font-size:12px; padding-right:30px; margin-top:6px;">あずまおう</p></td>
                       <td><button class="btn btn-sm" style="background-color:white; border-color:#00AA00; color:#00AA00; font-weight:bold; padding-bottom:0px;"; id="tweet"><p style="padding-left:5px; padding-right:5px;">Follow<p></button></td>
                 </tr>
                 <tr>
                     <td style="padding-right:15px; padding-left:15px;"> <img src="<?php echo base_url();?>assets/img/ore.jpg" style="width:50px; height:50px;" class="img-circle"></td>
                     <td><p style="font-weight: bold; font-size:12px; padding-right:30px; margin-top:6px;">あずまおう</p></td>
                     <td><button class="btn btn-sm" style="background-color:white; border-color:#00AA00; color:#00AA00; font-weight:bold; padding-bottom:0px;"; id="tweet"><p style="padding-left:5px; padding-right:5px;">Follow<p></button></td>
               </tr>


                 </table>
              </div>
            </div>

            <div style="background-color:#fff; margin-top:20px;">
              <ul class="u-cf" style="list-style:none; display: inline;">
                <li class="Footer-item Footer-copyright copyright">&copy; 2017 misaotter</li>
                <li class="Footer-item"><a class="Footer-link" href="/about" rel="noopener">Twitterについて</a></li>
                <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com" rel="noopener">ヘルプセンター</a></li>
                <li class="Footer-item"><a class="Footer-link" href="/tos" rel="noopener">規約</a></li>
                <li class="Footer-item"><a class="Footer-link" href="/privacy" rel="noopener">プライバシーポリシー</a></li>
                <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com/articles/20170514" rel="noopener">クッキー</a></li>
                <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com/articles/20170451" rel="noopener">広告について</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="//about.twitter.com/press/brand-assets" rel="noopener">ブランド</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="https://blog.twitter.com/japan" rel="noopener">ブログ</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="http://status.twitter.com" rel="noopener">ステータス</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="https://about.twitter.com/products" rel="noopener">アプリ連携</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="https://about.twitter.com/careers" rel="noopener">採用情報</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="https://business.twitter.com/ja" rel="noopener">広告掲載方法</a></li>
                  <li class="Footer-item"><a class="Footer-link" href="//dev.twitter.com" rel="noopener">開発者</a></li>
              </ul>
            </div>

    </div>
</div>
