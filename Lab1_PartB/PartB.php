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
</body>
</html>