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
        
            <button type="button" class="btn btn-success">
                <i class="fas fa-plus-square"></i>
                Add student</button>
        
    </div>

    <!-- Content Row -->
    

        <!-- table -->
        <table class="table table-striped myTable" id="student_table" >
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ROOM No.</th>
                    <th scope="col">Hostel No.</th>
                    <th scope="col">COURSE</th>
                    <th scope="col">Payment Pending</th>
                    <th scope="col">Payment total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Charlotte</td>
                    <td>28</td>
                    <td>5</td>
                    <td>CHEM</td>
                    <td>₹1,053</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nayda</td>
                    <td>22</td>
                    <td>6</td>
                    <td>CHEM</td>
                    <td>₹6,882</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jack</td>
                    <td>9</td>
                    <td>5</td>
                    <td>MATH</td>
                    <td>₹5,732</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Heidi</td>
                    <td>28</td>
                    <td>6</td>
                    <td>ENG</td>
                    <td>₹4,238</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Liberty</td>
                    <td>55</td>
                    <td>1</td>
                    <td>IT</td>
                    <td>₹7,971</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sylvia</td>
                    <td>16</td>
                    <td>2</td>
                    <td>MATH</td>
                    <td>₹2,382</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Cleo</td>
                    <td>53</td>
                    <td>3</td>
                    <td>ENG</td>
                    <td>₹8,019</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Jarrod</td>
                    <td>47</td>
                    <td>1</td>
                    <td>IT</td>
                    <td>₹6,254</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Travis</td>
                    <td>45</td>
                    <td>2</td>
                    <td>IT</td>
                    <td>₹7,217</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Zenaida</td>
                    <td>24</td>
                    <td>2</td>
                    <td>CHEM</td>
                    <td>₹8,044</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Raymond</td>
                    <td>44</td>
                    <td>6</td>
                    <td>ENG</td>
                    <td>₹1,824</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Wyoming</td>
                    <td>9</td>
                    <td>4</td>
                    <td>CHEM</td>
                    <td>₹7,312</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Philip</td>
                    <td>16</td>
                    <td>3</td>
                    <td>MATH</td>
                    <td>₹8,454</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Giselle</td>
                    <td>1</td>
                    <td>5</td>
                    <td>ENG</td>
                    <td>₹4,103</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Chelsea</td>
                    <td>51</td>
                    <td>6</td>
                    <td>MATH</td>
                    <td>₹9,541</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Henry</td>
                    <td>10</td>
                    <td>1</td>
                    <td>CHEM</td>
                    <td>₹4,651</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Raja</td>
                    <td>7</td>
                    <td>4</td>
                    <td>MATH</td>
                    <td>₹3,686</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Ocean</td>
                    <td>23</td>
                    <td>2</td>
                    <td>ENG</td>
                    <td>₹9,022</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Theodore</td>
                    <td>33</td>
                    <td>2</td>
                    <td>MATH</td>
                    <td>₹1,064</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Jordan</td>
                    <td>25</td>
                    <td>1</td>
                    <td>IT</td>
                    <td>₹8,336</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Eve</td>
                    <td>18</td>
                    <td>2</td>
                    <td>IT</td>
                    <td>₹9,411</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Quinn</td>
                    <td>26</td>
                    <td>3</td>
                    <td>MATH</td>
                    <td>₹4,189</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Adria</td>
                    <td>52</td>
                    <td>5</td>
                    <td>MATH</td>
                    <td>₹2,860</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Anjolie</td>
                    <td>51</td>
                    <td>5</td>
                    <td>CHEM</td>
                    <td>₹6,650</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Jana</td>
                    <td>21</td>
                    <td>2</td>
                    <td>CHEM</td>
                    <td>₹7,232</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Mercedes</td>
                    <td>53</td>
                    <td>2</td>
                    <td>ENG</td>
                    <td>₹5,647</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Eagan</td>
                    <td>5</td>
                    <td>2</td>
                    <td>CHEM</td>
                    <td>₹1,350</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-check-circle" style=" color: green;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Perry</td>
                    <td>11</td>
                    <td>4</td>
                    <td>ENG</td>
                    <td>₹8,879</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Honorato</td>
                    <td>60</td>
                    <td>1</td>
                    <td>MATH</td>
                    <td>₹2,718</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Neil</td>
                    <td>7</td>
                    <td>6</td>
                    <td>IT</td>
                    <td>₹1,357</td>
                    <td>₹10000</td>
                    <td>
                        <i class="fas fa-clock" style=" color: red;"></i>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-success" value="">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-danger" value="">
                                <i class="fas fa-trash-alt  "></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            

        </table>
    

</div>
<!-- /.container-fluid -->

<?php include('footer.php') ?>