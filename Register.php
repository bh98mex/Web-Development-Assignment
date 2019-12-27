!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration Form</title>
    <link rel="stylesheet" href=".idea/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href=".idea/css/styles.min.css">
    <link rel="stylesheet" href=".idea/bootstrap/css/simple.css">
</head>
<body class="registration">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Web Application Development</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="Register.php">Registration Form</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Currency_Converter.php">1. Currency Converter</a>
                        <a class="dropdown-item active" href="Registration_Form.html">2. Registration Form</a>
                        <a class="dropdown-item" href="Retrieving_Weather_Information.php">3. Retrieving Weather Information</a>
                        <a class="dropdown-item" href="YouTube_Data_Api.php">4. Youtube Data API Integration</a>
                        <a class="dropdown-item" href="Guardian_News_API.php">5. Guardian news API</a>
                    </div>
                </li></ul>
        </div>
    </div>
</nav>
<div class = "currency">
    <br>
    <br>
    <header class="header"><strong>Registration Form</strong></header>
    <hr style ="width:600px; color: black;">
    <br>
    <br>
    <table>
        <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Username</th>
            <th>Sign Up Date</th>
            <th>User Type</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "practical2");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Firstname, Surname, Username, DateRegistered, UserType FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Firstname"]. "</td><td>" . $row["Surname"] . "</td><td>"
                    . $row["Username"]."</td><td>". $row["DateRegistered"]."</td><td>". $row["UserType"]."</td></tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
        <hr>
    <br>
</div>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<script src=".idea/js/jquery.min.js"></script>
<script src=".idea/bootstrap/js/bootstrap.min.js"></script>
<script src=".idea/js/script.min.js"></script>
</body>
</html>