<?php
  require __DIR__. '/connect_db.php'; 

  header('Content-Type: application/json');

  $output = [
    'success' => false,
    'postData' => $_POST,
    'code' => 0,
    'error' => ''
];

$account = isset($_POST['e_account']) ? $_POST['e_account'] : '';
$password = isset($_POST['e_password']) ? $_POST['e_password'] : '';




  
  
  
  $sql = "SELECT `sid`, `e_account`, `e_designer` 
  FROM `e_fund_control` 
  WHERE `e_account`=? AND `e_password`=SHA1(?)";

 $stmt= $pdo->prepare($sql);
 $stmt->execute([
    //  $_POST['e_designer_sid'],
    $account,
    $password, 
     ]);


// echo $stmt->rowCount();     
// echo 'ok';

if($stmt->rowCount()){
    $output['success'] = true;
    $_SESSION['e_fund_control'] = $stmt->fetch();
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);