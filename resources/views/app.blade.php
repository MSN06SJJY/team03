<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自行車道資訊</title>
    
    <style>
        /* 設置內容區域 */
        .content {
            padding: 20px;
        }

        /* 主要內容區域 */
        .main-content {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* 表格樣式 */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
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

        .back-btn {
            padding: 12px 20px;
            background-color: #388e3c;
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
</head>

<body>
   @include('header')
    <!-- 主要內容區域 -->
    <div class="content">
        <div class="main-content">
            <!-- 顯示頁面主要內容區域 -->
            @yield('Alts.index')
        </div>
    </div>

    <!-- 頁尾區塊，顯示在最底部 -->
    @include('footer')
</body>

</html>
