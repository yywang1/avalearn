/**
 * Make the environment a bit friendlier
 */
function $(expr, con) { return (con || document).querySelector(expr); }
function $$(expr, con) { return (con || document).querySelectorAll(expr); }

var interfaces = ['Node', 'Element', 'CSSStyleDeclaration'];

if ('addEventListener' in HTMLAnchorElement) { // Firefox bug
	interfaces.push('HTMLAnchorElement', 'HTMLCanvasElement');
}

for (var i=interfaces.length; i--;) {
	Chainvas.chainablize(window[interfaces[i]]);		
}

/**
 * Find browser prefix
 */
var prefixes = ['', '-moz-', '-ms-', '-o-', '-webkit-'],
	prefix = (function(style) {
		for (var i=prefixes.length; i--;) {
			var prefix = prefixes[i];
			
			style.setProperty(prefix + 'transition', '1s', null);
			
			if (style.cssText) {
				return prefix;
			}
		}
		
		return null;
	})(document.createElement('a').style);