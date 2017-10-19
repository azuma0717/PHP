<?=  $this->Form->create(null, ['url' => ['controller'=>'users','action' => 'addtocart']]) ?>
<?=  $this->Form->hidden('uid',['value' => $this->request->session()->read('id')])?>
<?=  $this->Form->hidden('pid',['value' => $item['id']])?>
<?=  $this->Form->hidden('pname',['value' => $item['name']])?>
<?=  $this->Form->hidden('price',['value' => $item['price']])?>
<?=  $this->Form->hidden('file',['value' => $item['file']])?>
<?php
 echo'<div style="width:80%; height:auto;  margin-left:10%; float:left;">';
  echo'<div style="width:100%; height:10%;  margin-top:1%; float:left; font-weight:bold; font-size:30px;">'; echo $item['name']; echo'</div>';
    echo'<div style="width:100%; height:80%; margin-top:1%; float:left; font-size:30px;">';
      echo'<div style="width:55%; height:100%;  float:left; font-size:30px; border-style: ridge;">'; echo $this->Html->image($item['file'],array('width'=>'100%','height'=>'100%')); echo'</div>';
        echo'<div style="width:45%; height:100%;  float:left;">';
          echo'<div style="width:100%; height:100%;  float:left; font-size:15px; margin-left:5%; font-weight:bold; color:lightblack">'; echo $item['name']; echo'</div>';
          echo'<div style="width:100%; height:100%;  float:left; font-size:15px; margin-left:5%;  color:lightblack; padding-top:20px;">$'; echo $item['price']; echo'</div>';

              echo'<input type="submit" name="addtocart" class="btn-success" style="width;10px; height:35px; font-size:15px;margin-left:5%;margin-top:5%;" value="add to cart" />';


          echo'<div style="width:100%; height:100%;  float:left; font-size:15px; margin-left:5%;  color:lightblack; padding-top:40px;">'; echo $item['summary']; echo'</div>';
          echo'<div style="width:100%; height:100%;  float:left; font-size:15px; margin-left:5%;  color:lightblack; padding-top:20px;">Brand:'; echo $item['brand']; echo'</br>'; echo'Category:'; echo $item['category']; echo'</div>';
      echo'</div>';
  echo'</div>';

 echo'</div>';
 ?>
<?= $this->Form->end() ?>
