<?php
define("MAX_RESULTS", 10);
$MAX_RESULTS;
if (isset($_POST['submit']) )
{
    $keyword = $_POST['keyword'];

    if (empty($keyword))
    {
        $response = array(
            "type" => "error",
            "message" => "Please enter the keyword."
        );
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>YouTube Data API Integration</title>
    <link rel="stylesheet" href=".idea/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href=".idea/css/styles.min.css">
    <link rel="stylesheet" href=".idea/bootstrap/css/simple.css">
</head>
<body class="youTubeBackground">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Web Application Development</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="YouTube_Data_Api.php">YouTube Data API Integration</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="Currency_Converter.php">1. Currency Converter</a>
                        <a class="dropdown-item" href="Registration_Form.html">2. Registration Form</a>
                        <a class="dropdown-item" href="Retrieving_Weather_Information.php">3. Retrieving Weather Information</a>
                        <a class="dropdown-item active" href="YouTube_Data_Api.php">4. Youtube Data API Integration</a>
                        <a class="dropdown-item" href="Guardian_News_API.php">5. Guardian News API</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class = "youtube ">
    <br>
    <br>
    <header class="header"><strong>Leo's YouTube</strong></header>
    <hr style ="width:600px; color: black;">
    <div class="container-fluid" style = "width:600px; margin:auto;" >
    <div class="search-form-container">
        <form id="keywordForm" method="post" action="">
            <div class="input-row">
                <h5 style="float:left;padding-left: 30px; padding-right: 15px;">Search:</h5><input class="input-field" style ="width:400px;" type="search" id="keyword" name="keyword"  placeholder="Enter Search Keyword">
            </div>
            <br>
            <div class="input-row">
                <h5 style="float:left;padding-left: 30px; padding-right: 15px;">Max Results: </h5>
                <select type="number" id="maxResults" name="maxResults" min="1" max="10" step="1"  placeholder="10" style="max-height: 20px; float:left; margin-top: 2px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <br>
            <br>
            <input class="btn-submit"  type="submit" name="submit" value="Search" style="width: 200px;">
            <br>
        </form>
    </div>
    <?php if(!empty($response)) { ?>
        <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
    <?php }?>
    <?php
    if (isset($_POST['submit']) )
    {
$MAX_RESULTS = $_POST['maxResults'];
//echo $MAX_RESULTS;
    if (!empty($keyword))
    {
    $apikey = 'AIzaSyAf19yHKlAwBTkzAkYkPZRodof7_PRXuPk';
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . $MAX_RESULTS . '&key=' . $apikey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response);
    $value = json_decode(json_encode($data), true);
    ?>
    <div class="result-heading">About <?php echo $MAX_RESULTS; ?> Results</div>
    <div class="videos-data-container" id="SearchResultsDiv">
        <?php
        for ($i = 0; $i < $MAX_RESULTS; $i++) {
            $videoId = $value['items'][$i]['id']['videoId'];
            $title = $value['items'][$i]['snippet']['title'];
            //$description = $value['items'][$i]['snippet']['description'];
            ?>
            <div class="video-tile">
                <div  class="videoDiv">
                    <iframe id="iframe" style="width:100%;height:100% " allowfullscreen src="//www.youtube.com/embed/<?php echo $videoId; ?>"
                            data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>
                </div>
                <div class="videoInfo">
                    <div class="videoTitle"><b><?php echo $title; ?></b></div>
<!--                   <div class="videoDesc">--><?php //echo $description; ?><!--</div>-->
                </div>
            </div>
            <?php
        }
        }
        }
        ?>
    </div>
    </div>
</div>
<script src=".idea/js/jquery.min.js"></script>
<script src=".idea/bootstrap/js/bootstrap.min.js"></script>
<script src=".idea/js/script.min.js"></script>
<script>$(window).scroll(function() {
        if($(window).scrollTop() == $(document).height() - $(window).height()) {
            // ajax call get data from server and append to the div
        }
    });</script>
</body>
