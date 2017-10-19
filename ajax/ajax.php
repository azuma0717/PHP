<!--サーバとの通信を行ってもペー ジのリロードが行われていないというのがAjaxの特徴  -->
<html>
  <head>
    <script src="js/jquery-3.2.1.js"></script>
    <script>
      $(document).ready(function(){
          $('#btm').click(function(){

          var aa = $('#box').val();
          var bb = $('#box2').val();
          var cc = $('#box3').val();
          var dd = $('#box4').val();

          $.ajax({
            type:'POST',
            url:'b.php',
            data:{a:aa,b:bb,c:cc,d:dd},
            datatype:'text',
            success:function(response)
            {
              $('#lll').html(response);
            }
          });
         });

        $('#show').click(function(){

         var aa = $('#box').val();
         var bb = $('#box2').val();
         var cc = $('#box3').val();
         var dd = $('#box4').val();

         $.ajax({
           type:'POST',
           url:'c.php',
          //  data:{a:aa,b:bb,c:cc,d:dd},
           datatype:'text',
           success:function(response)
           {
             $('#rrr').html(response);
           }
         });
        });

        $('#select').click(function(){

         var aa = $('#box').val();
         var bb = $('#box2').val();
         var cc = $('#box3').val();
         var dd = $('#box4').val();

         $.ajax({
           type:'POST',
           url:'d.php',
           data:{a:aa,b:bb,c:cc,d:dd},
           datatype:'text',
           success:function(response)
           {
             $('#qqq').html(response);
           }
         });
        });

        $('#delete').click(function(){

         var aa = $('#box').val();
         var bb = $('#box2').val();
         var cc = $('#box3').val();
         var dd = $('#box4').val();

         $.ajax({
           type:'POST',
           url:'e.php',
           data:{a:aa,b:bb,c:cc,d:dd},
           datatype:'text',
           success:function(response)
           {
             $('#sss').html(response);
           }
         });
        });

        $('#update').click(function(){

         var aa = $('#box').val();

         $.ajax({
           type:'POST',
           url:'f.php',
           data:{a:aa},
           datatype:'text',
           success:function(response)
           {
             $('#ttt').html(response);
           }
         });
        });


});

    </script>
  </head>

  <body>
    <table>
      <tr>
        <td>name</td>
        <td><input type="text" id ="box"/></br></td>
     </tr>
      <tr>
        <td>phone</td>
        <td><input type="text" id ="box2"/></td>
     </tr>
     <tr>
       <td>city</td>
       <td><input type="text" id ="box3"/></br></td>
    </tr>
     <tr>
       <td>password</td>
       <td><input type="text" id ="box4"/></td>
    </tr>
      <tr>
        <td><input type="button" id="btm" value="ok"/></td>
        <td><input type="button" id="show" value="show"/></td>
        <td><input type="button" id="select" value="select"/></td>
        <td><input type="button" id="delete" value="delete"/></td>
        <td><input type="button" id="update" value="update"/></td>
     </tr>
    </table>
    <div id="rrr">
      <p>Stay Show!</p>
  </div>
    <div id="lll">
    <p>Stay OK!</p>
  </div>
  <div id="qqq">
  <p>Stay select!</p>
</div>
<div id="sss">
<p>Stay Delete!</p>
</div>

<div id="ttt">
<p>Stay Update!</p>
</div>
  </body>
</html>
