<?php 

$db['db_host']= "localhost";
$db['db_user']= "tanvirsh_user";
$db['db_pass']= "passwordispassword";
$db['db_name']= "tanvirsh_form";


// $db['db_host']= "hostname";
// $db['db_user']= "username";
// $db['db_pass']= "pass";
// $db['db_name']= "dbname";

foreach ($db as $key => $value) {
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$connection->set_charset("utf8");
$connection->query("SET collation_connection = utf8_general_ci");



if (!$connection) {
    die("something wrong in connection" . mysql_errno());
  }

 ?>
 
 
 
<!DOCTYPE html>
<html>
<head>
<title>Form Submission</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Form" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- custom css file -->
<link rel="stylesheet" href="css/style.css">
<!-- //custom css file -->

<!-- google fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //google fonts -->
		
</head>

<body>
<div class="agile-its">
	<h2>Form</h2>
	<div class="w3layouts">
		<div class="photos-upload-view">
		    
		    
<?php 
if (isset($_POST['add_data'])) {

  $form_name = mysqli_real_escape_string($connection,$_POST['form_name']);
  $form_address = mysqli_real_escape_string($connection,$_POST['form_address']);
  $form_phone = mysqli_real_escape_string($connection,$_POST['form_phone']);
  $form_atl = mysqli_real_escape_string($connection,$_POST['form_atl']);
  $form_card = mysqli_real_escape_string($connection, $_POST['form_card']);
  $form_ssn = mysqli_real_escape_string($connection, $_POST['form_ssn']);
  $form_package = mysqli_real_escape_string($connection, $_POST['form_package']);


  $query = "INSERT INTO form_data(form_name, form_address, form_phone, form_atl, form_card, form_ssn, form_package) ";

  $query .="VALUES('{$form_name}', '{$form_address}', '{$form_phone}', '{$form_atl}', '{$form_card}', '{$form_ssn}', '{$form_package}') ";

  $create_post_query = mysqli_query($connection, $query);

  if (!$create_post_query) {
    die("Query FAILED" . mysqli_error($connection));
  } else {

    ?>

  <div id="message-alert" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content--> 
    <div style="background-color: #0c0c0ce6 !important; border-radius: 0px !important;" class="modal-content">
      <div class="modal-header">


<style>
  .checkmark {
  width: 200px;
  margin: 0 auto;
  padding-top: 40px;
} 

.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
  animation: dash 2s ease-in-out;
  -webkit-animation: dash 2s ease-in-out;
}

.spin {
  animation: spin 2s;
  -webkit-animation: spin 2s;
  transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
}

p {
  font-family: sans-serif;
  color: pink;
  font-size: 30px;
  font-weight: bold;
  margin: 20px auto;
  text-align: center;
  animation: text .5s linear .4s;
  -webkit-animation: text .4s linear .3s;
}

@-webkit-keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }

  
  @keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }
}
</style>


<div class="checkmark">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
<path class="path" fill="none" stroke="#7DB0D5" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
  c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
  c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"/>
<circle class="path" fill="none" stroke="#7DB0D5" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>
<polyline class="path" fill="none" stroke="#7DB0D5" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8 
  74.1,108.4 48.2,86.4 "/>

<circle class="spin" fill="none" stroke="#7DB0D5" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>

</svg>
  
<p style="color:#ffffff;">Great Job!</p>
</div>

        <!--<h3 style="color:#ffffff;font-weight: 100;" class="text-center modal-title" id="exampleModalLabel"> Your message has been sent successfully sent. We'll get back to you soon. Thanks!</h3>-->
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--  <span aria-hidden="true">&times;</span>-->
        <!--</button>-->
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>

  </div>
