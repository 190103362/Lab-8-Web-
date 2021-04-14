<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="{{ route('add-post') }}">
    @csrf
       <input type="text" name="Name" placeholder="Name">
       <input type="text" name="Surname" placeholder="Surname">
       <input type="text" name="Email" placeholder="Email">
       <input type="file" name = "Photo">
       <button>Submit</button>
    </form>
</body>
</html>