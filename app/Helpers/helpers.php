<?php

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
