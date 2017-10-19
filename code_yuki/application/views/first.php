<html>
  <head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<script type='text/javascript' src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  </head>
  <body>
    <div style="width:100%; height:100%;">
      <div style="width:100%; height:20%">
          <div style="width:15%; height:100%; background-color:blue; float:left"><img src="<?php echo base_url();?>assets/img/4.jpg" style="width:100%; height:100%;"></div>
          <div style="width:85%; height:100%; background-color:yellow;  float:left;"></div>
      </div>

    <div style="width:100%; height:80%">
      <div style="width:20%; height:100%; float:right">
          <div style="width:100%; height:50%; background-color:red; float:right"></div>
          <div style="width:100%; height:50%; background-color:blue;float:right"></div>
      </div>
          <div style="width:80%; height:100%; background-color:green;">
						<form action="<?php echo base_url();?>index.php/raj/add" method="POST">
								<table>
									<tbody>
										<tr>
											 <td><div class="name"><p>Name<br></p></div></td>
											 <td><input type="text" name="name"></td>
										</tr>
										<tr>
											 <td><div class="phone"><p>Phone<br></p></div></td>
											 <td><input type="text" name="phone"></td>
										</tr>
										<tr>
											<td><div class="email"><p>email</p></div></td>
											<td><input type="text" name="email"></td>
									 </tr>
										<tr>
											<td><div class="password"><p>password</p></div></td>
											<td><input type="text" name="password"></td>
									 </tr>
									 <tr>
											<td><input type="submit" class="submit" value="submit" name="submit"></td>
									 </tr>
								</tbody></table>
						</form>
					</div>
     </div>

     <div style="width:100%; height:5%">
       <div style="width:25%; height:100%; background-color:yellow; float:left;"></div>
       <div style="width:25%; height:100%; background-color:pink; float:left;"></div>
       <div style="width:30%; height:100%; background-color:red; float:left"></div>
       <div style="width:20%; height:100%; background-color:green; float:left;"></div>

    </div>

  </div>
 </body>
</html>
