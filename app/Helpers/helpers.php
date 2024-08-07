<?php

use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

function qrGenerator($nama, $sip)
{
    return QrCode::generate($nama . '_' . $sip);
}

function dateFormat($tanggal) {
    return date_format(date_create($tanggal), 'm/d/Y');
}

function caraDatang()
{
    $data = [
        'Datang Sendiri',
        'Rujukan',
        'Lain-lain'
    ];

    return $data;
}

function transportasi()
{
    $data = [
        'Ambulance',
        'Kendaraan Pribadi',
        'Lain-lain'
    ];

    return $data;
}

function jenisKasus()
{
    $data = [
        'Trauma', 'Non Trauma'
    ];

    return $data;
}

function respon()
{
    $data = [
        'Alert',
        'Verbal',
        'Pain',
        'Unrespon',
    ];
    return $data;
}

function airway()
{
    $data = [
        'Bebas',
        'Gurgling',
        'Stridor',
        'Wheezing',
        'Ronchi',
        'Terintubasi',
    ];

    return $data;
}

function breathing()
{
    $data = [
        'Spontan', 'Tachipneu', 'Dispneu', 'Apneu', 'Ventilasi Mekanik', 'Memakai BVM'
    ];

    return $data;
}

function circulation()
{
    $data = [
        'nadi' => [
            'Kuat',
            'Lemah',
        ],
        'crt' => [
            '< 2"',
            '> 2"',
        ],
        'warna_kulit' => [
            'Normal', 'Pucat', 'Sianosis'
        ],
        'perdarahan' => [
            'Tidak ada', 'Terkontrol', 'Tidak Terkontrol'
        ],
        'turgor_kulit' => [
            'Baik', 'Buruk'
        ]
    ];

    return $data;
}

function disability()
{
    $data = [
        'pupil' => [
            'Isokor', 'Anisokor', 'Pin Point', 'Midriasis'
        ],
    ];

    return $data;
}

function rujukan()
{
    $data = [
        'Ya',
        'Tidak',
    ];
    return $data;
}

function riwayatAlergi()
{
    $data = [
        'Ya',
        'Tidak',
        'Tidak Tahu',
    ];
    return $data;
}

function nyeriAsesmen()
{
    $data = [
        'Ya',
        'Tidak',
    ];
    return $data;
}

function jenisNyeri()
{
    $data = [
        'Akut',
        'Kronis',
    ];
    return $data;
}

function metode()
{
    $data = [
        'D', 'C', 'S', 'Demo'
    ];

    return $data;
}

function hambatanKomunikasi()
{
    $data = [
        'Ya',
        'Tidak',
    ];
    return $data;
}

function tindakLanjutAsuhan()
{
    $data = [
        'Preventif', 'Kuratif','Paliatif','Rehabilitatif'
    ];
    return $data;
}

function caraKeluar()
{
    $data = [
        'Diperbolehkan Pulang', 'Kabur','Permintaan Sendiri','Dirujuk', 'Pindah Perawatan', 'Rawat Inap'
    ];
    return $data;
}

function opsiCaraKeluar()
{
    $data = [
        'Kontrol Kembali', 'Kontrol Ke Fasilitas Kesehatan Primer','Tanpa Kontrol Kembali'
    ];
    return $data;
}

function kondisiKeluar()
{
    $data = [
        'Sembuh', 'Membaik','Belum Sembuh','Meninggal'
    ];
    return $data;
}

function dashboardData()
{
    $data = [
        'pengguna', 'dokter', 'pasien', 'dokumen'
    ];

    return $data;
}

function logos()
{
    $data = [
        'fa-thin fa-users',
            'fa-thin fa-user-doctor-hair',
            'fa-sharp fa-thin fa-users-medical',
            'fa-thin fa-folder'
    ];

    return $data;
}

function totalData($param)
{
    // $data = [];
    // foreach(dashboardData()['pengguna'] as $key => $item) {
    //     $table = $item == 'pengguna' ? 'users' : $item;
    //     $data[$item] = DB::table($table)->count();
    // }
    $table = $param == 'pengguna' ? 'users' : ($param == 'dokumen' ? 'triase' : $param);
    return DB::table($table)->count();
}
