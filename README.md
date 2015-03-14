# Copyrighter

Copyrighter displays the copyright symbol and the current year on your PHP website.

## Usage

You can use Copyrighter in your PHPs.

```php

use Copyrighter\Copyrighter;

$copyrighter = new Copyrighter();
$copyright = $copyrighter->getCopyright(); // $copyright variable now contains the goods. Go nuts.

```

...or you can use directly in your HTML templates. Saves time and money.

```html

    <footer>
        <p><?php Copyrighter::show(); ?> Vandelay Industries.</p>
    </footer>

```