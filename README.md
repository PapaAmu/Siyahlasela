# Siyahlasela Christian Movement Website

A modern Laravel-based website for Siyahlasela Christian Movement (SCM) — a united network of churches and Christian leaders dedicated to bringing hope, healing, and transformation through community programs such as night prayers, crusades, youth empowerment, and soul-winning initiatives.

---

## Table of Contents

* [About](#about)
* [Features](#features)
* [Installation](#installation)
* [Usage](#usage)
* [Contributing](#contributing)
* [License](#license)
* [Contact](#contact)

---

## About

Siyahlasela is a non-profit Christian organization focused on community outreach and spiritual growth. This website is built with Laravel 12, Tailwind CSS, and Filament Admin Panel for backend management.

The platform supports:

* Public pages for programs, events, membership, and contact
* User registration and membership management via Filament
* Admin panel for managing content and members
* Responsive and accessible design

---

## Features

* Fully responsive UI using Tailwind CSS
* Secure user authentication and admin panel powered by Filament
* Dynamic program and event listings
* Membership registration with backend approval workflow
* Customizable site content and settings via admin dashboard
* Smooth mobile navigation and modern UI components
* Docker + Laravel Sail setup for easy local development

---

## Installation

### Prerequisites

* PHP 8.1 or higher
* Composer
* MySQL or compatible database
* Node.js and npm
* Docker
* Sail (Laravel's Docker environment)

### Setup Steps

1. Clone the repo:

   ```bash
   git clone git@github.com:PapaAmu/Siyahlasela.git
   cd Siyahlasela
   ```

2. Copy the example environment file:

   ```bash
   cp .env.example .env
   ```

3. Start the Docker containers with Sail:

   ```bash
   ./vendor/bin/sail up -d
   ```

4. Install dependencies:

   ```bash
   ./vendor/bin/sail composer install
   ./vendor/bin/sail npm install
   ./vendor/bin/sail npm run dev
   ```

5. Generate the application key:

   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. Run migrations and seed database:

   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```

7. Access the site at [http://localhost](http://localhost)

---

## Usage

* Visit the public site to explore programs, events, and membership options.
* Admin users can log in via `/admin` to manage content and users using Filament.
* Use the registration form for new membership applications.

---

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check [issues page](https://github.com/PapaAmu/Siyahlasela/issues) if you want to contribute.

---

## License


This project is the intellectual property of Realnet Web Solutions.  
All rights reserved. Unauthorized copying, distribution, or modification is strictly prohibited without prior written consent.


---

## Contact

For any inquiries or support, please contact:
**Themba Lukhele**
Email: [lukhele@realnet-web.co.za](mailto:lukhele@realnet-web.co.za)
GitHub: [PapaAmu](https://github.com/PapaAmu)

---

*Thank you for supporting Siyahlasela Christian Movement!*
