# NOTICE

I am no longer supporting this project. There are a lot of other people doing this better and it is so simple to implement Twitter Bootstrap into CakePHP... so I say meh. Go to one of these other fine establishments:

**[https://github.com/loadsys/twitter-bootstrap-helper](https://github.com/loadsys/twitter-bootstrap-helper)**

[https://github.com/mtkocak/Cakephp-Bootstrappifier](https://github.com/mtkocak/Cakephp-Bootstrappifier)

[https://github.com/slywalker/TwitterBootstrap](https://github.com/slywalker/TwitterBootstrap)

[https://github.com/milds/TbsSkell](https://github.com/milds/TbsSkell)



[http://cakepackages.com/packages/index/query:twitter](http://cakepackages.com/packages/index/query:twitter)

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
