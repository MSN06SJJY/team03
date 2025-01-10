@extends('app')
@section('bikepaths.index')
<div>
    @auth
        <h2>歡迎 {{ Auth::user()->name }} ! </h2>
    @endauth
    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button href="/" type="submit" class="color-button-logout">登出</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login') }}">登入</a>
    @endguest
    <table border="1" id="bikepath-table">
        <thead>
            <tr>
                <th onclick="sortTable(0)">自行車道名稱</th>
                <th onclick="sortTable(1)">行政區</th>
                <th onclick="sortTable(2, true)">自行車道長度（公里）</th>
                <th onclick="sortTable(3)">周邊景點</th>
                <th>操作1</th>
                @can('admin')
                <th>操作2</th>
                <th>操作3</th>
                <th>操作4</th>
                @elsecan('manager')
                <th>操作2</th>
                <th>操作3</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($bikepaths as $bikepath)
                <tr>
                    <td>{{ $bikepath->bike_path_name }}</td>
                    <td>{{ $bikepath->district }}</td>
                    <td>{{ $bikepath->length }}</td>
                    <td>{{ $bikepath->nearby_attractions }}</td>
                    <td><a href="{{ route('bikepaths.show', ['id' => $bikepath->id]) }}">顯示</a></td>
                    @can('admin')
                    <td><a href="{{ route('bikepaths.edit', ['id' => $bikepath->id]) }}">編輯</a></td>
                    <td><a href="{{ route('bikepaths.create') }}">創建</a></td>
                    <td>
                        <form action="{{ url('/bikepaths/delete', ['id'=>$bikepath->id]) }}" method="post">
                            <input class="color-button-delete" type="submit" value="刪除" />
                            @method("delete")
                            @csrf
                        </form>
                    </td>
                    @elsecan('manager')
                    <td><a href="{{ route('bikepaths.edit', ['id' => $bikepath->id]) }}">編輯</a></td>
                    <td><a href="{{ route('bikepaths.create') }}">創建</a></td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
    <button class="color-button-changecolors" onclick="changeCellColors()">隨機顏色</button>
    <a href="/" class="color-button-goback">回到上一頁</a>
</div>
@endsection