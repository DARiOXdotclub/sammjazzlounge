<?php

    //pepehands

    require_once(__DIR__."/pageHandle.php");
    require_once(__DIR__."/interviewHandle.php");


    function pageHandle_getTitle ($rawData) {
        if (substr($rawData['fancyTitle'],0,6) === "%cust%") {
            $pageTitle = substr($rawData['fancyTitle'],6,strlen($rawData['fancyTitle']));
        } else {
            $pageTitle = "SJL - ".$rawData['fancyTitle'];
        }
        return $pageTitle;
    }

    function pageHandle_getContent ($rawData) {
        return file_get_contents(__DIR__."/".$rawData['data_location']);
    }