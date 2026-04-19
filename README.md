# 🔷 OptiCore — Modern Business Consulting Landing Page

![HTML](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-Updated-blue)



A modern, responsive, single-page website for a business consulting firm. Built with pure HTML, CSS, and vanilla JavaScript — no frameworks, no dependencies.

🌐 **Live Demo:** [dia69-jpg.github.io/modern-business-landing-page](https://dia69-jpg.github.io/modern-business-landing-page/)

---

## 📸 Screenshots

### Hero

![screenshot1-hero](https://github.com/user-attachments/assets/aa1404ac-2b64-445f-9708-a7fe904e5b01)


### About
![screenshot2-about](https://github.com/user-attachments/assets/ed6955c1-f433-4911-9129-e1b332ead32e)


### Services
![screenshot3-services](https://github.com/user-attachments/assets/1163cc6c-ca17-4dc6-8325-f475814586d8)

### Process
![screenshot4-process](https://github.com/user-attachments/assets/050b27dd-d509-4329-a80d-4779749902f5)


### Clients & Testimonials
![screenshot5-clients](https://github.com/user-attachments/assets/4b688b73-b690-4876-9c8b-e57fb40c59bb)


### Contact Form
![screenshot6-contact](https://github.com/user-attachments/assets/3308b776-5f9f-4492-bf37-821d6b566e18)

---

## 🚀 Tech Stack

- Frontend: HTML5, CSS3, JavaScript
- Backend: PHP
- Database: MySQL
- Hosting: GitHub (frontend) + local/server backend

---

## ⚙️ Features

- 📱 Fully responsive modern UI
- 📬 Contact form with database storage
- 🔐 Admin login system
- 📊 Admin dashboard to manage messages
- 🗑️ Delete messages functionality
- ✨ Clean business consulting design

---

## 🧠 Backend System

- `contact.php` → saves form submissions to database
- `admin.php` → displays all messages
- `login.php` → simple admin authentication
- `delete.php` → removes messages from DB
- `config.php` → database connection

---

## 📁 Project Structure

```
modern-business-landing-page/
/OptiCore
├── index.php
├── style.css
├── secript.js
├── contact.php
├── admin.php
├── login.php
├── delete.php
├── config.php
└── database (MySQL: messages table)
├── screenshots/                    # Preview images
│   ├── screenshot1-hero.png
│   ├── screenshot2-about.png
│   ├── screenshot3-services.png
│   ├── screenshot4-process.png
│   ├── screenshot5-clients.png
│   └── screenshot6-contact.png
├── téléchargement (11).jpeg        # Hero section image
└── téléchargement (8).jpeg         # About section image
```

---

## 🗂️ Sections

| Section | Description |
|---------|-------------|
| **Hero** | Full-screen intro with CTA button and phone icon |
| **About** | Company overview with animated stats (250+ projects, 98% satisfaction…) |
| **Services** | 6-card grid covering core consulting services |
| **Process** | 4-step timeline: Discovery → Strategy → Execution → Growth |
| **Clients** | Client logos + 3 testimonial cards |
| **Contact** | Project inquiry form with success feedback |
| **Footer** | Links, socials, and contact info |

---

## 🚀 Getting Started

### Run locally

```bash
# 1. Clone the repo
git clone https://github.com/dia69-jpg/modern-business-landing-page.git

# 2. Open the project
cd modern-business-landing-page

# 3. Open index.html in your browser
# (or use VS Code Live Server for auto-reload)
```

No install, no build — just open and go.

---

## 🌐 Deployment (GitHub Pages)

This site is deployed via **GitHub Pages**.

To deploy your own fork:

1. Go to your repo → **Settings** → **Pages**
2. Under *Branch*, select `main` and `/ (root)`
3. Click **Save**
4. Your site will be live at:  
   `https://your-username.github.io/modern-business-landing-page/`

---

## ✏️ Customization Guide

| What to change | File | Where to look |
|----------------|------|---------------|
| Company name & logo | `index.html` | `.logo` elements |
| Hero headline & description | `index.html` | `.hero .content` |
| Services cards | `index.html` | `.services-grid` |
| About stats numbers | `index.html` | `.about-stats` |
| Colors & typography | `style.css` | `:root` CSS variables |
| Hero & About images | Root folder | Replace the `.jpeg` files |
| Form submission logic | `secript.js` | `contactForm` event listener |

---
## 🔐 Admin Access

- Username: AYAD  
- Password: (hidden for security)

---

## 🚀 Setup Instructions

1. Import database (MySQL)
2. Edit `config.php` with your DB credentials
3. Run project on XAMPP / localhost
4. Open `index.php`

---

## ⚠️ Notes

- Do NOT expose DB credentials on public hosting
- Improve security (prepared statements recommended)
- Add validation for production use

---

## 📦 External Resources

- [Google Fonts — Bebas Neue + Barlow](https://fonts.google.com/) *(via CDN)*
- No npm packages or JavaScript libraries used

---

## 👩‍💻 Author

**Aya DIOUANI**  
🐙 [@dia69-jpg](https://github.com/dia69-jpg)

---

## 📄 License

This project is open source under the [MIT License](LICENSE).

---

> *OptiCore — Empowering businesses to achieve their full potential.*
