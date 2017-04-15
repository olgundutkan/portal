<?php

namespace App\Http\Requests;

use App\Validation\SpamRule;
use Auth;

class UpdateReplyRequest extends Request
{
    public function rules()
    {
        return [
            'body' => 'required|'.SpamRule::NAME,
        ];
    }

    public function body(): string
    {
        return $this->get('body');
    }
}
