<?php
    function fetchPage($pageSelection) {
        $pageData = json_decode(file_get_contents(__DIR__."/pageData.json"),true);
        $requestExists = true;
        $returnValue;
        foreach ($pageData as $tmpPageSel) {
            if ($tmpPageSel['name'] === $pageSelection && $tmpPageSel['type'] === "page") {
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

    