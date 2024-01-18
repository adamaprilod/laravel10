<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | TES LARAVEL</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, sans-serif;
          background-image: url('https://static.miraheze.org/projectsekaiwiki/thumb/e/ec/Kanade_26_art.png/1024px-Kanade_26_art.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    
        nav {
          background-color: #333;
          overflow: hidden;
        }
    
        nav a {
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
    
        nav a:hover {
          background-color: #ddd;
          color: black;
        }
        body {
            background-color: #e8e8e8;
          }
          
          .kartu {
            width: 800px;
            margin: 0 auto;
            margin-top: 70px;
                box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
        transition: all .3s;
               background-color: #591869;
        border: solid 8px #ea92ff;
        border-top-right-radius: 80px;
        border-bottom-left-radius: 80px;
          } 
          .kartu:hover {
            background-color: #1f8a45;
            border: solid 8px #4fd47e;
            border-top-left-radius: 80px;
        border-bottom-right-radius: 80px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
          }
          .foto {
                padding: 20px;
        margin-left: 30px;
        margin-top: 10px;
          }
          tbody {
        font-size: 20px;
        font-weight: 300;
        color:white;
    }
    .biodata {
        margin-top: 30px;
    }
      </style>
</head>
<body>
    @include('layouts.menu')
    
    @yield('content')
</body>
</html>