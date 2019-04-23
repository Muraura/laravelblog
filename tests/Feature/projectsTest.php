<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class projectsTest extends TestCase
{

    use WithFaker,RefreshDatabase;
    
    
    /** @test */
    public function a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $attributes = [
            'projects_name' =>'Sample Project',
            'project_description' =>'Sample description'
        ];
        $this->post('/projects',$attributes);
        $this->assertDatabaseHas('projects',$attributes);

    }
}
