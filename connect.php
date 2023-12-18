<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'root','ecommerce');

// get the post records
	$name = $_POST['name']
	$phnumber = $_POST['phnumber']
	$email = $_POST['email']
	$code = $_POST['code']
	$address = $_POST['address']
	$feedback = $_POST['feedback']

// database insert SQL code
$sql = "INSERT INTO `payment` (`name`, `phnumber`, `email`, `code`, `address`, `feedback`) VALUES ('txtname', '$txtphnumber', '$txtemail', '$txtcode', '$txtaddress', '$txtfeedback')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>


<!-- 
	$name = $_POST['name']
	$phnumber = $_POST['phnumber']
	$email = $_POST['email']
	$code = $_POST['code']
	$address = $_POST['address']
	$feedback = $_POST['feedback']

	$conn = new mysqli('localhost','root','root','ecommerce');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into payment(name, phnumber, email, code, address, feedback) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisiss",$name, $phnumber, $email, $code, $address, $feedback);
		$stmt->execute();
		echo "Order Done......";
		$conn->close();
		$conn->close();
	}
?>

 
$server_name=”localhost”;
$username=”root”;
$password=”root”;
$database_name=”ecommerce″;

	$conn = mysqli_connect($server_name,$username,$password,$database_name)
 
	if(!$conn)
	{
		die("Connection Failed:" .mysqli_connect_error());
	}

	if(isset($_POST['save']))
	{
	$name = $_POST['name']
	$phnumber = $_POST['phnumber']
	$email = $_POST['email']
	$code = $_POST['code']
	$address = $_POST['address']
	$feedback = $_POST['feedback']
 
 	$sql_query = "INSERT INTO payment (name, phnumber, email, code, address, feedback) values('$name, $phnumber', '$email', '$code', '$address', '$feedback')";
		 
		if (mysqli_query($conn, !sql_query)) {
		 	// code...
		 	echo "New Entry Done...";
		 } 
		 else
		 {
		 	echo "Error: " . $sql . "" . mysqli_error($conn);
		 }
		 mysqli_close($conn);
	}
?>  

 
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['phnumber']) &&
        isset($_POST['email']) && isset($_POST['code']) &&
        isset($_POST['address']) && isset($_POST['feedback'])) {
        
        $name = $_POST['name'];
        $phnumber = $_POST['phnumber'];
        $email = $_POST['email'];
        $code = $_POST['code'];
        $address = $_POST['address'];
        $feedback = $_POST['feedback'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "ecommerce";
        $conn = new mysql($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO payment(name, phnumber, email, code, address, feedback) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sisiss",$name, $phnumber, $email, $code, $address, $feedback);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>