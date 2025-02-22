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
# Tutorial Mailpit docker x Laravel
```php
$ composer create-project laravel/laravel LaraMail "11.*"
$ code LaraMail
```
1️⃣ Setup Docker Compose

docker composer `docker-compose.yml` 
```php
version: '3.8'

services:
  mailpit:
    image: axllent/mailpit
    container_name: mailpit
    restart: unless-stopped
    ports:
      - "1025:1025" # SMTP
      - "8025:8025" # UI Web MailPit

```
👉 MailPit akan berjalan di **http://localhost:8025**  
👉 SMTP berjalan di **127.0.0.1:1025**

2️⃣ Konfigurasi Laravel agar menggunakan MailPit
Edit file `.env` Laravel agar email dikirim ke MailPit:
```php
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="test@example.com"
MAIL_FROM_NAME="Laravel App"
```

**3️⃣ Kirim Email Tes di Laravel**
```
php artisan serve
```
routes/web.php
```php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
	Mail::raw('Test email dari Laravel + MailPit', function ($msg) {
		$msg->to('test@example.com')->subject('Test Subject');
	});

	return 'Email sent!';
});
```
dan jalankan
```
http://127.0.0.1:8000/test-email
```
👉 **Cek email di browser:** `http://localhost:8025`

Selesai..

🔥 **MailPit adalah pilihan terbaik untuk testing email di Laravel secara offline!** 🚀