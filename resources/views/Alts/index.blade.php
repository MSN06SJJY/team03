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
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $index => $Alt)
            <tr>
                <td>{{ $Alt->bikeway_name }}</td>
                <td>{{ $Alt->length }}</td>
                <td>{{ $Alt->districts }}</td>
                <td>
                    <button id="btn-{{ $index }}" class="show-btn" onclick="toggleAttractions({{ $index }})">
                        顯示景點
                    </button>
                    <div id="attractions-{{ $index }}" class="attractions">
                        {{ $Alt->surrounding_attractions }}
                    </div>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
