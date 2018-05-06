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

Route::get('/', 'PagesController@Index');

Route::get('/about', 'PagesController@About');

Route::get('/rooms', 'PagesController@Rooms');

Route::get('/suites', 'PagesController@Suites');

Route::get('/reservation', 'PagesController@Reservation');

Route::get('/contactus', 'PagesController@Contact');

Route::post('/processContact', 'PagesController@ProcessContact')->name('proce');

Route::get('/room/{ID}', 'PagesController@BookRoom');

Route::get('/suite/{ID}', 'PagesController@BookSuite');

Route::get('/reservedRoom/{roomID}', 'PagesController@ReserveRoom');

Route::get('/reservedSuite/{suiteID}', 'PagesController@ReserveSuite');

Route::get('/admin', 'PagesController@AdminIndex');

Route::get('/signMeUp', 'PagesController@SignHimUp');

Route::post('/logMeIn', 'PagesController@LogHimIn');

Route::get('/createRoom', 'PagesController@DisplayCreateRoomForm');

Route::post('/createRoomForReal', 'PagesController@CreateRoom');

Route::get('/modifyRoom/{roomID}', 'PagesController@ModifyRoom');

Route::get('/deleteRoom/{roomID}', 'PagesController@DeleteRoom');

Route::post('/modifyTheRoomForReal/{roomID}', 'PagesController@ModifyTheRoomForReal');

Route::get('/admin/dashboard', 'PagesController@Dashboard');

Route::get('/Crud/{P1}/{P2}/{P3?}', 'PagesController@BigCrud');

Route::get('/Rooms/show', 'PagesController@DisplayRooms');

Route::get('/Suites/show', 'PagesController@DisplaySuites');

Route::get('/Guests/show', 'PagesController@DisplayGuests');

Route::get('/RoomBookings/show', 'PagesController@DisplayRoomBookings');

Route::get('/SuiteBookings/show', 'PagesController@DisplaySuiteBookings');




Route::get('/createSuite', 'PagesController@DisplayCreateSuiteForm');

Route::post('/createSuiteForReal', 'PagesController@CreateSuite');

Route::get('/modifySuite/{ruiteID}', 'PagesController@ModifySuite');

Route::get('/deleteSuite/{suiteID}', 'PagesController@DeleteSuite');

Route::post('/modifyTheSuiteForReal/{suiteID}', 'PagesController@ModifyTheSuiteForReal');




Route::get('/modifyGuest/{guestID}', 'PagesController@ModifyGuest');

Route::get('/deleteGuest/{guestID}', 'PagesController@DeleteGuest');

Route::post('/modifyTheGuestForReal/{guestID}', 'PagesController@ModifyTheGuestForReal');


Route::get('/RoomBookings/deleteRoomBooking/{id}', 'PagesController@DeleteRoomBookings');

Route::get('/SuiteBookings/deleteSuiteBooking/{id}', 'PagesController@DeleteSuiteBookings');

Route::get('/Logout', 'PagesController@Logout');

Route::get('/EditProfile', 'PagesController@EditProfile');

Route::post('/modifyTheProfileForReal/{userID}', 'PagesController@ModifyTheProfileForReal');

// Add confirmation route!