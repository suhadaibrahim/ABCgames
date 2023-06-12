<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
}
</style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="container">
<h1 style="color:black;">Mari Memilih Topik :</h1>

<table >
    <tr>
      <div class="alert-primary">
      <form action="mengenalhuruf.php" method="post">
      <button type="mengenalhuruf" value="submit">Mari Mengenal Huruf</button>
      </div>
      </form>

      <div class="alert-danger">
      <form action="mengenalsukukata.php" method="post">
      <button type="mengenalsukukata" value="submit">Mari Mengenal Suku Kata</button>
      </div>
      </form>

      <div class="alert-warning">
      <form action="bola.html" method="post">
      <button type="ujiminda" value="submit">Mari Menguji Minda</button>
      </div>
      </form>

</hr>
</tr>
</div>
</body>
</html>