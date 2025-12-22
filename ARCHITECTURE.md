# WindWP Architecture & Developer Guide

This document explains the technical foundation of WindWP, its "Single Source of Truth" philosophy, and the rules for extending the theme.

---

## 🏗 Core Philosophy: The Bridge
WindWP is designed as a **Bridge** between modern frontend tooling (Tailwind, Vite) and the native WordPress Block Editor (Gutenberg).

### Single Source of Truth
1. **Design Tokens**: `tailwind.config.js` is the master source for colors, fonts, and spacing.
2. **Synchronization**: The `npm run sync` script automatically updates `theme.json` based on Tailwind tokens. **Never edit the `settings.color.palette` or `settings.typography.fontFamilies` in `theme.json` manually.**

---

## 📦 Asset Management (Vite + WordPress)

WindWP uses **Vite** for lightning-fast development and optimized production builds.

### The `windwp_asset()` Helper
In `functions.php`, we use a custom helper to load assets.
- **Development**: Vite serves assets via HMR.
- **Production**: Vite generates a `manifest.json`. Our helper reads this file to load versioned assets (e.g., `main.d82j1.js`) for perfect cache busting.

### Asset Workflow
- **Frontend**: `src/main.js` (imports `src/styles.css` and `src/interactivity.js`) -> `assets/main.js`.
- **Editor**: `src/editor.js` (Gutenberg-specific logic) -> `assets/editor.js`.
- **Styles**: Tailwind output goes to root `style.css`.

---

## ⚡ Interactivity API (The Native Way)

WindWP uses the native **WordPress Interactivity API**.

### Advanced Practices
1. **SSR Initial State**: We define initial UI states in PHP using `wp_interactivity_state()` in `inc/interactivity.php`. This prevents layout shifts during hydration.
2. **Client-Side Navigation (SPA)**: The theme supports instant page transitions. Main content regions are marked with `data-wp-router-region="main"` in templates.
3. **Derived State & Getters**: We use JS getters in the store for values calculated from other state properties (e.g., `canScroll`).
4. **Future-Proof Events**: All event-driven actions use `withSyncEvent()` to ensure compatibility with WordPress 6.8+ asynchronous event handling.

### Rules for Interactivity
1. **No External Libraries**: Do not add Alpine.js or jQuery for UI components.
2. **The Store**: All logic lives in `src/interactivity.js`.
3. **Selective Loading**: 
   - `main.js` is loaded on the frontend via `wp_enqueue_scripts`.
   - `editor.js` is loaded in Gutenberg via `enqueue_block_editor_assets`.
4. **Data Attributes**: Use `data-wp-*` attributes in HTML templates.
   - `data-wp-interactive="windwp"`: Scope your component.
   - `data-wp-context`: Initial state.
   - `data-wp-on--click`: Event listeners.
   - `data-wp-class`: Dynamic classes.

---

## 🎨 Styling Strategy

We follow a strict specificity hierarchy to ensure the Block Editor remains controllable by the user.

### CSS Layers (`src/styles.css`)
1. **@layer base**: Resets and FSE-specific fixes.
2. **@layer components**: Reusable Tailwind components (e.g., `.btn-primary`). These are mapped to Gutenberg blocks using high-specificity selectors.
3. **Editor Styles**: High-specificity overrides to ensure the Backend Editor looks **exactly** like the Frontend.

### theme.json vs CSS
- Use `theme.json` for: Global layout, base typography, and color settings.
- Use `src/styles.css` for: Complex animations, hover scales, and "The Soul" of the design that Gutenberg cannot natively handle.

---

## 🧩 Patterns & i18n

### Professional Pattern Rules
1. **No wp:html for Content**: Headings, paragraphs, and buttons must be native blocks so users can edit them visually.
2. **Decorations**: Use `wp:html` only for non-content elements (decorative SVGs, background blur blobs).
3. **i18n (Internationalization)**: All strings in PHP patterns **must** be wrapped in WordPress translation functions:
   ```php
   <?php echo esc_html__( 'My Text', 'windwp' ); ?>
   ```

---

## 🚀 Development Workflow

1.  **Start Dev Server**: `npm run dev` (Starts Vite + Sync).
2.  **Add Design Token**: Edit `tailwind.config.js` -> Sync runs -> Token appears in Gutenberg "Styles" sidebar.
3.  **Build for Production**: `npm run build`. This generates `manifest.json` and optimized assets.

---

## 🤖 AI-First Development
If you are using **Cursor** or **Copilot**, refer to `cursor-rules.md`. It contains specific prompts and structure templates optimized for AI code generation within the WindWP ecosystem.

