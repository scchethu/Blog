<?php


function Box($content){

    return '<div class="box col-md-12 mx-auto">
'.$content.'

    </div>';
}

function alert($msg)
{

    echo "<script>alert('".$msg."');</script>";

}
function loginForm(){

    return '
        </body>
        
        <div class="row"> 
            <div class="col-lg-6 d-none  my-auto d-lg-block" style="height: 100%">
                <img src="./logo/login.png" style="width: 100%; height: auto;" />
            </div>
            <div class="col-lg-6">
                    <div class="card-body">
          <h1 class="heading card-title text-dark">Login Page</h1>
                <form method="post"  class="form-signin" action="">
                    <input type="text" class="form-control" name="emailid" placeholder="Enter Username" required/>
                    <input type="password" class="form-control"  name="password" placeholder="Enter Password" required/>
                    <div style="margin-top: 10px">
                    <button type="submit"  class="btnb btn-lg btn-primary  text-uppercase" name="login" value="Login"><i class="fas fa-sign-in-alt"></i> Login</button>
                  </div>
                    <hr class="my-4">
                    <a href="?route=fpass" class="card-link text-primary" style="float:left" /> Forgot Password?</a>
                    <a href="?route=reg"  class="card-link text-primary" /> Register Now</a>
                    <a href="#"  class="card-link text-primary" /> </a>
                    <a href="#" class="btnb btn-google btn-user  btn-block text-center">
                        <i class="fab fa-google fa-fw te"></i> Login with Google
                      </a>
                      <a href="#" class="btnb btn-facebook btn-user btn-block text-center">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                      </a>
                    <div class="clearfix"></div>
                </form>
          </div>
        </div>
        </div>
        <body>
';

}
function registerForm(){
return '
</body>
<div class="row"> 
    <div class="col-lg-6 d-none  my-auto d-lg-block" style="height: 100%">
        <img src="./logo/regi.png" style="width: 100%; height: auto;" />
    </div>
    <div class="col-lg-6">
 <h1 class="heading card-title text-dark">Registration</h1>
        <form method="post"  class="form-signin text-center" action="" enctype="multipart/form-data">
          <img class="img-thumbnail" id="uploadPreview" style="width: 100px; height: 100px;" />
                  <input type="text" class="form-control" name="name" placeholder="name" required>
                  <input type="text" class="form-control" name="username" placeholder="username" required>
                  <input type="text" class="form-control" name="email" placeholder="email" required>
                  <input type="number" class="form-control" name="phone" placeholder="Enter phone number" required>
                  <input type="password" class="form-control" name="password"  placeholder="Enter Password" required>
                  <div class="custom-file">
<input id="uploadImage" class="custom-file-input" type="file" name="image" onchange="PreviewImage();"  required>
<label class="custom-file-label" for="customFile">Choose image</label>
</div>
<script type="text/javascript">
 $("#uploadPreview").hide();
  function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          $("#uploadPreview").show();
      };
  };

</script>
                  <button type="submit" class="btnb btn-lg btn-primary  text-uppercase" name="reg" value="Register"><i class="fas fa-user-plus"></i> Register</button>
                  <hr class="my-4">
                  <a href="index.php"  class="card-link text-primary">Already Registered?</a>
                  <div class="clearfix"></div>
              </form>
   </div>
</div>
            </div>
            <body>
