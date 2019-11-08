<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        body {
            display: grid;
            place-items: center;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #576366;
        }

        .add-message-container {
            width: 100%;
            padding: 10px 0;
            text-align: right;
        }
    </style>
</head>
<body class="p-5">
<div class="container">
    <div class="add-message-container">
        <a href="/create"><button class="btn btn-danger">Contact Us</button></a>
    </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->first_name }}</td>
            <td>{{ $message->last_name }}</td>
            <td>{{ $message->email_address }}</td>
            <td>{{ $message->phone_number }}</td>
            <td>{{ $message->message }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
