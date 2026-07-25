# rivers-edge-theme

A block theme for the web development company River's Edge.

## Block styles

Core blocks expose a **Rivers Edge** style in the editor (**Styles** panel). That comes from this theme, not from WordPress core.

The theme registers one shared variation (`rivers-edge` / class `is-style-rivers-edge`) on most core blocks so each block has a consistent place for theme-specific CSS. Many stylesheets are placeholders until you add rules. **`core/group`** also has named layout styles (Header Group, Footer Group, Core Services, etc.).

**Full guide:** [docs/block-styles.md](docs/block-styles.md) — registry, file layout, Group layouts, and how to add or remove styles.

Quick reference:

| What | Where |
|------|--------|
| Block → style registry | `includes/block_styles.php` |
| Per-block CSS | `assets/css/blocks/{slug}.css` |
| Core block slug list | `includes/core-block-slugs.php` |
