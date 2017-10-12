<?php

function leeftijd($age)
{
       if($age < 16){
            echo "${age} jaar is te jong voor deze film.";
        }
        elseif($age == 17){
            echo "${age} is goed maar je hebt ouderlijk toezicht nodig.";
        }
        else {
            echo "Je bent al ${age}, geniet van de film!";
        }

};

leeftijd(17);