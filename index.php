<?php

require_once __DIR__ . '/vendor/autoload.php';
if(isset($_POST['Sample Date']) && isset($_POST['Reporting Date'])&& isset($_POST['Lab ID'])&&
isset($_POST['Owners Name'])&&isset($_POST['Species'])&&isset($_POST['S.NO'])&&isset($_POST['Pets Name'])
&& isset($_POST['Age'])&&isset($_POST['Bree'])&&isset($_POST['Sex'])&&isset($_POST['Ref.By'])&&isset($_POST['Region Examined'])
&&isset($_POST['Technique'])&&isset($_POST['Biastole(cm)'])&&isset($_POST['Systole(cm)'])&&isset($_POST['LAD'])&&isset($_POST['AOD'])
&&isset($_POST['Parameters'])&&isset($_POST['Observations']))
{
    $SampleDate = $_POST['Sample Date'];

    $ReportingDate = $_POST['Reporting Date'];
    
    $LabID = $_POST['Lab ID'];
    
    $OwnersName = $_POST['Owners Name'];
    
    $Species= $_POST['Species'];
    
    $SNumber = $_POST['S.NO'];
    
    $Age= $_POST['Age'];
    
    $Bree = $_POST['Bree'];
    
    $Sex = $_POST['Sex'];
    
    $RefBy = $_POST['Ref.By'];
    
    $RegionExamined = $_POST['Region Examined'];
    
    $Technique = $_POST['Technique'];

    $Biastole = $_POST['Biastole(cm)'];

    $Systole = $_POST['Systole(cm)'];

    $LAD = $_POST['LAD'];
 
    $AOD = $_POST['AOD'];

    $Pararmeters = $_POST['Parameters'];

    $Observations= $_POST['Observations'];


    
  $mpdf= new \Mpdf\Mpdf();
  
  $data ="";

  $data .="<h1>Your Details</h1>";

 $data .="<strong>Sample Date</strong>" .$SampleDate . "<br>";

 $data .="<strong>Reporting Date</strong>" .$ReportingDate . "<br>";
 
 $data .="<strong>Lab ID</strong>" .$LabID . "<br>";
 
 $data .="<strong>Owners Name</strong>" .$OwnersName . "<br>";
 
 $data .="<strong>Species</strong>" .$Species . "<br>";
 
 $data .="<strong>S.No</strong>" .$SNumber . "<br>";
 
 $data .="<strong>Age</strong>" .$Age . "<br>";
 
 $data .="<strong>Bree</strong>" .$Bree . "<br>";
 
 $data .="<strong>Sex</strong>" .$Sex . "<br>";

 $data .="<strong>Ref.By</strong>" .$RefBy . "<br>";

 $data .="<strong>Region Examined</strong>" .$RegionExamined . "<br>";

 $data .="<strong>Technique</strong>" .$Technique . "<br>";

 $data .="<strong>Biastole(cm)</strong>" .$Biastole . "<br>";
 
 $data .="<strong>Sysstole(cm)</strong>" .$Sysstole . "<br>";

 $data .="<strong>LAD</strong>" .$LAD . "<br>";

 $data .="<strong>AOD</strong>" .$AOD . "<br>";

 $data .="<strong>Parameters</strong>" .$Parameters . "<br>";

 $data .="<strong>Observations</strong>" .$Observations . "<br>";

 $mpdf->WriteHtml($data);

 $mpdf->output("myfile.pdf","D");



    
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button 2{background-color:Green;}   
table {
  border-collapse: seperate;
  border-spacing: 12px 20px; 
  width: 100%;
  border: 0px solid #ddd;
}

th, td {
  text-align: centre;
  padding: 5px;
}

</style>
<title>Generating pdf from HTML FORM using MPDF Library</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


    <h1>Form to PDF</h1>
    <p>Fill out Details to generate the pdf</p>
<div class="row">
  <div class="col-75">
    <div class="container">
     <form action="index.php" method="post">
       <div class="row">
        <div class="col-50">
    <label for="Sample Date">Sample Date:</label>
        <input type="date" name="Sample Date" class="form-control"  required>
        <label for="Reporting Date">ReportingDate:</label>
        <input type="date" name="Reporting Date" class="form-control" required>
        <label for="Lab ID">Lab ID:</label>
        <input type="number" name="Lab ID" class="form-control">
</div>
        <label for="Owners Name">Owners Name :</label>
        <input type="text" name="Owners Name" class="form-control">
        <label for="Species">Species :</label>
        <input type="text" name="Species" class="form-control">
        <label for="S.NO">S.NO :</label>
        <input type="text" name="S.NO" class="form-control">
        <label for="Pets Name">Pets Name:</label>
        <input type="text" name="Pets Name" class="form-control">
        <label for="Age">Age :</label>
        <input type="number" name="Age" class="form-control">
        <label for="Bree">Bree:</label>
        <input type="text" name="Bree" class="form-control">
        <label for="Sex">Sex:</label>
        <input type="text" name="Sex" class="form-control">
        <label for="Ref.By">Ref.By :</label>
        <input type="number" name="Ref.By" class="form-control">
        <label for="Region Examined">Region Examined:</label>
        <input type="text" name="Region Examined" class="form-control">
        <label for="Technique">Technique:</label>
        <input type="text" name="Technique" class="form-control">
       
<h2>Left Ventricle Measurements</h2>


<table>
    
  <tr>
    <th>Name</th>
    <th>Biastole(cm)</th>
    <th>Systole(cm)</th>
  </tr>
  
  <tr>
    <td>IVS</td>
    <td><input type ="number"></td>
    <td><input type ="number"></td>
  </tr>

  <tr>
    <td>LVID</td>
    <td><input type ="number"></td>
    <td><input type ="number"></td>
  </tr>
  

  <tr>
    <td>LVPW</td>
    <td><input type ="number"></td>
    <td><input type ="number"></td>
  </tr>
  
  
   
</table>

<label for="LAD">LAD:</label>
    <input type="number" name="LAD" class="form-control">
    <label for="AOD">AOD:</label>
    <input type="number" name="AOD" class="form-control">
    <label for="Parameters">Parameters:</label>
    <input type="text" name="Parameters" class="form-control">  
    <label for="Observations">Observations:</label>
    <input type="number" name="Observations" class="form-control">
   
    <button class="btn btn-success" type="submit">Generate pdf</button>

    
 
   </div>
   </div>

    </form>

 
</body>
</html>