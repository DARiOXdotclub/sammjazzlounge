<?php
    function fetchInterviewRAW($interviewSelection) {
        $pageData = json_decode(file_get_contents(__DIR__."/pageData.json"),true);
        $requestExists = true;
        $returnValue;
        foreach ($pageData as $tmpPageSel) {
            if ($tmpPageSel['name'] === $interviewSelection && $tmpPageSel['type'] === "interview") {
                $requestExists = false;
                $returnValue = $tmpPageSel;
            }
        }
        if ($requestExists) {
            return 404;
        } else {
            return $returnValue;
        }
    }

    function generateInterview($requestedInterview) {
        $pageData = json_decode(file_get_contents(__DIR__."/pageData.json"),true);
            // Check if interview is valid
        $interviewRAW = fetchInterviewRAW($requestedInterview);
        if ($interviewRAW === 404) {
            return 404;
        }

        $dataContents = file_get_contents(__DIR__."/".$interviewRAW['data_location']);

        $audioLoc = $interviewRAW['interview']['audio_location'];

        $audio = '
        <audio controls class="interview audio"> 
            <source src="'.$audioLoc.'" type="audio/x-wav"> 
        </audio><br>
        <a class="download" href="'.$audioLoc.'" download>Download this Interview</a>
        ';

        $sideBarImage = '
        <div class="interview image">
            <img class="img" src="'.$interviewRAW['interview']['image'].'" height="256" width="256" />
            <div class="interview title"> '.$interviewRAW['fancyTitle'].' </div>
        </div>';

        $final = '<div class="interview">'.$sideBarImage.$dataContents.$audio."</div>";

        //print_r($sideBarImage);

        return $final;
    }