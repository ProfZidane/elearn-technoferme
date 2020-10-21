<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('cours') }}" method="POST" enctype="multipart/form-data">
        titre : <input type="text" name="titre" id="">
        description : <input type="text" name="description" id="">
        cours : <textarea name="cours" id="" cols="30" rows="10"></textarea>
        video : <input type="file" name="video" id="">
        image : <input type="file" name="image">

        <input type="submit" value="envoyer">
    </form>
</body>
</html>
