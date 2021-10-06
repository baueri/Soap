<?php

declare(strict_types=1);

namespace RicorocksDigitalAgency\Soap\Contracts;

interface Client
{
    public function setHeaders(array $headers): static;

    public function call(string $method, mixed $body): mixed;

    public function getFunctions(): array;

    public function lastRequest(): ?string;

    public function lastResponse(): ?string;

    public function lastRequestHeaders(): ?string;

    public function lastResponseHeaders(): ?string;
}