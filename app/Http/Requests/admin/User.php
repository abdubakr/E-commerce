<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
        $array = [];
        if ($this->get('id') != null) {

            $array = [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:55|unique:users',
                'password' => 'required|string|min:7',
                'isAdmin' => 'required|integer',

            ];
        }else{
            $array = [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:55|unique:users',
                'password' => 'required|string|min:7',
                'isAdmin' => 'required|integer',

            ];

        }
        return $array;
/*
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:55|unique:users',
            'password' => 'required|string|min:6',
            'isAdmin' => 'required|integer'
    ];*/

    }

}
