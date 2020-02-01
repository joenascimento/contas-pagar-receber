<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function index()
    {
        $this->loadModel('Users');
        $this->loadModel('Categories');
        $this->loadModel('Payments');
        $this->loadModel('Receivements');

        $users = $this->Users->find('all')->count();
        $categories = $this->Categories->find('all')->count();
        $payments = $this->Payments->find('all')->count();
        $receivements = $this->Receivements->find('all')->count();

        $this->set(compact('users', 'categories', 'payments', 'receivements'));
    }
}
