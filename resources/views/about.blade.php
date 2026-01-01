
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Wix.com Website Builder"/>

  <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png" type="image/png"/>
  <link rel="shortcut icon" href="https://static.wixstatic.com/media/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png" type="image/png"/>
  <link rel="apple-touch-icon" href="https://static.wixstatic.com/media/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png/v1/fill/w_180%2Ch_180%2Clg_1%2Cusm_0.66_1.00_0.01/287178_821090ce693e4a62949312dc94ec440a%7Emv2.png" type="image/png"/>




  <!-- Segmenter Polyfill -->
  <script>
    if (!window.Intl || !window.Intl.Segmenter) {
      (function() {
        var script = document.createElement('script');
        script.src = 'https://static.parastorage.com/unpkg/@formatjs/intl-segmenter@11.7.10/polyfill.iife.js';
        document.head.appendChild(script);
      })();
    }
  </script>

  <!-- Legacy Polyfills -->
  <script nomodule="" src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js"></script>
  <script nomodule="" src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js"></script>

  <!-- Performance API Polyfills -->
  <script>
  (function () {
    var noop = function noop() {};
    if ("performance" in window === false) {
      window.performance = {};
    }
    window.performance.mark = performance.mark || noop;
    window.performance.measure = performance.measure || noop;
    if ("now" in window.performance === false) {
      var nowOffset = Date.now();
      if (performance.timing && performance.timing.navigationStart) {
        nowOffset = performance.timing.navigationStart;
      }
      window.performance.now = function now() {
        return Date.now() - nowOffset;
      };
    }
  })();
  </script>

  <!-- Globals Definitions -->
  <script>
    (function () {
      var now = Date.now()
      window.initialTimestamps = {
        initialTimestamp: now,
        initialRequestTimestamp: Math.round(performance.timeOrigin ? performance.timeOrigin : now - performance.now())
      }

      window.thunderboltTag = "libs-releases-GA-local"
      window.thunderboltVersion = "1.16613.0"
    })();
  </script>

  <!-- Essential Viewer Model -->
  <script type="application/json" id="wix-essential-viewer-model">{"fleetConfig":{"fleetName":"thunderbolt-isolated-platform","type":"GA","code":0},"mode":{"qa":false,"enableTestApi":false,"debug":false,"ssrIndicator":false,"ssrOnly":false,"siteAssetsFallback":"enable","versionIndicator":false},"componentsLibrariesTopology":[{"artifactId":"editor-elements","namespace":"wixui","url":"https:\/\/static.parastorage.com\/services\/editor-elements\/1.14752.0"},{"artifactId":"editor-elements","namespace":"dsgnsys","url":"https:\/\/static.parastorage.com\/services\/editor-elements\/1.14752.0"}],"siteFeaturesConfigs":{"sessionManager":{"isRunningInDifferentSiteContext":false}},"language":{"userLanguage":"en"},"siteAssets":{"clientTopology":{"mediaRootUrl":"https:\/\/static.wixstatic.com","staticMediaUrl":"https:\/\/static.wixstatic.com\/media","moduleRepoUrl":"https:\/\/static.parastorage.com\/unpkg","fileRepoUrl":"https:\/\/static.parastorage.com\/services","viewerAppsUrl":"https:\/\/viewer-apps.parastorage.com","viewerAssetsUrl":"https:\/\/viewer-assets.parastorage.com","siteAssetsUrl":"https:\/\/siteassets.parastorage.com","pageJsonServerUrls":["https:\/\/pages.parastorage.com","https:\/\/staticorigin.wixstatic.com","https:\/\/www.thecontinent.org","https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],"pathOfTBModulesInFileRepoForFallback":"wix-thunderbolt\/dist\/"}},"siteFeatures":["appMonitoring","assetsLoader","builderContextProviders","builderModuleLoader","businessLogger","captcha","clickHandlerRegistrar","codeEmbed","commonConfig","componentsLoader","componentsRegistry","consentPolicy","contentReflow","cookiesManager","cyclicTabbing","domSelectors","domStore","dynamicPages","environmentWixCodeSdk","environment","locationWixCodeSdk","mpaNavigation","multilingual","navigationManager","navigationPhases","ooi","pages","panorama","protectedPages","renderer","reporter","routerFetch","router","scrollRestoration","seoWixCodeSdk","seo","sessionManager","siteMembersWixCodeSdk","siteMembers","siteScrollBlocker","siteWixCodeSdk","speculationRules","ssrCache","stores","structureApi","thunderboltInitializer","tpaCommons","translations","usedPlatformApis","warmupData","windowMessageRegistrar","windowWixCodeSdk","wixCustomElementComponent","wixEmbedsApi","componentsReact","platform"],"site":{"externalBaseUrl":"https:\/\/www.thecontinent.org","isSEO":false},"media":{"staticMediaUrl":"https:\/\/static.wixstatic.com\/media","mediaRootUrl":"https:\/\/static.wixstatic.com\/","staticVideoUrl":"https:\/\/video.wixstatic.com\/"},"requestUrl":"https:\/\/www.thecontinent.org\/about","rollout":{"siteAssetsVersionsRollout":false,"isDACRollout":0,"isTBRollout":false},"commonConfig":{"brand":"wix","host":"VIEWER","bsi":"","consentPolicy":{},"consentPolicyHeader":{},"siteRevision":"1226","renderingFlow":"NONE","language":"en","locale":"en-gb"},"interactionSampleRatio":0.01,"dynamicModelUrl":"https:\/\/www.thecontinent.org\/_api\/v2\/dynamicmodel","accessTokensUrl":"https:\/\/www.thecontinent.org\/_api\/v1\/access-tokens","isExcludedFromSecurityExperiments":false,"experiments":{"specs.thunderbolt.hardenFetchAndXHR":true,"specs.thunderbolt.securityExperiments":true}}</script>
  <script>window.viewerModel = JSON.parse(document.getElementById('wix-essential-viewer-model').textContent)</script>

  <script>
    window.commonConfig = viewerModel.commonConfig
  </script>


  <!-- BEGIN handleAccessTokens bundle -->

  <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.4f2f9a53.bundle.min.js">(()=>{"use strict";function e(e){let{context:o,property:r,value:n,enumerable:i=!0}=e,c=e.get,l=e.set;if(!r||void 0===n&&!c&&!l)return new Error("property and value are required");let a=o||globalThis,s=a?.[r],u={};if(void 0!==n)u.value=n;else{if(c){let e=t(c);e&&(u.get=e)}if(l){let e=t(l);e&&(u.set=e)}}let p={...u,enumerable:i||!1,configurable:!1};void 0!==n&&(p.writable=!1);try{Object.defineProperty(a,r,p)}catch(e){return e instanceof TypeError?s:e}return s}function t(e,t){return"function"==typeof e?e:!0===e?.async&&"function"==typeof e.func?t?async function(t){return e.func(t)}:async function(){return e.func()}:"function"==typeof e?.func?e.func:void 0}try{e({property:"strictDefine",value:e})}catch{}try{e({property:"defineStrictObject",value:r})}catch{}try{e({property:"defineStrictMethod",value:n})}catch{}var o=["toString","toLocaleString","valueOf","constructor","prototype"];function r(t){let{context:n,property:c,propertiesToExclude:l=[],skipPrototype:a=!1,hardenPrototypePropertiesToExclude:s=[]}=t;if(!c)return new Error("property is required");let u=(n||globalThis)[c],p={},f=i(n,c);u&&("object"==typeof u||"function"==typeof u)&&Reflect.ownKeys(u).forEach(t=>{if(!l.includes(t)&&!o.includes(t)){let o=i(u,t);if(o&&(o.writable||o.configurable)){let{value:r,get:n,set:i,enumerable:c=!1}=o,l={};void 0!==r?l.value=r:n?l.get=n:i&&(l.set=i);try{let o=e({context:u,property:t,...l,enumerable:c});p[t]=o}catch(e){if(!(e instanceof TypeError))throw e;try{p[t]=o.value||o.get||o.set}catch{}}}}});let d={originalObject:u,originalProperties:p};if(!a&&void 0!==u?.prototype){let e=r({context:u,property:"prototype",propertiesToExclude:s,skipPrototype:!0});e instanceof Error||(d.originalPrototype=e?.originalObject,d.originalPrototypeProperties=e?.originalProperties)}return e({context:n,property:c,value:u,enumerable:f?.enumerable}),d}function n(t,o){let r=(o||globalThis)[t],n=i(o||globalThis,t);return r&&n&&(n.writable||n.configurable)?(Object.freeze(r),e({context:globalThis,property:t,value:r})):r}function i(e,t){if(e&&t)try{return Reflect.getOwnPropertyDescriptor(e,t)}catch{return}}function c(e){if("string"!=typeof e)return e;try{return decodeURIComponent(e).toLowerCase().trim()}catch{return e.toLowerCase().trim()}}function l(e,t){let o="";if("string"==typeof e)o=e.split("=")[0]?.trim()||"";else{if(!e||"string"!=typeof e.name)return!1;o=e.name}return t.has(c(o)||"")}function a(e,t){let o;return o="string"==typeof e?e.split(";").map(e=>e.trim()).filter(e=>e.length>0):e||[],o.filter(e=>!l(e,t))}var s=null;function u(){return null===s&&(s=typeof Document>"u"?void 0:Object.getOwnPropertyDescriptor(Document.prototype,"cookie")),s}function p(t,o){if(!globalThis?.cookieStore)return;let r=globalThis.cookieStore.get.bind(globalThis.cookieStore),n=globalThis.cookieStore.getAll.bind(globalThis.cookieStore),i=globalThis.cookieStore.set.bind(globalThis.cookieStore),c=globalThis.cookieStore.delete.bind(globalThis.cookieStore);return e({context:globalThis.CookieStore.prototype,property:"get",value:async function(e){return l(("string"==typeof e?e:e.name)||"",t)?null:r.call(this,e)},enumerable:!0}),e({context:globalThis.CookieStore.prototype,property:"getAll",value:async function(){return a(await n.apply(this,Array.from(arguments)),t)},enumerable:!0}),e({context:globalThis.CookieStore.prototype,property:"set",value:async function(){let e=Array.from(arguments);if(!l(1===e.length?e[0].name:e[0],t))return i.apply(this,e);o&&console.warn(o)},enumerable:!0}),e({context:globalThis.CookieStore.prototype,property:"delete",value:async function(){let e=Array.from(arguments);if(!l(1===e.length?e[0].name:e[0],t))return c.apply(this,e)},enumerable:!0}),e({context:globalThis.cookieStore,property:"prototype",value:globalThis.CookieStore.prototype,enumerable:!1}),e({context:globalThis,property:"cookieStore",value:globalThis.cookieStore,enumerable:!0}),{get:r,getAll:n,set:i,delete:c}}var f=["TextEncoder","TextDecoder","XMLHttpRequestEventTarget","EventTarget","URL","JSON","Reflect","Object","Array","Map","Set","WeakMap","WeakSet","Promise","Symbol","Error"],d=["addEventListener","removeEventListener","dispatchEvent","encodeURI","encodeURIComponent","decodeURI","decodeURIComponent"];const y=(e,t)=>{try{const o=t?t.get.call(document):document.cookie;return o.split(";").map(e=>e.trim()).filter(t=>t?.startsWith(e))[0]?.split("=")[1]}catch(e){return""}},g=(e="",t="",o="/")=>`${e}=; ${t?`domain=${t};`:""} max-age=0; path=${o}; expires=Thu, 01 Jan 1970 00:00:01 GMT`;function m(){(function(){if("undefined"!=typeof window){const e=performance.getEntriesByType("navigation")[0];return"back_forward"===(e?.type||"")}return!1})()&&function(){const{counter:e}=function(){const e=b("getItem");if(e){const[t,o]=e.split("-"),r=o?parseInt(o,10):0;if(r>=3){const e=t?Number(t):0;if(Date.now()-e>6e4)return{counter:0}}return{counter:r}}return{counter:0}}();e<3?(!function(e=1){b("setItem",`${Date.now()}-${e}`)}(e+1),window.location.reload()):console.error("ATS: Max reload attempts reached")}()}function b(e,t){try{return sessionStorage[e]("reload",t||"")}catch(e){console.error("ATS: Error calling sessionStorage:",e)}}const h="client-session-bind",v="sec-fetch-unsupported",{experiments:w}=window.viewerModel,T=[h,"client-binding",v,"svSession","smSession","server-session-bind","wixSession2","wixSession3"].map(e=>e.toLowerCase()),{cookie:S}=function(t,o){let r=new Set(t);return e({context:document,property:"cookie",set:{func:e=>function(e,t,o,r){let n=u(),i=c(t.split(";")[0]||"")||"";[...o].every(e=>!i.startsWith(e.toLowerCase()))&&n?.set?n.set.call(e,t):r&&console.warn(r)}(document,e,r,o)},get:{func:()=>function(e,t){let o=u();if(!o?.get)throw new Error("Cookie descriptor or getter not available");return a(o.get.call(e),t).join("; ")}(document,r)},enumerable:!0}),{cookieStore:p(r,o),cookie:u()}}(T),k="tbReady",x="security_overrideGlobals",{experiments:E,siteFeaturesConfigs:C,accessTokensUrl:P}=window.viewerModel,R=P,M={},O=(()=>{const e=y(h,S);if(w["specs.thunderbolt.browserCacheReload"]){y(v,S)||e?b("removeItem"):m()}return(()=>{const e=g(h),t=g(h,location.hostname);S.set.call(document,e),S.set.call(document,t)})(),e})();O&&(M["client-binding"]=O);const D=fetch;addEventListener(k,function e(t){const{logger:o}=t.detail;try{window.tb.init({fetch:D,fetchHeaders:M})}catch(e){const t=new Error("TB003");o.meter(`${x}_${t.message}`,{paramsOverrides:{errorType:x,eventString:t.message}}),window?.viewerModel?.mode.debug&&console.error(e)}finally{removeEventListener(k,e)}}),E["specs.thunderbolt.hardenFetchAndXHR"]||(window.fetchDynamicModel=()=>C.sessionManager.isRunningInDifferentSiteContext?Promise.resolve({}):fetch(R,{credentials:"same-origin",headers:M}).then(function(e){if(!e.ok)throw new Error(`[${e.status}]${e.statusText}`);return e.json()}),window.dynamicModelPromise=window.fetchDynamicModel())})();
//# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.4f2f9a53.bundle.min.js.map</script>

<!-- END handleAccessTokens bundle -->

<!-- BEGIN overrideGlobals bundle -->

<script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.ec13bfcf.bundle.min.js">(()=>{"use strict";function e(e){let{context:r,property:o,value:n,enumerable:i=!0}=e,c=e.get,a=e.set;if(!o||void 0===n&&!c&&!a)return new Error("property and value are required");let l=r||globalThis,u=l?.[o],s={};if(void 0!==n)s.value=n;else{if(c){let e=t(c);e&&(s.get=e)}if(a){let e=t(a);e&&(s.set=e)}}let p={...s,enumerable:i||!1,configurable:!1};void 0!==n&&(p.writable=!1);try{Object.defineProperty(l,o,p)}catch(e){return e instanceof TypeError?u:e}return u}function t(e,t){return"function"==typeof e?e:!0===e?.async&&"function"==typeof e.func?t?async function(t){return e.func(t)}:async function(){return e.func()}:"function"==typeof e?.func?e.func:void 0}try{e({property:"strictDefine",value:e})}catch{}try{e({property:"defineStrictObject",value:o})}catch{}try{e({property:"defineStrictMethod",value:n})}catch{}var r=["toString","toLocaleString","valueOf","constructor","prototype"];function o(t){let{context:n,property:c,propertiesToExclude:a=[],skipPrototype:l=!1,hardenPrototypePropertiesToExclude:u=[]}=t;if(!c)return new Error("property is required");let s=(n||globalThis)[c],p={},f=i(n,c);s&&("object"==typeof s||"function"==typeof s)&&Reflect.ownKeys(s).forEach(t=>{if(!a.includes(t)&&!r.includes(t)){let r=i(s,t);if(r&&(r.writable||r.configurable)){let{value:o,get:n,set:i,enumerable:c=!1}=r,a={};void 0!==o?a.value=o:n?a.get=n:i&&(a.set=i);try{let r=e({context:s,property:t,...a,enumerable:c});p[t]=r}catch(e){if(!(e instanceof TypeError))throw e;try{p[t]=r.value||r.get||r.set}catch{}}}}});let d={originalObject:s,originalProperties:p};if(!l&&void 0!==s?.prototype){let e=o({context:s,property:"prototype",propertiesToExclude:u,skipPrototype:!0});e instanceof Error||(d.originalPrototype=e?.originalObject,d.originalPrototypeProperties=e?.originalProperties)}return e({context:n,property:c,value:s,enumerable:f?.enumerable}),d}function n(t,r){let o=(r||globalThis)[t],n=i(r||globalThis,t);return o&&n&&(n.writable||n.configurable)?(Object.freeze(o),e({context:globalThis,property:t,value:o})):o}function i(e,t){if(e&&t)try{return Reflect.getOwnPropertyDescriptor(e,t)}catch{return}}function c(e){if("string"!=typeof e)return e;try{return decodeURIComponent(e).toLowerCase().trim()}catch{return e.toLowerCase().trim()}}function a(e,t){return e instanceof Headers?e.forEach((r,o)=>{l(o,t)||e.delete(o)}):Object.keys(e).forEach(r=>{l(r,t)||delete e[r]}),e}function l(e,t){return!t.has(c(e)||"")}function u(e,t){let r=!0,o=function(e){let t,r;if(globalThis.Request&&e instanceof Request)t=e.url;else{if("function"!=typeof e?.toString)throw new Error("Unsupported type for url");t=e.toString()}try{return new URL(t).pathname}catch{return r=t.replace(/#.+/gi,"").split("?").shift(),r.startsWith("/")?r:`/${r}`}}(e),n=c(o);return n&&t.some(e=>n.includes(e))&&(r=!1),r}function s(t,r,o){let n=fetch,i=XMLHttpRequest,c=new Set(r);function s(){let e=new i,r=e.open,n=e.setRequestHeader;return e.open=function(){let n=Array.from(arguments),i=n[1];if(n.length<2||u(i,t))return r.apply(e,n);throw new Error(o||`Request not allowed for path ${i}`)},e.setRequestHeader=function(t,r){l(decodeURIComponent(t),c)&&n.call(e,t,r)},e}return e({property:"fetch",value:function(){let e=function(e,t){return globalThis.Request&&e[0]instanceof Request&&e[0]?.headers?a(e[0].headers,t):e[1]?.headers&&a(e[1].headers,t),e}(arguments,c);return u(arguments[0],t)?n.apply(globalThis,Array.from(e)):new Promise((e,t)=>{t(new Error(o||`Request not allowed for path ${arguments[0]}`))})},enumerable:!0}),e({property:"XMLHttpRequest",value:s,enumerable:!0}),Object.keys(i).forEach(e=>{s[e]=i[e]}),{fetch:n,XMLHttpRequest:i}}var p=["TextEncoder","TextDecoder","XMLHttpRequestEventTarget","EventTarget","URL","JSON","Reflect","Object","Array","Map","Set","WeakMap","WeakSet","Promise","Symbol","Error"],f=["addEventListener","removeEventListener","dispatchEvent","encodeURI","encodeURIComponent","decodeURI","decodeURIComponent"];const d=function(){let t=globalThis.open,r=document.open;function o(e,r,o){let n="string"!=typeof e,i=t.call(window,e,r,o);return n||e&&function(e){return e.startsWith("//")&&/(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/g.test(`${location.protocol}:${e}`)&&(e=`${location.protocol}${e}`),!e.startsWith("http")||new URL(e).hostname===location.hostname}(e)?{}:i}return e({property:"open",value:o,context:globalThis,enumerable:!0}),e({property:"open",value:function(e,t,n){return e?o(e,t,n):r.call(document,e||"",t||"",n||"")},context:document,enumerable:!0}),{open:t,documentOpen:r}},y=function(){let t=document.createElement,r=Element.prototype.setAttribute,o=Element.prototype.setAttributeNS;return e({property:"createElement",context:document,value:function(n,i){let a=t.call(document,n,i);if("iframe"===c(n)){e({property:"srcdoc",context:a,get:()=>"",set:()=>{console.warn("`srcdoc` is not allowed in iframe elements.")}});let t=function(e,t){"srcdoc"!==e.toLowerCase()?r.call(a,e,t):console.warn("`srcdoc` attribute is not allowed to be set.")},n=function(e,t,r){"srcdoc"!==t.toLowerCase()?o.call(a,e,t,r):console.warn("`srcdoc` attribute is not allowed to be set.")};a.setAttribute=t,a.setAttributeNS=n}return a},enumerable:!0}),{createElement:t,setAttribute:r,setAttributeNS:o}},m=["client-binding"],b=["/_api/v1/access-tokens","/_api/v2/dynamicmodel","/_api/one-app-session-web/v3/businesses"],h=function(){let t=setTimeout,r=setInterval;return o("setTimeout",0,globalThis),o("setInterval",0,globalThis),{setTimeout:t,setInterval:r};function o(t,r,o){let n=o||globalThis,i=n[t];if(!i||"function"!=typeof i)throw new Error(`Function ${t} not found or is not a function`);e({property:t,value:function(){let e=Array.from(arguments);if("string"!=typeof e[r])return i.apply(n,e);console.warn(`Calling ${t} with a String Argument at index ${r} is not allowed`)},context:o,enumerable:!0})}},v=function(){if(navigator&&"serviceWorker"in navigator){let t=navigator.serviceWorker.register;return e({context:navigator.serviceWorker,property:"register",value:function(){console.log("Service worker registration is not allowed")},enumerable:!0}),{register:t}}return{}};performance.mark("overrideGlobals started");const{isExcludedFromSecurityExperiments:g,experiments:w}=window.viewerModel,E=!g&&w["specs.thunderbolt.securityExperiments"];try{d(),E&&y(),w["specs.thunderbolt.hardenFetchAndXHR"]&&E&&s(b,m),v(),(e=>{let t=[],r=[];r=r.concat(["TextEncoder","TextDecoder"]),e&&(r=r.concat(["XMLHttpRequestEventTarget","EventTarget"])),r=r.concat(["URL","JSON"]),e&&(t=t.concat(["addEventListener","removeEventListener"])),t=t.concat(["encodeURI","encodeURIComponent","decodeURI","decodeURIComponent"]),r=r.concat(["String","Number"]),e&&r.push("Object"),r=r.concat(["Reflect"]),t.forEach(e=>{n(e),["addEventListener","removeEventListener"].includes(e)&&n(e,document)}),r.forEach(e=>{o({property:e})})})(E),E&&h()}catch(e){window?.viewerModel?.mode.debug&&console.error(e);const t=new Error("TB006");window.fedops?.reportError(t,"security_overrideGlobals"),window.Sentry?window.Sentry.captureException(t):globalThis.defineStrictProperty("sentryBuffer",[t],window,!1)}performance.mark("overrideGlobals ended")})();
//# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.ec13bfcf.bundle.min.js.map</script>

<!-- END overrideGlobals bundle -->



  <script>
    window.commonConfig = viewerModel.commonConfig


  </script>

  <!-- Initial CSS -->
  <style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.347af09f.min.css">@keyframes slide-horizontal-new{0%{transform:translateX(100%)}}@keyframes slide-horizontal-old{80%{opacity:1}to{opacity:0;transform:translateX(-100%)}}@keyframes slide-vertical-new{0%{transform:translateY(-100%)}}@keyframes slide-vertical-old{80%{opacity:1}to{opacity:0;transform:translateY(100%)}}@keyframes out-in-new{0%{opacity:0}}@keyframes out-in-old{to{opacity:0}}:root:active-view-transition{view-transition-name:none}::view-transition{pointer-events:none}:root:active-view-transition::view-transition-new(page-group),:root:active-view-transition::view-transition-old(page-group){animation-duration:.6s;cursor:wait;pointer-events:all}:root:active-view-transition-type(SlideHorizontal)::view-transition-old(page-group){animation:slide-horizontal-old .6s cubic-bezier(.83,0,.17,1) forwards;mix-blend-mode:normal}:root:active-view-transition-type(SlideHorizontal)::view-transition-new(page-group){animation:slide-horizontal-new .6s cubic-bezier(.83,0,.17,1) backwards;mix-blend-mode:normal}:root:active-view-transition-type(SlideVertical)::view-transition-old(page-group){animation:slide-vertical-old .6s cubic-bezier(.83,0,.17,1) forwards;mix-blend-mode:normal}:root:active-view-transition-type(SlideVertical)::view-transition-new(page-group){animation:slide-vertical-new .6s cubic-bezier(.83,0,.17,1) backwards;mix-blend-mode:normal}:root:active-view-transition-type(OutIn)::view-transition-old(page-group){animation:out-in-old .35s cubic-bezier(.22,1,.36,1) forwards}:root:active-view-transition-type(OutIn)::view-transition-new(page-group){animation:out-in-new .35s cubic-bezier(.64,0,.78,0) .35s backwards}@media(prefers-reduced-motion:reduce){::view-transition-group(*),::view-transition-new(*),::view-transition-old(*){animation:none!important}}body,html{background:transparent;border:0;margin:0;outline:0;padding:0;vertical-align:baseline}body{--scrollbar-width:0px;font-family:Arial,Helvetica,sans-serif;font-size:10px}body,html{height:100%}body{overflow-x:auto;overflow-y:scroll}body:not(.responsive) #site-root{min-width:var(--site-width);width:100%}body:not([data-js-loaded]) [data-hide-prejs]{visibility:hidden}interact-element{display:contents}#SITE_CONTAINER{position:relative}:root{--one-unit:1vw;--section-max-width:9999px;--spx-stopper-max:9999px;--spx-stopper-min:0px;--browser-zoom:1}@supports(-webkit-appearance:none) and (stroke-color:transparent){:root{--safari-sticky-fix:opacity;--experimental-safari-sticky-fix:translateZ(0)}}@supports(container-type:inline-size){:root{--one-unit:1cqw}}[id^=oldHoverBox-]{mix-blend-mode:plus-lighter;transition:opacity .5s ease,visibility .5s ease}[data-mesh-id$=inlineContent-gridContainer]:has(>[id^=oldHoverBox-]){isolation:isolate}</style>
<style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.renderer.9cb0985f.min.css">a,abbr,acronym,address,applet,b,big,blockquote,button,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,footer,form,h1,h2,h3,h4,h5,h6,header,i,iframe,img,ins,kbd,label,legend,li,nav,object,ol,p,pre,q,s,samp,section,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,title,tr,tt,u,ul,var{background:transparent;border:0;margin:0;outline:0;padding:0;vertical-align:baseline}input,select,textarea{box-sizing:border-box;font-family:Helvetica,Arial,sans-serif}ol,ul{list-style:none}blockquote,q{quotes:none}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}a{cursor:pointer;text-decoration:none}.testStyles{overflow-y:hidden}.reset-button{-webkit-appearance:none;background:none;border:0;color:inherit;font:inherit;line-height:normal;outline:0;overflow:visible;padding:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}:focus{outline:none}body.device-mobile-optimized:not(.disable-site-overflow){overflow-x:hidden;overflow-y:scroll}body.device-mobile-optimized:not(.responsive) #SITE_CONTAINER{margin-left:auto;margin-right:auto;overflow-x:visible;position:relative;width:320px}body.device-mobile-optimized:not(.responsive):not(.blockSiteScrolling) #SITE_CONTAINER{margin-top:0}body.device-mobile-optimized>*{max-width:100%!important}body.device-mobile-optimized #site-root{overflow-x:hidden;overflow-y:hidden}@supports(overflow:clip){body.device-mobile-optimized #site-root{overflow-x:clip;overflow-y:clip}}body.device-mobile-non-optimized #SITE_CONTAINER #site-root{overflow-x:clip;overflow-y:clip}body.device-mobile-non-optimized.fullScreenMode{background-color:#5f6360}body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,body.device-mobile-non-optimized.fullScreenMode #site-root,body.fullScreenMode #WIX_ADS{visibility:hidden}body.fullScreenMode{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode.device-mobile-optimized #TINY_MENU{opacity:0;pointer-events:none}body.fullScreenMode-scrollable.device-mobile-optimized{overflow-x:hidden!important;overflow-y:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,body.fullScreenMode-scrollable.device-mobile-optimized #site-root{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,body.fullScreenMode-scrollable.device-mobile-optimized #masterPage{height:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout{height:0!important}body.blockSiteScrolling,body.siteScrollingBlocked{position:fixed;width:100%}body.blockSiteScrolling #SITE_CONTAINER{margin-top:calc(var(--blocked-site-scroll-margin-top)*-1)}#site-root{margin:0 auto;min-height:100%;position:relative;top:var(--wix-ads-height)}#site-root img:not([src]){visibility:hidden}#site-root svg img:not([src]){visibility:visible}.auto-generated-link{color:inherit}#SCROLL_TO_BOTTOM,#SCROLL_TO_TOP{height:0}.has-click-trigger{cursor:pointer}.fullScreenOverlay{bottom:0;display:flex;justify-content:center;left:0;overflow-y:hidden;position:fixed;right:0;top:-60px;z-index:1005}.fullScreenOverlay>.fullScreenOverlayContent{bottom:0;left:0;margin:0 auto;overflow:hidden;position:absolute;right:0;top:60px;transform:translateZ(0)}[data-mesh-id$=centeredContent],[data-mesh-id$=form],[data-mesh-id$=inlineContent]{pointer-events:none;position:relative}[data-mesh-id$=-gridWrapper],[data-mesh-id$=-rotated-wrapper]{pointer-events:none}[data-mesh-id$=-gridContainer]>*,[data-mesh-id$=-rotated-wrapper]>*,[data-mesh-id$=inlineContent]>:not([data-mesh-id$=-gridContainer]){pointer-events:auto}.device-mobile-optimized #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID{grid-area:2/1/3/2;-ms-grid-row:2;position:relative}#masterPage.mesh-layout{-ms-grid-rows:max-content max-content min-content max-content;-ms-grid-columns:100%;align-items:start;display:-ms-grid;display:grid;grid-template-columns:100%;grid-template-rows:max-content max-content min-content max-content;justify-content:stretch}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #SITE_FOOTER-placeholder,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER,#masterPage.mesh-layout #SITE_HEADER-placeholder,#masterPage.mesh-layout #SITE_HEADER_WRAPPER,#masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer{-ms-grid-row-align:start;-ms-grid-column-align:start;-ms-grid-column:1}#masterPage.mesh-layout #SITE_HEADER-placeholder,#masterPage.mesh-layout #SITE_HEADER_WRAPPER{grid-area:1/1/2/2;-ms-grid-row:1}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer{grid-area:3/1/4/2;-ms-grid-row:3}#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer{width:100%}#masterPage.mesh-layout #PAGES_CONTAINER{align-self:stretch}#masterPage.mesh-layout main#PAGES_CONTAINER{display:block}#masterPage.mesh-layout #SITE_FOOTER-placeholder,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER{grid-area:4/1/5/2;-ms-grid-row:4}#masterPage.mesh-layout #SITE_PAGES,#masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERcenteredContent],#masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERinlineContent]{height:100%}#masterPage.mesh-layout.desktop>*{width:100%}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #SITE_FOOTER,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER,#masterPage.mesh-layout #SITE_HEADER,#masterPage.mesh-layout #SITE_HEADER_WRAPPER,#masterPage.mesh-layout #SITE_PAGES,#masterPage.mesh-layout #masterPageinlineContent{position:relative}#masterPage.mesh-layout #SITE_HEADER{grid-area:1/1/2/2}#masterPage.mesh-layout #SITE_FOOTER{grid-area:4/1/5/2}#masterPage.mesh-layout.overflow-x-clip #SITE_FOOTER,#masterPage.mesh-layout.overflow-x-clip #SITE_HEADER{overflow-x:clip}[data-z-counter]{z-index:0}[data-z-counter="0"]{z-index:auto}.wixSiteProperties{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}:root{--wst-button-color-fill-primary:rgb(var(--color_48));--wst-button-color-border-primary:rgb(var(--color_49));--wst-button-color-text-primary:rgb(var(--color_50));--wst-button-color-fill-primary-hover:rgb(var(--color_51));--wst-button-color-border-primary-hover:rgb(var(--color_52));--wst-button-color-text-primary-hover:rgb(var(--color_53));--wst-button-color-fill-primary-disabled:rgb(var(--color_54));--wst-button-color-border-primary-disabled:rgb(var(--color_55));--wst-button-color-text-primary-disabled:rgb(var(--color_56));--wst-button-color-fill-secondary:rgb(var(--color_57));--wst-button-color-border-secondary:rgb(var(--color_58));--wst-button-color-text-secondary:rgb(var(--color_59));--wst-button-color-fill-secondary-hover:rgb(var(--color_60));--wst-button-color-border-secondary-hover:rgb(var(--color_61));--wst-button-color-text-secondary-hover:rgb(var(--color_62));--wst-button-color-fill-secondary-disabled:rgb(var(--color_63));--wst-button-color-border-secondary-disabled:rgb(var(--color_64));--wst-button-color-text-secondary-disabled:rgb(var(--color_65));--wst-color-fill-base-1:rgb(var(--color_36));--wst-color-fill-base-2:rgb(var(--color_37));--wst-color-fill-base-shade-1:rgb(var(--color_38));--wst-color-fill-base-shade-2:rgb(var(--color_39));--wst-color-fill-base-shade-3:rgb(var(--color_40));--wst-color-fill-accent-1:rgb(var(--color_41));--wst-color-fill-accent-2:rgb(var(--color_42));--wst-color-fill-accent-3:rgb(var(--color_43));--wst-color-fill-accent-4:rgb(var(--color_44));--wst-color-fill-background-primary:rgb(var(--color_11));--wst-color-fill-background-secondary:rgb(var(--color_12));--wst-color-text-primary:rgb(var(--color_15));--wst-color-text-secondary:rgb(var(--color_14));--wst-color-action:rgb(var(--color_18));--wst-color-disabled:rgb(var(--color_39));--wst-color-title:rgb(var(--color_45));--wst-color-subtitle:rgb(var(--color_46));--wst-color-line:rgb(var(--color_47));--wst-font-style-h2:var(--font_2);--wst-font-style-h3:var(--font_3);--wst-font-style-h4:var(--font_4);--wst-font-style-h5:var(--font_5);--wst-font-style-h6:var(--font_6);--wst-font-style-body-large:var(--font_7);--wst-font-style-body-medium:var(--font_8);--wst-font-style-body-small:var(--font_9);--wst-font-style-body-x-small:var(--font_10);--wst-color-custom-1:rgb(var(--color_13));--wst-color-custom-2:rgb(var(--color_16));--wst-color-custom-3:rgb(var(--color_17));--wst-color-custom-4:rgb(var(--color_19));--wst-color-custom-5:rgb(var(--color_20));--wst-color-custom-6:rgb(var(--color_21));--wst-color-custom-7:rgb(var(--color_22));--wst-color-custom-8:rgb(var(--color_23));--wst-color-custom-9:rgb(var(--color_24));--wst-color-custom-10:rgb(var(--color_25));--wst-color-custom-11:rgb(var(--color_26));--wst-color-custom-12:rgb(var(--color_27));--wst-color-custom-13:rgb(var(--color_28));--wst-color-custom-14:rgb(var(--color_29));--wst-color-custom-15:rgb(var(--color_30));--wst-color-custom-16:rgb(var(--color_31));--wst-color-custom-17:rgb(var(--color_32));--wst-color-custom-18:rgb(var(--color_33));--wst-color-custom-19:rgb(var(--color_34));--wst-color-custom-20:rgb(var(--color_35))}.wix-presets-wrapper{display:contents}</style>

  <meta name="format-detection" content="telephone=no">
  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">






      <!--pageHtmlEmbeds.head start-->
      <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head start"></script>

      <meta name="p:domain_verify" content="e6cf82d0d52bbff246ac11fdd6ad7fbc" />


      <meta name="facebook-domain-verification" content="l3js5d8krqfzy445pouhmvk90xmy08" />

      <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head end"></script>
      <!--pageHtmlEmbeds.head end-->


  <!-- head performance data start -->

  <!-- head performance data end -->





<meta http-equiv="X-Wix-Meta-Site-Id" content="6555a27a-21bd-45eb-b287-1c28900211e3">
<meta http-equiv="X-Wix-Application-Instance-Id" content="33fd3b59-3e57-4fad-92f4-3a2d0c2bf662">

    <meta http-equiv="X-Wix-Published-Version" content="1226"/>



    <meta http-equiv="etag" content="bug"/>

<!-- render-head end -->

<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap.a1b00b19.min.css">.cwL6XW{cursor:pointer}.sNF2R0{opacity:0}.hLoBV3{transition:opacity var(--transition-duration) cubic-bezier(.37,0,.63,1)}.Rdf41z,.hLoBV3{opacity:1}.ftlZWo{transition:opacity var(--transition-duration) cubic-bezier(.37,0,.63,1)}.ATGlOr,.ftlZWo{opacity:0}.KQSXD0{transition:opacity var(--transition-duration) cubic-bezier(.64,0,.78,0)}.KQSXD0,.pagQKE{opacity:1}._6zG5H{opacity:0;transition:opacity var(--transition-duration) cubic-bezier(.22,1,.36,1)}.BB49uC{transform:translateX(100%)}.j9xE1V{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.ICs7Rs,.j9xE1V{transform:translateX(0)}.DxijZJ{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.B5kjYq,.DxijZJ{transform:translateX(-100%)}.cJijIV{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.cJijIV,.hOxaWM{transform:translateX(0)}.T9p3fN{transform:translateX(100%);transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.qDxYJm{transform:translateY(100%)}.aA9V0P{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.YPXPAS,.aA9V0P{transform:translateY(0)}.Xf2zsA{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.Xf2zsA,.y7Kt7s{transform:translateY(-100%)}.EeUgMu{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.EeUgMu,.fdHrtm{transform:translateY(0)}.WIFaG4{transform:translateY(100%);transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}body:not(.responsive) .JsJXaX{overflow-x:clip}:root:active-view-transition .JsJXaX{view-transition-name:page-group}.AnQkDU{display:grid;grid-template-columns:1fr;grid-template-rows:1fr;height:100%}.AnQkDU>div{align-self:stretch!important;grid-area:1/1/2/2;justify-self:stretch!important}.StylableButton2545352419__root{-archetype:box;border:none;box-sizing:border-box;cursor:pointer;display:block;height:100%;min-height:10px;min-width:10px;padding:0;touch-action:manipulation;width:100%}.StylableButton2545352419__root[disabled]{pointer-events:none}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasBackgroundColor{background-color:var(--corvid-background-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverBackgroundColor{background-color:var(--corvid-hover-background-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledBackgroundColor{background-color:var(--corvid-disabled-background-color)!important}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasBorderColor{border-color:var(--corvid-border-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverBorderColor{border-color:var(--corvid-hover-border-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledBorderColor{border-color:var(--corvid-disabled-border-color)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius{border-radius:var(--corvid-border-radius)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth{border-width:var(--corvid-border-width)!important}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasColor,.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasColor .StylableButton2545352419__label{color:var(--corvid-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverColor,.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverColor .StylableButton2545352419__label{color:var(--corvid-hover-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledColor,.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledColor .StylableButton2545352419__label{color:var(--corvid-disabled-color)!important}.StylableButton2545352419__link{-archetype:box;box-sizing:border-box;color:#000;text-decoration:none}.StylableButton2545352419__container{align-items:center;display:flex;flex-basis:auto;flex-direction:row;flex-grow:1;height:100%;justify-content:center;overflow:hidden;transition:all .2s ease,visibility 0s;width:100%}.StylableButton2545352419__label{-archetype:text;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(first);max-width:100%;min-width:1.8em;overflow:hidden;text-align:center;text-overflow:ellipsis;transition:inherit;white-space:nowrap}.StylableButton2545352419__root.StylableButton2545352419--isMaxContent .StylableButton2545352419__label{text-overflow:unset}.StylableButton2545352419__root.StylableButton2545352419--isWrapText .StylableButton2545352419__label{min-width:10px;overflow-wrap:break-word;white-space:break-spaces;word-break:break-word}.StylableButton2545352419__icon{-archetype:icon;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(last);flex-shrink:0;height:50px;min-width:1px;transition:inherit}.StylableButton2545352419__icon.StylableButton2545352419--override{display:block!important}.StylableButton2545352419__icon svg,.StylableButton2545352419__icon>span{display:flex;height:inherit;width:inherit}.StylableButton2545352419__root:not(:hover):not([disalbed]).StylableButton2545352419--hasIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-icon-color)!important;stroke:var(--corvid-icon-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-hover-icon-color)!important;stroke:var(--corvid-hover-icon-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-disabled-icon-color)!important;stroke:var(--corvid-disabled-icon-color)!important}.aeyn4z{bottom:0;left:0;position:absolute;right:0;top:0}.qQrFOK{cursor:pointer}.VDJedC{-webkit-tap-highlight-color:rgba(0,0,0,0);fill:var(--corvid-fill-color,var(--fill));fill-opacity:var(--fill-opacity);stroke:var(--corvid-stroke-color,var(--stroke));stroke-opacity:var(--stroke-opacity);stroke-width:var(--stroke-width);filter:var(--drop-shadow,none);opacity:var(--opacity);transform:var(--flip)}.VDJedC,.VDJedC svg{bottom:0;left:0;position:absolute;right:0;top:0}.VDJedC svg{height:var(--svg-calculated-height,100%);margin:auto;padding:var(--svg-calculated-padding,0);width:var(--svg-calculated-width,100%)}.VDJedC svg:not([data-type=ugc]){overflow:visible}.l4CAhn *{vector-effect:non-scaling-stroke}.Z_l5lU{-webkit-text-size-adjust:100%;-moz-text-size-adjust:100%;text-size-adjust:100%}ol.font_100,ul.font_100{color:#080808;font-family:"Arial, Helvetica, sans-serif",serif;font-size:10px;font-style:normal;font-variant:normal;font-weight:400;letter-spacing:normal;line-height:normal;margin:0;text-decoration:none}ol.font_100 li,ul.font_100 li{margin-bottom:12px}ol.wix-list-text-align,ul.wix-list-text-align{list-style-position:inside}ol.wix-list-text-align h1,ol.wix-list-text-align h2,ol.wix-list-text-align h3,ol.wix-list-text-align h4,ol.wix-list-text-align h5,ol.wix-list-text-align h6,ol.wix-list-text-align p,ul.wix-list-text-align h1,ul.wix-list-text-align h2,ul.wix-list-text-align h3,ul.wix-list-text-align h4,ul.wix-list-text-align h5,ul.wix-list-text-align h6,ul.wix-list-text-align p{display:inline}.HQSswv{cursor:pointer}.yi6otz{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.zQ9jDz [data-attr-richtext-marker=true]{display:block}.zQ9jDz [data-attr-richtext-marker=true] table{border-collapse:collapse;margin:15px 0;width:100%}.zQ9jDz [data-attr-richtext-marker=true] table td{padding:12px;position:relative}.zQ9jDz [data-attr-richtext-marker=true] table td:after{border-bottom:1px solid currentColor;border-left:1px solid currentColor;bottom:0;content:"";left:0;opacity:.2;position:absolute;right:0;top:0}.zQ9jDz [data-attr-richtext-marker=true] table tr td:last-child:after{border-right:1px solid currentColor}.zQ9jDz [data-attr-richtext-marker=true] table tr:first-child td:after{border-top:1px solid currentColor}@supports(-webkit-appearance:none) and (stroke-color:transparent){.qvSjx3>*>:first-child{vertical-align:top}}@supports(-webkit-touch-callout:none){.qvSjx3>*>:first-child{vertical-align:top}}.LkZBpT :is(p,h1,h2,h3,h4,h5,h6,ul,ol,span[data-attr-richtext-marker],blockquote,div) [class$=rich-text__text],.LkZBpT :is(p,h1,h2,h3,h4,h5,h6,ul,ol,span[data-attr-richtext-marker],blockquote,div)[class$=rich-text__text]{color:var(--corvid-color,currentColor)}.LkZBpT :is(p,h1,h2,h3,h4,h5,h6,ul,ol,span[data-attr-richtext-marker],blockquote,div) span[style*=color]{color:var(--corvid-color,currentColor)!important}.Kbom4H{direction:var(--text-direction);min-height:var(--min-height);min-width:var(--min-width)}.Kbom4H .upNqi2{word-wrap:break-word;height:100%;overflow-wrap:break-word;position:relative;width:100%}.Kbom4H .upNqi2 ul{list-style:disc inside}.Kbom4H .upNqi2 li{margin-bottom:12px}.MMl86N blockquote,.MMl86N div,.MMl86N h1,.MMl86N h2,.MMl86N h3,.MMl86N h4,.MMl86N h5,.MMl86N h6,.MMl86N p{letter-spacing:normal;line-height:normal}.gYHZuN{min-height:var(--min-height);min-width:var(--min-width)}.gYHZuN .upNqi2{word-wrap:break-word;height:100%;overflow-wrap:break-word;position:relative;width:100%}.gYHZuN .upNqi2 ol,.gYHZuN .upNqi2 ul{letter-spacing:normal;line-height:normal;margin-inline-start:.5em;padding-inline-start:1.3em}.gYHZuN .upNqi2 ul{list-style-type:disc}.gYHZuN .upNqi2 ol{list-style-type:decimal}.gYHZuN .upNqi2 ol ul,.gYHZuN .upNqi2 ul ul{line-height:normal;list-style-type:circle}.gYHZuN .upNqi2 ol ol ul,.gYHZuN .upNqi2 ol ul ul,.gYHZuN .upNqi2 ul ol ul,.gYHZuN .upNqi2 ul ul ul{line-height:normal;list-style-type:square}.gYHZuN .upNqi2 li{font-style:inherit;font-weight:inherit;letter-spacing:normal;line-height:inherit}.gYHZuN .upNqi2 h1,.gYHZuN .upNqi2 h2,.gYHZuN .upNqi2 h3,.gYHZuN .upNqi2 h4,.gYHZuN .upNqi2 h5,.gYHZuN .upNqi2 h6,.gYHZuN .upNqi2 p{letter-spacing:normal;line-height:normal;margin-block:0;margin:0}.gYHZuN .upNqi2 a{color:inherit}.MMl86N,.ku3DBC{word-wrap:break-word;direction:var(--text-direction);min-height:var(--min-height);min-width:var(--min-width);mix-blend-mode:var(--blendMode,normal);overflow-wrap:break-word;pointer-events:none;text-align:start;text-shadow:var(--textOutline,0 0 transparent),var(--textShadow,0 0 transparent);text-transform:var(--textTransform,"none")}.MMl86N>*,.ku3DBC>*{pointer-events:auto}.MMl86N li,.ku3DBC li{font-style:inherit;font-weight:inherit;letter-spacing:normal;line-height:inherit}.MMl86N ol,.MMl86N ul,.ku3DBC ol,.ku3DBC ul{letter-spacing:normal;line-height:normal;margin-inline-end:0;margin-inline-start:.5em}.MMl86N:not(.Vq6kJx) ol,.MMl86N:not(.Vq6kJx) ul,.ku3DBC:not(.Vq6kJx) ol,.ku3DBC:not(.Vq6kJx) ul{padding-inline-end:0;padding-inline-start:1.3em}.MMl86N ul,.ku3DBC ul{list-style-type:disc}.MMl86N ol,.ku3DBC ol{list-style-type:decimal}.MMl86N ol ul,.MMl86N ul ul,.ku3DBC ol ul,.ku3DBC ul ul{list-style-type:circle}.MMl86N ol ol ul,.MMl86N ol ul ul,.MMl86N ul ol ul,.MMl86N ul ul ul,.ku3DBC ol ol ul,.ku3DBC ol ul ul,.ku3DBC ul ol ul,.ku3DBC ul ul ul{list-style-type:square}.MMl86N blockquote,.MMl86N div,.MMl86N h1,.MMl86N h2,.MMl86N h3,.MMl86N h4,.MMl86N h5,.MMl86N h6,.MMl86N p,.ku3DBC blockquote,.ku3DBC div,.ku3DBC h1,.ku3DBC h2,.ku3DBC h3,.ku3DBC h4,.ku3DBC h5,.ku3DBC h6,.ku3DBC p{margin-block:0;margin:0}.MMl86N a,.ku3DBC a{color:inherit}.Vq6kJx li{margin-inline-end:0;margin-inline-start:1.3em}.Vd6aQZ{overflow:hidden;padding:0;pointer-events:none;white-space:nowrap}.mHZSwn{display:none}.lvxhkV{bottom:0;left:0;position:absolute;right:0;top:0;width:100%}.QJjwEo{transform:translateY(-100%);transition:.2s ease-in}.kdBXfh{transition:.2s}.MP52zt{opacity:0;transition:.2s ease-in}.MP52zt.Bhu9m5{z-index:-1!important}.LVP8Wf{opacity:1;transition:.2s}.VrZrC0{height:auto}.VrZrC0,.cKxVkc{position:relative;width:100%}:host(:not(.device-mobile-optimized)) .vlM3HR,body:not(.device-mobile-optimized) .vlM3HR{margin-left:calc((100% - var(--site-width))/2);width:var(--site-width)}.AT7o0U[data-focuscycled=active]{outline:1px solid transparent}.AT7o0U[data-focuscycled=active]:not(:focus-within){outline:2px solid transparent;transition:outline .01s ease}.AT7o0U .vlM3HR{bottom:0;left:0;position:absolute;right:0;top:0}.Tj01hh,.jhxvbR{display:block;height:100%;width:100%}.jhxvbR img{max-width:var(--wix-img-max-width,100%)}.jhxvbR[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.jhxvbR[data-animate-blur] img[data-load-done]{filter:none}.WzbAF8{direction:var(--direction)}.WzbAF8 .mpGTIt .O6KwRn{display:var(--item-display);height:var(--item-size);margin-block:var(--item-margin-block);margin-inline:var(--item-margin-inline);width:var(--item-size)}.WzbAF8 .mpGTIt .O6KwRn:last-child{margin-block:0;margin-inline:0}.WzbAF8 .mpGTIt .O6KwRn .oRtuWN{display:block}.WzbAF8 .mpGTIt .O6KwRn .oRtuWN .YaS0jR{height:var(--item-size);width:var(--item-size)}.WzbAF8 .mpGTIt{height:100%;position:absolute;white-space:nowrap;width:100%}:host(.device-mobile-optimized) .WzbAF8 .mpGTIt,body.device-mobile-optimized .WzbAF8 .mpGTIt{white-space:normal}.big2ZD{display:grid;grid-template-columns:1fr;grid-template-rows:1fr;height:calc(100% - var(--wix-ads-height));left:0;margin-top:var(--wix-ads-height);position:fixed;top:0;width:100%}.SHHiV9,.big2ZD{pointer-events:none;z-index:var(--pinned-layer-in-container,var(--above-all-in-container))}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-responsive.5018a9e9.min.css">._pfxlW{clip-path:inset(50%);height:24px;position:absolute;width:24px}._pfxlW:active,._pfxlW:focus{clip-path:unset;right:0;top:50%;transform:translateY(-50%)}._pfxlW.RG3k61{transform:translateY(-50%) rotate(180deg)}.r4OX7l,.xTjc1A{box-sizing:border-box;height:100%;overflow:visible;position:relative;width:auto}.r4OX7l[data-state~=header] a,.r4OX7l[data-state~=header] div,[data-state~=header].xTjc1A a,[data-state~=header].xTjc1A div{cursor:default!important}.r4OX7l .UiHgGh,.xTjc1A .UiHgGh{display:inline-block;height:100%;width:100%}.xTjc1A{--display:inline-block;cursor:pointer;display:var(--display);font:var(--fnt,var(--font_1))}.xTjc1A .yRj2ms{padding:0 var(--pad,5px)}.xTjc1A .JS76Uv{color:rgb(var(--txt,var(--color_15,color_15)));display:inline-block;padding:0 10px;transition:var(--trans,color .4s ease 0s)}.xTjc1A[data-state~=drop]{display:block;width:100%}.xTjc1A[data-state~=drop] .JS76Uv{padding:0 .5em}.xTjc1A[data-state~=link]:hover .JS76Uv,.xTjc1A[data-state~=over] .JS76Uv{color:rgb(var(--txth,var(--color_14,color_14)));transition:var(--trans,color .4s ease 0s)}.xTjc1A[data-state~=selected] .JS76Uv{color:rgb(var(--txts,var(--color_14,color_14)));transition:var(--trans,color .4s ease 0s)}.NHM1d1{overflow-x:hidden}.NHM1d1 .R_TAzU{display:flex;flex-direction:column;height:100%;width:100%}.NHM1d1 .R_TAzU .aOF1ks{flex:1}.NHM1d1 .R_TAzU .y7qwii{height:calc(100% - (var(--menuTotalBordersY, 0px)));overflow:visible;white-space:nowrap;width:calc(100% - (var(--menuTotalBordersX, 0px)))}.NHM1d1 .R_TAzU .y7qwii .Tg1gOB,.NHM1d1 .R_TAzU .y7qwii .p90CkU{direction:var(--menu-direction);display:inline-block;text-align:var(--menu-align,var(--align))}.NHM1d1 .R_TAzU .y7qwii .mvZ3NH{display:block;width:100%}.NHM1d1 .h3jCPd{direction:var(--submenus-direction);display:block;opacity:1;text-align:var(--submenus-align,var(--align));z-index:99999}.NHM1d1 .h3jCPd .wkJ2fp{display:inherit;overflow:visible;visibility:inherit;white-space:nowrap;width:auto}.NHM1d1 .h3jCPd.DlGBN0{transition:visibility;transition-delay:.2s;visibility:visible}.NHM1d1 .h3jCPd .p90CkU{display:inline-block}.NHM1d1 .vh74Xw{display:none}.XwCBRN>nav{bottom:0;left:0;right:0;top:0}.XwCBRN .h3jCPd,.XwCBRN .y7qwii,.XwCBRN>nav{position:absolute}.XwCBRN .h3jCPd{margin-top:7px;visibility:hidden}.XwCBRN .h3jCPd[data-dropMode=dropUp]{margin-bottom:7px;margin-top:0}.XwCBRN .wkJ2fp{background-color:rgba(var(--bgDrop,var(--color_11,color_11)),var(--alpha-bgDrop,1));border-radius:var(--rd,0);box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6))}.P0dCOY .PJ4KCX{background-color:rgba(var(--bg,var(--color_11,color_11)),var(--alpha-bg,1));bottom:0;left:0;overflow:hidden;position:absolute;right:0;top:0}.xpmKd_{border-radius:var(--overflow-wrapper-border-radius)}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-classic.72e6a2a3.min.css">.PlZyDq{touch-action:manipulation}.uDW_Qe{align-items:center;box-sizing:border-box;display:flex;justify-content:var(--label-align);min-width:100%;text-align:initial;width:-moz-max-content;width:max-content}.uDW_Qe:before{max-width:var(--margin-start,0)}.uDW_Qe:after,.uDW_Qe:before{align-self:stretch;content:"";flex-grow:1}.uDW_Qe:after{max-width:var(--margin-end,0)}.FubTgk{height:100%}.FubTgk .uDW_Qe{border-radius:var(--corvid-border-radius,var(--rd,0));bottom:0;box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6));left:0;position:absolute;right:0;top:0;transition:var(--trans1,border-color .4s ease 0s,background-color .4s ease 0s)}.FubTgk .uDW_Qe:link,.FubTgk .uDW_Qe:visited{border-color:transparent}.FubTgk .l7_2fn{color:var(--corvid-color,rgb(var(--txt,var(--color_15,color_15))));font:var(--fnt,var(--font_5));margin:0;position:relative;transition:var(--trans2,color .4s ease 0s);white-space:nowrap}.FubTgk[aria-disabled=false] .uDW_Qe{background-color:var(--corvid-background-color,rgba(var(--bg,var(--color_17,color_17)),var(--alpha-bg,1)));border:solid var(--corvid-border-color,rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1))) var(--corvid-border-width,var(--brw,0));cursor:pointer!important}:host(.device-mobile-optimized) .FubTgk[aria-disabled=false]:active .uDW_Qe,body.device-mobile-optimized .FubTgk[aria-disabled=false]:active .uDW_Qe{background-color:var(--corvid-hover-background-color,rgba(var(--bgh,var(--color_18,color_18)),var(--alpha-bgh,1)));border-color:var(--corvid-hover-border-color,rgba(var(--brdh,var(--color_15,color_15)),var(--alpha-brdh,1)))}:host(.device-mobile-optimized) .FubTgk[aria-disabled=false]:active .l7_2fn,body.device-mobile-optimized .FubTgk[aria-disabled=false]:active .l7_2fn{color:var(--corvid-hover-color,rgb(var(--txth,var(--color_15,color_15))))}:host(:not(.device-mobile-optimized)) .FubTgk[aria-disabled=false]:hover .uDW_Qe,body:not(.device-mobile-optimized) .FubTgk[aria-disabled=false]:hover .uDW_Qe{background-color:var(--corvid-hover-background-color,rgba(var(--bgh,var(--color_18,color_18)),var(--alpha-bgh,1)));border-color:var(--corvid-hover-border-color,rgba(var(--brdh,var(--color_15,color_15)),var(--alpha-brdh,1)))}:host(:not(.device-mobile-optimized)) .FubTgk[aria-disabled=false]:hover .l7_2fn,body:not(.device-mobile-optimized) .FubTgk[aria-disabled=false]:hover .l7_2fn{color:var(--corvid-hover-color,rgb(var(--txth,var(--color_15,color_15))))}.FubTgk[aria-disabled=true] .uDW_Qe{background-color:var(--corvid-disabled-background-color,rgba(var(--bgd,204,204,204),var(--alpha-bgd,1)));border-color:var(--corvid-disabled-border-color,rgba(var(--brdd,204,204,204),var(--alpha-brdd,1)));border-style:solid;border-width:var(--corvid-border-width,var(--brw,0))}.FubTgk[aria-disabled=true] .l7_2fn{color:var(--corvid-disabled-color,rgb(var(--txtd,255,255,255)))}.uUxqWY{align-items:center;box-sizing:border-box;display:flex;justify-content:var(--label-align);min-width:100%;text-align:initial;width:-moz-max-content;width:max-content}.uUxqWY:before{max-width:var(--margin-start,0)}.uUxqWY:after,.uUxqWY:before{align-self:stretch;content:"";flex-grow:1}.uUxqWY:after{max-width:var(--margin-end,0)}.Vq4wYb[aria-disabled=false] .uUxqWY{cursor:pointer}:host(.device-mobile-optimized) .Vq4wYb[aria-disabled=false]:active .wJVzSK,body.device-mobile-optimized .Vq4wYb[aria-disabled=false]:active .wJVzSK{color:var(--corvid-hover-color,rgb(var(--txth,var(--color_15,color_15))));transition:var(--trans,color .4s ease 0s)}:host(:not(.device-mobile-optimized)) .Vq4wYb[aria-disabled=false]:hover .wJVzSK,body:not(.device-mobile-optimized) .Vq4wYb[aria-disabled=false]:hover .wJVzSK{color:var(--corvid-hover-color,rgb(var(--txth,var(--color_15,color_15))));transition:var(--trans,color .4s ease 0s)}.Vq4wYb .uUxqWY{bottom:0;left:0;position:absolute;right:0;top:0}.Vq4wYb .wJVzSK{color:var(--corvid-color,rgb(var(--txt,var(--color_15,color_15))));font:var(--fnt,var(--font_5));transition:var(--trans,color .4s ease 0s);white-space:nowrap}.Vq4wYb[aria-disabled=true] .wJVzSK{color:var(--corvid-disabled-color,rgb(var(--txtd,255,255,255)))}:host(:not(.device-mobile-optimized)) .CohWsy,body:not(.device-mobile-optimized) .CohWsy{display:flex}:host(:not(.device-mobile-optimized)) .V5AUxf,body:not(.device-mobile-optimized) .V5AUxf{-moz-column-gap:var(--margin);column-gap:var(--margin);direction:var(--direction);display:flex;margin:0 auto;position:relative;width:calc(100% - var(--padding)*2)}:host(:not(.device-mobile-optimized)) .V5AUxf>*,body:not(.device-mobile-optimized) .V5AUxf>*{direction:ltr;flex:var(--column-flex) 1 0%;left:0;margin-bottom:var(--padding);margin-top:var(--padding);min-width:0;position:relative;top:0}:host(.device-mobile-optimized) .V5AUxf,body.device-mobile-optimized .V5AUxf{display:block;padding-bottom:var(--padding-y);padding-left:var(--padding-x,0);padding-right:var(--padding-x,0);padding-top:var(--padding-y);position:relative}:host(.device-mobile-optimized) .V5AUxf>*,body.device-mobile-optimized .V5AUxf>*{margin-bottom:var(--margin);position:relative}:host(.device-mobile-optimized) .V5AUxf>:first-child,body.device-mobile-optimized .V5AUxf>:first-child{margin-top:var(--firstChildMarginTop,0)}:host(.device-mobile-optimized) .V5AUxf>:last-child,body.device-mobile-optimized .V5AUxf>:last-child{margin-bottom:var(--lastChildMarginBottom)}.LIhNy3{backface-visibility:hidden}.jhxvbR,.mtrorN{display:block;height:100%;width:100%}.jhxvbR img{max-width:var(--wix-img-max-width,100%)}.jhxvbR[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.jhxvbR[data-animate-blur] img[data-load-done]{filter:none}.if7Vw2{height:100%;left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0;width:100%}.if7Vw2.f0uTJH{clip:rect(0,auto,auto,0)}.if7Vw2 .i1tH8h{height:100%;position:absolute;top:0;width:100%}.if7Vw2 .DXi4PB{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.if7Vw2 .DXi4PB img{height:100%;width:100%}@supports(-webkit-hyphens:none){.if7Vw2.f0uTJH{clip:auto;-webkit-clip-path:inset(0)}}.wG8dni{height:100%}.tcElKx{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient);transition:var(--inherit-transition)}.ImALHf,.Ybjs9b{opacity:var(--fill-layer-video-opacity)}.UWmm3w{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.Yjj1af{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.ImALHf{height:100%;position:relative;width:100%}.KCM6zk{opacity:var(--fill-layer-video-opacity,var(--fill-layer-image-opacity,1))}.KCM6zk .DXi4PB,.KCM6zk .ImALHf,.KCM6zk .Ybjs9b{opacity:1}._uqPqy{clip-path:var(--fill-layer-clip)}._uqPqy,.eKyYhK{position:absolute;top:0}._uqPqy,.eKyYhK,.x0mqQS img{height:100%;width:100%}.pnCr6P{opacity:0}.blf7sp,.pnCr6P{position:absolute;top:0}.blf7sp{height:0;left:0;overflow:hidden;width:0}.rWP3Gv{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.Tr4n3d,.rWP3Gv,.wRqk6s{height:100%;top:0;width:100%}.wRqk6s{position:absolute}.Tr4n3d{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.Tr4n3d{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}.VXAmO2{--divider-pin-height__:min(1,calc(var(--divider-layers-pin-factor__) + 1));--divider-pin-layer-height__:var( --divider-layers-pin-factor__ );--divider-pin-border__:min(1,calc(var(--divider-layers-pin-factor__) / -1 + 1));height:calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))}.VXAmO2,.VXAmO2 .dy3w_9{left:0;position:absolute;width:100%}.VXAmO2 .dy3w_9{--divider-layer-i__:var(--divider-layer-i,0);background-position:left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;background-repeat:repeat-x;border-bottom-style:solid;border-bottom-width:calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));height:calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));opacity:calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))}.UORcXs{--divider-height__:var(--divider-top-height,auto);--divider-offset-x__:var(--divider-top-offset-x,0px);--divider-layers-size__:var(--divider-top-layers-size,0);--divider-layers-y__:var(--divider-top-layers-y,0px);--divider-layers-x__:var(--divider-top-layers-x,0px);--divider-layers-pin-factor__:var(--divider-top-layers-pin-factor,0);border-top:var(--divider-top-padding,0) solid var(--divider-top-color,currentColor);opacity:var(--divider-top-opacity,1);top:0;transform:var(--divider-top-flip,scaleY(-1))}.UORcXs .dy3w_9{background-image:var(--divider-top-image,none);background-size:var(--divider-top-size,contain);border-color:var(--divider-top-color,currentColor);bottom:0;filter:var(--divider-top-filter,none)}.UORcXs .dy3w_9[data-divider-layer="1"]{display:var(--divider-top-layer-1-display,block)}.UORcXs .dy3w_9[data-divider-layer="2"]{display:var(--divider-top-layer-2-display,block)}.UORcXs .dy3w_9[data-divider-layer="3"]{display:var(--divider-top-layer-3-display,block)}.Io4VUz{--divider-height__:var(--divider-bottom-height,auto);--divider-offset-x__:var(--divider-bottom-offset-x,0px);--divider-layers-size__:var(--divider-bottom-layers-size,0);--divider-layers-y__:var(--divider-bottom-layers-y,0px);--divider-layers-x__:var(--divider-bottom-layers-x,0px);--divider-layers-pin-factor__:var(--divider-bottom-layers-pin-factor,0);border-bottom:var(--divider-bottom-padding,0) solid var(--divider-bottom-color,currentColor);bottom:0;opacity:var(--divider-bottom-opacity,1);transform:var(--divider-bottom-flip,none)}.Io4VUz .dy3w_9{background-image:var(--divider-bottom-image,none);background-size:var(--divider-bottom-size,contain);border-color:var(--divider-bottom-color,currentColor);bottom:0;filter:var(--divider-bottom-filter,none)}.Io4VUz .dy3w_9[data-divider-layer="1"]{display:var(--divider-bottom-layer-1-display,block)}.Io4VUz .dy3w_9[data-divider-layer="2"]{display:var(--divider-bottom-layer-2-display,block)}.Io4VUz .dy3w_9[data-divider-layer="3"]{display:var(--divider-bottom-layer-3-display,block)}.YzqVVZ{overflow:visible;position:relative}.mwF7X1{backface-visibility:hidden}.YGilLk{cursor:pointer}.Tj01hh{display:block}.MW5IWV,.Tj01hh{height:100%;width:100%}.MW5IWV{left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0}.MW5IWV.N3eg0s{clip:rect(0,auto,auto,0)}.MW5IWV .Kv1aVt{height:100%;position:absolute;top:0;width:100%}.MW5IWV .dLPlxY{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.MW5IWV .dLPlxY img{height:100%;width:100%}@supports(-webkit-hyphens:none){.MW5IWV.N3eg0s{clip:auto;-webkit-clip-path:inset(0)}}.VgO9Yg{height:100%}.LWbAav{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient);transition:var(--inherit-transition)}.K_YxMd,.yK6aSC{opacity:var(--fill-layer-video-opacity)}.NGjcJN{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.mNGsUM{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.K_YxMd{height:100%;position:relative;width:100%}wix-media-canvas{display:block;height:100%}.I8xA4L{opacity:var(--fill-layer-video-opacity,var(--fill-layer-image-opacity,1))}.I8xA4L .K_YxMd,.I8xA4L .dLPlxY,.I8xA4L .yK6aSC{opacity:1}.bX9O_S{clip-path:var(--fill-layer-clip)}.Z_wCwr,.bX9O_S{position:absolute;top:0}.Jxk_UL img,.Z_wCwr,.bX9O_S{height:100%;width:100%}.K8MSra{opacity:0}.K8MSra,.YTb3b4{position:absolute;top:0}.YTb3b4{height:0;left:0;overflow:hidden;width:0}.SUz0WK{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.FNxOn5,.SUz0WK,.m4khSP{height:100%;top:0;width:100%}.FNxOn5{position:absolute}.m4khSP{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.m4khSP{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}._C0cVf{bottom:0;left:0;position:absolute;right:0;top:0;width:100%}.hFwGTD{transform:translateY(-100%);transition:.2s ease-in}.IQgXoP{transition:.2s}.Nr3Nid{opacity:0;transition:.2s ease-in}.Nr3Nid.l4oO6c{z-index:-1!important}.iQuoC4{opacity:1;transition:.2s}.CJF7A2{height:auto}.CJF7A2,.U4Bvut{position:relative;width:100%}:host(:not(.device-mobile-optimized)) .G5K6X8,body:not(.device-mobile-optimized) .G5K6X8{margin-left:calc((100% - var(--site-width))/2);width:var(--site-width)}.xU8fqS[data-focuscycled=active]{outline:1px solid transparent}.xU8fqS[data-focuscycled=active]:not(:focus-within){outline:2px solid transparent;transition:outline .01s ease}.xU8fqS ._4XcTfy{background-color:var(--screenwidth-corvid-background-color,rgba(var(--bg,var(--color_11,color_11)),var(--alpha-bg,1)));border-bottom:var(--brwb,0) solid var(--screenwidth-corvid-border-color,rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1)));border-top:var(--brwt,0) solid var(--screenwidth-corvid-border-color,rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1)));bottom:0;box-shadow:var(--shd,0 0 5px rgba(0,0,0,.7));left:0;position:absolute;right:0;top:0}.xU8fqS .gUbusX{background-color:rgba(var(--bgctr,var(--color_11,color_11)),var(--alpha-bgctr,1));border-radius:var(--rd,0);bottom:var(--brwb,0);top:var(--brwt,0)}.xU8fqS .G5K6X8,.xU8fqS .gUbusX{left:0;position:absolute;right:0}.xU8fqS .G5K6X8{bottom:0;top:0}:host(.device-mobile-optimized) .xU8fqS .G5K6X8,body.device-mobile-optimized .xU8fqS .G5K6X8{left:10px;right:10px}.SPY_vo{pointer-events:none}.BmZ5pC{min-height:calc(100vh - var(--wix-ads-height));min-width:var(--site-width);position:var(--bg-position);top:var(--wix-ads-height)}.BmZ5pC,.nTOEE9{height:100%;width:100%}.nTOEE9{overflow:hidden;position:relative}.nTOEE9.sqUyGm:hover{cursor:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM3MEUzMUU4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM3MEUzMUQ4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4bqsJgAAACF0lEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPmgI0F2YdmxXQUhX///sVQqK2tDVL4DFkhF8zK2NjY/4aGhshOOMJAJAB5ZjdAADGQCpiB4Cear3uwKQR74vv372BPLFq0CKZ4GnLcdMGiFtnXmzZtQo0Bdnb2r/b29nBFMIwUjkxghby8vHfFxMQwTMQWp0YggZcvX/5HBpqamhgKQdafAQnq6en9j4+P/4/me150nzsCPfYOKrkWKvYCymcjJozPgqIYIMAYcUjKAnEcELsDbVECOpkNiO8B+buAeCEQ3yUqFllYWNYh+4Obm/u/ubn5f0tLy//QPIqM90ATHVagDHTJH5BCfn7+/xcvXvyPC9y7d+8/KHqghv4FYj0M04BxeAOkQEhI6P+vX79QDECOeBj49+/ffzk5OZih91FyP4gAGiIDooH5hIGVlRUsAXQpGMMAMh+Y1xksLCzg5QxGrAFzwAxY2GzYsIGgC48cOYIclsuwBiIbG9sCmCJFRcX/+/fvxwi/EydOwIoDGH6JLQEiA26ga1egxSY2vAUpkcKKEV5iCwVOIObBU8w8RzLYgYHaAAACg5CxaxSLgwAAAABJRU5ErkJggg==),auto}.nTOEE9.C_JY0G:hover{cursor:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0I4QkNGQTI4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0I4QkNGQTE4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7hiSPZAAACGklEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPm/EcHUA3TURT+/fsXQ6G2tjZI4TNkhVwwK2NjY/8bGhoiO+EIA5EA5JndAAHEQCpgBoKfaL7uwaYQHLrfv38He2LRokUwxdOQ46YLFrXIYNOmTagxwM7O/tXe3h4sCYs3EEYKRyawQl5e3rtiYmL/sQH0ODUCCbx8+RJFkaamJoZCkPVnQIJ6enr/4+Pj/6P5nhfd545Aj72DSq6Fir2A8tmICeOzoCgGCDBGHJKyQBwHxO5AW5SATmYD4ntA/i4gXgjEd4mKRRYWlnXI/uDm5v5vbm7+39LS8j80jyLjPdBEhxUoA13yB6SQn5///8WLF//jAvfu3fsPih6ooX+BWA/DNGAc3gApEBIS+v/r16//hMC/f//+y8nJwQy9j2wWC4gAGiIDooH5hIGVlRUsAXQpVq98/PgRVBAwWFhYMDx69AhczkBj7RdyFpgBC5sNGzYQdOGRI0eQw3IZVpvZ2NgWwBQpKir+379/P4ZBJ06cgBUHMPwSWwJEBtxA165Ai01seAtSIoUVI7zEFgqcQMyDp5h5jmSwAwO1AQBU5q033XYWQwAAAABJRU5ErkJggg==),auto}.RZQnmg{background-color:rgb(var(--color_11));border-radius:50%;bottom:12px;height:40px;opacity:0;pointer-events:none;position:absolute;right:12px;width:40px}.RZQnmg path{fill:rgb(var(--color_15))}.RZQnmg:focus{cursor:auto;opacity:1;pointer-events:auto}.rYiAuL{cursor:pointer}.gSXewE{height:0;left:0;overflow:hidden;top:0;width:0}.OJQ_3L,.gSXewE{position:absolute}.OJQ_3L{background-color:rgb(var(--color_11));border-radius:300px;bottom:0;cursor:pointer;height:40px;margin:16px 16px;opacity:0;pointer-events:none;right:0;width:40px}.OJQ_3L path{fill:rgb(var(--color_12))}.OJQ_3L:focus{cursor:auto;opacity:1;pointer-events:auto}.j7pOnl{box-sizing:border-box;height:100%;width:100%}.BI8PVQ{min-height:var(--image-min-height);min-width:var(--image-min-width)}.BI8PVQ img,img.BI8PVQ{filter:var(--filter-effect-svg-url);-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100% 100%);mask-size:var(--mask-size,100% 100%);-o-object-position:var(--object-position);object-position:var(--object-position)}.MazNVa{left:var(--left,auto);position:var(--position-fixed,static);top:var(--top,auto);z-index:var(--z-index,auto)}.MazNVa .BI8PVQ img{box-shadow:0 0 0 #000;position:static;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.MazNVa .j7pOnl{display:block;overflow:hidden}.MazNVa .BI8PVQ{overflow:hidden}.c7cMWz{bottom:0;left:0;position:absolute;right:0;top:0}.FVGvCX{height:auto;position:relative;width:100%}body:not(.responsive) .zK7MhX{align-self:start;grid-area:1/1/1/1;height:100%;justify-self:stretch;left:0;position:relative}:host(:not(.device-mobile-optimized)) .c7cMWz,body:not(.device-mobile-optimized) .c7cMWz{margin-left:calc((100% - var(--site-width))/2);width:var(--site-width)}.fEm0Bo .c7cMWz{background-color:rgba(var(--bg,var(--color_11,color_11)),var(--alpha-bg,1));overflow:hidden}:host(.device-mobile-optimized) .c7cMWz,body.device-mobile-optimized .c7cMWz{left:10px;right:10px}.PFkO7r{bottom:0;left:0;position:absolute;right:0;top:0}.HT5ybB{height:auto;position:relative;width:100%}body:not(.responsive) .dBAkHi{align-self:start;grid-area:1/1/1/1;height:100%;justify-self:stretch;left:0;position:relative}:host(:not(.device-mobile-optimized)) .PFkO7r,body:not(.device-mobile-optimized) .PFkO7r{margin-left:calc((100% - var(--site-width))/2);width:var(--site-width)}:host(.device-mobile-optimized) .PFkO7r,body.device-mobile-optimized .PFkO7r{left:10px;right:10px}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[Container_DefaultAreaSkin].49a83073.min.css">.cwL6XW{cursor:pointer}.KaEeLN{--container-corvid-border-color:rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1));--container-corvid-border-size:var(--brw,1px);--container-corvid-background-color:rgba(var(--bg,var(--color_11,color_11)),var(--alpha-bg,1));--backdrop-filter:$backdrop-filter}.uYj0Sg{-webkit-backdrop-filter:var(--backdrop-filter,none);backdrop-filter:var(--backdrop-filter,none);background-color:var(--container-corvid-background-color,rgba(var(--bg,var(--color_11,color_11)),var(--alpha-bg,1)));background-image:var(--bg-gradient,none);border:var(--container-corvid-border-width,var(--brw,1px)) solid var(--container-corvid-border-color,rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1)));border-radius:var(--rd,5px);bottom:0;box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6));left:0;position:absolute;right:0;top:0}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SkipToContentButton].39deac6a.min.css">.LHrbPP{background:#fff;border-radius:24px;color:#116dff;cursor:pointer;font-family:Helvetica,Arial,メイリオ,meiryo,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,sans-serif;font-size:14px;height:0;left:50%;margin-left:-94px;opacity:0;padding:0 24px 0 24px;pointer-events:none;position:absolute;top:60px;width:0;z-index:9999}.LHrbPP:focus{border:2px solid;height:40px;opacity:1;pointer-events:auto;width:auto}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[StylableButton_Default].e469137d.min.css">.StylableButton2545352419__root{-archetype:box;border:none;box-sizing:border-box;cursor:pointer;display:block;height:100%;min-height:10px;min-width:10px;padding:0;touch-action:manipulation;width:100%}.StylableButton2545352419__root[disabled]{pointer-events:none}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasBackgroundColor{background-color:var(--corvid-background-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverBackgroundColor{background-color:var(--corvid-hover-background-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledBackgroundColor{background-color:var(--corvid-disabled-background-color)!important}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasBorderColor{border-color:var(--corvid-border-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverBorderColor{border-color:var(--corvid-hover-border-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledBorderColor{border-color:var(--corvid-disabled-border-color)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius{border-radius:var(--corvid-border-radius)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth{border-width:var(--corvid-border-width)!important}.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasColor,.StylableButton2545352419__root:not(:hover):not([disabled]).StylableButton2545352419--hasColor .StylableButton2545352419__label{color:var(--corvid-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverColor,.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverColor .StylableButton2545352419__label{color:var(--corvid-hover-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledColor,.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledColor .StylableButton2545352419__label{color:var(--corvid-disabled-color)!important}.StylableButton2545352419__link{-archetype:box;box-sizing:border-box;color:#000;text-decoration:none}.StylableButton2545352419__container{align-items:center;display:flex;flex-basis:auto;flex-direction:row;flex-grow:1;height:100%;justify-content:center;overflow:hidden;transition:all .2s ease,visibility 0s;width:100%}.StylableButton2545352419__label{-archetype:text;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(first);max-width:100%;min-width:1.8em;overflow:hidden;text-align:center;text-overflow:ellipsis;transition:inherit;white-space:nowrap}.StylableButton2545352419__root.StylableButton2545352419--isMaxContent .StylableButton2545352419__label{text-overflow:unset}.StylableButton2545352419__root.StylableButton2545352419--isWrapText .StylableButton2545352419__label{min-width:10px;overflow-wrap:break-word;white-space:break-spaces;word-break:break-word}.StylableButton2545352419__icon{-archetype:icon;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(last);flex-shrink:0;height:50px;min-width:1px;transition:inherit}.StylableButton2545352419__icon.StylableButton2545352419--override{display:block!important}.StylableButton2545352419__icon svg,.StylableButton2545352419__icon>span{display:flex;height:inherit;width:inherit}.StylableButton2545352419__root:not(:hover):not([disalbed]).StylableButton2545352419--hasIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-icon-color)!important;stroke:var(--corvid-icon-color)!important}.StylableButton2545352419__root:hover:not([disabled]).StylableButton2545352419--hasHoverIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-hover-icon-color)!important;stroke:var(--corvid-hover-icon-color)!important}.StylableButton2545352419__root:not(:hover)[disabled].StylableButton2545352419--hasDisabledIconColor .StylableButton2545352419__icon svg{fill:var(--corvid-disabled-icon-color)!important;stroke:var(--corvid-disabled-icon-color)!important}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_SolidLine].23b2f23d.min.css">.aVng1S{border-top:var(--lnw,2px) solid rgba(var(--brd,var(--color_15,color_15)),var(--alpha-brd,1));box-sizing:border-box;height:0}</style>
<style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ClassicSection].6435d050.min.css">.MW5IWV{height:100%;left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0;width:100%}.MW5IWV.N3eg0s{clip:rect(0,auto,auto,0)}.MW5IWV .Kv1aVt{height:100%;position:absolute;top:0;width:100%}.MW5IWV .dLPlxY{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.MW5IWV .dLPlxY img{height:100%;width:100%}@supports(-webkit-hyphens:none){.MW5IWV.N3eg0s{clip:auto;-webkit-clip-path:inset(0)}}.VgO9Yg{height:100%}.LWbAav{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient);transition:var(--inherit-transition)}.K_YxMd,.yK6aSC{opacity:var(--fill-layer-video-opacity)}.NGjcJN{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.mNGsUM{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.K_YxMd{height:100%;position:relative;width:100%}wix-media-canvas{display:block;height:100%}.I8xA4L{opacity:var(--fill-layer-video-opacity,var(--fill-layer-image-opacity,1))}.I8xA4L .K_YxMd,.I8xA4L .dLPlxY,.I8xA4L .yK6aSC{opacity:1}.Oqnisf{overflow:visible}.Oqnisf>.MW5IWV .LWbAav{background-color:var(--section-corvid-background-color,var(--bg-overlay-color))}.cM88eO{backface-visibility:hidden}.YtfWHd{left:0;top:0}.YtfWHd,.mj3xJ8{position:absolute}.mj3xJ8{clip:rect(0 0 0 0);background-color:#fff;border-radius:50%;bottom:3px;color:#000;display:grid;height:24px;outline:1px solid #000;place-items:center;pointer-events:none;right:3px;width:24px;z-index:9999}.mj3xJ8:active,.mj3xJ8:focus{clip:auto;pointer-events:auto}.Tj01hh,.jhxvbR{display:block;height:100%;width:100%}.jhxvbR img{max-width:var(--wix-img-max-width,100%)}.jhxvbR[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.jhxvbR[data-animate-blur] img[data-load-done]{filter:none}.bX9O_S{clip-path:var(--fill-layer-clip)}.Z_wCwr,.bX9O_S{position:absolute;top:0}.Jxk_UL img,.Z_wCwr,.bX9O_S{height:100%;width:100%}.K8MSra{opacity:0}.K8MSra,.YTb3b4{position:absolute;top:0}.YTb3b4{height:0;left:0;overflow:hidden;width:0}.SUz0WK{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.FNxOn5,.SUz0WK,.m4khSP{height:100%;top:0;width:100%}.FNxOn5{position:absolute}.m4khSP{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.m4khSP{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}.dkukWC{--divider-pin-height__:min(1,calc(var(--divider-layers-pin-factor__) + 1));--divider-pin-layer-height__:var( --divider-layers-pin-factor__ );--divider-pin-border__:min(1,calc(var(--divider-layers-pin-factor__) / -1 + 1));height:calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))}.dkukWC,.dkukWC .FRCqDF{left:0;position:absolute;width:100%}.dkukWC .FRCqDF{--divider-layer-i__:var(--divider-layer-i,0);background-position:left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;background-repeat:repeat-x;border-bottom-style:solid;border-bottom-width:calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));height:calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));opacity:calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))}.xnZvZH{--divider-height__:var(--divider-top-height,auto);--divider-offset-x__:var(--divider-top-offset-x,0px);--divider-layers-size__:var(--divider-top-layers-size,0);--divider-layers-y__:var(--divider-top-layers-y,0px);--divider-layers-x__:var(--divider-top-layers-x,0px);--divider-layers-pin-factor__:var(--divider-top-layers-pin-factor,0);border-top:var(--divider-top-padding,0) solid var(--divider-top-color,currentColor);opacity:var(--divider-top-opacity,1);top:0;transform:var(--divider-top-flip,scaleY(-1))}.xnZvZH .FRCqDF{background-image:var(--divider-top-image,none);background-size:var(--divider-top-size,contain);border-color:var(--divider-top-color,currentColor);bottom:0;filter:var(--divider-top-filter,none)}.xnZvZH .FRCqDF[data-divider-layer="1"]{display:var(--divider-top-layer-1-display,block)}.xnZvZH .FRCqDF[data-divider-layer="2"]{display:var(--divider-top-layer-2-display,block)}.xnZvZH .FRCqDF[data-divider-layer="3"]{display:var(--divider-top-layer-3-display,block)}.MBOSCN{--divider-height__:var(--divider-bottom-height,auto);--divider-offset-x__:var(--divider-bottom-offset-x,0px);--divider-layers-size__:var(--divider-bottom-layers-size,0);--divider-layers-y__:var(--divider-bottom-layers-y,0px);--divider-layers-x__:var(--divider-bottom-layers-x,0px);--divider-layers-pin-factor__:var(--divider-bottom-layers-pin-factor,0);border-bottom:var(--divider-bottom-padding,0) solid var(--divider-bottom-color,currentColor);bottom:0;opacity:var(--divider-bottom-opacity,1);transform:var(--divider-bottom-flip,none)}.MBOSCN .FRCqDF{background-image:var(--divider-bottom-image,none);background-size:var(--divider-bottom-size,contain);border-color:var(--divider-bottom-color,currentColor);bottom:0;filter:var(--divider-bottom-filter,none)}.MBOSCN .FRCqDF[data-divider-layer="1"]{display:var(--divider-bottom-layer-1-display,block)}.MBOSCN .FRCqDF[data-divider-layer="2"]{display:var(--divider-bottom-layer-2-display,block)}.MBOSCN .FRCqDF[data-divider-layer="3"]{display:var(--divider-bottom-layer-3-display,block)}</style>
<style data-href="https://static.parastorage.com/services/wix-thunderbolt/dist/group_7.bae0ce0c.chunk.min.css">.TWFxr5{height:auto!important}.May50y{overflow:hidden!important}</style>
<title>About | Taifa Forward</title>
  <meta name="description" content="Taifa Forward documents completed and verifiable development projects and public welfare programmes delivered by Kenyan leaders."/>
  <link rel="canonical" href="https://www.thecontinent.org/about"/>
  <meta property="og:title" content="About | The Continent"/>
  <meta property="og:description" content="Taifa Forward documents completed and verifiable development projects and public welfare programmes delivered by Kenyan leaders."/>
  <meta property="og:image" content="https://static.wixstatic.com/media/287178_0110e5dc9ef04f38aa9df96702a4834c~mv2.jpg/v1/fill/w_1417,h_805,al_c/287178_0110e5dc9ef04f38aa9df96702a4834c~mv2.jpg"/>
  <meta property="og:image:width" content="1417"/>
  <meta property="og:image:height" content="805"/>
  <meta property="og:url" content="https://www.thecontinent.org/about"/>
  <meta property="og:site_name" content="The Continent"/>
  <meta property="og:type" content="website"/>
  <link rel="alternate" href="https://www.thecontinent.org/about" hreflang="x-default"/>
  <link rel="alternate" href="https://www.thecontinent.org/ar/about" hreflang="ar-ae"/>
  <link rel="alternate" href="https://www.thecontinent.org/fr/about" hreflang="fr-fr"/>
  <link rel="alternate" href="https://www.thecontinent.org/sw/about" hreflang="sw-ke"/>
  <link rel="alternate" href="https://www.thecontinent.org/about" hreflang="en-gb"/>
  <meta name="fb_admins_meta_tag" content="TheContinentNews"/>
  <meta name="google-site-verification" content="h43JAdfowuY9ycMmAadyhnb82ixqIwhR4ZGNToPLbeM"/>
  <meta property="fb:admins" content="TaifaForward"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="About | The Taifa Forward"/>
  <meta name="twitter:description" content="Taifa Forward documents completed and verifiable development projects and public welfare programmes delivered by Kenyan leaders."/>
  <meta name="twitter:image" content="https://static.wixstatic.com/media/287178_0110e5dc9ef04f38aa9df96702a4834c~mv2.jpg/v1/fill/w_1417,h_805,al_c/287178_0110e5dc9ef04f38aa9df96702a4834c~mv2.jpg"/>
<script type="speculationrules">{"prefetch":[{"tag":"mpa-prefetch-moderate","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":"/about"}}]},"eagerness":"moderate"}]}</script>
<style id="page-transitions">@view-transition {navigation: auto;types: OutIn}</style>
<style id="css_masterPage">@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w05-one-bold.woff2') format('woff2'); unicode-range: U+0100-0107, U+010A-0113, U+0116-011B, U+011E-0123, U+0126-0130, U+0132-0137, U+0139-0148, U+014A-0151, U+0154-015F, U+0162-0175, U+0177, U+0179-017C, U+01FC-01FF, U+0218-0219, U+02C7, U+02D8-02DB, U+02DD, U+1E80-1E85, U+1E9E, U+1EF2-1EF3, U+2044, U+2070, U+2074-2079, U+2212, U+E001, U+E909, U+E910-E912, U+E999, U+F6C3, U+F6E0, U+F6E4, U+F8FF;font-display: swap;
}
@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w01-one-bold.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00A3, U+00A5-00AB, U+00AE-00B4, U+00B6-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+02C6, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w10-light.woff2') format('woff2'); unicode-range: U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2116;font-display: swap;
}
@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w02-light.woff2') format('woff2'); unicode-range: U+000D, U+0100-010F, U+0111-0130, U+0132-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03C0, U+1E80-1E85, U+1EF2-1EF3, U+2070, U+2074-2079, U+2080-2089, U+2113, U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;font-display: swap;
}
@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w01-light.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00FF, U+0110, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC, U+03BC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'avenir-lt-w01_35-light1475496'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w05_35-light.woff2') format('woff2'); unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149, U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E9E, U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;font-display: swap;
}
@font-face {font-family: 'avenir-lt-w01_35-light1475496'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w01_35-light1475496.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237, U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WohvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs0wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Fostz0rdom9.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_A8s5ynghnQci.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WogvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs1wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Vostz0rdom9.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_Ass5ynghnQci.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WouvToJdLm8.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs7wH8Dnzcj.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s51ostz0rdg.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_DMs5ynghnQ.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}#masterPage:not(.landingPage) #PAGES_CONTAINER{margin-top:0px;margin-bottom:0px;}#masterPage.landingPage #SITE_HEADER{display:none;}#masterPage.landingPage #CONTROLLER_COMP_CUSTOM_ID{display:none;}#masterPage.landingPage #SOSP_CONTAINER_CUSTOM_ID{display:none;}#masterPage.landingPage #SITE_FOOTER{display:none;}#masterPage.landingPage #SITE_HEADER-placeholder{display:none;}#masterPage.landingPage #SITE_FOOTER-placeholder{display:none;}#SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus, #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus ~ .wixSdkShowFocusOnSibling{--focus-ring-box-shadow:0 0 0 2px #116dff;box-shadow:var(--focus-ring-box-shadow) !important;z-index:1;}.has-inner-focus-ring{--focus-ring-box-shadow:0 0 0 2px #116dff !important;}#masterPage{left:0;margin-left:0;width:100%;min-width:0;}#SITE_HEADER{z-index:50;--above-all-in-container:10000;}#PAGES_CONTAINER{--pinned-layer-in-container:51;--above-all-in-container:49;}#CONTROLLER_COMP_CUSTOM_ID{--pinned-layer-in-container:52;--above-all-in-container:49;}#SOSP_CONTAINER_CUSTOM_ID{--pinned-layer-in-container:53;--above-all-in-container:49;}#SITE_FOOTER{--pinned-layer-in-container:54;--above-all-in-container:49;}[id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent]{height:auto;width:100%;position:static;min-height:auto;padding-bottom:0px;box-sizing:border-box;}[id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="CONTROLLER_COMP_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="CONTROLLER_COMP_CUSTOM_ID"]{position:absolute;top:15px;left:20px;margin-left:calc((100% - 980px) * 0.5);}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent]{height:auto;width:100%;}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-top:-127px;grid-template-rows:1fr;grid-template-columns:100%;padding-bottom:0px;box-sizing:border-box;}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="CONTROLLER_COMP_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="CONTROLLER_COMP_CUSTOM_ID"]{position:absolute;top:15px;left:20px;margin-left:calc((100% - 980px) * 0.5);}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="SOSP_CONTAINER_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="SOSP_CONTAINER_CUSTOM_ID"]{position:relative;margin:124px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}:root,:host, .spxThemeOverride, .max-width-container, #root{--color_0:255,255,255;--color_1:255,255,255;--color_2:0,0,0;--color_3:237,28,36;--color_4:0,136,203;--color_5:255,203,5;--color_6:114,114,114;--color_7:176,176,176;--color_8:255,255,255;--color_9:114,114,114;--color_10:176,176,176;--color_11:255,255,255;--color_12:204,204,204;--color_13:160,160,159;--color_14:96,94,94;--color_15:0,0,0;--color_16:186,252,255;--color_17:87,187,191;--color_18:49,127,129;--color_19:41,101,105;--color_20:29,62,64;--color_21:184,235,200;--color_22:145,214,167;--color_23:68,194,109;--color_24:45,129,73;--color_25:23,65,36;--color_26:244,192,175;--color_27:233,159,134;--color_28:222,80,33;--color_29:148,54,22;--color_30:74,27,11;--color_31:244,234,177;--color_32:233,219,137;--color_33:222,195,40;--color_34:148,130,27;--color_35:74,65,13;--color_36:255,255,255;--color_37:0,0,0;--color_38:204,204,204;--color_39:160,160,159;--color_40:96,94,94;--color_41:49,127,129;--color_42:186,252,255;--color_43:87,187,191;--color_44:255,255,255;--color_45:0,0,0;--color_46:0,0,0;--color_47:96,94,94;--color_48:49,127,129;--color_49:49,127,129;--color_50:255,255,255;--color_51:255,255,255;--color_52:49,127,129;--color_53:49,127,129;--color_54:160,160,159;--color_55:160,160,159;--color_56:255,255,255;--color_57:255,255,255;--color_58:49,127,129;--color_59:49,127,129;--color_60:49,127,129;--color_61:49,127,129;--color_62:255,255,255;--color_63:255,255,255;--color_64:160,160,159;--color_65:160,160,159;--font_0:normal normal normal 110px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_1:normal normal normal 16px/1.4em din-next-w01-light,sans-serif;--font_2:normal normal normal 42px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_3:normal normal normal 35px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_4:normal normal normal 23px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_5:normal normal normal 20px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_6:normal normal normal 17px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_7:normal normal normal 17px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_8:normal normal normal 15px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_9:normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_10:normal normal normal 12px/1.4em din-next-w01-light,sans-serif;--wix-ads-height:0px;--sticky-offset:0px;--wix-ads-top-height:0px;--site-width:980px;--above-all-z-index:100000;--portals-z-index:100001;--wix-opt-in-direction:ltr;--wix-opt-in-direction-multiplier:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;--minViewportSize:320;--maxViewportSize:1920;--theme-spx-ratio:1px;--full-viewport:100 * var(--one-unit) * var(--browser-zoom);--scaling-factor:clamp(var(--spx-stopper-min), var(--full-viewport), min(var(--spx-stopper-max), var(--section-max-width)));--customScaleViewportLimit:clamp(var(--minViewportSize) * 1px, var(--full-viewport), min(var(--section-max-width), var(--maxViewportSize) * 1px));}.font_0{font:var(--font_0);color:rgb(var(--color_45));letter-spacing:0em;}.font_1{font:var(--font_1);color:rgb(var(--color_14));letter-spacing:0em;}.font_2{font:var(--font_2);color:rgb(var(--color_45));letter-spacing:0em;}.font_3{font:var(--font_3);color:rgb(var(--color_45));letter-spacing:0em;}.font_4{font:var(--font_4);color:rgb(var(--color_45));letter-spacing:0em;}.font_5{font:var(--font_5);color:rgb(var(--color_45));letter-spacing:0em;}.font_6{font:var(--font_6);color:rgb(var(--color_45));letter-spacing:0em;}.font_7{font:var(--font_7);color:rgb(var(--color_15));letter-spacing:0em;}.font_8{font:var(--font_8);color:rgb(var(--color_15));letter-spacing:0em;}.font_9{font:var(--font_9);color:rgb(var(--color_15));letter-spacing:0em;}.font_10{font:var(--font_10);color:rgb(var(--color_14));letter-spacing:0em;}.color_0{color:rgb(var(--color_0));}.color_1{color:rgb(var(--color_1));}.color_2{color:rgb(var(--color_2));}.color_3{color:rgb(var(--color_3));}.color_4{color:rgb(var(--color_4));}.color_5{color:rgb(var(--color_5));}.color_6{color:rgb(var(--color_6));}.color_7{color:rgb(var(--color_7));}.color_8{color:rgb(var(--color_8));}.color_9{color:rgb(var(--color_9));}.color_10{color:rgb(var(--color_10));}.color_11{color:rgb(var(--color_11));}.color_12{color:rgb(var(--color_12));}.color_13{color:rgb(var(--color_13));}.color_14{color:rgb(var(--color_14));}.color_15{color:rgb(var(--color_15));}.color_16{color:rgb(var(--color_16));}.color_17{color:rgb(var(--color_17));}.color_18{color:rgb(var(--color_18));}.color_19{color:rgb(var(--color_19));}.color_20{color:rgb(var(--color_20));}.color_21{color:rgb(var(--color_21));}.color_22{color:rgb(var(--color_22));}.color_23{color:rgb(var(--color_23));}.color_24{color:rgb(var(--color_24));}.color_25{color:rgb(var(--color_25));}.color_26{color:rgb(var(--color_26));}.color_27{color:rgb(var(--color_27));}.color_28{color:rgb(var(--color_28));}.color_29{color:rgb(var(--color_29));}.color_30{color:rgb(var(--color_30));}.color_31{color:rgb(var(--color_31));}.color_32{color:rgb(var(--color_32));}.color_33{color:rgb(var(--color_33));}.color_34{color:rgb(var(--color_34));}.color_35{color:rgb(var(--color_35));}.color_36{color:rgb(var(--color_36));}.color_37{color:rgb(var(--color_37));}.color_38{color:rgb(var(--color_38));}.color_39{color:rgb(var(--color_39));}.color_40{color:rgb(var(--color_40));}.color_41{color:rgb(var(--color_41));}.color_42{color:rgb(var(--color_42));}.color_43{color:rgb(var(--color_43));}.color_44{color:rgb(var(--color_44));}.color_45{color:rgb(var(--color_45));}.color_46{color:rgb(var(--color_46));}.color_47{color:rgb(var(--color_47));}.color_48{color:rgb(var(--color_48));}.color_49{color:rgb(var(--color_49));}.color_50{color:rgb(var(--color_50));}.color_51{color:rgb(var(--color_51));}.color_52{color:rgb(var(--color_52));}.color_53{color:rgb(var(--color_53));}.color_54{color:rgb(var(--color_54));}.color_55{color:rgb(var(--color_55));}.color_56{color:rgb(var(--color_56));}.color_57{color:rgb(var(--color_57));}.color_58{color:rgb(var(--color_58));}.color_59{color:rgb(var(--color_59));}.color_60{color:rgb(var(--color_60));}.color_61{color:rgb(var(--color_61));}.color_62{color:rgb(var(--color_62));}.color_63{color:rgb(var(--color_63));}.color_64{color:rgb(var(--color_64));}.color_65{color:rgb(var(--color_65));}.backcolor_0{background-color:rgb(var(--color_0));}.backcolor_1{background-color:rgb(var(--color_1));}.backcolor_2{background-color:rgb(var(--color_2));}.backcolor_3{background-color:rgb(var(--color_3));}.backcolor_4{background-color:rgb(var(--color_4));}.backcolor_5{background-color:rgb(var(--color_5));}.backcolor_6{background-color:rgb(var(--color_6));}.backcolor_7{background-color:rgb(var(--color_7));}.backcolor_8{background-color:rgb(var(--color_8));}.backcolor_9{background-color:rgb(var(--color_9));}.backcolor_10{background-color:rgb(var(--color_10));}.backcolor_11{background-color:rgb(var(--color_11));}.backcolor_12{background-color:rgb(var(--color_12));}.backcolor_13{background-color:rgb(var(--color_13));}.backcolor_14{background-color:rgb(var(--color_14));}.backcolor_15{background-color:rgb(var(--color_15));}.backcolor_16{background-color:rgb(var(--color_16));}.backcolor_17{background-color:rgb(var(--color_17));}.backcolor_18{background-color:rgb(var(--color_18));}.backcolor_19{background-color:rgb(var(--color_19));}.backcolor_20{background-color:rgb(var(--color_20));}.backcolor_21{background-color:rgb(var(--color_21));}.backcolor_22{background-color:rgb(var(--color_22));}.backcolor_23{background-color:rgb(var(--color_23));}.backcolor_24{background-color:rgb(var(--color_24));}.backcolor_25{background-color:rgb(var(--color_25));}.backcolor_26{background-color:rgb(var(--color_26));}.backcolor_27{background-color:rgb(var(--color_27));}.backcolor_28{background-color:rgb(var(--color_28));}.backcolor_29{background-color:rgb(var(--color_29));}.backcolor_30{background-color:rgb(var(--color_30));}.backcolor_31{background-color:rgb(var(--color_31));}.backcolor_32{background-color:rgb(var(--color_32));}.backcolor_33{background-color:rgb(var(--color_33));}.backcolor_34{background-color:rgb(var(--color_34));}.backcolor_35{background-color:rgb(var(--color_35));}.backcolor_36{background-color:rgb(var(--color_36));}.backcolor_37{background-color:rgb(var(--color_37));}.backcolor_38{background-color:rgb(var(--color_38));}.backcolor_39{background-color:rgb(var(--color_39));}.backcolor_40{background-color:rgb(var(--color_40));}.backcolor_41{background-color:rgb(var(--color_41));}.backcolor_42{background-color:rgb(var(--color_42));}.backcolor_43{background-color:rgb(var(--color_43));}.backcolor_44{background-color:rgb(var(--color_44));}.backcolor_45{background-color:rgb(var(--color_45));}.backcolor_46{background-color:rgb(var(--color_46));}.backcolor_47{background-color:rgb(var(--color_47));}.backcolor_48{background-color:rgb(var(--color_48));}.backcolor_49{background-color:rgb(var(--color_49));}.backcolor_50{background-color:rgb(var(--color_50));}.backcolor_51{background-color:rgb(var(--color_51));}.backcolor_52{background-color:rgb(var(--color_52));}.backcolor_53{background-color:rgb(var(--color_53));}.backcolor_54{background-color:rgb(var(--color_54));}.backcolor_55{background-color:rgb(var(--color_55));}.backcolor_56{background-color:rgb(var(--color_56));}.backcolor_57{background-color:rgb(var(--color_57));}.backcolor_58{background-color:rgb(var(--color_58));}.backcolor_59{background-color:rgb(var(--color_59));}.backcolor_60{background-color:rgb(var(--color_60));}.backcolor_61{background-color:rgb(var(--color_61));}.backcolor_62{background-color:rgb(var(--color_62));}.backcolor_63{background-color:rgb(var(--color_63));}.backcolor_64{background-color:rgb(var(--color_64));}.backcolor_65{background-color:rgb(var(--color_65));}#masterPage:not(.landingPage){--top-offset:var(--header-height);--header-height:127px;}#masterPage.landingPage{--top-offset:0px;}#SITE_HEADER{--bg:var(--color_11);--shd:none;--brwt:0px;--brd:var(--color_37);--brwb:0px;--bgctr:var(--color_11);--rd:0px;--alpha-bgctr:1;--alpha-brd:1;--alpha-bg:1;--backdrop-blur:0px;--boxShadowToggleOn-shd:none;--backdrop-filter:none;}#SITE_HEADER{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=SITE_HEADERinlineContent]{height:auto;width:100%;display:flex;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-bottom:-11px;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-l0b7kk91"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-l0b7kk91"]{position:relative;margin:18px 0px 0 calc((100% - 980px) * 0.5);left:630px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-irys4v5c"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-irys4v5c"]{position:relative;margin:0px 0px 0px calc((100% - 980px) * 0.5);left:398px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-l09ic7mg"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-l09ic7mg"]{position:relative;margin:0px 0px -39px calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#SITE_HEADER{--bg-overlay-color:rgb(var(--color_36));--bg-gradient:none;--shc-mutated-brightness:128,128,128;position:sticky !important;top:var(--wix-ads-height);}#comp-l0b7kk91{width:332px;height:28px;}#comp-l0b7kk91{--item-size:28px;--item-margin-block:0;--item-margin-inline:0px 10px;--item-display:inline-block;--direction:var(--wix-opt-in-direction, ltr);width:332px;height:28px;}#comp-irys4v5c{--menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:var(--color_11);--rd:0px;--shd:none;--fnt:normal normal 700 20px/1.4em barlow-medium,barlow,sans-serif;--pad:5px;--txt:249,171,67;--trans:color 0.4s ease 0s;--txth:var(--color_39);--txts:249,171,67;--alpha-bgDrop:1;--alpha-txt:1;--alpha-txth:1;--alpha-txts:1;--boxShadowToggleOn-shd:none;}#comp-irys4v5c{width:580px;height:50px;}#comp-irys4v5c{--menuTotalBordersY:0px;--menuTotalBordersX:0px;--submenus-direction:inherit;--menu-direction:inherit;--align:center;--menu-align:inherit;--submenus-align:inherit;}#comp-l09ic7mg{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09ic7mg{width:520px;height:81px;}#comp-l09ic7mg{--height:81px;--width:520px;}#PAGES_CONTAINER{left:0;margin-left:0;width:100%;min-width:0;}#SITE_PAGES{left:0;margin-left:0;width:100%;min-width:0;}#SITE_PAGES{--transition-duration:700ms;}#CONTROLLER_COMP_CUSTOM_ID{--alpha-bg:1;--bg:61,155,233;--bgh:43,104,156;--brd:43,104,156;--brdh:61,155,233;--brw:0px;--fnt:normal normal normal 14px/1.4em raleway;--rd:20px;--txt:255,255,255;--txth:255,255,255;--alpha-bgh:1;--alpha-brd:1;--alpha-brdh:1;--alpha-txt:1;--alpha-txth:1;--boxShadowToggleOn-shd:none;--shd:0 1px 4px rgba(0, 0, 0, 0.6);}#SOSP_CONTAINER_CUSTOM_ID{--brw:0px;--brd:var(--color_15);--bg:var(--color_11);--rd:0px;--shd:none;--gradient:none;--alpha-bg:1;--alpha-brd:1;--boxShadowToggleOn-shd:none;--bg-gradient:none;}#SOSP_CONTAINER_CUSTOM_ID{width:980px;}[data-mode=hover] #SOSP_CONTAINER_CUSTOM_ID{width:980px;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent]{height:auto;width:980px;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:min-content 1fr;grid-template-columns:100%;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > [id="comp-jzjvdnbj"], [data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > interact-element > [id="comp-jzjvdnbj"]{position:relative;margin:0px 0px 0 0;left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > [id="comp-kogrxdne"], [data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > interact-element > [id="comp-kogrxdne"]{position:relative;margin:0px 0px 0px 0;left:12px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#SOSP_CONTAINER_CUSTOM_ID{--shc-mutated-brightness:128,128,128;}#comp-jzjvdnbj{width:980px;height:250px;}#comp-kogrxdne{--menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:var(--color_11);--rd:0px;--shd:none;--fnt:var(--font_8);--pad:5px;--txt:var(--color_15);--trans:color 0.4s ease 0s;--txth:var(--color_18);--txts:var(--color_18);--alpha-bgDrop:1;--alpha-txt:1;--alpha-txth:1;--alpha-txts:1;--boxShadowToggleOn-shd:none;}#comp-kogrxdne{width:968px;height:40px;}#comp-kogrxdne{--menuTotalBordersY:0px;--menuTotalBordersX:0px;--submenus-direction:inherit;--menu-direction:inherit;--align:start;--menu-align:inherit;--submenus-align:inherit;}#SITE_FOOTER{--bg:var(--color_11);--shd:0 0 5px rgba(0, 0, 0, 0.7);--brwt:0px;--brd:47,46,46;--brwb:0px;--bgctr:var(--color_11);--rd:0px;--alpha-bgctr:0;--alpha-brd:1;--alpha-bg:0.6;--backdrop-blur:0px;--backdrop-filter:none;}#SITE_FOOTER{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=SITE_FOOTERinlineContent]{height:auto;width:100%;position:static;min-height:6px;}#SITE_FOOTER{--shc-mutated-brightness:128,128,128;--bg-overlay-color:transparent;--bg-gradient:none;}</style>
<style id="css_zwmhs">@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WohvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs0wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Fostz0rdom9.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_A8s5ynghnQci.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WogvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs1wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Vostz0rdom9.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_Ass5ynghnQci.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WouvToJdLm8.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs7wH8Dnzcj.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s51ostz0rdg.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_DMs5ynghnQ.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w05-one-bold.woff2') format('woff2'); unicode-range: U+0100-0107, U+010A-0113, U+0116-011B, U+011E-0123, U+0126-0130, U+0132-0137, U+0139-0148, U+014A-0151, U+0154-015F, U+0162-0175, U+0177, U+0179-017C, U+01FC-01FF, U+0218-0219, U+02C7, U+02D8-02DB, U+02DD, U+1E80-1E85, U+1E9E, U+1EF2-1EF3, U+2044, U+2070, U+2074-2079, U+2212, U+E001, U+E909, U+E910-E912, U+E999, U+F6C3, U+F6E0, U+F6E4, U+F8FF;font-display: swap;
}
@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w01-one-bold.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00A3, U+00A5-00AB, U+00AE-00B4, U+00B6-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+02C6, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-lt-w10-roman.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0, U+00A4, U+00A6-00A7, U+00A9, U+00AB-00AE, U+00B0-00B1, U+00B5-00B7, U+00BB, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2116, U+2122;font-display: swap;
}
@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w02-roman.woff2') format('woff2'); unicode-range: U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2113, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E301-E304, U+E306-E30D, U+FB01-FB02;font-display: swap;
}
@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w01-roman.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0462-0463, U+0472-0475, U+0490-0491, U+04D9, U+1E9E, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+20B9-20BA, U+20BC-20BD, U+2113, U+2116, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E300-E30D, U+F6C5, U+F6C9-F6D8, U+F8FF, U+FB01-FB02;font-display: swap;
}#zwmhs{left:0;margin-left:0;width:100%;min-width:0;}#masterPage{--pinned-layers-in-page:0;}[data-mesh-id=ContainerzwmhsinlineContent]{height:auto;width:100%;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:40px;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;padding-bottom:0px;box-sizing:border-box;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhc2y"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhc2y"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhc5h"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhc5h"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-lp7zp3wk"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-lp7zp3wk"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhca11"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhca11"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}#comp-l09mhc2y{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhc2yinlineContent]{height:auto;width:100%;display:flex;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-bottom:-7px;grid-template-rows:min-content 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > [id="comp-l09mlcj0"], [data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > interact-element > [id="comp-l09mlcj0"]{position:relative;margin:0px 0px 15px calc((100% - 980px) * 0.5);left:180px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > [id="comp-l09mhc3x"], [data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > interact-element > [id="comp-l09mhc3x"]{position:relative;margin:0px 0px 0px calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#comp-l09mlcj0{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mlcj0{width:600px;height:257px;}#comp-l09mhc3x{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhc3x{width:980px;height:auto;}#comp-l09mhc5h{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhc5hinlineContent]{height:auto;width:100%;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-l09mhc6a"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-l09mhc6a"]{position:relative;margin:22px 0px 0px calc((100% - 980px) * 0.5);left:172px;grid-area:1 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-l84duifh"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-l84duifh"]{position:relative;margin:0px 0px 19px calc((100% - 980px) * 0.5);left:285px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-la11a371"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-la11a371"]{position:relative;margin:100px 0px 10px calc((100% - 980px) * 0.5);left:372px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-mj6yzcsa"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-mj6yzcsa"]{position:relative;margin:0px 0px 19px calc((100% - 980px) * 0.5);left:513px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-wedge-3]{visibility:hidden;height:465px;width:0;grid-area:1 / 1 / 3 / 2;}#comp-l09mhc6a{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhc6a{width:635px;height:auto;}#comp-l84duifh{width:169px;height:45px;}#comp-la11a371{width:236px;height:45px;}#comp-mj6yzcsa{width:169px;height:45px;}#comp-lp7zp3wk{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-lp7zp3wkinlineContent]{height:auto;width:100%;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(9, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp803ax7"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp803ax7"]{position:relative;margin:17px 0px 24px calc((100% - 980px) * 0.5);left:338px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp7zxqiz"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp7zxqiz"]{position:relative;margin:0px 0px 5px calc((100% - 980px) * 0.5);left:49px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8069en"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8069en"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:54px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp807zjc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp807zjc"]{position:relative;margin:6px 0px 0 calc((100% - 980px) * 0.5);left:49px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8094jr"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8094jr"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:54px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80frpc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80frpc"]{position:relative;margin:21px 0px 6px calc((100% - 980px) * 0.5);left:40px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80h07q"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80h07q"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:45px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80srr7"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80srr7"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:45px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tmqzu"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tmqzu"]{position:relative;margin:7px 0px -6px calc((100% - 980px) * 0.5);left:6px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-ma2ikgvf"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-ma2ikgvf"]{position:relative;margin:0px 0px -28px calc((100% - 980px) * 0.5);left:7px;grid-area:9 / 1 / 10 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-ma2ilaba"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-ma2ilaba"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:36px;grid-area:10 / 1 / 11 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp801byr"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp801byr"]{position:relative;margin:5px 0px 0 calc((100% - 980px) * 0.5);left:371px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp806rq1"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp806rq1"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:376px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80a2wb"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80a2wb"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:372px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80btvc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80btvc"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:376px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80hv5x"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80hv5x"]{position:relative;margin:24px 0px 9px calc((100% - 980px) * 0.5);left:359px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80ilml"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80ilml"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:376px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92t9x5r"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92t9x5r"]{position:relative;margin:7px 0px -6px calc((100% - 980px) * 0.5);left:343px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tbel6"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tbel6"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:376px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80qvd4"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80qvd4"]{position:relative;margin:6px 0px 14px calc((100% - 980px) * 0.5);left:372px;grid-area:9 / 1 / 10 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8022xa"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8022xa"]{position:relative;margin:0px 0px 5px calc((100% - 980px) * 0.5);left:682px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8076fb"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8076fb"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:687px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80d98y"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80d98y"]{position:relative;margin:6px 0px 0 calc((100% - 980px) * 0.5);left:690px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80e2ng"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80e2ng"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:695px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80ocab"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80ocab"]{position:relative;margin:0px 0px -15px calc((100% - 980px) * 0.5);left:669px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80p5to"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80p5to"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:695px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tdpit"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tdpit"]{position:relative;margin:0px 0px -13px calc((100% - 980px) * 0.5);left:653px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92texrx"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92texrx"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:701px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92topky"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92topky"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:378px;grid-area:10 / 1 / 11 / 2;justify-self:start;align-self:start;}#comp-lp803ax7{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp803ax7{width:304px;height:auto;}#comp-lp7zxqiz{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp7zxqiz{width:236px;height:236px;}#comp-lp8069en{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8069en{width:227px;height:auto;}#comp-lp807zjc{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp807zjc{width:227px;height:230px;}#comp-lp8094jr{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8094jr{width:227px;height:auto;}#comp-lp80frpc{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80frpc{width:236px;height:236px;}#comp-lp80h07q{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80h07q{width:227px;height:auto;}#comp-lp80srr7{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80srr7{width:227px;height:auto;}#comp-m92tmqzu{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92tmqzu{width:302px;height:317px;}#comp-ma2ikgvf{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-ma2ikgvf{width:302px;height:299px;}#comp-ma2ilaba{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-ma2ilaba{width:227px;height:auto;}#comp-lp801byr{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp801byr{width:236px;height:236px;}#comp-lp806rq1{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp806rq1{width:227px;height:auto;}#comp-lp80a2wb{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80a2wb{width:236px;height:236px;}#comp-lp80btvc{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80btvc{width:227px;height:auto;}#comp-lp80hv5x{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80hv5x{width:227px;height:230px;}#comp-lp80ilml{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80ilml{width:227px;height:auto;}#comp-m92t9x5r{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92t9x5r{width:309px;height:317px;}#comp-m92tbel6{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92tbel6{width:227px;height:auto;}#comp-lp80qvd4{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80qvd4{width:251px;height:251px;}#comp-lp8022xa{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp8022xa{width:236px;height:236px;}#comp-lp8076fb{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8076fb{width:227px;height:auto;}#comp-lp80d98y{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80d98y{width:236px;height:230px;}#comp-lp80e2ng{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80e2ng{width:227px;height:auto;}#comp-lp80ocab{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80ocab{width:278px;height:278px;}#comp-lp80p5to{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80p5to{width:227px;height:auto;}#comp-m92tdpit{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92tdpit{width:334px;height:331px;}#comp-m92texrx{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92texrx{width:227px;height:auto;}#comp-m92topky{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92topky{width:227px;height:auto;}#comp-l09mhca11{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhca11inlineContent]{height:auto;width:100%;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcaa"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcaa"]{position:relative;margin:55px 0px 10px calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcah"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcah"]{position:relative;margin:0px 0px 52px calc((100% - 980px) * 0.5);left:472px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcap"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcap"]{position:relative;margin:10px 0px 50px calc((100% - 980px) * 0.5);left:10px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcaw"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcaw"]{position:relative;margin:0px 0px 52px calc((100% - 980px) * 0.5);left:214px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5gnig"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5gnig"]{position:relative;margin:3px 0px 57px calc((100% - 980px) * 0.5);left:434px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcb3"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcb3"]{position:relative;margin:0px 0px 60px calc((100% - 980px) * 0.5);left:646px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5oecg"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5oecg"]{position:relative;margin:0px 0px 60px calc((100% - 980px) * 0.5);left:813px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5rnzm"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5rnzm"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:354px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}#comp-l09mhcaa{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhcaa{width:980px;height:auto;}#comp-l09mhcah{--lnw:6px;--brd:249,171,67;--alpha-brd:1;}#comp-l09mhcah{width:30px;height:6px;}#comp-l09mhcap{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcap{width:150px;height:66px;}#comp-l09mhcaw{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcaw{width:126px;height:74px;}#comp-l0b5gnig{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5gnig{width:106px;height:66px;}#comp-l09mhcb3{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcb3{width:66px;height:66px;}#comp-l0b5oecg{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5oecg{width:66px;height:66px;}#comp-l0b5rnzm{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5rnzm{width:270px;height:30px;}</style>
<style id="stylableCss_zwmhs">/* END STYLABLE DIRECTIVE RULES */

#comp-l84duifh .style-la10x1ud__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-l84duifh .style-la10x1ud__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-l84duifh .style-la10x1ud__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-l84duifh .style-la10x1ud__root:disabled{
    background: #E2E2E2
}

#comp-l84duifh .style-la10x1ud__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-l84duifh .style-la10x1ud__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-l84duifh .style-la10x1ud__root:hover .StylableButton2545352419__icon{
    fill: #000000
}/* END STYLABLE DIRECTIVE RULES */

