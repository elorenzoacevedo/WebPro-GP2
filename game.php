<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./game.css">
        <title>Deal | No Deal</title>
    </head>
    <body>
        
        <header>
            <h1>Deal | No Deal</h1>
        </header>
        
        <div id="right_tab">
            
        </div>

        <main>
            <?php 
            $i = 0;
            for($i = 1; $i <= 24; $i++):
            ?>
            <div class="option"><p><?=$i?></p></div>
            <?php endfor; ?>
        </main>

        

    </body>
</html>