<p>SGVyZSBjaGVjayBkaWZmZXJlbnQgbWV0aG9kLCBqdXN0IGRvbid0IGdpdmUgdXA=</p>

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "SGFoYWhhIGNhdGNoIHlvdSBhZ2FpbiE=";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "VHJ5IHRoaXMgP2NtZD1scw==";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    echo "VG9sZCB5b3UgZG9uJ3QgdHJ5IGdpdmUgdXA=";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    echo "U3RpbCBjYW4ndCBnZXQgZmxhZ3M=";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    echo "RnVubnkgeWVhaCBjYW4ndCBnZXQgZmxhZw==";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    echo "Tm8gd2F5IG5vIGZsYWc=";
    echo "\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'HEAD') {
    echo "T2theSB0aGVyZSBubyBmbGFnIGFnYWlu";
    echo "\n";
}
?>
