<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:100",
            "description" => "max:65535",
            "thumb" => "max:65535",
            "price" => "min:4|max:100",
            "series" => "max:100",
            "sale_date" => "max:100",
            "type" => "required|max:100",
            "sale_date" => "required|max:100",
            "type" => "required|max:20",
            "artists" => "max:3000",
            "writers" => "max:3000",
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",

            "price.required" => "Il price è obbligatorio",
            "price.min" => "Il price deve essere almeno di 4 cifre 00.00",

            "sale_date.required" => "La data è obbligatorio",

            "type.required" => "Il type è obbligatorio",
        ];
    }
}
