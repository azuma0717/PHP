<?php  $session = $this->request->session();
       $session->read('username');
       $session->read('id');
?>

<h1>Hi <? echo $session->read('username');?></h1>
<table>
   <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Img</th>
   </tr>
   <?php foreach ($uusers as $user):
    if($user['id'] == $session->read('id'))
    {
   echo'<tr>';
       echo'<td>'; echo $user['username']; echo'</td>';
       echo'<td>'; echo $user['email']; echo'</td>';
       echo'<td>'; echo $user['phone']; echo'</td>';
       echo'<td>'; echo $this->Html->image($user['imgpath']); echo'</td>';
   echo'</tr>';
     }

   endforeach; ?>
   <?php unset($user); ?>
</table>
