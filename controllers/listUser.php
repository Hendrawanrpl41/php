
<?PHP
    include "../modules/action.php";
    $result = FindAll("tbuser");
    $TbUser = $result["content"]["values"];
    $Error = $result["content"]["status"];
    $Row = $result["content"]["row"];

?>