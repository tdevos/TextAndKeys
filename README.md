#TextAndKeys#

##How to##

In the "composer.json" of your project

```json
"require": {
    ...
    "FlashPanther/TextAndKeys" : "dev-master"
}
```

```json
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