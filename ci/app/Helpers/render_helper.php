<?php
    if ( ! function_exists('render'))
    {
        function render(string $name, array $data = [], array $options = [])
        {
            return view(
                'layout/layout',
                [
                    'wrapper' => view($name, $data, $options),
                ],
                $options
            );
        }
    }
?>