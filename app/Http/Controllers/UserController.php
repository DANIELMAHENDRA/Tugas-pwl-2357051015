<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
public function create(){
    $kelasModel = new Kelas();
    $kelas = $kelasModel->getKelas();
    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];
    return view('create_user', $data);
}

public function store(Request $request)
{
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'nim' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user');
}
public function index()
{
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),

    ];
    return view('list_user', $data);
}

public function edit($id)
{
    $user = UserModel::findOrFail($id);
    $kelas = Kelas::all();
    
    return view('edit_user', [
        'title' => 'Edit Data Mahasiswa',
        'user' => $user,
        'kelas' => $kelas,
    ]);
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:20',
        'kelas_id' => 'required',
    ]);

    $user = UserModel::findOrFail($id);
    $user->update($request->all());

    return redirect()->route('user.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
}


public function destroy($id)
{
    $user = UserModel::findOrFail($id);
    $user->delete();

    return redirect()->to('/user')->with('success', 'Data berhasil dihapus!');
}

   
}