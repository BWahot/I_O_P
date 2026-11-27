# I_O_P

I_O_P is a small PHP prototype for an ICS Community website. It renders a Bootstrap-based home page and includes sign-up and sign-in form screens, shared page layouts, session-based form messages, and an SMTP email helper.

This is a work in progress, not a complete membership or authentication system. See [Current status and limitations](#current-status-and-limitations) before using it.

## Features in the repository

- A home page (`index.php`) with shared navigation, banner, and Bootstrap-styled content.
- Sign-up and sign-in pages (`signup.php` and `signin.php`).
- Sign-up input checks for name characters, email format, an allowed email-domain list, and a minimum password length.
- Session-backed messages and form values.
- A `SendMail` helper intended to send HTML email through SMTP.
- Locally stored Bootstrap CSS and JavaScript assets.

## Requirements

- PHP with session support.
- A PHP-capable web server, such as Apache with PHP enabled.
- PHPMailer and its Composer autoloader only if you intend to use the email helper.

No Composer manifest, database schema, or database connection implementation is included.

## Run locally

1. Put the repository in your web server's document root (for example, as `I_O_P` under Apache's `htdocs`).
2. Edit `conf.php` and set `$conf['site_url']` to the URL where you placed the project. The default is `http://localhost/I_O_P`.
3. Open that URL in a browser. Use the navigation links to view the sign-up and sign-in screens.

The database and SMTP values in `conf.php` are configuration placeholders. Replace them with appropriate local values before integrating those services, and do not commit real credentials.

## Project layout

| Path | Purpose |
| --- | --- |
| `index.php` | Home page entry point |
| `signup.php`, `signin.php` | Sign-up and sign-in page entry points |
| `login.php` | Separate, incomplete login example |
| `ClassAutoLoad.php` | Loads configuration, registers class autoloading, creates shared objects, and dispatches sign-up handling |
| `conf.php` | Session, site, database, SMTP, password-length, and allowed-domain settings |
| `Projects/authentication.php` | Sign-up request validation |
| `Forms/forms.php` | Sign-up and sign-in form markup |
| `Layouts/layouts.php` | Shared page layout and Bootstrap components |
| `Global/fxns.php` | Session-based message helpers |
| `Global/SendMail.php` | PHPMailer-based SMTP helper |
| `try_mail.php` | Email helper test script |
| `css/`, `js/` | Locally stored Bootstrap assets |

## Current status and limitations

- Sign-up validation is present, but account creation and persistence are not implemented. A valid submission currently prints the submitted name, email, and **plaintext password** to the page. Do not submit real credentials or expose this application publicly.
- The sign-in screen is only a form; it has no authentication handler. The separate `login.php` example is also incomplete.
- Although `conf.php` contains database settings, the application does not connect to a database.
- Email sending is not wired into registration. `try_mail.php` requires valid SMTP settings and PHPMailer; the helper's autoloader path uses `Pluggins` while the tracked dependency path is lowercase `pluggins`, which can prevent it from loading on case-sensitive systems.
- The configured email-domain allowlist and six-character minimum password length are prototype validation rules, not a substitute for production account-security controls.
