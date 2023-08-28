<?php

namespace App\Http\Requests\Admin\Notification;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|min:1|max:255',
            'description' => '',
            'is_open' => 'required|in:0,1',
            'type' => 'required|in:0,1',
            'image' => '',
            'start_date' => 'nullable|date',
            // 'start_time' => 'date_format',
            'end_date' => 'nullable|date',
            // 'end_time' => 'date_format',
        ];
    }
}
