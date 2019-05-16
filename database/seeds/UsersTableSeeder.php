<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=
        [
            ['NORTH EAST','TRI STATE',date('2019-05-13'),date('2019-05-17'),'Christopher Sheppard','David Weinberg','Cory Kihlstrom','Jeff McCook','WIP'],
            ['NORTH EAST','TRI STATE',date('2019-05-20'),date('2019-05-24'),'Christopher Sheppard','David Weinberg','Cory Kihlstrom','Jeff McCook','PLAN']
        ];

        $count=count($users);

        foreach ($audits as $key => $auditData)
        {
            # Find that author in the authors table
            $location_id = Location::where('submarket', '=', strtoupper($auditData[1]))->pluck('id')->first();

            $audit = new Audit();
            $audit->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $audit->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $audit->name='AUDIT-'.strtoupper($auditData[1]).'-'.$auditData[2];
            $audit->location_id = $location_id;
            $audit->market = strtoupper($auditData[0]);
            $audit->submarket = strtoupper($auditData[1]);
            $audit->audit_start_date = $auditData[2];
            $audit->audit_end_date = $auditData[3];
            $audit->lead_auditor = $auditData[4];
            $audit->guest_auditor = $auditData[5];
            $audit->rfe_sme = $auditData[6];
            $audit->ehs_sme = $auditData[7];
            $audit->audit_status = $auditData[8];
            $audit->save();
            $count--;
        }
    }
    }
