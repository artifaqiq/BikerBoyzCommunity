<?php
        session_start();
	if(isset($_POST['submit'])){
		if (isset($_POST['username'])) { $login = $_POST['username']; if ($login == '') { unset($login);} }
		if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

		if (empty($login) or empty($password))
		{
			exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
		}

		$login = trim($login);
		$password = trim($password);
	}
	$connect = mysqli_connect("localhost", "id78518_egorpats","14881927", "id78518_users");
    if (!$connect){
        echo "Не работает!<br>";
        exit(mysql_error());
    } else{
                mysqli_select_db("id78518_users", $connect);
		echo ">>>";
                printf("%s ", $login);
                $result = mysqli_query($connect,"SELECT * FROM login WHERE username='$login' LIMIT 1");
                if($result){
                    $myrow = mysqli_fetch_array($result);
                    if (empty($myrow['password']))
                    {
                            exit ("Извините, введённый вами логин или пароль неверный.1");
                    }
                    else {
                      if ($myrow['password']==$password) {
                                      echo (":)");
                                        $_SESSION['mail']=$myrow['mail']; 
                                        $_SESSION['id']=$myrow['id'];
                                        $_SESSION['username']=$myrow['username'];
                                        header("Location: main.php");
                                      }
                                      else {
                                            exit ("Извините, введённый вами логин или пароль неверный.2");
                                      }
                    }
                } else {
                    echo 'error';
                }
	}
?>