#TextAndKeys#

##How to##

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