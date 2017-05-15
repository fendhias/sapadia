<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdukRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'nama_produk'    => 'required|string|max:100',
            'deskripsi'     => 'sometimes',
            'harga'         => 'required',
            'id_kategori'   => 'required',
            'id_users'      => 'required',
            'foto'          => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
        ];
    }
}
