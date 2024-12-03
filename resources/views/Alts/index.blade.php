@extends('app')
@section('Alts.index')
    <div>
        <table>
            <thead>
                <tr>
                    <th>自行車道名稱</th>
                    <th>長度 (km)</th>
                    <th>所在區域</th>
                    <th>周邊景點</th>
                    <th>修改</th>
                </tr>
            </thead>
            <style>
                table {
                    width: 95%; /* 增大表格寬度 */
                    margin: 20px auto;
                    border-collapse: collapse;
                    background-color: #fff;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    font-family: 'Arial', sans-serif; /* 改成圓潤字體 */
                    font-size: 16px; /* 字體大小增大一點 */
                }
            
                th, td {
                    padding: 14px; /* 增大表格內部邊距 */
                    text-align: center;
                    border: 1px solid #ddd;
                }
            
                th {
                    background-color: #4CAF50;
                    color: white;
                    font-weight: bold;
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
                    background-color: #388e3c;
                    color: white;
                    border: none;
                    padding: 6px 12px; /* 增大按鈕大小 */
                    cursor: pointer;
                    border-radius: 4px;
                    font-size: 14px; /* 調整按鈕字體 */
                }
            
                .show-btn:hover {
                    background-color: #2e7d32;
                }
            
                .back-btn {
                    padding: 14px 22px; /* 增大返回按鈕 */
                    background-color: #388e3c;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    font-size: 18px; /* 增大字體 */
                    cursor: pointer;
                    text-decoration: none;
                }
            
                .back-btn:hover {
                    background-color: #2e7d32;
                }
            </style>
            
            <tbody>
                @foreach ($articles as $index => $Alt)
                    <tr>
                        <td>{{ $Alt->bikeway_name }}</td>
                        <td>{{ $Alt->length }}</td>
                        <td>{{ $Alt->districts }}</td>

                        <td><a href="{{ route('Alts.index', ['id' => $Alt->id]) }}">顯示</a></td>
                        <td><a href="{{ route('Alts.edit', ['id' => $Alt->id]) }}">修改</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
