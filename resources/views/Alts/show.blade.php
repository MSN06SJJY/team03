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
                
                    
                    
                    
                </tr>
                </tr>
            </thead>
        </table>
        <style>
            
            </style>

    </div>
