<?php

Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
  //-----user device
  Route::group(['prefix' => 'device'], function () {
	  // access user
	  Route::group(['middleware' => ['auth.privilage:zxc123']], function () {
		  Route::post('', 'UserDeviceController@checkUserDevice');
	  });
  });

  //-----user
  Route::group(['prefix' => ''], function () {
		// access general
	  Route::group(['prefix' => 'profile'], function () {
		  Route::post('change-email', 'UserController@requestChangeEmail');
		  Route::post('setnew-email', 'UserController@setNewEmail');

			Route::get('download', 'UserController@downloadMyProfile');
			Route::get('', 'UserController@showMyProfile');
		  Route::post('', 'UserController@updateMyProfile');
			Route::get('{user_hash_id}', 'UserController@showProfile');
	  });

	  // access superadmin
		Route::get('', 'UserController@getUsers')->middleware('auth.privilage:qwe123');

		// access superadmin
	  Route::group(['middleware' => ['auth.privilage:qwe123']], function () {
		  Route::group(['prefix' => '{user_hash_id}'], function () {
			  Route::patch('status', 'UserController@activeDeactiveUser');
		  });
		});
	});
});