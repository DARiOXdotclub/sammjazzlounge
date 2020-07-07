<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once(__DIR__."/backend/init.php");
    $pageTitle = "null";
    $content = "null";

    if (!ISSET($_GET['p'])) {
        $returnJSON = fetchPage("home");
        //substr( $string_n, 0, 4 ) === "http"
        $pageTitle = pageHandle_getTitle($returnJSON);
        $content = pageHandle_getContent($returnJSON);
    } else {
        $pageGET = $_GET['p'];

        $pageReturn;

            // Check if the user wants to use a custom page (interview, shows, etc...)
        if (ISSET($_GET['tp'])) {
            switch ($_GET['tp']){
                case "interview":
                    $content = generateInterview($pageGET);
                    $pageReturn = fetchInterviewRAW($pageGET);
                    break;
                case "shows":
                    header("Location: https://sammjazzlounge.com");
                    $pageReturn = generateShow($pageGET);
                    break;
            }
        } else {
            $pageReturn = fetchPage($pageGET);
            $content = pageHandle_getContent($pageReturn);
        }
        $pageTitle = pageHandle_getTitle($pageReturn);
        
            // Check if the fetchPage function returned with a 404 error (page not found)
        if ($pageReturn === 404) {
            // Custom 404 Page Thing Here
            $pageReturn = fetchPage("404");
        }

        //print_r($pageReturn);


    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="navbar"> 
            <ul>
                <!-- style="float:right" -->
                <li><a href="?p=home">Home</a></li>
                <li><a onclick="unavail()" href="#">Shows</a></li>
                <li><a onclick="unavail()" href="#">Interviews</a></li>
                <li><a href="?p=contact">Contact</a></li>
            </ul>
        </div>
        <div class="navbar_seperator"></div>
        <div class="content">
            <div class="title">
				<h1> <?php echo $pageTitle; ?> </h1>
            </div>

                <?php echo $content; ?>

        </div>
        <div class="footer">
            <div class="copyright">
                Powered by <a href="http://dariox.club">DARiOX</a>
            </div>
        </div>
        <script>
function unavail() {
    alert("This Page is Still Being Created. Stay Tuned!")
}
        </script>
    </body>
</html>