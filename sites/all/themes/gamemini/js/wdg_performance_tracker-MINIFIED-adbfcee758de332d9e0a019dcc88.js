/*
: 2014, SpilGames
 @author Laurens van Hees <laurens.vanhees@spilgames.com>
*/
SpilGames("spilgames.import",{name:"NetworkTest",deps:["JSLib"],module:function(h,s){var m;m||(m=function(m){var d,n,e,g;n=[{name:"image-0.png",size:11483,timeout:1400},{name:"image-1.png",size:40658,timeout:1200},{name:"image-2.png",size:164897,timeout:1300},{name:"image-3.png",size:381756,timeout:1500},{name:"image-4.png",size:1234664,timeout:1200},{name:"image-5.png",size:4509613,timeout:1200},{name:"image-6.png",size:9084559,timeout:1200}];n.end=n.length;n.start=0;n.l={name:"image-l.gif",size:35,
timeout:1E3};e={getCookie:function(a){if(!a)return null;a=" "+a+"=";var b,c;c=" "+s.cookie+";";return 0<=(b=c.indexOf(a))?(b+=a.length,c=c.substring(b,c.indexOf(";",b))):null},setCookie:function(a,b,c){var r,f,l;if(!a||!d.site_domain)return!1;b=window.JSON.stringify(b);r=a+"="+b;f=[r,"path=/","domain="+d.site_domain];c&&(l=new Date,l.setTime(l.getTime()+1E3*c),l=l.toGMTString(),f.push("expires="+l));return 500>r.length&&(s.cookie=f.join("; "),a=this.getCookie(a),b===a)?!0:!1},pluginConfig:function(a,
b,c,d){var f=0;if(!b)return!1;for(c=0;c<d.length;c++)void 0!==b[d[c]]&&(a[d[c]]=b[d[c]],f++);return 0<f}};d={base_url:"",timeout:15E3,nruns:5,latency_runs:10,cookie_exp:604800,cookie:"BA",results:[],latencies:[],latency:null,runs_left:0,aborted:!1,complete:!0,running:!1,initialized:!1,vars:{},onCompleteCallbacks:[],addVar:function(a,b){if("string"===typeof a)d.vars[a]=b;else if("object"===typeof a)for(var c in a)a.hasOwnProperty(c)&&(d.vars[c]=a[c]);return this},removeVar:function(a){var b,c;if(!arguments.length)return this;
c=1===arguments.length&&"[object Array]"===Object.prototype.toString.apply(a)?a:arguments;for(b=0;b<c.length;b++)d.vars.hasOwnProperty(c[b])&&delete d.vars[c[b]];return this},ncmp:function(a,b){return a-b},iqr:function(a){var b=a.length-1,c,d,f,l=[],e;c=(a[Math.floor(0.25*b)]+a[Math.ceil(0.25*b)])/2;d=(a[Math.floor(0.75*b)]+a[Math.ceil(0.75*b)])/2;f=1.5*(d-c);if(0===f)return a;b++;for(e=0;e<b&&a[e]<d+f;e++)a[e]>c-f&&l.push(a[e]);return l},calc_latency:function(){var a,b,c=0,d=0,f;this.latencies.shift();
f=this.iqr(this.latencies.sort(this.ncmp));b=f.length;for(a=0;a<b;a++)c+=f[a],d+=f[a]*f[a];a=Math.round(c/b);c=Math.sqrt(d/b-c*c/(b*b));d=(1.96*c/Math.sqrt(b)).toFixed(2);c=c.toFixed(2);b=Math.round((f[Math.floor(b/2)]+f[Math.ceil(b/2)])/2);return{mean:a,median:b,stddev:c,stderr:d}},calc_bw:function(){var a,b,c=0,d,f=[],e=[],k=0,g=0,h=0,m=0,p,t,q=[];for(a=0;a<this.nruns;a++)if(this.results[a]&&this.results[a].r)for(d=this.results[a].r,p=0,b=d.length-1;0<=b&&3>p&&d[b];b--)null!==d[b].t&&(c++,p++,t=
1E3*n[b].size/d[b].t,f.push(t),t=1E3*n[b].size/(d[b].t-this.latency.mean),e.push(t),d[b].t<this.latency.mean&&q.push(b+"_"+d[b].t));3<f.length?(f=this.iqr(f.sort(this.ncmp)),e=this.iqr(e.sort(this.ncmp))):(f=f.sort(this.ncmp),e=e.sort(this.ncmp));c=Math.max(f.length,e.length);for(a=0;a<c;a++)a<f.length&&(k+=f[a],g+=Math.pow(f[a],2)),a<e.length&&(h+=e[a],m+=Math.pow(e[a],2));c=f.length;a=Math.round(k/c);k=Math.sqrt(g/c-Math.pow(k/c,2));g=Math.round(1.96*k/Math.sqrt(c));k=Math.round(k);c=f.length-1;
f=Math.round((f[Math.floor(c/2)]+f[Math.ceil(c/2)])/2);c=e.length;b=Math.round(h/c);h=Math.sqrt(m/c-Math.pow(h/c,2));m=(1.96*h/Math.sqrt(c)).toFixed(2);h=h.toFixed(2);c=e.length-1;c=Math.round((e[Math.floor(c/2)]+e[Math.ceil(c/2)])/2);return{mean:a,stddev:k,stderr:g,median:f,mean_corrected:b,stddev_corrected:h,stderr_corrected:m,median_corrected:c,debug_info:q}},defer:function(a){var b=this;return setTimeout(function(){a.call(b);b=null},10)},load_img:function(a,b,c){var d=this.base_url+n[a].name+
"?t="+(new Date).getTime()+Math.random(),e=0,g=0,k=new Image,h=this;k.onload=function(){k=k.onload=k.onerror=null;clearTimeout(e);c&&c.call(h,a,g,b,!0);h=c=null};k.onerror=function(){k=k.onload=k.onerror=null;clearTimeout(e);c&&c.call(h,a,g,b,!1);h=c=null};e=setTimeout(function(){c&&c.call(h,a,g,b,null)},n[a].timeout+Math.min(400,this.latency?this.latency.mean:400));g=(new Date).getTime();k.src=d},lat_loaded:function(a,b,c,d){c===this.latency_runs+1&&(null!==d&&(a=(new Date).getTime()-b,this.latencies.push(a)),
0===this.latency_runs&&(this.latency=this.calc_latency()),this.defer(this.iterate))},img_loaded:function(a,b,c,d){c!==this.runs_left+1||this.results[this.nruns-c].r[a]||(null===d?this.results[this.nruns-c].r[a+1]={t:null,state:null,run:c}:(b={start:b,end:(new Date).getTime(),t:null,state:d,run:c},d&&(b.t=b.end-b.start),this.results[this.nruns-c].r[a]=b,a>=n.end-1||void 0!==this.results[this.nruns-c].r[a+1]?(c===this.nruns&&(n.start=a),this.defer(this.iterate)):this.load_img(a+1,c,this.img_loaded)))},
finish:function(){this.latency||(this.latency=this.calc_latency());var a=this.calc_bw(),b={bw:a.median_corrected,bw_err:parseFloat(a.stderr_corrected,10),lat:this.latency.mean,lat_err:parseFloat(this.latency.stderr,10),bw_time:Math.round((new Date).getTime()/1E3)};d.addVar(b);0<a.debug_info.length&&d.addVar("bw_debug",a.debug_info.join(","));a={t:Math.round(b.bw),te:b.bw_err,l:b.lat,le:b.lat_err,m:b.bw_time};!isNaN(b.bw)&&0<b.bw?(e.setCookie(this.cookie,a,this.cookie_exp),this.processOncomplete(a)):
this.processOncomplete(!1);this.complete=!0;this.running=!1},iterate:function(){if(this.aborted)return!1;this.runs_left?this.latency_runs?this.load_img("l",this.latency_runs--,this.lat_loaded):(this.results.push({r:[]}),this.load_img(n.start,this.runs_left--,this.img_loaded)):this.finish()},setVarsFromCookie:function(a){var b=parseInt(a.t,10),c=parseFloat(a.te,10),e=parseInt(a.l,10)||0,f=parseFloat(a.le,10)||0;a=parseInt(a.m,10);var g=Math.round((new Date).getTime()/1E3);return a>=g-this.cookie_exp&&
0<b?(this.complete=!0,d.addVar({bw:b,lat:e,bw_err:c,lat_err:f}),!0):!1},formatResults:function(a){var b=a.t|0,c=a.te|0,d=8*b/1E3,e=8*c/1E3,g=a.l|0,h=a.le|0;return{throughput:{Bps:{value:Math.floor(b),MoE:Math.floor(c)},kbps:{value:Math.floor(d),MoE:Math.floor(e)},mbps:{value:Math.floor(d/1E3),MoE:Math.floor(e/1E3)},confidenceLevel:Math.floor(100-100*(a.te|0)/b)},latency:{ms:g,MoE:h,confidenceLevel:Math.floor(100-100*h/g)}}},processOncomplete:function(a){var b=this.onCompleteCallbacks.length;a=a?d.formatResults(a):
!1;var c;for(c=0;c<b;c++)this.onCompleteCallbacks[c](a)}};return g={onComplete:function(a){d.onCompleteCallbacks.push(a)},hasResults:function(){return g.getResults()?!0:!1},getResults:function(){var a;try{a=window.JSON.parse(e.getCookie(d.cookie))}catch(b){}return a&&a.t&&d.setVarsFromCookie(a)?d.formatResults(a):!1},init:function(a){if(d.initialized||!window.JSON||"function"!==typeof window.JSON.parse)return g;e.pluginConfig(d,a,"BW","base_url timeout nruns cookie cookie_exp site_domain".split(" "));
if(!d.base_url)return g;n.start=0;d.runs_left=d.nruns;d.latency_runs=10;d.results=[];d.latencies=[];d.latency=null;d.complete=!1;d.aborted=!1;d.removeVar("ba","ba_err","lat","lat_err");d.initialized=!0;return g},start:function(){g.hasResults()?d.processOncomplete(g.getResults()):g.run.call()},abort:function(){d.aborted=!0;d.running&&d.finish();return g},run:function(){if(d.running||d.complete)return g;d.running=!0;h.setTimeout(g.abort,d.timeout);d.defer(d.iterate);return g},is_complete:function(){return d.complete}}});
return m}(window,document)});/*
: 2013, SpilGames
 @author Laurens van Hees <laurens.vanhees@spilgames.com>
*/
SpilGames("spilgames.import",{name:"PerformanceTracker",deps:["JSLib","Utils","SWP","NetworkTest"],module:function(h,s){var m={},p,d,n=h.performance||h.webkitPerformance||h.mozPerformance||h.msPerformance||{},e=n.timing||{},g={},a={},b={},c=!1,r=!1,f={},l=[],k,u={addEventListener:function(){var a;h.addEventListener?a=function(a,b,c){c.addEventListener(a,b,!1)}:h.attachEvent&&(a=function(a,b,c){c.attachEvent("on"+a,b)});return a}()},w=function(){var a=e.navigationStart,b=function(a){return"number"===
typeof a?!0:!1};b(a)&&(b(e.responseStart)&&(g.timeToFirstByte=e.responseStart-a),b(e.domInteractive)&&(g.timeToInteractive=e.domInteractive-a),b(e.domContentLoadedEventStart)&&(g.timeToDomContentLoaded=e.domContentLoadedEventStart-a),b(e.loadEventStart)&&(g.timeToLoad=e.loadEventStart-a));b(e.domainLookupStart)&&b(e.domainLookupEnd)&&(g.dnsLookupTime=e.domainLookupEnd-e.domainLookupStart);b(e.connectStart)&&b(e.connectEnd)&&(g.tcpConnectTime=e.connectEnd-e.connectStart);b(e.responseStart)&&b(e.responseEnd)&&
(g.htmlFetchTime=e.responseEnd-e.responseStart);b(e.requestStart)&&b(e.responseStart)&&(g.backendProcessingTime=e.responseStart-e.requestStart)},v=function(a){var b,c,d=/^[a-z0-9]+$/i;for(b in a)a.hasOwnProperty(b)&&(c=a[b],"number"===typeof c&&(0<=c||d.test(c))&&(f[b]=c))},x=function(a){var b=function(a){!1!==a&&(k=a,m("tracker.event.track",{eventCategory:"RUM",eventAction:"netspeed",properties:{Bps:a.throughput.Bps.value,BpsMoE:a.throughput.Bps.MoE,BpsConfidence:a.throughput.confidenceLevel,latency:a.latency.ms,
latencyMoE:a.latency.MoE,latencyConfidence:a.latency.confidenceLevel,device:p,from:"new_run"}}));var b=l.length,c,d;for(d=0;d<b;d+=1)c=l[d],"function"===typeof c&&c(a);l=[]},c=function(){d.onComplete(b);d.start()},e=function(){a.defer?h.setTimeout(c,a.defer):c()};d.init({base_url:"http://static1.spilcdn.com/boomerang/",cookie:p+".netinfo",site_domain:s.location.host});d.hasResults()?b(d.getResults()):a.waitOn?(m.SWP.init("performance_tracker"),m.SWP.System.init(function(b){b.name===a.waitOn&&e()})):
e()};return function(t,q,s,y){u.jsLib=q;m=t;m.SWP=s;d=y;p=m.get("spilgames.user.deviceType")||"unknown";return{track:function(d){var k=function(){r=!0;var k=n.navigation;k&&"number"===typeof k.type&&(a.navType=k.type);w();h.chrome&&h.chrome.loadTimes&&(k=h.chrome.loadTimes())&&k.firstPaintTime&&e.navigationStart&&(b.timeToFirstPaint=parseInt(1E3*(k.firstPaintTime-e.navigationStart/1E3),10));e&&e.msFirstPaint&&e.navigationStart&&(b.timeToFirstPaint=e.msFirstPaint-e.navigationStart);v(g);v(a);v(b);
0<u.jsLib.size(f)&&(m("tracker.event.track",{eventCategory:"RUM",eventAction:"pageload",properties:f}),c=!0);r=!1;q.isObject(d)&&q.isObject(d.netspeed)&&!0===d.netspeed.measure&&p&&"unknown"!==p&&x(d.netspeed)},l=n.timing;c||r||(!l||q.isNumber(l.loadEventEnd)&&0!==l.loadEventEnd?k():u.addEventListener("load",function(){k()},h))},elapsedTime:function(a){var b=n.timing;a="string"===typeof a&&"number"===typeof b[a]?a:"navigationStart";return(new Date).getTime()-b[a]},getNetspeed:function(a,b){if("undefined"!==
typeof k)a(k);else{var c=l.push(a)-1;b&&q.isNumber(b.timeout)&&h.setTimeout(function(){var a=l[c];"function"===typeof a&&(delete l[c],a(!1))},b.timeout)}}}}}(window,window.document)});
//# sourceMappingURL=wdg_performance_tracker-MINIFIED-adbfcee758de332d9e0a019dcc885f717796e8a5.js.map