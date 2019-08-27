<?php
$a = 'The game is set in "The City", a dark fantasy world inspired by 
Victorian, Gothic, and steampunk aesthetics. Players control Garrett, a 
master thief who embarks on several missions focusing on stealing from the 
rich. Players may approach levels in a variety of different ways; players 
can choose the action oriented and lethal approach, where players will 
disable or kill enemies on their way to their destination, using knives and 
takedowns, or opt for the non-lethal stealthy approach, where players 
minimize interaction with NPCs and the environment in order to avoid 
detection. Players also may choose which path to take to their destination, 
as each location contains several branching paths.';

$length = 6;

$parts = explode(' ',$a);

for ($i = 0; $i == $length; $i++){
    echo str_replace($parts, '*', $a);
}