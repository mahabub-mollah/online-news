// -----------------------------------------------------------------------------------
//KWSA
// VisualLightBox for jQuery v 1.8.13j
// http://visuallightbox.com/
// VisualLightBox is a free wizard program that helps you easily generate LightBox photo
// galleries, in a few clicks without writing a single line of code. For Windows and Mac!
// Last updated: 2010-04-12
//

(function($){$.fn.visualLightbox=function(options){var C=null,badObjects=["select","object","embed"],l=null,B=[],k=null,c=null,m=50,I,showTimer;if(!document.getElementsByTagName){return;}options=$.extend({animate:true,autoPlay:true,borderSize:39,containerID:document,enableSlideshow:true,googleAnalytics:false,descSliding:true,imageDataLocation:"south",closeLocation:"",initImage:"",loop:true,overlayDuration:0.2,overlayOpacity:0.7,prefix:"",classNames:"vlightbox",resizeSpeed:7,Ae:false,slideTime:4,strings:{closeLink:"",loadingMsg:"loading",nextLink:"",prevLink:"",startSlideshow:"",stopSlideshow:"",numDisplayPrefix:"",numDisplaySeparator:"/"},enableRightClick:false,featBrowser:true,breathingSize:20,startZoom:false,floating:true},options);if(options.animate){var overlayDuration=Math.max(options.overlayDuration,0);options.resizeSpeed=Math.max(Math.min(options.resizeSpeed,10),1);var resizeDuration=(11-options.resizeSpeed)*0.15;}else{var overlayDuration=0;var resizeDuration=0;}var enableSlideshow=options.enableSlideshow;options.overlayOpacity=Math.max(Math.min(options.overlayOpacity,1),0);var playSlides=options.autoPlay;var container=$(options.containerID);var classNames=options.classNames;AW();var objBody=container.length&&container.get(0)!=document?container.get(0):document.getElementsByTagName("body").item(0);if(objBody.childNodes.length){$(objBody.childNodes[0]).before($("<div></div>"));objBody=objBody.childNodes[0];}function connectEvent(obj,name,func){$(obj)[name](func);}var n=document.createElement("div");n.setAttribute("id",getID("overlay"));n.style.display="none";objBody.appendChild(n);connectEvent(n,"click",end);var W=document.createElement("div");W.setAttribute("id",getID("lightbox"));W.style.display="none";objBody.appendChild(W);connectEvent(W,"click",end);var U=document.createElement("div");U.setAttribute("id",getID("imageDataContainer"));U.className=getID("clearfix");var P=document.createElement("table");P.setAttribute("id",getID("outerImageContainer"));P.cellSpacing=0;W.appendChild(P);var AG=P.insertRow(-1);var AY=AG.insertCell(-1);AY.className="tl";var Ac=AG.insertCell(-1);Ac.className="tc";var AI=AG.insertCell(-1);AI.className="tr";var AF=P.insertRow(-1);var Af=AF.insertCell(-1);Af.className="ml";var b=AF.insertCell(-1);b.setAttribute("id",getID("lightboxFrameBody"));b.innerHTML=String.fromCharCode(160);var Ag=AF.insertCell(-1);Ag.className="mr";var AD=P.insertRow(-1);var AZ=AD.insertCell(-1);AZ.className="bl";var Ab=AD.insertCell(-1);Ab.className="bc";var Ad=AD.insertCell(-1);Ad.className="br";if(options.imageDataLocation=="north"){b.appendChild(U);}var p=document.createElement("div");p.setAttribute("id",getID("imageData"));U.appendChild(p);var g=document.createElement("div");g.setAttribute("id",getID("imageDetails"));p.appendChild(g);var AP=document.createElement("div");AP.setAttribute("id",getID("caption"));g.appendChild(AP);var AK=document.createElement("span");AK.setAttribute("id",getID("numberDisplay"));g.appendChild(AK);var S=document.createElement("span");S.setAttribute("id",getID("detailsNav"));g.appendChild(S);var T=document.createElement("a");T.setAttribute("id",getID("prevLinkDetails"));T.setAttribute("href","javascript:void(0);");T.innerHTML=options.strings.prevLink;S.appendChild(T);connectEvent(T,"click",showPrev);var q=document.createElement("a");q.setAttribute("id",getID("slideShowControl"));q.setAttribute("href","javascript:void(0);");S.appendChild(q);connectEvent(q,"click",AH);var Z=document.createElement("a");Z.setAttribute("id",getID("closeLink"));Z.setAttribute("href","javascript:void(0);");Z.innerHTML=options.strings.closeLink;if(options.closeLocation=="nav"){S.appendChild(Z);}else{var _=document.createElement("div");_.setAttribute("id",getID("close"));if(options.closeLocation=="top"){AI.appendChild(_);}else{p.appendChild(_);}_.appendChild(Z);}connectEvent(Z,"click",end);var f=document.createElement("a");f.setAttribute("id",getID("nextLinkDetails"));f.setAttribute("href","javascript:void(0);");f.innerHTML=options.strings.nextLink;S.appendChild(f);connectEvent(f,"click",showNext);var h=document.createElement("div");h.setAttribute("id",getID("imageContainer"));b.appendChild(h);var AJ=document.createElement("img");AJ.setAttribute("id",getID("lightboxImage"));h.appendChild(AJ);if(!options.enableRightClick){var AB=document.createElement("div");AB.setAttribute("id",getID("hoverNav"));AB.style.background="white";AB.style.opacity=0;AB.style.filter="alpha(opacity=0)";h.appendChild(AB);connectEvent(AB,"mousemove",hoverNav);connectEvent(AB,"mouseout",outNav);}var AA=document.createElement("a");AA.setAttribute("id",getID("prevLinkImg"));AA.setAttribute("href","javascript:void(0);");h.appendChild(AA);connectEvent(AA,"click",showPrev);var u=document.createElement("a");u.setAttribute("id",getID("nextLinkImg"));u.setAttribute("href","javascript:void(0);");h.appendChild(u);connectEvent(u,"click",showNext);var AE=document.createElement("div");AE.setAttribute("id",getID("loading"));h.appendChild(AE);var a=document.createElement("a");a.setAttribute("id",getID("loadingLink"));a.setAttribute("href","javascript:void(0);");a.innerHTML=options.strings.loadingMsg;AE.appendChild(a);connectEvent(a,"click",end);if(options.imageDataLocation!="north"){b.appendChild(U);}if(options.initImage!=""){start("#"+options.initImage);}function getHref(Node){if(Node.tagName.toLowerCase()!="a"){Node=$("A:first",Node);}return $(Node).attr("href");}function getTitle(Node){if(Node.tagName.toLowerCase()=="a"){return $(Node).attr("title")||Node.title;}return $(">*:last",Node).html();}function AW(){$("."+classNames.replace(/^\,/,".$&"),container).each(function(){if(getHref(this)){$(this).click(function(event){event.preventDefault();start(this);return false;});}});}var t="MRINMOY";if(t){var c=$("<div></div>");c.css({position:"absolute",right:"0px",bottom:"0px",padding:"2px 3px",'background-color':"#EEE",'z-index':10});$(h).append(c);var d=$(document.createElement("A"));d.css({color:"#555",font:"11px Arial,Verdana,sans-serif",padding:"3px 6px",width:"auto",height:"auto",margin:"0 0 0 0",outline:"none"});d.attr({href:"http://"+t.toLowerCase()});d.html(t);d.bind("contextmenu",function(eventObject){return false;});c.append(d);}var start=this.start=function(G){Aa();G=$(G);$$("overlay").css({height:docWH()[1]+"px"});if(options.descSliding){$$("imageDataContainer").hide();}$$("lightboxImage").hide().attr({src:""});if(options.startZoom){$$("imageContainer").css({width:G.width()+"px",height:G.height()+"px"});if(!document.all){$$("outerImageContainer").css({opacity:0.1});}$$("lightbox").css({left:G.offset().left-options.borderSize+"px",top:G.offset().top-options.borderSize+"px",width:G.width()+options.borderSize*2+"px",height:"auto"});}else{$$("overlay").css({opacity:0}).show().fadeTo(overlayDuration*1000,options.overlayOpacity);$$("lightbox").css({left:0,width:"100%"});}$$("lightbox").show();B=[];l=null;c=0;$("."+(G.attr("className")||G.get(0).className),container).each(function(){if(getHref(this)){B.push({link:getHref(this),title:getTitle(this)});if(this==G.get(0)){c=B.length-1;}}});if(B.length>1){l=G.attr("className");}if(options.featBrowser){$(window).resize(v);}if(options.floating){$(window).scroll(v);}$(window).resize(adjustOverlay);$(window).scroll(adjustOverlay);changeImage(c);};function changeImage(imageNum){C=imageNum;disableKeyboardNav();V();showLoading();if(!options.startZoom){$$("lightboxImage").hide();}$$("prevLinkImg").hide();$$("nextLinkImg").hide();if(options.descSliding){$$("imageDataContainer").hide();}I=new Image;I.onload=function(){B[C].link=I.src;B[C].width=I.width;B[C].height=I.height;AC(false);};if(options.startZoom&&!$$("lightboxImage").attr("src")){B[C].width=320;B[C].height=240;AC(false,true);}I.src=B[C].link;if(options.googleAnalytics){urchinTracker(B[C].link);}}function AC(recall,J){var imgWidth=B[C].width;var imgHeight=B[C].height;var L=w();var r=imgWidth/imgHeight;if(options.featBrowser){var AX=L.AL/L.s;if(r>AX){var t=L.AL-options.borderSize*2-options.breathingSize*2;var z=Math.round(t/r);}else{var z=L.s-options.borderSize*2-options.breathingSize*2-m;var t=Math.round(z*r);}if(imgWidth>t||imgHeight>z){imgWidth=t;imgHeight=z;}}var K=AM().y+(w().s-(imgHeight+m+options.borderSize*2))/2;var Q=$$("imageContainer");if(recall==true){Q.css({height:imgHeight+"px",width:imgWidth+"px"});if(options.floating){moveEffect($$("lightbox"),K);}else{$$("lightbox").css({top:K+"px"});}}else{var F=$$("lightboxImage");Q.stop(true,false);F.stop(true,false);var H;if(options.startZoom&&F.attr("src")){H=F;H.attr({id:getID("lightboxImage2")});}else{F.remove();}if(!J){F=$(I);F.hide();F.attr({id:getID("lightboxImage")});Q.append(F);}with(Q){var D=r/(width()/height());}if(!J){if(options.startZoom){if(H){$$("lightboxImage2").stop(true,true);}var o=H?120:100;if(H){with(H){css({width:1>D?"auto":width()/parent().width()*100+"%",height:1>D?height()/parent().height()*100+"%":"auto",left:0,top:0});}}F.css({opacity:0,display:"block",position:"absolute",width:1>D?o+"%":"auto",height:1>D?"auto":o+"%",left:(100-o*(1>D?1:D))/2+"%",top:(100-o*(1>D?1/D:1))/2+"%"});}if(options.startZoom){hideLoading();}}AV(K,imgWidth,imgHeight,D,J);}if(options.enableRightClick){$$("lightboxImage").mousemove(hoverNav);$$("lightboxImage").mouseout(outNav);}}function AV(K,imgWidth,imgHeight,D,J){var Q=$$("imageContainer");var F=$$("lightboxImage");var lightbox=$$("lightbox");if(!J){var H=$$("lightboxImage2");}if(options.startZoom){F.fadeTo(resizeDuration*1000,1);if(!document.all){$$("outerImageContainer").fadeTo(resizeDuration*1000,1);}}moveEffect(lightbox,K);if(options.startZoom&&!J){H.animate($.extend({opacity:0},D<1?{height:"120%",top:"-10%",left:(100-120/D)/2+"%"}:{width:"120%",left:"-10%",top:(100-D*120)/2+"%"}),{queue:false,duration:resizeDuration*1000,complete:function(){$(this).remove();}});F.animate($.extend({left:0,top:0},D<1?{width:"100%"}:{height:"100%"}),{queue:false,duration:resizeDuration*1000});}Q.animate({width:imgWidth+"px",height:imgHeight+"px"},{queue:false,duration:resizeDuration*1000,complete:!J?function(){showImage();}:null});}function moveEffect(lightbox,K){lightbox.stop(true,false);lightbox.animate({width:"100%",left:0,top:K},{queue:false,duration:resizeDuration*1000});}function showLoading(){clearTimeout(showTimer);var loading=$$("loading");loading.show();loading.css({visibility:"hidden"});showTimer=setTimeout(function(){$$("loading").css({visibility:"visible"});},300);}function hideLoading(){clearTimeout(showTimer);$$("loading").hide();}function showImage(){hideLoading();if(options.startZoom){$$("overlay:hidden").css({opacity:0}).show().fadeTo(overlayDuration*1000,options.overlayOpacity);showDetails();}else{$$("lightboxImage").css({opacity:0}).show().fadeTo(500,1,function(){showDetails();});}AS();}function updateDetails(){$$("caption").html(B[C].title||"");if(B.length>1){var num_display=options.strings.numDisplayPrefix+" "+eval(C+1)+" "+options.strings.numDisplaySeparator+" "+B.length;if(options.Ae&&l){num_display+=" "+options.strings.numDisplaySeparator+" "+l;}$$("numberDisplay").text(num_display);$$("slideShowControl").css({display:enableSlideshow?"":"none"});}}function showDetails(){updateDetails();if(options.descSliding){$$("imageDataContainer").animate({height:"show",opacity:"show"},650,null,function(){updateNav();});}else{updateNav();}}function updateNav(){var d=1/B.length;m=m*(1-d)+$$("imageDataContainer").height()*d;if(B.length>1){$$("prevLinkImg").show();$$("nextLinkImg").show();if(enableSlideshow){if(playSlides){AN();}else{AO();}}}AR();}function AN(){if($$("lightbox:hidden").length){return;}V();playSlides=true;k=setTimeout(function(){showNext();},options.slideTime*1000);$$("slideShowControl").text(options.strings.stopSlideshow);$$("slideShowControl").addClass("started");}function AO(){playSlides=false;V();$$("slideShowControl").text(options.strings.startSlideshow);$$("slideShowControl").removeClass("started");}function AH(){if(playSlides){AO();}else{AN();}}function V(){if(k){k=clearTimeout(k);}}function showNext(){if(B.length>1){V();if(!options.loop&&(C==B.length-1&&c==0||C+1==c)){end();return;}if(C==B.length-1){O(0);}else{O(C+1);}}}function O(imageNum){if(options.descSliding){$$("imageDataContainer").animate({height:"hide",opacity:"hide"},650,null,function(){changeImage(imageNum);});}else{changeImage(imageNum);}}function showPrev(){if(B.length>1){if(C==0){O(B.length-1);}else{O(C-1);}}}function showFirst(){if(B.length>1){O(0);}}function showLast(){if(B.length>1){O(B.length-1);}}function AR(){document.onkeydown=keyboardAction;}function disableKeyboardNav(){document.onkeydown="";}function keyboardAction(e){if(e==null){keycode=event.keyCode;}else{keycode=e.which;}key=String.fromCharCode(keycode).toLowerCase();if(key=="x"||key=="o"||key=="c"){end();}else if(key=="p"||key=="%"){showPrev();}else if(key=="n"||key=="'"){showNext();}else if(key=="f"){showFirst();}else if(key=="l"){showLast();}else if(key=="s"){if(B.length>0&&options.enableSlideshow){AH();}}}function AS(){var AT=B.length-1==C?0:C+1;(new Image).src=B[AT].link;var AQ=C==0?B.length-1:C-1;(new Image).src=B[AQ].link;}function end(Event){if(Event){var id=$(Event.target).attr("id");if(getID("closeLink")!=id&&getID("lightbox")!=id&&getID("overlay")!=id){return;}}$$("imageContainer").stop(true,false);$$("lightboxImage").stop(true,false);I.onload=null;disableKeyboardNav();V();$$("lightbox").hide();AU();if(options.overlayOpacity){$$("overlay").fadeOut(overlayDuration*1000);}else{$$("overlay").hide();}$(window).unbind("resize",v);$(window).unbind("scroll",v);$(window).unbind("resize",adjustOverlay);$(window).unbind("scroll",adjustOverlay);}function hoverNav(event){if(event.pageX-$$("imageContainer").offset().left<$$("imageContainer").width()/2){$$("prevLinkImg").addClass("hover");$$("nextLinkImg").removeClass("hover");}else{$$("prevLinkImg").removeClass("hover");$$("nextLinkImg").addClass("hover");}}function outNav(){$$("prevLinkImg").removeClass("hover");$$("nextLinkImg").removeClass("hover");}function v(){AC(true);}function adjustOverlay(){$$("overlay").css({left:AM().x+"px",top:0,width:"100%",height:docWH()[1]+"px"});}function AU(){var els;var tags=badObjects;for(var i=0;i<tags.length;i++){els=document.getElementsByTagName(tags[i]);for(var j=0;j<els.length;j++){$(els[j]).css({visibility:"visible"});}}}function Aa(){var tags=badObjects;for(var i=0;i<tags.length;i++){$(tags[i]).css({visibility:"hidden"});}}function AM(){var x,y;if(self.pageYOffset){x=self.pageXOffset;y=self.pageYOffset;}else if(document.documentElement&&document.documentElement.scrollTop){x=document.documentElement.scrollLeft;y=document.documentElement.scrollTop;}else if(document.body){x=document.body.scrollLeft;y=document.body.scrollTop;}return{x:x,y:y};}function w(){var N,M;if(self.innerHeight){N=self.innerWidth;M=self.innerHeight;}else if(document.documentElement&&document.documentElement.clientHeight){N=document.documentElement.clientWidth;M=document.documentElement.clientHeight;}else if(document.body){N=document.body.clientWidth;M=document.body.clientHeight;}return{AL:N,s:M};}function docWH(){var b=document.body,e=document.documentElement,w=0,h=0;if(e){w=Math.max(w,e.scrollWidth,e.offsetWidth);h=Math.max(h,e.scrollHeight,e.offsetHeight);}if(b){w=Math.max(w,b.scrollWidth,b.offsetWidth);h=Math.max(h,b.scrollHeight,b.offsetHeight);if(window.innerWidth){w=Math.max(w,window.innerWidth);h=Math.max(h,window.innerHeight);}}return[w,h];}function getID(id){return options.prefix+id;}function $$(name){return $("#"+getID(name));}return this;};})(jQuery);