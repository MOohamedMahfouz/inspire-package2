<?php


\Illuminate\Support\Facades\Route::get('inspire', function(MOohamedMahfouz\Inspire\Inspire $inspire) {
    return $inspire->justDoIt();
});