';
}
function fPassword()
{
    return ' 
  </body>
  <div class="row"> 
      <div class="col-lg-6 d-none  my-auto d-lg-block" style="height: 100%">
          <img src="./logo/login.png" style="width: 100%; height: auto;" />
      </div>
      <div class="col-lg-6">

    <h1 class="heading card-title text-dark">Forgot Password</h1>
    <form method="post" action="">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <input type="number" class="form-control"  name="phone" placeholder="Enter phone number" required>
                <button type="submit" class="btnb btn-lg btn-primary  text-uppercase" name="otp" value="Generate otp"><i class="fas fa-key"></i> Get pin</button>
                <input type="number" class="form-control" name="otp" placeholder="Enter pin" required>
                <!--<input type="password"  name="password" placeholder="Enter new password" required>-->
                <button type="submit" class="btnb btn-lg btn-primary  text-uppercase" name="fpass" value="------"> Reset Password</button>
                <hr class="my-4">
                <a href="index.php"  class="card-link text-primary">Move to login page</a>
                <div class="clearfix"></div>
            </form>
            </div>
      </div>
      <body>';

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
  <img class="navbar-brand float-left" href="#"><img src="./logo/logo(3).png" width="100px" height="50px"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars text-white"></i>
  </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item  d-sm-none ">
        <div class="searchbar_mob">
        <input class="search_input_mob sear"  type="text" name="Search" placeholder="Search...">
        <a href="#" id="sell" class="search_icon_mob"><i class="fas fa-search"></i></a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?route=home">Home <i class="fas fa-home"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?route=add">Add <i class="far fa-plus-square"></i></a>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link" href="?route=my">My post <i class="far fa-address-card"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  id="navbardrop" data-toggle="dropdown">Category <i class="far fa-list-alt"></i>
            <div class="dropdown-menu" style="background-color: #E40E18 ">
        <a class="dropdown-item text-black" href="?route=Cat&opt=Travel">Travel</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Technology">Technology</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Design">Design</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Culture">Culture</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Business">Business</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Politics">Politics</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Opinion">Opinion</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Science">Science</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Health">Health</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Style">Style</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Students">Students</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=News">News</a>
        <a class="dropdown-item text-black" href="?route=Cat&opt=Jobs">Jobs</a>
      </div></a>
          </li>
          
          <li class="nav-item d-sm-none ">
            <a class="nav-link" href="?route=pro">My Profile <i class="far fa-user-circle"></i></a>
          </li>
    <li class="nav-item">
      <a class="nav-link glyphicon glyphicon-user" data-target="#logoutModal" data-toggle="modal" href="#">logout <i class="fas fa-sign-out-alt"></i></a>
    </li> 
  </ul>  
</div>

<div class="searchbar d-none d-sm-block float-left">
      
      <input class="search_input sea" type="text" name="Search" placeholder="Search...">
  <a href="#" id="sel" class="search_icon"><i class="fas fa-search"></i></a>
  </div>
  <script>
   
      $("#sel").on("click", function (e) {
       
      // alert ($("#sea").val());
        window.location.href="./index.php?route=sea&sea1="+$(".sea").val();
    
    });
    </script>
  <script>
    
  $("#sell").on("click", function (e) {
    
  // alert ($("#sea").val());
    window.location.href="./index.php?route=sea&sea1="+$(".sear").val();
    
});
    
</script>


</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="?route=logout">Logout</a>
        </div>
      </div>
    </div>
  </div>



<div class="row" style="margin-top: 80px">
    <div class="col-md-4 d-none d-sm-block" style="margin-bottom:15px">
            '.controllProfile().'
    </div>
    <div class="col-md-8" style="margin-top:10px" >
          <div class="font-weight-bold lead text-white text-center shadow p-2" style="background-color: #FE8A11 ">
              <h2 class="hhead">My Blog</h2>
          </div>
          <div class="">
          '.$va.'
        </div>
        
        </div>
</div>';
}


function viewProfile($name,$uname,$p,$im,$em){
    $btn="";
    if($_GET['route']!="edt")
    {
      $btn= '<a href ="?route=edt" class="btn btn-primary m-2 " ><i class="far fa-user-circle"></i> EditProfile</a>';
    }
    
    return '
    <div class="card">
            <div class="card-header text-white" style="background-color: #FE8A11 ">
                    <h2 class="hhead">Profile</h2>
            </div>
            <img class="rounded-circle mx-auto mt-1" width="100px" height="100px" src="'.$im.'" alt="Card image">

            <div class="card-body">
                <div>
                    Name : '.$name.'
                </div>
                <div>
                  Username : '.$uname.'
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
function SaveProfile($id,$n,$un,$p,$ph,$im,$em){
    return '
    <div class="card mt-3 shadow">
        <div class="card-header">
                <h2 class="hhead">Edit Profile</h2>
        </div>
        <div class="card-body">
            <form method="post" action="" class="text-center" enctype="multipart/form-data">
              <img class="img-thumbnail tex" src="'.$im.'" id="uploadPreview" style="width: 200px; height: 100px;" />
                      <input type="text" name="name" value="'.$n.'" >
                      <input type="text" name="username" value="'.$un.'" >
                      <input type="hidden" value="'.$id.'" name="id">
                      <input type="text"  name="email" value="'.$em.'"  required>
                      <input type="number"  name="phone" value="'.$ph.'" placeholder="Enter phone number" required>
                      <input type="text" name="password" value="'.$p.'"  placeholder="Enter Password" required>
                      <div class="custom-file">
                          <input id="uploadImage" class="custom-file-input" type="file" name="image" onchange="PreviewImage();" />
                          <label class="custom-file-label" for="customFile">Choose image</label>
                          </div> 
<script type="text/javascript">
 $("#uploadPreview").hide();
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
            $("#uploadPreview").show();
        };
    };

