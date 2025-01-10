<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>台南市自行車道</title>
    </head>
    
<style>
    body {
        font-family: "微軟正黑體", Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }
    header {
        background-color: #4CAF50;
        color: white;
        padding: 1rem 0;
        text-align: center;
    }
    footer {
        text-align: center;
        padding: 1rem 0;
        background-color: #333;
        color: white;
        bottom: 0;
        width: 100%;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.5rem;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color:rgb(175, 76, 170);
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    .button
    {
        display: inline-block;
        margin: 20px 10px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .color-button-delete {
        padding: 0.5rem 1rem;
        background-color:rgb(200, 0, 0);
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }
    .color-button-delete:hover {
        background-color:rgb(255, 0, 0);
    }
    .color-button-changecolors {
        margin: 20px 10px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color:rgb(0, 0, 0);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .color-button-changecolors:hover {
        background-color: rgba(0, 0, 0, 0.75);
    }
    .color-button-goback {
        margin: 20px 10px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color:rgb(0, 150, 0);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    .color-button-goback:hover {
        background-color: rgb(0, 200, 0);
    }
    .color-button-gohome {
        margin: 20px 10px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color:rgb(0, 0, 175);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    .color-button-gohome:hover {
        background-color: rgb(0, 0, 255);
    }
    .color-button-cancel {
        position: relative;
        top: -20px;
        right: -125px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color:rgb(150, 0, 0);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    .color-button-cancel:hover {
        background-color: rgb(200, 0, 0);
    }

    .color-button-logout {
        position: relative;
        top: 0;
        right: 0px;
        padding: 15px 30px;
        font-size: 18px;
        color: #fff;
        background-color: rgb(150, 0, 0);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    .color-button-logout:hover {
        background-color: rgb(200, 0, 0);
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
    
    let sortState = {}; // 狀態管理
    let originalOrder = []; // 保存原始順序

    // 保存原始順序
    window.onload = function () {
        const table = document.getElementById('bikepath-table');
        const tbody = table.tBodies[0];
        originalOrder = Array.from(tbody.rows); // 儲存初始行的順序
    };

    function sortTable(columnIndex, isNumeric = false) {
        const table = document.getElementById('bikepath-table');
        const tbody = table.tBodies[0];
        const rows = Array.from(tbody.rows);

        // 初始化該列的排序狀態
        if (!sortState[columnIndex]) {
            sortState[columnIndex] = null;
        }

        // 切換排序狀態
        if (sortState[columnIndex] === 'asc') {
            sortState[columnIndex] = 'desc';
        } else if (sortState[columnIndex] === 'desc') {
            sortState[columnIndex] = null; // 回到初始狀態
        } else {
            sortState[columnIndex] = 'asc';
        }

        // 如果狀態為初始，恢復原始順序
        if (sortState[columnIndex] === null) {
            originalOrder.forEach(row => tbody.appendChild(row));
        } else {
            rows.sort((a, b) => {
                const cellA = a.cells[columnIndex].innerText.trim();
                const cellB = b.cells[columnIndex].innerText.trim();

                if (isNumeric) {
                    const diff = parseFloat(cellA) - parseFloat(cellB);
                    return sortState[columnIndex] === 'asc' ? diff : -diff;
                } else {
                    const compare = cellA.localeCompare(cellB, 'zh-Hant');
                    return sortState[columnIndex] === 'asc' ? compare : -compare;
                }
            });

            // 清空並重新附加排序後的行
            rows.forEach(row => tbody.appendChild(row));
        }
    }
</script>

<div>    
    @include('header')
    @yield('bikepaths.index')
    @include('footer')
</div>
</html>