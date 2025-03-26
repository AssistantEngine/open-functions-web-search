<?php

namespace AssistantEngine\OpenFunctions\WebSearch;

use AssistantEngine\OpenFunctions\Core\Contracts\AbstractOpenFunction;
use AssistantEngine\OpenFunctions\WebSearch\Models\WebSearchParameter;

class WebSearchTool extends AbstractOpenFunction
{
    private WebSearchParameter $parameter;

    public function __construct(?WebSearchParameter $parameter = null)
    {
        if (!$parameter) {
            $parameter = new WebSearchParameter();
        }

        $this->parameter = $parameter;
    }

    public function asCompletion(): array
    {
        throw new \Exception('WebSearchTool: Completion is not supported.');
    }

    public function generateFunctionDefinitions(): array
    {
        $result = [
            'type' => $this->parameter->type,
            'search_context_size' => $this->parameter->searchContextSize,
        ];

        if ($this->parameter->userLocation) {
            $result['user_location'] = $this->parameter->userLocation->toArray();
        }

        return $result;
    }
}