<?php

namespace Lucid\Domains\Http\Jobs;

use Lucid\Units\Job;
use Illuminate\Support\Arr;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\ResponseFactory;

class RespondWithJsonJob extends Job
{
    public function __construct(
        private readonly string $message = 'Ok',
        private readonly array $result = [],
        private readonly int $status = 200,
        private readonly array $headers = [],
        private readonly int $options = 0
    ) {
    }

    public function handle(ResponseFactory $factory): JsonResponse
    {
        return $factory->json(Arr::whereNotNull([
            'success' => true,
            'message' => $this->message,
            'result' => $this->result,
        ]), $this->status, $this->headers, $this->options);
    }
}
