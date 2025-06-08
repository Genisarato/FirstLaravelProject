# FirstLaravelProject

This is my first web project developed with **Laravel**, marking the beginning of my immersion in **PHP** and this powerful framework. As a fourth-year Computer Engineering student, this project serves as a foundation to apply my software architecture knowledge in a web development environment.

---

## 🚀 About the Project

The main goal of this project is a simple **To-Do List Management** application that allows for:

* **Viewing** existing tasks.
* **Adding** new tasks.
* **Marking** tasks as completed.
* **Deleting** tasks.

Through this project, I'm familiarizing myself with Laravel's fundamentals, including the **Model-View-Controller (MVC)** pattern, Eloquent ORM, database migrations, and the routing system.

---

## ✨ Key Technologies

* **PHP:** Backend programming language.
* **Laravel Framework:** Web development framework (version 10.x or 11.x).
* **MySQL / MariaDB:** Database management system (managed via XAMPP).
* **HTML, CSS:** For the user interface.
* **Composer:** Dependency manager.

---

## 🛠️ How to Run Locally

1.  **Clone the repository:** `git clone https://github.com/YourGitHubUsername/FirstLaravelProject.git`
2.  **Install dependencies:** `cd FirstLaravelProject && composer install`
3.  **Configure `.env`:** Copy `.env.example` to `.env` and adjust your database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` for MySQL/MariaDB in XAMPP). Run `php artisan key:generate`.
4.  **Run DB migrations:** `php artisan migrate` (ensure MySQL is running and the DB is created).
5.  **Start the server:** `php artisan serve`

Visit `http://127.0.0.1:8000` in your browser.
