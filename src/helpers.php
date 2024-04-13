<?php

use Yehlu\OpenAdmin\Facades\LineNotify;
use OpenAdmin\Admin\Facades\Admin;

if (! function_exists('lineNotifyBinderUrl')) {
    function lineNotifyBinderUrl()
    {
        return LineNotify::getBinderUrl();
    }
}

if (! function_exists('lineNotifyRevokeUrl')) {
    function lineNotifyRevokeUrl()
    {
        return LineNotify::getRevokeUrl();
    }
}

if (! function_exists('currentLineNotifyToken')) {
    function currentLineNotifyToken()
    {
        return LineNotify::currentLineNotifyToken();
    }
}
