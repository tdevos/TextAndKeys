#TextAndKeys#

##How to##

In your `composer.json`

```
"require": {
    ...
    "FlashPanther/TextAndKeys" : "dev-master"
}
```

```
"repositories": [
    ...
    {
        "type": "vcs",
        "url": "https://github.com/FlashPanther/TextAndKeys"
    },
    {
        "type": "package",
        "package": {
            "name": "jquery/jquery",
            "version": "1.10.2",
            "dist": {
                "url": "http://code.jquery.com/jquery-1.10.2.js",
                "type": "file"
            }
        }
    }
]
```

```php
# app/AppKernel.php

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new FlashPanther\TextAndKeys\FlashPantherTextAndKeysBundle(),
        );
        // ...
    }
}
```

```yml
# app/config/config.yml

assetic:
    filters:
        lessphp:
             file: %kernel.root_dir%/../vendor/oyejorge/less.php/lessc.inc.php
             apply_to: "\.less$"
        cssrewrite: ~
braincrafted_bootstrap:
    less_filter: lessphp

twig:
    form:
        resources:
            - 'Flas:Form:fields.html.twig'

```

```html
<!-- app/Resources/views/layout.html.twig -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    {% stylesheets filter='cssrewrite'
        '%kernel.root_dir%/../vendor/twbs/bootstrap/less/bootstrap.less'
    %}
        <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />
    {% endstylesheets %}

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    {% include 'BraincraftedBootstrapBundle::ie8-support.html.twig' %}

</head>

<body>

{% block body %}{% endblock %}
{% javascripts
    '%kernel.root_dir%/../vendor/jquery/jquery/jquery-1.10.2.js'
    '%kernel.root_dir%/../vendor/twbs/bootstrap/js/*.js'
%}
    <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}

</body>
</html>
```