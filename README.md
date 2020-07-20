<p align="center">
<a href="https://github.com/webkinder/github-actions"><img src="https://img.shields.io/github/license/webkinder/wp-cli-command-starter.svg" alt="Licence"></a>
<a href="https://github.com/webkinder/github-actions"><img src="https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square" alt="PRs"></a>
</p>


<center>
<a href="https://webkinder.ch">
<img src="https://www.webkinder.ch/static/webkinder-banner.png" alt="WebKinder" />
</a>
</center>

# WP CLI Starter Command
This is a starter repository to create a new WP CLI Command. Adjust to your needs to create your WP CLI Command.


## Installation (Adjust the links here. This package is not meant to be installed as it does not do anything useful and is only a starting point for development).

### Via WP-CLI Package Manager (requires wp-cli >= 0.23)
```bash
wp package install https://github.com/webkinder/wp-cli-command-starter
```
If you run into memory issues when installing the package, it's a known WP-CLI issue. [Check this out for a workaround](https://make.wordpress.org/cli/handbook/common-issues/#php-fatal-error-allowed-memory-size-of-999999-bytes-exhausted-tried-to-allocate-99-bytes).

### Installing as a plugin
Clone this repo onto `plugins/` folder, run `composer install` to fetch dependencies and activate the plugin.

## Commands
Just outputs information about the creators
```bash
wp cli starter info
```

Do something else here with this command.
```bash
wp cli starter doSomething
```

## Developing
Please add PHP Doc Blocks to all methods you implement. This will improve the ease of usage for the command as these information will be used by WP CLI when running `wp cli --help`. 
Documentation for documenting can be found [on the WordPress Handbook](https://make.wordpress.org/cli/handbook/references/documentation-standards/).

## Contributing

Please read [CONTRIBUTING.md](https://github.com/webkinder/wp-cli-command-starter/blob/master/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

* **Pascal Knecht** - https://github.com/pascalknecht

See also the list of [contributors](https://github.com/webkinder/wp-cli-command-starter/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
