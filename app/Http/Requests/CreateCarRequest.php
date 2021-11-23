<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
    // $table->string('brand');
    // $table->integer('year');
    // $table->string('model');
    // $table->integer('maxSpeed');
    // $table->boolean('isAutomatic');
    // $table->string('engine');
    // $table->string('numbersOfDoors');
    public function rules()
    {
        return [
            'brand' => 'required|string|min:2',
            'model' => 'required|string|min:2',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numbersOfDoors' => 'required|min:20|max:300',
        ];
    }
}
