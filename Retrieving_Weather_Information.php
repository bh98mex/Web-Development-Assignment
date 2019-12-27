<?php
/**
 * Created by IntelliJ IDEA.
 * User: Leo_G
 * Date: 16/02/2019
 * Time: 23:17
 */


//Location of the values necessary for input
$DataFile = "http://scm.ulster.ac.uk/weather/Realtime.txt";
//open the file with the read only option
$read = fopen($DataFile, 'r');
//use fread() function to read from an open file in php
$Date = fread($read, 8);
$Time = fread($read, 9);
$OutsideTemperature = fread($read, 5);
$RelativeHumidity = fread($read, 3);
$DewPoint = fread($read, 3);
$WindSpeed = fread($read, 3);
$LatestWindSpeed = fread($read, 3);
$WindBearing = fread($read, 4);
$CurrentRainRate = fread($read, 3);
$RainRate = fread($read, 4);
$Barometer = fread($read, 4);
$CurrentWindDirection = fread($read, 5);
$WindSpeed = fread($read, 3);
$NullValues = fread($read, 12); // empty values
$WindRun = fread($read, 4);
$PreasureTrendValue = fread($read, 4);
$MonthlyRainFall = fread($read, 5);
$YearlyRainFall = fread($read, 4);
$YesterdayRainFall = fread($read, 5);
$InsideTemperature = fread($read, 5);
$InsideHumidity = fread($read, 4);
$Windchill = fread($read, 4);
$TemperatureTrendValue = fread($read, 4);
$TodayHighTemperature= fread($read,6);
$CurrentTime = fread($read, 6);
fclose($read);
//close the file after reading
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Retrieving Weather Information</title>
    <link rel="stylesheet" href=".idea/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href=".idea/css/styles.min.css">
    <link rel="stylesheet" href=".idea/bootstrap/css/simple.css">
</head>
<body class="weather">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Web Application Development</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="Retrieving_Weather_Information.php">Retrieving Weather Information</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Currency_Converter.php">1. Currency Converter</a>
                        <a class="dropdown-item " href="Registration_Form.html">2. Registration Form</a>
                        <a class="dropdown-item active" href="Retrieving_Weather_Information.php">3. Retrieving Weather Information</a>
                        <a class="dropdown-item " href="YouTube_Data_Api.php">4. Youtube Data API Integration</a>
                        <a class="dropdown-item" href="Guardian_News_API.php">5. Guardian news API</a>
                    </div>
                </li></ul>
        </div>
    </div>
</nav>
<div class = "vreme">
    <br>
    <br>
    <header class="header"><strong>Weather Information</strong></header>
    <hr style ="width:600px; color: black;">
    <table>
        <tr>
            <th>Date:</th>
            <td><?php echo $Date ?></td>
        </tr>
        <tr>
            <th>Time:</th>
            <td><?php echo $Time ?></td>
        </tr>
        <tr>
            <th>Outside Temperature:</th>
            <td><div class="progress" style="margin: auto;" >
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $OutsideTemperature ?> " aria-valuemin="0" aria-valuemax="40" style="width:40%">
                        <?php echo $OutsideTemperature ?> &#8451;
                    </div>
                </div></td>
        </tr>
        <tr>
            <th>Relative Humidity:</th>
            <td><?php echo $RelativeHumidity ?> %</td>
        </tr>
        <tr>
            <th>Dewpoint:</th>
            <td><?php echo $DewPoint ?> C<sup>o</sup></td>
        </tr>
        <tr>
            <th>Wind speed (average):</th>
            <td><?php echo $WindSpeed ?> mph</td>
        </tr>
        <tr>
            <th>Latest wind speed reading:</th>
            <td><?php echo $LatestWindSpeed ?> mph</td>
        </tr>
        <tr>
            <th>Wind bearing (degrees):</th>
            <td><?php echo $WindBearing ?> <sup>o</sup></td>
        </tr>
        <tr>
            <th>Current rain rate (per hour):</th>
            <td><?php echo $CurrentRainRate ?> mm</td>
        </tr>
        <tr>
            <th>Rain today:</th>
            <td><?php echo $RainRate ?> mm</td>
        </tr>
        <tr>
            <th>Barometer (sea level pressure):</th>
            <td><?php echo $Barometer ?> mb</td>
        </tr>
        <tr>
            <th>Current wind direction:</th>
            <td><?php echo $CurrentWindDirection ?></td>
        </tr>
        <tr>
            <th>Wind speed (beaufort):</th>
            <td><?php echo $WindSpeed ?></td>
        </tr>
        <tr>
            <th>Wind run (today):</th>
            <td><?php echo $WindRun ?></td>
        </tr>
        <tr>
            <th>Preassure trend value:</th>
            <td><?php echo $PreasureTrendValue ?> mb</td>
        </tr>
        <tr>
            <th>Monthly rainfall:</th>
            <td><?php echo $MonthlyRainFall ?> mm</td>
        </tr>
        <tr>
            <th>Yearly rainfall:</th>
            <td><?php echo $YearlyRainFall ?> mm</td>
        </tr>
        <tr>
            <th>Yesterday's rainfall:</th>
            <td><?php echo $YesterdayRainFall ?> mm</td>
        </tr>
        <tr>
            <th>Inside temperature:</th>
            <td><?php echo $InsideTemperature ?> C<sup>o</sup></td>
        </tr>
        <tr>
            <th>Inside humidity:</th>
            <td><?php echo $InsideHumidity?> %</td>
        </tr>
        <tr>
            <th>Wind chill:</th>
            <td><?php echo $Windchill?> C<sup>o</sup></td>
        </tr>
        <tr>
            <th>Temperature trend value:</th>
            <td><?php echo $TemperatureTrendValue?> C<sup>o</sup></td>
        </tr>
    </table>
    <hr style ="width:600px; color: black;">
    <h6 style="margin-left: 30px;">Today's high temperature at <?php echo $CurrentTime?> was: <?php echo $TodayHighTemperature?> C<sup>o</sup></h6>
    <hr style ="width:600px; color: black;">
</div>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 85%;
        margin: auto;
        font-size: smaller;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 7px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<script src=".idea/js/jquery.min.js"></script>
<script src=".idea/bootstrap/js/bootstrap.min.js"></script>
<script src=".idea/js/script.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
