<?php
    include_once '../dbconn.php';
    session_start();
    error_reporting(0);

    $ip = $_SERVER['REMOTE_ADDR'];
    $reg_date = date('Y-m-d H:i:s');
    $open_date = date("Y/m/d H:i:s", strtotime('+1 day'));
    $contents = $_POST['contents'];
    $manager_name = $_POST['manager_name'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $writer = $_SESSION['user_id'];
    //echo $open_date;


    // 설정
    $uploads_dir = '../files';
    $allowed_ext = array('PDF','hwp','xls','doc','xlsx','docx','pdf','jpg','JPG','gif','png','txt','ppt','pptx');
    $name = array();
    $error = array();
    $ext = '';
    $sql_add = '';

    foreach($_FILES as $key => $value) {

        if($value['name'] != ''){
            // echo $key."<br/>";

            // echo $value['name'];

            $ext = array_pop(explode('.', $value['name']));

            // echo $ext;
            // echo in_array($ext, $allowed_ext);

            if( in_array($ext, $allowed_ext) == false ) {
                echo "<script>alert('허용되지 않은 확장자입니다.');history.go(-1);</script>";
                exit;
            }

            $file_id = md5(uniqid(rand(), true));

            if(move_uploaded_file( $value['tmp_name'], "$uploads_dir/$file_id.".$ext."")){

                if($key == 'file1'){
                    $sql_add .= ", attach_file = '".$value['name']."', real_file_name = '".$file_id.".$ext"."'";
                }

                if($key == 'file2'){
                    $sql_add .= ", attach_file2 = '".$value['name']."', real_file_name2 = '".$file_id.".$ext"."'";
                }
                
                if($key == 'file3'){
                    $sql_add .= ", attach_file3 = '".$value['name']."', real_file_name3 = '".$file_id.".$ext"."'";
                }

            }

        }
    }
    $sql = "INSERT INTO board set open_date = '".$open_date."', ip_addr = '".$ip."', reg_date = '".$reg_date."', contents = '".$contents."', manager_name = '".$manager_name."', category = '".$category."', address = '".$address."'".$sql_add."";
    echo $sql."<br/>";
    $result = mysqli_query($link, $sql);

    if($result){
        echo "<script>alert('글 작성이 완료됐습니다.');location.href='../list.php';</script>";
    }
?>