<?php
session_start();
include "../dbconn.php";

$sql = "select * from admin_member where user_id = '".$_POST['id']."'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

if(password_verify($_POST['pw'], $row['passwd'])) {

    if($_POST['id'] == 'nesdczz'){
        $_SESSION['user_id'] = '최고 관리자';
    }else{
	    $_SESSION['user_id'] = $row['user_id'];
    }

	echo "<script>alert('로그인 되었습니다.');location.href = '../list.php';</script>";
	exit;

} else {
	
	echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');history.go(-1);</script>";
	exit;

}

// echo password_hash('19071907@@', PASSWORD_BCRYPT);

// if(password_verify('19071907@@', password_hash('19071907@@', PASSWORD_BCRYPT))) {
// 	echo "성공";
// } else {
// 	echo "실패";
// }


?>




<?php
	mysqli_close($link);
?>