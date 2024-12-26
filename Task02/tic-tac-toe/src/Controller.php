<?php

namespace webuser\TicTacToe\Controller;

use webuser\TicTacToe\View\View;
use function cli\line;

class Controller
{
    public function startGame()
    {
        line("Start the game!");

        $view = new View();
        $view->showGame();        
    }

}