#comp-la11a371 .style-la11a3b21__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-la11a371 .style-la11a3b21__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-la11a371 .style-la11a3b21__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-la11a371 .style-la11a3b21__root:disabled{
    background: #E2E2E2
}

#comp-la11a371 .style-la11a3b21__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-la11a371 .style-la11a3b21__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-la11a371 .style-la11a3b21__root:hover .StylableButton2545352419__icon{
    fill: #000000
}/* END STYLABLE DIRECTIVE RULES */

#comp-mj6yzcsa .style-mj6yzcsq1__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled{
    background: #E2E2E2
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover .StylableButton2545352419__icon{
    fill: #000000
}</style>
<style id="compCssMappers_zwmhs">#zwmhs{width:auto;min-height:40px;}#pageBackground_zwmhs{--bg-position:absolute;--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;}#comp-l09mhc2y{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mlcj0{--height:257px;--width:600px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l09mhc3x{--min-height:67px;--text-direction:var(--wix-opt-in-direction);}#comp-l09mhc5h{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mhc6a{--min-height:507px;--text-direction:var(--wix-opt-in-direction);}#comp-lp7zp3wk{--bg-overlay-color:transparent;--bg-gradient:none;min-width:980px;}#comp-lp803ax7{--text-direction:var(--wix-opt-in-direction);}#comp-lp7zxqiz{--height:236px;--width:236px;}#comp-lp8069en{--text-direction:var(--wix-opt-in-direction);}#comp-lp807zjc{--height:230px;--width:227px;}#comp-lp8094jr{--text-direction:var(--wix-opt-in-direction);}#comp-lp80frpc{--height:236px;--width:236px;}#comp-lp80h07q{--text-direction:var(--wix-opt-in-direction);}#comp-lp80srr7{--text-direction:var(--wix-opt-in-direction);}#comp-m92tmqzu{--height:317px;--width:302px;}#comp-ma2ikgvf{--height:299px;--width:302px;}#comp-ma2ilaba{--text-direction:var(--wix-opt-in-direction);}#comp-lp801byr{--height:236px;--width:236px;}#comp-lp806rq1{--text-direction:var(--wix-opt-in-direction);}#comp-lp80a2wb{--height:236px;--width:236px;}#comp-lp80btvc{--text-direction:var(--wix-opt-in-direction);}#comp-lp80hv5x{--height:230px;--width:227px;}#comp-lp80ilml{--text-direction:var(--wix-opt-in-direction);}#comp-m92t9x5r{--height:317px;--width:309px;}#comp-m92tbel6{--text-direction:var(--wix-opt-in-direction);}#comp-lp80qvd4{--height:251px;--width:251px;}#comp-lp8022xa{--height:236px;--width:236px;}#comp-lp8076fb{--text-direction:var(--wix-opt-in-direction);}#comp-lp80d98y{--height:230px;--width:236px;}#comp-lp80e2ng{--text-direction:var(--wix-opt-in-direction);}#comp-lp80ocab{--height:278px;--width:278px;}#comp-lp80p5to{--text-direction:var(--wix-opt-in-direction);}#comp-m92tdpit{--height:331px;--width:334px;}#comp-m92texrx{--text-direction:var(--wix-opt-in-direction);}#comp-m92topky{--text-direction:var(--wix-opt-in-direction);}#comp-l09mhca11{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mhcaa{--text-direction:var(--wix-opt-in-direction);}#comp-l09mhcah{transform-origin:center 3px;}#comp-l09mhcap{--height:66px;--width:150px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l09mhcaw{--height:74px;--width:126px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l0b5gnig{--height:66px;--width:106px;}#comp-l09mhcb3{--height:66px;--width:66px;}#comp-l0b5oecg{--height:66px;--width:66px;}#comp-l0b5rnzm{--height:30px;--width:270px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}</style>

