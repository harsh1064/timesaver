<?php
include("header.php");
?>

<?php
include("config.php");
if(isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $amount=$_POST['amount'];
    $card_type=$_POST['card_type'];
    $name_card=$_POST['name_card'];
    $card_no=$_POST['card_no'];
    
    $expiry_date=$_POST['expiry_date'];
    
    $sql="insert into tbl_pay(email,amount,card_type,name_card,card_no,expiry_date)
    value('$user','$amount','$card_type','$name_card','$card_no','$expiry_date')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('payment completed.');</script>";
    echo "<script language='javascript'>location.href='bookingstatus.php';</script>";
    //echo "record inserted";
}
}
?>

<?php
include("config.php");
global $service_id,$total_price;
$sql= "select * from tbl_service";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{

$total_price=$row['total_price'];

}
?>

<B><h3 style=    "margin-left: 562px;
    font-size: 42px;
    top: 106px;
    color: navy"><i class=""></i>payment </h3></B><br>
<!-- Login Form -->
<img src="images/visa3.png" alt="" / style="margin-left:766px">
<div class="login-form" style="width:71%;margin-left:207px;height:655px;top:29px">
                        <!--Login Form--><br>
                        <form method="post">
                        
                        <div class="form-group">
                               
                                <input type="$text" name="email"  value="<?php echo $user;?>" placeholder="   " /hidden>
                            
                            </div>
                            
                            <div class="form-group">
                                <label> amount</label>
                                <input type="text" name="amount"value="<?php echo $total_price;?>" placeholder=" amount  " required>
                            
                            </div>
                            
                            <div class="form-group">
                                <label> card type</label><br>
                                <select name="card_type"style="    width: 100%;
    height: 45px">
                    <option value="select card type">select card type</option>
                    <option value="visa">visa</option>
                    <option value="master card">master card</option>
                </select>
                            </div>
                    
                            <div class="form-group">
                                <label>Name of card</label>
                                <input type="text" name="name_card" placeholder="name of card "  required>
                            
                            </div>
                            <script type="text/javascript">
      var specialKeys = new Array();
     specialKeys.push(8); //
     function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
     var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
	  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                    
                            <div class="form-group">
                                <label>card number</label>
                                <input type="text" name="card_no" placeholder="enter number(input only 0-15 digits) " minlength="16" maxlength="16" onkeypress="return IsNumeric(event);"ondrop="return false;" onpaste="return false;" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Expiry date</label>
                                <input type="month" name="expiry_date" placeholder="expiry date  " required style="border:1px solid black;margin-left:18px">
                            </div>

                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="height: 53px;top:6px">Submit</button>
                                    </div>
                                </div>
                        </form>    
                    </div>
                    <!--End Login Form -->
                </div>
                <br>
                <br>
                <br>

<?php
include("footer.php");
?>