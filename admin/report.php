<?php
include("config.php");
$sql = "SELECT * from tbl_booking";
$run = mysqli_query($con,$sql);
$start_date = "";
$end_date = "";
if(isset($_POST['Submit_date'])){

    $start_date = $_POST['Start_date'];
    $end_date = $_POST['End_date'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<style>
    @media print{
        .bookingform{
            display: none;
        }
    }
</style>
</head>
<body>
    <section style="padding-top: 100px;;">
        <div class="container">
            <div class="row">
                <h1>Data Filter Between Two Dates </h1>
                <form method="post" action="report.php">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" name="Start_date" value="<?php echo $start_date;?>" class="form-control" >
                        </div>
                    </div><br>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" name="End_date" value="<?php echo $end_date;?>" class="form-control" >
                        </div>
                    </div><br>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="submit" name="Submit_date" class="btn btn-primary" >
                            <?php if(isset($_POST['Submit_date'])){ ?>
                                <a href="report.php" name="reset" class="btn btn-primary">Reset</a>
                            <?php } ?>
                        </div>
                    </div><br>
                </form>
                <?php
                    if(isset($_POST['Submit_date'])){

                        //$start_date = $_POST['Start_date'];
                        //$end_date = $_POST['End_date'];
                       // echo "SELECT * from tbl_booking where date between '$start_date' and '$end_date' "; exit;
                        //$query =  mysqli_query($con,"SELECT * from tbl_booking where date between '$start_date' and '$end_date' ");
                        $query = "SELECT * from tbl_booking where date >= '$start_date 00:00:00' and date <= '$end_date 23:59:00' ";
                        $query =  mysqli_query($con,$query);
                        if(mysqli_num_rows($query)>0){ ?>

                           

                                    <div class="col-lg-12">
                                        <table class="table table-striped">
                                        <thead>
                                            <th>date</th>
                                            <th>service name</th>
                                            <th>email</th>
                                            <th>total price</th>
                                        </thead>
                                        <tbody>
                                            <?php  foreach($query as $value){  ?>
                                            <tr>
                                                <td><?=$value['date']?></td>
                                                <td><?=$value['service_name']?></td>
                                                <td><?=$value['email']?></td>
                                                <td><?=$value['total_price']?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        </table>
                                    </div>

                           <?php }
                    }else{

                    
                ?>
                
                <div class="col-lg-12">
                    <table class="table table-stripped">
                        <thead>
                            <th>date</th>
                            <th>service name</th>
                            <th>email</th>
                            <th>total price</th>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                                while($row= mysqli_fetch_assoc($run)){
                                    
                                    $date = $row['date'];
                                    $service = $row['service_name'];
                                    $email = $row['email'];
                                    $total = $row['total_price'];
                               
                        ?>  
                        <tr>
                            <td><?=$date;?></td>
                            <td><?=$service;?></td>
                            <td><?=$email;?></td>
                            <td><?=$total;?></td>

                        </tr>                    
                            <?php $i++;
                             }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
        
</body>
</html>