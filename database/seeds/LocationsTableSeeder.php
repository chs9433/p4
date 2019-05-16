<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations=[
                    ['Great Lakes','Illinois/Wisconsin','Chicago'],
                    ['Great Lakes','Illinois/Wisconsin','Outer Illinois'],
                    ['Great Lakes','Michigan/Indiana/KY','Indiana'],
                    ['Great Lakes','Michigan/Indiana/KY','Indianapolis'],
                    ['Great Lakes','Michigan/Indiana/KY','Kentucky'],
                    ['Great Lakes','Michigan/Indiana/KY','Michigan'],
                    ['Great Lakes','OPW','Ohio'],
                    ['Great Lakes','OPW','OPW-EAST'],
                    ['HQ','NNO','NNO'],
                    ['North Central','Great Plains','GP - North'],
                    ['North Central','Great Plains','GP - South'],
                    ['North Central','Kansas/Missouri','Kansas Missouri'],
                    ['North Central','Mountain','Denver'],
                    ['North Central','Mountain','Idaho'],
                    ['North Central','Mountain','Montana'],
                    ['North Central','Mountain','Utah'],
                    ['North East','New England','New England'],
                    ['North East','New York Metro','New York'],
                    ['North East','Tri State','MAPLE SHADE'],
                    ['North East','Tri State','Northern New Jersey'],
                    ['North East','Tri State','PHILADELPHIA'],
                    ['North East','Tri State','PLYMOUTH MTG'],
                    ['North East','Tri State','WILMINGTON'],
                    ['North East','Upstate','Albany'],
                    ['North East','Upstate','Buffalo'],
                    ['North East','Upstate','HARRISBURG'],
                    ['North East','Upstate','PITTSTON'],
                    ['North East','Upstate','Rochester'],
                    ['North East','Upstate','Syracuse'],
                    ['North East','Washington/Baltimore','Washington/Baltimore'],
                    ['Pacific','Northern California/Nevada','COAST-BAY'],
                    ['Pacific','Northern California/Nevada','VALLEY-NEVADA'],
                    ['Pacific','Pacific Northwest','Alaska'],
                    ['Pacific','Pacific Northwest','Eugene'],
                    ['Pacific','Pacific Northwest','Hawaii'],
                    ['Pacific','Pacific Northwest','Portland'],
                    ['Pacific','Pacific Northwest','Seattle'],
                    ['Pacific','Pacific Northwest','Spokane'],
                    ['Pacific','Pacific Northwest','Tacoma'],
                    ['Pacific','Southern California','SO CAL MARKET'],
                    ['South Central','Central Texas','DFW'],
                    ['South Central','Central Texas','NLa-ETX'],
                    ['South Central','Central Texas','SOUTH TEXAS'],
                    ['South Central','Central Texas','West Texas'],
                    ['South Central','HOUSTON/GULFCOAST','GULFCOAST'],
                    ['South Central','HOUSTON/GULFCOAST','HOUSTON'],
                    ['South Central','South Central','Arkansas'],
                    ['South Central','South Central','Oklahoma'],
                    ['South Central','South Central','West Tennessee'],
                    ['South Central','SouthWest','Arizona'],
                    ['South Central','SouthWest','El Paso'],
                    ['South Central','SouthWest','Las Vegas'],
                    ['South Central','SouthWest','New Mexico'],
                    ['South East','Carolina/Tennessee','North Carolina'],
                    ['South East','Carolina/Tennessee','South Carolina'],
                    ['South East','Carolina/Tennessee','Tennessee'],
                    ['South East','Florida','FLORIDA'],
                    ['South East','Georgia/Alabama','ALABAMA'],
                    ['South East','Georgia/Alabama','GEORGIA'],
                    ['South East','Virginia','Virginia']
    ];

    $count=count($locations);

    foreach ($locations as $key => $locationData)
    {
        $location = new Location();
        $location->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->market = strtoupper($locationData[0]);
        $location->submarket = strtoupper($locationData[1]);
        $location->group = strtoupper($locationData[2]);
        $location->save();
        $count--;
    }
    }
    }
