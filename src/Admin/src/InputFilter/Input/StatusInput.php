<?php

declare(strict_types=1);

namespace Api\Admin\InputFilter\Input;

use Api\Admin\Entity\Admin;
use Api\App\Message;
use Laminas\Filter\StringTrim;
use Laminas\Filter\StripTags;
use Laminas\InputFilter\Input;
use Laminas\Validator\InArray;

class StatusInput extends Input
{
    public function __construct(string $name = null, bool $isRequired = true)
    {
        parent::__construct($name);

        $this->setRequired($isRequired);

        $this->getFilterChain()
            ->attachByName(StringTrim::class)
            ->attachByName(StripTags::class);

        $this->getValidatorChain()
            ->attachByName(InArray::class, [
                'haystack' => Admin::STATUSES,
                'message' => sprintf(Message::INVALID_VALUE, 'status'),
            ], true);
    }
}
