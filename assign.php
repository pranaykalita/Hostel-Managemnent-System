<?php
define('TITLE', 'Assign Student');
define('PAGE', 'assign');
include('header.php'); 
?> 
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Assign Students</h1>
</div>

<!-- add stud -->
<div class="text-center font-weight-bold">
    <p class="align-center text-danger">student assigned succesfully</p>
    
</div>

<div class="card rounded shadow m-2">
    <form class="p-4" action="" method="post">
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text"  class="form-control" name="name" id="name">
       </div>
       <div class="form-group">
           <label for="name">Course</label>
           <select class="form-control" name="" id="">
            <option value="">ENG</option>
            <option value="">CHEM</option>
            <option value="">MATH</option>
            <option value="">IT</option>
        </select>
       </div>
       <div class="form-group">
           <label for="name">RollNo</label>
           <input type="text" class="form-control" name="name" id="name">
       </div>
       <div class="form-group">
           <label for="name">Hostel</label>
           <select class="form-control" name="" id="">
               <option value="">HB1</option>
               <option value="">HB2</option>
               <option value="">HB3</option>
               <option value="">HB4</option>
           </select>
       </div>
       <div class="form-group">
           <label for="name">Room Type</label>
           <select class="form-control" name="" id="">
               <option value="">single</option>
               <option value="">Double</option>
            </select>
       </div>
       <div class="form-group">
           <label for="name">Room No</label>
           <select name="" class="form-control" id="">
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3</option>
               <option value="">4</option>
               <option value="">5</option>
           </select>
       </div>
       <div class="form-group">
           <label for="name">Book Month</label>
           <input type="text" class="form-control" name="name" id="name">
       </div>
       <div class="text-center">
       <input class="btn align-center btn-success" value="Assign Student" ></input>
       <input class="btn align-center btn-danger" value="Close"></input>
    </div>
    </form>
</div>
<?php include('footer.php') ?>