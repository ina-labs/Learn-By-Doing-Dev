<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $info = ['email'=>'admin21@admin.com','password'=>'admin123','password_confirmation'=>'admin123','name'=>'testuser'];
        $response = $this->json('POST', '/api/register', $info) ->assertStatus(200);       
    }

    public function testRegisterEmailExist()
    {
        $info = ['email'=>'admin21@admin.com','password'=>'admin123','password_confirmation'=>'admin123','name'=>'testuser'];
        $response = $this->json('POST', '/api/register', $info) ->assertStatus(400);       
    }

    public function testRegisterUncompletedRequest()
    {
        $info = ['email'=>'admin213@admin.com','password'=>'admin123','name'=>'testuser'];
        $response = $this->json('POST', '/api/register', $info) ->assertStatus(400);       
    }


}
