<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="/users">See users List</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="list-group">
                <div href="#" class="list-group-item list-group-item-action">
                    Gender: {{$user->gender}}
                </div>
                <div href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>
                    Name: {{$user->name->title . ' ' . $user->name->first . ' ' . $user->name->last}}
                </div>
                <div href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-globe"></i>
                    City: {{$user->location->city}}
                </div>
                <div href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-envelope"></i>
                    Email: {{$user->email}}
                </div>
                <div href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-lock"></i>
                    Password: {{$user->login->password}}
                </div>
                <div href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-lock"></i>
                    Password Hashed: {{bcrypt($user->login->password)}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
