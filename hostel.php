<?php
define('TITLE', 'Hostel');
define('PAGE', 'hostel');
include('header.php'); 
?> 
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hostel</h1>
    </div>

    <!-- add stud -->
    <div class="row mb-3">

        <button type="button" class="btn btn-success">
            <i class="fas fa-plus-square"></i>
            Add Hostel</button>

    </div>

    <!-- Content Row -->

    <!-- table -->
    <table class="table hostalTable">
        <thead>
            <th>NAME</th>
            <th>capacity</th>
            <th>single|Double</th>
            <th>Room</th>
            <th>Room Avl.(single|double)</th>
            <th>Student</th>
            <th>Action</th>
        </thead>
        <tbody class="text-center ">
            <?php
            
            $sql = "SELECT * FROM `hostel` order by hid desc";
            $data = $conn->query($sql);
            while($row= $data->fetch_assoc())
            {
            $singr = $row["hrSingle"]-$row["hSoccu"];
            $doublr = $row["hrDouble"]-$row["hDoccu"];
            
            echo '
            <tr>
                <td>'.$row["hname"].'</td>
                <td>'.$row["hcap"].'</td>
                <td>'.$row["hrSingle"].'/'.$row["hrDouble"].'</td>
                <td>'.$row["havlroom"].'</td>
                <td>'.$singr.'/'.$doublr.'</td>
                <td>'.$row["havalstud"].'</td>
                
                <td>
                    <form action="" method="post">
                        <button class="btn btn-info"><i class="fas fa-edit "></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
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