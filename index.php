<!DOCTYPE html>
<html>
    <head>
        <title>Vulnerable Server</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <!-- CTCTF -->
        <div class="container">
            <div class="page-header">
                <h1>Vulnerable Server</h1>
            </div>
            <p>
                Try to authenticate to this server. The flag is the password to the admin account. The password matches <code>^[a-zA-Z0-9_]*$</code>.
            </p>
            <form class="form-horizontal" action="login.php" method="GET">
                <div class="row">
                    <label for="username" class="control-label col-md-2">Username</label>
                    <div class="col-md-6">
                        <input type="text" name="username" id="username" class="form-control" autofocus autocomplete="off" />
                    </div>
                </div>
                <div class="row">
                    <label for="password" class="control-label col-md-2">Password</label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <label for="username" class="control-label col-md-2"></label>
                    <div class="col-md-6">
                        <input type="submit" id="password" class="btn btn-primary" />
                    </div>
                </div>
            </form>
        </div>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>