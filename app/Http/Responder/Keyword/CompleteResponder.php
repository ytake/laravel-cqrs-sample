<?php
declare(strict_types=1);

namespace App\Http\Responder\Keyword;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;

final class CompleteResponder
{
    /**
     * @param Factory $view
     */
    public function __construct(
        private Factory $view
    ) {
    }

    /**
     * @return Response
     */
    public function redirectToForm(): Response
    {
        return new Response(
            $this->view->make('keyword.complete'),
            Response::HTTP_OK
        );
    }
}
