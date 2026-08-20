 
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
 