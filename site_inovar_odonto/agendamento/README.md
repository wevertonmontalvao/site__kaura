# Ajax Contact Form

A Simple Ajax Contact Form developed in PHP with HTML5 Form validation and pure JavaScript.

## Demo

View [demo here](http://www.pinceladasdaweb.com.br/blog/uploads/ajax-contact-form/).

## Download

You can download the latest version or checkout all the releases [here](https://github.com/pinceladasdaweb/Ajax-Contact-Form/releases).

## Requirements

* PHP >=5.3

## How to use?

Open the config.php [`config.php`](contact-form/config/config.php) file and fill with your informations.

```php
<?php

return [
    'subject' => [
        'prefix' => '[Contact Form]'
    ],
    'emails' => [
        'to'   => '', // Email to receive emails via the form.
        'from' => ''  // A valid email where the domain should be the same when the form is hosted.
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Your message has been sent successfully.',
        'validation' => [
            'emptyname'    => 'Name is required.',
            'emptyemail'   => 'Email is invalid.',
            'emptysubject' => 'Subject is required.',
            'emptymessage' => 'Message is required.'
        ]
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'    => 'Phone',
        'subject'  => 'Subject',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];
```

## Browser Support

![IE](https://raw.githubusercontent.com/alrra/browser-logos/master/internet-explorer/internet-explorer_48x48.png) | ![Chrome](https://raw.githubusercontent.com/alrra/browser-logos/master/chrome/chrome_48x48.png) | ![Firefox](https://raw.githubusercontent.com/alrra/browser-logos/master/firefox/firefox_48x48.png) | ![Opera](https://raw.githubusercontent.com/alrra/browser-logos/master/opera/opera_48x48.png) | ![Safari](https://raw.githubusercontent.com/alrra/browser-logos/master/safari/safari_48x48.png)
--- | --- | --- | --- | --- |
IE 9+ ✔ | Latest ✔ | Latest ✔ | Latest ✔ | Latest ✔ |

## Contributing

Check [CONTRIBUTING.md](CONTRIBUTING.md) for more information.

## History

Check [Releases](https://github.com/pinceladasdaweb/Simple-PHP-Contact-Form/releases) for detailed changelog.

## License

[MIT](LICENSE)

```php
<form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group" id="name-field">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="email-field">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="telefone-field">
                <label for="form-telefone" class="col-lg-2 control-label"><?php echo $config->get('fields.telefone'); ?></label>
                <div class="col-lg-10">
                    <input type="phone" class="form-control" id="form-telefone" name="form-telefone" placeholder="<?php echo $config->get('fields.telefone'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="melhor-dia-field">
                <label for="form-melhor-dia" class="col-lg-2 control-label"><?php echo $config->get('fields.melhor-dia'); ?></label>
                <div class="col-lg-10">
                    <select class="form-control" id="form-melhor-dia" name="form-melhor-dia" required>
                    <option>Selecione o melhor dia</option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                    <option value="sabado">Sabado</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="melhor-periodo-field">
                <label for="form-melhor-periodo" class="col-lg-2 control-label"><?php echo $config->get('fields.melhor-periodo'); ?></label>
                <div class="col-lg-10">
                    <select type="text" class="form-control" id="form-melhor-periodo" name="form-melhor-periodo"  required>
                    <option>Selecione o Periodo</option>
                    <option value="manha">Manha</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="especialidade-field">
                <label for="form-especialidade" class="col-lg-2 control-label"><?php echo $config->get('fields.especialidade'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-especialidade" name="form-especialidade" placeholder="<?php echo $config->get('fields.especialidade'); ?>" required>
                </div>
            </div>              
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
```