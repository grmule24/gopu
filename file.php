
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>

<form action='' method='POST'>
<label for='n'>Name</label>
<input type='text' name='name' id='n'><br>

<label for='c'>Info</label>
<input type='text' name='info' id='c'><br>

<input type='submit' value='Submit' name='submit1'><br/><br/>
</form>

<?php
 

$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='private_server';


   //connection

   $conn=new mysqli($db_host,$db_user,$db_pass,$db_name);  //or $conn= new mysqli('localhost','root','','database name');


   
  // $query='insert into students values('$roll_no_','$name_','$city_');';
  // mysqli_query($conn,$query);

  $name_=$_POST['name'];
  $info_=$_POST['info'];

   $query1='insert into table_a values('$name_','$info_');';

   mysqli_query($conn,$query1);
  

  /*

if(($_REQUEST['roll_nos']=='') || ($_REQUEST['name']=='') || ($_REQUEST['city']=='')){
    echo 'empty';
    
}else{echo 'insert succesfully';}*/
unset($name_);
unset($info_);

$query='select * from table_a';
$data=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($data);

   

 //  $n=mysqli_num_rows($data);  //it use to no of row
  // echo $n;
 //it use to show row data

echo '<table border='10' align='center'>';
  
        echo '<th>Name';
            echo '<th>Info';
            echo '</th>';
        echo '</th>';
        echo '<tbody>';

while($row=mysqli_fetch_assoc($data)){  

    echo '<tr>';

    echo '<td>'.$row['name'].' </td>';
    echo '<td>'.$row['info'].' </td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

/*
foreach($data as $i){
    foreach($i as $data){
        echo $data,'<br>';
    }
}*/print_r($row);

   if($conn->connect_error){

       die('connection failed');
   }
//if(isset()){echo 'empty';}

/*
  
$roll_no=$_REQUEST['roll_no'];
$name=$_REQUEST['name'];
$city=$_REQUEST['city'];

$add='insert into students values('$roll_no','$name','$city');';
>> update students SET name='',roll='', where id='4';
mysqli_query($conn,$add);*/
?>

</body>
</html>
    

   