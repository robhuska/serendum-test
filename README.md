# serendum-test.local

## Getting Started

### Install dependencies

```
npm install
```

### Development

To start the development environment (watch CSS and JS):

```
npm run dev
```

This runs both CSS and JS watchers in parallel:
- CSS: Tailwind CLI watches and builds `src/styles.css` to `dist/styles.css`
- JS: esbuild bundles `src/main.js` to `dist/main.js`

### Production Build

To build optimized assets for production:

```
npm run build
```

This will:
- Minify and output CSS to `dist/styles.css`
- Bundle and minify JS to `dist/main.js`

### Local Server

This project was served locally using [MAMP Pro](https://www.mamp.info/en/mamp-pro/). You can use MAMP Pro or any local PHP server to serve the project root directory. 

If using MAMP Pro:
- Set the document root to the project directory.
- Access the site via the local domain you configure (e.g., http://serendum-test.local).

