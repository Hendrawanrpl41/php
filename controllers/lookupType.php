
<?PHP
    include "../modules/action.php";
    $user = FindAll("tbuser");
    $TbUser = $user["content"]["values"];
    $UserError = $user["content"]["status"];
    $UserRow = $user["content"]["row"];
?>