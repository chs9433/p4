<?php

use Illuminate\Database\Seeder;
use App\Site;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$sites=[
['48C5EDECF4C6D1562FEAD49C03EFA2CE','North East','Tri State','ABSECON 2','401 S. New York Road','Absecon','NJ','8201','39.450103','-74.47475','Shelter','Water Tower','2580* (drop arm gate)','Site directions:  From the Ben Franklin Bridge, take Route 42 South into the Atlantic City Expressway East. Continue to Exit 7N to the Garden State Parkway North.  Take Exit 40, continue to Route 30. Turn left onto Route 9, North. Turn left on E. Jimmie Leeds Road, (Route 561). The Seaview Marriott and the water tank are ahead on the left. Looking at the cell site we are on the right closest to the golf course.','NONE, Submeter located inside Seaview\'s generator room. Call Karl Schurr for access (609)839-9111','143837','','','694071','Landlord - Karl Schurr','Access restrictions not required','Required signage and barriers installed','Joshua','Blassmann','blassjo','Eng III Spec-Ntwk Field Assur','joshua.blassmann@verizonwireless.com','609.577.1003','',''],
['49D0DA8C771A50B1A50B95F341CD5CE7','North East','Tri State','AC TOLL PLAZA','Pleasantville Toll Plaza, AC Expy','Pleasantville','NJ','8201','39.391506','-74.510986','Shelter (Fiberbond)\'','Monopole','7011','FROM MAPLE SHADE MTSO take 295 SOUTH TO THE ATLANTIC CITY; Expressway South. Follow all the way to the Pleasantville Toll Both.; $.25, Last toll before Atlantic City. The Cell is next to the toll; plaza.;','None','143800','','','694140','Crown Castle','Access restrictions not required','Signage and barriers not required','Joshua','Blassmann','blassjo','Eng III Spec-Ntwk Field Assur','joshua.blassmann@verizonwireless.com','609.577.1003','',''],
['8F93490D071741C8C219E98BD50FA767','North East','Tri State','ACC CONVENTION','1 Miss America Way','Atlantic City','NJ','08401-4165','39.3637971','-74.4430997','In Building Site','In Building/DAS','','','','192984','','','651346','','Locked door(s) managed by building administrator','Signage and barriers not required','Joshua','Blassmann','blassjo','Eng III Spec-Ntwk Field Assur','joshua.blassmann@verizonwireless.com','609.577.1003','',''],
['BE92A60CE27530865364171CFC846300','North East','Tri State','ALLENTOWN NJ','Main St & High St','Allentown','NJ','8501','40.173166','-74.590711','Shelter','Water Tower','','FROM PHIL. TAKE I-95 NORTH INTO NJ. AT RT 1 I-95 BECOMES I-295 SOUTH.; FOLLOW TO I-195. TAKE I-195 EAST TO ALLENTOWN (RT 526) EXIT. GET OFF EXIT AND PROCEED.; RIGHT. FOLLOW THIS ROAD TO THE STOP SIGN. MAKE RIGHT AND PROCEED TO; FIRST LEFT; (RT 539). MAKE LEFT ONTO (RT 539) AND PROCEED APPROX 1/4 MILE. MAKE; RIGHT INTO; SCHOOL AREA UNTIL YOU SEE THE WATER TANK ON THE RIGHT.','NONE','143744','','','694375','','','','Robert','Keubler','keublro','Eng III Spec-Ntwk Field Assur','robert.keubler@verizonwireless.com','609-970-1398','',''],
['C562E8151B6EC26110E7A0A480F9F375','North East','Tri State','ALMONESSON','1370 Hurffville Rd.','Deptford Township','NJ','8096','39.81972222','-75.09458333','Cabinet','Stealth Structure - Flagpole','4891','From Walt Whitman Bridge  I-76 E  Entering New Jersey 5.0 mi Continue onto NJ-42 S 2.5 mi Take exit 12 toward NJ 41/Runnemede 0.2 mi. Make a right  Drive to NJ-41 S 4 min (1.6 mi) Make a right. The Home Depot comes up on your right. Drive behind the store and compound is in wooden fenced area.','None  All Ground Mount RRH\'S No tower crew needed for RRH replacement.','471205','1272607','','5067396','Diamond Tower Company','','','Daniel','Meakim','meakida','Eng IV Spec-Ntwk Field Assur','daniel.meakim@verizonwireless.com','856-430-2417','','']
];





    $count=count($sites);
    foreach ($sites as $key => $siteData) {
        $site = new Site();
        $site->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $site->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $site->site_meta_unid = $siteData[0];
        $site->market = $siteData[1];
        $site->submarket = $siteData[2];
        $site->name = $siteData[3];
        $site->address = $siteData[4];
        $site->city = $siteData[5];
        $site->state = $siteData[6];
        $site->zip_code = $siteData[7];
        $site->latitude_decimal = $siteData[8];
        $site->longitude_decimal = $siteData[9];
        $site->site_type = $siteData[10];
        $site->tower_type = $siteData[11];
        $site->gate_combo = $siteData[12];
        $site->direction = $siteData[13];
        $site->restriction = $siteData[14];
        $site->gl_location = $siteData[15];
        $site->asr_number = $siteData[16];
        $site->vzreg_frn = $siteData[17];
        $site->network_id = $siteData[18];
        $site->tower_manager = $siteData[19];
        $site->access_restrictions = $siteData[20];
        $site->signage_barriers = $siteData[21];
        $site->site_tech_first_name = $siteData[22];
        $site->site_tech_last_name = $siteData[23];
        $site->site_tech_uswin_id = $siteData[24];
        $site->site_tech_title = $siteData[25];
        $site->site_tech_email = $siteData[26];
        $site->site_tech_phone = $siteData[27];
        $site->site_tech_alt_phone = $siteData[28];
        $site->site_attachments = $siteData[29];
        $site->save();
        $count--;
    }
    }
}
