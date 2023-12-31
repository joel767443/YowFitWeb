<?php

namespace App\Http\Controllers;

use App\Services\Mail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $mail = new Mail();
        if ($request->isMethod('post')) {
            $mail->sendMail($request);
        }

        return view('site.index');
    }
}
