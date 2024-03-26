<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-bottom: 20px;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{ url('students') }}">back home</a>
        <form action="{{ url('update-student/' . $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label for="email">Student Email</label>
                <input type="text" id="email" name="email" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="major">Student Major</label>
                <input type="text" id="major" name="major" value="{{ $student->major }}">
            </div>
            <div class="form-group">
                <button type="submit">Update Student</button>
            </div>
        </form>
    </div>
</body>

</html>
