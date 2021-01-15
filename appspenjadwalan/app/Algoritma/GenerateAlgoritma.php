<?php namespace app\Algoritma;

use App\Hari;
use App\Jam;
use App\Models\Timenotavailable;
use DB;

class GenerateAlgoritma
{
    public function randKromosom($kromosom, $count_teachs, $input_year, $hari)
    {
        jadwalpraktikum::truncate();

        for ($i = 0; $i < $kromosom; $i++)
        {
            $values = [];
            for ($j = 0; $j < $count_teachs; $j++)
            {
                $ksm = Ksm::whereHas('hari', function ($query) use ($hari)
                {
                    $query->where('hari.nama_hari', $hari);
                });

                $day   = Hari::inRandomOrder()->first();
                $ksm = $ksm->where('tahun', $input_year)->inRandomOrder()->first();
                $time  = Jam::where('sks', $ksm->hari->nama_hari)->inRandomOrder()->first();
                
                $params = [
                   
                    'id_hari'   => $day->id,
                    'id_jam'  => $time->id,
                    'id_kelas'  => $ksm->id,
                 
                ];

                $jadwalpraktikum = jadwalpraktikum::create($params);
            }
            $data[] = $values;
        }

        return $data;
    }

    public function checkPinalty()
    {
        $jadwalpraktikum = jadwalpraktikum::select(DB::raw('id_hari, id_jam, id_kelas'))
            ->groupBy('id_hari')
            ->groupBy('id_jam')
            ->groupBy('id_kelas')
            ->get();

        $result_jadwal = $this->increaseProccess($jadwalpraktikum);

        $jadwalpraktikum = jadwalpraktikum::select(DB::raw('id_hari, id_jam, id_kelas'))
        ->groupBy('id_hari')
        ->groupBy('id_jam')
        ->groupBy('id_kelas')
        ->get();

    $result_jadwal = $this->increaseProccess($jadwalpraktikum);

    $jadwalpraktikum = jadwalpraktikum::select(DB::raw('id_hari, id_jam, id_kelas'))
    ->groupBy('id_hari')
    ->groupBy('id_jam')
    ->groupBy('id_kelas')
    ->get();

$result_jadwal = $this->increaseProccess($jadwalpraktikum);

        $jadwalpraktikum = jadwalpraktikum::join('hari', 'hari.id', '=', 'jadwalpraktikum.id_hari')
            ->join('jam', 'jam.id', '=', 'hari.id_jam')
            ->select(DB::raw('id_jam, id_hari, id_kelas'))
            ->groupBy('id_hari')
            ->groupBy('id_jam')
            ->groupBy('id_kelas')
            ->get();

        $result_jadwal = $this->increaseProccess($jadwalpraktikum);

        $jadwalpraktikum = jadwalpraktikum::where('id_hari', jadwalpraktikum::FRIDAY)->whereIn('id_jam', [12, 19, 24])->get();

        if (!empty($jadwalpraktikum))
        {
            foreach ($jadwalpraktikum as $key => $jadwal)
            {
                $jadwal->value         = $jadwal->value + 1;
                $jadwal->value_process = $jadwal->value_process . "+ 1 ";
                $jadwal->save();
            }
        }

        $time_not_availables = Timenotavailable::get();

        if (!empty($time_not_availables))
        {
            foreach ($time_not_availables as $k => $time_not_available)
            {
                $jadwalpraktikum = jadwalpraktikum::whereHas('hari', function ($query) use ($time_not_available)
                {
                    $query = $query->whereHas('hari', function ($q) use ($time_not_available)
                    {
                        $q->where('jam.id', $time_not_available->id_jam);
                    });
                });

                $jadwalpraktikum = $jadwalpraktikum->where('id_hari', $time_not_available->id_hari)->where('id_jam', $time_not_available->id_jam)->get();

                if (!empty($jadwalpraktikum))
                {
                    foreach ($jadwalpraktikum as $key => $jadwal)
                    {
                        $jadwal->value         = $jadwal->value + 1;
                        $jadwal->value_process = $jadwal->value_process . "+ 1 ";
                        $jadwal->save();
                    }
                }

            }
        }

        $jadwalpraktikum = jadwalpraktikum::get();

        foreach ($jadwalpraktikum as $key => $jadwal)
        {
            $jadwal->value = 1 / (1 + $jadwal->value);
            $jadwal->save();
        }

        return $jadwalpraktikum;
    }

    // public function increaseProccess($jadwalpraktikum = '')
    // {
    //     if (!empty($jadwalpraktikum))
    //     {
    //         foreach ($jadwalpraktikum as $key => $jadwal)
    //         {
    //             if ($jadwal->jumlah > 1)
    //             {
    //                 $jadwal_wheres = jadwalpraktikum::where('type', $jadwal->type)->get();
    //                 foreach ($jadwal_wheres as $key => $jadwal_where)
    //                 {
    //                     $jadwal_where->value         = $jadwal_where->value + ($jadwal->jumlah - 1);
    //                     $jadwal_where->value_process = $jadwal_where->value_process . " + " . ($jadwal->jumlah - 1);
    //                     $jadwal_where->save();
    //                 }
    //             }
    //         }
    //     }
    //     return $jadwalpraktikum;
    // }

}
