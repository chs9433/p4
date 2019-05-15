<?php

use Illuminate\Database\Seeder;
use App\Submarket;

class SubmarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $submarkets=[
                            ['Carolina/Tennessee'],
                            ['Central Texas'],
                            ['Florida'],
                            ['Georgia/Alabama'],
                            ['Great Plains'],
                            ['HOUSTON/GULFCOAST'],
                            ['Illinois/Wisconsin'],
                            ['Kansas/Missouri'],
                            ['Michigan/Indiana/KY'],
                            ['Mountain'],
                            ['New England'],
                            ['New York Metro'],
                            ['NNO'],
                            ['Northern California/Nevada'],
                            ['OPW'],
                            ['Pacific Northwest'],
                            ['South Central'],
                            ['Southern California'],
                            ['SouthWest'],
                            ['Tri State'],
                            ['Upstate'],
                            ['Virginia'],
                            ['Washington/Baltimore']
                        ];

            $count=count($submarkets);

            foreach ($submarkets as $key => $submarketData)
            {
                $submarket = new Submarket();
                $submarket->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $submarket->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $submarket->name = strtoupper($submarketData[0]);
                $submarket->save();
                $count--;
            }
        }
    }
}
