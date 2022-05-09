<?php

//First Button when pressed should display the "A" table values.

    function addData($saveArray, $sqlConnection) {
        $sqlQuery = "INSERT INTO revpanda_table (A, B, C) VALUES (
            '{$saveArray['a']}',
            '{$saveArray['b']}',
            '{$saveArray['c']}'
        )";

        $sqlResultSetAdd = $sqlConnection->query($sqlQuery);
        if($sqlResultSetAdd) {
            return true;
        }
        else {
            return false;
        }
    }
    function getAValues($sqlConnection) {
        $sqlQuery = "SELECT A FROM revpanda_table";
        $htmlString = "<tr>
        <td>A</td>
      </tr>";
		if ($sqlResultSet = $sqlConnection->query($sqlQuery)) {
			while ($sqlRow = $sqlResultSet->fetch_row()) {
                $htmlString .= "<tr>
                <td>".$sqlRow[0]."</td>
              </tr>";
			}
		}
        else {
            $htmlString = "Whoops something went wrong!";
        }

        return  $htmlString;
    }

    //Second Button when pressed should display "A", "B," "C" table values, in that order. 

    function getAllValues($sqlConnection) {
        $sqlQuery = "SELECT A, B, C FROM revpanda_table";
        $htmlString = "<tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
      </tr>";
		if ($sqlResultSet = $sqlConnection->query($sqlQuery)) {
			while ($sqlRow = $sqlResultSet->fetch_row()) {
                $htmlString .= "<tr>
                <td>".$sqlRow[0]."</td>
                <td>".$sqlRow[1]."</td>
                <td>".$sqlRow[2]."</td>
              </tr>";
			}
		}
        else {
            $htmlString = "Whoops something went wrong!";
        }

        return $htmlString;
    }

    //Third Button when pressed should display "C" and "B" table values, in that order

    function getCBValues($sqlConnection) {
        $sqlQuery = "SELECT C, B FROM revpanda_table";
        $htmlString = "<tr>
        <td>C</td>
        <td>B</td>
      </tr>";
		if ($sqlResultSet = $sqlConnection->query($sqlQuery)) {
			while ($sqlRow = $sqlResultSet->fetch_row()) {
                $htmlString .= "<tr>
                <td>".$sqlRow[0]."</td>
                <td>".$sqlRow[1]."</td>
              </tr>";
			}
		}
        else {
            $htmlString = "Whoops something went wrong!";
        }

        return $htmlString;
    }

    //Fourth Button when pressed should display "B" table values in Ascending order.

    function getBValuesAsc($sqlConnection) {
        $sqlQuery = "SELECT B FROM revpanda_table ORDER BY B ASC";
        $htmlString = "<tr>
        <td>B</td>
      </tr>";
		if ($sqlResultSet = $sqlConnection->query($sqlQuery)) {
			while ($sqlRow = $sqlResultSet->fetch_row()) {
                $htmlString .= "<tr>
                <td>".$sqlRow[0]."</td>
              </tr>";
			}
		}
        else {
            $htmlString = "Whoops something went wrong!";
        }

        return $htmlString;
    }

    //Fifth Button when pressed should display "B" table values in Descending order. 

    function getBValuesDesc($sqlConnection) {
        $sqlQuery = "SELECT B FROM revpanda_table ORDER BY B DESC";
        $htmlString = "<tr>
        <td>B</td>
      </tr>";
		if ($sqlResultSet = $sqlConnection->query($sqlQuery)) {
			while ($sqlRow = $sqlResultSet->fetch_row()) {
                $htmlString .= "<tr>
                <td>".$sqlRow[0]."</td>
            </tr>";
			}
		}

        else {
            $htmlString = "Whoops something went wrong!";
        }

        return $htmlString;
    }
?>