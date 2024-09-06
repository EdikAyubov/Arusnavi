// Получаем имя папки проекта
import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = `./dist`;
const srcFolder = `./src`;

export const path = {
	build: {
		js: `${buildFolder}/js/`,
		images: `${buildFolder}/img/`,
		css: `${buildFolder}/css/`,
		html: `${buildFolder}/`,
		tracker: `${buildFolder}/tracker/`,
		gps: `${buildFolder}/gps/`,
		temperature: `${buildFolder}/temperature/`,
		fuel: `${buildFolder}/fuel/`,
		equip: `${buildFolder}/equip/`,
		fonts: `${buildFolder}/fonts/`,
		files: `${buildFolder}/download/`,
		php: `${buildFolder}/`,
	},
	src: {
		js: `${srcFolder}/js/*.js`,
		images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,ico}`,
		svg: `${srcFolder}/img/**/*.svg`,
		scss: `${srcFolder}/scss/style.scss`,
		products: `${srcFolder}/products-style/products-style.scss`,
		html: `${srcFolder}/*.html`,
		tracker: `${srcFolder}/item/tracker/*.html`,
		gps: `${srcFolder}/item/gps/*.html`,
		temperature: `${srcFolder}/item/temperature/*.html`,
		fuel: `${srcFolder}/item/fuel/*.html`,
		equip: `${srcFolder}/item/equip/*.html`,
		files: `${srcFolder}/download/**/*.*`,
		svgicons: `${srcFolder}/svgicons/*.svg`,
		php: `${srcFolder}/*.php`,

	},
	watch: {
		js: `${srcFolder}/js/**/*.js`,
		images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,ico,svg}`,
		scss: `${srcFolder}/scss/**/*.scss`,
		products: `${srcFolder}/products-style/products-style.scss`,
		html: `${srcFolder}/**/*.html`,
		files: `${srcFolder}/download/**/*.*`,
		php: `${srcFolder}/*.php`,
		tracker: `${srcFolder}/item/tracker/**/*.html`,
		gps: `${srcFolder}/item/gps/**/*.html`,
		temperature: `${srcFolder}/item/temperature/**/*.html`,
		fuel: `${srcFolder}/item/fuel/**/*.html`,
		equip: `${srcFolder}/item/equip/**/*.html`,
	},
	clean: buildFolder,
	srcFolder: srcFolder,
	rootFolder: rootFolder,
	ftp: ``,
}