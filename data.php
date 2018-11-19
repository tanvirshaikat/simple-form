<?php include "config.php" ?>

<!DOCTYPE>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<style>
body {
    font-family: serif;
    font-size: 14px;
    line-height: 1.42857143;
    text-transform: capitalize;
    color: #ececec !important;
    background-color: #253138 !important;
}
.table-striped>tbody>tr:nth-of-type(odd) {
    color: #ececec  !important;
    background-color: #253138 !important;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #dddddd57 !important;
}
.table-bordered {
    border: 1px solid #0000 !important;
}
</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

  <title>Form Data</title>
  
</head>



<body>
    
<div class="container">
  <div class="row">
    <div class="col-md-12">
<br><br>
<h1 class="text-center"> FORM DATABASE</h1>
<br>


<div class="col-md-4 col-md-offset-4">
<form class="text-center" action="" method="post">
    <input class="form-control" type="password" name="pin" placeholder="Enter the security pin to show data" required><br>
    <input class="btn btn-success btn-block" type="submit" name="check" value="Verify">
</form>
</div>


<?php 

if (isset($_POST['check'])) {
	$pin=$_POST['pin'];
	

	if ($pin=='fria') {
		?>
		
		
<table id="example" class="text-center table table-striped table-bordered" style="width:100%">
        <thead class="text-center">
            <tr>
      <th><center>No</center></th>
      <th><center>Name</center></th>
      <th><center>Address</center></th>
      <th><center>Phone No</center></th>
      <th><center>ATL No</center></th>
      <th><center>Card No</center></th>
      <th><center>SSN Score</center></th>
      <th><center>Package Plan</center></th>
      <th><center>Date</center></th>
      <th><center>Delete</center></th>
            </tr>
        </thead>
        <tbody>


<?php 
    $query = "SELECT * FROM form_data"; //query for showing post.
    $select_data = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_data)) {
    $form_id = $row['form_id'];
    $form_name = $row['form_name'];
    $form_address = $row['form_address'];
    $form_phone = $row['form_phone'];
    $form_atl = $row['form_atl'];
    $form_card = $row['form_card'];
    $form_ssn = $row['form_ssn'];
    $form_package = $row['form_package'];
    $form_date = $row['form_date'];


    echo "<tr>";
    echo "<td>$form_id</td>";
    echo "<td>$form_name</td>";
    echo "<td>$form_address</td>";
    echo "<td>$form_phone</td>";
    echo "<td>$form_atl</td>";
    echo "<td>$form_card</td>";
    echo "<td>$form_ssn</td>";
    echo "<td>$form_package</td>";
    echo "<td>$form_date</td>";
    echo "<td><a style='text-decoration:none; color: #49a049;' href='data.php?delete={$form_id}'>Delete</a></td>";
    echo "</tr>";

}
 ?>

<?php  

if (isset($_GET['delete'])) {
$the_app_id = $_GET['delete'];
$query = "DELETE FROM form_data WHERE form_id = {$the_app_id} ";
$delete_user_query = mysqli_query($connection, $query);
header("Location:data.php");
//echo "<script> window.location='data.php'; </script>";
}
?>
</tbody>
</table>

	<?php
	}else {
	echo "<div class='col-md-12 text-center'> <h4> Your PIN <span style='color:red;'> ". $pin ." </span> is wrong. Try again</h4>";
}
} 
?>
    </div>
  </div>
</div>
</body>
</html>
