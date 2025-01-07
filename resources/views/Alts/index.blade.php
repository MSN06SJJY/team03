@extends('app')
@section('Alts.index')
    <div>
        
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home')}}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login')}}" class="text-sm text-gray-700 underline">Login</a>
        
                        @if (Route::has('register'))
                            <a href="{{ route('register')}}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        @can('admin')
        <a href="{{ route('Alts.create') }}" class="btn btn-default">新增</a>
        @endcan
        <table>
            <thead>
                <tr>
                    <th>自行車道名稱</th>
                    <th>長度 (km)</th>
                    <th>所在區域</th>
                    <th>周邊景點</th>
                    @can('admin')
                    @elsecan('mmanager')
                    <th>修改</th>
                    <th>刪除</th>
                    @endcan
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
                
                    <!-- 顯示按鈕 -->
                    <td>
                        <form action="{{ route('Alts.index', ['id' => $Alt->id]) }}" method="get">
                            <input class="btn btn-default" type="submit" value="顯示" />
                        </form>
                    </td>
                    @can('admin')
                    @elsecan('manager')
                    <!-- 修改按鈕 -->
                    <td>
                        <form action="{{ route('Alts.edit', ['id' => $Alt->id]) }}" method="get">
                            <input class="btn btn-default" type="submit" value="修改" />
                        </form>
                    </td>
                
                    <!-- 刪除按鈕 -->
                    <td>
                        <form action="{{ url('/At/delete',['id' => $Alt->id]) }}" method="post">
                            <input class="btn btn-default" type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                    @endcan
                </tr>
                
                @endforeach
            </tbody>
        </table>
        
    </div>
