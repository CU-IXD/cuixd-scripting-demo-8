<?php
  
  // NOTE: This file is provided for reference but will not work 
  // in CodeSandbox as it does in the demo video. 
  
  // Set up variables
  $data = array();
  $method = 'Unknown';

  // Determine data source
  if (isset($_POST) && !empty($_POST)) {
    $method = 'POST';
    $data = $_POST;
  } elseif (isset($_GET) && !empty($_GET)) {
    $method = 'GET';
    $data = $_GET;
  }

  // Cover empty values
  foreach ($data as $field => &$value) {
    if (empty($value)) {
      $value = '<i>Empty</i>';
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lesson 8 Demo</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.css" />
</head>
<body class="container">
    <h2>Thanks for your info</h2>
    <dl class="dl-horizontal">
      
      <dt>Method:</dt>
      <dd><?php echo $method; ?></dd>
      <hr/>
      
      <?php foreach($data as $field => $value) : ?>
      <dt><?php echo $field; ?></dt>
      <dd><?php echo $value; ?></dd>
      <?php endforeach; ?>
    
    </dl>
</body>
</html>