@extends('app')
@section('Alts.index')
    <div>
        <table>
            <thead>
                <tr>
                    <th>自行車道名稱</th>
                    <td>{{ $Alt->bikeway_name }}</td>
                </tr>
                
                <tr>
                    <th>長度 (km)</th>
                    <td>{{ $Alt->length }}</td>
                </tr>
                
                <tr>
                    <th>所在區域</th>
                    <td>{{ $Alt->districts }}</td>
                </tr>
                
                <tr>
                    <th>周邊景點</th>
                    <td>{{ $Alt->surrounding_attractions }}</td>
                </tr>
            </thead>
        </table>

        <!-- 返回按钮，样式与删除按钮一致 -->
        <form action="{{ url('/Alt') }}" method="get">
            <input class="btn btn-default" type="submit" value="返回" />
        </form>

    </div>

    <style>
        .btn-default {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 5px 10px;
            color: #333;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-default:hover {
            background-color: #e2e6ea;
        }
    </style>

