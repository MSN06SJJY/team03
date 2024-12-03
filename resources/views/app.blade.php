<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自行車道資訊</title>
    

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
