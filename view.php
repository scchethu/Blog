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
                    <button type="submit"  name="login" value="Login"><i class="fas fa-sign-in-alt"></i> Login</button>
                    <a href="?route=fpass" style="float:left" /> Forgot Password?</a>
                    <a href="?route=reg" /> Not Register?</a>
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
                  <button type="submit" name="reg" value="Register"><i class="fas fa-user-plus"></i> Register</button>
                  <a href="index.php">Move to login page</a>
                  <div class="clearfix"></div>
              </form>
';
}
function fPassword()
{
    return ' <h1 class="heading">Forgot Password</h1>
    <form method="post" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="number"  name="phone" placeholder="Enter phone number" required>
                <button type="submit"  name="otp" value="Generate otp"><i class="fas fa-key"></i> Get pin</button>
                <input type="number"  name="otp" placeholder="Enter pin" required>
                <!--<input type="password"  name="password" placeholder="Enter new password" required>-->
                <button type="submit"  name="fpass" value="------"> Reset Password</button>
                <a href="index.php">Move to login page</a>
                <div class="clearfix"></div>
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
<nav class="navbar navbar-expand-sm fixed-top navbar-dark" id="cnav">
  <img class="navbar-brand float-left" href="#"><img src="./logo/onlinelogomaker-071619-1516-2363.png" width="100px" height="50px"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars text-white"></i>
  </button>
  
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav  float-right">
    <li class="nav-item">
      <a class="nav-link" href="?route=home">Home <i class="fas fa-home"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?route=add">Add <i class="far fa-plus-square"></i></a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="?route=my">Mypost <i class="far fa-address-card"></i></a>
          </li>
    <li class="nav-item">
      <a class="nav-link glyphicon glyphicon-user" href="?route=logout">logout <i class="fas fa-sign-out-alt"></i></a>
    </li>
  </ul>
</div>
</nav>


<div class="row" style="margin-top: 80px">
    <div class="col-md-4">
            '.controllProfile().'
    </div>
    <div class="col-md-8" style="margin-top: 15px">
          <div class="font-weight-bold lead text-center shadow p-2">
              <h2 class="hhead">My Blog</h2>
          </div>
          <div>
          '.$va.'
        </div>
        
        </div>
</div>';


}


function viewProfile($name,$p,$im,$em){
    $btn="";
    if($_GET['route']!="edt")
    {
        $btn= '<a href ="?route=edt" class="btn btn-primary m-2 " ><i class="far fa-user-circle"></i> EditProfile</a>';
    }
    
    return '
    <div class="card">
            <div class="card-header text-white" style="background-color:#6F1E51">
                    <h2 class="hhead">Profile</h2>
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
           '.$btn.'
        </div>';
}
function SaveProfile($id,$un,$p,$ph,$im,$em){
    return '
    <div class="card mt-3 shadow">
        <div class="card-header">
                <h2 class="hhead">Edit Profile</h2>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                
                      <input type="text" name="username" value="'.$un.'" >
                      <input type="hidden" value="'.$id.'" name="id">
                      <input type="text"  name="email" value="'.$em.'" placeholder="email id" required>
                      <input type="number"  name="phone" value="'.$ph.'" placeholder="Enter phone number" required>
                      <input type="text" name="password" value="'.$p.'"  placeholder="Enter Password" required>
                    
                      <label for="files" class="btn btn-primary">Select Image</label>
                      <input type="file" accept="image/*" id="files" style="display: none" class="form-control-file border"  value="'.$im.'" name="image">
                      <button type="submit"  name="edt" value="SaveProfile"> <i class="far fa-user-circle"></i> Save Profile</button>
                      <div class="clearfix"></div>
                  </form>
                  </div>
    </div>

    ';
    }

function viewPost($id,$n,$t,$c,$im,$da,$pno)
{
return ' <div class="card mt-3 shadow">
    
        <div class="card-header font-weight-bold text-white" style="background-color:#3B3B98">
                '.$t.'
        <span class="float-right text-white">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body">
            '.stripslashes($c).'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Date:'.$da.'</span>
                   <br/>
                   <b><i class="fas fa-comments"></i> Comment</b> 
            </div>
            <div class="card-text float-right">
            <div class="btn-group">
                <a href ="?route=home&like='.$id.'&pageno='.$pno.'"class="btn btn-link text-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
              </div>
              <br/>
              <div>
                    <b>Likes: '.getLike($id).'</b> 
                  </div>
                </div>
        </div>
        
    </div>';

}


function AddPost()
{
    return ' <div class="card mt-3 shadow">
            <div class="card-header">
                    <h2 class="hhead"> Add post</h2> 
            </div>
        
            <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="tittle"  placeholder="Enter blog tittle" required>
                    <textarea id="example" name="content" style="height:300px;width:100%;">
                        </textarea>
                <input class="form-control-file" type="file" name="image" required>
                <button type="submit"  name="add" value="AddPost"><i class="far fa-address-card"></i> Add Post</button>
            </form>
            </div>
        </div>';

}
function myPost($id,$n,$t,$c,$im,$da)
{
return ' <div class="card mt-3 shadow">
    
        <div class="card-header font-weight-bold text-white" style="background-color:#3B3B98">
                '.$t.'
        <span class="float-right text-white">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body">
            '.stripslashes($c).'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Date:'.$da.'</span> 
                   <br/>
                   <b><i class="fas fa-comments"></i> Comment</b> 
            </div>
            <div class="float-right">
                    '.getLike($id).'
               </div> 
            
            <div class="btn-group float-right">
                   
                <a href ="?route=my&like='.$id.'"class="btn btn-link text-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                <a href ="?route=edit&id='.$id.'" class="btn btn-link text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-warning"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                <a href ="?route=my&delete='.$id.'" class="btn btn-link text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-dark"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
              </div>
        </div>
        
    </div>';

}
function EditPost($id,$t,$c,$img)
{
    return ' <div class="card mt-3 shadow">
            <div class="card-header">
                    <h2 class="hhead"> Edit post</h2> 
            </div>
        
            <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="tittle" value="'.$t.'" placeholder="Enter blog tittle">
                <textarea id="example" name="content" style="height:300px;width:100%;">
                    '.stripslashes($c).'
                </textarea>
                <input type="file" value="'.$img.'" name="image">
                <input type="hidden" value="'.$id.'" name="id">
                <button type="submit"  name="savePost" value="EditPost"><i class="far fa-address-card"></i> Save Post</button>
            </form>
            </div>
        </div>';

}





?>