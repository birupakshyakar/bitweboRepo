<?php
    include 'connection/database_connection.php';
    $conn = OpenCon();
    session_start();
    if(isset($_SESSION['user_type']))
    {
        header('Location: admin.php');
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Login - My English Sir</title>
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
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               <a class="navbar-brand" href="index.html">
                    <img src="mylogo.png" alt="Techro HTML5 template"></a>
            </div>            
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <header id="head" class="secondary">
        <div class="container">
            <h1>Login</h1>                  
        </div>
    </header>
        
           
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">                             
                <div class="text-center login-container" >
                    <!-- <img src="img/icon-img/avatar1.png" style="text-align:center;border-radius: 50%;width:20%"> -->
                   
                    <input id="userid" class="loginInput" type="text" name="userid" placeholder="Enter your Userid" /><br><br>
                    <input id="password" class="loginInput" type="password" name="password" placeholder="Enter your password" required /><br>
                    <button class="btn btn-outline-primary" id="userLogin" >Login</button>
                    <p id="loginResponse" style="color: red;"></p> 
                </div>                              
            </div>                            
        </div>                
    </div>
  
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
    $('#password').keypress(function(e){
        if(e.which == 13){//Enter key pressed
            $('#userLogin').click();//Trigger search button click event
        }
    });   
    $("#userLogin").on("click", function()
    {
        var username = $("#userid").val();
        var password = $("#password").val();
        if(username.trim() =="" || password.trim() =="" )
        {
            $("#loginResponse").text("Please enter username and password");
            return false;
        }
        //alert("ok_"+username+"_kdsjfkjg_"+password);
        var data = {};
        data["userid"]= username;
        data["password"]=password;
        console.log(data);    
        $.ajax({
            url : "login_validator.php",
            type : "POST" ,
            data : data,
            dataType : "json",
            success : function(response){
                console.log(response);
                //alert(response);
                if(response["message"]=="success")
                {
                    //alert(response["message"]);
                    window.location="admin.php";                        

                }
                else
                {               
                    $("#loginResponse").text("Invalid Login Details");
                    $("#userid").val("");
                    $("#password").val("");
                    $("#userid").focus();
                }
            }
        });
    });
</script>             
            
            
           
       
        
        
       
        
    </body>
</html>
