<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Message Counter</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <style>
            body {
                padding-top: 70px;
                /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
            }
        </style>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <form id="frmCreateMessage" method="post">
                    <input type="hidden" name="addMessage">
                    <div class="col-lg-12 text-center">
                        <h1>Create New Test Message</h1>
                        <button type="button" class="btn btn-primary" id="btnCreateMessage">Create Test Message</button>
                        <br/><br/>
                        <div>
                            <h5>Current Unread Message Number: <span class="label label-default" id="spanCounter"></span></h5>
                            <p><strong>Note:</strong> This number is not refreshed if the number reset from frontend</p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                if (localStorage.getItem("messagecount") === null) {
                    localStorage.setItem("messagecount", 0);
                }
                $('#spanCounter').html(Number(localStorage.getItem("messagecount")));
            });
            //check if message counter is over or equal max message counter
            $('#btnCreateMessage').click(function () {
                if (Number(localStorage.getItem("messagecount")) >= 10) {
                    alert('too many messages');
                } else {
                    localStorage.setItem("messagecount", Number(localStorage.getItem("messagecount")) + 1);
                    $('#spanCounter').html(Number(localStorage.getItem("messagecount")));
                }
            });
        </script>
    </body>
</html>