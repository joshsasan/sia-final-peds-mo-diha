<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedal;
use Barryvdh\DomPDF\Facade\Pdf;

class PedalController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function index() {
        $pedals = Pedal::all();

        return view('index', compact('pedals'));
    }

    public function detail($model) {
        $pedals = Pedal::where('model', $model)->firstOrFail();

        return view('detail', compact('pedals'));
    }

    public function importCSV(Request $request) {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = array_map('str_getcsv', file($file));

        foreach($csvData as $row) {
            $brand = $row[0];
            $model = $row[1];
            $type = $row[2];
            $color = $row[3];
            $price = $row[4];

            Pedal::create([
                'brand' => $brand,
                'model' => $model,
                'type' => $type,
                'color' => $color,
                'price' => $price,
            ]);
        }

        return redirect()->route('Pedal.index')->with('success', 'New pedals are imported successfully.');
    }

    public function store(Request $request) {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => ['required', 'string', 'max:50'],
            'color' => 'required',
            'price' => 'required|numeric',
        ]);

        Pedal::create([
            'brand'=>$request->brand,
            'model'=>$request->model,
            'type'=>$request->type,
            'color'=>$request->color,
            'price'=>$request->price,
        ]);
    }

    public function generateCSV() {
        $pedals = Pedal::orderBy('brand')->get();

        $filename = '../storage/pedals.csv';

        $file = fopen($filename, 'w+');

        foreach($pedals as $ped) {
            fputcsv($file, [
                $ped->brand,
                $ped->model,
                $ped->type,
                $ped->color,
                $ped->price,
            ]);
        }

        fclose($file);

        return response()->download($filename);
    }

    public function pdf() {
        $pedals = Pedal::orderBy('brand')->get();

        $pdf = Pdf::loadView('index', compact('pedals'));

        return $pdf->stream('index.pdf');
    }

    
}
