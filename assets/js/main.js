import hljs from './../../node_modules/highlight.js/lib/index';
import php from './../../node_modules/highlight.js/lib/languages/php';

hljs.registerLanguage('php', php);

document.addEventListener('load', hljs.highlightAll());