<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Hello, world!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="alert alert-success">

    <h2>Enter the following data:</h2>
    <form action="registerfirstpage.php" method="post">
        <div class="form-group">
            <label for="name">Full name:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="pwd1">Password:</label>
            <input type="password" class="form-control" name="pwd1">
        </div>
        <div class="form-group">
            <label for="pwd2">Confirm Password:</label>
            <input type="password" class="form-control" name="pwd2">
        </div><br>
        <button type="submit" class="btn btn-primary">Click to Register</button>
    </form>

</div>    
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>