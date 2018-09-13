<?php

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "formcatcher@gmail.com";
$Subject = "Wildwood Exploration Rentals";
$Name = Trim(stripslashes($_POST['name'])); 
$Comments = Trim(stripslashes($_POST['comments'])); 
$current_date = date("Y-m-d"); // This date is created when the form is submitted.


$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Name)=="") $validationOK=false;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
exit;
}

$myFilePath = "contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Comments . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);


$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= $Comments;
$Body .= "\n";


$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}


?>