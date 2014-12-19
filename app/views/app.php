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

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="fa fa-coffee"></i> Cafe Publisher</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a ng-href="/app/dashboard"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                    <li><a ng-href="/app/fuse"><i class="fa fa-magic"></i> Fuse</a></li>
                    <li><a ng-href="/app/reports"><i class="fa fa-area-chart"></i> Reports</a></li>
                    <li><a ng-href="/app/accounts"><i class="fa fa-user"></i> Accounts</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="<?php echo Gravatar::src(Auth::user()->email, 25); ?>" class="img-circle navbar-avatar"> <?php echo Auth::user()->first_name.' '.Auth::user()->last_name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a ng-href="/app/settings"><i class="fa fa-cog"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout" target="_self"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
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

                <p>Made with <i class="fa fa-heart text-danger"></i> in chilly California.</p>
            </div>
        </div>

    </footer>
</body>
</html>
