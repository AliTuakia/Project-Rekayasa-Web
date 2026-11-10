<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - {{ $project->title }}</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="2">
                <img src="{{ public_path('images/' . $project->image) }}" alt="{{ 
                $project->title }}" 
                style="width: 100%; height: auto; object-fit: cover;">
            </th>
            <!-- <th colspan="2">Detail Project</th> -->
        </tr>
        <tr>
            <td><strong>Judul:</strong></td>
            <td>{{ $project->title }}</td>
        </tr>
        <tr>
            <td><strong>Deskripsi:</strong></td>
            <td>{{ $project->description }}</td>
        </tr>
        <tr>
            <td><strong>Teknologi:</strong></td>
            <td>{{ $project->teknologi }}</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>{{ $project->status }}</td>
        </tr>
    </table>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .subtitle {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
