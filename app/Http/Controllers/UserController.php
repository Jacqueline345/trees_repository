<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        return redirect()->route('users.manageUsers')->with('success', 'Usuario eliminado exitosamente');
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        // Obtener el usuario
        $user = User::findOrFail($id);

        // Actualizar los datos del usuario
        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        // Redirigir a la página de administración de usuarios
        return redirect()->route('users.manageUsers')->with('success', 'Usuario actualizado exitosamente');
    }

    // Mostrar el formulario de creación de usuario
    public function create()
    {
        return view('users.createUsers'); // Asegúrate de tener la vista `users.create` que contiene el formulario
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone_number' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:50',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|max:20',
        ]);

        $item = new User();
        $item->name = $validated['name'];
        $item->lastname = $validated['lastname'];
        $item->phone_number = $validated['phone_number'];
        $item->email = $validated['email'];
        $item->address = $validated['address'];
        $item->country = $validated['country'];
        $item->password = Hash::make($validated['password']);
        $item->role = $validated['role'];
        $item->save();

        return to_route('users.manageUsers')->with('success', 'Usuario registrado con éxito');
    }
}
