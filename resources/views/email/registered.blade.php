<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: sans-serif;
            margin: 0 auto;
            padding: 0;
            max-width: 500px;
        }
        .header {
            width: 100%;
            background-color: #009688;
            text-align: center;
            padding: 30px 0;
        }
        .header-title {
            font-size: 25px
        }
        .logo {
            height: 65px
        }
        .info-section {
            margin-top: 30px;
            line-height: 30px;
            font-size: 20px;
            padding: 20px
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-title">
            EV Charge Map
        </div>
    </div>
    <div class="info-section">
        <div>
            Hey, {{ $user->first_name }}
        </div>
        <br>
        <div>
            You just registered with EV Charge Map. Great to have you with us!
        </div>
        <br>
        <div>
            Many thanks,
            <br>
            <br>
            EV Charge Map
        </div>
    </div>
</body>
</html>
