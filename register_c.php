<html>
<?
include "connect.php";
?>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>ARIN Grader - Just a grader..</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body >

	<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
            <div class="iconmelon">
              <svg viewBox="0 0 32 32">
                <g filter="">
                  <use xlink:href="#git"></use>
                </g>
              </svg>
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading" style="background-color:#f8f4f9">
                <div class="panel-title text-center">Create Classroom</div>
            </div>     

            <div class="panel-body" style="background-color:white">

                <form name="form1" id="form" action="in_regis_c.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="Teacher - Username">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="classname" type="text" class="form-control" name="classname" value="" placeholder="Classname">                                        
                    </div>

                    <div>
                        <? 
                            $strClassNo = mysql_query("SELECT * FROM class");
                            $ClassNo = 1;
                            while($Fetch = mysql_fetch_array($strClassNo))
                            {
                                $ClassNo++;
                            }   
                            ?><p>Your Class No : <?echo $ClassNo;?> </p>

                     </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-6 controls">
                            <button type="submit" name="submit" class="btn btn-default pull-right">Submit</button>                          
                        </div>
                    </form>
                    <form action="index.html">
                    	<div class="col-sm-6 controls">
                    		<button class="btn btn-default pull-left">Go Back</button>
                    	</div>
                    </form>
                       

            </div>                     
        </div>  
    </div>
</div>


	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>