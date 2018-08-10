# Bad Mailer

Bad Mailer is a transport driver for Laravel's Mailer that always returns an error, intended for testing.

## Installation

Install using Composer for development:

```
composer require --dev dengro-lead-management/bad-mailer
```

Optionally for non development environments can remove the `--dev` flag. Next if version is less than 5.5 add to Laravel providers inside `config/app.php`:

```
DenGroLeadManagement\BadMailer\BadMailerServiceProvider::class,
```

## Configuration

In the `.env` file set the mail driver to Bad Mailer:

```
MAIL_DRIVER=badmailer
```