<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LineService;

class LineController extends Controller
{
    private $lineService;

    public function __construct(LineService $lineService)
    {
        $this->lineService = $lineService;
    }

    public function webhook(Request $request)
    {
        $replyToken = $request->events[0]['replyToken'];
        $this->lineService->SendReplyMessage($replyToken, 'サンプルテキスト');
    }
}
