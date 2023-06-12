<!doctype html>
<html>
<head>
    <style>
        h1 {text-align: center;}
        p {text-align: center;}
        div {text-align: center;
            background-image: url('pelangi.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;}

        .container {
            display: flex;
            justify-content: center;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */ 
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
        .button5 {background-color: #555555;} /* Black */
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="alert alert-primary" style="background-color: aquamarine;">
        <h1 style="color:black;">Mari Mengenal Suku Kata :</h1>
        <br>
     <br>
        <form action="mengenalsukukata.php" method="post">
            <div class="container">
                <table>
                    <tr>
                        <td><button class="button">BA</button></td>
                        <td><button class="button button2">BE</button></td>
                        <td><button class="button button3">BI</button></td>
                        <td><button class="button button4">BO</button></td>
                        <td><button class="button button5">BU</button></td>
                    </tr>
                </table>
            </div>
        </form>
        <br>
     <br>
     <div class = "container">
     <img src="bola.jpg"width="200">
    </div>
     <br>
     <br>
        <div class = "container">
        <audio controls>
        <source src="b.ogg" type="audio/ogg">
        <source src="b.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
     </div>
     <br>
     <br>
     <br>
        <div class="container">
            <table>
                <tr>
                    <a href="optionpage.php" class="previous">&laquo; Sebelumnya</a>
                    <a href="sukukataC.php" class="next">Seterusnya &raquo;</a>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
