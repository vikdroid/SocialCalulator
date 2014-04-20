<!DOCTYPE html>
<html>
<head>
	<title>Social Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="main">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Social Calculator</a>
      		</div>
    	</nav>
    	<div id="error">
    	
    	</div>
      <center>
    	<div id="calc" style="padding-bottom: 20px;">
    		<form class="form-inline" action="action.php" method="post" role="form">
  				<div class="form-group">
    				<input type="text" class="form-control" id="val1" name="val1" placeholder="Enter number">
  				</div>
  				<select class="btn" name="optn" id="optn">
  					<option value="action">Action</option>
  					<option value="+">+</option>
  					<option value="-">-</option>
  					<option value="*">*</option>
  					<option value="/">/</option>
				</select>
  				<div class="form-group">
    				<input type="text" class="form-control" id="val2" name="val2" placeholder="Enter number">
  				</div>
  				<div class="form-group">
  					<button type="submit" class="btn btn-default" name="action" onclick="return validate();">=</button>
  				</div>
  				<div class="form-group">
  					<input type="text" class="form-control" id="result" name="result" placeholder="Result">
  				</div>
			</form>

    	</div>
      </center>

    	<div class="panel panel-info text-center">
  			<div class="panel-heading">Live Calc feed from the top down</div>
  				<!-- <div class="panel-body">
    				Panel content
  				</div> -->
          <ul class="list-group" id="history">
         <!--  <?php 
          /*while($fetch=mysql_fetch_array($r))
          {
            echo "<li class='list-group-item'>".$fetch['val1'].$fetch['action'].$fetch['val2']. " = " .$fetch['result']." ( IP ".$fetch['ip']. " , ".$fetch['datetime'].")"."</li>";
          }*/
          ?> -->
    
    
  </ul>
			</div>
       <section id="footer" class="container content-section text-center">
        <nav class="navbar navbar-default navbar-fixed-bottom" id="footer-nav" role="navigation" style="background: #000000;
    font-family: lato;">
            <div class="container-fluid">
                <h7>Made with &hearts; by Vikram Raj</h7><br>
                <i class="glyphicon glyphicon-copyright-mark"></i>  <span class="light">copyright 2014</span>
            </div>
        </nav>

    </section>
    	</div>
      <script type="text/javascript">
         
               showhistory();
               
               setInterval(function(){showhistory();},3000);

      </script>
</body>
</html>