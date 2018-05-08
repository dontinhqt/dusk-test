<?php

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/books', 'BooksController');
});
