<?php

namespace App\Controllers;

use App\Models\ModelLogLogin;

class Logs extends BaseController
{
    protected $mLogLogin;

    public function __construct()
    {
        $this->mLogLogin = new ModelLogLogin();
    }

	public function index()
	{
		$active = \menu('logs');
		$data = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/setting/logs_login', $data);
	}

    public function logs(){
        $day = date('Y-m-d');
        $month = date('Y-m');
        $year = date('Y');
        $dlog = $this->mLogLogin->getLogsLogin($day);
        $mlog = $this->mLogLogin->getLogsLogin($month);
        $ylog = $this->mLogLogin->getLogsLogin($year);
        $browser = $this->mLogLogin->getBrowser();
        
        $active = \menu('logs');
		$data = [
            'active_menu'   => $active,
            'day_logs'      => count($dlog),
            'month_logs'    => count($mlog),
            'year_logs'     => count($ylog),
            'browser'       => $browser
        ];

        // \dd($data);
        return view('furniture-admin/setting/logs_login', $data);
    }

    public function detail_logs(){
        $by = base64_decode($this->request->getGet('q'));
        $dlog = $this->mLogLogin->getLogsLogin($by);
        $browser = $this->mLogLogin->getBrowser($by);

        $active = \menu('logs');
		$data = [
            'active_menu'   => $active,
            'day_logs'      => $dlog,
            'browser'       => $browser
        ];

        return view('furniture-admin/setting/detail_logs_login', $data);
    }
}
