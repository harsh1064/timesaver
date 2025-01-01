
    <?php
    include("header.php");
    include("sidebar.php");
    ?>
    
    
    <?php
  include("config.php");
  $query1="select * from tbl_category where status=0";
  $result1=mysqli_query($con,$query1);
  $count=mysqli_num_rows($result1);

  $query2="select * from tbl_service where status=0";
  $result2=mysqli_query($con,$query2);
  $count1=mysqli_num_rows($result2);

  $query3="select * from razorpay";
  $result3=mysqli_query($con,$query3);
  $count2=mysqli_num_rows($result3);

  ?>
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
  
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head" >
              <h3 style="color:black"> WELCOME TO MY ADMIN PANEL </h3>
          </div>

            <img src="img/u1.jpg" style="width:133%;height:532px ">
          </div>


          </div>
          <!-- /col-lg-3 -->
        </div>

        <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5> Category</h5>
                  </div>
                  <canvas id="serverstatus01" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 70,
                        color: "#FF6B6B"
                      },
                      {
                        value: 30,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p><br/></p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h3 style="    margin-left: -214px;
    font-size: 27px">Total= <?php echo $count;?>  </h3>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Services </h5>
                  </div>
                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#1c9ca7"
                      },
                      {
                        value: 40,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <p></p>
                  <footer>
                    <div class="pull-left">
                      <h5><i class=""></i> </h5>
                    </div>
                    <div class="pull-right">
                      <h4 style="font-size: 27px;
    margin-right: 140px">Total=<?php echo $count1;?></h4>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5> Razorpay payment</h5>
                  </div>
                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                  </div>
                  <h4 style="font-size: 27px;    margin-top: 47px;
    margin-right: -8px">Total=<?php echo $count2;?></h4>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    
    



    <!--footer end-->
  <?php
  include("footer.php");
  ?>