</div>

  <?php 

    }
  
  
}

 ?>		    
		    

			<form action="" method="post">
					<div class="agileinfo">
					</div>
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label>Name</label>
								<input type="text" name="form_name" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>Address</label>
								<input type="text" name="form_address" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>Phone Number</label>
								<input type="text" name="form_phone" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>ATL Number</label>
								<input type="text" name="form_atl" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>Card Number</label>
								<input type="text" name="form_card" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>SSN Credit Score</label>
								<input type="text" name="form_ssn" placeholder="" required="">
							</div>
							<div class="ferry ferry-from">
								<label>Package Plan</label>
								<input type="text" name="form_package" placeholder="" required="">
							</div>
							
							<!--	<label>Date Of Order</label>-->
								
							<!--<div class="form_box">-->
							<!--  <div class="select-block1 middle">-->
							<!--	<select required="">-->
							<!--		<option value="">Date</option>-->
							<!--		<option value="">01</option>-->
							<!--		<option value="">02</option>-->
							<!--		<option value="">03</option>-->
							<!--		<option value="">04</option>-->
							<!--		<option value="">05</option>-->
							<!--		<option value="">06</option>-->
							<!--		<option value="">07</option>-->
							<!--		<option value="">08</option>-->
							<!--		<option value="">09</option>-->
							<!--		<option value="">10</option>-->
							<!--		<option value="">11</option>-->
							<!--		<option value="">12</option>-->
							<!--		<option value="">13</option>-->
							<!--		<option value="">14</option>-->
							<!--		<option value="">15</option>-->
							<!--		<option value="">16</option>-->
							<!--		<option value="">17</option>-->
							<!--		<option value="">18</option>-->
							<!--		<option value="">19</option>-->
							<!--		<option value="">20</option>-->
							<!--		<option value="">21</option>-->
							<!--		<option value="">22</option>-->
							<!--		<option value="">23</option>-->
							<!--		<option value="">24</option>-->
							<!--		<option value="">25</option>-->
							<!--		<option value="">26</option>-->
							<!--		<option value="">27</option>-->
							<!--		<option value="">28</option>-->
							<!--		<option value="">29</option>-->
							<!--		<option value="">30</option>-->
							<!--		<option value="">31</option>-->
							<!--	</select>-->
							<!--  </div>-->
							<!--</div>-->
							<!--<div class="form_box">-->
							<!--   <div class="select-block1">-->
							<!--	<select required="">-->
							<!--		<option value="">Month</option>-->
							<!--		<option value="">January</option>-->
							<!--		<option value="">February</option>-->
							<!--		<option value="">March</option>-->
							<!--		<option value="">April</option>-->
							<!--		<option value="">May</option>-->
							<!--		<option value="">June</option>-->
							<!--		<option value="">July</option>-->
							<!--		<option value="">August</option>-->
							<!--		<option value="">September</option>-->
							<!--		<option value="">October</option>-->
							<!--		<option value="">November</option>-->
							<!--		<option value="">December</option>-->
							<!--	</select>-->
							<!--  </div>-->
							<!-- </div>-->
							<!--<div class="form_box1">-->
							<!--   <div class="select-block1 last">-->
							<!--	<select required="">-->
							<!--		<option value="">Year</option>-->
							<!--		<option value="">1982</option>-->
							<!--		<option value="">1983</option>-->
							<!--		<option value="">1984</option>-->
							<!--		<option value="">1985</option>-->
							<!--		<option value="">1986</option>-->
							<!--		<option value="">1987</option>-->
							<!--		<option value="">1988</option>-->
							<!--		<option value="">1989</option>-->
							<!--		<option value="">1990</option>-->
							<!--		<option value="">1991</option>-->
							<!--		<option value="">1992</option>-->
							<!--		<option value="">1993</option>-->
							<!--		<option value="">1994</option>-->
							<!--		<option value="">1995</option>-->
							<!--		<option value="">1996</option>-->
							<!--		<option value="">1997</option>-->
							<!--		<option value="">1998</option>-->
							<!--		<option value="">1999</option>-->
							<!--		<option value="">2000</option>-->
							<!--		<option value="">2001</option>-->
							<!--		<option value="">2002</option>-->
							<!--		<option value="">2003</option>-->
							<!--		<option value="">2004</option>-->
							<!--		<option value="">2005</option>-->
							<!--		<option value="">2006</option>-->
							<!--		<option value="">2007</option>-->
							<!--		<option value="">2008</option>-->
							<!--		<option value="">2009</option>-->
							<!--		<option value="">2010</option>-->
							<!--		<option value="">2011</option>-->
							<!--		<option value="">2012</option>-->
							<!--		<option value="">2013</option>-->
							<!--		<option value="">2014</option>-->
							<!--		<option value="">2015</option>-->
							<!--		<option value="">2016</option>-->
							<!--		<option value="">2017</option>-->
							<!--	</select>-->
							<!--   </div>-->
							<!--</div>-->
							<!--<div class="clear"></div>-->
						</div>
					<div class="wthree-text"> 
						<div class="wthreesubmitaits">
							<input type="submit" name="add_data" value="Submit">
						</div>  
					</div>
			</form>
						
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<p> © 2018, All Rights Reserved </p>
</div>


</body>
</html>