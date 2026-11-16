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
    <h2>Data Kurikulum</h2>
<table border="1">
    <tr><th>No</th><th>Kode</th><th>Nama Kurikulum</th><th>Tahun</th></tr>
    @foreach ($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->kode }}</td>
        <td>{{ $d->nama_kurikulum }}</td>
        <td>{{ $d->tahun }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>