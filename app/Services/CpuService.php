<?php

namespace App\Services;

use App\Repositories\CpuRepository;

class CpuService
{
    protected $cpuRepository;

    public function __construct(CpuRepository $cpuRepository)
    {
        $this->cpuRepository = $cpuRepository;
    }

    public function getTotalCpuCount(): int
    {
        return $this->cpuRepository->selectTotalCpuCount();
    }
}

