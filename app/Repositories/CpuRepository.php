<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class CpuRepository
{
    public function selectTotalCpuCount(): int
    {
        $sql = 'SELECT COUNT(*) AS count FROM cpu';
        $result = DB::selectOne($sql);
        return $result->count ?? 0;
    }
}
