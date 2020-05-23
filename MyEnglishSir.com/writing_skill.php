<?php 
    include('connection/database_connection.php');
    $conn= OpenCon();
    //session_start();   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Writing Skill - My English Sir</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               <a class="navbar-brand" href="index.html">
                    <img src="mylogo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li><a href="index.html">Home</a></li>
                    <li ><a href="about.html">About</a></li>
                   	    <li><a href="services.html">Services</a></li>
                    <!-- <li><a href="price.html">Price</a></li> -->
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Study Materials<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="grammar.php">Grammar</a></li>
                            <li class="active"><a href="writing_skill.php">Writing Skills</a></li>
                            <li><a href="communicative.php">Communicative English</a></li>
                            <li><a href="literature.php">Literature</a></li>
                        </ul>
                    </li>
                     <li><a href="videos.html">Video Classes</a></li>
                    <li><a href="contact.html">Helpline</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

 	<header id="head" class="secondary">
            <div class="container">
                    <h1>Writing Skills</h1>
                   <!--  <p>Our team helps you to be exepert in english</p> -->
                </div>
    </header>


    <!-- container -->
    <section class="container mt-10">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-12 maincontent">
                <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <?php

                $sql="select * from pdf_details where subject='2' order by id desc";
                $result=mysqli_query($conn, $sql);
                $row_num=mysqli_num_rows($result);
                if($row_num > 0)
                {                    
                    for($i=0; $i<$row_num;$i++)
                    {
                        if($i!=0 && $i%5 ==0)
                        {
                            echo '<div class="col-sm-1 col-md-1 col-lg-1"></div>';
                        }
                        $row=mysqli_fetch_assoc($result);
                        echo '<div class="col-sm-2 col-md-2 col-lg-2 text-center downloadDiv" >
                            <div class="col-sm-12" style="padding: 0px;height: 50px">
                            <p class="text-center">'.$row["description"].'</p>
                            </div>
                            <div class="col-sm-12" style="padding: 0px;">
                            <a class="downloadA" href="assets/pdf/'.$row["pdf_file_name"].'" target="_blank" download="'.$row["pdf_file_name"].'" onclick="test(1)">
                                    <i class="fa fa-download"></i> Download (<span id="downloadCounter_1">0</span>)
                                </a>
                            </div>                  
                        </div>';
                    }
                }
            ?>

                
                
            
            </section>
            <!-- /main -->

            <!-- Sidebar -->
            
            <!-- /Sidebar -->

        </div>
    </section>
    <!-- /container -->
   
  <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                List of Technology 
              </a>
            </li>
            <li><a href="#">
                List of Business
              </a>
            </li>
            <li><a href="#">
                List of Photography
              </a>
            </li>
            <li><a href="#">
               List of Language
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Products Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Individual Plans  </a>
            </li>
            <li><a href="#">
                Business Plans
              </a>
            </li>
            <li><a href="#">
                Free Trial
              </a>
            </li>
            <li><a href="#">
                Academic
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <!-- <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p> -->
            <div class="contact-info"> 
           <i class="fa fa-map-marker"></i>KIIT Square Bhubaneswar<br>
            <i class="fa fa-phone"></i>+919348867673<br>
            <i class="fa fa-whatsapp></i>+919937601798<br>
             <i class="fa fa-envelope-o"></i> info@myenglishsir.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<!-- <!-- <!-- <a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>  -->
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
                                <a href="about.html">About</a> |
                                <a href="services.html">Services</a> |
                                <a href="grammar.php">Grammar</a> |
                                <a href="writing_skill.php">Writing Skills</a> |
                                <a href="communicative.php">Communicative English</a> |
                                <a href="literature.php">Literature</a> |
                                <a href="videos.html">Videos</a> |
                                <a href="contact.html">Help Line</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; My English Sir 2020. Made by<a href="http://bitWebo.com">bitWebo</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
        function test(id){
        //alert("aa");        
        var counterValue = $("#downloadCounter_"+id).text();
        counterValue=parseInt(counterValue);
        //alert(counterValue);
        if(isNaN(counterValue))
        {
        counterValue=0;
        }
        var new_value=counterValue+1;
        $("#downloadCounter_1").text(new_value);
        }
    </script>
</body>
</html>
