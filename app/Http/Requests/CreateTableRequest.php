<?php

namespace App\Http\Requests;

use App\App;
use App\AppTable;
use Illuminate\Foundation\Http\FormRequest;

class CreateTableRequest extends FormRequest
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
     * @param $validator
     */
    public function withValidator($validator)
    {
        $name = $this->request->get('table-name');
        if($name)
        {
            $validator->after(function ($validator) use ($name) {
                if (!$this->checkTableName($name)) {
                    $validator->errors()->add('error', 'Table should not contain spaces or special characters(except _ character).');
                }
                if (!$this->checkColumn($this->request->all())) {
                    $validator->errors()->add('error', 'Please add column name.');
                }
                if($this->checkIfTableAlreadyExist($name))
                {
                    $validator->errors()->add('error', 'Table already exist in this app. use different name.');
                }
            });
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'table-name' => 'required'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'table-name.required' => 'Please enter table name.',
        ];
    }

    public function checkTableName(string $name)
    {
        $pattern = "/^[a-zA-Z0-9_]+$/";
        if(preg_match($pattern, $name))
        {
            return true;
        }
        return false;
    }

    public function checkColumn(array $data)
    {
        foreach ($data as $d){
            if(!$d)
                return false;
        }
        return true;
    }

    public function checkIfTableAlreadyExist(string $name)
    {
        $table = AppTable::where('app_id',$this->route()->parameter('id'))
            ->where('table_name',$name)->first();
        if($table)
            return true;
        return false;
    }
}
