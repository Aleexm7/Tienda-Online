<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        return view('layouts.dashboardadmin');
    }

    public function showUsers(){

        $users = User::all();
        

        return view('users.users', compact('users'));

    }

    public function createUser(Request $request)
    {


        $users = new User();

       
        return view('users.create', compact('users'));
    }

    public function editUser($id){
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }



    public function updateUser(Request $request, $id)
    {


        $user = User::findOrFail($id);
        dd($user);
        $user->update($request->all());


        return redirect('/dashboardadmin/user')->with('success', 'Usuario actualizado exitosamente.');
    }


    public function destroyUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/dashboardadmin/user')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
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
