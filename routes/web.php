<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(MessageController::class)->group(function () {
    
    Route::get('/', 'index')->name('messages.index');
    
    Route::get('/messages', 'messages')->name('all.messages');
    
    Route::get('/agents', 'agents')->name('all.agents');
    
    Route::get('/replied', 'replied')->name('replied.messages');
    
    Route::get('/waiting', 'waiting')->name('unreplied.messages');
    
    Route::get('/reply{messageId}', 'reply')->name('reply.message');
    
    //Agent Response routing
    Route::post('/store/{messageId}', 'store')->name('reply.store');
    
    //customer messaging Routing
    Route::get('/message', 'showForm')->name('messaging.form');
    
    Route::post('/message/send', 'sendMessage')->name('send.message');
    
    //Mark message as Urgent 
    Route::post('/urgent/{id}', 'markAsUrgent')->name('mark.urgent');
    
    //Assign Agents
    Route::post('/assign/{id}', 'assignAgent')->name('assign.agent');

    // Get Messages Assign to Agent
    Route::get('/agent/messages/{agentId}', 'getAgentMessages')->name('agent.messages');

    
});