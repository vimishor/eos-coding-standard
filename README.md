# elementaryOS.org Coding Standard

This repository includes the [elementaryOS][1] coding standard definition for [PHP Codesniffer][2]. The
PHP_CodeSniffer standard definition may not be 100% accurate and/or up-to-date, therefore we recommend reading
"Coding Guidelines" page from our developer wiki.

## Installation

1. Install PHP CodeSniffer

```bash
$ pear install PHP_CodeSniffer
```

2. Copy, symlink or checkout this repository to a directory called eOS inside CodeSniffer Standards directory:

```bash
$ git clone https://github.com/vimishor/eos-coding-standard.git `pear config-get php_dir`/PHP/CodeSniffer/Standards/eOS
```

## Update

Assuming that you installed the standard by cloning the repository, you can update it by running:

```bash
$ cd `pear config-get php_dir`/PHP/CodeSniffer/Standards/eOS && git pull && cd -
```

## Usage

```bash
$ phpcs --standard=eOS path/to/code
```

[1]: http://elementaryos.org/
[2]: http://pear.php.net/PHP_CodeSniffer
