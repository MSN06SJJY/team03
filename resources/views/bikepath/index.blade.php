<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>台南市自行車道</title>
    </head>
    
    <style>
        body
        {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        h1
        {
            text-align: center; 
            color: #333;
        }
        div
        {
            display: flex; 
            justify-content: center; 
            margin: 20px;
        }
        table
        {
            border-collapse: collapse; 
            width: 80%; 
            background-color: rgb(255, 0, 0);
        }
        tr
        {
            background-color: #ffffff; 
            color: rgb(0, 0, 0);
        }
        td
        {
            padding: 12px;
        }
        .button 
        {
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
        .color-button {
            margin: 20px 10px;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .color-button:hover {
            background-color: #388E3C;
        }
    </style>
    <script>
        // 生成隨機顏色的函數
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // 改變每個欄位顏色的函數
        function changeCellColors() {
            const cells = document.querySelectorAll('td');
            cells.forEach(cell => {
                cell.style.backgroundColor = getRandomColor();
            });
        }
    </script>

<div>    
    <body>
        <h1>台南市自行車道</h1></br>

        <table border="1">
            @foreach ($bikepaths as $bikepath)
                <tr>
                    <td>{{ $bikepath->bike_path_name }}</td>
                    <td>{{ $bikepath->district }}</td>
                    <td>{{ $bikepath->length }}</td>
                    <td>{{ $bikepath->nearby_attractions }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</div>
<a href="/" class="button welcome">GO BACK</a>
<button class="color-button" onclick="changeCellColors()">隨機顏色</button>
</html>