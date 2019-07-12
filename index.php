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
    </head>
</html>
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
        case "home":
        if(!isset($_SESSION['user']))
        echo Box(loginForm());
        else
                    echo home(controllPost());
        break;
        case "add":
        echo home(addPost());
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

</html>