<?php
    @include_once('./functions.php');
    @include_once('./sql_connection.php');

    $case = $_GET['c'];

    if($case == 'first') {
       $htmlString =  getAValues($sqlConnection);
       $title = "First Button when pressed should display the <b>A</b> table values.";
    }

    else if($case == 'second') {
        $htmlString = getAllValues($sqlConnection);
        $title = "Second Button when pressed should display  <b>A, B, C</b> table values, in that order. ";
    }

    else if($case == 'third') {
        $htmlString  = getCBValues($sqlConnection);
        $title = "Third Button when pressed should display <b>C</b> and <b>B</b> table values, in that order";
    }

    else if($case == 'fourth') {
        $htmlString  = getBValuesAsc($sqlConnection);
        $title = "Fourth Button when pressed should display <b>B</b> table values in Ascending order.";
    }

    else if($case == 'fifth') {
        $htmlString  = getBValuesDesc($sqlConnection);
        $title = "Fifth Button when pressed should display <b>B</b> table values in Descending order. ";
    }

    else {
        $title = "Wrong data passed";
        $htmlString = "";
    }


    $responseArray['html'] = $htmlString;
    $responseArray['title'] = $title;

    echo json_encode($responseArray, 1);
?>