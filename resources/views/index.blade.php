<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>

</head>

<body>
    <div class="top">
        <div>
            <p>Rodolfo</p>

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
</body>

</html>
