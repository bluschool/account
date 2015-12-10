<?php namespace Bluschool\Account\Http\Requests;

use App\Http\Requests\Request;

class AccountRequest extends Request {

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
            'complaintTitle' => 'required',
            'complaintCategory'= > 'required',
            'complaintDescription' => 'required'
		];
	}
}
