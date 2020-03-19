<?PHP
    //import
    include "../modules/action.php"; //framwork
    // //variabel get form data
    $username = $_REQUEST['txtUsername'];
    $password = $_REQUEST['txtPassword'];
    $btnLogin = $_REQUEST['btnLogin'];

    //function error login
    // function Login(string $username, string $password): string {
        $login = FindWhere("tbuser", "username ='$username' and password = '$password'");
        
        if(!empty($login["content"]["row"])) {
            // foreach($login["content"]["values"] as $value) {
            //     print_r ($value["username"]);
            // }
            echo "success";
        }else{
            echo "Failed";
        }
    // }
    // //logic
    // if(isset($btnLogin)){

        // $login = FindWhere("tbuser", "username ='$username' and password = '$password'");
        // //pastikan data error
        // // if(empty($login["content"]["status"])) {
        //     //pastikan data ada
        //     if(!empty($login["content"]["row"])) {
        //         // foreach($login["content"]["values"] as $value) {
        //         //     print_r ($value["username"]);
        //         // }
        //         echo "success";
        //     }else{
        //         echo "Failed";
        //     }
        // }else{
        //     echo $login["content"]["status"];
        // }
        // $result = $action->login($username,$password);
        // echo $result;
        // $datas = array(
        //     "'$username'",
        //     "'info2'",
        // );

        // //field record table
        // $fields = array(
        //     "name",
        //     "information",
        // );
        // echo $action->Insert("tbType",$fields,  $datas);
        // echo $action->Delete("tbType","#idType",12);
        // $result = array(
        //     "name" => "Kategory",
        //     "information" => "Kumpulan Kategory Project",
        // );
        // echo $action->Update("tbtype","#idType",$result,14);
        // $result = FindAll("tbtype");
        // $result = FindOne("tbuser", "username", "hendrawan");
        // print_r($result);
        // print_r($result);
        // print_r($result["content"]["status"]);
        // if(empty($result["content"]["status"])){
        //     foreach($result["content"]["values"] as $val) {
        //         // print_r($key);   
        //         print_r($val);
        //         echo "<br>";
        //     }
        // }else{
        //     print_r($result);
        // }
       
        
        // if($result["status"]["value"] == null){
        //     print_r($result["content"]["value"]);
        //     // foreach($result["content"]["value"] as $key=>$val) {
        //     //     echo $key, " - ", $val;
        //     //     echo "<br>";
        //     // }
        // }else{
        //     print_r($result["status"]["value"]);
        // }
        // $i=0;
        // foreach($result as $key=>$value){
        // print_r($result[$key]['#idType']);
        // echo "<br>";
        // $i+=1;

        // }

        // //array asosiatif
        // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        // $result =array();
        // foreach($a1 as $key=>$value){
        //     array_push($result, "'$key' = '$value'");
        //     // echo $key, $value;
        // }
        // echo implode(",", $result);
        
        //array map
        // function myfunction($v)
        // {
        // $v=strtoupper($v);
        // return $v;
        // }

        // $a=array("Animal" => "horse", "Type" => "mammal");
        // print_r(array_map("myfunction",$a));

        // $result['1'] = "satu";
        // $result['1'] = "empat";
        // $result['2'] = "dua";
        // $result['3'] = "tiga";
        // foreach($result as $key=>$value) {
        //     echo $key, $value;
        // }

        
        
    // }
        
?>