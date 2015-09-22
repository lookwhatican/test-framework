<?php

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render('pages/about.php');
    }


    public function portfolioAction()
    {
        return $this->render('pages/portfolio.php');
    }


    public function contactsAction()
    {
        return $this->render('pages/contacts.php');
    }
}