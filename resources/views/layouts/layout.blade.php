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
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    <h1> This is Header </h1>

        @yield('content')

    <h3> This is Footer </h3>

        <!-- js start from here-->
        <script src="/js/bootstrap.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-3.2.1.js"></script>
        <script src="/js/jquery-3.2.1.min.js"></script>

</body>
</html> 