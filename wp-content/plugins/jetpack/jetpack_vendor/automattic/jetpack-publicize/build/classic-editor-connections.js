!function(){"use strict";var e={567:function(e){e.exports=window.jQuery},736:function(e){e.exports=window.wp.i18n}},n={};function o(t){var r=n[t];if(void 0!==r)return r.exports;var s=n[t]={exports:{}};return e[t](s,s.exports,o),s.exports}o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,{a:n}),n},o.d=function(e,n){for(var t in n)o.o(n,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:n[t]})},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},function(){var e=o(736),n=o(567),t=o.n(n);const _n=e._n,{ajaxUrl:r,connectionsUrl:s}=window.jetpackSocialClassicEditorConnections;t()((function(e){let n=!1;const o=function(){n||(e.post(r,{action:"test_publicize_conns"},c),n=!0)};let t;window.addEventListener("focus",(()=>{t&&clearTimeout(t),t=setTimeout(o,2e3)}));const c=function(o){n=!1;const t=e("#pub-connection-tests");t.removeClass("test-in-progress").removeClass("below-h2").removeClass("error").removeClass("publicize-token-refresh-message").html("");const r=o.data?o.data.reduce(((n,o)=>o.connectionTestPassed?n:(e("#wpas-submit-"+o.unique_id).prop("checked",!1).prop("disabled",!0),n+1)),0):0;if(r){
/* translators: %s is the link to the connections page in Calypso */
const e=_n('One of your social connections is broken. Reconnect it on the <a href="%s" rel="noopener noreferrer" target="_blank">connection management</a> page.','Some of your social connections are broken. Reconnect them on the <a href="%s" rel="noopener noreferrer" target="_blank">connection management</a> page.',r,"jetpack-publicize-pkg");t.addClass("below-h2").addClass("error").addClass("publicize-token-refresh-message").append(e.replace("%s",s))}};e("#pub-connection-tests").length&&o()}))}()}();