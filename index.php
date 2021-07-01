<?php include __DIR__ . '/./data/infoDischi.php' ;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        
        <header>
            <?php include 'partials/template/header.php' ?>
        </header>

        <main>
            <div class="containerMain">
                <div class="card-cont">
                
                    <?php foreach ($albums as $album) { ?>
                        <div class="card">
                            <img class="cover" src='<?= $album["poster"];?>' alt="albums error"> 
                            <div class="infoAlbum">
                                <h2>Title: <strong><?= $album["title"]?> </strong></h2>
                                <h3>Author: <strong><?= $album["author"]?> </strong></h3>
                                <h4>Genere: <strong><?= $album["genre"]?> </strong></h4>
                                <h5>Year: <strong><?= $album["year"]?></strong></h5>

                            </div>
                        </div>



                    <?php } ?>    

                </div>
            </div>

        </main>

        <footer>
            <?php include 'partials/template/footer.php' ?>
        </footer>
        


    </body>
</html>