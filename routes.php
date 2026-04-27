<?php

use Pensoft\Icp\Components\InternalRepository;

Route::post('/chunk-upload', [InternalRepository::class, 'chunkUpload'])->middleware('web');
