<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        $statusCode = $this->isHttpException($e) ? $e->getStatusCode() : 400;

        if ($e instanceof ValidationException && $request->wantsJson()) {
            $messages = $e->validator->errors()->all();
            $message = array_shift($messages);
            if (App::isLocale('ar')) {
                if ($additional = count($messages)) {
                    $pluralized = $additional === 1 ? __('خطأ') : __('أخطاء');
                    $message .= __(" (و :additional :pluralized إضافية)", compact('additional', 'pluralized'));
                }
                return response()->json(['message' => $message, 'errors' => $e->errors()], $statusCode);
            }
        }
        return parent::render($request, $e);
    }
}
