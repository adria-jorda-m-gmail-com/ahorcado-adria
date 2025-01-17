<!DOCTYPE html>
<html xml:lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Enunciat</title>
        </style>
    </head>
    <body>
        <h1>Enunciat Exàmen</h1>
        <ol>
            <li>Exercisi 1. (0,25p) Posa el namespace de totes les classes</li>
            <li>Exercisi 2. (2p)
                <ul>
                    <li>Completar la classe Ofegat que té les següents propietats:
                            <ul>
                                <li>String $paraula (se li pasa al constructor)</li>
                                <li>Array $lletres (al principi buit)</li>
                                <li>int $errades (al principi 0)</li>
                                <li>int $maxErrades (defecte 7)</li>
                            </ul>
                    </li>
                    <li>Els getters corresponents (ja estan definits)</li>
                    <li>Mètode __toString() -> Mostra la paraula amb les lletres descobertes i
                        amb _ per a les no descobertes (ja està implementat)</li>
                    <li><strong>Mètode novaLletra($lletra) </strong> (1p)
                            <ul>
                                <li>Si hi ha una errada en la lletra (és un número, hi ha més de 1 caràcter) llança una exempció.</li>
                                <li>Si la lletra ja estava en l'array de lletres o no està en la paraula incrementa les errades.</li>
                                <li>Si no estave en l'array de lletres, posa-la</li>
                            </ul>
                    </li>
                    <li><strong>Mètode fiJoc()</strong> (0,75p)
                        <ul>
                            <li>Mira si ha acabat</li>
                            <li>Ja siga perquè totes les lletres de la paraula estan triades (return 1)</li>
                            <li>S'ha superat el nombre d'errades (torna 0).</li>
                            <li>Si no ha acabat torna false</li>
                        </ul>
                        Utilitza un mètode privat totesDescobertes() que ja està implementat i que torna true
                        si totes les lletres ja han sigut descobertes o false si encara queden per descobrir.
                    </li>
                    <li><strong>Mètode Static setNivell($nivell)</strong>
                        que modifica $maxErrades de la següent forma: (0,25p)
                        <ul>
                            <li>nivell 0 => maxErrades 10</li>
                            <li>1 => 8</li>
                            <li>2 => 7</li>
                            <li>3 => 6</li>
                            <li>4 => 5</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Exercisi 3. Generador (0,5p)
                <ul>
                    <li>Completa la classe Generador amb les següents mètodes:</li>
                    <li>El mètode aleatori estrau una paraula aleatoriament de l'array de paraules</li> (0,5p)
                </ul>
            </li>
            <li>Exercisi 4. inici.php i logout.php (1,75p)
                <ul>
                    <li>Arreplegar el nick d'usuari</li> (0,25p)
                    <li>Inicialitzar les variables partides,guanyades i perdudes</li> (0,25p)
                    <li>Inicialitzar el generador (soles una vegada fins que es deslogueje l'usuari)</li> (0,25p)
                    <li>Inicialitzar l'objecte ahorcado amb un paraula</li> (0,25p)
                    <li>Possar el nivell adeqüat que pasa el formulari</li> (0,25p)
                    <li>Passa a la pàgina ofegat.php</li> (0,25p)
                    <li>logout: acaba el joc i torna a inici. Esborra totes les variables de sessió.</li> (0,25p)
                </ul>
            </li>

            <li>Exercisi 5. Ofegat.php (2,75p)
                <ul>
                    <li>Mostra la capçalera</li>
                    <li>Pinta l'estat actual de l'ahorcado</li> (0,25p)
                    <li>Mostra el Formulari on es possa la lletra</li>
                    <li>Crea la lògica que permet la dinàmica del joc</li> (1p)
                    <li>Crea la lògica que permet al joc acabar i mostrar el missatge oportú</li> (1p)
                    <li>Si es guanya es guarda en el fitxer de log el nom, paraula i errades</li> (0,5p)
                </ul>
            </li>
            <li>Exercisi 6. Continuat del joc i puntuació.php (1,75p)
                <ul>
                    <li>Quan un jugador acaba un joc, se li dona l'oportunitat de continuar indefinidament</li> (1p)
                    <li>Quan l'usuari torna a jugar es manté el nivell triat a la pàgina d'inici</li> (0,25p)
                    <li>Puntuacio.php : És una pàgina on es mostren les partides jugades, guanyades i perdudes </li> (0,5p)
                </ul>
            </li>
            <li>Exercisi 7. Scrapping (1p)
                <ul>
                    <li>Modifica la classe Generador per tal que si no se li passa el array de paraules,
                        l'omplirà de paraules que agafarà des de
                        https://rodamots.cat/tema/regionalismes/paraules-i-expressions-valencianes/<br/>
                        Només agafarà les que no tinguen espais
                    </li>
                </ul>
            </li>
        </ol>
    </body>
</html>
