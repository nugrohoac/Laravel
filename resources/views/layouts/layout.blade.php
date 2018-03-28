<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
	<!-- Author Meta -->
	<meta name="author" content="myContent">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
    <!-- Title -->
    <title>@yield('title') </title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="/fonts/fontawesome-all.css"> -->
    <link rel="stylesheet" href="/fonts/fontawesome.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>

        @yield('content')

    
<!--Footer-->
<footer class="page-footer font-small blue pt-4 mt-4">

<!--Footer Links-->
<div class="container-fluid text-center text-md-left">
    <div class="row">

        <!--First column-->
        <div class="col-md-6">
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-6">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled">
                <li>
                    <a href="#!">Link 1</a>
                </li>
                <li>
                    <a href="#!">Link 2</a>
                </li>
                <li>
                    <a href="#!">Link 3</a>
                </li>
                <li>
                    <a href="#!">Link 4</a>
                </li>
            </ul>
        </div>
        <!--/.Second column-->
    </div>
</div>
<!--/.Footer Links-->

<!--Copyright-->
<div class="footer-copyright py-3 text-center">
    © 2018 Copyright:
    <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->
                  

        <!-- js start from here-->
        <!-- <script src="/js/bootstrap.js"></script> -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- <script src="/js/jquery-3.2.1.js"></script> -->
        <script src="/js/jquery-3.2.1.min.js"></script>

</body>
</html> 