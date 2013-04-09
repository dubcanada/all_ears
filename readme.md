All Ears Everyone!
====

Very simple event listener/caller based on
[http://stackoverflow.com/a/9255855/150062](http://stackoverflow.com/a/9255855/150062)

### Subscribing to an event ###
    Event::listen('user.login', function($user)
    {
        $user->last_login = new DateTime;

        $user->save();
    });


### Firing an event ###
    $event = Event::fire('user.login', array($user));