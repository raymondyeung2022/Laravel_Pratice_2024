<?php

use App\Http\Controllers\StaffListController;
use Illuminate\Support\Facades\Route;

// ホームページ
Route::get('/', [StaffListController::class, 'index']);

// 問題1
Route::get('/question1', [StaffListController::class, 'question1']);

// 問題2
Route::get('/question2', [StaffListController::class, 'question2']);

// 問題3
Route::get('/question3', [StaffListController::class, 'question3']);

// 問題4
Route::get('/question4', [StaffListController::class, 'question4']);

// 問題5
Route::get('/question5', [StaffListController::class, 'question5']);

// 問題6
Route::get('/question6', [StaffListController::class, 'question6']);

// 問題7
Route::get('/question7', [StaffListController::class, 'question7']);

// 問題8
Route::get('/question8', [StaffListController::class, 'question8']);

// 職員詳細ページ
Route::get('/staff_detail/{staff_id}', [StaffListController::class, 'staff_detail']);

// 問題9
Route::get('/question9', [StaffListController::class, 'question9']);

// 問題10
Route::get('/question10', [StaffListController::class, 'question10']);

// 問題11
Route::get('/question11', [StaffListController::class, 'question11']);

// 問題12
Route::get('/question12', [StaffListController::class, 'question12']);

// 問題13
Route::get('/question13', [StaffListController::class, 'question13']);

// 問題14
Route::get('/question14', [StaffListController::class, 'question14']);

// 問題15
Route::get('/question15', [StaffListController::class, 'question15']);

// 問題16
Route::get('/question16', [StaffListController::class, 'question16']);
// TODO: StaffListControllerのquestion16_FormSubmittionを呼び出す
// メソッドを注意してください

// 問題17
Route::get('/question17', [StaffListController::class, 'question17']);

// 問題18
Route::get('/question18', [StaffListController::class, 'question18']);

// 問題19
Route::get('/question19', [StaffListController::class, 'question19']);

// 問題20
Route::get('/question20', [StaffListController::class, 'question20']);

// 問題21
Route::get('/question21', [StaffListController::class, 'question21']);

// 問題22
Route::get('/question22', [StaffListController::class, 'question22']);

// 問題23
Route::get('/question23', [StaffListController::class, 'question23']);
Route::post('/question23/submit', [StaffListController::class, 'question23_submittion']);

// 問題24
Route::get('/question24', [StaffListController::class, 'question24']);
Route::get('/question24/staff_search/{staff_id}', [StaffListController::class, 'staff_search']);

// 問題25
Route::get('/question25', [StaffListController::class, 'question25']);
Route::post('/question25/file_upload', [StaffListController::class, 'file_upload']);

// 問題26
Route::get('/question26', [StaffListController::class, 'question26']);

// 問題28
Route::get('/question27', [StaffListController::class, 'question27']);
