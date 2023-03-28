<?php
    include("common.php");
    session_start();
    //Declare available prizes
    $prizes = [10000000, 25000, 7500000, 10000, 5000000, 5000, 4000000, 2000, 3000000, 1000, 2000000,
                100, 1000000, 50, 500000, 10, 250000, 5, 100000, 2, 75000, 1, 50000, 0.1];

    $initialSelection;

    //Initialize session variables
    if(!isset($_SESSION['chosen'])){
        $_SESSION['chosen'] = [];
        $_SESSION['count'] = 0;
        $_SESSION['discarded'] = [];
        $_SESSION['disCount'] = 0;
        $_SESSION['round'] = 0;
        $_SESSION['values'] = generateRandomValues();
    }
    //Update session variables
    elseif(isset($_POST['options'])) {
        $_SESSION['round']++;
        $priceval = explode(",", $_POST['options']);
        $_SESSION['chosen'][$_SESSION['count']] = $priceval[0];
        $_SESSION['count']++;
        $initialSelection = $_SESSION['chosen'][0];
        $_SESSION['discarded'][$_SESSION['disCount']] = $priceval[1];
        $_SESSION['disCount']++;
    }
    
    $values = $_SESSION['values'];
    $chosen = $_SESSION['chosen'];
    $discarded = $_SESSION['discarded'];
    $round = $_SESSION['round'];
?>

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
        
        <!--Prizes tab-->
        <div id="right_tab">
            <?php 
                $i = 0;
                for($i = 0; $i < 24; $i++):
                    $prize = "prize";
                    if(!empty($discarded)){
                        if($prizes[$i] != $discarded[0] && in_array($prizes[$i], $discarded)){
                            $prize = "discarded";
                        }
                    }
            ?>

            <div class=<?=$prize?>>$<?=$prizes[$i]?></div>

            <?php endfor; ?>
        </div>
        
        <!--Main area content-->
        <main>
            <form action="./game.php" method="post">
            <?php 
                $i = 0;
                for($i = 1; $i <= 24; $i++):
                    //Normal display if not chosen
                    if(!in_array($i, $chosen)){
            ?>

            <div class="option">
                <input type="radio" name="options" value="<?=$i?>,<?=$prizes[$values[($i-1)]]?>" id="<?=$i?>"><p><?=$i?></p>
            </div>

            <?php } 
                //If initial selection, mark gold
                elseif($initialSelection == $i){ 
            ?>
            
                <div id="initial_selection"><p><?=$i?></div>

            <?php } 
                //If chosen and not initial selection, mark as discarded
                else { 
            ?>

                <div class="selected"><p>$<?=$prizes[$values[($i-1)]]?></p></div>

            <?php } endfor;?>
            <button id="submit_btn">SELECT<input type="submit" value=""></button>
            </form>
        </main>
        
        <!--End of Game-->
        <?php 
            if($round == 24):
                session_destroy();
        ?>
            <div id="congrats">
                <h2>Congratulations!</h2>
                <p>You won <strong>$<?=$discarded[0]?></strong></p>
                <a href="./game.php"><button>Play Again</button></a>
            </div>
        <?php endif; ?>
    </body>
</html>