<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/validation_login.js"></script>
</head>
<body>

	<div class ="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SLP3K</a>
                </div>
            </div>
        </nav>
        <br><br>
    <h3 class="text-center">Login SLP3K</h2>    
    </div>
    
	 <br>
	<div class="container">
            <form action="server/loginserver.php" id = "login_form" class="form-horizontal" role="form" method="post" name="loginform" >
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-6">
                        <input id="idusername" type="text" class="form-control" name = "username" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label ">Password</label>
                    <div class="col-sm-6">
                        <input id="idpassword" type="password" id="desc" placeholder="" class="form-control" name ="password" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="button" onclick="ValidationForm()" id="login_submit" class="btn btn-primary btn-block" value="Login">
                    </div>
                </div>

                <div id="match_status"></div>

            </form> <!-- /form -->
    </div> <!-- ./container -->


    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Information</h4>
                </div>
                <div class="modal-body">
                    <p>Berhasil menambahkan progres</p>
                </div>
                <div class="modal-footer">
                    <a href="daftarprogres.html"><button type="button" class="btn btn-primary">OK</button></a>
                </div>
            </div>
        </div>
	</div>


</body>
</html>