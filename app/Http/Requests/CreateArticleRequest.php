<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request {

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
			'wp_id' => 'required',
            'kicker' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'link' => 'required',
            'img_src' => 'required',
            'img_alt' => 'required',
		];
	}

}
