<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Send Mail</h1>
    <form action="send" method="POST">
        {{csrf_field()}}
        to: <br>
        <input type="text" name="to">
        <br>
        message: <br>
        <textarea name="message" cols="30" rows="10" ></textarea>
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>