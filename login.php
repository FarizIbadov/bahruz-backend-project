<?php
include 'action.php';
session_start();
$data;
if(isset($_POST['useremail']) && isset($_POST['password'])){
    $useremail = $obj->verifystring($_POST['useremail']);
    $password = $obj->verifystring($_POST['password']);
    $user = 'false';
    if(!empty($useremail) && !empty($password)) {
        $where = "user_email = '$useremail' and user_status = 1";
        $record = $obj->read_specific('*','registration',$where);
        if($record->num_rows>0){
            $pass = $record->fetch_assoc();
            if($pass['user_password'] == $password){
                $user = 'true';
                $_SESSION['user_name'] = $pass['user_name'];
                $_SESSION['user_email'] = $pass['user_email'];
                $_SESSION['user_ID'] = $pass['id'];
                $_SESSION['user_type'] = $pass['user_type'];
                $data["res"] = $user;
            }else {  
                $user = 'false';
            }
        }
        else {  
                $user = 'false';
        }
    }else {
                $user = 'false';
    }
    echo json_encode($data);
}else{
  ?> <script> 
    setTimeout(function(){window.location.href = 'portal/index.php';},1000);
  </script>
  <?php
}
?>