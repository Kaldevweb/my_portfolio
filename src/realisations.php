<?php
include("connexion.php");
$query_article = $bdd -> query("SELECT * FROM realisation_portfolio ORDER BY ordre") or die($bdd->error);

while($val = $query_article -> fetch_array())
{
    echo "
        <div class='realisationBlock'>
            <svg class='svgDraw_realisation svgImg_realisation' version='1.1' id='Calque_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='360px' height='320px' viewBox='0 0 360 320' enable-background='new 0 0 360 320' xml:space='preserve'>
                <image class='svgImg_realisation' overflow='visible' width='360' height='320' xlink:href='img/$val[imagePetite]' ></image>
            </svg>
            <div class='mask'>
                <h2>$val[titre]</h2>
                <div class='categorieMask'>
                    <h3>$val[projet]</h3>
                    <p>-</p>
                    <p>$val[genre]</p>
                </div>
                <a href='#targetProjet'><button id='btnProjet' class='infoMask' type='button' value='$val[id]'>En savoir plus</button></a>
            </div>
        </div>
    ";
}
?>