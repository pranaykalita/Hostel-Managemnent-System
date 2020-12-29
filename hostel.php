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
            <tr>
                <td>JBH1</td>
                <td>600</td>
                <td>30/30</td>
                <td>60</td>
                <td>5/5</td>
                <td>555</td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-info"><i class="fas fa-edit "></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>JBH2</td>
                <td>600</td>
                <td>30/30</td>
                <td>60</td>
                <td>0/10</td>
                <td>350</td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-info"><i class="fas fa-edit "></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>JBH3</td>
                <td>600</td>
                <td>30/30</td>
                <td>60</td>
                <td>10/5</td>
                <td>590</td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-info"><i class="fas fa-edit "></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

<?php include('footer.php') ?>