<?php


class controllerManager
{

    /**
     * @return GenesisController
     */
    public static function GetGenesisController(): GenesisController
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }

    /**
     * @return BooksController
     */
    public static function GetBooksController(): BooksController
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function GetContactController(): ContactController
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }

    /**
     * @return HomeController
     */
    public static function GetHomeController(): HomeController
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }
}