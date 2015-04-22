<?php
return array(
    'router' => array(
        'routes' => array(
            'infra_project.rest.doctrine.new-table' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/new-table[/:new_table_id]',
                    'defaults' => array(
                        'controller' => 'infra_project\\V1\\Rest\\NewTable\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'infra_project.rest.doctrine.new-table',
        ),
    ),
    'zf-rest' => array(
        'infra_project\\V1\\Rest\\NewTable\\Controller' => array(
            'listener' => 'infra_project\\V1\\Rest\\NewTable\\NewTableResource',
            'route_name' => 'infra_project.rest.doctrine.new-table',
            'route_identifier_name' => 'new_table_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'new_table',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Db\\Entity\\NewTable',
            'collection_class' => 'infra_project\\V1\\Rest\\NewTable\\NewTableCollection',
            'service_name' => 'NewTable',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'infra_project\\V1\\Rest\\NewTable\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'infra_project\\V1\\Rest\\NewTable\\Controller' => array(
                0 => 'application/vnd.infra_project.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'infra_project\\V1\\Rest\\NewTable\\Controller' => array(
                0 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Db\\Entity\\NewTable' => array(
                'route_identifier_name' => 'new_table_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'infra_project.rest.doctrine.new-table',
                'hydrator' => 'infra_project\\V1\\Rest\\NewTable\\NewTableHydrator',
            ),
            'infra_project\\V1\\Rest\\NewTable\\NewTableCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'infra_project.rest.doctrine.new-table',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'infra_project\\V1\\Rest\\NewTable\\NewTableResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'infra_project\\V1\\Rest\\NewTable\\NewTableHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'infra_project\\V1\\Rest\\NewTable\\NewTableHydrator' => array(
            'entity_class' => 'Db\\Entity\\NewTable',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'infra_project\\V1\\Rest\\NewTable\\Controller' => array(
            'input_filter' => 'infra_project\\V1\\Rest\\NewTable\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'infra_project\\V1\\Rest\\NewTable\\Validator' => array(
            0 => array(
                'name' => 'nom',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => 45,
                        ),
                    ),
                ),
            ),
        ),
    ),
);
