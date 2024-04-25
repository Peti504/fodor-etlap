<? 
$callname = $_REQUEST["cn"];
$param = $_REQUEST["p"];
$adb=mysqli_connect("localhost", "root", "12345678", "etlap");

switch($callname){
    case "login":
        if(md5($param) == md5("12345")){
            echo implode(';', array($callname, "sikeres"));
        }
        else{
            echo implode(';', array($callname, "sikertelen"));
        }
        break;
    case"fulletlap":
        $etelek = mysqli_query($adb, "SELECT * FROM etelek");
        $table = "<table>";
        $CurrentRow = mysqli_fetch_array($etelek);
        while($CurrentRow != null){
            $table .= "\n\t<tr>\n\t\t<td>$CurrentRow[nev]</td>
                        </tr>";
        }
        echo $implode(';', array($callname, $table));;
        break;

}

?>