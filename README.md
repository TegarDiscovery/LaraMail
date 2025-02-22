# 📧 Laravel 11 - Email Sending with MailPit & Docker Compose

Proyek ini adalah **Laravel 11** yang dikonfigurasi untuk **mengirim email** menggunakan **MailPit** sebagai mail catcher, berjalan dalam **Docker Compose**.

## 🚀 Fitur
- **Dockerized** Laravel 11 dengan MailPit sebagai SMTP lokal
- **Testing Email** tanpa koneksi internet
- **MailPit UI** untuk melihat email yang dikirim
- **Mudah dikonfigurasi** dengan `.env`

---

## 🛠️ Instalasi

### 1️. **Clone Repository**
```bash
git clone https://github.com/TegarDiscovery/LaraMail.git
cd laravel-mailpit
```
### 2️. **Jalankan Docker Compose**
```bash
docker-compose up -d
```
### 3️. **Install Laravel Dependencies**
```bash
composer install
php artisan key:generate
```
### 4. **Konfigurasi .env**
```
cp .env.example .env
```
```
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="test@example.com"
MAIL_FROM_NAME="Laravel App"
```
### 5. **Mengirim Email Tes**
```bash
php artisan serve
```
Kemudian jalankan:
```php
http://127.0.0.1:8000/test-email
```
### 6. **Cek Email di MailPit**
Buka di browser:
```bash
http://localhost:8025
```