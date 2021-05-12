# PHP_M11

# Descripció

    En aquesta pràctica aprendràs a crear peticions HTTP amb un CRUD (Create, Read, Update, Delete) al complet sobre una base de dades SQL. Per això implementarem un patró l'arquitectura MVC amb repositoris.

# Exercicis

- Nivell 1
    - Exercici 1
        Crear una aplicació, per la gestió d'empleats, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 

        Definir les rutes principals que tindrà el nostre lloc web. El domini ha de tindre el CRUD al complet (Create, Read, Update, Delete), utilitzant els verbs HTTP associats.

    - Exercici 2
        Crea les vistes php y associa-la a cadascuna de las rutes .

        Defineix els Models de dades, middleware i controllers que consideres necessaris. Recorda que la interacció amb la base de dades es realitzarà per mitjà del ORM Eloquent i per tant els objectes seran persistits únicament en memòria.

    - Exercici 3
        Crear els formularis necessaris per poder realitzar el CRUD sobre el sistema de gestió d'empleats. Heu de validar que la informació introduïda a l'usuari sigui correcta.

- Nivell 2
    - Exercici 4
        Crea una petició HTTP especial que busqui empleats per feina.

    - Exercici 5
        Defineix la vista home de benvinguda a l’aplicació e introdueix una navbar.
        Crea un sistema que gestiona l'error 404 a nivell de projecte. Podeu utilitzar la funció Resposta i la redirecció de Laravel.

- Nivell 3
    - Exercici 6
        Afegeix la vista de login, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació.

    - Exercici 7
        Agafeu les dades d'inici de sessió al sistema de galetes de Laravel. En cadascuna de les vistes has d'incrustar al navbar el nom d'usuari registrat.

# Recursos
    Manejo de errores
    https://laravel.com/docs/8.x/errors#rendering-exceptions