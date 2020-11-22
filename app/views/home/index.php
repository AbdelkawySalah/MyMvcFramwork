<html>
    <head>
        <!-- <title>aaa</title> -->
        <title><?= $title; ?></title>

    </head>

    <body>
       <h1><?= $h1; ?></h1>
        
       <ul>
         <?php foreach($data as $d): ?>
            <li><?= $d['sname']; ?></li>
         <?php endforeach;  ?>
       </ul>

    </body>
</html>