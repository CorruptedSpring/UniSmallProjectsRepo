<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Modify User</title>
        <link rel="stylesheet" href="styles.css" />
        <!-- Link to your CSS file -->
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
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                display: flex;
                flex-direction: column;
            }

            h1 {
                margin-bottom: 20px;
                color: #333;
                text-align: center;
            }

            label {
                margin-bottom: 5px;
                color: #666;
            }

            input[type="text"] {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
            }
            input[type="password"] {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
            }
            input[type="email"] {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
            }
            input[type="submit"] {
                padding: 10px;
                border: none;
                border-radius: 4px;
                background-color: #ffffff;
                color: black;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #c4c4c4;
            }
        </style>
    </head>
    <body>

        <form action="modifyconfirm.php" method="post">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "test";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql =
                "SELECT id, Prénom, Nom, Email, username, password FROM Eleve WHERE username = " .
                $_GET["username"];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h1>Modify User</h1>";

                while ($row = $result->fetch_assoc()) {
                    echo "<label>ID</label><br />";
                    echo '<input type="text" name="id" value="' .
                        htmlspecialchars($row["id"]) .
                        '" required /><br />';
                    echo "<label>Username</label><br />";
                    echo '<input type="text" name="usrnme" value="' .
                        htmlspecialchars($row["username"]) .
                        '" required /><br />';

                    echo "<label>Nom</label><br />";
                    echo '<input type="text" name="name" value="' .
                        htmlspecialchars($row["Nom"]) .
                        '" required /><br />';

                    echo "<label>Prénom</label><br />";
                    echo '<input type="text" name="prénom" value="' .
                        htmlspecialchars($row["Prénom"]) .
                        '" required /><br />';

                    echo "<label>Email</label><br />";
                    echo '<input type="email" name="mail" value="' .
                        htmlspecialchars($row["Email"]) .
                        '" required /><br />';

                    echo "<label>Password</label><br />";
                    echo '<input type="password" name="psswd" required /><br />';

                    echo "<label>Re-enter Password</label><br />";
                    echo '<input type="password" name="psswd_confirm" required /><br /><br />';

                    echo '<input type="submit" value="Modify" />';
                }
            } else {
                echo "No user found.";
            }

            $conn->close();
            ?>

            </form>
    </body>
</html>
