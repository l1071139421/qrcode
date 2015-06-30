<html>
    <head>
        <meta charset='utf8'/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="<?=asset('css/bootstrap/bootstrap.min.css');?>"/>
        <link rel="stylesheet" type="text/css" href="<?=asset('css/bootstrap/bootstrap-theme.min.css');?>"/>
        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">逢甲大學</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Record</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">ItemData</a></li>
                    <?php if(Auth::user()->compentent != 'crew') {
                         echo '<li><a href="#">Report</a></li>';
                        }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="starter-template">

        </div>

    </div>
    </body>
    <script src=<?=asset('js/lib/require.js');?> data-main=<?=asset('js/home.js');?>></script>
</html>
