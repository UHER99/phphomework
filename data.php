<?php
class insert{
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $userlevel = "m";
    public $conn;

    function __construct($db){
        $this->conn = $db;
    }
    function selert(){
        $user_check = "SELECT * FROM user WHERE username = '$this->username' LIMIT 1";
        $result = mysqli_query($this->conn, $user_check);
    
    
        $user = mysqli_fetch_assoc($result);
        if ($user['username'] === $this->username) {
            // echo "<h1>username ຂອງເຈົ້າຊໍ້າກັບ username ຄົນອື່ນ (ກາລຸນາປ້ອນຂໍ້ມູນໃໝ່)</h1>";
            echo "<script type='text/javascript'>alert('username ຂອງທ່ານຊໍ້າກັບ username ຄົນອື່ນ (ກາລຸນາປ້ອນຂໍ້ມູນໃໝ່)');
                window.location='register.php';
                </script>";
            
        }else {
            $passwordenc = md5($this->password);

            $query = "INSERT INTO user(username, password, firstname, lastname, userlevel) VALUES('".$this->username."', '".$passwordenc."', '".$this->firstname."', '".$this->lastname."', '".$this->userlevel."')";
            $result = mysqli_query($this->conn, $query);

            if ($result) {
                $_SESSION['success'] = "";
                header("Location: login.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: login.php");
            }
        }
    }
    function insert2(){
        $passwordenc = md5($this->password);

        $query = "SELECT * FROM user WHERE username = '$this->username' AND password = '$passwordenc'";

        $result = mysqli_query($this->conn, $query);
        

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } else {
                echo "<script type='text/javascript'>alert('User ຫຼື Password ບໍ່ຖືກຕ້ອງ');
                window.location='login.php';
                </script>";
        }
    }
}
?>