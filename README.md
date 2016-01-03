# Scabbia2 Testing Component

[This component](https://github.com/eserozvataf/scabbia2-testing) provides a code testing framework and environment. Simply execute `./vendor/bin/scabbia scabbia:testing:test` to start unit tests.

[![Build Status](https://travis-ci.org/eserozvataf/scabbia2-testing.png?branch=master)](https://travis-ci.org/eserozvataf/scabbia2-testing)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/eserozvataf/scabbia2-testing/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/eserozvataf/scabbia2-testing/?branch=master)
[![Total Downloads](https://poser.pugx.org/eserozvataf/scabbia2-testing/downloads.png)](https://packagist.org/packages/eserozvataf/scabbia2-testing)
[![Latest Stable Version](https://poser.pugx.org/eserozvataf/scabbia2-testing/v/stable)](https://packagist.org/packages/eserozvataf/scabbia2-testing)
[![Latest Unstable Version](https://poser.pugx.org/eserozvataf/scabbia2-testing/v/unstable)](https://packagist.org/packages/eserozvataf/scabbia2-testing)
[![Documentation Status](https://readthedocs.org/projects/scabbia2-documentation/badge/?version=latest)](https://readthedocs.org/projects/scabbia2-documentation)

## Usage

### Writing a Test Fixture

```php
namespace MyProject\Tests;
use Scabbia\Yaml\Parser;

use Scabbia\Testing\UnitTestFixture;

class MyTest extends UnitTestFixture {
    protected $parser;

    protected function setUp() {
        $this->parser = new Parser();
    }

    protected function tearDown() {
        $this->parser = null;
    }

    public function testCase1() {
        $this->assertEquals('a', 'a');
    }

    public function testCase2() {
        $this->expectException('Scabbia\\Yaml\\ParseException');

        $this->parser->parse('/&afasda:sd|_*a');
    }
}
```

## Links
- [List of All Scabbia2 Components](https://github.com/eserozvataf/scabbia2)
- [Documentation](https://readthedocs.org/projects/scabbia2-documentation)
- [Twitter](https://twitter.com/eserozvataf)
- [Contributor List](contributors.md)
- [License Information](LICENSE)


## Contributing
It is publicly open for any contribution. Bugfixes, new features and extra modules are welcome. All contributions should be filed on the [eserozvataf/scabbia2-testing](https://github.com/eserozvataf/scabbia2-testing) repository.

* To contribute to code: Fork the repo, push your changes to your fork, and submit a pull request.
* To report a bug: If something does not work, please report it using GitHub issues.
* To support: [![Donate](https://img.shields.io/gratipay/eserozvataf.svg)](https://gratipay.com/eserozvataf/)
