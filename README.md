# Idle Sparks — Website

AI-powered creative studio website built with a custom Blueprint theme.

## Stack

- **CMS** — Kirby (headless-friendly, file-based)
- **CSS** — Tailwind CSS v4
- **Theme** — Architecture Blueprint (dark navy + blueprint blue)
- **Fonts** — Inter (sans) · JetBrains Mono (mono)

## Structure

```
public_html/
├── assets/css/        # Compiled CSS (do not edit directly)
├── content/           # Page content managed via Kirby Panel
├── site/
│   ├── blueprints/    # Kirby field definitions
│   ├── snippets/      # Reusable partials (header, footer, nav)
│   └── templates/     # Page templates
├── src/
│   └── main.css       # Source CSS (Tailwind + custom classes)
└── kirby/             # Kirby CMS core
```

## CSS Build

The CSS is compiled from `src/main.css` using the Tailwind CLI.

```bash
# Development (watch mode)
npm run dev

# Production build (minified)
npm run build
```

> **Note:** Node.js is required. On this server use the available alt-nodejs binaries under `/opt/alt/`.

## AI Workflow

All code edits and site changes are made via **Claude Code**, Anthropic's AI coding agent.

Changes are issued through a **Telegram bot** interface — no manual SSH or FTP. The AI receives instructions over Telegram, makes the edits, and the site updates automatically.

Deployment is fully automated — pushing to the main branch triggers an auto-deploy via `webhook.php`, so the live site reflects every change instantly without human intervention.

## Content Management

Content is managed through the Kirby Panel at `/panel`.
