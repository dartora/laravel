<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <div class="chat">


        <div class="top">
            <div>
                <img src="https://media.licdn.com/dms/image/C4D03AQFBjQlxWjLAKA/profile-displayphoto-shrink_800_800/0/1520375796380?e=1698883200&v=beta&t=MSvsnlIidIQWft4OcDjTPXi3ozABB0b5NtlyEfKMpVk" alt="" class="src">
                <p>Matheus</p>
                <small>online</small>

            </div>
        </div>
        <div class="messages">
            @include('receive',['message' => 'Hello World'])
        </div>
        <div class="bottom">
            <form>
                <input type="text" id="message" name="message" placeholder="Type a message...">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</body>

</html>
