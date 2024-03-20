<?php
$connection = mysqli_connect('localhost', 'root', '', ' farmer_survey');

$full_name=$_POST['full_name'];
$mobile_number=$_POST['mobile_number'];
$email_id=$_POST['email_id'];
$address=$_POST['address'];
$ans_section_1=$_POST['ans_section_1'];
$or_ans_input_section_1=$_POST['or_ans_input_section_1'];
$ans_section_2=$_POST['ans_section_2'];
$or_ans_input_section_2=$_POST['or_ans_input_section_2'];
$ans_section_3=$_POST['ans_section_3'];
$ans_section_4=$_POST['ans_section_4'];
$ans_section_5=$_POST['ans_section_5'];
$or_ans_input_section_5=$_POST['or_ans_input_section_5'];
$ans_section_6=$_POST['ans_section_6'];
$or_ans_input_section_6=$_POST['or_ans_input_section_6'];
$ans_section_7=$_POST['ans_section_7'];
$or_ans_input_section_7=$_POST['or_ans_input_section_7'];


$sql= "INSERT INTO `farmer_details`(`full_name`, `mobile_number`, `email_id`, `address`, `que_1_ans`, `or_que_1_ans`, `que_2_ans`, `or_que_2_ans`, `que_3_ans`, `que_4_ans`, `que_5_ans`, `or_que_5_ans`, `que_6_ans`, `or_que_6_ans`, `que_7_ans`, `or_que_7_ans`) VALUES ('$full_name','$mobile_number','$email_id','$address','$ans_section_1','$or_ans_input_section_1','$ans_section_2','$or_ans_input_section_2','$ans_section_3','$ans_section_4','$ans_section_5','$or_ans_input_section_5','$ans_section_6','$or_ans_input_section_6','$ans_section_7','$or_ans_input_section_7')";
if (mysqli_query($connection,$sql)){
	echo "data inserted";
}
else{
	echo "error";
}
?>