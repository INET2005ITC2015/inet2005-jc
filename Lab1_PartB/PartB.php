<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <h1><?php echo 'Greetings From Lab 1'; ?></h1>
 <h3><?php echo "Hows It Going" ; ?></h3>
 <p>I Hope I'm Doing This Right!</p>
 <?php $yourName = 'Justin Cooke';
echo "Hey $yourName"; ?>
 <p><?php $place = "Montreal"; $team =  "Canadiens"; $favoriteTeam = $place ." ". $team; echo $favoriteTeam; ?></p>
 <p><?php echo (32 * 14) + 83; ?></p>
 <p><?php echo (1024 / 128) -7; ?></p>
 <p><?php echo (32 * 12) + 83; ?></p>
 <p><?php echo (796 % 6); ?></p>
 <p>
     <?php
        for ($x = 10;$x >0; $x--){
            echo $x."...";
        }
    echo "Blast Off"; ?>
 </p>
 <p>
     <?php
        $colors = array ("Blue", "Red", "White", "Purple", "Cyan", "Green", "Magenta");
        for ($x = 0; $x <= 7; $x++){
            echo $colors[$x]. " ";
        }
    ?>
 </p>
 <p>
     <?php
     $colors = array ("Blue", "Red", "White", "Purple", "Cyan", "Green", "Magenta");
     foreach ($colors as $value){
         echo $value. " ";
     }
     ?>
 </p>
 <p>
     <?php
     $colors = array ("Blue", "Red", "White", "Purple", "Cyan", "Green", "Magenta");
     echo $colors[0] . " " . $colors[1] . " " . $colors[2] . " " . $colors[3] . " " . $colors[4] . " " . $colors[5] . " " . $colors[6] . " " . $colors[7];
     ?>
 </p>
</body>
</html>