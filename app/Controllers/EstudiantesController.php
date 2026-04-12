<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Estudiantes as MigrationsEstudiantes;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Estudiantes;

class EstudiantesController extends BaseController
{
    protected $estudianteModel; // Variable para guardar el modelo

    public function __construct()
    {
        // Se carga una sola vez para toda la clase
        $this->estudianteModel = new Estudiantes();
    }
    public function index()
    {
        return view('estudiantes/index', [
            'title' => 'Estudiantes',
            'active' => 'estudiantes',
            'list' => $this->estudianteModel->findAll()
        ]);
    }
    public function guardarAspirante()
    {
        $estudianteModel = new Estudiantes();

        $data = [
            'tipo_documento'   => $this->request->getPost('tipo_doc'),
            'numero_documento' => $this->request->getPost('documento'),
            'nombres'          => $this->request->getPost('nombres'),
            'apellidos'        => $this->request->getPost('apellidos'),
            'correo_electronico' => $this->request->getPost('email'),
            'programa_interes' => $this->request->getPost('programa'),
            // ... añadir los demás campos
        ];

        if ($estudianteModel->save($data)) {
            return redirect()->to('/admin/dashboard')->with('success', 'Aspirante registrado con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $estudianteModel->errors());
        }
    }
}
