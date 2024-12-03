@extends('app')
@section('Alts.index')
    <div>
        <table>

            <style>
                table {
                    width: 50%; /* 將表格寬度縮小為 50% */
                    margin: 20px auto;
                    border-collapse: collapse;
                    background-color: #fff;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }
            
                th, td {
                    padding: 14px;
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    border: 1px solid #ddd;
                    text-align: center;
                }
            
                th {
                    background-color: #4CAF50;
                    color: white;
                    font-size: 18px;
                    writing-mode: unset; /* 確保文字保持水平方向 */
                }
            
                /* 使標題格垂直排列 */
                thead {
                    display: flex;
                    flex-direction: column; /* 垂直排列標題 */
                }
            
                thead th {
                    order: 0; /* 控制標題的顯示順序 */
                    text-align: left; /* 將文字對齊左邊 */
                    writing-mode: unset; /* 文字不會變垂直 */
                }
            
                /* 使數據部分保持正常水平排列 */
                tbody {
                    display: flex;
                    flex-direction: column; /* 垂直排列數據 */
                }
            
                tbody td {
                    order: 0; /* 控制數據的顯示順序 */
                }
            
            </style>
            
            
            
            
            
            

            <tbody>
                <tr>
                    <td>{{ $Alt->bikeway_name }}</td>
                    <td>{{ $Alt->length }}</td>
                    <td>{{ $Alt->districts }}</td>
                </tr>
            </tbody>
        </table>
    </div>
