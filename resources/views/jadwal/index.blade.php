<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 30px;
    }
    h2 {
        margin-bottom: 15px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 8px 12px;
        text-align: left;
    }
    th {
        background-color: #2563eb;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f3f4f6;
    }
</style>
<body>
    <h2>Data Jadwal</h2>
<table border="1">
    <tr><th>No</th><th>Kelas</th><th>Pelajaran</th><th>Hari</th><th>Jam</th></tr>
    @foreach ($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->kelas }}</td>
        <td>{{ $d->pelajaran }}</td>
        <td>{{ $d->hari }}</td>
        <td>{{ $d->jam }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
