@php
    if(DB::connection()->getPdo()) {
        echo "success! " . DB::connection()->getDatabaseName();
    }
@endphp