<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link type="text/css" href="css/bootstrap.min.css" media="screen" rel="stylesheet" />
        <link type="text/css" href="css/global.css" media="screen" rel="stylesheet" />
        <script type="text/javascript" src="lib/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="lib/knockout-2.1.0.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Knockout Twitter Sample</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="#">Home</a></li>
                        </ul>
                        <form class="navbar-search pull-right">
                            <input data-bind="value: query, event: { change: searchTweets }" type="text" class="search-query" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <section style="margin-top: 60px;">
                <div class="row">
                    <div class="span12 well">
                        <!-- ko foreach: tweets -->
                        <div class="alert alert-info alert-block">
                            <blockquote>
                                <span data-bind="text: tweet"></span>
                            </blockquote>
                            <h5 class="alert-heading">
                                @<i data-bind="text: user"></i>
                            </h5>
                        </div>
                        <!-- /ko -->
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
