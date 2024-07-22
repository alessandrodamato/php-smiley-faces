**Descrizione**  
Dato un array (arr) come argomento, completa la funzione countSmileys che dovrebbe restituire il numero totale di faccine sorridenti.

Regole per una faccina sorridente:

Ogni faccina deve contenere un paio di occhi valido. Gli occhi possono essere contrassegnati come : o ;  
Una faccina può avere un naso ma non è obbligatorio. I caratteri validi per un naso sono - o ~  
Ogni faccina sorridente deve avere una bocca sorridente che deve essere contrassegnata con ) o D  
Non sono ammessi caratteri aggiuntivi tranne quelli menzionati.  

Esempi di faccine sorridenti valide: :)  
;-D :~)  
Esempi di faccine non valide: ;( :> :} :]  

Esempio  
countSmileys([':)', ';(', ';}', ':-D']); // dovrebbe restituire 2;  
countSmileys([';D', ':-(', ':-)', ';~)']); // dovrebbe restituire 3;  
countSmileys([';]', ':[', ';*', ':$', ';-D']); // dovrebbe restituire 1;  

Nota  
Nel caso di un array vuoto restituire 0. Non verrà testato con input non validi (l'input sarà sempre un array). L'ordine degli elementi della faccina (occhi, naso, bocca) sarà sempre lo stesso.
