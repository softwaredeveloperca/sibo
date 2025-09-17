<!-- Logo Header -->
<p align="center">
  <img src="https://www.vagusnerve.ca/sibomealplanner/logo.png" alt="SIBO Mealplan Logo" width="250"/>
</p>

# SIBO Mealplan

[Live App](https://www.vagusnerve.ca/sibomealplanner/#/)

---

## Table of Contents

- [Overview](#overview)  
- [Features](#features)  
- [Architecture & Technology Stack](#architecture--technology-stack)  
- [Getting Started](#getting-started)  
  - [Prerequisites](#prerequisites)  
  - [Installation](#installation)  
  - [Running Locally](#running-locally)  
- [Future Roadmap](#future-roadmap)  
- [Contributing](#contributing)  
- [License](#license)  

---

## Overview

SIBO Mealplan is a web application designed to simplify meal planning for people suffering from **Small Intestinal Bacterial Overgrowth (SIBO)**. It produces customized meal plans and recipes based on a user’s specific SIBO type (hydrogen, methane, mixed, or hydrogen sulfide), aimed at reducing symptoms and supporting gut healing. ([Devpost Project](https://devpost.com/software/sibo-mealplan))

The project was built during the **Bay2BayHacks 2025** hackathon.

---

## Features

- User selects their SIBO type: hydrogen / methane / mixed / hydrogen-sulfide.  
- Generates daily recipes tailored to the user’s SIBO type to help reduce symptoms.  
- Simplified food choices and meal plans, designed to support gut healing.  
- Responsive UI – works well in web browsers and in mobile-friendly layouts.  

---

## Architecture & Technology Stack

| Layer         | Technology                        |
|---------------|-----------------------------------|
| Frontend      | Vue.js + Quasar Framework         |
| Styling       | CSS / SCSS                        |
| Build Tools   | Node.js / npm or Yarn             |
| Config        | Quasar config, ESLint & Prettier  |

---

## Getting Started

These instructions will help you get a copy of the project running on your local machine for development and testing.

### Prerequisites

- Node.js (version ≥ 14.x or latest LTS recommended)  
- npm or Yarn  
- Quasar CLI (optional, for dev / build tooling)  

### Installation

```bash
git clone https://github.com/softwaredeveloperca/sibo.git
cd sibo
```

Install dependencies:

```bash
# Using Yarn
yarn

# Or using npm
npm install
```

### Running Locally

Start the development server:

```bash
quasar dev
```

This will launch the app locally with hot-reloading for frontend development.

---

## Future Roadmap

- Expand recipe database and diversity of meals.  
- Add more dietary filters (e.g. low-histamine, starch levels, etc.).  
- Support user accounts, saved meal plans, and custom recipe input.  
- Explore mobile app or offline capability.  

---

## Contributing

We welcome contributions from the community!

1. Fork the repo  
2. Create a feature/fix branch  
3. Follow existing style & config (linting, formatting etc.)  
4. Submit a PR with a clear description of your changes  

---

## License

TBD — Please specify the license (e.g. MIT, Apache 2.0, etc.).

---
