<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class DeviceRepository
{
    public function selectTotalDeviceCount(): int
    {
        $sql = 'SELECT COUNT(*) AS count FROM device';
        $result = DB::selectOne($sql);
        return $result->count ?? 0;
    }
}

