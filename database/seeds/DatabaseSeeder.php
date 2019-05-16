<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #$this->call(UsersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        #$this->call(SubmarketsTableSeeder::class);
        $this->call(SitesTableSeeder::class);
        $this->call(AuditsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(ChecklistsTableSeeder::class);
        $this->call(ObservationsTableSeeder::class);
        $this->call(IssuesTableSeeder::class);
        $this->call(MeasurementsTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(HazardsTableSeeder::class);
        $this->call(UploadsTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
