<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function sendResponse($result, $message) {
        $resp = ['success' => true, 'data'    => $result, 'message' => $message];
        return response()->json($resp, 200);
    }

    protected function sendError($error, $errorMessages = [], $code = 404) {
        $resp = ['success' => false, 'message' => $error];
        if(!empty($errorMessages)){
            $resp['data'] = $errorMessages;
        }
        return response()->json($resp, $code);
    }
}
