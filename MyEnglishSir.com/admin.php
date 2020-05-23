<?php 
    include('connection/database_connection.php');
    $conn = OpenCon();
    session_start();    
   
    if(!isset($_SESSION['user_type']))
        {
            header('Location: login.php');
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Admin - My English Sir</title>
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
                    <li ><a href="logout.php">Logout</a></li>                   	    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

 	<header id="head" class="secondary">
            <div class="container">
                <h1>Admin</h1>                   
            </div>
    </header>


    <!-- container -->
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 col-md-12" style="margin-top:50px">
                <h3>Upload New Document</h3>
                <label>Caption</label><br>
                <input type="text" id="caption" style="width:300px;height: 30px" /><br>
                <label>New PDF</label>
                <input type="file" id="pdfFile" accept="application/pdf" />
                <button id="uploadSubmit" class="btn btn-info" style="margin-top:10px">Upload</button><br><br>
                <i class="fa fa-spinner fa-spin fa-2x uploadLoader" style="color: green;display: none"></i><i class="uploadLoader" style="color: green;display: none;">Uploading...</i>
                <p id="uploadMsg"></p>
            </div>
            
        </div>
    </div>
    <!-- /container -->
   
<footer id="footer"> 
    <div class="container">
        <div class="row">
            <div class="footerbottom">    
                <div class="col-md-3 col-sm-6"> 
            	   <div class="footerwidget"> 
                        <h4>Contact</h4> 
                        <!-- <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p> -->
                        <div class="contact-info"> 
                            <i class="fa fa-map-marker"></i>KIIT Square Bhubaneswar<br>
                            <i class="fa fa-phone"></i>+919348867673<br>
                            <i class="fa fa-whatsapp"></i>+919937601798<br>
                            <i class="fa fa-envelope-o"></i> info@myenglishsir.com
                        </div> 
                    </div><!-- end widget --> 
                </div>
            </div>
        </div>
		<div class="social text-center">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>				
		</div>

		<div class="clear"></div>
			<!--CLEAR FLOATS-->
	</div>
	<div class="footer2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="text-right">
							Copyright &copy; My English Sir 2020. Made by<a href="http://bitWebo.com">bitWebo</a>
						</p>
					</div>
				</div>
			</div>				
		</div>
	</div>
</footer>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">        
       $("#uploadSubmit").on('click', function () {
            $(".uploadLoader").show();
            if($('#pdfFile').val()!="" && $("#caption").val()!="")
            {
                var file_type=$('#pdfFile').prop('files')[0].type;                
                if(file_type=="application/pdf")
                {
                    $("#uploadMsg").hide();
                    var pdf_file = $('#pdfFile').prop('files')[0];
                    var caption = $("#caption").val();
                    var form_data = new FormData();
                    form_data.append('pdf_file', pdf_file);
                    form_data.append('caption', caption);
                    $.ajax({
                        url: "insert_pdf.php",
                        type: "POST",
                        data: form_data ,
                        cache: false,
                        contentType: false,
                        processData: false,                        
                        enctype : 'multipart/form-data' ,
                        success: function (data) {
                            $(".uploadLoader").hide();
                            if(data.trim()=="success")
                            {
                                $("#uploadMsg").show();
                                $("#uploadMsg").text("PDF file uploaded successfully.");
                                $("#uploadMsg").css('color','green');
                            }
                            else
                            {
                                $("#uploadMsg").show();
                                $("#uploadMsg").text("PDF file uploaded Failed.");
                                $("#uploadMsg").css('color','red');
                            }
                            
                            //alert(data);
                        }


                    });

                }
                else
                {
                    $(".uploadLoader").hide();
                    $("#uploadMsg").show();
                    $("#uploadMsg").text("Please select pdf file");
                    $("#uploadMsg").css('color','red');
                }
            }
            else
            {
                $(".uploadLoader").hide();
                $("#uploadMsg").show();
                $("#uploadMsg").text("Please select PDF file and Fill Caption");
                $("#uploadMsg").css('color','red');
            }
          
       });
       
    </script>
</body>
</html>
