

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" href="bootstrap/js/themes/base/jquery-ui.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <script src="bootstrap/js/ui/jquery-ui.js"></script>
        <script src="bootstrap/js/ui/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js'></script>
        <script src="bootstrap/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script>
            $(document).ready(function () {
                $('[data-toggle=offcanvas]').click(function () {
                    $('.row-offcanvas').toggleClass('active');
                });
            });
        </script>
        <style>
            body{ padding-left:20px;padding-right:20px;}


            .menu {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: red;
            }
            .menu li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .menu li ul{
                display: none;
            }
            .menu li a:hover {
                background-color: black;
                color: white;
            }

            .menu li a .active{
                color: red;
            }
        </style>
        <style>
            .dropbtn {
                background-color: red;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover {background-color: #E5381D  }
            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropdown:hover .dropbtn {
                background-color: #A72C19  ;
            }




            .dropdown-submenu.dropdown-menu{

                top: 0;
                left: 100%;
                margin-top:-6px;
                margin-left:-1px;
                -webkit-border-radius:0 6px 6px 6px;
                -moz-border-radius:0 6px 6px 6px;
                border-radius:0 6px 6px 6px;
            }
            .dropdown-menu{
                display:none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 100;
            }
            .dropdown-menu li a{
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;

            }
            .dropdown-menu li a:hover {background-color: #E5381D;  }
            .dropdown-submenu{ position: relative; }
            .dropdown-submenu>.dropdown-menu{
                top:0;
                left:100%;
                margin-top:-6px;
                margin-left:-1px;
                -webkit-border-radius:0 6px 6px 6px;
                -moz-border-radius:0 6px 6px 6px;
                border-radius:0 6px 6px 6px;
            }
            .dropdown-submenu>a:after{
                display:block;
                content:" ";
                float:right;
                width:0;
                height:0;
                border-color:transparent;
                border-style:solid;
                border-width:5px 0 5px 5px;
                border-left-color:#cccccc;
                margin-top:5px;margin-right:-10px;
            }
            .dropdown:hover.dropdown-menu{display: block;}
            .dropdown-submenu:hover>a:after{
                border-left-color:#555;
            }
            .dropdown-submenu.pull-left{ float: none; }
            .dropdown-submenu.pull-left>.dropdown-menu{
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
        </style>
        <script>
            (function ($) {
                $(document).ready(function () {
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);
        </script>
        <script type="text/javascript">
            $(function () {
                $("#payingForType").change(function () {
                    if ($(this).val() == "Sales Adv Booking New") {
                        $(".dvField1").show();
                    } else {
                        $(".dvField1").hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("#payingForType").change(function () {
                    if ($(this).val() == "Sales Adv Booking Used Car") {
                        $(".dvField2").show();
                    } else {
                        $(".dvField2").hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("#payingForType").change(function () {
                    if ($(this).val() == "Sales Delivery") {
                        $(".dvField3").show();
                    } else {
                        $(".dvField3").hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("#payingForType").change(function () {
                    if ($(this).val() == "Sales Recevable") {
                        $(".dvField4").show();
                    } else {
                        $(".dvField4").hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("#payingForType").change(function () {
                    if ($(this).val() == "Sales Used Car") {
                        $(".dvField5").show();
                    } else {
                        $(".dvField5").hide();
                    }
                });
            });
        </script>      
        <script>
                    var display = setInterval(function () {
                    Time()
                    }, 0);
                    function Time()
                    {
                    var date = new Date();
                            var time = date.toLocaleTimeString();
                            document.getElementById("example").innerHTML = time;
                    }
        </script>
    </head>
    <body>
        <div style="display:flex; justify-content: flex-end; padding: 10px;font-size: 15px; background-color:black; color:white; ">
            <p style="margin-right: 10px;">
                <i class="fa fa-clock-o" aria-hidden="true"><b id="example"></b></i>
            </p>
            <i class="fa fa-user-o" style=";font-size:17px; "><?php //echo $_SESSION['ii']; ?></i> 
            <li class=" list-unstyled">
                <a href="logout.php" style="color:white;font-size: 15px; float:right; padding-left:12px; "><span class="fa fa-sign-out"/>LogOut</a>
            </li>
        </div>
        <div class="navbar  navbar-default" role="navigation" style="background-color:red; color:white; margin:0;">
            <div class="container-fluid">
                <center> <h3 >   Vehicle Sales Management system </h3></center>
            </div>
        </div>
