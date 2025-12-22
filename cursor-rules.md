# WindWP — AI-First Tailwind Framework Theme Rules

You are an expert WordPress + Tailwind developer assistant for the **WindWP** theme.

## 🛑 STRICT RULES - DO NOT VIOLATE

1. **Tailwind + Components:** Use Tailwind utility classes OR the predefined CSS components from `src/styles.css`. No custom inline CSS.
2. **No Legacy Code:** WindWP is a 100% FSE block theme. No legacy PHP templates (`index.php`, `page.php`, etc.), no Customizer, no Widgets.
3. **Semantic HTML:** Use proper HTML tags in blocks (`tagName` attribute) like `<header>`, `<main>`, `<footer>`, `<article>`.
4. **Inter Font:** Always use the Inter font stack as defined in `tailwind.config.js` and `theme.json`.
5. **Gutenberg Compatibility:** Wrap custom HTML in `<!-- wp:html -->` blocks to avoid validation errors in the editor.

---

## 🏗️ Gutenberg Block Structure (CRITICAL)

### ⚠️ Pattern Validation Rule

Every element in a block pattern MUST be a valid Gutenberg block. Raw HTML elements (like `<div>`, `<span>`, SVGs) that are not wrapped in block comments will cause **"Block contains unexpected or invalid content"** errors.

### ✅ Correct: Wrap custom HTML in `wp:html` block

```html
<!-- wp:group {"align":"full","className":"section-dark"} -->
<div class="wp-block-group alignfull section-dark">

<!-- wp:html -->
<div class="gradient-blob-primary -top-24 -left-24"></div>
<div class="custom-element">Custom content...</div>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"text-4xl"} -->
<h2 class="wp-block-heading text-4xl">Editable Title</h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->
```

### ❌ Incorrect: Raw HTML without block wrapper

```html
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull">
    <div class="gradient-blob-primary"></div>  <!-- ❌ WILL CAUSE ERROR -->
    <span class="badge">Text</span>            <!-- ❌ WILL CAUSE ERROR -->
</div>
<!-- /wp:group -->
```

### Block Hierarchy Rules

| Element Type | How to Handle |
|-------------|---------------|
| Standard heading | `<!-- wp:heading -->` (editable in Gutenberg) |
| Standard paragraph | `<!-- wp:paragraph -->` (editable in Gutenberg) |
| Button links | `<!-- wp:button -->` (editable in Gutenberg) |
| Custom HTML/SVG | `<!-- wp:html -->` (NOT editable in Gutenberg) |
| Images | `<!-- wp:image -->` (editable in Gutenberg) |
| Complex layouts | `<!-- wp:html -->` (NOT editable in Gutenberg) |

---

## 🎨 Core Configuration

### Primary Colors
| Token | Value | Usage |
|-------|-------|-------|
| `primary` | `#00D1B2` | Teal - buttons, links, accents |
| `primary-dark` | `#009E87` | Darker teal - hover states, gradients |
| `primary-light` | `#00E6C7` | Lighter teal - highlights |

### Typography
- **Font Family:** Inter (sans-serif)
- **Weights:** 400 (regular), 500 (medium), 600 (semibold), 700 (bold), 900 (black)

### Container
Use `section-container` class or Tailwind's `max-w-7xl mx-auto px-6 lg:px-8`.

---

## 📁 Project Structure

```
windwp/
├── assets/              # Compiled JS assets (main.js, editor.js)
├── inc/                 # PHP includes
│   ├── hooks.php        # Custom theme hooks
│   ├── dark-mode.php    # Dark mode toggle functionality
│   └── woocommerce/     # WooCommerce integration
│       ├── setup.php        # WC theme setup
│       ├── template-hooks.php
│       ├── mini-cart.php     # Offcanvas cart
│       └── breadcrumbs.php   # Custom breadcrumbs
├── parts/               # Template parts (HTML)
│   ├── header.html      # Site header
│   └── footer.html      # Site footer
├── patterns/            # Block patterns (PHP)
│   ├── hero.php         # Hero section
│   ├── why-windwp.php   # Features grid
│   ├── cta.php          # Call to action
│   ├── pricing.php      # Pricing table
│   ├── testimonials.php # Customer reviews
│   ├── faq.php          # FAQ accordion
│   ├── team.php         # Team members
│   ├── newsletter.php   # Email subscription
│   └── footer-section.php
├── src/                 # Source files
│   ├── main.js          # Frontend JS entry point
│   ├── editor.js        # Editor JS entry point
│   ├── interactivity.js # Interactivity API Store
│   └── styles.css       # Tailwind CSS source
├── templates/           # FSE templates (HTML)
│   ├── front-page.html
│   ├── index.html
│   ├── page.html
│   ├── single.html
│   ├── archive.html
│   ├── search.html
│   └── 404.html
├── woocommerce/         # WooCommerce templates
├── functions.php        # Theme functions
├── style.css            # Compiled CSS (output)
├── theme.json           # Block editor settings
├── tailwind.config.js   # Tailwind configuration
├── vite.config.js       # Vite build config
└── postcss.config.js    # PostCSS config
```

---

## 🎨 CSS Architecture (src/styles.css)

### @layer base
WordPress FSE resets and global styles. Overrides default WordPress block margins and padding.

### @layer components
Reusable UI components using `@apply` directive:

#### Buttons

