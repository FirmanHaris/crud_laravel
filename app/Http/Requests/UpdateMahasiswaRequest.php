<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtnim' => [
                'required',
                Rule::unique('mahasiswas', 'nim')->ignore('$this->data_idmhs', 'idmhs'),
                'nim'
            ],
            'txtnama' => 'required',
            'txtgender' => 'required',
            'txtalamat' => 'required',
            'txtno_hp' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'txtnim.required' => ':attribute Tidak Boleh Kosong',
            'txtnim.unique' => ':attribute Nim Sudah Ada',
            'txtnim.min' => ':attribute Minimal 10 karakter',
            'txtnim.max' => ':attribute Maksimal 10 karakter',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'txtgender.required' => ':attribute Tidak Boleh Kosong',
            'txtalamat.required' => ':attribute Tidak Boleh Kosong',
            'txtno_hp.required' => ':attribute Tidak Boleh Kosong',
            'txtno_hp.numeric' => ':attribute tidak Valid',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtnim' => 'Nim',
            'txtnama' => 'Nama Lengkap',
            'txtgender' => 'Jenis Kelamin',
            'txtalamat' => 'Alamat',
            'txtno_hp' => 'No Telepon',
        ];
    }
}
