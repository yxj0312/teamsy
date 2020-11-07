<?php

namespace Tests\Feature;

use File;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TenantScopeTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function a_model_has_a_tenant_id_on_the_migration()
    {
        $now = now();
        $this->artisan('make:model Test -m');
        // find the migration file and check it has a tenant_id on it
        $filename = $now->year . '_' . $now->format('m') . '_' . $now->format('d') . '_' . $now->format('h') . $now->format('i') . $now->format('s')
            . '_create_tests_table.php';
        dump(database_path('migrations/' . $filename));
        dd(File::exists(database_path('migrations/' . $filename)));
        $this->assertTrue(File::exists(database_path('migrations/' . $filename)));

        // clean up
        //File::delete(database_path('migrations/' . $filename));
        //File::delete(app_path('Models/Test.php'));
    }


}
