<!doctype html>
<html>
<head>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;
                background-image: url('background.jpg');
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
        </style>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
    <div class="container" style="background-color: aquamarine;">
        <table>
            <tr>
                <th><img src="glatest.png"width="200"></th>
            </tr>
            <hr/>
            <tr>
                <th><img src="gajah.jpg"width="200"></th>
            </tr>
        </table>
        </div>

        <div class="container" style="background-color: aquamarine;">
    <table>
        <tr>
            <th><button class="button button2">GA</button></th>
            <th><button class="button button3">JAH</button></th>
    </tr>
    </table>
    </div>
        
        <div class="container">
            <table>
             <tr>
                  <a href="konsonanF.php" class="previous">&laquo; Sebelumnya</a>
                 <a href="konsonanH.php" class="next">Seterusnya &raquo;</a>
             </tr>
             </table>
         </div>
    </body>
</html>