<?php
$max_results;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Guardian News API</title>
    <link rel="stylesheet" href=".idea/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href=".idea/css/styles.min.css">
    <link rel="stylesheet" href=".idea/bootstrap/css/simple.css">
</head>
<body class="guardianBackground">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Web Application Development</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="YouTube_Data_Api.php">Guardian News API</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="Currency_Converter.php">1. Currency Converter</a>
                        <a class="dropdown-item" href="Registration_Form.html">2. Registration Form</a>
                        <a class="dropdown-item" href="Retrieving_Weather_Information.php">3. Retrieving Weather Information</a>
                        <a class="dropdown-item " href="YouTube_Data_Api.php">4. Youtube Data API Integration</a>
                        <a class="dropdown-item active" href="Guardian_News_API.php">5. Guardian News API</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class = "guardianresults">
    <br>
    <br>
    <header class="header"><strong>Guardian API Feeds</strong></header>
    <hr style ="width:600px; color: black;">
    <div class="container-fluid" style = "width:600px; margin:auto; padding-right: 40px;" >
        <div class="search-form-container">
            <form id="keywordForm" method="post" action="">
                <div class="input-row">
                    <h5 style="float:left;padding-left: 30px; padding-right: 15px;">Search:</h5><input class="input-field" style ="width:400px;" type="search" id="keyword" name="keyword" value="<?php $type?>" placeholder="Enter Search Keyword">
                </div>
                <div class="input-row">
                    <br>
                    <div class="input-row">
                        <h5 style="float:left;padding-left: 30px; padding-right: 15px;">Max Results: </h5>
                        <input type="number" id="maxResults" name="maxResults" min="1" max="40" step="1"  placeholder="eg.10" style="max-height: 20px; float:left; margin-top: 2px;"/>
                    </div>
                    <br>
                    <br>
                <input class="btn-submit"  type="submit" name="submit" value="Search" style="width: 140px; background-color: black; color:white;margin-left:80px;">
                <br>
            </form>
        </div>
    </div>
    <div class="container-fluid" id="SearchResultsDiv" style=" width:650px;padding-right: 60px;padding-left: -20px;">
        <?php
        require 'Carbon/autoload.php';
        use Carbon\Carbon;

        if (isset($_POST['submit'])) {

            $apiKey = '1eb6312d-9b6c-4aec-9ce8-2b2f8ec82f72';
            $seachPost = urlencode( $_POST["keyword"]);
            $MAX_RESULTS = $_POST["maxResults"];
            echo('<br>');
            $request = "https://content.guardianapis.com/search?&api-key=" .$apiKey . "&q=" . $seachPost . "&page-size=" . $MAX_RESULTS ."&page=1&show-fields=starRating,headline,thumbnail,trailText,short-url";
            echo ('Here are <strong>'.$MAX_RESULTS.'</strong> results related to: <strong><cite> '. $seachPost .' </cite></strong>');
            echo('<br>');
            echo('<hr style ="width:600px; color: black;">');
            $response  = file_get_contents($request);
            $jsonobj  = json_decode($response);

            echo ('<div class="row">');
            for($i=0; $i<$MAX_RESULTS; $i++)
            {
                $webTitle = $jsonobj ->response->results[$i] ->webUrl;
                $headline=$jsonobj ->response->results[$i]->fields->headline;
                $trailText = $jsonobj ->response->results[$i]->fields->trailText;
                $shortUrl = $jsonobj ->response->results[$i]->fields->shortUrl;
                $image=$jsonobj ->response->results[$i]->fields->thumbnail;
                $webPublicationDate = $jsonobj ->response->results[$i]->webPublicationDate;
                $releaseDate=Carbon::now()->diffForHumans($webPublicationDate,true,null).' ago';

                //bootstrap cards
                echo('<br>');
                echo('<div class="col-sm-6" style="padding-top: 10px;padding-bottom:10px;" >');
                echo('<div class="card" style="width:300px;">');
                echo('<div class="card-body">');
                echo('<h5 class="card-title">'.$headline.'</h5>');
                echo('<img src="'.$image.'" class="card-img-top" alt="..."><hr>');
                echo('<p class="card-text">'.$trailText.'</p>');
                echo('<a href="'.$shortUrl.'" class="btn btn-primary">Read more</a>');
                echo(' </div>');
                echo('<div class="card-footer text-muted">'.$releaseDate.'</div>');
                echo(' </div>');
                echo(' </div>');
                echo('<br>');


                       }
            echo ('</div>');
                }

        ?>
    </div>
</div>
</div>
</div>
<script src=".idea/js/jquery.min.js"></script>
<script src=".idea/bootstrap/js/bootstrap.min.js"></script>
<script src=".idea/js/script.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    var counter=0;
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height() && counter < 2) {
            appendData();
        }
    });
    function appendData() {
        var html = '';
        for (i = 0; i < 10; i++) {
            html += '   <?php

                        //bootstrap cards
                        echo('<br>');
                        echo('<div class="col-sm-6" style="padding-top: 10px;padding-bottom:10px;" >');
                        echo('<div class="card" style="width:300px;">');
                        echo('<div class="card-body">');
                        echo('<h5 class="card-title">'.$headline.'</h5>');
                        echo('<img src="'.$image.'" class="card-img-top" alt="..."><hr>');
                        echo('<p class="card-text">'.$trailText.'</p>');
                        echo('<a href="'.$shortUrl.'" class="btn btn-primary">Read more</a>');
                        echo(' </div>');
                        echo('<div class="card-footer text-muted">'.$releaseDate.'</div>');
                        echo(' </div>');
                        echo(' </div>');
                        echo('<br>');
                ?>';
        }
        $('#SearchResultsDiv').append(html);
        counter++;

        if(counter==2)
            $('#SearchResultsDiv').append('<button id="uniqueButton" style="margin-left: 50%; background-color: powderblue;">Click</button><br /><br />');
    }
</script>
</body>
