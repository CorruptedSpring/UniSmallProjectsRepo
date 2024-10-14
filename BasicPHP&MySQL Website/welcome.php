<html>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>
    <body>
        <span style="display: block;">
            <?php
            $username = $_GET["username"];
            echo "Welcome, " . htmlspecialchars($username) . " !";
            ?>
        </span>
        <div>
            <img src="media/tenor.gif" style="display: block;" alt="Image">
        </div>
    </body>
</html>
