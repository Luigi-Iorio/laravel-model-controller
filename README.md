# Laravel Model Controller

### Descrizione

Questo repository contiene un progetto Laravel, l'obiettivo principale di questo esercizio è interagire con il database utilizzando l'ORM di Laravel.

### Struttura Del Progetto

-   **Creazione del Database**: È stato utilizzato phpMyAdmin per creare un nuovo database chiamato `laravel_model_controller`.
-   **Importazione della Tabella**: È stata importata la tabella movies nel database.
-   **Configurazione delle Credenziali**: Sono state inserite le credenziali per il database nel file .env.
-   **Creazione del Modello**: Con il comando `php artisan make:model Movie` è stato creato il modello Movie.
-   **Creazione del Controller**: Con il comando `php artisan make:controller Guest/PageController` è stato creato un controller chiamato `PageController` che ha il compito di gestire la rotta.
-   **Recupero e Visualizzazione dei Film**: All'interno della funzione `index()` del controller vengono recuperati tutti i film dal database e passati alla view. I film vengono rappresentati attraverso delle card con l'utilizzo di Bootstrap.
