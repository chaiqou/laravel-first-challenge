
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css"/>
    <title>Hello <?php echo $name; ?></title>
</head>
<body>
    <div class="container">
      <img class="robot-photo" src="/robot.png" />
      <div class="hello-text">< <p class='first-word'>Hello, </p> <p class="second-word"><?php echo $name; ?>!</p> /></div>
    </div>
    
</body>
</html>

<!-- <div class="robot-photo1" /> -->