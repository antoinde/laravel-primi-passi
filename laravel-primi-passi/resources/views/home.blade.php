@php

    $database=[
        [
            'nome' => 'Ronaldo',
            'cognome' => 'Cristiano'
        ],
        [
            'nome' => 'Antonio',
            'cognome' => 'Cassano'
        ],
        [
            'nome' => 'Federico',
            'cognome' => 'Chiesa'
        ],
        [
            'nome' => 'Lionel',
            'cognome' => 'Messi'
        ],
        

        ];
@endphp


<h1> hello world </h1>

@php

    foreach($database as $utente)
    echo "<div>" . $utente['nome'] . ' ' . $utente['cognome'] . "</div>";

@endphp
