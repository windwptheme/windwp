# WindWP — AI-First Tailwind Framework Theme

<p align="center">
  <img src="screenshot.png" alt="WindWP Screenshot" width="600">
</p>

<p align="center">
  <strong>🚀 Minimalist, lightning-fast WordPress FSE theme built with Tailwind CSS.</strong><br>
  Optimized for AI coding assistants like Cursor, Copilot, and Claude.
</p>

<p align="center">
  <a href="#-features">Features</a> •
  <a href="#-quick-start">Quick Start</a> •
  <a href="#-installation">Installation</a> •
  <a href="#-development">Development</a> •
  <a href="#-block-patterns">Patterns</a> •
  <a href="#-woocommerce">WooCommerce</a> •
  <a href="#-documentation">Documentation</a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/WordPress-6.0+-blue?logo=wordpress" alt="WordPress 6.0+">
  <img src="https://img.shields.io/badge/PHP-8.0+-purple?logo=php" alt="PHP 8.0+">
  <img src="https://img.shields.io/badge/Tailwind-3.4-38bdf8?logo=tailwindcss" alt="Tailwind 3.4">
  <img src="https://img.shields.io/badge/License-GPL--2.0-green" alt="License GPL-2.0">
</p>

---

## ✨ Features

| Feature | Description |
|---------|-------------|
| 🤖 **AI-First Design** | Clean, well-structured codebase optimized for AI coding assistants |
| ⚡ **Lightning Fast** | Minimal footprint, optimized Tailwind CSS, no bloat |
| 🎨 **Tailwind CSS 3.4** | Utility-first styling with custom components |
| 📦 **Full Site Editing** | Native WordPress FSE with block patterns |
| 🛒 **WooCommerce Ready** | Premium shop, cart, checkout styles |
| 🌙 **Dark Mode** | Built-in dark/light mode toggle |
| 🧩 **10+ Block Patterns** | Professional, ready-to-use sections |
| 📱 **Fully Responsive** | Mobile-first design approach |
| ♿ **Accessible** | WCAG 2.1 compliant |
| 🔧 **Developer Friendly** | Vite build, hot reload, modern tooling |

---

## ⚡ Quick Start

```bash
# 1. Clone the theme
cd wp-content/themes/
git clone https://github.com/your-repo/windwp.git
cd windwp

# 2. Install dependencies
npm install

# 3. Build CSS
npm run build

# 4. Activate theme in WordPress admin
# 5. Start developing
npm run dev
```

That's it! Your theme is ready.

---

## 📋 Requirements

| Requirement | Version |
|-------------|---------|
| WordPress | 6.0+ |
| PHP | 8.0+ |
| Node.js | 18+ |
| npm | 9+ |

---

## 🚀 Installation

### Option 1: Download Release

