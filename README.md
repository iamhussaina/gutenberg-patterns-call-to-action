# WP Gutenberg Block Patterns

A lightweight, object-oriented library to programmatically register custom WordPress Block Patterns. This package is designed to be included directly within a WordPress theme to provide pre-designed layouts (like Call to Actions) without relying on heavy plugins.

## Features

- **Zero Dependencies:** Uses only WordPress Core blocks (Group, Heading, Buttons).
- **Theme Agnostic:** Works with any block-enabled WordPress theme.
- **OOP Structure:** Clean, namespaced, and extensible PHP code.
- **Performance:** No extra CSS/JS files loaded; leverages native block styles.

## Installation

1. Download or clone this repository.
2. Copy the `gutenberg-patterns-call-to-action` folder into your theme's directory (e.g., inside `inc/` or `lib/`).

## Usage

To activate the patterns, include the bootstrapper file in your theme's `functions.php`.

```php
// In your theme's functions.php

// Adjust the path based on where you placed the folder
require_once get_template_directory() . '/inc/gutenberg-patterns-call-to-action/boot.php';
