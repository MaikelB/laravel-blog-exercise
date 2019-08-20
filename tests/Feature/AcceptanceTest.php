<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcceptanceTest extends TestCase
{   
    /**
     * A basic test.
     *
     * @return void
     */
    public function testViewPostsTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testAddPostsTest()
    {
        $response = $this->withHeaders([
                                    'postTitle' => 'Title1',
                                    'postContent' => 'Content1'])->get('/posts/new');

        $response->assertStatus(200);
    }

    /**
     * A basic test.
     *
     * @return void
     */
    public function testDeletePostsTest()
    {
        $create = $this->withHeaders([
            'postTitle' => 'Title1',
            'postContent' => 'Content1'])->get('/posts/new');
        
        $response = $this->withHeaders([
            'id' => '1'])->get('/posts/delete/1');
        $response->assertStatus(200);
    }
}
