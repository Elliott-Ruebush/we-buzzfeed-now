<?php

$answersArr = array($_POST['Q1'], $_POST['Q2'], $_POST['Q3'], $_POST['Q4'], $_POST['Q5'], $_POST['Q6']);
$aCount = 0;
$bCount = 0;
$cCount = 0;
$dCount = 0;
$countsArr = array("amountA" => $aCount, "amountB"  => $bCount, "amountC" => $cCount, "amountD" => $dCount);
foreach ($answersArr as $value) {
    switch ($value) {
        case 'A':
            $countsArr["amountA"]++;
            break;
        case 'B':
            $countsArr["amountB"]++;
            break;
        case 'C':
            $countsArr["amountC"]++;
            break;
        case 'D':
            $countsArr["amountD"]++;
            break;
        default:
            //VERY Helpful debug :)
            echo("<p>WHAT THE FLIP HAPPENED?!</p>");
            break;
    }
}
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
uasort($countsArr, 'cmp');
$finalThingy = '';
$keysOfCount = array_keys($countsArr);
$mostCommonAnswer = $keysOfCount[3];

//Yes, I know, this doesn't account for the fact that you could potentially have the same amount of an answer letter
switch ($mostCommonAnswer) {
    case 'amountA':
        $finalThingy = 'weird af human pretending to be a dog (wtf bro, that\'s not alright)';
        break;
    case 'amountB':
        $finalThingy = 'FISH';
        break;
    case 'amountC':
        $finalThingy = 'rock (boring)';
        break;
    case 'amountD':
        $finalThingy = 'EXTREMELY aggressive computer';
        break;
    default:
        //VERY Helpful debug :)
        echo("<p>DID YOU BREAK IT??!?!?</p>");
        break;
}

echo ('<h1>You finished the quiz, and you\'re not a dog, you\'re a '  . $finalThingy . '! You impostor!</h1><br><a href="./index.html"><button>Return to the main quiz</button></a>');
?>