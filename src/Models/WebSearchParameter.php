<?php

namespace AssistantEngine\OpenFunctions\WebSearch\Models;

class WebSearchParameter
{
    public string $type = 'web_search_preview';
    public string $searchContextSize = 'medium';
    public ?UserLocation $userLocation = null;
}