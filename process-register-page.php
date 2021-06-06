<?php 
$errors= array();
$first_name= trim($_POST['first_name']);
if(empty($first_name)){
    $errors[] ='You forgot to enter your first name';
}
$last_name= trim($_POST['last_name']);
if(empty($last_name)){
    $errors[] ='You forgot to enter your last name';
}
$email= trim($_POST['email']);
if(empty($email)){
    $errors[] = 'You forgot to enter your email address';
}
$password1= trim($_POST['password1']);
$password2= trim($_POST['password2']);
if(!empty($password1)){
    if($password1 !== $password2){
        $errors[]='Your two passwords did not match';
    }
} else{
    $errors[]='You forgot to enter your password';
} 
if(empty($errors)){
    try{
        $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
        require ('mysqli_connect.php');
        $query = "INSERT INTO users(userid, first_name, last_name, email, password, registration_date)";
        $query = "VALUES('',?, ?,?,?, NOW())";
        $q = mysqli_stmt_init($dbcon);
        mysqli_stmt_prepare($q,$query);
        mysqli_stmt_bind_param($q,'ssss', $first_name, $last_name, $email, $hashed_passcode);
        mysqli_stmt_execute($q);

        if(mysqli_stmt_affected_rows($q)==1){
            header("location:register-thank.php");
            exit();
        }else{
            $errostring="<p class='text-center col-sm-8' style='color:red'>";
            $errorstring .="System Error<br/>You could not be registered due";
            $errorsstring .="to a system error. We apologize for any inconvenience.</p>";
            echo "<p class=text-center col-sm-2 style='color:red'>$errorstring</p>";
            echo '<p>'. mysqli_error($dbcon).
            '<br><br> Query:'.$query. '</p>';
            mysqli_close($dbcon);
            echo '<footer class="jumbotron text-center col-sm-12" style="padding-bottom:1px; paddin: top 8px;">include("footer.php");</footer>';
            exit();
        }
    }
    catch(Exception $e){
        print "An Exception occured.Message:".$e->getMessage();
        print "The system is busy please try later";
    }
    catch(Error $e){
        print "An error ocurred.Messaged".$e->getMessage();
        print "The system is busy please try again later";
    }}

    else{
        $errorsstring="Error! The following error(s)ocurred:<br>";
        foreach ($errors as $msg){
            $errorstring .="-$msg<br>\n";
        }
        $errorstring .="Please try again.<br>";
        echo "<p class='text-center col-sm-2' style='color:red'>$error-string</p>";
    }

?>