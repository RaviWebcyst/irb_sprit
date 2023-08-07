<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\package;

class packageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
               'level'=>1,
               'amount'=>1500,
                'percentage'=>11,
            ],
            [
                'level'=>2,
                'amount'=>3000,
                 'percentage'=>13,
            ],
            [
                'level'=>3,
                'amount'=>9000,
                 'percentage'=>15,
            ],
            [
                'level'=>4,
                'amount'=>21000,
                 'percentage'=>17,
            ],
            [
                'level'=>5,
                'amount'=>54000,
                 'percentage'=>19,
            ],
            [
                'level'=>6,
                'amount'=>150000,
                 'percentage'=>21,
            ],
            [
                'level'=>7,
                'amount'=>360000,
                 'percentage'=>22,
            ],
            [
                'level'=>8,
                'amount'=>750000,
                 'percentage'=>23,
            ],
            [
                'level'=>9,
                'amount'=>1800000,
                 'percentage'=>24,
            ],
            [
                'level'=>10,
                'amount'=>4500000,
                 'percentage'=>25,
            ],
            [
                'level'=>11,
                'amount'=>10000000,
                 'percentage'=>26,
            ],
            [
                'level'=>12,
                'amount'=>25000000,
                 'percentage'=>27,
            ],
        ];

        foreach ($packages as $key => $value) {
            package::create($value);
        }
    }
}
