<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Entities\User;

class UsersController extends BaseController
{
    public function index()
    {
        $userModel = model(UserModel::class);
        $data['users'] = $userModel->withIdentities()->findAll();

        return view('users/index', [
            'title' => 'Lista de Usuarios',
            'list'  => $data  // Aquí 'list' contiene el array con la llave 'users'
        ]);
    }

    public function create()
    {
        $data['groups'] = config('AuthGroups')->groups;
        return view('users/create', $data);
    }

    public function store()
    {
        $users = model(UserModel::class);

        // Entidad de Shield
        $user = new User([
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        $users->save($user);

        // Obtener el ID insertado y asignar grupo
        $user = $users->findById($users->getInsertID());
        $user->addGroup($this->request->getPost('group'));

        return redirect()->to('/users')->with('message', 'Usuario creado');
    }
}
