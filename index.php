<html>

<head>
    <title>Password Gen</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <h1>Find Your Password</h1>
    <div class="body">
        <?php
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
        ?>        
        <b>
            <p>Master Password</p>
        </b>
        <input id="numb1" type="password">
        <b>
            <p>Website to login</p>
        </b>
        <input id="numb2">
        <br>
        <button class="button" onclick="myFunction()">Enter</button>
        <b>
            <p>Your password is</p>
        </b>
        <p id="password"></p>
    </div>
    <p class="footer">Powered by javascript</p>
    <script src="index.js">
    </script>
</body>

</html>