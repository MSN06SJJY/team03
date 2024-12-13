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
    @include('header')
    @yield('bikepaths.index')
    <a href="/" class="button welcome">GO BACK</a>
    @include('footer')
</div>
</html>