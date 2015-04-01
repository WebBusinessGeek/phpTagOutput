<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    ini_set('short_open_tag', '1');
    ini_set('asp_tags', '1');

    $standardTagClass = new \project\StandardTagClass();

    $shortTagClass = new \project\ShortTagClass();

    $ASPTagClass = new \project\ASPTagClass();


    $standardTagClassOutput = 'StandardTagClass: ' . $standardTagClass->giveTagInfo();
    $shortTagClassOutput = 'ShortTagClass: ' . $shortTagClass->giveTagInfo();
    $ASPTagClassOutput = 'ASPTagClass: ' . $ASPTagClass->giveTagInfo();

    echo ($standardTagClassOutput .'<br/>' .
        $shortTagClassOutput . '<br/>'.
        $ASPTagClassOutput);

});
