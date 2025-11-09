<?php

namespace App\Http\Controllers;

use App\Services\CpuService;
use App\Services\DeviceService;

class IndexController extends Controller
{
    protected $cpuService;
    protected $deviceService;

    public function __construct(CpuService $cpuService, DeviceService $deviceService)
    {
        $this->cpuService = $cpuService;
        $this->deviceService = $deviceService;
    }

    public function index()
    {
        $totalCpuCount = $this->cpuService->getTotalCpuCount();
        $totalDeviceCount = $this->deviceService->getTotalDeviceCount();

        return view('index', [
            'totalCpuCount' => $totalCpuCount,
            'totalDeviceCount' => $totalDeviceCount
        ]);
    }
}

