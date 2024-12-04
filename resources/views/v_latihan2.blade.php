<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h3>{{ $title }}</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        @foreach($daf_mhs as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value['nama'] }}</td>
            <td>{{ $value['asal'] }}</td>
        </tr>
        @endforeach
</body>
</html>