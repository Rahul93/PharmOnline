@extends('layouts.master')
<div class="wrapper">
    <div class="main-page">
        <ul class="clearfix tab">
            <li>
                <span class="user_toggle" data-type="login">Login</span>
            </li>
            <li>
                <span class="user_toggle" data-type="signup">Signup</span>
            </li>
        </ul>
        <div class="user_container" data-container="login" id="login_container">
            <div class="form-wrap">
                <label for="username">Username: </label>
                <input type="text" id="username">
            </div>
            <div class="form-wrap">
                <label for="password">Password: </label>
                <input type="password" id="password">
            </div>
            <span id="login_submit" class="btn">Login</span>
        </div>
        <div class="user_container hidden" data-container="signup" id="signup_container">
            <div class="form-wrap">
                <label for="signup_name">Name</label>
                <input type="text" id="signup_name">
            </div>
            <div class="form-wrap">
                <label for="signup_email">Email</label>
                <input type="text" id="signup_email">
            </div>
            <div class="form-wrap">
                <label for="signup_mobile">Mobile</label>
                <input type="number" id="signup_mobile">
            </div>
            <div class="form-wrap">
                <label for="signup_password">Password</label>
                <input type="password" id="signup_password">
            </div>
            <span id="signup_submit" class="btn">Signup</span>
        </div>
    </div> 
