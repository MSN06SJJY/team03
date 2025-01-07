<div>
    
    <header>
        <h1>自行車道資訊</h1>
        
    </header>
</div>

<hr>

<style>
    /* 設定 header 固定在頁面最上方 */
    header {
        position: fixed; /* 固定在頁面最上方 */
        top: 0; /* 緊貼頁面頂部 */
        left: 0;
        width: 100%; /* 設定寬度為100% */
        text-align: center; /* 讓標題居中 */
        padding: 40px 0; /* 增加上下內邊距來讓標題顯得突出 */
        background-color: #4CAF50; /* 設定背景顏色 */
        color: white; /* 設定標題的字體顏色為白色 */
        z-index: 1000; /* 確保標題區塊位於最上層 */
    }

    /* 設定 hr 的樣式，讓分隔線看起來更整齊 */
    hr {
        border: 0;
        border-top: 2px solid #4CAF50; /* 使用與標題相同的顏色 */
        margin-top: 10px; /* 給分隔線一些間距 */
    }

    body {
        margin-top: 200px; /* 留出空間給 header，避免被遮擋 */
    }

    /* 隱藏所有內容 */
    .content {
        display: none;
    }
</style>

<!-- 假設這是頁面主要內容區域 -->
<div class="content">
    <!-- 這部分的內容將不會顯示 -->
    <p>這部分頁面內容將不會顯示。</p>
</div>
