!function(a){function b(a){return a.replace(/(:|\.)/g,"\\$1")}var c="1.5.2",d={},e={exclude:[],excludeWithin:[],offset:0,direction:"top",scrollElement:null,scrollTarget:null,beforeScroll:function(){},afterScroll:function(){},easing:"swing",speed:400,autoCoefficient:2,preventDefault:!0},f=function(b){var c=[],d=!1,e=b.dir&&"left"===b.dir?"scrollLeft":"scrollTop";return this.each(function(){if(this!==document&&this!==window){var b=a(this);b[e]()>0?c.push(this):(b[e](1),d=b[e]()>0,d&&c.push(this),b[e](0))}}),c.length||this.each(function(){"BODY"===this.nodeName&&(c=[this])}),"first"===b.el&&c.length>1&&(c=[c[0]]),c};a.fn.extend({scrollable:function(a){var b=f.call(this,{dir:a});return this.pushStack(b)},firstScrollable:function(a){var b=f.call(this,{el:"first",dir:a});return this.pushStack(b)},smoothScroll:function(c,d){if(c=c||{},"options"===c)return d?this.each(function(){var b=a(this),c=a.extend(b.data("ssOpts")||{},d);a(this).data("ssOpts",c)}):this.first().data("ssOpts");var e=a.extend({},a.fn.smoothScroll.defaults,c),f=a.smoothScroll.filterPath(location.pathname);return this.unbind("click.smoothscroll").bind("click.smoothscroll",function(c){var d=this,g=a(this),h=a.extend({},e,g.data("ssOpts")||{}),i=e.exclude,j=h.excludeWithin,k=0,l=0,m=!0,n={},o=location.hostname===d.hostname||!d.hostname,p=h.scrollTarget||a.smoothScroll.filterPath(d.pathname)===f,q=b(d.hash);if(h.scrollTarget||o&&p&&q){for(;m&&i.length>k;)g.is(b(i[k++]))&&(m=!1);for(;m&&j.length>l;)g.closest(j[l++]).length&&(m=!1)}else m=!1;m&&(h.preventDefault&&c.preventDefault(),a.extend(n,h,{scrollTarget:h.scrollTarget||q,link:d}),a.smoothScroll(n))}),this}}),a.smoothScroll=function(b,c){if("options"===b&&"object"==typeof c)return a.extend(d,c);var e,f,g,h,i,j=0,k="offset",l="scrollTop",m={},n={};"number"==typeof b?(e=a.extend({link:null},a.fn.smoothScroll.defaults,d),g=b):(e=a.extend({link:null},a.fn.smoothScroll.defaults,b||{},d),e.scrollElement&&(k="position","static"===e.scrollElement.css("position")&&e.scrollElement.css("position","relative"))),l="left"===e.direction?"scrollLeft":l,e.scrollElement?(f=e.scrollElement,/^(?:HTML|BODY)$/.test(f[0].nodeName)||(j=f[l]())):f=a("html, body").firstScrollable(e.direction),e.beforeScroll.call(f,e),g="number"==typeof b?b:c||a(e.scrollTarget)[k]()&&a(e.scrollTarget)[k]()[e.direction]||0,m[l]=g+j+e.offset,h=e.speed,"auto"===h&&(i=m[l]-f.scrollTop(),0>i&&(i*=-1),h=i/e.autoCoefficient),n={duration:h,easing:e.easing,complete:function(){e.afterScroll.call(e.link,e)}},e.step&&(n.step=e.step),f.length?f.stop().animate(m,n):e.afterScroll.call(e.link,e)},a.smoothScroll.version=c,a.smoothScroll.filterPath=function(a){return a=a||"",a.replace(/^\//,"").replace(/(?:index|default).[a-zA-Z]{3,4}$/,"").replace(/\/$/,"")},a.fn.smoothScroll.defaults=e}(jQuery),$(document).ready(function(){$("a").smoothScroll()});