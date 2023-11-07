<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;

class TemplateType extends AbstractBaseType {
    
    protected $attributes = [
        'name' => 'Template',
        'description' => 'Template type'
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the template'
            ],

            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the template'
            ],

            'subject' => [
                'type' => Type::string(),
                'description' => 'The subject of the template'
            ],

            'body' => [
                'type' => Type::string(),
                'description' => 'The body of the template'
            ],
        ];
    }
}