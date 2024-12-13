<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #4CAF50, #2196F3);
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        .button {
            display: inline-block;
            margin: 20px 10px;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #388E3C;
        }

        .button.sdgs {
            background-color: #FF9800;
        }

        .button.sdgs:hover {
            background-color: #F57C00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <a href="/sdgs" class="button sdgs">SDGs</a>
        <a href="/bikepaths" class="button">Bikepath</a>
    </div>
</body>
</html>
