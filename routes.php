<?php

Route::post('/chunk-upload', 'Pensoft\Icp\Components\InternalRepository@chunkUpload')->middleware('web');
