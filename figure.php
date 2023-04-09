<html>
<body>
<?
if ($_POST['triangleW'] && $_POST['triangleH']) { 
    $result['triangle'] = $_POST['triangleW'] * $_POST['triangleH'] / 2; 
  }
  if ($_POST['quadrangleW'] && $_POST['quadrangleH']) { 
    $result['quadrangle'] = $_POST['quadrangleW'] * $_POST['quadrangleH']; 
  } 
  if ($_POST['circleR']) { 
    $result['circle'] = pow($_POST['circleR'], 2) * pi(); 
  }
  if ($_POST['parallelepipedW'] && $_POST['parallelepipedL'] && $_POST['parallelepipedH']) { 
    $result['parallelepiped'] = $_POST['parallelepipedW'] * $_POST['parallelepipedL'] *  $_POST['parallelepipedH']; 
  } 
  if ($_POST['cylinderR'] && $_POST['cylinderH']) { 
    $result['cylinder'] = (pow($_POST['cylinderR'], 2) * pi()) *  $_POST['cylinderH']; 
  }
  if ($_POST['sphereR']) { 
    $result['sphere'] = ((pow($_POST['sphereR'], 3) * pi()) *  4) / 3; 
  }





?>

</body>
</html>