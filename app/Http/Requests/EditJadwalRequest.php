<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditJadwalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_siswa' => 'required',
            'nama_program' => 'required',
            'materi' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_siswa.required' => 'Nama Siswa wajib diisi!!',
            'nama_program.required' => 'Program wajib diisi!!',
            'materi.required' => 'Materi wajib diisi!!',
            'status.required' => 'Status wajib dipilih!!'
        ];
    }
}
