/** @type {import('prettier').Config} */
export default {
  plugins: ['prettier-plugin-antlers', 'prettier-plugin-tailwindcss'],
  printWidth: 120,
  singleAttributePerLine: true,
  singleQuote: true,
  overrides: [
    {
      files: ['*.antlers.html'],
      options: {
        parser: 'antlers',
      },
    },
  ],
};
