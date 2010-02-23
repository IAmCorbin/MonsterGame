<?php header("Content-type: text/css"); 

$curved = '25px';

?>

* { margin: 0; padding: 0; }

body { background: url('back.jpg') repeat; font-family: monospace; font-size: 35px;}

#main { position: absolute; top: 20px; left: 20%; width: 60%; height: 85%; padding: 20px; border: solid #312823 10px; background: #777; text-align: center;}
#monsterGame { position: relative; width: 1000px; height: 500px; overflow: hidden; border: solid black 1px;}
#monsterChubs { position: absolute; bottom: 0; left: 30px; }
#monsterFootball { position: absolute; bottom: 0; left: 100px; }


.button { background: #AAA; border: outset #666 4px; margin: 8px;}
.button:hover { background: #888; border: inset; cursor: pointer;}

.curved { -moz-border-radius:<?echo $curved?>; /* Firefox */ -webkit-border-radius:<?echo $curved?>; /* Safari and chrome */ -khtml-border-radius:<?echo $curved?>; /* Linux browsers */ border-radius:<?echo $curved?>; / *CSS3 */ }