1. Download the latest release from [GitHub Releases](https://github.com/your-repo/windwp/releases)
2. Upload to `wp-content/themes/`
3. Activate the theme in WordPress admin

### Option 2: Clone Repository

```bash
cd wp-content/themes/
git clone https://github.com/your-repo/windwp.git
cd windwp
npm install
npm run build
```

### Option 3: Development Setup

```bash
# Clone with full git history
git clone https://github.com/your-repo/windwp.git
cd windwp

# Install all dependencies
npm install

# Start development server (with hot reload)
npm run dev

# Build for production (creates optimized style.css)
npm run build
```

---

## 🛠 Development

### Commands

| Command | Description |
|---------|-------------|
| `npm run dev` | Start Vite dev server with hot reload |
| `npm run build` | Build optimized CSS for production |
| `npm run preview` | Preview production build |

### Project Structure

```
windwp/
├── 📁 assets/              # Compiled JS assets
├── 📁 inc/                 # PHP includes
│   ├── hooks.php           # Custom theme hooks
│   ├── dark-mode.php       # Dark mode functionality
│   └── 📁 woocommerce/     # WooCommerce integration
│       ├── setup.php
│       ├── template-hooks.php
│       ├── mini-cart.php
│       └── breadcrumbs.php
├── 📁 parts/               # Template parts (HTML)
│   ├── header.html
│   └── footer.html
├── 📁 patterns/            # Block patterns (PHP)
│   ├── hero.php
│   ├── why-windwp.php
│   ├── cta.php
│   ├── pricing.php
│   ├── testimonials.php
│   ├── faq.php
│   ├── team.php
│   ├── newsletter.php
│   └── footer-section.php
├── 📁 src/                 # Source files
│   ├── main.js             # JS entry point
│   └── styles.css          # Tailwind CSS source
├── 📁 templates/           # FSE templates (HTML)
│   ├── front-page.html
│   ├── index.html
│   ├── page.html
│   ├── single.html
│   ├── archive.html
│   ├── search.html
│   └── 404.html
├── 📁 woocommerce/         # WooCommerce templates
├── 📄 functions.php        # Theme functions
├── 📄 style.css            # Compiled CSS (output)
├── 📄 theme.json           # Block editor settings
├── 📄 tailwind.config.js   # Tailwind configuration
├── 📄 cursor-rules.md      # AI coding assistant rules
└── 📄 README.md            # This file
```

---

## 🧩 Block Patterns

WindWP includes professional block patterns:

| Pattern | Slug | Description |
|---------|------|-------------|
| **Hero** | `windwp/hero` | Landing page hero with gradient buttons |
| **Why WindWP** | `windwp/why-windwp` | Features grid with glassmorphism cards |
| **CTA** | `windwp/cta` | Call-to-action section |
| **Pricing** | `windwp/pricing` | Three-tier pricing table |
| **Testimonials** | `windwp/testimonials` | Customer reviews grid |
| **FAQ** | `windwp/faq` | Accordion FAQ with Alpine.js |
| **Team** | `windwp/team` | Team members grid |
| **Newsletter** | `windwp/newsletter` | Email subscription form |
| **Footer** | `windwp/footer-section` | Full footer with navigation |

### Using Patterns

1. Open the Site Editor (Appearance → Editor)
2. Click the **+** button to add a block
3. Search for "WindWP" or pattern name
4. Insert the pattern
5. Edit text directly in the editor

### Pattern Editability

WindWP patterns use a hybrid approach:
- **Headings & Paragraphs** — Fully editable in Gutenberg
- **Complex layouts** (cards, grids, SVG icons) — Wrapped in `wp:html` blocks, edit in code view

---

## 🎨 CSS Components

WindWP provides reusable CSS components using Tailwind's `@apply`:

### Buttons

```html
<a class="btn-primary">Primary Button</a>
<a class="btn-primary-sm">Small Button</a>
<a class="btn-primary-lg">Large Button</a>
<a class="btn-outline">Outline Button</a>
<a class="btn-secondary">Secondary Button</a>
```

### Cards

```html
<!-- Glassmorphism Card -->
<div class="card-glass group">
    <div class="card-glass-highlight"></div>
    <!-- Content -->
</div>

<!-- Pricing Card -->
<div class="card-pricing"><!-- Content --></div>
<div class="card-pricing-featured"><!-- Featured --></div>
```

### Sections

```html
<div class="section-dark">
    <div class="gradient-blob-primary -top-24 -left-24"></div>
    <div class="gradient-blob-dark -bottom-24 -right-24"></div>
    <div class="section-container">
        <!-- Content -->
    </div>
</div>
```

### Typography

```html
<p class="section-eyebrow">Eyebrow Text</p>
<h2 class="section-title">Main Title</h2>
<p class="section-subtitle">Subtitle text</p>
```

### Full Component List

See `cursor-rules.md` for the complete list of CSS components and usage examples.

---

## 🛒 WooCommerce

WindWP includes full WooCommerce support:

| Feature | Description |
|---------|-------------|
| **Shop Grid** | Responsive product grid |
| **Product Cards** | Styled with Tailwind |
| **Mini Cart** | Offcanvas slide-out cart |
| **Cart Page** | Custom styled table |
| **Checkout** | Modern form styling |
| **Breadcrumbs** | Custom styled navigation |
| **AJAX Add to Cart** | No page reload |
| **Sale Badges** | Percentage discount display |

### Enable WooCommerce

Simply install and activate WooCommerce — WindWP will automatically load the integration files.

### Custom WooCommerce Styles

```css
/* Located in src/styles.css */
.card-product { /* Product card styles */ }
.wc-price { /* Price styling */ }
.wc-sale-badge { /* Sale badge */ }
.wc-add-to-cart { /* Button styling */ }
```

---

## 🌙 Dark Mode

WindWP includes built-in dark mode support:

### Configuration

Already configured in `tailwind.config.js`:

```javascript
module.exports = {
  darkMode: 'class', // Uses 'dark' class on <html>
  // ...
}
```

### Usage

```html
<div class="bg-white dark:bg-slate-900 text-slate-900 dark:text-white">
    <!-- Content adapts to light/dark mode -->
</div>
```

### Toggle Function

The theme includes a toggle button that:
1. Adds/removes `dark` class on `<html>`
2. Saves preference to `localStorage`
3. Respects system preference

---

## 📖 Documentation

### For AI Coding Assistants

The theme includes `cursor-rules.md` with:
- Design tokens and color palette
- CSS component documentation
- Pattern structure templates
- Gutenberg block rules
- Best practices

### Theme Customization

| What to Customize | Where |
|-------------------|-------|
| **Colors** | `tailwind.config.js` → `theme.extend.colors` |
| **Typography** | `tailwind.config.js` → `theme.extend.fontFamily` |
| **CSS Components** | `src/styles.css` → `@layer components` |
| **Block Patterns** | `patterns/` directory |
| **Editor Settings** | `theme.json` |

---

## 🤖 AI-First Development

WindWP is optimized for AI coding assistants:

### Why AI-First?
- Clean, readable code structure
- Consistent naming conventions
- Well-documented components
- Predictable file organization

### Using with Cursor/Copilot

1. Open `cursor-rules.md` to provide context
2. Reference CSS components by class name
3. Follow the pattern template structure
4. Let AI generate Tailwind classes

### Example Prompt

```
Create a new block pattern for WindWP with:
- Dark section background
- Two-column grid
- Glass cards with icons
- Editable headings
Follow the structure in cursor-rules.md
```

---

## 🤝 Contributing

Contributions are welcome! Please read our [Contributing Guide](CONTRIBUTING.md) first.

```bash
# 1. Fork the repository
# 2. Create your feature branch
git checkout -b feature/amazing

# 3. Make your changes
# 4. Run build
npm run build

# 5. Commit your changes
git commit -m 'Add amazing feature'

# 6. Push to the branch
git push origin feature/amazing

# 7. Open a Pull Request
```

---

## 📄 License

This project is licensed under the **GPL-2.0-or-later** License — see the [LICENSE](LICENSE) file for details.

---

## 🙏 Credits

- Built with [Tailwind CSS](https://tailwindcss.com)
- Interactivity powered by [Alpine.js](https://alpinejs.dev)
- Icons from [Heroicons](https://heroicons.com)

---

## 📝 Changelog

### v1.0.0 (Initial Release)
- Full Site Editing support
- 10+ block patterns
- Tailwind CSS 3.4 integration
- WooCommerce ready
- Dark mode support
- AI-optimized codebase

---

<p align="center">
  Made with ❤️ for the AI Era<br>
  <a href="https://github.com/your-repo/windwp">GitHub</a> •
  <a href="https://windwp.com">Website</a>
</p>
