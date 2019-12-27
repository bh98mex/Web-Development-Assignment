<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Currency Converter</title>
    <link rel="stylesheet" href=".idea/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href=".idea/css/styles.min.css">
    <link rel="stylesheet" href=".idea/bootstrap/css/simple.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Web Application Development</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="Curency_Converter.php">Currency Converter</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="Currency_Converter.php">1. Currency Converter</a>
                        <a class="dropdown-item" href="Registration_Form.html">2. Registration Form</a>
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
    <header class="header"><strong>Currency Converter</strong></header>
    <hr style ="width:600px; color: black;">
    <br>
<br>
    <?php
    if(isset($_POST['submit'])) {
        $value = $_POST['value'];
        $fromCurrency = $_POST['fromCurrency'];
        $toCurrency = $_POST['toCurrency'];
        $exchangeRate;
        /*** USD */
        $USDtoUSD = 1.0;
        $USDtoEUR = 0.88398;
        $USDtoGBP = 0.76603;
        $USDtoINR = 71.7140;
        $USDtoAUD = 1.38605;
        $USDtoCAD = 1.31317;
        $USDtoSGD = 1.35315;
        /*** EUR */
        $EURtoEUR = 1.0;
        $EURtoUSD = 1.14358;
        $EURtoGBP = 0.876031;
        $EURtoINR = 81.9957;
        $EURtoAUD = 1.58468;
        $EURtoCAD = 1.50161;
        $EURtoSGD = 1.54726;
        /*** GBP */
        $GBPtoGBP = 1.0;
        $GBPtoUSD = 1.30523;
        $GBPtoEUR = 1.14157;
        $GBPtoINR = 93.5661;
        $GBPtoAUD = 1.80847;
        $GBPtoCAD = 1.71398;
        $GBPtoSGD = 1.76592;
        /*** INR */
        $INRtoINR = 1.0;
        $INRtoUSD = 0.0139543;
        $INRtoEUR = 0.0122064;
        $INRtoGBP = 0.0122064;
        $INRtoAUD = 0.0193367;
        $INRtoCAD = 0.0193367;
        $INRtoSGD = 0.0188828;
        /*** AUD */
        $AUDtoAUD =1.0;
        $AUDtoUSD = 0.0188828;
        $AUDtoEUR = 0.631326;
        $AUDtoGBP = 0.553250;
        $AUDtoINR = 51.7108;
        $AUDtoCAD = 0.947665;
        $AUDtoSGD = 0.976378;
        /*** CAD */
        $CADtoCAD = 1.;
        $CADtoUSD = 0.761367;
        $CADtoEUR = 0.666121;
        $CADtoGBP = 0.583846;
        $CADtoINR = 54.5764;
        $CADtoAUD = 1.05533;
        $CADtoSGD = 1.03046;
        /*** SGD */
        $SGDtoSGD = 1.0;
        $SGDtoUSD = 0.761459;
        $SGDtoEUR = 0.646327;
        $SGDtoGBP = 0.566604;
        $SGDtoINR = 52.9583;
        $SGDtoAUD = 1.02400;
        $SGDtoCAD = 0.970581;
/*function to minimise the hardcoding*/
        function writeMessage($fromCurrency, $toCurrency, $value,$exchangeRate)
        {
            echo '<div class="container" ><div class="alert alert-primary animated fadeIn" style="width:600px; margin:auto;" role="alert">';
            echo "<center><b>Your Converted Amount is:</b><br></center>";
            echo "<center>" . "$value ".$fromCurrency." is worth " .  $value * ($exchangeRate)." $toCurrency" . " at a rate of $exchangeRate" . "</center>";
            echo '</div></div>';
        }
        /*USD*/
        if ($fromCurrency == "USD") {
            if ($toCurrency == "USD") {
                $exchangeRate=$USDtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$USDtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency== "GBP") {
                $exchangeRate=$USDtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency== "INR") {
                $exchangeRate=$USDtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency== "AUD") {
                $exchangeRate=$USDtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$USDtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency== "SGD") {
                $exchangeRate=$USDtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }

        }
        /*EURO*/
        if ($fromCurrency == "EUR") {
            if ($toCurrency== "USD") {
                $exchangeRate=$EURtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$EURtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$EURtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$EURtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$EURtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$USDtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$EURtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
/*GBP*/
        }
        if ($fromCurrency == "GBP") {
            if ($toCurrency == "USD") {
                $exchangeRate=$GBPtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$GBPtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$GBPtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$GBPtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$GBPtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$USDtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$GBPtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
/*INR*/
        }
        if ($fromCurrency == "INR") {
            if ($toCurrency == "USD") {
                $exchangeRate=$INRtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$INRtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$INRtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$INRtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$INRtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$INRtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$INRtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
/*AUD*/
        }
        if ($fromCurrency == "AUD") {
            if ($toCurrency == "USD") {
                $exchangeRate=$AUDtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$AUDtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$INRtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$AUDtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$AUDtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$AUDtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$AUDtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
/*CAD*/
        }
        if ($fromCurrency == "CAD") {
            if ($toCurrency == "USD") {
                $exchangeRate=$CADtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$CADtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$CADtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$CADtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$INRtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$CADtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$CADtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
        }
        if ($fromCurrency == "SGD") {
            if ($toCurrency == "USD") {
                $exchangeRate=$SGDtoUSD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "EUR") {
                $exchangeRate=$SGDtoEUR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "GBP") {
                $exchangeRate=$SGDtoGBP;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "INR") {
                $exchangeRate=$SGDtoINR;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "AUD") {
                $exchangeRate=$INRtoAUD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "CAD") {
                $exchangeRate=$SGDtoCAD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
            if ($toCurrency == "SGD") {
                $exchangeRate=$SGDtoSGD;
                writeMessage($fromCurrency,$toCurrency,$value,$exchangeRate);
            }
        }
    }
    ?>
    <div class="container" style="width:630px;">
        <form action="" method="post">
            <br>
            <hr>
            <div class="form-group">
                <label for="insertCurrency">Insert amount</label>
                <input type="number" name="value" class="form-control" required id="insertCurrency" aria-describedby="currency" placeholder="Enter amount">
                <small id="insertCurrency" class="form-text text-muted">Insert the value to be changed</small>
                <br>
            </div>
            <div class="row">
                <div class="col col-6">
                    <div class="form-group">
                        <label for="insertCurrency">Existing Currency</label>
                        <select class="form-control" name="fromCurrency">
                            <option value="USD">USD - United States Dollar</option>
                            <option value="EUR">EUR - Euro </option>
                            <option value="GBP">GBP - British Pound</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="AUD">AUD - Australian Dollar</option>
                            <option value="CAD">CAD - Canadian Dollar</option>
                            <option value="SGD">SGD - Singapore Dollar</option>
                        </select>
                        <br>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="form-group">
                        <label for="convertedCurrency">Desired Currency</label>
                        <select class="form-control" name="toCurrency">
                            <option value="USD">USD - United States Dollar</option>
                            <option value="EUR">EUR - Euro </option>
                            <option value="GBP">GBP - British Pound</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="AUD">AUD - Australian Dollar</option>
                            <option value="CAD">CAD - Canadian Dollar</option>
                            <option value="SGD">SGD - Singapore Dollar</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <button class="btn btn-block btn-secondary" style= "width:350px; margin:auto;" type='submit' name='submit' value="CovertNow">Calculate</button></br>
        </form>
        <br>
        <br>
        <br>
</div>
    <script src=".idea/js/jquery.min.js"></script>
    <script src=".idea/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src=".idea/js/script.min.js"></script>
</body>
</html>
