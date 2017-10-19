<h1>Users List</h1>
<table>
   <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Img</th>
   </tr>
   <?php
  foreach ($uusers as $user):
   ?>
   <tr>

       <td><?php echo $user['username']; ?></td>
       <td><?php echo $user['email']; ?></td>
       <td><?php echo $user['phone']; ?></td>
       <td><?php echo $this->Html->image($user['imgpath']);?></td>

   </tr>
   <?php endforeach; ?>
   <?php unset($user); ?>
</table>
