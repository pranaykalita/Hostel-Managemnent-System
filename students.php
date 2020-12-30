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
    
        <table class="table table-striped myTable"  width="100%" cellspacing="0" style="font-size: 13px;" >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ROOM</th>
                    <th scope="col">Hostel</th>
                    <th scope="col">years</th>
                    <th scope="col">COURSE</th>
                    <th scope="col">Payment Done</th>
                    <th scope="col">Payment total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // <button class="btn btn-primary" value="">
                // 
                // </button>
            $sql = "SELECT * FROM `student`";
            $data = $conn->query($sql);
           
            while($row= $data->fetch_assoc()){
            $pendingpayment = $row["TotalPayment"]-$row["Paymentdone"];
              // calculate staying month  
            $date1 = $row["Bfrm"];
            $date2 = $row["Bto"];
            $d1=new DateTime($date2); 
            $d2=new DateTime($date1);                                  
            $Months = $d2->diff($d1); 

            $month = (($Months->y) * 12) + ($Months->m) + 1;
            echo '
            <tr>
            <td>'.$row["sid"].'</td>
            <td>'.$row["sname"].'</td>
            <td>'.$row["RoomNo"].'</td>
            <td>'.$row["hname"].'</td>
            <td>'.$month.'</td>
            <td>'.$row["course"].'</td>
            <td>₹100</td>
            <td>₹'.$row["TotalPayment"].'</td>
            <td>';

            if($row["Paymentdone"] == $row["TotalPayment"])
            {
                echo '<i class="fas fa-check-circle" style=" color: green;"></i>';
            }else if($row["Paymentdone"] < $row["TotalPayment"])
            {
                echo '<i class="fas fa-clock" style=" color: red;"></i>';
            }
            echo '</td>';
            if($row["Paymentdone"] == $row["TotalPayment"]){
                echo '
                <td>
                        <form action="edithostel.php" method="post" class="d-inline">
                        <input type="hidden" name="id" value='.$row["sid"].'>
                            <button class="btn btn-success">
                            <i class="fas fa-info-circle "></i>
                            </button>
                        </form>
    
                        <form action="" method="post" class="d-inline">
                            <input type="hidden" name="id" value='.$row["sid"].'>
                            <button class="btn btn-danger" name="delet">
                            <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                ';
            }
            else if($row["Paymentdone"] < $row["TotalPayment"]){
                echo '
                <td>
                        <form action="payment.php" method="post" class="d-inline">
                        <input type="hidden" name="id" value='.$row["sid"].'>
                            <button class="btn btn-primary">
                            <i class="fas fa-money-bill-alt "></i>
                            </button>
                        </form>
                        <form action="edithostel.php" method="post" class="d-inline">
                        <input type="hidden" name="id" value='.$row["sid"].'>
                            <button class="btn btn-success">
                            <i class="fas fa-info-circle "></i>
                            </button>
                        </form>
    
                        <form action="" method="post" class="d-inline">
                            <input type="hidden" name="id" value='.$row["sid"].'>
                            <button class="btn btn-danger" name="delet">
                            <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                ';
            }
            
        }
            ?>
               
            </tbody>
            

        </table>
   

</div>
<!-- /.container-fluid -->

<?php include('footer.php') ?>