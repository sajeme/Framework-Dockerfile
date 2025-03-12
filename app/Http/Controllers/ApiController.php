<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function alumnos(): JsonResponse
    {
        $alumnos = [
            ['nombre' => 'Juan Pérez', 'matricula' => 'A001'],
            ['nombre' => 'María García', 'matricula' => 'A002'],
            ['nombre' => 'Luis Rodríguez', 'matricula' => 'A003'],
            ['nombre' => 'Ana Martínez', 'matricula' => 'A004'],
            ['nombre' => 'Carlos López', 'matricula' => 'A005'],
            ['nombre' => 'Sofía Torres', 'matricula' => 'A006'],
            ['nombre' => 'Pedro Ramírez', 'matricula' => 'A007'],
            ['nombre' => 'Laura Sánchez', 'matricula' => 'A008'],
            ['nombre' => 'Miguel Hernández', 'matricula' => 'A009'],
            ['nombre' => 'Isabela Díaz', 'matricula' => 'A010'],
            ['nombre' => 'Diego Fernández', 'matricula' => 'A011'],
            ['nombre' => 'Valentina Gómez', 'matricula' => 'A012'],
            ['nombre' => 'Mateo Ruiz', 'matricula' => 'A013'],
            ['nombre' => 'Camila Álvarez', 'matricula' => 'A014'],
            ['nombre' => 'Sebastián Jiménez', 'matricula' => 'A015'],
        ];

        return response()->json($alumnos);
    }

    public function profesores(): JsonResponse
    {
        $profesores = [
            ['nombre' => 'Dr. Carlos Sánchez', 'numeroEmpleado' => 'E101'],
            ['nombre' => 'Dra. Laura López', 'numeroEmpleado' => 'E102'],
            ['nombre' => 'Ing. Pedro Ramírez', 'numeroEmpleado' => 'E103'],
            ['nombre' => 'Lic. Sofía Torres', 'numeroEmpleado' => 'E104'],
            ['nombre' => 'Dr. Javier Morales', 'numeroEmpleado' => 'E105'],
            ['nombre' => 'Dra. Elena Castro', 'numeroEmpleado' => 'E106'],
            ['nombre' => 'Ing. Ricardo Núñez', 'numeroEmpleado' => 'E107'],
            ['nombre' => 'Lic. Patricia Vega', 'numeroEmpleado' => 'E108'],
            ['nombre' => 'Dr. Roberto Ortiz', 'numeroEmpleado' => 'E109'],
            ['nombre' => 'Dra. Marta Silva', 'numeroEmpleado' => 'E110'],
            ['nombre' => 'Ing. Fernando Guzmán', 'numeroEmpleado' => 'E111'],
            ['nombre' => 'Lic. Andrea Romero', 'numeroEmpleado' => 'E112'],
            ['nombre' => 'Dr. Jorge Medina', 'numeroEmpleado' => 'E113'],
            ['nombre' => 'Dra. Luisa Herrera', 'numeroEmpleado' => 'E114'],
            ['nombre' => 'Ing. Daniel Castro', 'numeroEmpleado' => 'E115'],
        ];

        return response()->json($profesores);
    }
}