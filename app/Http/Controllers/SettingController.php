<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function index(): View
    {
        $data['page_title'] = 'Pengaturan';
        $data['sub_title'] = 'Kelola detail dan preferensi pribadi Anda di sini.';
        return view('settings.index', $data);
    }
}
