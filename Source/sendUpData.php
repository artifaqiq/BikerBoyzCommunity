<?php
        $connect = mysqli_connect("localhost", "id78518_egorpats","14881927", "id78518_users");
        if (!$connect){
            echo "Не работает!<br>";
            exit(mysql_error());
        } else{
            mysqli_select_db("id78518_users", $connect);
            if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$checkPassword = $_POST['checkPassword'];
			//$City = $_POST['city'];
			if($password == $checkPassword){
				//$password = md5($password);
           		$query = mysqli_query($connect, "INSERT INTO login VALUES( '','$username','$email','$password')") or die(mysql_error());
				
			}
			else {
				die("Password must match!");
			}
		}
            if ($query) {
              echo "<script>alert(\"Добавлено в базу данных.\");
                    location.href = 'index.html';</script>";
            } else {
             echo ":(";
	    }
        mysql_close ($connect);
        }
    ?>