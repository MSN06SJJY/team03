<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>頁面選擇</title>

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
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* header 樣式 */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #27ae60; /* 可以更改顏色 */
            color: white;
            text-align: center;
            padding: 20px;
            z-index: 1000;
        }

        /* 容器部分 */
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute; /* 使其固定於頁面 */
            top: 50%; /* 垂直居中 */
            left: 50%; /* 水平居中 */
            transform: translate(-50%, -50%); /* 使用 transform 來確保真正的居中 */
            z-index: 1; /* 保證內容在其他元素之上 */
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

        /* footer 樣式 */
        footer {
            position: relative;
            margin-top: auto; /* 這行確保 footer 被推到頁面底部 */
            background-color: #27ae60;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* 創建泡泡 */
        .bubble {
            position: absolute;
            border-radius: 50%;
            animation: float 6s infinite ease-in-out, bounce 0.5s infinite ease-in-out;
            opacity: 0.8;
        }

        /* 不同顏色和大小的泡泡 */
        .bubble1 { width: 60px; height: 60px; background-color: rgba(255, 228, 225, 0.7); } /* 淺粉色 */
        .bubble2 { width: 50px; height: 50px; background-color: rgba(173, 216, 230, 0.7); } /* 淺藍色 */
        .bubble3 { width: 70px; height: 70px; background-color: rgba(144, 238, 144, 0.7); } /* 淺綠色 */
        .bubble4 { width: 80px; height: 80px; background-color: rgba(255, 255, 224, 0.7); } /* 淺黃色 */
        .bubble5 { width: 55px; height: 55px; background-color: rgba(255, 182, 193, 0.7); } /* 淺紅色 */
        .bubble6 { width: 75px; height: 75px; background-color: rgba(221, 160, 221, 0.7); } /* 淺紫色 */
        .bubble7 { width: 65px; height: 65px; background-color: rgba(240, 248, 255, 0.7); } /* 淺藍白色 */
        .bubble8 { width: 60px; height: 60px; background-color: rgba(255, 239, 178, 0.7); } /* 淺黃色 */
        .bubble9 { width: 70px; height: 70px; background-color: rgba(255, 240, 245, 0.7); } /* 淺粉紫 */
        .bubble10 { width: 50px; height: 50px; background-color: rgba(224, 255, 255, 0.7); } /* 淺綠藍 */
        .bubble11 { width: 80px; height: 80px; background-color: rgba(255, 255, 255, 0.7); } /* 白色 */
        .bubble12 { width: 65px; height: 65px; background-color: rgba(240, 255, 240, 0.7); } /* 淺綠 */
        .bubble13 { width: 60px; height: 60px; background-color: rgba(250, 240, 230, 0.7); } /* 淺米色 */
        .bubble14 { width: 75px; height: 75px; background-color: rgba(255, 222, 173, 0.7); } /* 淺橙色 */
        .bubble15 { width: 55px; height: 55px; background-color: rgba(255, 218, 185, 0.7); } /* 淺桃色 */

        /* 泡泡浮動動畫 */
        @keyframes float {
            0% {
                transform: translateX(0) translateY(0);
            }
            100% {
                transform: translateX(calc(100vw - 100%)) translateY(calc(100vh - 100%));
            }
        }

        /* 泡泡反彈動畫 */
        @keyframes bounce {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

    </style>
</head>

<body>
    <!-- 載入 header -->
    <header><h1>歡迎</h1></header>

    <!-- 主要內容 -->
    <div class="content">
        <h2>選擇頁面</h2>
        <p></p>
        <div class="btn-container">
            <a href="http://127.0.0.1:8000/Alt" class="btn">前往 自行車道</a>
            <a href="http://127.0.0.1:8000/sdg" class="btn">SDG 頁面</a>
        </div>
    </div>

    <!-- 泡泡元素 -->
    <div class="bubble bubble1" style="top: 30%; left: 20%;"></div>
    <div class="bubble bubble2" style="top: 10%; left: 50%;"></div>
    <div class="bubble bubble3" style="top: 70%; left: 80%;"></div>
    <div class="bubble bubble4" style="top: 40%; left: 60%;"></div>
    <div class="bubble bubble5" style="top: 60%; left: 30%;"></div>
    <div class="bubble bubble6" style="top: 20%; left: 70%;"></div>
    <div class="bubble bubble7" style="top: 50%; left: 10%;"></div>
    <div class="bubble bubble8" style="top: 15%; left: 80%;"></div>
    <div class="bubble bubble9" style="top: 55%; left: 40%;"></div>
    <div class="bubble bubble10" style="top: 35%; left: 30%;"></div>
    <div class="bubble bubble11" style="top: 45%; left: 20%;"></div>
    <div class="bubble bubble12" style="top: 25%; left: 60%;"></div>
    <div class="bubble bubble13" style="top: 75%; left: 50%;"></div>
    <div class="bubble bubble14" style="top: 65%; left: 80%;"></div>
    <div class="bubble bubble15" style="top: 10%; left: 40%;"></div>

    <!-- 載入 footer -->
    <footer>
        <p>版權 &copy; 2024 可持續發展目標介紹</p>
        <a href="http://127.0.0.1:8000/1" class="btn">返回選擇畫面</a>
    </footer>
</body>
</html>
