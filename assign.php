<?php
define('TITLE', 'Assign Student');
define('PAGE', 'assign');
include('header.php'); 


$msg = '';
$rprice = '0';
$paymdome = '0';


if(isset($_REQUEST['assigns'])){

    $photo = $_REQUEST['userpic'];

    $sname = $_REQUEST['Sname'];
    $phn = $_REQUEST['phn'];
    $lgur = $_REQUEST['lgname'];
    $fname = $_REQUEST['fname'];
    $add = $_REQUEST['add'];
    $gen = $_REQUEST['gender'];
    $course = $_REQUEST['course'];
    $rno = $_REQUEST['rno'];
    $hname = $_REQUEST['hst'];
    $rType = $_REQUEST['rtype'];
    $RoomN = $_REQUEST['roomno'];

    $Bfrm = $_REQUEST['bmonthFr'].'-01';
    $Bto = $_REQUEST['bmonthTo'] . '-31';

    // calculate month for total ammount
    $date1 =$Bfrm;
    $date2 = $Bto;
    $d1=new DateTime($date2); 
    $d2=new DateTime($date1);                                  
    $Months = $d2->diff($d1); 

    $month = (($Months->y) * 12) + ($Months->m) + 1;

    $sql = "SELECT * FROM `hostel` WHERE hname = '{$hname}'"; 
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();

    if($rType == 'Single'){
        $rprice = $row['sroomprice'];
     }
    else if($rType == 'Double'){
        $rprice = $row['droomprice'];
     }

    $totpayment = $rprice * $month;
    
   
    
    if(($sname == "") || ($course == "") ||($rno == "") ||($hname == "") ||($rType == "") ||($RoomN == "") ||($Bfrm == "") ||($Bto == ""))
    {
        $msg = 'Fill all inputs';
        
    }
    else{
       $sql = "INSERT INTO `student`( `sname`, `phn`, `lgname`, `fname`, `addrs`, `gender`, `course`, `roll`, `hname`, `RoomTyp`, `RoomNo`, `Bfrm`, `Bto`, `TotalPayment`, `Paymentdone`, `image`) 
       VALUES ('$sname','$phn','$lgur','$fname','$add','$gen','$course','$rno','$hname','$rType','$RoomN','$Bfrm','$Bto','$totpayment', '$paymdome','$photo')";
        if($conn->query($sql)== TRUE){
            
            $msg = 'Student Assigned succesfully';
        }
    }
}


?> 
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Assign Students</h1>
</div>

<!-- add stud -->
<div class="text-center font-weight-bold">
    <p class="align-center text-danger"><?php echo $msg; ?></p>
    
</div>

<div class="card rounded shadow m-2">
    <form class="p-4" action="" method="post">
    <div class="form-group">
           <label for="name">profile picture</label>
           <input type="file"  class="form-control" name="userpic" id="userpic">
       </div>
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text"  class="form-control" name="Sname" id="Sname">
       </div>
       <div class="form-group">
           <label for="name">Phone</label>
           <input type="number"  class="form-control" name="phn" id="phn" >
       </div>
       <div class="form-group">
           <label for="name">Local Gurdain</label>
           <input type="text"  class="form-control" name="lgname" id="lgname">
       </div>
       <div class="form-group">
           <label for="name">Father</label>
           <input type="text"  class="form-control" name="fname" id="fname">
       </div>
       <div class="form-group">
           <label for="name">Address</label>
           <input type="text"  class="form-control" name="add" id="add" style="height: 80px;">
       </div>
       <div class="form-group">
           <label for="rtype">Gender</label>
           <select class="form-control" name="gender" >
               <option name="sing">Male</option>
               <option name="doub">Female</option>
            </select>
       </div>

       <div class="form-group">
           <label for="course">Course</label>
           <select class="form-control" name="course">
            <?php
            $sql = "SELECT * FROM `course`";
            $data = $conn->query($sql);
            while ($row = $data->fetch_assoc()){
                echo '<option name="cname">'.$row["cname"].'</option>';
            } 
            ?>
        </select>
       </div>
       <div class="form-group">
           <label for="rno">RollNo</label>
           <input type="number" class="form-control" name="rno" id="rno">
       </div>
       <div class="form-group">
           <label for="name">Hostel</label>
           <select class="form-control" name="hst" id="">
           <?php
            $sql = "SELECT * FROM `hostel`";
            $data = $conn->query($sql);
            while ($row = $data->fetch_assoc()){
                echo '<option name="hst">'.$row["hname"].'</option>';
            } 
            ?>
           </select>
       </div>
       <div class="form-group">
           <label for="rtype">Room Type</label>
           <select class="form-control" name="rtype" id="">
               <option name="sing">Single</option>
               <option name="doub">Double</option>
            </select>
       </div>
       <div class="form-group">
           <label for="roomno">Room No</label>
           <select name="roomno" class="form-control" id="">
               <option >1</option>
               <option >2</option>
               <option >3</option>
               <option >4</option>
               <option >5</option>
           </select>
       </div>
       <div class="form-group">
          <label for="bmonthFr">Book Month</label><br>
           <label >From</label>
           <input type="month" class="form-control" name="bmonthFr" id="bmonthFr" >
           <label for="bmonthTo" >To</label>
           <input type="month" class="form-control" name="bmonthTo" id="bmonthTo" >
       </div>
       <div class="text-center">
       <input class="btn align-center btn-success" value="Assign Student" name="assigns" type="submit"></input>
       <a href="students.php" class="btn align-center btn-danger" >Back</a>
    </div>
    </form>
</div>
<script>
    
</script>
<?php include('footer.php') ?>