"use strict";!function(){document.getElementsByTagName("body")[0].setAttribute("data-pc-layout","horizontal");const t=document.querySelector(".navbar-content").innerHTML;function n(){var c=document.querySelectorAll(".pc-navbar > li.pc-item"),a="",r="",s="",i="",l=0,o=!1,u=!1,n=(c.forEach(function(e,t){var n;e.classList.contains("pc-caption")?(!0===u&&i.insertAdjacentHTML&&(n="",i.children[1]&&(n='<span class="pc-micon">'+i.children[1].outerHTML+"</span>"),i.insertAdjacentHTML("afterend",'<li class="pc-item pc-hasmenu">                <a href="#!" class="pc-link ">'+n+'<span class="pc-mtext">'+i.children[0].innerHTML+'</span>                  <span class="pc-arrow"><i data-feather="chevron-right"></i></span>                </a>                <ul class="pc-submenu">'+a+"                </ul>            </li>"),i.remove()),o=!(u=!(a="")),i=e,c[t+1].classList.contains("pc-caption")&&(i.remove(),i=s=r=a="",l=0,u=o=!1)):(!1===o&&(r=s,o=!0),a+=e.outerHTML,t+1===c.length&&(!0===u&&i.insertAdjacentHTML&&(i.insertAdjacentHTML("afterend",'<li class="pc-item pc-hasmenu">                            <a href="#!" class="pc-link ">                                <span class="pc-micon">'+i.children[1].outerHTML+'</span>                                <span class="pc-mtext">'+i.children[0].innerHTML+'</span>                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>                            </a>                            <ul class="pc-submenu">'+a+"                            </ul>                        </li>"),i.remove()),o=!(u=!(a="")),i=e),!0===u&&e.remove())}),document.querySelectorAll(".pc-navbar > li.pc-item"));n.forEach(function(e,t){(l+=e.getBoundingClientRect().width+49)>window.innerWidth?(!1===o&&(r=s,o=!0),!0===o&&(a+=e.outerHTML,e.remove())):s=e,t+1===n.length&&r.insertAdjacentHTML&&r.insertAdjacentHTML("afterend",'<li class="pc-item pc-hasmenu">                          <a href="#!" class="pc-link ">                              <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-clipboard"></use></svg></span>                              <span class="pc-mtext">Other</span>                              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>                          </a>                          <ul class="pc-submenu">'+a+"                          </ul>                      </li>")}),(n=document.querySelectorAll(".pc-navbar .pc-trigger")).forEach(function(e){e.classList.remove("pc-trigger"),e.children[1].removeAttribute("style"),e.classList.contains("active")&&e.classList.remove("active")}),document.querySelector(".pc-sidebar").classList.remove("d-none")}function c(){for(var e=document.querySelectorAll(".pc-sidebar .pc-navbar .pc-hasmenu"),t=0;t<e.length;t++)e[t].addEventListener("mouseenter",function(e){var t,n,c,a,r=window.innerHeight,s=window.innerWidth;1024<s&&(e=e.target.children[1],c=e.getBoundingClientRect(),a=c.left,t=c.top,n=c.width,c=c.height,a+n<=s||e.classList.add("edge"),t+c<=r||(e.classList.add("edge-alt"),c<=t)||(e.classList.add("edge-alt-full"),a="top: -"+(t-140)+"px; bottom: -"+(r-t-140)+"px",e.setAttribute("style",a)))},function(e){e.children[1].classList.remove("edge"),e.children[1].classList.remove("edge-alt")})}1024<window.innerWidth&&(n(),c()),window.addEventListener("resize",function(){var e=window.innerWidth;document.querySelector(".navbar-content").innerHTML="",document.querySelector(".navbar-content").innerHTML=t,1024<=e?setTimeout(()=>{n(),feather.replace(),c();var e=document.querySelectorAll(".pc-navbar li:not(.pc-trigger) .pc-submenu");document.querySelector(".pc-sidebar .pc-menu-overlay")&&document.querySelector(".pc-sidebar .pc-menu-overlay").remove();for(var t=0;t<e.length;t++)e[t].removeAttribute("style")},500):setTimeout(()=>{feather.replace(),menu_click(),document.querySelector(".navbar-content")&&new SimpleBar(document.querySelector(".navbar-content"))},500)})}();
