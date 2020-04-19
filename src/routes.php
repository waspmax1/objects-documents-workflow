<?php

Route::group(['namespace' => 'ObjectsDocumentsWorkflow'], function(){
    Route::resource('objects', 'ObjectsController');
});
