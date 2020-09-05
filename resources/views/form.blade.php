<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="umur">
        <input type="submit" value="Submit">
    </form>
</body>
</html>