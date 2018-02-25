<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel GG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p> Event {{ $event }} pada tahun {{ $th }} akan dihandle oleh NAC</p>

    @if ($event == "A")
        Ini adalah A <br>        
        Event ini berasal dari if yang true
    @else
        Event ini bukan berasal dari A, yeyyyy
    @endif

    <hr>

    @for ($i = 0; $i < 10; $i++)
        ini adalah angka ke {{ $i }} <br>
    @endfor

</body>
</html> 