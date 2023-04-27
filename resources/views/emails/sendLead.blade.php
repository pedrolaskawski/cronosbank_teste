<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .navbar {
            height: 50px;
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            padding: 50px 0 20px 0;
            width: 100%;
            border-bottom: 1px solid #e9ecef;
        }

        .navbar-nav a {
            padding: 10px;
            margin-left: 10vh;
        }


        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        .center {
            width: 400px;
            padding: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        input[type="text"],
        input[type="email"],
        select {
            display: block;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <a class="logo" id="logo">
                <img class="logo-customizer" src="https://lp.cronosfintech.com.br/img/logo.svg"
                    alt="logo CronosFintech">
            </a>
        </ul>
    </nav>

    <div class="form-container">

        <div class="center">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $data['name'] }}">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $data['email'] }}">
            <label for="mobile">Celular:</label>
            <input type="text" id="mobile" name="mobile" value="{{ $data['mobile'] }}">
            <label for="city">Cidade:</label>
            <input type="text" id="city" name="city" value="{{ $data['city'] }}">
            <label for="city">Estado:</label>
            <input type="text" id="state" name="state" value="{{ $data['state'] }}">
        </div>
    </div>

</body>

</html>
