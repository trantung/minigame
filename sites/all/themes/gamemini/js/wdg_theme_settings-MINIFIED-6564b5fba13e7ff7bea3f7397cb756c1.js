SpilGames(["SWP","DOMEvent","Net","Cookie"],function(a,e,g,d){a.init("theme_settings");var f=document.getElementById("wdg_theme_settings"),h=f.querySelector(".toggle"),k=a.getProperty("siteid"),l=a.getProperty("user_logged_in"),m=a.getProperty("guid"),n=a.get("spilgames.module.spapi.backend");e.add(h,"click",function(){a.Utils.toggleClass(f,"is-open")});e.add(".wdg_theme_settings li","click",function(b){b=b||window.event;var c=(b.target||b.srcElement).getAttribute("data-theme");l?g.send({url:n+"v1/theme/user/"+
k+"/"+m+"/all",type:"PUT",dataType:"json",data:JSON.stringify({theme:c,enabled:!0}),headers:{"x-auth-token":d.getItem("token")}},function(){a.System.emit("theme.changed",{theme:c})}):(d.removeItem({key:"swp_theme",path:"/"+window.location.pathname.split("/")[1]||""}),d.setItem({key:"swp_theme",value:c,expires:"never",path:"/"},function(){a.System.emit("theme.changed",{theme:c})}))})});