SpilGames(["SWP","DOMEvent"],function(g,e){g.init("featured_games");var d=window,b=d.document.getElementById("wdg_featured_games"),n=b.querySelector(".displayer"),p=b.querySelector(".image-mover"),l=b.querySelector(".subslider"),h=b.querySelectorAll(".displayer-image"),b=b.querySelectorAll(".control-container"),f=function(a){g.Utils.removeClass(h[c],"active");c="left"===a?c?--c:m-1:++c%m;g.Utils.addClass(h[c],"active");var b=h[c],e=b.getAttribute("data-src");e&&(b.removeAttribute("data-src"),b.src=
e);p.style.left=-100*c+"%";l&&(l.style.left=-50*c+"%");a||(k=d.setTimeout(f,5E3))},c=0,m=h.length,k;e.add(n,"swipe",function(a){if(a={left:"right",right:"left"}[a.swipeDirection])d.clearTimeout(k),f(a)});e.add(b,"click",function(a){a=a||d.event;a=a.target||a.srcElement;d.clearTimeout(k);g.Utils.hasClass(a,"goleft")?f("left"):f("right")});k=d.setTimeout(f,5E3)});
