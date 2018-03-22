# PHP Live Editor with jQuery

This is a proof of concept of an inline css editor that saves the style changes to local disk.

## Installation

Download and run index.php with php.

Eg using php local dev server:

```bash
php -S localhost:7777 -t .
```

Click an element and apply CSS styles like using a WYSIWYG editor.

## Options

1. Save changes to live-styles.css files.
2. Download current CSS styles.

## ToDo

1. Save text edits from contenteditable elements on a local server file or in localstorage.
2. When selecting an element apply it's css styles to Editor form.
3. Make CSS styles from local file as inline styles to HTML.
4. Undo/Redo options.
5. Make this work with js created elements.
6. Create a php function to generate the Editor. 
7. Rewrite the helper class Cssparser.php taken from https://github.com/intekhabrizvi/cssparser.

## License
[MIT](LICENSE) Theodoros Ploumis.