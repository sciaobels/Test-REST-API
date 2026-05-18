<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type");

    $method = $_SERVER['REQUEST_METHOD'];
    $request = $_SERVER['REQUEST_URI'];

    $scuse = [
        [
            "Il cane ha mangiato i compiti.",
            "Li avevo fatti, ma il vento ha aperto la finestra e sono volati nel traffico.",
            "Ho usato l'inchiostro simpatico e mi sono dimenticato come renderlo visibile.",
            "Mia nonna li ha usati per accendere il barbecue.",
            "Il gatto si è seduto sulla tastiera e ha cancellato tutto.",
            "Avevo quasi finito, poi è andata via la luce.",
            "Li ho prestati a un amico... che oggi è assente.",
            "Ho confuso il quaderno di matematica con quello da disegno e li ho colorati tutti.",
            "Ero pronto a portarli, ma ho preso lo zaino sbagliato. Quello di mio cugino di 8 anni.",
            "La stampante ha deciso di scioperare per i diritti delle macchine.",
            "Li ho salvati sul computer, ma il computer ha deciso di aggiornarsi per 14 ore.",
            "Pensavo che oggi fosse domenica.",
            "Ho fatto i compiti mentalmente.",
            "Il mio pesce rosso ha rovesciato l'acqua sul quaderno.",
            "Li avevo finiti, poi ho scoperto che erano per la materia sbagliata.",
            "Un piccione ha centrato il foglio dal balcone.",
            "Avevo iniziato, ma la penna ha smesso di funzionare e ho preso quello come un segno del destino.",
            "Ho lasciato il quaderno sul tetto della macchina. Ora probabilmente è in un'altra regione.",
            "Uno zingaro mi ha rubato lo zaino"
        ],
        [
            "La mia sveglia ha deciso di aggiornarsi durante la notte.",
            "Sono rimasto chiuso fuori casa.",
            "La macchina non partiva, credo abbia bisogno di supporto emotivo.",
            "Ho preso il bus sbagliato e ora non so piu dove sono.",
            "Il gatto dormiva sulle chiavi e non ho avuto il coraggio di svegliarlo.",
            "C'e stato un incidente con il caffè e i pantaloni puliti rimasti erano discutibili.",
            "Pensavo fosse sabato fino a 10 minuti fa.",
            "Il navigatore mi ha mandato in un'altra città.",
            "Ho dimenticato il portafoglio nel frigorifero e sono tornato a prenderlo.",
            "Il mio vicino ha parcheggiato talmente vicino alla mia auto che non posso uscire.",
            "Sono uscito in orario, ma poi ho visto il letto e abbiamo avuto un momento.",
            "La moka è esplosa e ho dovuto gestire la scena del crimine.",
            "Mi si è bloccata la porta del bagno.",
            "Ho calpestato qualcosa di sospetto appena uscito di casa e ho dovuto cambiarmi.",
            "Il cane ha nascosto una scarpa e stiamo ancora negoziando.",
            "Ho avuto una crisi esistenziale davanti all'armadio.",
            "Stamattina il traffico sembrava il finale di un film apocalittico.",
            "Ho versato il latte sul laptop e lui non l'ha presa bene.",
            "Mi sono addormentato sul divano 'solo cinque minuti'.",
            "La mia pianta ha bisogno di supporto morale urgente."
        ],
        [
            "Ho appena indossato il pigiama e non posso tradire questo impegno.",
            "Il divano mi ha avvolto e non riesco a liberarmi.",
            "Sta per arrivare un pacco importantissimo... da una settimana.",
            "Ho gia socializzato abbastanza oggi parlando con il frigorifero.",
            "Fuori c'e un vento sospetto che giudica le mie scelte di vita.",
            "Il mio telefono ha il 3% e devo stare con lui nei suoi ultimi momenti.",
            "Ho promesso al mio letto che sarei rimasto fedele almeno per oggi.",
            "Ho iniziato una serie TV e non posso abbandonare i personaggi nel momento difficile.",
            "Sto aspettando che la mia motivazione torni a casa da sola.",
            "Mi sono gia preparato mentalmente per uscire... e per oggi basta cosi.",
            "Il meteo mi ha guardato male e ho deciso di non rischiare.",
            "Ho perso le chiavi e ora vivo qui per sicurezza.",
            "Ho gia fatto il massimo sforzo sociale rispondendo a un messaggio.",
            "La mia batteria sociale è al 1% e non trova il caricatore.",
            "Il letto oggi ha un'attrazione gravitazionale troppo forte.",
            "Ho paura che fuori ci sia troppa realta tutta insieme.",
            "Sto lavorando su un progetto importante: non muovermi dal letto.",
            "Ho appena ricordato tutte le cose imbarazzanti fatte negli ultimi 10 anni e devo riprendermi.",
            "Il mio cane ha bisogno di supporto emotivo e non posso lasciarlo solo.",
            "Ho gia messo il cervello in modalita aereo."
        ]
    ];


    switch ($method) {

        case 'GET':

            if ($request == '/src/API/index.php/scuola') { //a causa di uniserver non basta la richiesta con /scuola

                $idScusa = array_rand($scuse[0]);
                $out = $scuse[0][$idScusa];
                http_response_code(200);
                echo json_encode($out);
            }

            if ($request == '/src/API/index.php/lavoro') {

                $idScusa = array_rand($scuse[1]);
                $out = $scuse[1][$idScusa];
                http_response_code(200);
                echo json_encode($out);
            }

            if ($request == '/src/API/index.php/uscire') {

                $idScusa = array_rand($scuse[2]);
                $out = $scuse[2][$idScusa];
                http_response_code(200);
                echo json_encode($out);
            }
            
            break;

        default:
            http_response_code(405);

            echo json_encode([
                "error" => "Method not allowed"
            ]);
    }
?>