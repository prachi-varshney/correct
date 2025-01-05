<?php 
include_once('p.php');


function tableList(){
    $obj = new Database();
    $query = "select * from emp";
    $data = $obj->getData($query);
    // echo "<pre>";print_r($data['data']);die;
    // $res[] = $data['data'];
    if($data['success'] == true)
    ?> 
    <table width=100% border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
            </tr>
       
    <?php
    foreach($data['data'] as $val){
        ?>
             <tr>
                <td><?php echo $val['id'] ?></td>
                <td><?php echo $val['emp_name'] ?></td>
                <td><?php echo $val['emp_dob'] ?></td>
            </tr>
        <?php
    }
?>
</table> <?php
    // print_r($data);die;
}

tableList()
?>