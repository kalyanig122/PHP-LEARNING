<?php
//echo "<pre>";
//print_r($_FILES);
//exit;
/* echo "<pre>";
print_r($_SERVER);
echo "</pre>";*/
//print_r($_ENV);
/*print_r($_POST);
print_r($_REQUEST);//USE THIS WHWN YOU DON'T KNOW THE METHOD I.E GET OR POST
echo "<br>";
echo "First Name". $_POST['fname'];
echo "<br>";
*/

?>
<?php

//if(isset($_REQUEST)){
if (!empty($_REQUEST)) {
    //form validations start
    $msg = "";
    if ($_REQUEST['fname'] == "") {
        $msg = "Name Required";
    } else if ($_REQUEST['lname'] == "") {
        $msg = " Last Name Required";
    }

    if ($msg != "") {
        header("location:form.php?msg=$msg");
    }

    
    
    if (!empty($_FILES)) {
        $name = $_FILES['file']['name'];
        $uploadDirectory = "./uploads/";
        move_uploaded_file($_FILES["file"]["tmp_name"], $uploadDirectory . $name);
    }

    // code created by me for validation
    //if file exits then retrict from uploading else allow to upload
    if (file_exists($name)) {
        echo "file already uploaded";
    } else {
        $name = $_FILES['file']['name'];
        $uploadDirectory = "./uploads/";
        move_uploaded_file($_FILES["file"]["tmp_name"], $uploadDirectory . $name);
    }
    //form validation end
?>




    <table class="" border="1">
        <tr>
            <th>Image</th>
            <th>Full Name</th>
            <th>City</th>
            <th>Zip</th>
        </tr>
        <tr>
            <td><img src="<?php echo $uploadDirectory . $name; ?>"></td>
            <td><?= $_REQUEST['fname'] . " " . $_REQUEST['lname'] ?></td>
            <td><?= $_REQUEST['city'] ?></td>
            <td><?= $_REQUEST['zip'] ?></td>
        </tr>
    </table>
<?php
} else {
    header("location:form.php?msg=error"); //used for redirection
} ?>