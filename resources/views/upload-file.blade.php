<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Million Records</title>
</head>

<body>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="mycsv" id="mycsv">
        <input type="submit" value="Submit">
    </form>
</body>

</html>