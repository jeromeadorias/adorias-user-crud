<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .info {
            margin-bottom: 15px;
            font-size: 18px;
        }
        strong {
            display: block;
            font-weight: bold;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <div class="info">
            <strong>ID:</strong> {{ $users->id }}
        </div>
        <div class="info">
            <strong>Name:</strong> {{ $users->name }}
        </div>
        <div class="info">
            <strong>Email:</strong> {{ $users->email }}
        </div>
        <div class="info">
            <strong>Role:</strong> {{ $users->role }}
        </div>
        <a href="{{ route('users.index') }}">Back to List</a>
    </div>
</body>
</html>
