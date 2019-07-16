<?php

if(isset($_POST['login']))
{

    $conn = mysqli_connect('localhost','root','','login') or die('Unable To connect');
    if($_POST)
    $username =mysqli_real_escape_string($conn,addslashes($_REQUEST["username"]));
    $password =mysqli_real_escape_string($conn,addslashes($_REQUEST["password"]));
    
    if(count($_POST)>0) {
   
    
    $result = mysqli_query($conn,"SELECT name, pass FROM registration WHERE name='$username' AND pass='$password'");
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['user']=$username;
     header("location:index.php?route=home");
    }
    else
    { 
    alert("Invalid User or Password");
    }
    }
    $conn->close();
}
if(isset($_POST['reg']))
{
    $fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $newFilename);
    $location="profile/" . $newFilename;
    $conn = new mysqli("localhost","root","","login"); 
$name =mysqli_real_escape_string($conn,addslashes($_REQUEST["username"]));
$pnum =mysqli_real_escape_string($conn,addslashes($_REQUEST["phone"]));
$pass =mysqli_real_escape_string($conn,addslashes($_REQUEST["password"]));
$email =mysqli_real_escape_string($conn,addslashes($_REQUEST["email"]));


if ($conn->connect_error)
{die($conn->connect_error);
}

$q="INSERT INTO `registration`(`name`, `phno`, `pass`, `image`,`email`) VALUES ('$name','$pnum','$pass','$location','$email')";
if ($conn->query($q) === TRUE) {
    alert("succesfully created");
} else {
    alert("user already exist");
}
$conn->close();
}

if(isset($_POST['fpass']))
{
    $conn = new mysqli("localhost","root","","login"); 
    $name =mysqli_real_escape_string($conn,addslashes($_REQUEST["username"]));
    $pnum =mysqli_real_escape_string($conn,addslashes($_REQUEST["phone"]));
if ($conn->connect_error)
{die($conn->connect_error);
}
$result = mysqli_query($con,"SELECT name, pass FROM registration WHERE name='$name' AND pass='$pnum'");
    if(mysqli_num_rows($result)==1)
    {



    } else{



    }

    $conn->close();
}


if(isset($_POST['add']))
{
    
   session_start();
    $name=$_SESSION['user'];
   $fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
    $location="upload/" . $newFilename;
    $conn = new mysqli("localhost","root","","login");
$tit =mysqli_real_escape_string($conn,addslashes($_REQUEST["tittle"]));
$cont =mysqli_real_escape_string($conn,addslashes($_REQUEST["content"]));

if ($conn->connect_error)
{
    die($conn->connect_error);
}
$q="INSERT INTO `post`(`name`,`title`, `body`,`image`) VALUES ('$name','$tit','$cont','$location')";
if ($conn->query($q) === TRUE) 
{
    alert("succesfully created");
    header("location:index.php?route=home");
}
 else {
     alert("not created");
     //echo mysqli_error($conn);
 }
$conn->close();
}


