


<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自行車道資訊</title>
    <style>
        /* 基本排版 */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            background-image: url('https://example.com/vine-pattern.png'); /* 更換為實際藤蔓圖案URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .attractions {
            display: none;
            background-color: #f9f9f9;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .show-btn {
            background-color: #388e3c; /* 深綠色 */
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .show-btn:hover {
            background-color: #2e7d32; /* 更深的綠色 */
        }

        /* 設定響應式，使其在不同螢幕上自適應 */
        @media (max-width: 768px) {
            table {
                width: 100%;
                margin: 10px;
            }

            th, td {
                font-size: 14px;
                padding: 8px;
            }
        }

        /* 左下角按鈕樣式 */
        .back-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 12px 20px;
            background-color: #388e3c; /* 深綠色 */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #2e7d32; /* 更深的綠色 */
        }
    </style>
    <script>
        // 切換顯示/隱藏周邊景點
        function toggleAttractions(index) {
            var attractions = document.getElementById("attractions-" + index);
            var button = document.getElementById("btn-" + index);

            if (attractions.style.display === "none" || attractions.style.display === "") {
                attractions.style.display = "block";
                button.textContent = "隱藏景點";
            } else {
                attractions.style.display = "none";
                button.textContent = "顯示景點";
            }
        }
    </script>
</head>
<body>

    <h1>自行車道資訊</h1>

    <table>
        <thead>
            <tr>
                <th>自行車道名稱</th>
                <th>長度 (km)</th>
                <th>所在區域</th>
                <th>周邊景點</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $index => $Alt)
            <tr>
                <td>{{ $Alt->bikeway_name }}</td>
                <td>{{ $Alt->length }}</td>
                <td>{{ $Alt->districts }}</td>
                <td>
                    <button id="btn-{{ $index }}" class="show-btn" onclick="toggleAttractions({{ $index }})">
                        顯示景點
                    </button>
                    <div id="attractions-{{ $index }}" class="attractions">
                        {{ $Alt->surrounding_attractions }}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
