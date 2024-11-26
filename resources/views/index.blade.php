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
            justify-content: center; 
            margin: 20px;
        }
        table
        {
            border-collapse: collapse;
            width: 100%;
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
        th
        {
            padding: 12px; 
            text-align: left;
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
    <h1>台南市自行車道</h1></br>
    <body>    
        <table border="1">
                <th>自行車道名稱</th>
                <th>行政區</th>
                <th>自行車道長度（公里）</th>
                <th>周邊景點</th>
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
    <a href="/" class="button welcome">GO BACK</a>
    <button class="color-button" onclick="changeCellColors()">隨機顏色</button>
</div>
<footer>
    <p>&copy; 2024 D1114181022 簡峻祐</p>
</footer>
</html>