<?php

    @include_once('./sql_connection.php');

    @include_once('./functions.php');
    $A = (isset($_POST["a"]) ? htmlentities(strip_tags($_POST["a"]), ENT_QUOTES) : "");
    $B = (isset($_POST["b"]) ? htmlentities(strip_tags($_POST["b"]), ENT_QUOTES) : "");
    $C = (isset($_POST["c"]) ? htmlentities(strip_tags($_POST["c"]), ENT_QUOTES) : "");

    $postScript = "";
    $errorArray = [];
    $response = [];

    if($A == "") {
        $postScript .= "$('.error-a').html('Please enter a value for A');";
        $errorArray[] = 'a';
    }

    if($B == "") {
        $postScript .= "$('.error-b').html('Please enter a value for b');";
        $errorArray[] = 'b';
    }

    if( ($B !== "") and (!is_numeric($B))) {
        $postScript .= "$('.error-b').html('Please enter a numeric value for b');";
        $errorArray[] = 'b';
    }

    if($C == "") {
        $postScript .= "$('.error-c').html('Please enter a value for C');";
        $errorArray[] = 'c';
    }


    if( empty($errorArray)) {
        $saveArray['a'] = $A;
        $saveArray['b'] = $B;
        $saveArray['c'] = $C;

        $saveData = addData($saveArray, $sqlConnection);

        
        if($saveData) {
            $postScript = "$('.success').html('Record succefully added to database!');";
        }
        else {
            $postScript = "$('.main-error').html('Oops something went wrong!');";
        }
    }

    $response['postScript'] = $postScript;

    echo json_encode($response, 1);
    
?>