function controllPost(){
    $conn = new mysqli("localhost","root","","login");
    $result = mysqli_query($conn,"SELECT * FROM post order by id desc");
    $html="";
    if(mysqli_num_rows($result)>0)
    {
     while($row=mysqli_fetch_array($result))
     {

        $html.=viewPost($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
     }

     return $html;
    }
    else
    { 
    alert("No post found");
    }
   

    $conn->close();
}
function controllProfile(){
    $a=$_SESSION['user'];
    $conn = new mysqli("localhost","root","","login");
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE name='$a'");
    $html="";
    if(mysqli_num_rows($result)>0)
    {
    $row=mysqli_fetch_array($result);


        return viewProfile($row[1],$row[3],$row[4],$row[5]);
     
    }

    $conn->close();
}
function editProfile(){
    $a=$_SESSION['user'];
    $conn = new mysqli("localhost","root","","login");
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE name='$a'");
    $html="";
    if(mysqli_num_rows($result)>0)
    {
    $row=mysqli_fetch_array($result);
        return edtProfile($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
    }

    $conn->close();
}

if(isset($_POST['edt']))
{
   $fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $newFilename);
    $location="profile/" . $newFilename;
    $conn = new mysqli("localhost","root","","login");
    $id=mysqli_real_escape_string($conn,addslashes($_REQUEST["id"]));
    $uname =mysqli_real_escape_string($conn,addslashes($_REQUEST["username"]));
    $mail =mysqli_real_escape_string($conn,addslashes($_REQUEST["email"]));
$passwd =mysqli_real_escape_string($conn,addslashes($_REQUEST["password"]));
$pno =mysqli_real_escape_string($conn,addslashes($_REQUEST["phone"]));


if ($conn->connect_error)
{
    die($conn->connect_error);
}

if(empty($_FILES["image"]["name"]))
{
    $q = "UPDATE `registration` SET `email`='$mail',`phno`='$pno',`pass`='$passwd' WHERE id='$id'"; 
}else

$q = "UPDATE `registration` SET `name`='$uname',`email`='$mail',`phno`='$pno',`pass`='$passwd',`image`='$location' WHERE id='$id'";

if ($conn->query($q) === TRUE) 
{
    alert("succesfully edited");
    header("location:index.php?route=home");
    
}
 else {
     alert("not edited");
     echo mysqli_error($conn);
 }
$conn->close();

}
    
function deleteLikeById($id,$user)
{

    $conn = new mysqli("localhost","root","","login");

    $q = "delete from likecount where id='$id' and name='$user'";
    if ($conn->query($q) === TRUE)
    {
        return true;
    }
     else {
       return false;
     }
     $conn->close(); 
}

    if(isset($_GET['like']))
    {
        $conn = new mysqli("localhost","root","","login");
       $id =mysqli_real_escape_string($conn,addslashes($_REQUEST["like"]));
        //$id=$_GET['like'];
        $user=$_SESSION['user'];
        $q = "INSERT INTO `likecount`(`name`, `id`, `like`) VALUES ('$user','$id',1)";
        if ($conn->query($q) === TRUE)
        {
           // alert("like");
        }
         else {
            deleteLikeById($id,$user);
         }
         $conn->close();

    }


    if(isset($_GET['delete']))
    {
        $conn = new mysqli("localhost","root","","login");
        $name=$_SESSION['user'];
        $id =mysqli_real_escape_string($conn,addslashes($_REQUEST["delete"]));
 //$id=$_GET['delete'];
 

 $result = mysqli_query($conn,"DELETE FROM `post` WHERE name='$name' and id='$id'");
 if(mysqli_affected_rows($conn)>0) 
 {
     alert("deleted");
 }
  else {
      alert("permission denied");
  }
 $conn->close();
    }



    function Edit($id)
    {
     @   session_start();
        $name=$_SESSION['user'];
        $conn = new mysqli("localhost","root","","login");
        $id=mysqli_real_escape_string($conn,addslashes($id));
    $result = mysqli_query($conn,"SELECT * FROM post WHERE name='$name' AND id=".$id);
    $html="";
    if(mysqli_num_rows($result)>0)
    {
     while($row=mysqli_fetch_array($result))
     {

        $html.=editPost($row[0],$row[2],$row[3],$row[4]);
     }

     
    }
    else
    {
        alert("Only Auther can edit");
        echo '<script>window.location = "./?route=home";</script>';
    }
    $conn->close();
    return $html;
}

    if(isset($_POST['savePost']))
{
    

   $fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
    $location="upload/" . $newFilename;
    $conn = new mysqli("localhost","root","","login");
$tit =mysqli_real_escape_string($conn,addslashes($_REQUEST["tittle"]));
$cont =mysqli_real_escape_string($conn,addslashes($_REQUEST["content"]));

if ($conn->connect_error)
{
    die($conn->connect_error);
}
//$id=$_POST['id'];
$id=mysqli_real_escape_string($conn,addslashes($_REQUEST["id"]));
if(empty($_FILES["image"]["name"]))
{
    $q = "UPDATE `post` SET `title`='$tit',`body`='$cont' WHERE id='$id'"; 
}else

$q = "UPDATE `post` SET `title`='$tit',`body`='$cont',`image`='$location' WHERE id='$id'";

if ($conn->query($q) === TRUE) 
{
    alert("succesfully edited");
    header("location:index.php?route=home");
}
 else {
     alert("not edited");
     echo mysqli_error($conn);
 }
$conn->close();

}

function getLike($id)
{
    $conn = new mysqli("localhost","root","","login");
    $id=mysqli_real_escape_string($conn,addslashes($id));
    $user=$_SESSION['user'];
    $result = mysqli_query($conn,"SELECT count(`like`) FROM likecount WHERE  id='$id' group by id");

    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        return $row[0];
    }else{
    return 0;
    }
    $conn->close();
}


// if (isset($_GET['pageno'])) {
//     $pageno = $_GET['pageno'];
// } else {
//     $pageno = 1;
// }
// $no_of_records_per_page = 2;
// $offset = ($pageno-1) * $no_of_records_per_page;

// $conn = new mysqli("localhost","root","","login");
// if ($conn->connect_error)
// {
//     die($conn->connect_error);
// }

// $total_pages_sql = "SELECT COUNT(*) FROM post";
// $result = mysqli_query($conn,$total_pages_sql);
// $total_rows = mysqli_fetch_array($result)[0];
// $total_pages = ceil($total_rows / $no_of_records_per_page);

// $sql = "SELECT * FROM post LIMIT $offset, $no_of_records_per_page";
// $res_data = mysqli_query($conn,$sql);
// $html='';
// while($row = mysqli_fetch_array($res_data)){
//     $html.=viewPost($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
// }
// return $html;
// $conn->close();


?>