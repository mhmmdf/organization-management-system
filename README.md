# Organization Management System - UKM Universitas Pamulang

A bilingual (English/Indonesian) informational website for student activity units (UKM) at Universitas Pamulang. Built with CodeIgniter 4.

## Features

- **Bilingual Support** — Full English and Indonesian language support with locale-based routing
- **Student Activity Units Directory** — Information about Dance, Taekwondo, Music, Basketball, and Table Tennis UKMs
- **Photo Gallery** — Image gallery with category filtering
- **Registration Form** — Student registration for UKM membership
- **Contact & Location** — Social media links and Google Maps integration
- **Responsive Design** — Mobile-friendly layout

## Requirements

- PHP 8.1 or higher
- MySQL 5.7+ (or compatible)
- Composer 2.x
- Required PHP extensions: `intl`, `mbstring`, `json`, `mysqlnd`

## Installation

```bash
# Clone the repository
git clone https://github.com/mhmmdf/organization-management-system.git

# Install dependencies
composer install

# Copy environment configuration
cp env .env

# Edit .env with your database credentials and base URL
# Example:
#   database.default.hostname = localhost
#   database.default.database = ukm_db
#   database.default.username = root
#   database.default.password = secret
#   app.baseURL = http://localhost:8080
```

## Usage

Point your web server to the `public/` directory. Available routes:

| Route | English | Indonesian |
|-------|---------|------------|
| `/en` or `/id` | Home | Beranda |
| `/en/gallery` or `/id/gallery` | Gallery | Galeri |
| `/en/register` or `/id/register` | Registration | Pendaftaran |
| `/en/contact` or `/id/contact` | Contact | Kontak |

## Development

```bash
# Run tests
composer test

# Code linting
composer lint

# Static analysis
composer analyze
```

## License

This project is open-sourced under the [MIT License](LICENSE).

## Author

- **Muhammad Fikri Arzyah** ([@mhmmdf](https://github.com/mhmmdf))
