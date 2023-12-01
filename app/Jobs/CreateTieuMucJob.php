<?php

namespace App\Jobs;

use App\Models\Chuong;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CreateTieuMucJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $list_chuong = $this->data['data'];
        foreach ($list_chuong as $key => $value) {
            $chuong = Chuong::where('id_chu_de', $this->data['id_chu_de'])
                            ->where('id_de_muc', $this->data['id_de_muc'])
                            ->where('MAPC', $value['MPC_chuong'])
                            ->first();
            if ($chuong) {
                $data_tieu_muc = $value['data'];
                $list = array();
                foreach ($data_tieu_muc as $key => $value_tm) {
                    $detail = [
                        'ten_tieu_muc'      => $value_tm['ten_tieu_muc'],
                        'MAPC'              => $value_tm['MAPC'],
                        'id_chuong'         => $chuong->id,
                        'id_de_muc'         => $chuong->id_de_muc,
                        'id_chu_de'         => $chuong->id_chu_de,
                        'hash_chu_de'       => $chuong->hash_chu_de,
                        'hash_de_muc'       => $chuong->hash_de_muc,
                        'hash_chuong'       => $chuong->hash,
                        'ghi_chu'           => $value_tm['ghi_chu'],
                        'link_ghi_chu'      => $value_tm['link_ghi_chu'],
                        'noi_dung'          => $value_tm['noi_dung'],
                        'chi_dan'           => $value_tm['chi_dan'],
                        'link_chi_dan'      => $value_tm['link_chi_dan'] == null ? null : ($value_tm['link_chi_dan'] == "#" ? null : $value_tm['link_chi_dan']),
                    ];
                    array_push($list, $detail);
                }
                DB::table('tieu_mucs')->insert($list);
            }
        }
    }
}
