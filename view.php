<?php


function Box($content){

    return '<div class="box col-md-6 mx-auto">
        
'.$content.'
    
    </div>';
}

function alert($msg)
{

    echo "<script>alert('".$msg."');</script>";

}
function loginForm(){

    return '
   
       
                <h1 class="heading">Login Page</h1>
                <form method="post" action="">
                    <input type="text" name="username" placeholder="Enter Username" required/>
                    <input type="password" name="password" placeholder="Enter Password" required/>
                    <input type="submit" name="login" value="Login"/>
                    <a href="?route=fpass" style="float:left" />Forgot Password?</a>
                    <a href="?route=reg" />Not Register?</a>
                    <div class="clearfix"></div>
                </form>
      
';

}
function registerForm(){
return '
 <h1 class="heading">Registration</h1>
        <form method="post" action="" enctype="multipart/form-data">
                  <input type="text"  name="username" placeholder="username" required>
                  <input type="text"  name="email" placeholder="email" required>
                  <input type="number"  name="phone" placeholder="Enter phone number" required>
                  <input type="password" name="password"  placeholder="Enter Password" required>
                  <input type="file" name="image">
                  <input type="submit" name="reg" value="Register"/>
                  <a href="index.php">Move to login page</a>
                  <div class="clearfix"></div>
              </form>
';
}
function fPassword()
{
    return ' <h1 class="heading">Forgot Password</h1>
    <form method="post" action="">
                <input type="text" name="username" placeholder="Username">
                <input type="number"  name="phone" placeholder="Enter phone number">
                <a href =""class="btn btn-info">Generate otp</a>
                <input type="number"  name="otp" placeholder="Enter otp">
                <input type="submit" name="fpass" value=""/>
            </form>
            </div>
        </div>';

}

function Card($h,$b){
    return'<div class="card">
            <div class="card-head">
'.$h.'
            </div>
            <div class="card-body">
             '.$body.'   
            </div>
        </div>';
}

function home($va)
{
return '
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Blog</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="?route=home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?route=add">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?route=logout">logout</a>
    </li>
  </ul>
</nav>


<div class="row " style="margin-top: 100px">
    <div class="col-md-4 ">
            '.controllProfile().'
    </div>
    <div class="col-md-8 ">
          <div class="font-weight-bold lead text-center shadow p-2">
              <h2>My Blog</h2>
          </div>
         '.$va.'
        
        </div>
</div>';

}

function viewProfile($name,$p,$im,$em){
    return '<div class="card">
            <div class="card-header">
            Profile
            </div>
            <img class="rounded-circle mx-auto mt-1" width="100px" height="100px" src="'.$im.'" alt="Card image">

            <div class="card-body">
                <div>
                    Name : '.$name.'
                </div>
                <div>
                        Phone : '.$p.'
                    </div>
                    <div>
                            Email id : '.$em.'
                        </div>
            </div>
        </div>';
}
function editProfile(){
    return '
     <h1 class="heading">Edit Profile</h1>
            <form method="post" action="" enctype="multipart/form-data">
                      <input type="text"  name="username" placeholder="username" required>
                      <input type="text"  name="email" placeholder="email" required>
                      <input type="number"  name="phone" placeholder="Enter phone number" required>
                      <input type="password" name="password"  placeholder="Enter Password" required>
                      <input type="file" name="image">
                      <input type="submit" name="edt" value="editProfile"/>
                      <div class="clearfix"></div>
                  </form>
    ';
    }

function viewPost($id,$n,$t,$c,$im)
{
return ' <div class="card mt-3 shadow">
    
        <div class="card-header font-weight-bold">
                '.$t.'
        <span class="float-right text-muted">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body">
            '.$c.'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Created date:12-12-1996</span> 
            </div>
            <div class="btn-group float-right">
                <a href ="?like='.$id.'"class="btn btn-primary">'.getLike($id).' Likes</a>
                <a href ="?route=edit&id='.$id.'" class="btn btn-warning">Edit</a>
                <a href ="?route=home&delete='.$id.'" class="btn btn-danger">Delete</a>
              </div>
        </div>
        
    </div>';

}


function addPost()
{
    return ' <div class="card mt-3 shadow">
            <div class="card-header">
            Add post 
            </div>
        
            <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="tittle"  placeholder="Enter blog tittle" required>
                <input type="text" name="content" placeholder="Enter your blog" required>
                <input class="form-control-file" type="file" name="image" required>
                <input type="submit" name="add" value="addPost">
            </form>
            </div>
        </div>';

}
function editPost($id,$t,$c,$img)
{
    return ' <div class="card mt-3 shadow">
            <div class="card-header">
            Edit post 
            </div>
        
            <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="tittle" value="'.$t.'" placeholder="Enter blog tittle">
                <input type="text" name="content" value="'.$c.'" placeholder="Enter your blog">
                <input type="file" value="'.$img.'" name="image">
                <input type="hidden" value="'.$id.'" name="id">
                <input type="submit" name="savePost" value="editPost">
            </form>
            </div>
        </div>';

}





?>