<?php
require_once 'config.php';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQL connect failed. ' . mysqli_error($dbConn));
//mysqli_select_db($dbName) or die('Cannot select database. ' . mysqli_error());

function dbQuery($sql)
{
    global $dbConn;
    $result = mysqli_query($dbConn, $sql);
    
    if(!$result) {
        die (mysqli_error($dbConn));
    }
	
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysqli_select_db($dbName);
}

function dbInsertId()
{
	return mysqli_insert_id();
}
?>