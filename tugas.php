  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3bc808db24558a6b/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $pretty= $parsed_json->history->date->pretty;
  $year= $parsed_json->history->utcdate->year;
  $mon= $parsed_json->history->utcdate->mon;
$time= $parsed_json->history->utcdate->hour;
  echo
  "Tanggal Lahir : $pretty </br>
  Tahun : $year </br>
  Bulan : $mon </br>
  Waktu : $time \n";
?>