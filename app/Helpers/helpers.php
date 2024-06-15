<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode;

function qrGenerator($nama, $sip)
{
    // Replace the URL with your actual logo URL
    // $logoUrl = 'https://cdn-icons-png.flaticon.com/512/136/136524.png';

    // $data = QrCode::size(512)
    //             ->format('png')
    //             ->merge(asset('assets/images/logo.png'), .3, true)
    //             ->errorCorrection('H')
    //             ->generate($nama . '_' . $sip);

    // return response($data)->header('Content-Type', 'image/png');

    return QrCode::generate(
        $nama . '_' . $sip
    );

    // $data = QrCode::format('png')
    //         ->merge('https://cdn-icons-png.flaticon.com/512/136/136524.png', .3, true)
    //         ->generate($nama . '_' . $sip);
    //     return response($data)->header('Content-Type', 'image/png');
}
