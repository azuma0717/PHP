<html>
  <head>
    <script type='text/javascript' src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
 </head>
     <script>
     $(document).ready(function(){

       $('#tweet').click(function(){
        // alert("hi");
        var a = $('#InputTextarea').val();
        var b = $('#time').val();
        $.ajax({
          type:'POST',
          url : '<?php echo base_url(); ?>index.php/tweet/add_tweet',
          data:{a:a,b:b},
          datatype:'text',
          success:function(response)
          {
              // alert(response);
              // if(response == "yesitsdone")
              // {
              // //alert(response);
              //   window.location.href = 'home.php';
              // }
              // else
              //   {
              //     alert("wrong user login info please try again");
              //     return false;
              //   }
          //alert(response);
          }
        });
       });
     });

    </script>
            <body>
              <div class="row header" style="background-color:#fff; height:6%;">
                		<div class="col-lg-1 col-lg-offset-1"><span class="glyphicon glyphicon-home" aria-hidden="true" style="margin-top:15px; margin-left:12px;"></span> home</div>
                		<div class="col-lg-1"><span class="glyphicon glyphicon-bell" aria-hidden="true" style="margin-top:15px; margin-left:12px;"></span> alert</div>
                		<div class="col-lg-1"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-top:15px; margin-left:12px;"></span> mesages</div>
                		<div class="col-lg-1 col-lg-offset-2"><img src="<?php echo base_url();?>assets/img/misao2.png" style="width:30px; margin-top:11px; margin-left:-25px;" ></div>
                		<div class="col-lg-1 col-lg-offset-1">
                      <form>
                        		<input type="text" placeholder="search" style="margin-top:7px; margin-left:12px;">
                      </form>
                    </div>
                		<div class="col-lg-1"><img src="<?php echo base_url();?>assets/img/<?php echo $this->session->userdata('img'); ?>" style="width:45px; height:45px; margin-top:1px; margin-left:60px;" class="img-circle"></div>
                		<div class="col-lg-1"><button class="btn btn-success" style="margin-top:7px; margin-left:20px;" id="tweet2"><p style="padding-left:20px; padding-right:20px; height:10px;">Tweet<p></button></div>
        	   </div>
