@extends('app')
@section('bikepaths.index')
<div>
    <table border="1">
            <tr>
                <th>自行車道名稱</th>
                <th>行政區</th>
                <th>自行車道長度（公里）</th>
                <th>周邊景點</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
                <th>操作4</th>
            </tr>
        @foreach ($bikepaths as $bikepath)
            <tr>
                <td>{{ $bikepath->bike_path_name }}</td>
                <td>{{ $bikepath->district }}</td>
                <td>{{ $bikepath->length }}</td>
                <td>{{ $bikepath->nearby_attractions }}</td>
                <td><a href="{{ route('bikepaths.show', ['id' => $bikepath->id]) }}">顯示</a></td>
                <td><a href="{{ route('bikepaths.edit', ['id' => $bikepath->id]) }}">修改</a></td>
                <td><a href="{{ route('bikepaths.create') }}">創建</a></td>
                <td>
                    <form action="{{ url('/bikepaths/delete', ['id'=>$bikepath->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method("delete")
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <button class="color-button" onclick="changeCellColors()">隨機顏色</button>
</div>
@endsection