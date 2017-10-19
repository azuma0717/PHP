<h1>Users List</h1>
<table>
   <tr>
       <th>Id</th>
       <th>First Name</th>
       <th>Email</th>
       <th>Password</th>
       <th>Action</th>
       <th>Delete</th>

   </tr>
   <?php
  foreach ($users as $user):
   ?>
   <tr>
       <td><?php echo $user['id']; ?></td>
       <td><?php echo $user['username']; ?></td>
       <td><?php echo $user['email']; ?></td>
       <td><?php echo $user['password']; ?></td>
       <td><?php echo $this->Html->link('Edit',array('action'=>'edit',$user['id'])); ?></td>
       <td><?php echo $this->Html->link('Delete',array('action'=>'delete',$user['id'])); ?></td>
   </tr>
   <?php endforeach; ?>
   <?php unset($user); ?>
</table>
