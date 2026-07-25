# Block styles

This theme registers custom **block style variations** — the options that appear under **Styles** in the block editor sidebar. Most core blocks get a shared **Rivers Edge** variation; `core/group` also has layout-specific styles.

## Why "Rivers Edge" appears on so many blocks

WordPress block styles are **per block type**. There is no global "theme style" hook that applies to every block automatically, so this theme uses a scaffolding pattern:

1. Register the same style slug (`rivers-edge`) on each core block you may want to customize.
2. Ship one CSS file per block under `assets/css/blocks/`.
3. Add rules inside `.wp-block-{name}.is-style-rivers-edge` only when that block needs theme-specific styling.

Until you add CSS, selecting **Rivers Edge** in the editor has little or no visual effect — the variation is a ready-made extension point, not a bug.

In the editor, the label is **Rivers Edge** (no apostrophe). On the front end, the block gets the class `is-style-rivers-edge`.

## How it is wired

```
functions.php
  └── includes/block_styles.php
        ├── rivers_edge_block_style_registry()   → block → style definitions
        ├── rivers_edge_register_block_styles_from_registry()  → register_block_style()
        └── rivers_edge_enqueue_core_block_styles()            → wp_enqueue_block_style()
```

On `init`:

1. **Register** — Each entry in the registry is passed to WordPress [`register_block_style()`](https://developer.wordpress.org/reference/functions/register_block_style/). That adds the style to the block's Styles panel.
2. **Enqueue** — For each block in the registry, if `assets/css/blocks/{slug}.css` exists, it is loaded via [`wp_enqueue_block_style()`](https://developer.wordpress.org/reference/functions/wp_enqueue_block_style/) (editor and front end when the block is present).

The shared style slug is defined once:

```php
const RIVERS_EDGE_BLOCK_STYLE = 'rivers-edge';
```

## File layout

| Path | Role |
|------|------|
| `includes/block_styles.php` | Registry of blocks and their style variations; registration and enqueue logic |
| `includes/core-block-slugs.php` | List of core block folder names (for scripts / upgrades; keep in sync with the registry) |
| `assets/css/blocks/{slug}.css` | Styles for `core/{slug}` (e.g. `paragraph.css` → `core/paragraph`) |

CSS selector convention:

```css
.wp-block-paragraph.is-style-rivers-edge {
	/* overrides when the Rivers Edge variation is selected */
}
```

## Group block — layout styles

`core/group` is the main exception. It registers several **named layout** styles in addition to the generic Rivers Edge style:

| Style slug | Editor label |
|------------|--------------|
| `reasons-why-and-contact` | Reasons Why and Contact |
| `friendly-web` | Friendly Web |
| `header-group` | Header Group |
| `footer-group` | Footer Group |
| `core-services` | Core Services |
| `rivers-edge` | Rivers Edge |

Layout rules live in `assets/css/blocks/group.css` (e.g. responsive column stacking for specific sections).

## Adding or changing a block style

### Style an existing block

1. Open or create `assets/css/blocks/{slug}.css` (slug = block name without `core/`, e.g. `heading` for `core/heading`).
2. Add rules under `.wp-block-{slug}.is-style-rivers-edge` (or the appropriate layout class for Group).
3. Confirm the block is listed in `rivers_edge_block_style_registry()` in `includes/block_styles.php`. If the block is missing, add an entry:

```php
'core/heading' => array(
	array(
		'name'  => RIVERS_EDGE_BLOCK_STYLE,
		'label' => __( 'Rivers Edge', 'rivers-edge' ),
	),
),
```

4. Reload the editor and select the block → **Styles** → **Rivers Edge**.

### Add a new named style (e.g. only on Group)

1. Add a new array entry under the block key in `rivers_edge_block_style_registry()` with a unique `name` and `label`.
2. Add CSS using `.is-style-{name}` (Group) or `.wp-block-{slug}.is-style-{name}`.
3. No change to `functions.php` is required unless you add new PHP files.

### Remove the Rivers Edge option from a block

Delete that block's entry from `rivers_edge_block_style_registry()`, or remove only the `rivers-edge` style from its `styles` array. Optionally delete the unused CSS file.

### New core block after a WordPress upgrade

1. Add the block to `rivers_edge_block_style_registry()` if you want the Rivers Edge variation.
2. Add the slug to `includes/core-block-slugs.php` if you use tooling that reads that list.
3. Add `assets/css/blocks/{slug}.css` when you need styles.

## Editor vs front end

- **Registration** (`register_block_style`) controls what appears in the Styles UI.
- **Enqueue** (`wp_enqueue_block_style`) loads CSS only when the block is used on the page (or in the editor for that block), keeping unused block CSS off other pages.

Styles saved on a block are stored in post content as the `className` attribute (e.g. `is-style-rivers-edge`), so they persist with the block markup.
