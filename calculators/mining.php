<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/ico/favicon.png">

        <title>Zerva/Rovex Transport Calculations</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/stickyfooter.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                            <a class="navbar-brand" href="/">Zerva/Rovex Transport Calculations</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        </div><!-- /.navbar-collapse -->
                    </nav>                    
                </div>
                <div class="container content">
                    <form id="ore-value-calculator" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" id="start-calc" class="btn btn-success">Calcuate Total Value</button>
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-right">
                                <div>
                                    Pretax Value: <input type="text" id="pre-tax" style="text-align: right;" readonly="true" style="width: 200px" placeholder="Use button to calculate" /> isk
                                </div>
                                <div>
                                    &nbsp; &nbsp; &nbsp; Corp Tax: <input type="text" id="tax-rate" style="text-align: right;" readonly="true" style="width: 200px" value="15" /> %
                                </div>
                                <div>
                                    &nbsp; &nbsp; Total Value: <input type="text" id="post-tax" style="text-align: right;" readonly="true" style="width: 200px" placeholder="Use button to calculate" /> isk
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable" class="table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Compressed</th>
                                        <th style="text-align: center;">Ore Name</th>
                                        <th style="text-align: center;">Ore Jita Value</th>
                                        <th style="text-align: center;">Units</th>
                                        <th style="text-align: center;">Total Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <p class="text-muted"></p>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/ore-calculator.js"></script>
    </body>
</html>



                        
                        