
<?PHP
    include "../modules/action.php";
    $type = FindAll("tbtype");
    $TbType = $type["content"]["values"];
    $TypeError = $type["content"]["status"];
    $TypeRow = $type["content"]["row"];
?>