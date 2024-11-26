@extends('app')
@section('bikepath.index')
<div>
    <table border="1">
            <th>自行車道名稱</th>
            <th>行政區</th>
            <th>自行車道長度（公里）</th>
            <th>周邊景點</th>
        @foreach ($bikepaths as $bikepath)
            <tr>
                <td>{{ $bikepath->bike_path_name }}</td>
                <td>{{ $bikepath->district }}</td>
                <td>{{ $bikepath->length }}</td>
                <td>{{ $bikepath->nearby_attractions }}</td>
            </tr>
        @endforeach
    </table>
    <button class="color-button" onclick="changeCellColors()">隨機顏色</button>
</div>
@endsection