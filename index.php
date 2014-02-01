<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.9.2.custom.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    <div class="methods">
                        wiadlkfjas
                    </div>

                    <pre id="editor">function foo(items) {
                        var i;
                        for (i = 0; i &lt; items.length; i++) {
                            alert("Cool Cat Video " + items[i]);
                        }
                    }</pre>

                    <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                    <script>
                        var editor = ace.edit("editor");
                        editor.setTheme("ace/theme/tomorrow");
                        editor.getSession().setMode("ace/mode/javascript");
                    </script>


                </div>

                <div class="col-md-7 overlay">
                    <div class="buttons">
                        <button type="button" class="btn btn-primary">Take a Video</button>
                        <button type="button" class="btn btn-primary">Import from Vine</button>
                        <button type="button" class="btn btn-primary">Import from Instagram</button>
                    </div>
                    <div class="clearHover">
                    </div>
                </div>
            </div>

        </div>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