</head>
<body class='' >
<script type="text/javascript">
    var bodyCacheable = true;

    var exclusionReason = {"shouldRender":true,"forced":false};
    var ssrInfo = {"cacheExclusionReason":"","renderBodyTime":1437,"renderTimeStamp":1765793290542}
</script>







    <!--pageHtmlEmbeds.bodyStart start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
    <!--pageHtmlEmbeds.bodyStart end-->




<script id="wix-first-paint">
    if (window.ResizeObserver &&
        (!window.PerformanceObserver || !PerformanceObserver.supportedEntryTypes || PerformanceObserver.supportedEntryTypes.indexOf('paint') === -1)) {
        new ResizeObserver(function (entries, observer) {
            entries.some(function (entry) {
                var contentRect = entry.contentRect;
                if (contentRect.width > 0 && contentRect.height > 0) {
                    requestAnimationFrame(function (now) {
                        window.wixFirstPaint = now;
                        dispatchEvent(new CustomEvent('wixFirstPaint'));
                    });
                    observer.disconnect();
                    return true;
                }
            });
        }).observe(document.body);
    }
</script>


<script id="scroll-bar-width-calculation">
    const div = document.createElement('div')
    div.style.overflowY = 'scroll'
    div.style.width = '50px'
    div.style.height = '50px'
    div.style.visibility = 'hidden'
    document.body.appendChild(div)
    const scrollbarWidth= div.offsetWidth - div.clientWidth
    document.body.removeChild(div)
    if(scrollbarWidth > 0){
        document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)
    }
