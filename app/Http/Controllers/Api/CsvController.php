<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CsvController extends Controller
{

    public function uploadPatients(Request $request)
    {
        if (!$request->hasFile('csvFile')) {
            return response()->json(['error' => 'No se ha seleccionado ningún archivo CSV.'], 400);
        }

        $file = $request->file('csvFile');
        $csv = array_map('str_getcsv', file($file));

        // Eliminar la primera fila que contiene los nombres de las columnas
        array_shift($csv);

        // Iterar sobre los registros y guardarlos en la tabla patients
        foreach ($csv as $record) {
            $data = explode(';', $record[0]); // acceder al primer elemento del arreglo

            // Crear un nuevo modelo con los datos del registro actual
            $patient = new Patient([
                'TYPE' => $data[0],
                'PTNO' => $data[1],
                'SALUTATION' => $data[2],
                'PATIENT_NAME' => $data[3],
                'GENDER' => $data[4],
                'NATIONALITY' => $data[5],
                'REGION' => $data[6],
                'REGISTRED_DATE' => $data[7],
                'EDIT_DATE' => $data[8]
            ]);

            // Guardar el modelo en la base de datos
            $patient->save();
        }

        return response()->json(['message' => 'Archivo CSV recibido correctamente.']);
    }

    public function uploadAppointments(Request $request)
    {
        if (!$request->hasFile('csvFile')) {
            return response()->json(['error' => 'No se ha seleccionado ningún archivo CSV.'], 400);
        }

        $file = $request->file('csvFile');
        $csv = array_map('str_getcsv', file($file));

        // Eliminar la primera fila que contiene los nombres de las columnas
        array_shift($csv);

        // Iterar sobre los registros y guardarlos en la tabla patients
        foreach ($csv as $record) {
            $data = explode(';', $record[0]); // acceder al primer elemento del arreglo

            // Crear un nuevo modelo con los datos del registro actual
            $patient = new Appointment([
                'PTNO' => $data[0],
                'CONTACT_NO' => $data[1],
                'APPOINMENT_DATE' => $data[2],
                'APPOINMENT_STATUS' => $data[3],
                'DURATION' => $data[4],
                'DOCTOR' => $data[5],                
            ]);          

            // Guardar el modelo en la base de datos
            $patient->save();
        }

        return response()->json(['message' => 'Archivo CSV recibido correctamente.']);
    }
}
