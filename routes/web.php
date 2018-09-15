<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MasterPartisipanController@index');


Route::get('/input-partisipan', 'PartisipanController@index');

Route::post('simpan-partisipan', 'PartisipanController@store');

Route::post('print-report', 'ReportController@getReportPerRw');