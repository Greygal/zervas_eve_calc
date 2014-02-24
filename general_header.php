<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/ico/favicon.png">

        <title>| EVE Management Website</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/jasny-bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/stickyfooter.css" rel="stylesheet">
        <link href="/css/fileuploader.css" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
            
        <script type="text/javascript">
            var igb = <?php echo (isset($igb) && $igb == true) ? 'true' : 'false';?>; 
        </script>    
    </head>
    <body>
        <!-- Wrap all page content here -->
        <div id="wrap">
            <div class="container">
                <div class="header">
                    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">Alliance Manager</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- <ul class="nav navbar-nav"> -->
                                <?php //if($logged_in): ?>
                                <!-- <li class="active"><a href="#">Character Tools</a></li>
                                <li><a href="#">Combat Tools</a></li>
                                <li><a href="#">Industry Tools</a></li> -->
                                <?php //endif; ?>
                            <!-- </ul> -->

                            <!-- <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form> -->
                                <?php if(isset($trusted) && $trusted): ?>
                                <span class="badge badge-default">Trusted</span>
                                <?php endif; ?>
                            <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
                                <?php if(isset($logged_in) && !$logged_in): ?>
                                    <li><a href="/account/login">Login</a></li>
                                    <li><a href="/account/register">Register</a></li>
                                <?php else: ?>
                                    <li><a href="/account/profile">Profile</a></li>
                                    <li><a href="/account/logout">Logout</a></li>
                                <?php endif; ?>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </nav>                    
                </div>
                    <div class="container">
                        <div class="content">
                            <?php if($igb && !$trusted): ?>
                            <button type="button" class="btn btn-primary" onclick="CCPEVE.requestTrust('http://alliancemanager.local');">Request Trust</button>
                            <?php endif; ?>



