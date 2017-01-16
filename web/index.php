
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>REST/OAuth Example</title>
</head>
<body>
<?php
  require_once ('force/salesforceconn.php');
  $sfconn = new SalesforceConn();
  $query = 'SELECT Id,Name from Account limit 5';
  $response = $sfconn->query(($query));

  foreach ($response->records as $record) {
    print_r($record);
    print_r("<br>");
  }
?>

</body>
</html>
