<?php
  require 'common.php';

  try {

  	  $pdo = connect();
	  $st = $pdo->query("SELECT * FROM goods");
	  $goods = $st->fetchAll();
	  require 't_index.php';

  } catch (PDOException $e) {
  	echo $e->getMessage();
  }

?>