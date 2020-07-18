<?php

namespace App\Http\Requests;

use App\App;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreateAppRequest extends FormRequest
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
        $name = $this->request->get('name');
        if($name)
        {
            $validator->after(function ($validator) use ($name) {
            if ($this->isAppAlreadyExist($name)) {
                    $validator->errors()->add('error', 'You have already create an app with this name.');
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
            'name' => 'required|unique:apps,name|max:255'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter app name, max 255 characters',
            'name.max' => 'App name limit is max 255 characters.'
        ];
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function isAppAlreadyExist(string $name)
    {
        if(Auth::check())
        {
            return App::where('name',$name)
                ->where('user_id',Auth::id())
                ->get()
                ->count();
        }
        else
        {
            return App::where('name',$name)
                ->where('user_session_id',Session::getId())
                ->get()
                ->count();
        }
    }
}
