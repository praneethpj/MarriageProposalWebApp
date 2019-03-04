<?php

session_start();
include './system/Connection.php';

class Actions {

    private $user_name;
    private $user_email;
    private $user_password;

    function getUser_name() {
        return $this->user_name;
    }

    function getUser_email() {
        return $this->user_email;
    }

    function getUser_password() {
        return $this->user_password;
    }

    function setUser_name($user_name) {
        $this->user_name = $user_name;
    }

    function setUser_email($user_email) {
        $this->user_email = $user_email;
    }

    function setUser_password($user_password) {
        $this->user_password = $user_password;
    }

    function getDate() {
        $now = new DateTime();
        $now->format('yyy-mm-dd');    // MySQL datetime format
        return $now->getTimestamp();
    }

    public function register() {
        try {
            $conn = Connect();
            // Hash password
            $user_hashed_password = password_hash($this->getUser_password(), PASSWORD_DEFAULT);

            // Define query to insert values into the users table
            $sql = 'INSERT INTO login(username, email, password,date) VALUES("' . $this->getUser_name() . '", "' . $this->getUser_email() . '", "' . $user_hashed_password . '",' . $this->getDate() . ')';

            $q = $conn->query($sql);


            $sql1 = 'INSERT INTO contact(username) VALUES("' . $this->getUser_name() . '")';

            $q1 = $conn->query($sql1);


            $sql2 = 'INSERT INTO advertistment(username) VALUES("' . $this->getUser_name() . '")';

            $q2 = $conn->query($sql2);
            
            $_SESSION['user_session']=$this->getUser_name();

            if ($q & $q1 & $q2) {
                echo 'Add new user';
            } else {
                echo 'A error is occured';
            }
        } catch (Exception $e) {
            echo $e;
            // array_push($errors, $e->getMessage());
        }
    }

    // Log in registered users with either their username or email and their password
    public function login() {
        try {
            $conn = Connect();

            // Define query to insert values into the users table
            $sql = 'SELECT * FROM login WHERE username="' . $this->getUser_name() . '"';

            // Prepare the statement
            $query = mysqli_query($conn, $sql);
            ;


            if ($row = mysqli_fetch_array($query)) {
                $returned_row = '';


                $returned_row = $row['password'];

                // Verify hashed password against entered password
                if (password_verify($this->getUser_password(), $returned_row)) {
                    // Define session on successful login
                    $_SESSION['user_session'] = $this->getUser_name();
                   // echo $_SESSION['user_session'];
                    //$this->redirect("UserProfile.php");
                    // return true;
                } else {
                    // Define failure
                    echo '1';
                    //  return false;
                }
            } else {
                echo '1';
            }
        } catch (Exception $e) {
            array_push($errors, $e->getMessage());
        }
    }

    // Check if the user is already logged in
    public function is_logged_in() {
        // Check if user session has been set
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    // Redirect user
    public function redirect($url) {
        header("Location: $url");
    }

    // Log out user
    public function log_out() {
        // Destroy and unset active session
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}

?>
