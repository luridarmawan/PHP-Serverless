# PHP Serverless

Repositori ini merupakan contoh aplikasi PHP sederhana yang dipasang di Amazon Lambda Serverless menggunakan BASH Lambda Layers.

## Installation


### Prerequisites

Persiapkan akun AWS Lambda dengan menggunakan layer bash. ARN bisa menggunakan `arn:aws:lambda:[region]:744348701589:layer:bash:8`.

Sesuaikan `[region]` dengan region yang anda gunakan di AWS.



### Configuration

Buka file `handler.sh` dan ganti isi `PHP_APP` dengan aplikasi PHP CLI Anda.

```bash
# replace with your php cli application
PHP_APP=helloworld.php

```

### Deploy to server

1. Jalankan file `build.sh`, selanjutnya akan terbentuk file `Release.zip'.
2. Upload file `Release.zip` ini ke `function code` di Lambda Function.

