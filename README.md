<!-- @format -->

# Portfolio

# Tools used

# Owl Carousel 2

Touch enabled [jQuery](https://jquery.com/) plugin that lets you create a beautiful, responsive carousel slider. **To get started, check out https://owlcarousel2.github.io/OwlCarousel2/.**

**Notice:** The old Owl Carousel site (owlgraphic [dot] com) is no longer in use. Please delete all references to this in bookmarks and your own products' documentation as it's being used for malicious purposes.

## Quick start

### Install

This package can be installed with:

- [npm](https://www.npmjs.com/package/owl.carousel): `npm install --save owl.carousel` or `yarn add owl.carousel jquery`
- [bower](http://bower.io/search/?q=owl.carousel): `bower install --save owl.carousel`

Or download the [latest release](https://github.com/OwlCarousel2/OwlCarousel2/releases).

### Load

#### Webpack

Add jQuery via the "webpack.ProvidePlugin" to your webpack configuration:

    const webpack = require('webpack');

    //...
    plugins: [
        new webpack.ProvidePlugin({
          $: 'jquery',
          jQuery: 'jquery',
          'window.jQuery': 'jquery'
        }),
    ],
    //...

Load the required stylesheet and JS:

```js
import "owl.carousel/dist/assets/owl.carousel.css";
import "owl.carousel";
```

#### Static HTML

Put the required stylesheet at the [top](https://developer.yahoo.com/performance/rules.html#css_top) of your markup:

```html
<link
	rel="stylesheet"
	href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css"
/>
```

```html
<link
	rel="stylesheet"
	href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css"
/>
```

**NOTE:** If you want to use the default navigation styles, you will also need to include `owl.theme.default.css`.

Put the script at the [bottom](https://developer.yahoo.com/performance/rules.html#js_bottom) of your markup right after jQuery:

```html
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
```

```html
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
```

### Usage

Wrap your items (`div`, `a`, `img`, `span`, `li` etc.) with a container element (`div`, `ul` etc.). Only the class `owl-carousel` is mandatory to apply proper styles:

```html
<div class="owl-carousel owl-theme">
	<div>Your Content</div>
	<div>Your Content</div>
	<div>Your Content</div>
	<div>Your Content</div>
	<div>Your Content</div>
	<div>Your Content</div>
	<div>Your Content</div>
</div>
```

**NOTE:** The `owl-theme` class is optional, but without it, you will need to style navigation features on your own.

Call the [plugin](https://learn.jquery.com/plugins/) function and your carousel is ready.

```javascript
$(document).ready(function () {
	$(".owl-carousel").owlCarousel();
});
```

## Documentation

The documentation, included in this repo in the root directory, is built with [Assemble](http://assemble.io/) and publicly available at https://owlcarousel2.github.io/OwlCarousel2/. The documentation may also be run locally.

## Building

This package comes with [Grunt](http://gruntjs.com/) and [Bower](http://bower.io/). The following tasks are available:

- `default` compiles the CSS and JS into `/dist` and builds the doc.
- `dist` compiles the CSS and JS into `/dist` only.
- `watch` watches source files and builds them automatically whenever you save.
- `test` runs [JSHint](http://www.jshint.com/) and [QUnit](http://qunitjs.com/) tests headlessly in [PhantomJS](http://phantomjs.org/).

To define which plugins are build into the distribution just edit `/_config.json` to fit your needs.

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md).

## Roadmap

Please make sure to check out our [Roadmap Discussion](https://github.com/OwlCarousel2/OwlCarousel2/issues/1756).

## License

The code and the documentation are released under the [MIT License](LICENSE).

# Isotope

_Filter & sort magical layouts_

See [isotope.metafizzy.co](https://isotope.metafizzy.co) for complete docs and demos.

## Install

### Download

- [isotope.pkgd.js](https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js) un-minified, or
- [isotope.pkgd.min.js](https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js) minified

### CDN

Link directly to Isotope files on [unpkg](https://unpkg.com).

```html
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
```

### Package managers

npm: `npm install isotope-layout --save`

Bower: `bower install isotope-layout --save`

## License

### Commercial license

If you want to use Isotope to develop commercial sites, themes, projects, and applications, the Commercial license is the appropriate license. With this option, your source code is kept proprietary. Purchase an Isotope Commercial License at [isotope.metafizzy.co](https://isotope.metafizzy.co/#commercial-license)

### Open source license

If you are creating an open source application under a license compatible with the [GNU GPL license v3](https://www.gnu.org/licenses/gpl-3.0.html), you may use Isotope under the terms of the GPLv3.

[Read more about Isotope's license](https://isotope.metafizzy.co/license.html).

## Initialize

With jQuery

```js
$(".grid").isotope({
	// options...
	itemSelector: ".grid-item",
	masonry: {
		columnWidth: 200,
	},
});
```

With vanilla JavaScript

```js
// vanilla JS
var grid = document.querySelector(".grid");
var iso = new Isotope(grid, {
	// options...
	itemSelector: ".grid-item",
	masonry: {
		columnWidth: 200,
	},
});
```

With HTML

Add a `data-isotope` attribute to your element. Options can be set in JSON in the value.

```html
<div
	class="grid"
	data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 200 } }'
>
	<div class="grid-item"></div>
	<div class="grid-item"></div>
	...
</div>
```

---

By [Metafizzy 🌈🐻](https://metafizzy.co), 2010–2020
