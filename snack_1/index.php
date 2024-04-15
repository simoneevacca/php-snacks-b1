<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php

$matches = [
     [
        'team1' => 'Olimpia',
        'team2' => 'Milano',
        'pointTeam1' => 55,
        'pointTeam2' => 60         
     ],
     [
        'team1' => 'Roma',
        'team2' => 'Napoli',
        'pointTeam1' => 20,
        'pointTeam2' => 43         
    ] ,
    [
        'team1' => 'Torino',
        'team2' => 'Livorno',
        'pointTeam1' => 14,
        'pointTeam2' => 80         
    ]  
    ];
    

foreach ($matches as $match) {
    var_dump($match['team1'] . ' ' . '-' . ' ' . $match['team2'] . ' ' . '|' . ' ' . $match['pointTeam1'] . ' ' . $match['pointTeam2']);
};


    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>