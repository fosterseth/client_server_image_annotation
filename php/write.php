<?php
$data = $_POST['data'];
//$data = json_decode($data, true);
$savefilename = $_POST['path'];
$file_append_flag = $_POST['flag'];
$type_flag = $file_append_flag == "1";
//file_put_contents($savefilename, $type_flag);
if($type_flag){
//file_put_contents("../results/savetest.txt", $data, FILE_APPEND);
file_put_contents($savefilename, $data, FILE_APPEND);
}
else{
file_put_contents($savefilename, $data);
};
?>
