<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminLogin()
    {
        //Login
            $info = ['email'=>'admin@admin.com','password'=>'admin123'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(200);        
        //When
            //Post Something
        //Then
            //Check it

    }

    public function testAdminWrongPass()
    {
        //Login
            $info = ['email'=>'admin@admin.com','password'=>'admin1231'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(401);        
        //When
            //Post Something
        //Then
            //Check it

    }

    public function testInstructorLogin()
    {
        //Login
            $info = ['email'=>'instructor@admin.com','password'=>'instructor123'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(200);        
        //When
            //Post Something
        //Then
            //Check it

    }

    public function testInstructorWrongPass()
    {
        //Login
            $info = ['email'=>'instructor@admin.com','password'=>'instructor1231'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(401);        
        //When
            //Post Something
        //Then
            //Check it

    }

    public function testStudentLogin()
    {
        //Login
            $info = ['email'=>'student@admin.com','password'=>'student123'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(200);        
        //When
            //Post Something
        //Then
            //Check it

    }

    public function testStudentWrongPass()
    {
        //Login
            $info = ['email'=>'student@admin.com','password'=>'student1231'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(401);        
        //When
            //Post Something
        //Then
            //Check it

    }


    public function testLoginUncompletedRequest()
    {
        //Login
            $info = ['email'=>'student@admin.com'];
            $response = $this->json('POST', '/api/login', $info) ->assertStatus(400);        
        //When
            //Post Something
        //Then
            //Check it

    }
}
