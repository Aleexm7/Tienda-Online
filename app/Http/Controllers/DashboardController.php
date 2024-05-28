<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class DashboardController extends Controller
{

    public function index()
    {
        return view('layouts.dashboardadmin');
    }

    public function showUsers()
    {

        $users = User::all();


        return view('users.users', compact('users'));
    }

    public function createUser(Request $request)
    {


        $users = new User();


        return view('users.create', compact('users'));
    }

    public function editUser($id)
    {
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }



    public function updateUser(Request $request, $id)
    {


        $user = User::findOrFail($id);

        $user->update($request->all());


        return redirect('/dashboardadmin/user')->with('success', 'Usuario actualizado exitosamente.');
    }


    public function destroyUser(string $id)
    {
        // Encuentra el usuario por ID
        $user = User::findOrFail($id);

        // Elimina los registros relacionados en la tabla 'carts'
        Cart::where('user_id', $user->id)->delete();

        // Elimina el usuario
        $user->delete();

        return redirect('/dashboardadmin/user')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->user_role = $request->get('user_role');

        // Guardar el user en la base de datos
        if ($user->save()) {

            return redirect('/dashboardadmin/user')->with('success', 'Usuario creado exitosamente.');
        } else {
            // Manejar el caso en que el producto no se haya guardado correctamente
            return redirect()->back()->with('error', 'Error al crear el usuario.');
        }
    }
}
