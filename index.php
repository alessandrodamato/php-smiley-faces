<?php 

$arr1 = [':)', ';(', ';}', ':-D'];
$arr2 = [';D', ':-(', ':-)', ';~)'];
$arr3 = [';]', ':[', ';*', ':$', ';-D'];

function countSmileys($arr) :int {
  
  foreach($arr as $face){
    
    $eyes = $face[0];
    if (strlen($face) === 3) {
      $nose = $face[1];
    } elseif (strlen($face) === 2) {
      $nose = null;
    } else {
      $nose = 'invalid';
    }
    $mouth = $face[strlen($face)-1];

    if(($eyes === ':' || $eyes === ';') && ($nose === null || $nose === '-' || $nose === '~') && ($mouth === ')' || $mouth === 'D')) {
      $valid_faces[] = $face;
    }

    // $valid_eyes = false;
    // $valid_nose = false;
    // $valid_mouth = false;

    // var_dump('eyes' . '      ' . $eyes);
    // var_dump('nose' . '      ' . $nose);
    // var_dump('mouth' . '      ' . $mouth);
    
    // if($eyes === ':' || $eyes === ';') {
    //   $valid_eyes = true;
    // }

    // if($nose === null || $nose === '-' || $nose === '~'){
    //   $valid_nose = true;
    // }

    // if($mouth === ')' || $mouth === 'D'){
    //   $valid_mouth = true;
    // }

    // if($valid_eyes && $valid_nose && $valid_mouth){
    //   $valid_faces[] = $face;
    // }
    
  }

  if(!empty($valid_faces)) {
    return count($valid_faces);
  } else {
    return 0;
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>PHP Smiley Faces</title>
</head>
<body>

  <div class="container text-center">
    <h1 class="mb-5">PHP Smiley Faces</h1>

    <h2>Gruppo 1 <span class="ms-4"><?php echo implode('<span class="text-danger"> --- </span>', $arr1) ?></span></h2>
    <h4 class="mb-5">Faccine valide: (<?php echo countSmileys($arr1) ?> su 2)</h4>

    <h2>Gruppo 2 <span class="ms-4"><?php echo implode('<span class="text-danger"> --- </span>', $arr2) ?></span></h2>
    <h4 class="mb-5">Faccine valide: (<?php echo countSmileys($arr2) ?> su 3)</h4> 

    <h2>Gruppo 3 <span class="ms-4"><?php echo implode('<span class="text-danger"> --- </span>', $arr3) ?></span></h2>
    <h4 class="mb-5">Faccine valide: (<?php echo countSmileys($arr3) ?> su 1)</h4>

  </div>

</body>
</html>