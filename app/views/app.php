<!DOCTYPE html>
<html lang="en" ng-app="cafePublisherApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cafe Publisher</title>

    <link href="/css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.3.6/angular-route.min.js"></script>

    <script src="/js/app.js"></script>
    <script src="/js/controllers.js"></script>

    <base href="/app">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Cafe Publisher</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a ng-href="/app/dashboard">Dashboard</a></li>
                    <li><a ng-href="/app/fuse">Fuse</a></li>
                    <li><a ng-href="/app/reports">Reports</a></li>
                    <li><a ng-href="/app/accounts">Accounts</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a ng-href="/app/settings">Settings</a></li>
                    <li><a href="/logout" target="_self">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div ng-view></div>

    <footer class="container">

        <hr>

        <div class="row text-center">
            <div class="col-lg-12">
                <p>
                    Copyright <?php echo date('Y'); ?>
                </p>

                <p>Made with <i class="fa fa-heart"></i> in Sunny California.</p>
            </div>
        </div>

    </footer>
</body>
</html>
