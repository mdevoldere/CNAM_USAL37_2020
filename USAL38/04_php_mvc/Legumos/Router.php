<?php 

/**
 * Le routeur met en lien l'url et les composants de l'application
 * l'url contient 3 paramètres attendus
 * controller   -> contrôleur à exécuter (les contrôleurs sont dans le répertoire Controllers)
 * action       -> méthode à invioquer dans le contrôleur (les actions sont des fonctions dans le contrôleur)
 * id           -> 
 */
class Router 
{
    /** @var $controller Le contrôleur à exécuter */
    private $controller;

    /** @var string $action l'action à invoquer dans le contrôleur */
    private $action;

    /** @var string $id Le contrôleur à exécuter */
    private $id;


    /**
     * Constructeur du routeur
     */
    public function __construct()
    {
        $controller = $_GET['controller'] ?? 'vegetables';
        $controller = $this->secure($controller);

        $this->action = $this->secure($_GET['action'] ?? 'index');

        $this->id = $this->secure($_GET['id'] ?? '');

        // convertit la casse de la chaine
        $controller = mb_convert_case($controller, MB_CASE_TITLE).'Controller'; // LegumesController

        $path = __DIR__ . '/Controllers/' . $controller . '.php';
        
        if(is_file($path)) {
            require $path;
            $this->controller = new $controller;
            $this->controller->run($this);
        }
        else {
           echo 'Erreur 404';
        }
    }

    /**
     * Sécurise une chaine de caractère
     * supprime les balises HTML (strip_tags)
     * supprimer toute notion de chamin (basename)
     * @param string $data La chaine de caractère à nettoyer
     * @return string La donnée nettoyée
     */
    public function secure(string $data)
    {
        $data = strip_tags($data); // supprimer les balises HTML
        $data = basename($data, '.php'); // supprime toute notion de chemin
        return $data;
    }

    /**
     * @return string l'action à invoquer dans le contrôleur
     */
    public function getAction()
    {
        return $this->action;
    }
}