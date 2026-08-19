<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
 
<table class="resultat-box">
    
    <tr style="background-color: rgb(8, 175, 175);">
        <th>Antal rätt</th>
       
    </tr>
17–20 rätt: Mycket bra – du har bra koll på C/C++. <br>
13–16 rätt:  Bra nivå – några områden behöver repeteras. <br>
9–12 rätt:  Okej grund – träna särskilt på pekare, minne och OOP. <br>
0–8 rätt:  Börja med grunderna och bygg upp kunskapen stegvis. <br>
    <tr>
        <td>
 
        
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Ogiltig förfrågan.");
}
$poäng =0;
$max_poäng=1;
$rätta_svar=[  
    "fraga1" => "blå",
    "fraga2" => "grön"
];
for ($i = 1; $i <= count($rätta_svar); $i++) {

    $fråga = "fraga" . $i;

    if (isset($_POST[$fråga]) && $_POST[$fråga] === $rätta_svar[$fråga]) {
        $poäng++;
    }
}

echo $poäng . " av " . $max_poäng . " rätt";
?>
</td>
     
    </tr>
</table>


 


    
</body>
</html>