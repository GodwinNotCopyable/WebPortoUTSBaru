# Portofolio Godwin

A personal portfolio web application built with **Laravel 12**, **Tailwind CSS**, and **Vite**.

---

## ⚙️ Prerequisites

Make sure you have the following installed before getting started:

- PHP 8.2+
- Composer
- Node.js & npm

You can verify by running:
```bash
php -v
composer -v
node -v
npm -v
```

---

## 🔧 First Time Setup (run once after cloning)

Open a terminal, navigate to the project folder, then run these commands **in order**:

```powershell
# 1. Install PHP dependencies
composer install

# 2. Create the environment file
copy .env.example .env

# 3. Generate the application key
php artisan key:generate

# 4. Create the SQLite database file
New-Item -ItemType File -Path database\database.sqlite -Force

# 5. Run database migrations
php artisan migrate

# 6. Install Node.js dependencies
npm install

# 7. Seed the database with portfolio data
php artisan db:seed
```

---

## ▶️ Running the App (for development)

### Option A — One Command (Recommended)

Run everything in a single terminal:

```bash
composer run dev
```

This starts three services simultaneously (color-coded):
- 🔵 **Laravel server** — `http://localhost:8000`
- 🟣 **Queue worker**
- 🟠 **Vite** (CSS/JS hot reload)

> **Windows users:** The `pcntl` PHP extension required by Laravel Pail is Linux-only, so it has been removed from the dev command for Windows compatibility.

### Option B — Two Separate Terminals

| Terminal | Command | Purpose |
|---|---|---|
| **Terminal 1** | `php artisan serve` | Laravel backend at `http://localhost:8000` |
| **Terminal 2** | `npm run dev` | Vite frontend (hot reload) |

---

## 🌐 Open in Browser

Once running, open: **http://localhost:8000**

---

## 🗄️ Database

This project uses **SQLite** by default — no separate database server (like MySQL or Laragon) is needed.  
The database file is located at `database/database.sqlite`.

To re-seed the database at any time:
```bash
php artisan db:seed
```

To wipe and rebuild from scratch:
```bash
php artisan migrate:fresh --seed
```

---

## 🧪 Running Tests

```bash
composer run test
```
