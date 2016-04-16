
<?php
  $pdo = new PDO('mysql:host=localhost;dbname=laravel', 'root', '');
  $select = 'SELECT *';
  $from = ' FROM workers';
  $where = ' WHERE TRUE';
  $opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');
 
  if (in_array("hasCar", $opts)){
    $where .= " AND hasCar = 1";
  }
 
  if (in_array("speaksForeignLanguage", $opts)){
    $where .= " AND speaksForeignLanguage = 1";
  }
 
  if (in_array("canWorkNights", $opts)){
    $where .= " AND canWorkNights = 1";
  }
 
  if (in_array("isStudent", $opts)){
    $where .= " AND isStudent = 1";
  }
 
  $sql = $select . $from . $where;
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);
  $json = json_encode($results);
  echo($json);
?>
