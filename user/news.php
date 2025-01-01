<?php
include("header.php");
include("sidebar.php");
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
    $question=$_POST['question'];
    $answer=$_POST['answer'];
   
   
    



    $sql="insert into tbl_faq(question,answer)
    value('$question','$answer')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "record inserted";
}
}
?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Manage Faq</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class=""></i> </h4>
            <div class="form-panel">
              <form role="form" enctype="multipart/form-data" method="post" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Question</label>
                  <div class="col-lg-10">
                    <input type="text" name="question" placeholder="enter your question" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>


                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Answer</label>
                  <div class="col-lg-10">
                    <input type="text" name="answer" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" name="submit" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4 style="margin-left:-195px"><i class="fa fa-angle-right"></i>Manage Faq</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Question</th>
                    <th>Answer</th>
                    <th class="hidden-phone">Delete</th>
                    <th class="hidden-phone">Edit</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
$sql="select * from tbl_faq where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['question'];?></td>
        <td><?php echo $row['answer'];?></td>
        


       
        
        
        
        <td><a href="faq.php?faq_id=<?php echo $row['faq_id'];?>">
    <img src="img/delete.png"></td>
    <td><a href="editfaq.php?faq_id=<?php echo $row['faq_id'];?>">
    <img src="img/edit.png"></td>
</tr>
<?php

}
?>

                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    



    <?php
if(isset($_GET['faq_id']))
{
    $faq_id=$_GET['faq_id'];
    $sql="update tbl_faq set status=1 where faq_id='$faq_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "record deleted";
}
}
?>


<?php
include("footer.php");
?>