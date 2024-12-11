<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Método para gestionar usuarios
    public function manage()
    {
        $users = User::where('role', 'amigo')->get();  // Obtener solo usuarios con rol 'amigo'
        return view('users.manageUsers', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('manageUsers')->with('success', 'Usuario eliminado exitosamente');
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        // Verifica si la compra existe
        if (!$user) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        // Guarda los cambios
        $user->save();

        // Redirigir a la página de administración de usuarios
        return redirect()->route('manageUsers')->with('success', 'Usuario actualizado exitosamente');
    }

    // Mostrar el formulario de creación de usuario
    public function create()
    {
        return view('users.createUsers'); // Asegúrate de tener la vista `users.create` que contiene el formulario
    }

    public function store(Request $request)
    {
        $item = new User();
        $item->name = $request->name;
        $item->lastname = $request->lastname;
        $item->phone_number = $request->phone_number;
        $item->email = $request->email;
        $item->address = $request->address;
        $item->country = $request->country;
        $item->password = Hash::make($request->password);
        $item->role = $request->role;
        $item->save();

        return to_route('manageUsers')->with('success', 'Usuario registrado con éxito');
    }
}