| Class | Description | Sizes |
|-------|-------------|-------|
| `.btn-primary` | Gradient teal button | Default (px-10 py-5) |
| `.btn-primary-sm` | Small gradient button | px-6 py-3 |
| `.btn-primary-lg` | Large gradient button | px-12 py-6 |
| `.btn-outline` | Teal border button | Default |
| `.btn-outline-dark` | Dark border button | Default |
| `.btn-secondary` | Gradient (for footer) | Default |

#### Cards

| Class | Description |
|-------|-------------|
| `.card-glass` | Glassmorphism card with hover highlight |
| `.card-glass-highlight` | Top border gradient highlight |
| `.card-pricing` | White pricing card (light theme) |
| `.card-pricing-featured` | Featured pricing with primary ring |
| `.card-product` | WooCommerce product card |

#### Sections & Layout

| Class | Description |
|-------|-------------|
| `.section-dark` | Dark background section |
| `.section-container` | Max-width container with padding |
| `.gradient-blob-primary` | Primary color decorative blur |
| `.gradient-blob-dark` | Dark color decorative blur |

#### Typography

| Class | Description |
|-------|-------------|
| `.section-eyebrow` | Small uppercase label (teal) |
| `.section-title` | Large white heading |
| `.section-title-dark` | Large dark heading |
| `.section-subtitle` | Gray subtitle text |

#### Other Components

| Class | Description |
|-------|-------------|
| `.badge-primary` | Teal badge with ring |
| `.badge-featured` | Gradient "Most Popular" badge |
| `.icon-box` | Icon container with hover effects |
| `.input-dark` | Dark theme input field |
| `.glass` | Light glassmorphism effect |
| `.glass-dark` | Dark glassmorphism effect |
| `.gradient-text` | Gradient text fill |

---

## 📐 Pattern Template Structure

### Correct Pattern File Format

```php
<?php
/**
 * Title: Pattern Name
 * Slug: windwp/pattern-slug
 * Categories: featured, windwp
 * Description: Brief description of the pattern.
 * Keywords: keyword1, keyword2
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"section-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-dark">

<!-- wp:html -->
<!-- Decorative elements, SVGs, complex HTML -->
<div class="gradient-blob-primary -top-24 -left-24"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"section-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-container">

<!-- EDITABLE CONTENT: Use proper Gutenberg blocks -->

<!-- wp:heading {"level":2,"className":"text-4xl font-black text-white"} -->
<h2 class="wp-block-heading text-4xl font-black text-white">Editable Title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-slate-400"} -->
<p class="text-slate-400">Editable paragraph text.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
```

---

## 🔧 Usage Examples

### Button in Pattern

```html
<!-- Inline (inside wp:html) -->
<a href="#" class="btn-primary">Get Started</a>
<a href="#" class="btn-outline">Learn More</a>

<!-- As Gutenberg button block (editable) -->
<!-- wp:button {"className":"btn-primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link btn-primary wp-element-button" href="#">Get Started</a></div>
<!-- /wp:button -->
```

### Glass Card with Icon

```html
<!-- wp:html -->
<div class="card-glass group">
    <div class="card-glass-highlight"></div>
    <div class="icon-box mb-8">
        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
    </div>
    <h3 class="text-2xl font-black text-white mb-4">Lightning Fast</h3>
    <p class="text-slate-400 text-lg">Description text here.</p>
</div>
<!-- /wp:html -->
```

### Section with Decorative Gradients

```html
<!-- wp:group {"align":"full","className":"relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32"} -->
<div class="wp-block-group alignfull relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32">

<!-- wp:html -->
<div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary-dark/5 rounded-full blur-3xl"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"relative z-10 section-container"} -->
<div class="wp-block-group relative z-10 section-container">
    <!-- Editable content here -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
```

---

## 🔌 WordPress Integration

### Theme Functions (functions.php)
- Enqueues `style.css`, `assets/main.js` (frontend), and `assets/editor.js` (editor).
- Uses WordPress Interactivity API for dynamic features.
- Registers block patterns category.
- Includes WooCommerce support files.
- Includes Dark Mode functionality.

### Theme Settings (theme.json)
- Global color palette
- Typography settings (Inter font)
- Layout width settings
- Block-level customizations

### Custom Hooks

| Hook | Description |
|------|-------------|
| `windwp_header_right_items` | Items in header right section |
| `windwp_before_main_content` | Before main content area |
| `windwp_after_main_content` | After main content area |

---

## 🛒 WooCommerce Integration

### Supported Features
- Custom product card styling
- Offcanvas mini-cart
- Custom breadcrumbs
- AJAX add-to-cart
- Sale badge with percentage
- Cart and checkout styling

### CSS Classes for WooCommerce

| Class | Usage |
|-------|-------|
| `.woocommerce-content-wrapper` | Main WC content area |
| `.wc-product-card` | Product card styling |
| `.wc-price` | Price display |
| `.wc-sale-badge` | Sale badge |
| `.wc-add-to-cart` | Add to cart button |

---

## 🌙 Dark Mode

Theme includes dark mode support via Tailwind's `class` strategy:

```html
<!-- Toggle adds/removes 'dark' class on <html> -->
<div class="bg-white dark:bg-slate-900 text-slate-900 dark:text-white">
    Content with dark mode support
</div>
```

---

## 💡 Best Practices

1. **Always test patterns** in Gutenberg editor after changes
2. **Use `wp:html`** for SVGs, custom grids, and complex layouts
3. **Keep editable content** (headings, paragraphs) as proper Gutenberg blocks
4. **Run `npm run build`** after CSS changes
5. **Clear browser cache** when debugging styles
6. **Use CSS components** instead of long Tailwind class strings when possible
