<?PHP
//import connection
include "../config/connection.php";

//fucntion Insert Record
function Insert(string $table, array $fields, array $datas): string
{
    //looup data
    $content = array(); //aray temp
    foreach ($datas as $value) {
        array_push($content, $value);
    }
    $contents = implode(",", $content);

    //looup field
    $fieldRecord = array(); //array temp
    foreach ($fields as $value) {
        array_push($fieldRecord, $value);
    }

    $fieldRecords = implode(",", $fieldRecord);

    //insert data to table
    $query = "INSERT INTO `$table` ($fieldRecords) VALUES($contents)";
    $result = $GLOBALS['conn']->query($query); //execute

    //debug Query
    // echo $query;

    //result
    if ($result) {
        return "suscess insert" . $GLOBALS['conn']->insert_id;
    }
    return "Failed Insert" . $GLOBALS['conn']->error;
}

//fucntion Delete Record
function Delete(string $table, string $field, $id): string
{
    //Query Delete
    $query = "DELETE FROM `$table` WHERE `$table`.`$field` = $id";
    $result = $GLOBALS['conn']->query($query); //execute

    //debug Query
    echo $query;

    //result
    if ($result) {
        return "Delete Success";
    }
    return "Delete Failed" . $GLOBALS['conn']->error;
}

//fucntion Update Record
function Update(string $table,  string $field, array $datas, $id): string
{
    //looup data
    $content = array(); //aray temp
    foreach ($datas as $key => $value) {
        array_push($content, "`$key` = '$value'");
    }
    $contents = implode(",", $content);

    //insert data to table
    $query = "UPDATE `$table` SET $contents WHERE `$table`.`$field` = $id";
    $result = $GLOBALS['conn']->query($query); //execute

    //debug Query
    echo $query;
    //result
    if ($result) {
        return "Update Success";
    }
    return "Update Failed" . $GLOBALS['conn']->error;
}

//fucntion Find all record Record
function FindAll(string $table): array
{
    //structure Data
    $arrResult = array(
        "content" => array(
            "status" => "",
            "row" => 0,
            "values" => array(),
        )
    );

    //query
    $query = "SELECT *FROM `$table`";
    $result = $GLOBALS['conn']->query($query);

    //messege error
    if (!$result) {
        array_push($arrResult, $arrResult["content"]["status"] = $GLOBALS["conn"]->error);
    }

    //length row record
    array_push($arrResult, $arrResult["content"]["row"] = $result->num_rows);

    //looup records
    if (!empty($arrResult["content"]["row"])) {

        //add record to array
        while ($record = $result->fetch_array(MYSQLI_ASSOC)) {
            array_push($arrResult["content"]["values"], $record);
        }
    }
    //return array
    return $arrResult;
}


//fucntion Find one record Record
function FindOne(string $table, string $field, $id): array
{
    //structure Data
    $arrResult = array(
        "content" => array(
            "status" => "",
            "row" => 0,
            "values" => array(),
        )
    );

    //query
    $query = "SELECT *FROM `$table` WHERE `$field` = '$id' ";
    $result = $GLOBALS['conn']->query($query);

    //messege error
    if (!$result) {
        array_push($arrResult, $arrResult["content"]["status"] = $GLOBALS["conn"]->error);
    }

    //length row record
    array_push($arrResult, $arrResult["content"]["row"] = $result->num_rows);

    //looup records
    if (!empty($arrResult["content"]["row"])) {
        //add record to array
        while ($record = $result->fetch_array(MYSQLI_ASSOC)) {
            array_push($arrResult["content"]["values"], $record);
        }
    }

    //return array
    return $arrResult;
}

//fucntion condition data  record Record
function FindWhere(string $table, string $condition): array
{
    //structure Data
    $arrResult = array(
        "content" => array(
            "status" => "",
            "row" => 0,
            "values" => array(),
        )
    );

    //query
    $query = "SELECT *FROM `$table` WHERE $condition";
    //debug
    // echo $query;

    $result = $GLOBALS['conn']->query($query);

    //messege error
    if (!$result) {
        array_push($arrResult, $arrResult["content"]["status"] = $GLOBALS["conn"]->error);
    }

    //length row record
    array_push($arrResult, $arrResult["content"]["row"] = $result->num_rows);

    //looup records
    if (!empty($arrResult["content"]["row"])) {
        //add record to array
        while ($record = $result->fetch_array(MYSQLI_ASSOC)) {
            array_push($arrResult["content"]["values"], $record);
        }
    }

    //return array
    return $arrResult;
}
