<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) 
{

	function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) 
    {
		header("Location: regiszt.php?error=Felhasználónév szükséges!&$user_data");
	    exit();
	}
    else if(empty($pass))
    {
        header("Location: regiszt.php?error=Jelszó szükséges!&$user_data");
	    exit();
	}
	else if(empty($re_pass))
    {
        header("Location: regiszt.php?error=Nem megfelelő kitöltés!&$user_data");
	    exit();
	}

	else if(empty($name))
    {
        header("Location: regiszt.php?error=Teljes név szükséges&$user_data");
	    exit();
	}

	else if($pass !== $re_pass)
    {
        header("Location: regiszt.php?error=A jelszavak nem egyeznek!&$user_data");
	    exit();
	}

	else
    {

        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
        {
			header("Location: regiszt.php?error=A felhasználónév már létezik!&$user_data");
	        exit();
		}
        else 
        {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) 
           {
           	 header("Location: regiszt.php?success=A regisztrációt sikeresen létrehoztad!");
	         exit();
           }
           else 
           {
	           	header("Location: regiszt.php?error=Hiba történt!&$user_data");
		        exit();
           }
           var_dump($user_data);
		}
	}
	
}
    else
    {
	header("Location: regiszt.php");
	exit();
    }