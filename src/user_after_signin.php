
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing In</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .buttons {
            text-align: center;
            position: relative;
            top: 50vh;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        button {
            border-radius: 8px;
            background: linear-gradient(120deg, orange, tomato);
            border: none;
            color: #FFFFFF;
            font-weight: bold;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 25%;
            transition: all 0.5s;
            cursor: pointer;
        }

        button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #indBtn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #indBtn:hover span {
            padding-right: 25px;
        }

        #indBtn:hover span:after {
            opacity: 1;
            right: 0;
        }


        #orgBtn span::before {
            content: '«';
            position: absolute;
            opacity: 0;
            top: 0;
            left: -20px;
            transition: 0.5s;
        }

        #orgBtn:hover span {
            padding-left: 25px;
        }

        #orgBtn:hover span:before {
            opacity: 1;
            left: 0;
        }
    </style>
</head>

<body>
    <div class="buttons">
        <a href="org_form.php"><button id="orgBtn" onclick="org_form.php"><span>Organisation</span></button></a>
        <a href="individual_form.php"> <button id="indBtn" onclick=""><span> Individual </span></button></a>
    </div>
</body>

</html>