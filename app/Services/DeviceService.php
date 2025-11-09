<?php

namespace App\Services;

use App\Repositories\DeviceRepository;

class DeviceService
{
    protected $deviceRepository;

    public function __construct(DeviceRepository $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    public function getTotalDeviceCount(): int
    {
        return $this->deviceRepository->selectTotalDeviceCount();
    }
}


