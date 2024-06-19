<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Asesmen;
use App\Models\CatatanEdukasi;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\RingkasanKondisi;
use App\Models\Triase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokumenController extends Controller
{
    public function index()
    {
        return view('main.dokumen.index');
    }

    public function render()
    {
        $pasien = Pasien::with(['triase', 'asesmen', 'catatanEdukasi', 'ringkasanKondisi'])->whereHas('triase')->get();

        $view = [
            'data' => view('main.dokumen.render', compact('pasien'))->render(),
        ];

        return response()->json($view);
    }

    public function create()
    {
        $pasien = Pasien::wheredoesntHave('asesmen')->pluck('nama', 'id')->prepend('Pilih nama pasien....', '');
        $dokter = Dokter::all()->pluck('nama', 'id')->prepend('Pilih nama dokter....', '');
        $view = [
            'data' => view('main.dokumen.create', compact('pasien', 'dokter'))->render(),
        ];

        return response()->json($view);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $pasien_id = $request->pasien_id;
            $dokter_id = $request->dokter_id;

            // HELPERS
            function createAllergyArray($request)
            {
                $allergies = [];
                for ($i = 0; $i < count($request->alergi_terhadap); $i++) {
                    $allergies[] = [
                        'alergi_terhadap' => $request->alergi_terhadap[$i],
                        'jenis_alergi' => $request->jenis_alergi[$i],
                        'tipe_reaksi' => $request->tipe_reaksi[$i],
                    ];
                }
                return $allergies;
            }

            function encodeJson($option, $description)
            {
                return json_encode([
                    'option' => $option,
                    'deskripsi' => $description,
                ]);
            }

            function handleEducationalNotes($category, $request, $index)
            {
                $hambatanKey = 'hambatan_dalam_komunikasi_' . $index;
                $hambatanLainnyaKey = 'hambatan_dalam_komunikasi_lainnya_' . $index;
                $catatanMetodeKey = 'catatan_metode_' . $index;
                $catatanDurasiKey = 'catatan_durasi_' . $index;
                $catatanKeteranganEvaluasiKey = 'catatan_keterangan_evaluasi_' . $index;

                return [
                    // 'hambatan' => encodeJson($request->$hambatanKey, $request->$hambatanKey == 'Tidak' ? '' : $request->$hambatanLainnyaKey),
                    'hambatan' => [
                        'option' => $request->$hambatanKey,
                        'deskripsi' => $request->$hambatanKey == 'Tidak' ? '' : $request->$hambatanLainnyaKey],
                    'metode' => $request->$catatanMetodeKey,
                    'durasi' => $request->$catatanDurasiKey,
                    'keterangan_evaluasi' => $request->$catatanKeteranganEvaluasiKey,
                ];
            }

            function caraKeluar($option, $description, $descriptionIfAllowedToGoHome)
            {
                if ($option == 'Kabur') {
                    return [
                        'option' => $option,
                        'deskripsi' => '',
                    ];
                } elseif ($option == 'Diperbolehkan Pulang') {
                    return [
                        'option' => $option,
                        'deskripsi' => $descriptionIfAllowedToGoHome,
                    ];
                } else {
                    return [
                        'option' => $option,
                        'deskripsi' => $description,
                    ];
                }
            }

            // TRIASE
            $triase = [
                'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_triase' => json_encode([
                    'tanggal' => date_format(date_create($request->tanggal_triase), 'Y-m-d'),
                    'jam' => $request->jam_triase,
                    'jenis_kasus' => $request->jenis_kasus,
                    'keluhan_utama' => $request->keluhan_utama,
                    'respon' => $request->respon,
                    'airway' => $request->airway,
                    'breathing' => $request->breathing,
                    'kategori' => $request->kategori_triase,
                    'cara_datang' => [
                        'option' => $request->cara_datang,
                        'deskripsi' => $request->cara_datang_lainnya,
                    ],
                    'transportasi' => [
                        'option' => $request->transportasi,
                        'deskripsi' => $request->transportasi_lainnya,
                    ],
                    'circulation' => [
                        'nadi' => $request->nadi,
                        'crt' => $request->crt,
                        'saturasi_oksigen' => $request->saturasi_oksigen,
                        'warna_kulit' => $request->warna_kulit,
                        'perdarahan' => $request->perdarahan,
                        'turgor_kulit' => $request->turgor_kulit,
                    ],
                    'disability' => [
                        'gcs_e' => $request->gcs_e,
                        'gcs_v' => $request->gcs_v,
                        'gcs_m' => $request->gcs_m,
                        'pupil' => $request->pupil,
                        'reflek_pupil' => $request->reflek_pupil,
                    ],
                ]),
            ];

            // ASESMEN
            $asesmen = [
                'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_asesmen' => json_encode([
                    'tanggal' => date_format(date_create($request->tanggal_asesmen), 'Y-m-d'),
                    'jam_kedatangan' => $request->jam_kedatangan_asesmen,
                    'waktu_pengkajian' => $request->waktu_pengkajian,
                    'anamnesis' => $request->anamnesis,
                    'riwayat_penyakit' => $request->riwayat_penyakit,
                    'riwayat_pengobatan' => $request->riwayat_pengobatan,
                    'hasil_pemeriksaan_penunjang' => $request->hasil_pemeriksaan_penunjang,
                    'diagnosis' => $request->diagnosis_asesmen,
                    'rencana_tindakan' => $request->rencana_tindakan,
                    'rencana_terapi' => $request->rencana_terapi,
                    'rujukan' => [
                        'option' => $request->rujukan,
                        'deskripsi' => $request->rujukan_lainnya,
                    ],
                    'kesadaran' => [
                        'gcs_e' => $request->asesmen_gcs_e,
                        'gcs_v' => $request->asesmen_gcs_v,
                        'gcs_m' => $request->asesmen_gcs_m,
                    ],
                    'tanda_vital' => [
                        'td' => $request->td_asesmen,
                        'n' => $request->n_asesmen,
                        'r' => $request->r_asesmen,
                        's' => $request->s_asesmen,
                        'bb' => $request->bb_asesmen,
                    ],
                    'pemeriksaan_fisik' => [
                        'kepala' => $request->kepala_asesmen,
                        'leher' => $request->leher_asesmen,
                        'thorak' => $request->thorak_asesmen,
                        'abdomen' => $request->abdomen_asesmen,
                        'extremitas_atas_bawah' => $request->extremitas_atas_bawah,
                        'genetalia' => $request->genetalia_asesmen,
                        'integumen' => $request->integumen_asesmen,
                    ],
                    'riwayat_alergi' => [
                        'option' => $request->riwayat_alergi,
                        'deskripsi' => ($request->riwayat_alergi == 'Tidak' || $request->riwayat_alergi == 'Tidak Tahu') ? '' : createAllergyArray($request)
                    ],
                    'nyeri' => [
                        'option' => $request->nyeri_asesmen,
                        'deskripsi' => $request->nyeri_asesmen == 'Tidak' ? '' : [
                            'lokasi_nyeri' => $request->lokasi_nyeri_asesmen,
                            'intensitas_nyeri' => $request->intensitas_nyeri_asesmen,
                            'jenis_nyeri' => $request->jenis_nyeri_asesmen,
                        ]
                    ],
                ]),
            ];

            //================== CATATAN EDUKASI =================//
            $catatanEdukasi = [
                'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
            ];

            $catatanDetail = [
                'tanggal' => date_format(date_create($request->tanggal_edukasi), 'Y-m-d'),
                'nama_dan_hubungan' => $request->nama_dan_hubungan,
                'dokter_spesialis' => array_merge([
                    'data' => [
                        'kondisi_pasien' => $request->catatan_kondisi_pasien,
                        'hasil_pemeriksaan' => $request->catatan_hasil_pemeriksaan,
                        'assessment' => $request->catatan_assessment,
                        'rencana_asuhan' => $request->catatan_rencana_asuhan,
                        'perkiraan_hari_rawat_inap' => $request->catatan_perkiraan_hari,
                        'penjelasan_komplikasi' => $request->catatan_penjelasan_komplikasi,
                        'kemungkinan_hasil' => $request->catatan_kemungkinan_hasil,
                    ],
                ], handleEducationalNotes('dokter_spesialis', $request, 1)),
                'nutrisi' => array_merge([
                    'data' => [
                        'nutrisi' => $request->catatan_nutrisi,
                    ],
                ], handleEducationalNotes('nutrisi', $request, 2)),
                'manajemen_nyeri' => array_merge([
                    'data' => [
                        'farmakologi' => $request->farmakologi,
                        'non_farmakologi' => $request->non_farmakologi,
                    ],
                ], handleEducationalNotes('manajemen_nyeri', $request, 3)),
                'rohaniawan' => array_merge([
                    'data' => [
                        'rohaniawan' => $request->catatan_rohaniawan,
                    ],
                ], handleEducationalNotes('rohaniawan', $request, 4)),
                'farmasi' => array_merge([
                    'data' => [
                        'nama_obat' => $request->catatan_nama_obat,
                        'cara_penyimpanan' => $request->catatan_cara_penyimpanan,
                        'efek_samping' => $request->catatan_efek_samping,
                        'kontra_indikasi' => $request->catatan_kontra_indikasi,
                        'lain_lainnya' => $request->catatan_lain_lainnya,
                    ],
                ], handleEducationalNotes('farmasi', $request, 5)),
                'perawat' => array_merge([
                    'data' => [
                        'pendidikan_kesehatan' => $request->catatan_pendidikan_kesehatan,
                        'hak_kewajiban' => $request->catatan_hak_kewajiban,
                        'perawatan_dirumah' => $request->catatan_perawatan_dirumah,
                        'perawatan_luka' => $request->catatan_perawatan_luka,
                        'keamanan_penggunaan_alat' => $request->catatan_keamanan_penggunaan_alat,
                        'keamanan_lingkungan' => $request->catatan_keamanan_lingkungan,
                        'lain_lainnya' => $request->catatan_lain_lainnya,
                    ],
                ], handleEducationalNotes('edukasi_pulang', $request, 6)),
                'rehabilitas_medis' => array_merge([
                    'data' => [
                        'fisioterapi' => $request->catatan_fisioterapi,
                        'psikolog' => $request->catatan_psikolog,
                    ],
                ], handleEducationalNotes('edukasi_lain_lain', $request, 7)),
            ];

            // DATA EDUKASI
            $catatanEdukasi['data_edukasi'] = json_encode($catatanDetail);

            // ================ RINGKASAN KONDISI ==================//
            $ringkasanKondisi = [
                'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_ringkasan_kondisi' => json_encode([
                    'tindak_lanjut_asuhan' => $request->tindak_lanjut_asuhan,
                    'kondisi_keluar' => $request->ringkasan_kondisi_keluar,
                    'keadaan_pasien' => [
                        's' => $request->ringkasan_kondisi_s,
                        'o' => $request->ringkasan_kondisi_o,
                        'a' => $request->ringkasan_kondisi_a,
                        'p' => $request->ringkasan_kondisi_p,
                    ],
                    'cara_keluar' => caraKeluar(
                        $request->cara_keluar,
                        $request->cara_keluar_lainnya,
                        $request->cara_keluar_lainnya_3
                    ),
                ]),
            ];

            // ================== FILE SCAN ==================== //
            $pasien = Pasien::find($request->pasien_id);
            $files = [
                'file_triase' => ['prefix' => 'triase_', 'path' => 'assets/uploads/triase', 'document' => &$triase['dokumen']],
                'file_asesmen' => ['prefix' => 'asesmen_', 'path' => 'assets/uploads/asesmen', 'document' => &$asesmen['dokumen']],
                'file_edukasi' => ['prefix' => 'edukasi_', 'path' => 'assets/uploads/edukasi', 'document' => &$catatanEdukasi['dokumen']],
                'file_ringkasan' => ['prefix' => 'ringkasan_', 'path' => 'assets/uploads/ringkasan', 'document' => &$ringkasanKondisi['dokumen']],
            ];

            foreach ($files as $key => $file) {
                if ($request->hasFile($key)) {
                    $uploadedFile = $request->file($key);
                    $fileName = $file['prefix'] . $pasien->nik . '-' . time() . '.' . $uploadedFile->getClientOriginalExtension();
                    $savePath = $file['path'];

                    if (!file_exists($savePath)) {
                        mkdir($savePath, 655, true);
                    }

                    $uploadedFile->move($savePath, $fileName);
                    $file['document'] = $savePath . '/' . $fileName;
                }
            }

            // insert to database
            Triase::create($triase);
            Asesmen::create($asesmen);
            CatatanEdukasi::create($catatanEdukasi);
            RingkasanKondisi::create($ringkasanKondisi);

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan',
                'title' => 'Berhasil'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                // 'message' => 'Terjadi kesalahan!',
                'title' => 'Gagal'
            ]);
        }
    }

    public function edit($id)
    {
        $data = Pasien::where('id', $id)->with(['triase', 'asesmen', 'catatanEdukasi', 'ringkasanKondisi'])->first();
        $triase = json_decode($data->triase->data_triase);
        $asesmen = json_decode($data->asesmen->data_asesmen);
        $catatanEdukasi = json_decode($data->catatanEdukasi->data_edukasi);
        $ringkasanKondisi = json_decode($data->ringkasanKondisi->data_ringkasan_kondisi);
        // dd($triase->cara_datang->option);
        $pasien = Pasien::all()->pluck('nama', 'id')->prepend('Pilih nama pasien....', '');
        $dokter = Dokter::all()->pluck('nama', 'id')->prepend('Pilih nama dokter....', '');

        $view = [
            'data' => view('main.dokumen.edit', compact('pasien', 'dokter', 'data', 'triase', 'asesmen', 'catatanEdukasi', 'ringkasanKondisi'))->render(),
        ];

        return response()->json($view);
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $pasien = Pasien::find($request->pasien_id_hidden);
            $pasien_id = $request->pasien_id_hidden;
            $dokter_id = $request->dokter_id;

            // HELPERS
            function createAllergyArrayUpdate($request)
            {
                $allergies = [];
                for ($i = 0; $i < count($request->alergi_terhadap); $i++) {
                    $allergies[] = [
                        'alergi_terhadap' => $request->alergi_terhadap[$i],
                        'jenis_alergi' => $request->jenis_alergi[$i],
                        'tipe_reaksi' => $request->tipe_reaksi[$i],
                    ];
                }
                return $allergies;
            }

            function encodeJsonUpdate($option, $description)
            {
                return json_encode([
                    'option' => $option,
                    'deskripsi' => $description,
                ]);
            }

            function handleEducationalNotesUpdate($category, $request, $index)
            {
                $hambatanKey = 'hambatan_dalam_komunikasi_' . $index;
                $hambatanLainnyaKey = 'hambatan_dalam_komunikasi_lainnya_' . $index;
                $catatanMetodeKey = 'catatan_metode_' . $index;
                $catatanDurasiKey = 'catatan_durasi_' . $index;
                $catatanKeteranganEvaluasiKey = 'catatan_keterangan_evaluasi_' . $index;

                return [
                    // 'hambatan' => encodeJsonUpdate($request->$hambatanKey, $request->$hambatanKey == 'Tidak' ? '' : $request->$hambatanLainnyaKey),
                    'hambatan' => [
                        'option' => $request->$hambatanKey,
                        'deskripsi' => $request->$hambatanKey == 'Tidak' ? '' : $request->$hambatanLainnyaKey],
                    'metode' => $request->$catatanMetodeKey,
                    'durasi' => $request->$catatanDurasiKey,
                    'keterangan_evaluasi' => $request->$catatanKeteranganEvaluasiKey,
                ];
            }

            function caraKeluarUpdate($option, $description, $descriptionIfAllowedToGoHome)
            {
                if ($option == 'Kabur') {
                    return [
                        'option' => $option,
                        'deskripsi' => '',
                    ];
                } elseif ($option == 'Diperbolehkan Pulang') {
                    return [
                        'option' => $option,
                        'deskripsi' => $descriptionIfAllowedToGoHome,
                    ];
                } else {
                    return [
                        'option' => $option,
                        'deskripsi' => $description,
                    ];
                }
            }

            // TRIASE
            $triase = [
                // 'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_triase' => json_encode([
                    'tanggal' => date_format(date_create($request->tanggal_triase), 'Y-m-d'),
                    'jam' => $request->jam_triase,
                    'jenis_kasus' => $request->jenis_kasus,
                    'keluhan_utama' => $request->keluhan_utama,
                    'respon' => $request->respon,
                    'airway' => $request->airway,
                    'breathing' => $request->breathing,
                    'kategori' => $request->kategori_triase,
                    'cara_datang' => [
                        'option' => $request->cara_datang,
                        'deskripsi' => $request->cara_datang_lainnya,
                    ],
                    'transportasi' => [
                        'option' => $request->transportasi,
                        'deskripsi' => $request->transportasi_lainnya,
                    ],
                    'circulation' => [
                        'nadi' => $request->nadi,
                        'crt' => $request->crt,
                        'saturasi_oksigen' => $request->saturasi_oksigen,
                        'warna_kulit' => $request->warna_kulit,
                        'perdarahan' => $request->perdarahan,
                        'turgor_kulit' => $request->turgor_kulit,
                    ],
                    'disability' => [
                        'gcs_e' => $request->gcs_e,
                        'gcs_v' => $request->gcs_v,
                        'gcs_m' => $request->gcs_m,
                        'pupil' => $request->pupil,
                        'reflek_pupil' => $request->reflek_pupil,
                    ],
                ]),
            ];

            // ASESMEN
            $asesmen = [
                // 'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_asesmen' => json_encode([
                    'tanggal' => date_format(date_create($request->tanggal_asesmen), 'Y-m-d'),
                    'jam_kedatangan' => $request->jam_kedatangan_asesmen,
                    'waktu_pengkajian' => $request->waktu_pengkajian,
                    'anamnesis' => $request->anamnesis,
                    'riwayat_penyakit' => $request->riwayat_penyakit,
                    'riwayat_pengobatan' => $request->riwayat_pengobatan,
                    'hasil_pemeriksaan_penunjang' => $request->hasil_pemeriksaan_penunjang,
                    'diagnosis' => $request->diagnosis_asesmen,
                    'rencana_tindakan' => $request->rencana_tindakan,
                    'rencana_terapi' => $request->rencana_terapi,
                    'rujukan' => [
                        'option' => $request->rujukan,
                        'deskripsi' => $request->rujukan_lainnya,
                    ],
                    'kesadaran' => [
                        'gcs_e' => $request->asesmen_gcs_e,
                        'gcs_v' => $request->asesmen_gcs_v,
                        'gcs_m' => $request->asesmen_gcs_m,
                    ],
                    'tanda_vital' => [
                        'td' => $request->td_asesmen,
                        'n' => $request->n_asesmen,
                        'r' => $request->r_asesmen,
                        's' => $request->s_asesmen,
                        'bb' => $request->bb_asesmen,
                    ],
                    'pemeriksaan_fisik' => [
                        'kepala' => $request->kepala_asesmen,
                        'leher' => $request->leher_asesmen,
                        'thorak' => $request->thorak_asesmen,
                        'abdomen' => $request->abdomen_asesmen,
                        'extremitas_atas_bawah' => $request->extremitas_atas_bawah,
                        'genetalia' => $request->genetalia_asesmen,
                        'integumen' => $request->integumen_asesmen,
                    ],
                    'riwayat_alergi' => [
                        'option' => $request->riwayat_alergi,
                        'deskripsi' => ($request->riwayat_alergi == 'Tidak' || $request->riwayat_alergi == 'Tidak Tahu') ? '' : createAllergyArrayUpdate($request)
                    ],
                    'nyeri' => [
                        'option' => $request->nyeri_asesmen,
                        'deskripsi' => $request->nyeri_asesmen == 'Tidak' ? '' : [
                            'lokasi_nyeri' => $request->lokasi_nyeri_asesmen,
                            'intensitas_nyeri' => $request->intensitas_nyeri_asesmen,
                            'jenis_nyeri' => $request->jenis_nyeri_asesmen,
                        ]
                    ],
                ]),
            ];

            //================== CATATAN EDUKASI =================//
            $catatanEdukasi = [
                // 'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
            ];

            $catatanDetail = [
                'tanggal' => date_format(date_create($request->tanggal_edukasi), 'Y-m-d'),
                'nama_dan_hubungan' => $request->nama_dan_hubungan,
                'dokter_spesialis' => array_merge([
                    'data' => [
                        'kondisi_pasien' => $request->catatan_kondisi_pasien,
                        'hasil_pemeriksaan' => $request->catatan_hasil_pemeriksaan,
                        'assessment' => $request->catatan_assessment,
                        'rencana_asuhan' => $request->catatan_rencana_asuhan,
                        'perkiraan_hari_rawat_inap' => $request->catatan_perkiraan_hari,
                        'penjelasan_komplikasi' => $request->catatan_penjelasan_komplikasi,
                        'kemungkinan_hasil' => $request->catatan_kemungkinan_hasil,
                    ],
                ], handleEducationalNotesUpdate('dokter_spesialis', $request, 1)),
                'nutrisi' => array_merge([
                    'data' => [
                        'nutrisi' => $request->catatan_nutrisi,
                    ],
                ], handleEducationalNotesUpdate('nutrisi', $request, 2)),
                'manajemen_nyeri' => array_merge([
                    'data' => [
                        'farmakologi' => $request->farmakologi,
                        'non_farmakologi' => $request->non_farmakologi,
                    ],
                ], handleEducationalNotesUpdate('manajemen_nyeri', $request, 3)),
                'rohaniawan' => array_merge([
                    'data' => [
                        'rohaniawan' => $request->catatan_rohaniawan,
                    ],
                ], handleEducationalNotesUpdate('rohaniawan', $request, 4)),
                'farmasi' => array_merge([
                    'data' => [
                        'nama_obat' => $request->catatan_nama_obat,
                        'cara_penyimpanan' => $request->catatan_cara_penyimpanan,
                        'efek_samping' => $request->catatan_efek_samping,
                        'kontra_indikasi' => $request->catatan_kontra_indikasi,
                        'lain_lainnya' => $request->catatan_lain_lainnya,
                    ],
                ], handleEducationalNotesUpdate('farmasi', $request, 5)),
                'perawat' => array_merge([
                    'data' => [
                        'pendidikan_kesehatan' => $request->catatan_pendidikan_kesehatan,
                        'hak_kewajiban' => $request->catatan_hak_kewajiban,
                        'perawatan_dirumah' => $request->catatan_perawatan_dirumah,
                        'perawatan_luka' => $request->catatan_perawatan_luka,
                        'keamanan_penggunaan_alat' => $request->catatan_keamanan_penggunaan_alat,
                        'keamanan_lingkungan' => $request->catatan_keamanan_lingkungan,
                        'lain_lainnya' => $request->catatan_lain_lainnya,
                    ],
                ], handleEducationalNotesUpdate('edukasi_pulang', $request, 6)),
                'rehabilitas_medis' => array_merge([
                    'data' => [
                        'fisioterapi' => $request->catatan_fisioterapi,
                        'psikolog' => $request->catatan_psikolog,
                    ],
                ], handleEducationalNotesUpdate('edukasi_lain_lain', $request, 7)),
            ];

            // DATA EDUKASI
            $catatanEdukasi['data_edukasi'] = json_encode($catatanDetail);

            // ================ RINGKASAN KONDISI ==================//
            $ringkasanKondisi = [
                // 'pasien_id' => $pasien_id,
                'dokter_id' => $dokter_id,
                'data_ringkasan_kondisi' => json_encode([
                    'tindak_lanjut_asuhan' => $request->tindak_lanjut_asuhan,
                    'kondisi_keluar' => $request->ringkasan_kondisi_keluar,
                    'keadaan_pasien' => [
                        's' => $request->ringkasan_kondisi_s,
                        'o' => $request->ringkasan_kondisi_o,
                        'a' => $request->ringkasan_kondisi_a,
                        'p' => $request->ringkasan_kondisi_p,
                    ],
                    'cara_keluar' => caraKeluarUpdate(
                        $request->cara_keluar,
                        $request->cara_keluar_lainnya,
                        $request->cara_keluar_lainnya_3
                    ),
                ]),
            ];

            // ================== FILE SCAN ==================== //
            $filesConfig = [
                'file_triase' => ['prefix' => 'triase_', 'path' => 'assets/uploads/triase'],
                'file_asesmen' => ['prefix' => 'asesmen_', 'path' => 'assets/uploads/asesmen'],
                'file_edukasi' => ['prefix' => 'edukasi_', 'path' => 'assets/uploads/edukasi'],
                'file_ringkasan' => ['prefix' => 'ringkasan_', 'path' => 'assets/uploads/ringkasan'],
            ];

            // Loop over all the files sent in the request
            foreach ($request->allFiles() as $key => $uploadedFile) {
                if (isset($filesConfig[$key])) {
                    $fileConfig = $filesConfig[$key];
                    $fileName = $fileConfig['prefix'] . $pasien->nik . '-' . time() . '.' . $uploadedFile->getClientOriginalExtension();
                    $savePath = $fileConfig['path'];

                    if (!file_exists($savePath)) {
                        mkdir($savePath, 0755, true);
                    }

                    $uploadedFile->move($savePath, $fileName);

                    // Update the document paths in the respective models
                    switch ($key) {
                        case 'file_triase':
                            $pasien->triase->update(['dokumen' => $savePath . '/' . $fileName]);
                            break;
                        case 'file_asesmen':
                            $pasien->asesmen->update(['dokumen' => $savePath . '/' . $fileName]);
                            break;
                        case 'file_edukasi':
                            $pasien->catatanEdukasi->update(['dokumen' => $savePath . '/' . $fileName]);
                            break;
                        case 'file_ringkasan':
                            $pasien->ringkasanKondisi->update(['dokumen' => $savePath . '/' . $fileName]);
                            break;
                    }
                }
            }



            // insert to database
            $pasien->triase->update($triase);
            $pasien->asesmen->update($asesmen);
            $pasien->catatanEdukasi->update($catatanEdukasi);
            $pasien->ringkasanKondisi->update($ringkasanKondisi);

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan',
                'title' => 'Berhasil'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                // 'message' => 'Terjadi kesalahan!',
                'title' => 'Gagal'
            ]);
        }
    }
}
