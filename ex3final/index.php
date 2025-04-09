<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styleindex.css">
        <title>! Pokemon Game!</title>
    </head>

    <body>
       
        <div class="alert alert-info" role="alert">
            Les Combatteurs:
        </div>

        <?php
        include_once 'pokemon.php'; 
        require_once("PokemonFeu.php");
        require_once("PokemonEau.php");
        require_once("PokemonPlante.php");

        $ap1=new AttackPokemon(10,100,2,20);
        $ap2=new AttackPokemon(30,80,4,20);

        $P1=new PokemonFeu("Dracaufeu Gigamax","https://www.pokepedia.fr/images/8/8b/Dracaufeu_%28Gigamax%29-EB.png?20191016133231",200,$ap1);
        $P2=new PokemonEau("Ampibidou gigamax","https://th.bing.com/th/id/OIP.F8-Ppq_CFgWoXLG5hpV-bgAAAA?rs=1&pid=ImgDetMain",200,$ap2);
        $roundNb=1;

        while(!$P1->isDead() && !$P2->isDead()){
            echo'
                <div class="PokemonsContainer">'.
                    $P1->whoAmI().
                    $P2->whoAmI().
                '</div>
            ';
            $P1_atk=$P1->attack($P2);
            $P2_atk=$P2->attack($P1);
            echo'
                <div class="alert alert-danger" role="alert">
                    Round'.$roundNb.':<br>
                    <div class="alert alert-light PointsContainer" role="alert">
                        <p class="points">'.$P1_atk.'</p>
                        <p class="points">'.$P2_atk.'</p>
                    </div>
                </div>
            ';
            $roundNb++;
        }
        
        if(!$P1->isDead() || !$P2->isDead()){
            echo'
                <div class="PokemonsContainer">'.
                    $P1->whoAmI().
                    $P2->whoAmI().
                '</div>
            ';
            $urlWinner=($P1->getHp()>=$P2->getHp())?$P1->getUrl():$P2->getUrl();
            echo'
            <div class="alert alert-success" role="alert">
                <div class="imgettexte">
                    <p class="texte">Le vainqueur est: </p>
                    <img src="'.$urlWinner.'" alt="Pokemon" class="rounded float-end" width="200" height="200">
                </div>
            </div>
            ';
            $roundNb=1;
        }
        ?>
    </body>
</html>