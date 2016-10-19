<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title; ?></h1>
<?php

//print_r($person);
//echo '<br>';
foreach ($person as $key=> $item) {
//echo $key.':'.$item['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';
}
echo '<hr>';
?>

  <table class="table" >
    <thead>
      <tr class="success">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>จดหมายเหตุกรุงศรี</th>
      </tr>
    </thead>
    <tbody>
        <?php     
        foreach ($person as $key => $value){
        echo '<tr>';
        echo '<td>'.($key+1).'</td>';
        echo '<td>'.$value['fname'].'</td>';
        echo '<td>'.$value['lname'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '</tr>';
        }
         ?>
    </tbody>
  </table>
</div>
