let mix = require('laravel-mix');

const ASSETS_FOLDER = './public';

mix.sass('src/sass/style.scss', `${ASSETS_FOLDER}/css`)
	.js(`src/js/app.js`, `${ASSETS_FOLDER}/js`)
    .options({
		processCssUrls: false,
    })
    .copyDirectory('src/fonts', `${ASSETS_FOLDER}/fonts`)
    .copyDirectory('src/images', `${ASSETS_FOLDER}/images`);