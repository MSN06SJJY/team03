<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多色泡泡背景</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            min-height: 100vh;
            position: relative;
            overflow: hidden; /* 防止泡泡超出邊界 */
        }

        /* 創建泡泡 */
        .bubble {
            position: absolute;
            bottom: -150px; /* 初始位置在畫面底部之外 */
            border-radius: 50%;
            animation: float 4s infinite ease-in-out; /* 縮短動畫持續時間，讓泡泡漂浮得更快 */
            opacity: 0; /* 初始時不可見 */
        }

        /* 不同大小的泡泡 */
        .bubble1 { width: 100px; height: 100px; background-color: rgba(255, 99, 71, 0.7); } /* 番茄紅 */
        .bubble2 { width: 120px; height: 120px; background-color: rgba(100, 149, 237, 0.7); } /* 藍色 */
        .bubble3 { width: 90px; height: 90px; background-color: rgba(34, 193, 195, 0.7); } /* 青色 */
        .bubble4 { width: 110px; height: 110px; background-color: rgba(255, 165, 0, 0.7); } /* 橙色 */
        .bubble5 { width: 95px; height: 95px; background-color: rgba(144, 238, 144, 0.7); } /* 淺綠色 */
        .bubble6 { width: 130px; height: 130px; background-color: rgba(238, 130, 238, 0.7); } /* 紫色 */

        /* 動畫讓泡泡漂浮 */
        @keyframes float {
            0% {
                transform: translateY(0) scale(1); /* 從底部開始 */
                opacity: 1;
            }
            50% {
                transform: translateY(-100vh) scale(1.2); /* 向上漂浮並放大 */
                opacity: 1;
            }
            100% {
                transform: translateY(-200vh) scale(1); /* 更高的地方，消失 */
                opacity: 0;
            }
        }

        /* 容器部分 */
        .content {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1; /* 保證內容在泡泡之上 */
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            color: white;
            background-color: #2b6cb0;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #1e4c8f;
        }
    </style>
</head>

<body>

    <!-- 多個泡泡元素，會分布在頁面底端漂浮 -->
    <div class="bubble bubble1" style="left: 5%; animation-delay: 0s;"></div>
    <div class="bubble bubble2" style="left: 15%; animation-delay: 0.5s;"></div>
    <div class="bubble bubble3" style="left: 25%; animation-delay: 1s;"></div>
    <div class="bubble bubble4" style="left: 35%; animation-delay: 1.5s;"></div>
    <div class="bubble bubble5" style="left: 45%; animation-delay: 2s;"></div>
    <div class="bubble bubble6" style="left: 55%; animation-delay: 2.5s;"></div>
    <div class="bubble bubble1" style="left: 65%; animation-delay: 3s;"></div>
    <div class="bubble bubble2" style="left: 75%; animation-delay: 3.5s;"></div>
    <div class="bubble bubble3" style="left: 85%; animation-delay: 4s;"></div>
    <div class="bubble bubble4" style="left: 95%; animation-delay: 4.5s;"></div>
    <div class="bubble bubble5" style="left: 10%; animation-delay: 5s;"></div>
    <div class="bubble bubble6" style="left: 20%; animation-delay: 5.5s;"></div>

    <div class="content">
        <h1>選擇頁面</h1>
        <p></p>
        <div class="btn-container">
            <a href="http://127.0.0.1:8000/Alt" class="btn">前往 自行車道</a>
            <a href="http://127.0.0.1:8000/sdg" class="btn">SDG 頁面</a>
        </div>
    </div>

</body>

</html>
