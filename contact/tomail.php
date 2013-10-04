<?php
session_start();

$name = $_POST['txtName'];
$address = $_POST['txtAddress'];
$telephone = $_POST['txtContact'];
$email = $_POST['txtEmail'];
$comment = $_POST['txtMessage'];
$country = $_POST['txtCountry'];
if ($comment==""){
$comment = "Not Mentioned";}
else{
$comment = $_POST['txtMessage'];
}

$body = '
<div style="width:450px; padding:25px; margin:0 auto; position:relative; font-family:Trebuchet MS, Arial, Helvetica, sans-serif; font-size:13px; color:#666;">
	<h1 style="font-family:Trebuchet MS, Arial, Helvetica, sans-serif; font-weight:100;">Oxley Threads Lanka<br />
    	<span style="font-size:16px; color:#900;">Contact Inquiry</span>
    </h1>
    
    <p>Name<br />
    	<span style="color:#069; width:300px;">'.$name.'</span>
    </p>
    
     <p>Address<br />
    	<span style="color:#069;">'.$address.'</span>
    </p>
    
    <p>Country<br />
    	<span style="color:#069;">'.$country.'</span>
    </p>
    
     <p>Contact Number<br />
    	<span style="color:#069;">'.$telephone.'</span>
    </p>
    
     <p>Email Address<br />
    	<span style="color:#069;">'.$email.'</span>
    </p>
    
     <p>Message / Inquiry<br />
    	<span style="color:#069;">'.$comment.'</span>
    </p>
    
  
    
</div>';
$to = "lasanthi.oxley@gmail.com, prashasoft@gmail.com";

$subject = "Contact";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Reply-to: $email\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";
//$headers .= '' . "\r\n";

// check the capcha//
//$c_capcha = $_SESSION['code'];
if(true){

	$result = @mail($to, $subject, $body, $headers);
	if($result)
	{
	echo '<script>alert("Your Message is sent successfully!")</script>';
	echo '<script>window.location = "index.php"</script>';
	}else
	{
	echo '<script>alert("Message sending error! please try again!")</script>';
	echo '<script>window.location = "index.php"</script>';
	}
	
	}else{
		echo '<script>alert("Incorrect code please enter again!")</script>';
		//header('Location: index.php');
		echo '<script>window.location = "index.php"</script>';
		}
	
	
?>
