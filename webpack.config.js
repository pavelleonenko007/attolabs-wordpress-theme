const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const DependencyExtractionWebpackPlugin = require('@wordpress/dependency-extraction-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = (env) => {
	return {
		...defaultConfig,
		output: {
			filename: 'js/bundle.js',
			path: path.resolve(__dirname, 'build'),
		},
		plugins: [
			...defaultConfig.plugins.filter(
				(plugin) =>
					!(plugin instanceof MiniCssExtractPlugin) &&
					!(plugin instanceof DependencyExtractionWebpackPlugin)
			),
			new MiniCssExtractPlugin({
				filename: 'css/style.css',
			}),
			new DependencyExtractionWebpackPlugin({
				outputFilename: './bundle.asset.php',
			}),
		],
	};
};
