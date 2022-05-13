<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RegisterAuthRequest extends FormRequest
{
 /**
 * Determinar si el usuario está autorizado para realizar esta solicitud.
 *
 * @return bool
 */
 public function authorize()
 {
 return true;
 }
 /**
   * Obtenga las reglas de validación aplicadas a la solicitud
 *
 * @return array
 */
 public function rules()
 {
 return [
 'name' => 'required|string',
 'email' => 'required|email|unique:users',
 'password' => 'required|string|min:6|max:10'
 ];
 }
}