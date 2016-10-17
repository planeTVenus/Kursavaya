//подключение к бд
$hdd = osinfo_diskserial(substr(C,0,9));
$hdd_change = md5($hdd);
c("edit1")->text = $hdd_change;
$host = "сервер"; //ЗАПОЛНИТЬ
$user = "юзер"; //ЗАПОЛНИТЬ
$pass = "пароль"; //ЗАПОЛНИТЬ
$db_name = "имя бд"; //ЗАПОЛНИТЬ
$connect = mysql_connect($host,$user,$pass);
mysql_select_db($db_name);
if($connect == true){
$query = "SELECT * FROM название_таблицы"; //ЗАПОЛНИТЬ
$result = mysql_query($query);
while ($connect = mysql_fetch_array($result, MYSQL_ASSOC)){
$keys = $connect['название_столбика']; //ЗАПОЛНИТЬ
messageDlg("Нажимай курсором!", mtInformation, MB_HELP);
if($hdd_change = $keys){
c("Label1")->caption = "Ключ активирован";
}
}
}
else{
messageDlg("Не удалось подключиться к серверу!", mtWarning, MB_OK);
}