</script>

                      <a class="btn btn-primary" data-target="#saveProfile" data-toggle="modal"><i class="fas fa-user-circle"></i> Save Profile</a>
                      <div class="clearfix"></div>
                
                <div class="modal fade" id="SaveProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ready to Edit Profile?</h5>
                        </div>
                        <div class="modal-body">Are you sure that you want to make these changes?.</div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <button type="submit" class=" btn-primary"  name="edt" value="SaveProfile"><i class="far fa-user-circle"></i> Save Profile</button>
                        </div>
                      </div>
                    </div>
                  </div>  
                  </form>
                  </div>
    </div>

    ';
    }

function viewPost($id,$n,$t,$c,$im,$da,$pno)
{
return ' <div class="card mt-3 shadow border-radius:.30rem;">
    
        <div class="card-header font-weight-bold text-white " style="background-color:#3B3B98">
          '.stripslashes($t).'
        <span class="float-right text-white">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body ex3">
            '.stripslashes($c).'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Date:'.$da.'</span>
                   <br/>
                   <b>
                    
                <a href ="?route=com&id='.$id.'" class="btn btn-primary m-2 " ><i class="far fa-comments"></i> Comments</a></b> 
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
  
  function userPost($id,$n,$t,$c,$im,$da)
{
return ' <div class="card mt-3 shadow border-radius:.30rem;">
    
        <div class="card-header font-weight-bold text-white " style="background-color:#3B3B98">
          '.stripslashes($t).'
        <span class="float-right text-white">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body ex3">
            '.stripslashes($c).'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Date:'.$da.'</span>
                   <br/>
                   <b>
                    
                <a href ="?route=com" class="btn btn-primary m-2 " ><i class="far fa-comments"></i> Comments</a></b> 
            </div>
            <div class="card-text float-right">
            <div class="btn-group">
                <a href ="?route=home&like='.$id.'"class="btn btn-link text-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
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
            <div class="card-header text-center" style="background-color:#3B3B98">
                    <h2 class="hhead text-white"> Add post</h2> 
            </div>
        
            <div class="card-body">
            <form method="POST" class="text-center" action="" enctype="multipart/form-data">

              
             
              <img class="img-thumbnail tex " id="uploadPreview" style="width: 200px; height: 100px;" />
                <input type="text" name="tittle"  placeholder="Enter blog tittle" required>
                    <textarea id="example" name="content" style="height:300px;width:100%;">
                        </textarea>
                        <div class="col-auto my-1">
                            <select name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              <option selected>Select content category</option>
                              <option value="Travel">Travel</option>
                              <option value="Technology">Technology</option>
                              <option value="Design">Design</option>
                              <option value="Culture">Culture</option>
                              <option value="Business">Business</option>
                              <option value="Politics">Politics</option>
                              <option value="Opinion">Opinion</option>
                              <option value="Science">Science</option>
                              <option value="Health">Health</option>
                              <option value="Style">Style</option>
                              <option value="Students">Students</option>
                              <option value="News">News</option>
                              <option value="Jobs">Jobs</option>
                            </select>
                        </div>
                        
                        <div class="custom-file">
                            <input id="uploadImage" class="custom-file-input" type="file" name="image" onchange="PreviewImage();" />
                            <label class="custom-file-label" for="customFile">Choose image</label>
                            </div> 
<script type="text/javascript">
  $("#uploadPreview").hide();
  function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          $("#uploadPreview").show();
      };
  };

