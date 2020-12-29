
     <?php
define('TITLE', 'Room');
define('PAGE', 'room');
include('header.php'); 
?> 
     <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Rooms</h1>
                        </div>

                        <!-- add stud -->
                        <div class="row mb-3">

                            <button type="button" class="btn btn-success">
                                <i class="fas fa-plus-square"></i>
                                Add Rooms</button>

                        </div>

                        <!-- Content Row -->
                        
                            <table class="table roomTable">
                                <thead>
                                    <th>Hostel Name</th>
                                    <th>ROOM No</th>
                                    <th>Room Type</th>
                                    <th>status</th>
                                </thead>
                                <tbody>

                                <?php
            
                                $sql = "SELECT * FROM `room` ";
                                $data = $conn->query($sql);
                                while($row= $data->fetch_assoc())
                                {
                                
                                echo '
                                    <tr>
                                        <td>'.$row["hname"].'</td>
                                        <td>'.$row["rno"].'</td>
                                        <td>'.$row["rtype"].'</td>';
                                if($row["status"] == 0)
                                {
                                    echo '<td><span class="text-success">Available</span></td>';
                                }
                                else if($row["status"]==1)
                                {
                                    echo ' <td><div class="text-danger">occupied</div></td>';
                                }

                                }
                                echo '</tr>'
                                    ?>
                                </tbody>
                            </table>
<?php include('footer.php') ?>