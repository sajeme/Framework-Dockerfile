<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function alumnos(): JsonResponse
    {
        $alumnos = [
            ['nombre' => 'Juan Pérez', 'matricula' => 'A221'],
            ['nombre' => 'María ', 'matricula' => 'A222'],
            ['nombre' => 'Luis ', 'matricula' => 'A223'],
            ['nombre' => 'Ana ', 'matricula' => 'A224'],
            ['nombre' => 'Carlos ', 'matricula' => 'A225'],
            ['nombre' => 'Sofía ', 'matricula' => 'A226'],
            ['nombre' => 'Pedro ', 'matricula' => 'A227'],
            ['nombre' => 'Laura ', 'matricula' => 'A228'],
            ['nombre' => 'Miguel ', 'matricula' => 'A229'],
            ['nombre' => ' Díaz', 'matricula' => 'A210'],
            ['nombre' => 'Diego ', 'matricula' => 'A211'],
            ['nombre' => 'Valentina ', 'matricula' => 'A212'],
            ['nombre' => 'Mateo ', 'matricula' => 'A213'],
            ['nombre' => 'Camila ', 'matricula' => 'A214'],
            ['nombre' => 'Sebastián ', 'matricula' => 'A215'],
        ];

        return response()->json($alumnos);
    }

    public function profesores(): JsonResponse
    {
        $profesores = [
            ['nombre' => 'Dr Carlos Juarez', 'numeroEmpleado' => 'E11'],
            ['nombre' => 'Dr Fernando Canul', 'numeroEmpleado' => 'E12'],
            ['nombre' => 'Ing Pedro ', 'numeroEmpleado' => 'E13'],
            ['nombre' => 'Lic Sofía ', 'numeroEmpleado' => 'E14'],
            ['nombre' => 'Dr Javier ', 'numeroEmpleado' => 'E15'],
            ['nombre' => 'Dr Elena ', 'numeroEmpleado' => 'E16'],
            ['nombre' => 'Ing Ricardo ', 'numeroEmpleado' => 'E17'],
            ['nombre' => 'Lic Patricia Vega', 'numeroEmpleado' => 'E18'],
            ['nombre' => 'Dr Roberto ', 'numeroEmpleado' => 'E19'],
            ['nombre' => 'Dra Marta ', 'numeroEmpleado' => 'E110'],
            ['nombre' => 'Ing Fernando ', 'numeroEmpleado' => 'E111'],
            ['nombre' => 'Lic Andrea ', 'numeroEmpleado' => 'E112'],
            ['nombre' => 'Dr Jorge Medina', 'numeroEmpleado' => 'E113'],
            ['nombre' => 'Dr Luisa ', 'numeroEmpleado' => 'E114'],
            ['nombre' => 'Ing Daniel ', 'numeroEmpleado' => 'E115'],
        ];

        return response()->json($profesores);
    }
}
