<?php
session_start();
include "controller/pdo.php";
include "controller/danh_muc.php";
include "controller/users.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $one_email = user_email($email);
                $one_user = user_username($username);
                if ($email == $one_email['email']) {
                    $err = "Email đã tồn tại";
                    // header("location:sigup_gia_huy.php?err=" . $err);
                    header("location:signup_gia_huy.php?err=" . $err);
                    echo "Email đã tồn tại";
                } else if ($username == $one_user['username']) {
<<<<<<< HEAD
                   $err = "username đã tồn tại";
                    header("location:signup_gia_huy.php");
                    echo "Tên đăng nhập đã tồn tại";
                } else {
                    insert_user($email, $username, $password);
                    header("location:index.php?err=" . $err);
                    die;
                }
=======
                        $err = "username đã tồn tại";
                        header("location:index.php?act=dangky&err=" . $err);
                        echo "Tên đăng nhập đã tồn tại";
                    }else {
                        insert_user($email, $username, $password);
                        // if (isset($email,$username) && $email == $one_email['email'] || $username == $one_user['username']) {
                        //     echo "Tài khoản hoặc email đã tồn tại";
                        // } else {
                        //     insert_user($email,$username,$password);
                        //     // header("location:index.php?act=main.php");
                        // }
                    }
>>>>>>> 9df03782ed69a00cebd747afa8ace23ee7a1f474
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check_user = check_user($username,$password);
                // print_r(is_array($check_user)) ;die;
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header("location:index.php");
                    die;
                }

            }
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            die;
            break;
        case '':

            break;
        case '':

            break;
    }
}
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {


        case '':

            break;
        case '':

            break;
        case '':

            break;
        case '':

            break;
        case '':

            break;



        default:

            break;
    }
} else {
    include "main.php";
}


include "footer.php";
