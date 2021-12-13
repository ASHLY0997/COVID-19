<?php

   $name=$_POST['name'];
   $addr=$_POST['address'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
  
   $pass=$_POST['password'];

   $cylin=$_POST['cylin'];
   $des=$_POST['des'];


   $file = $_FILES['food']['name'];
move_uploaded_file($_FILES['food']['tmp_name'], 'img/'.$file);




   

   include './conection.php';

   $se="SELECT * FROM login WHERE username='$email'";
   $r=mysqli_query($con,$se);
   $count=mysqli_num_rows($r);
if ($count>0) 
{
   echo "<script> alert('User name already exists!');window.location.href='index.php'</script>";
}

else{

   $sql = "insert into login(username,password,type,status)values('$email','$pass','Qurantine','approved')";
   mysqli_query($con, $sql) or die(mysqli_error($con));
   $logid=mysqli_insert_id($con);

   $query = "INSERT INTO `qurantine_center`(`q_name`, `q_address`, `q_phone`, `q_email`, `cylinder`, `food`, `descript`, `login_id`) VALUES ('$name','$addr','$phone','$email','$cylin','$file','$des','$logid')";
   mysqli_query($con, $query) or die(mysqli_error($con));
   echo "<script>alert('Registerd');window.location='index.php';</script>";

}

?>