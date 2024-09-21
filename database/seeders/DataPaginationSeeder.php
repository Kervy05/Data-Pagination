<?php

namespace Database\Seeders;

use App\Models\DataPagination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPaginationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataPagination::factory(2000)->create();
    }
}
