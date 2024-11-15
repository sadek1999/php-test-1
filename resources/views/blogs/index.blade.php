<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Custom CSS for table border width and style */
        .custom-table {
            border: 2px solid #d1d5db; /* Custom border width and color */
            border-collapse: collapse;
            width: 100%;
        }
        .custom-table th,
        .custom-table td {
            border: 1px solid #d1d5db; /* Inner cell border */
            padding: 12px 16px;
            text-align: left;
        }
        .custom-table thead th {
            background-color: #f3f4f6;
            font-weight: 600;
            color: #1f2937;
        }
        .custom-table tbody tr:hover {
            background-color: #f9fafb;
        }
    </style>
</head>
<body>
    <h1>This is the index page</h1>

    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->user_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
