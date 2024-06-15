<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'nama' => 'required|string|max:50|min:3|unique:dokter,nama,'.$this->id,
            'sip' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|string',
            'nomor_telp' => 'required|regex:/^\d+$/'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah ada',
            'string' => ':attribute harus berupa string',
            'numeric' => ':attribute harus berupa angka',
            'max' => ':attribute maksimal :max karakter',
            'min' => ':attribute minimal :min karakter',
            'date' => ':attribute harus berupa tanggal',
            'regex' => ':attribute harus berupa 16 digit angka'
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama',
            'sip' => 'SIP',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
            'nomor_telp' => 'Nomor Telepon'
        ];
    }
}
