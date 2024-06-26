<?php

namespace Lucid\Domains\Http\Jobs;

use Lucid\Units\Job;
use Illuminate\Support\Arr;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\ResponseFactory;

class RespondWithJsonErrorJob extends Job
{
    public function __construct(
        private readonly string $message = 'An error occurred',
        private readonly array $data = [],
        private readonly int $status = 500,
        private readonly array $headers = [],
        private readonly int $options = 0
    ) {
    }

    public function handle(ResponseFactory $factory): JsonResponse
    {
        return $factory->json(Arr::whereNotNull([
            'success' => false,
            'message' => $this->message,
            'errors' => $this->data,
        ]), $this->status, $this->headers, $this->options);
    }
}
