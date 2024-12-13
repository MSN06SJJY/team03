@extends('app')
@section('bikepaths.index')
<div>
    <table border="1">
            <tr>
                <th>自行車道名稱</th>
                <th>行政區</th>
                <th>自行車道長度（公里）</th>
                <th>周邊景點</th>
            </tr>
            <tr>
                <td>{{ $bikepath->bike_path_name }}</td>
                <td>{{ $bikepath->district }}</td>
                <td>{{ $bikepath->length }}</td>
                <td>{{ $bikepath->nearby_attractions }}</td>
            </tr>
    </table>
    <button class="color-button" onclick="changeCellColors()">隨機顏色</button>
</div>
@endsection