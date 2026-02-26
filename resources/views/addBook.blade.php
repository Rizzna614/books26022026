<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add book</title>
</head>
<body>
<h1>Describe your book: </h1>

<form action = "/booklist" method = "post">
    @csrf
    Title: <input type = "text" name = "title"> <br>
    Author: <input type = "text" name = "author"> <br>
    Realeased at: <input type = "number" name = "date"> <br>
    Description: <input type="textarea" name="desc"> <br>
    <input type="submit">

</form>
</body>
</html>