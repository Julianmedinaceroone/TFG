<?php

namespace App\Http\Controllers;
use App\Models\ContactoFormulario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EnvioExitoso;

class ContactoFormularioController extends Controller
{
    public function ContactoFormulario(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'cuerpo' => 'required|string',
            'correo' => 'required|email|max:255',
        ]);

        // Validación de correo electrónico
        if (!filter_var($request->correo, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('frontcontacto-error')->with('error', 'El correo electrónico proporcionado no es válido.');
        }

        // Crear una nueva instancia del modelo ContactoFormulario
        $contacto = new ContactoFormulario();
        
        // Asignar los valores del formulario al modelo
        $contacto->nombre = $request->nombre;
        $contacto->tema = $request->tema;
        $contacto->cuerpo = $request->cuerpo;
        $contacto->correo = $request->correo;
        

        // Guardar el modelo en la base de datos
        if ($contacto->save()) {
            // Enviar correo electrónico
            Mail::to($request->correo)->send(new EnvioExitoso());
            
            // Redireccionar a la vista de éxito
            return redirect()->route('frontcontacto-confirmacion')->with('success', '¡Mensaje enviado correctamente!');
        } else {
            // Redireccionar a la vista de fallo
            return redirect()->route('frontcontacto-error')->with('error', 'Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.');
        }
    }
}



