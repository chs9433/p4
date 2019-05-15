<?php

use Illuminate\Database\Seeder;
use App\Market;

class MarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $markets=
        [
            ['Great Lakes']
            ['HQ']
            ['North Central']
            ['North East']
            ['Pacific']
            ['South Central']
            ['South East']
        ];

        $count=count($markets);

        foreach ($markets as $key => $marketData)
        {
            $market = new Market();
            $market->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $market->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $market->name = $marketData[0];
            $market->save();
            $count--;
        }
    }
}
