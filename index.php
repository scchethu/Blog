<?php
 session_start();
include_once"view.php";
include_once"controller.php";

?>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
          <script src="./minified/sceditor.min.js"></script>
          <script src="./minified/icons/monocons.js"></script>
          <script src="./minified/formats/bbcode.js"></script>
  
          <style>
              html {
                  font-family: Arial, Helvetica, sans-serif;
                  font-size: 13px;
              }
              form div {
                  padding: .5em;
              }
              code:before {
                  position: absolute;
                  content: 'Code:';
                  top: -1.35em;
                  left: 0;
              }
              code {
                  margin-top: 1.5em;
                  position: relative;
                  background: #eee;
                  border: 1px solid #aaa;
                  white-space: pre;
                  padding: .25em;
                  min-height: 1.25em;
              }
              code:before, code {
                  display: block;
                  text-align: left;
              }
          </style>





    </head>
<body>

 
<div class="container pb-3">
<?php

if(isset($_GET['route']))
{
    switch($_GET['route']){

        case "reg":echo Box(registerForm());
            break;
            case "fpass":echo Box(fpassword());
            break;
        case "home": //echo home(controllPost());
        if(!isset($_SESSION['user']))
        echo Box(loginForm());
        else
        {
        $arr=controllPost();
        $pageno=$arr['pageno'];
        $total_pages=$arr['total_pages'];
         echo home($arr['html']);
        ?>
<div class="row m-sm-5">
<div class="col-md-4"></div>
<div class="col-md-8 mx-auto  d-block"  style="margin-top: 15px">
<nav>
          <ul class="pagination justify-content-center pb-3">
              <li  class="page-item active"><a href="?route=home&pageno=1" class="page-link">First</a></li>
              <li class="<?php if($pageno<=1){ echo 'disabled'; } ?> page-item active">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?route=home&pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
              </li>
              <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item active">
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?route=home&pageno=".($pageno + 1); } ?>" class="page-link">Next</a>
              </li>
              <li class="page-item active"><a href="?route=home&pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
          </ul>
      </nav>
</div>
</div>
        
       
<?php
        }
        break;
        case "add":
        echo home(AddPost());
        break;
        case "my":
        echo home(yPost());
        break;
        case "edt":
        echo home(EditProfile());
        break;
        case "logout":
        session_destroy();
        header("location:index.php");

        break;

        case "edit":
        echo home(Edit($_GET['id']));
        break;
        default:
        if(isset($_SESSION['user']))
        echo home(controllPost());
        else
        echo Box(loginForm());

    }
}else
{
    if(isset($_SESSION['user']))
    echo home(controllPost());
    else
    echo Box(loginForm());

}

    ?>

</div>

      


</body>
<script>
			var textarea = document.getElementById('example');
			sceditor.create(textarea, {
				format: 'xhtml',
				icons: 'monocons',
				style: './minified/themes/content/default.min.css'
			});


			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = './minified/themes/' + themeInput.value + '.min.css';

				document.getElementById('theme-style').href = theme;
			};


   
		</script>
</html>