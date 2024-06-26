<?php

namespace Lucid\Domains\Http\Jobs;

use Illuminate\Http\Response;
use Lucid\Units\Job;
use Illuminate\Routing\ResponseFactory;

class RespondWithViewJob extends Job
{
    public function __construct(
        private readonly string $template,
        private readonly array $data = [],
        private readonly int $status = 200,
        private readonly array $headers = []
    ){
    }

    public function handle(ResponseFactory $factory): Response
    {
        return $factory->view($this->template, $this->data, $this->status, $this->headers);
    }
}
