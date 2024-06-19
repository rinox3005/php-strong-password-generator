# PHP Strong Password Generator

## Descrizione

Creare una pagina che permetta agli utenti di utilizzare un generatore di password (abbastanza) sicure.

## Milestone 1

Creare un form che invii in GET la lunghezza della password. Una funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.

Scriviamo tutto (logica e layout) in un unico file index.php

## Milestone 2

Verificato il corretto funzionamento del codice, spostare la logica in un file functions.php che verrá incluso poi nella pagina principale

## Milestone 3 (BONUS)

Invece di visualizzare la password nell'index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.

## Milestone 4 (BONUS)

Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.

Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).

Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
