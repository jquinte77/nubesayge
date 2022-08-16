<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {   
        if(!$this->session->get('intentos') || !$this->session->get('status-sesion')) {
            $this->session->set('intentos',1);
            $this->session->set('status-sesion',0);
            $data = [
                'intentos' => $this->session->get('intentos'),
            ];
        }

        return $this->session->get('status-sesion') ? view('home') : view('login', $data);
    }

    public function iniciar_sesion()
    {
        $user = $this->request->getPost('user');
        $password = $this->request->getPost('password');

        $login = $this->userModel
                ->asObject()
                ->where('vusuario',$user)
                ->where('vpass',$password)
                ->first();

        if ($login) {
            $initSession = [
                'usuario'=> $login->vusuario,
                'name'=> $login->vnombre,
                'cargo'=> $login->vcargo,
                'pass'=> $login->vpass,
                'status-sesion'=> $login->bactivo
            ];
            $this->session->set($initSession);
            $this->session->remove('intentos');
            return redirect('home','refresh');
        } else {    
            $this->session->set('intentos', 
                intval($this->session->get('intentos')) + 1
            );
            $data = [
                'intentos' => $this->session->get('intentos'),
                'session' => $this->session->get('status-sesion')
            ];
            return view('login' ,$data);
        }
        die;
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect('/','refresh');
    }
    
    public function allUser()
    {
       $users = $this->userModel->findAll();
       return json_encode($users);
    }
}
