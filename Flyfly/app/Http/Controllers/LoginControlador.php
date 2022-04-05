<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginControlador extends Controller
{
 /**
 * Handle an authentication attempt.
 *
 * @param \Illuminate\Http\Request $peticio
 * @return \Illuminate\Http\Response
 */
 public function autentica(Request $peticio)
 {
 $credencials = $peticio->validate([
 'email' => ['required', 'email'],
 'password' => ['required'],
 ]);
 if (Auth::attempt($credencials)) {
 $peticio->session()->regenerate();
 return view('welcome');
 }
 return back()->withErrors([
 'email' => 'Les credencials no corresponen a un usuari existent.',
 ]);
 }
}