</script>

                <button type="submit" class=" btn-primary"  name="add" value="AddPost"><i class="far fa-address-card"></i> Add Post</button>
            </form>
            </div>
        </div>';

}
function myPost($id,$n,$t,$c,$im,$da)
{
return ' <div class="card mt-3 shadow">
    
        <div class="card-header font-weight-bold text-white" style="background-color:#3B3B98">
                '.stripslashes($t).'
        <span class="float-right text-white">#'.$id.'</span>
        </div>
        <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
        <div class="card-body ex3">
            '.stripslashes($c).'
        </div>
        <div class="card-footer">
            <div class="card-text float-left">
                    <b>Author: '.$n.'</b>
                    <br/>
                   <span class="text-muted">Date:'.$da.'</span> 
                   <br/>
                   <b>
                    
                   <a href ="?route=com&id='.$id.'" class="btn btn-primary m-2 " ><i class="far fa-comments"></i> Comments</a></b> 
            </div>
            <div class="card-text float-right">
                <div class="btn-group">
                    <a href ="?route=home&like='.$id.'"class="btn btn-link text-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                  </div>
                  <br/>
                  <div>
                        <b>Likes: '.getLike($id).'</b> 
                      </div>
                    </div>
            <div class="btn-group float-right">
                   
                <a href ="?route=edit&id='.$id.'" class="btn btn-link text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-warning"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                <a href ="#" data-target="#deletepost" data-toggle="modal" class="btn btn-link text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-dark"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
              </div>
              
        </div>
        <div class="modal fade" id="deletepost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you ready?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Are you sure that you want to permanently remove this post from Blog?
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="?route=my&delete='.$id.'">Edit Post</a>
                </div>
              </div>
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
            <form method="POST" class="text-center" action="" enctype="multipart/form-data">
              <img class="img-thumbnail tex" src="'.$img.'" id="uploadPreview" style="width: 200px; height: 100px;" />
                <input type="text" name="tittle" value=" '.stripslashes($t).'" placeholder="Enter blog tittle">
                <textarea id="example" name="content" style="height:300px;width:100%;">
                    '.stripslashes($c).'
                </textarea>
                <div class="custom-file">
                    <input id="uploadImage" class="custom-file-input" type="file" name="image" onchange="PreviewImage();" />
                    <label class="custom-file-label" for="customFile">Choose image</label>
                    </div> 
<script type="text/javascript">
 $("#uploadPreview").hide();
  function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          $("#uploadPreview").show();
      };
  };

</script>
                <input type="hidden" value="'.$id.'" name="id">
                
                <a class="btn btn-primary" data-target="#editpost" data-toggle="modal"><i class="fas fa-address-card"></i> Save Post</a>
                <div class="clearfix"></div>
                
                <div class="modal fade" id="editpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ready to Edit Post?</h5>
                        </div>
                        <div class="modal-body">Select "Save Post" below if ready.</div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary"  name="savePost" value="EditPost"><i class="far fa-address-card"></i> Save Post</button>
                        </div>
                      </div>
                    </div>
                  </div>    
            </form>
            </div>
        </div>

        ';

}

function Comments($id)
{
return'
<div class="card mt-3 shadow">
  <div class="card-header text-center" style="background-color:#3B3B98">
          <h2 class="hhead text-white"> Comment</h2> 
  </div>

  <div class="card-body">
  <form method="POST" class="text-center" action="">
      <input type="hidden" value="'.$id.'" name="id">
          <textarea id="example" name="come" style="height:300px;width:100%;">
              </textarea>

              <button type="submit" class="btn btn-primary"  name="com" value="Comment"><i class="far fa-"></i> Comment</button>
    </form>
    </div>
    </div>
    <div class="card">
      <div class="card-header text-white" style="background-color: #FE8A11 ">
              <h2 class="hhead">Comments</h2></div>
      <div class="card-body">
      '.viewcom($id).'
              </div></div>';


}
function viewcomm($c,$name,$date)
{
  return '
  <div class="col-sm-9">
      <div class="card p-3">
      <div class="card-heading">
        
      <strong>'.$name.'</strong> <span class="text-muted">commented on '.$date.'</span>
      </div>
      <div class="card-body">
     '.$c.'
      </div>
    
      </div>
      </div>';

}
function postCat($id,$n,$t,$c,$im,$da)
{
  return ' <div class="card mt-3 shadow border-radius:.30rem;">
    
      <div class="card-header font-weight-bold text-white " style="background-color:#3B3B98">
        '.stripslashes($t).'
      <span class="float-right text-white">#'.$id.'</span>
      </div>
      <img class="card-img-top" style="max-height: 400px" src="'.$im.'" alt="Card image">
      <div class="card-body ex3">
          '.stripslashes($c).'
      </div>
      <div class="card-footer">
          <div class="card-text float-left">
                  <b>Author: '.$n.'</b>
                  <br/>
                 <span class="text-muted">Date:'.$da.'</span>
                 <br/>
                 <b>
                  
              <a href ="?route=com" class="btn btn-primary m-2 " ><i class="far fa-comments"></i> Comments</a></b> 
          </div>
          <div class="card-text float-right">
          <div class="btn-group">
              <a href ="?route=home&like='.$id.'"class="btn btn-link text-danger "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
            </div>
            <br/>
            <div>
                  <b>Likes: '.getLike($id).'</b> 
                </div>
              </div>
      </div>
      
  </div>';
}

?>