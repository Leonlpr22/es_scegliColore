<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      
      $iniziale = 'g';
      
      function scegliColore($iniziale) {
        switch ($iniziale) {
          case 'r':
            return 'red';
            break;
          case 'g':
            return 'green';
            break;
          case 'b':
            return 'blue';
            break;
          default:
            return 'black';
        }
      }
      
      echo "<p style='color: " . scegliColore($iniziale) . "'>Questo paragrafo ha la proprietà color con valore " . scegliColore($iniziale) . "</p>";
        
    ?>
</body>
</html>