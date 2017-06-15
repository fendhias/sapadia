<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AnggotaRequest extends Request
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
        return [
            'name'              => 'required|string|max:100',
            'tanggal_lahir'     => 'required',
            'jenis_kelamin'     => 'required',
            'telepon'           => 'required',
            'alamat'            => 'required',
            'bio'               => 'required',
            'foto'              => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
        ];
    }
}
