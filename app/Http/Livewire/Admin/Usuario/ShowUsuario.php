<?php

namespace App\Http\Livewire\Admin\Usuario;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class ShowUsuario extends Component
{
    use WithPagination;
    public $sort = 'id', $search, $direction = 'desc', $cant = '5';
    public $nombre, $apellido, $email, $rol, $dni, $direccion, $roles, $rolid, $userid, $email2;
    public $vermodalcrear = false, $vermodaleditar = false;

    public function activarmodalcrear()
    {
        $this->reset('nombre', 'apellido', 'email', 'rol', 'dni', 'direccion', 'vermodalcrear');
        $this->rolid = "";
        $this->vermodalcrear = true;
    }
    public function edit($id)
    {
        $usuario = User::find($id);
        $this->userid = $id;
        $this->nombre = $usuario->name;
        $this->apellido = $usuario->apellido;
        $this->email = $usuario->email;
        $this->email2 = $usuario->email;
        $this->dni = $usuario->dni;
        $this->direccion = $usuario->direccion;
        $this->rolid = $usuario->getRoleNames()->first(); //Devuelve le nombre del rol
        $this->vermodaleditar = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function update()
    {
        if ($this->email != $this->email2) {
            $this->validate(
                [
                    'email' => 'required|email|unique:users',
                ],
                [
                    'email.required' => 'El Email de cliente es obligatorio',
                    'email.email' => 'El Email del usuario debe ser un email valido',
                    'email.unique' => 'El Email de cliente ya está en uso',
                ]
            );
        }
        $this->validate([
            'nombre' => 'required|min:3|max:255',
            'apellido' => 'required|min:3|max:255',
            'email' => 'required|email',
            'dni' => 'required|min:8|max:8',
            'direccion' => 'required|min:3|max:255',
            'rolid' => 'required|min:3',
        ]);
        $usuario = User::find($this->userid);
        $usuario->name = $this->nombre;
        $usuario->apellido = $this->apellido;
        $usuario->email = $this->email;
        $usuario->dni = $this->dni;
        $usuario->direccion = $this->direccion;
        $usuario->syncRoles($this->rolid);
        $usuario->save();
        $this->vermodaleditar = false;
        $this->emit('alert', 'El Usuario se actualizó satisfactoriamente');
    }
    public function save()
    {
        $this->validate([
            'nombre' => 'required|min:3|max:255',
            'apellido' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'dni' => 'required|min:8|max:8',
            'direccion' => 'required|min:3|max:255',
            'rolid' => 'required|min:3',
        ]);
        $user = new User();
        $user->name = $this->nombre;
        $user->apellido = $this->apellido;
        $user->email = $this->email;
        $user->dni = $this->dni;
        $user->direccion = $this->direccion;
        $user->password = bcrypt($this->dni);
        $user->save();
        $user->assignRole($this->rolid);
        $this->vermodalcrear = false;
        $this->emit('alert', 'El Usuario se registro satisfactoriamente');
    }
    public function delete(User $user)
    {
        $user->delete();
    }
    public function order($sort)
    {
        if ($sort == $this->sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
        }
    }
    public function render()
    {
        $this->roles = Role::all();
        $usuarios = User::where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orwhere('email', 'like', '%' . $this->search . '%')
                    ->orwhere('direccion', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);
        return view('livewire.admin.usuario.show-usuario')->with(compact('usuarios'));
    }
}
