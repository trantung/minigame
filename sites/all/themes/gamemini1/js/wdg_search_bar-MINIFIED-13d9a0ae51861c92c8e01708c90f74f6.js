SpilGames({waiton:"spilgames.loaded"},"SWP SWPUtils Net JSLib Placeholder DOMSelect DOMEvent EventTracker".split(" "),function(n,g,z,u,A,v,e,w){n.init("search_bar");var p={},q=document.getElementById("search-form"),h=q["search-term"],b=document.getElementById("search-suggestions"),c=-1;e.add("#search-form","submit",function(a){var k=h.value,d=!1,x={eventCategory:"search",eventAction:"application",eventLabel:"submit",properties:{searchTerm:k.substring(0,1E3)}};w.track(x);0<=c&&(d=b.childNodes[c].childNodes[0],
d=d.textContent||d.innerText,h.value=d);2<=k.length&&h.placeholder!==k&&!~k.indexOf("@")?n.System.emit("user.search.request",{searchTerm:d||k}):e.preventDefault(a)});if(b){var f=function(){var a=v.get("#search-term");!document.getElementsByClassName&&a.createTextRange&&(a.select(),a=a.createTextRange(),a.collapse(!1),a.select())},r=function(){var a=h.value;2<=a.length?y({q:a}):(b.innerHTML="",m(),f())};e.add(".wdg_search_bar #search-term","keyup",function(a){38!=a.keyCode&&40!=a.keyCode&&r()});e.add(".wdg_search_bar #search-term",
"keydown",function(a){a=a||window.event;switch(a.keyCode){case 38:e.preventDefault(a);a=b.childNodes;g.removeClass(a[c],"is-selected");c=0<c?--c:a.length-1;g.addClass(a[c],"is-selected");break;case 40:e.preventDefault(a);a=b.childNodes;g.removeClass(a[c],"is-selected");c=++c%a.length;g.addClass(a[c],"is-selected");break;case 13:break;default:c=-1}});e.add(".wdg_search_bar #search-term","focus",function(a){r()});e.add(".wdg_search_bar #search-term","blur",function(a){b.innerHTML="";m();f()});var m=
function(){b.classList?b.classList.remove("visible"):b.className=b.className.replace(/visible/g,"")},y=function(a){var b=a.q,d=p[b]||!1;d?(t({searchTerm:b,data:d}),f()):u("api.application.suggest",a,function(a){p[b]=a;t({searchTerm:b,data:a});f()})},t=function(a){var c=a.data,d=!1;a=new RegExp(a.searchTerm,"ig");var e=function(a){h.value=this.innerText||this.textContent;q.submit()};b.innerHTML="";m();for(var g in c.suggestionList){var d=document.createElement("li"),f=c.suggestionList[g].suggestionTitle,
f=f.replace(a,'<span class="search-suggestions-match">$&</span>'),l=document.createElement("a");l.setAttribute("href","#");l.innerHTML=f;l.onmousedown=e;d.appendChild(l);b.appendChild(d);d=!0}d&&(b.classList?b.classList.add("visible"):b.className+=" visible")}}});
