<?php
    /**
    * Доступные страницы на сайте
    *
    * @var array $availableLinks
    */

    class BadRequest extends Exception{}
    class NotFound extends Exception{}            

    $availableLinks = include './availableLinks.php';
    require './Router.php';



    function route($availableLinks) {

        if (!isset($_GET['page'])) {
            throw new BadRequest('Запрос не может быть выполнен. Не указана запрашиваемая страница!');
        }         

        $tryToRoute = new Router($availableLinks);        
        $routeResult = $tryToRoute->isAvailablePage($_GET['page']);

        if (!$routeResult)  {
            throw new NotFound('Запрашиваемая страница ' . $_GET['page'] . ' не найдена!');     
        }
        
        return '<h1>' . $_GET['page'] . '</h1><br><p>Вы находитесь на странице <strong>' . $_GET['page'] . '</strong></p>';
  
    }

    try {
        echo route($availableLinks);
    }
    catch (BadRequest $e) {
        echo $e->getMessage() . '<br/>';
        header('HTTP/1.1 400 Bad Request');
        header('Refresh: 5; url=error.php');
    }
    catch (NotFound $e) {
        echo $e->getMessage() . '<br/>';
        header('HTTP/1.1 404 Not Found');
        header('Refresh: 5; url=404.php');        
    }      

?>