</script>







    <!-- domStoreHtml -->
    <svg data-dom-store style="display:none"><defs id="dom-store-defs"></defs></svg>


<div id="SITE_CONTAINER"><div id="main_MF" class="main_MF"><div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" role="region" tabindex="-1" aria-label="top of page">
    <span class="mHZSwn">top of page</span></div><div id="BACKGROUND_GROUP" class="backgroundGroup_zwmhs BACKGROUND_GROUP"><div id="BACKGROUND_GROUP_TRANSITION_GROUP"><div id="pageBackground_zwmhs" data-media-height-override-type="" data-media-position-override="false" class="pageBackground_zwmhs BmZ5pC"><div id="bgLayers_pageBackground_zwmhs" data-hook="bgLayers" data-motion-part="BG_LAYER pageBackground_zwmhs" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_pageBackground_zwmhs" data-motion-part="BG_MEDIA pageBackground_zwmhs" class="VgO9Yg"></div></div></div></div></div><div id="site-root" class="site-root"><div id="masterPage" class="mesh-layout masterPage css-editing-scope">
        @include('pages.header')



<main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
    <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
        <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
            <div id="zwmhs" class="dBAkHi zwmhs">
                <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                <div class="HT5ybB">
                    <div id="Containerzwmhs" class="Containerzwmhs SPY_vo">
                        <div data-mesh-id="ContainerzwmhsinlineContent" data-testid="inline-content" class="">
                            <div
                                data-mesh-id="ContainerzwmhsinlineContent-gridContainer"
                                data-testid="mesh-container-content"
                            >
                                <section
                                    id="comp-l09mhc2y"
                                    tabindex="-1"
                                    class="Oqnisf comp-l09mhc2y wixui-section"
                                    data-block-level-container="ClassicSection"
                                >
                                    <div
                                        id="bgLayers_comp-l09mhc2y"
                                        data-hook="bgLayers"
                                        data-motion-part="BG_LAYER comp-l09mhc2y"
                                        class="MW5IWV"
                                    >
                                        <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                        <div
                                            id="bgMedia_comp-l09mhc2y"
                                            data-motion-part="BG_MEDIA comp-l09mhc2y"
                                            class="VgO9Yg"
                                        ></div>
                                    </div>
                                    <div
                                        data-mesh-id="comp-l09mhc2yinlineContent"
                                        data-testid="inline-content"
                                        class=""
                                    >
                                        <div
                                            data-mesh-id="comp-l09mhc2yinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                        >
                                            <div id="comp-l09mlcj0" class="MazNVa comp-l09mlcj0 wixui-image">
                                                <div data-testid="linkElement" class="j7pOnl">
                                                    <img
                                                        fetchpriority="high"
                                                        sizes="600px"
                                                        srcset="
                                                            https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_600,h_257,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg  1x,
                                                            https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_1200,h_514,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg 2x
                                                        "
                                                        id="img_comp-l09mlcj0"
                                                        src="https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_600,h_257,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg"
                                                        alt="Astro AD white.jpg"
                                                        style="object-fit: cover"
                                                        class="BI8PVQ Tj01hh"
                                                        width="600"
                                                        height="257"
                                                    />
                                                </div>
                                            </div>
                                            <div
                                                id="comp-l09mhc3x"
                                                class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-l09mhc3x wixui-rich-text"
                                                data-testid="richTextElement"
                                            >
                                                <h4
                                                    class="font_4 wixui-rich-text__text"
                                                    style="font-size: 56px; text-align: center"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="font-weight: bold" class="wixui-rich-text__text"
                                                            >All Protocol Observed.</span
                                                        ></span
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    id="comp-l09mhc5h"
                                    tabindex="-1"
                                    class="Oqnisf comp-l09mhc5h wixui-section"
                                    data-block-level-container="ClassicSection"
                                >
                                    <div
                                        id="bgLayers_comp-l09mhc5h"
                                        data-hook="bgLayers"
                                        data-motion-part="BG_LAYER comp-l09mhc5h"
                                        class="MW5IWV"
                                    >
                                        <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                        <div
                                            id="bgMedia_comp-l09mhc5h"
                                            data-motion-part="BG_MEDIA comp-l09mhc5h"
                                            class="VgO9Yg"
                                        ></div>
                                    </div>
                                    <div
                                        data-mesh-id="comp-l09mhc5hinlineContent"
                                        data-testid="inline-content"
                                        class=""
                                    >
                                        <div
                                            data-mesh-id="comp-l09mhc5hinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                        >
                                            <div
                                                id="comp-l09mhc6a"
                                                class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-l09mhc6a wixui-rich-text"
                                                data-testid="richTextElement"
                                            >
                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="font-style: italic" class="wixui-rich-text__text"
                                                            >Taifa Forward</span
                                                        >
                                                        is a bi-weekly digital newspaper documenting completed development projects, reforms, and public welfare programmes delivered by Kenyan
                                                        leaders across the country.</span
                                                    >
                                                </p>



                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="font-size: 22px; line-height: 1em; text-align: center"
                                                >
                                                    <span class="wixGuard wixui-rich-text__text">​</span>
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="font-style: italic" class="wixui-rich-text__text"
                                                            >Taifa Forward</span
                                                        >
                                                        Our editorial principle is simple and firm:
                                                        If it is not completed and verifiable, it does not appear in Taifa Forward.&nbsp;</span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >We do not report on:</span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                    >
                                                </p>

                                                <ul
                                                    class="font_7 wixui-rich-text__text"
                                                    style="
                                                        color: rgb(47, 46, 46);
                                                        font-family: barlow-medium, barlow, sans-serif;
                                                        font-size: 17px;
                                                    "
                                                >
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    ><a
                                                                        href="https://www.taipeitimes.com/News/world/archives/2022/01/15/2003771433"
                                                                        target="_blank"
                                                                        rel="noreferrer noopener"
                                                                        class="wixui-rich-text__text"
                                                                        >Political promises</a
                                                                    >&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    ><a
                                                                        href="https://www.niemanlab.org/2021/08/we-are-just-focused-on-being-where-readers-are-pan-african-weekly-the-continent-publishes-directly-and-only-on-whatsapp-and-signal/"
                                                                        target="_blank"
                                                                        rel="noreferrer noopener"
                                                                        class="wixui-rich-text__text"
                                                                        >Planned or projected projects</a
                                                                    >&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    ><a
                                                                        href="https://reutersinstitute.politics.ox.ac.uk/news/how-publishers-are-engaging-new-audiences-messaging-apps-global-south"
                                                                        target="_blank"
                                                                        rel="noreferrer noopener"
                                                                        class="wixui-rich-text__text"
                                                                        >Campaign pledges</a
                                                                    >&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    ><a
                                                                        href="https://ipi.media/ipiwoco-recap-innovations-to-grab-audiences-attention/"
                                                                        target="_blank"
                                                                        rel="noreferrer noopener"
                                                                        class="wixui-rich-text__text"
                                                                        >Announcements without delivery</a
                                                                    >
                                                                </span></span
                                                            >
                                                        </p>
                                                    </li>

                                                </ul>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >Every edition is published and distributed directly to readers through downloads and WhatsApp, ensuring accessibility and long-term reference.

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>
                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>


                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >
                                                        Taifa Forward exists to help citizens, researchers, and voters clearly see how leadership translates into real outcomes on the ground.
                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>




                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            >Contact us on <a
                                                                href="mailto:info@taifaforward.co.ke"
                                                                target="_self"
                                                                class="wixui-rich-text__text"
                                                                ><a
                                                                    data-auto-recognition="true"
                                                                    href="mailto:info@taifaforward.co.ke"
                                                                    class="wixui-rich-text__text"
                                                                    >info@taifaforward.co.ke</a
                                                                ></a
                                                            >
                                                            or <a
                                                                href="mailto:ads@taifaforward.co.ke"
                                                                target="_self"
                                                                class="wixui-rich-text__text"
                                                                ><a
                                                                    data-auto-recognition="true"
                                                                    href="mailto:ads@taifaforward.co.ke"
                                                                    class="wixui-rich-text__text"
                                                                    >ads@taifaforward.co.ke</a
                                                                ></a
                                                            ></span
                                                        ></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>
                                            </div>
                                            <div
                                                id="comp-l84duifh"
                                                class="comp-l84duifh"
                                                data-semantic-classname="button"
                                            >
                                                <a
                                                    data-testid="linkElement"
                                                    href="{{ route('donate-page')}}"
                                                    target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="StylableButton2545352419__root style-la10x1ud__root wixui-button StylableButton2545352419__link"
                                                    aria-label="DONATE"
                                                    ><span class="StylableButton2545352419__container"
                                                        ><span
                                                            class="StylableButton2545352419__label wixui-button__label"
                                                            data-testid="stylablebutton-label"
                                                            >DONATE</span
                                                        ><span
                                                            class="StylableButton2545352419__icon wixui-button__icon"
                                                            aria-hidden="true"
                                                            data-testid="stylablebutton-icon"
                                                            ><span
                                                                ><svg
                                                                    data-bbox="13.05 2.55 33.878 54.8"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 60 60"
                                                                >
                                                                    <g>
                                                                        <path
                                                                            d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"
                                                                        />
                                                                    </g>
                                                                </svg> </span></span></span
                                                ></a>
                                            </div>

                                            <div
                                                id="comp-mj6yzcsa"
                                                class="comp-mj6yzcsa"
                                                data-semantic-classname="button"
                                                style="width:236px"
                                            >
                                                <a
                                                    data-testid="linkElement"
                                                    href="https://wa.me/254110567872?text=SUBSCRIBE"
                                                    target="_blank"
                                                    class="StylableButton2545352419__root style-mj6yzcsq1__root wixui-button StylableButton2545352419__link"
                                                    aria-label="Subscribe on WhatsApp"
                                                    ><span class="StylableButton2545352419__container"
                                                        ><span
                                                            class="StylableButton2545352419__label wixui-button__label"
                                                            data-testid="stylablebutton-label"
                                                            >SUBSCRIBE ON WHATSAPP</span
                                                        ><span
                                                            class="StylableButton2545352419__icon wixui-button__icon"
                                                            aria-hidden="true"
                                                            data-testid="stylablebutton-icon"
                                                            ><span
                                                                ><svg
                                                                    data-bbox="13.05 2.55 33.878 54.8"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 60 60"
                                                                >
                                                                    <g>
                                                                        <path
                                                                            d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"
                                                                        />
                                                                    </g>
                                                                </svg> </span></span></span
                                                ></a>
                                            </div>
                                            <div data-mesh-id="comp-l09mhc5hinlineContent-wedge-3"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<div id="soapAfterPagesContainer" class="page-without-sosp soapAfterPagesContainer page-without-sosp"><div data-mesh-id="soapAfterPagesContainerinlineContent" data-testid="inline-content" class=""><div data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer" data-testid="mesh-container-content"><div id="CONTROLLER_COMP_CUSTOM_ID" style="display:none"></div></div></div></div><footer id="SITE_FOOTER" class="xU8fqS SITE_FOOTER wixui-footer" tabindex="-1"><div class="_C0cVf"><div class="_4XcTfy" data-testid="screenWidthContainerBg"></div></div><div class="U4Bvut"><div class="G5K6X8"><div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div></div><div class="CJF7A2"><div data-mesh-id="SITE_FOOTERinlineContent" data-testid="inline-content" class=""><div data-mesh-id="SITE_FOOTERinlineContent-gridContainer" data-testid="mesh-container-content"></div></div></div></div></footer></div></div><div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" role="region" tabindex="-1" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div></div></div>








</body>
</html>
