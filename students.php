<?php
define('TITLE', 'Students');
define('PAGE', 'student');
include('header.php'); 
?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">STUDENTS</h1>
    </div>

    <!-- add stud -->
    <div class="row mb-3">
        
            <a href="assign.php"  class="btn btn-success">
                <i class="fas fa-plus-square"></i>
                Add student</a>
        
    </div>

    <!-- Content Row -->
    

        <!-- table -->
    
        <table class="table table-striped myTable"  width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ROOM No.</th>
                    <th scope="col">Hostel No.</th>
                    <th scope="col">COURSE</th>
                    <th scope="col">Payment Done</th>
                    <th scope="col">Payment total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
<a href="payment.php"><i class="fas fa-money-bill-alt"></i></a>
            <?php
            // <button class="btn btn-primary" value="">
                // 
                // </button>
            $sql = "SELECT * FROM `student`";
            $data = $conn->query($sql);
            while($row= $data->fetch_assoc()){
            echo '
            <tr>
            <td>'.$row["sid"].'</td>
            <td>'.$row["sname"].'</td>
            <td>'.$row["roomno"].'</td>
            <td>'.$row["Hname"].'</td>
            <td>'.$row["course"].'</td>
            <td>₹'.$row["cuurentpayment"].'</td>
            <td>₹'.$row["totalpayment"].'</td>
            <td>';

            if($row["paystatus"] == 1)
            {
                echo '<i class="fas fa-check-circle" style=" color: green;"></i>';
            }else if($row["paystatus"] == 0)
            {
                echo '<i class="fas fa-clock" style=" color: red;"></i>';
            }
            echo '</td>';
            echo '<td>
                <form action="" method="post">';

            if($row["paystatus"] == 0){
             echo '
                <a href="payment.php" class="btn btn-primary"><i class="fas fa-money-bill-alt"></i></a>
                ';

            }    
            echo '
                    <button class="btn btn-success" value="">
                        <i class="fas fa-info-circle"></i>
                    </button>
                    <button class="btn btn-danger" value="">
                        <i class="fas fa-trash-alt  "></i>
                    </button>
                </form>
            </td>
            </tr>
            ';
        }
            ?>
               
            </tbody>
            

        </table>
   

</div>
<!-- /.container-fluid -->

<?php include('footer.php') ?>