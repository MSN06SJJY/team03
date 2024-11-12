<html>

<head>
</head>

<body>
    <h1>自行車道</h1>
    <table border="1">
    @foreach ($articles as $Alt)
        <tr>
            <td>{{ $Alt->bikeway_name }}</td>
            <td>{{ $Alt->length }}</td>
            <td>{{ $Alt->districts }}</td>
            <td>{{ $Alt->surrounding_attractions }}</td>
        </tr>
    @endforeach
    </table>
</body>

</html>
