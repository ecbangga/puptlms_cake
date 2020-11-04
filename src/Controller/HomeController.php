<?php

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('main');
    }
    public function borrowersearch()
    {
        $key = $this->request->getQuery('key');
        if($key)
        {
            $query = $this->Materials->find('all')
                          ->where(['Or'=>['subj like'=>'%'.$key.'%','accnum like'=>'%'.$key.'%',
                          'title like'=>'%'.$key.'%','callno like'=>'%'.$key.'%']]);
        }
        else
        {
            $query = $this->Materials;
        }
        $materials = $this->paginate($query);

        $this->set(compact('materials'));
    }
}