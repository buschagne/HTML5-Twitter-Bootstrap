<!doctype HTML>
<html lang="en">
    <head>
        <title>Login Layout</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
          body {
            padding-top: 100px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
          }
          .form-signin {
              max-width: 300px;
              padding: 19px 29px 29px;
              margin: 0 auto 20px;
              background-color: #fff;
              border: 1px solid #e5e5e5;
              -webkit-border-radius: 5px;
              -moz-border-radius: 5px;
              border-radius: 5px;
              -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
              -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
              box-shadow: 0 1px 2px rgba(0,0,0,.05);
          }
          .footer{
              max-width: 355px;
              margin: 0 auto 0px;
          }
          .top-10 {
              margin-top:-10px;
          }
          .top-20 {
              margin-top:-20px;
              color:#999;
              font-size: 12px;
          }
          

          
        </style>
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
            
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>


        <div class="container">
            <form class="form-inline form-signin">
                <input type="text" id="inputEmail" placeholder="username">                
                <button type="submit" class="btn btn-primary" data-loading-text="Loading...">Sign in</button>
            </form>
                
            <footer class="footer">
                <hr class="top-10">
                <p class="top-20">&copy; by viyancs</p>
            </footer>
                
        </div> <!-- /container -->

        
        <script src="../js/jquery-latest.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>