<?php

namespace App\Http\Controllers;

use App\Models\libroreclamaciones;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReclamoCreado;

class LibroreclamacionesController extends Controller
{

    public function index()
    {
        return view('reclamaciones.index', ['data' => '']);
    }

    public function create(Request $request)
    {
           // Validación de los campos del formulario
           $validator=Validator::make($request->all(),[
            'dni' => 'required|string|max:8',
            'nombre' => 'required|string|max:250',
            'apellidos' => 'required|string|max:250',
            'domicilio' => 'required|string|max:250',
            'email' => 'nullable|email|string|max:250',
            'telefono' => 'nullable|string|max:250',
            'tipo' => 'required|string|max:100',
            'descripcion_objeto' => 'required|string|max:250',
            'descripcion_detallada' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reclamaciones.index')->with('data',$validator->errors());
        }
        // Crear un nuevo registro en la tabla LibroDeReclamaciones
        $lr = new libroreclamaciones();
        $lr->dni = request('dni');
        $lr->nombre = request('nombre');
        $lr->apellidos = request('apellidos');
        $lr->domicilio = request('domicilio');
        $lr->email = request('email');
        $lr->telefono = request('telefono');
        $lr->tipo = request('tipo');
        $lr->descripcion_objeto = request('descripcion_objeto');
        $lr->descripcion_detallada = request('descripcion_detallada');
        $lr->monto = request('monto');
        
        $filePath = null;

        if ($request->hasFile('adjuntar_documento')) {
            $file = $request->file('adjuntar_documento');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('documento_adjunto', $filename, 'public');
            $lr->adjuntar_documento = $filePath;
            
        }
    
        
        $lr->save();

        $reclamo = [
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'domicilio' => $request->domicilio,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo' => $request->tipo,
            'descripcion_objeto' => $request->descripcion_objeto,
            'descripcion_detallada' => $request->descripcion_detallada,
            'monto' => $request->monto,
            'adjuntar_documento' => $request->file('adjuntar_documento') ? $request->file('adjuntar_documento')->path() : null,
        ];
    

        // Enviar al correo electrónico
        Mail::to('colcoopcesarvallejo@gmail.com')
        ->cc(['colegio_vallejo@yahoo.com','alexiotovv@gmail.com'])
        // Mail::to('alexiotovv@gmail.com')
        // ->cc(['gpsalexvasquez@gmail.com','multiserviciosayw@gmail.com'])
        ->send(new ReclamoCreado($reclamo));

        return redirect()->route('reclamaciones.index')->with('data','Registro Correcto');


    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(libroreclamaciones $libroreclamaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libroreclamaciones $libroreclamaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libroreclamaciones $libroreclamaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libroreclamaciones $libroreclamaciones)
    {
        //
    }
}
