<?php
    include('../../../private/config/config.php');
    require_once ("../../../private/config/database/db_connect.php");
    include('../../../private/required/dashboard/header.dashboard.php');
?>

<div class="dashboard__content">
                <div class="dashboard__admin">
                    <div class="dashboard__admin-wrap">
                        <div class="page">
                            teacher
                        </div>
                    </div>
                </div>
                <div class="main__content">
                    <div class="main__content-wrap">
                        <a href="<?=base_url();?>dashboard/products/insert_new_product.php" class="btn btn-primary">add new teacher</a>
                        <div class="all__product">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>teacher name</th>
                                    <th>image</th>
                                    <th>teacher detail</th>
                                    <th>subject</th>
                                    <th>active / de-active</th>
                                    <th>phone numebr</th>
                                    <th>email id</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    
                                        $query = "SELECT * from teachers";

                                        $result = mysqli_query($conn , $query);

                                        if(!$result){
                                            die("query failed");
                                        }
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                <tr>
                                    <td><?php echo $row['teacher_id'];?></td>
                                    <td><?php echo $row['teacher_name'];?></td>
                                    <td><img src="<?php echo base_url() . $row['teacher_image'];?>" alt="<?php echo $row['teacher_name'];?>"></a></td>
                                    
                                    <td><?php echo $row['teacher_detail'];?></td>
                                    <td><?php echo $row['teacher_subject'];?></td>
                                    <td><?php echo $row['teacher_active'];?></td>
                                    <td><?php echo $row['teacher_phone'];?></td>
                                    <td><?php echo $row['teacher_email'];?></td>
                                    <!-- <td><a href="<?php echo base_url();?>dashboard/teachers/delete_teacher.php?id=<?php echo $row['student_id'];?>">delete</a></td> -->
                                    <td><a href="<?php echo base_url();?>dashboard/teachers/update_teacher.php?id=<?php echo $row['teacher_id'];?>">edit</a></td>
                                </tr>
                                    <?php
                                        }
                                    ?>
                            </tbody>
                        </table> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    include('../../../private/required/dashboard/footer.dashboard.php');
?>