<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

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

        .inline {
            display: flex;
            justify-content: space-between;
        }

        .inline div {
            width: calc(50% - 10px);
        }

        .card {
            background-color: #343a40;
            border: 1px solid #454d55;
            color: white;
        }

        label {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container card p-5">
    <p class="display-4">CONTACT US</p>
    <form method="POST" action="/">
        @csrf
        <div class="inline form-group">
            <div>
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="first_name" class="form-control" required>
            </div>
            <div>
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" name="last_name" class="form-control" required>
            </div>
        </div>
        <div class="inline form-group">
            <div>
                <label for="email_address">Email Address</label>
                <input id="email_address" type="email" name="email_address" class="form-control" required>
            </div>
            <div>
                <label for="phone_number">Tel. Number</label>
                <input id="phone_number" type="text" name="phone_number" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Send Message</button>
        <a href="/"><button class="btn btn-danger" type="button">Show Messages</button></a>
    </form>
</div>
</body>
</html>
