<!doctype html>
<html lang=pt>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicações</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(120deg, rgba(94, 94, 94, 0.97), #2f7bda);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 15px;
        }

        body:before {
            content: "";
            background-image: url('https://www.transparenttextures.com/patterns/asfalt-dark.png');
            opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        ul {
            display: flex;
            gap: 20px;
            list-style-type: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            flex-wrap: wrap;
        }

        ul li a {
            font-size: 3rem;
            width: 300px;
        }

        /* CSS */
        .button-22 {
            align-items: center;
            background-color: #0276FF;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(255, 255, 255, 0.26) 0 1px 2px inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            flex-shrink: 0;
            font-family: "RM Neue", sans-serif;
            font-size: 3rem;
            line-height: 1.15;
            margin: 0;
            padding: 10px 21px;
            text-align: center;
            text-transform: none;
            transition: color .13s ease-in-out, background .13s ease-in-out, opacity .13s ease-in-out, box-shadow .13s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            text-decoration: none;
        }

        .button-22:active {
            background-color: #006AE8;
        }

        .button-22:hover {
            background-color: #1C84FF;
        }

        .header{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        img{
            align-self: center;
            width: 150px;
            height: 100%;
            flex-shrink: 0;
            border-radius: 30px;
        }
        #titulo {
            font-size: 5rem;
            color: white;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="logo.png" alt="Poço">


</div>
<span id="titulo">Aplicações</span>

<ul>
    <li>
        <a class="button-22" href="http://demo2.poco.pt/assistencias/"> Assistências</a>
    </li>
    <li>
        <a class="button-22" href="http://demo2.poco.pt/expedicoes/"> Expedições</a>
    </li>
</ul>

</body>
</html>