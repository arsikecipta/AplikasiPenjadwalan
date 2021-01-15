<?php

namespace App\Http\Controllers;
use App\Algoritma\GenerateAlgoritma;
use Illuminate\Http\Request;
use App\Ksm;
class GenetikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $years = Ksm::select('semester')->groupBy('semester')->pluck('semester', 'semester');

        return view('laboran.input_generate_jadwal', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $years            = Ksm::select('year')->groupBy('year')->pluck('year', 'year');
        $input_kromosom   = $request->input('kromosom');
        $input_year       = $request->input('year');
        $input_semester   = $request->input('semester');
        $input_generasi   = $request->input('generasi');
        $input_crossover  = $request->input('crossover');
        $input_mutasi     = $request->input('mutasi');
        // $count_lecturers  = Lecturer::count();
        $count_teachs     = Ksm::count();
        $kromosom         = $input_kromosom * $input_generasi;
        $crossover        = $input_kromosom * $input_crossover;
        $generate         = new GenerateAlgoritma;
        $data_kromosoms   = $generate->randKromosom($kromosom, $count_teachs, $input_year, $hari);
        $result_schedules = $generate->checkPinalty();

        $total_gen        = Setting::firstOrNew(['key' => 'total_gen']);
        $total_gen->name  = 'Total Gen';
        $total_gen->value = $crossover;
        $total_gen->save();

        $mutasi        = Setting::firstOrNew(['key' => 'mutasi']);
        $mutasi->name  = 'Mutasi';
        $mutasi->value = (3 * $count_teachs) * $input_kromosom * $input_mutasi;
        $mutasi->save();

        return redirect()->route('laboran.jadwal_praktikum.result', 1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function result($id)
    {
        $years          = KSM::select('year')->groupBy('year')->pluck('year', 'year');
        $kromosom       = jadwalpraktikum::select('kelas')->groupBy('kelas')->get()->count();
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $value_schedule = jadwalpraktikum::where('kelas', $id)->first();
        $jadwalpraktikum      = jadwalpraktikum::orderBy('id_hari', 'desc')
            ->orderBy('id_jam', 'desc')
            ->where('kelas', $id)
            ->paginate();

        if (empty($value_schedule))
        {
            abort(404);
        }

        for ($i = 1; $i <= $kromosom; $i++)
        {
            $value_schedules = jadwalpraktikum::where('kelas', $i)->first();
            $data_kromosom[] = [
                'value_schedules' => $value_schedules->value,

            ];
        }

        return view('laboran.jadwal_praktikum.result', compact('jadwalpraktikum', 'years', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi'));
    }

    public function excel($id)
    {
        $jadwalpraktikum = jadwalpraktikum::orderBy('id_hari', 'desc')
            ->orderBy('id_jam', 'desc')
            ->where('kelas', $id)
            ->get();

        return Excel::create('Algoritma Genetika', function ($excel) use ($jadwalpraktikum)
        {
            $excel->sheet('Genetika', function ($sheet) use ($jadwalpraktikum)
            {
                $sheet->loadView('laboran.jadwal_praktikum.export')->with('schedules', $jadwalpraktikum);
            });
        })->export('xlsx');

        return redirect()->back();
    }



    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
