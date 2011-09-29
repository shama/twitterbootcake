
# Twitter Bootstrap CakePHP Theme

Super simple CakePHP theme using Twitter Bootstrap. Works with scaffolding. Really more of an example. ;)

## Config Options

Brand on Topbar:

    Configure::write('Bootstrap.topbar_title', 'Your Title Here');

Topbar Nav:

    Configure::write('Bootstrap.topbar', array(
        array('title' => 'Home', 'url' => '/'),
        array('title' => 'About', 'url' => '/about'),
    ));

Footer:

    Configure::write('Bootstrap.footer', 'Made by Your Name');

## Flash Messages

    $this->Session->setFlash('Oh no! An Error!', 'error');
    $this->Session->setFlash('Just saying whats up.', 'info');
    $this->Session->setFlash('You Win!', 'success');
    $this->Session->setFlash('Better be careful...', 'warning');

## Author

Kyle Robinson Young, [dontkry.com](http://dontkry.com)
