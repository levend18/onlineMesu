function releaseStyleDisplay(){waitingforstyle=!1}function setPaperSize(n){var t;n=="A4"?(cert_width=8.27,cert_height=3.897,jQuery(".CertSampleTextBorder").css("height","300px"),t=document.getElementById("imp11-cert"),t.setAttribute("width",637),t.setAttribute("height",300),t.setAttribute("viewBox","0 0 794 374"),marginAdjust=.115):(cert_width=8.5,cert_height=3.666,jQuery(".CertSampleTextBorder").css("height","280px"),t=document.getElementById("imp11-cert"),t.setAttribute("width",651),t.setAttribute("height",280),t.setAttribute("viewBox","0 0 816 351"),marginAdjust=0)}function changeCertStyle(n){var t="styles/certs/"+n;jQuery("#certCSS").attr("href",t);async.parallel([function(n){async_library.get(t,n)},],function(n,t){t[0].match("style")&&jQuery.parsecss(t[0],function(n){var t;setItem("certCSS",n);changeStyle_background?(t=n[".backgroundCert"].image,jQuery("#mp-cert-background").val(t),jQuery("#cert-paper-color").spectrum("set",n[".backgroundCert"]["paper-color"])):(t=certMenu.cert_background,jQuery("#mp-cert-background").val(t),jQuery("#cert-paper-color").spectrum("set",certMenu.cert_spectrum));miniEngine()})})}function miniEngine(){var t=getItem("certCSS"),n,r,u,i;makeCertInactive();saveCertMenu();certMenuTranslate();certBackground();certBorder();print_cert_footer();certPics();jQuery("#certPreview").children().remove();t=getItem("certCSS");n=$.map(t[".page-marginsCert"].margins.split(","),parseFloat);n[0]+=marginAdjust;n[2]+=marginAdjust;n[1]-=marginAdjust;n[3]-=marginAdjust;r=parseFloat(t[".styleCert"]["space-between-columns"]);u=cert_title_span()[0];y_cert=0;i=cert_width-n[1]-n[3];$.each(certMenu.food_item.order,function(n,t){n>u?print_cert(t,(i-r)/2,!1):print_cert(t,i,!1)})}function printCert_callback(n){var i=n.heading,t;i&&(add_space(i,n.space_before,n.space_after),n.n_col==1?jQuery(i).find("tspan").first().attr("n_col","1"):jQuery(i).find("tspan").first().attr("n_col","0"),t="certitem_"+n.head_id,certGroup("#certPreview",t),jQuery("#"+t).hide(),jQuery("#"+t).append(i),certRect(t,n.column_width),n.css_shadow!="none"&&certShadow(jQuery("#"+t)),n.head_accent!="(none)"&&n.head_accent!="none"&&certAccent("#"+t,n.head_accent),cert_tidyup())}function getCertUrl(n,t,i,r){var u,s;if(n.indexOf("footer")>-1){n=n.replace(/footer/,"");var f=0,e=3.7,o=r.lineheight}else var f=0,e=y_cert,o=r.lineheight;return(u=parseFloat(parseFloat(r.column_width)-parseFloat(i.indent)-parseFloat(i.dr_indent)).toFixed(3),r.UseLF&&(u=u+"&lf_wrap=1"),i.icaps&&(t=t.toUpperCase()),r.swap_class!=undefined&&(n=r.swap_class),r)?{font_size:i.font_size,font_family:i.font_family,font_style:i.font_style,font_weight:i.font_weight,"class":n,x:f,y:e,justify:i.justify,lh_mult:o,boxwidth:u,letter_sp:i.letter_sp,text:encodeURIComponent(t)}:"alvin_pdf_textMetric.php?font_size="+i.font_size+"&font_family="+i.font_family+"&font_style="+i.font_style+"&font_weight="+i.font_weight+"&class="+n+"&x="+f+"&y="+e+"&justify="+i.justify+"&lh_mult="+o+"&boxwidth="+u+"&letter_sp="+i.letter_sp+"&text="+encodeURIComponent(t)}function add_space(n,t,i){var h=certMenu,u=parseFloat(h.pagesetup.pagespacing[0]),e=jQuery(n).find("tspan").attr("class").split(" ")[0];e!="headingCert"&&e!="title-headingCert"&&e!="alt-font-headingCert"&&(u=u/3);var r=parseFloat(t)*96,f=parseFloat(i)*96,s=parseFloat(jQuery(n).find("tspan").first().attr("od")),o=parseFloat(jQuery(n).find("tspan").first().attr("th"));return jQuery(n).find("tspan").first().attr("dy",parseFloat(s+u+r).toFixed(2)),jQuery(n).find("tspan").first().attr("oh",parseFloat(o+u+r+f).toFixed(2)),jQuery(n).find("tspan").first().attr("dy0",parseFloat(s+r).toFixed(2)),jQuery(n).find("tspan").first().attr("oh0",parseFloat(o+r+f).toFixed(2)),jQuery(n).find("tspan").first().attr("s_aft",parseFloat(f).toFixed(2)),jQuery(n).find("tspan").first().attr("s_bef",parseFloat(r).toFixed(2)),y_cert+=parseInt((o+u+r+f)/96*10)/10,n}function certGroup(n,t){var i=document.createElementNS("http://www.w3.org/2000/svg","g");i.setAttributeNS(null,"id",t);jQuery("#"+t).remove();jQuery(n).append(i)}function certRect(n,t){var f=getItem("certCSS"),r=$.map(f[".page-marginsCert"].margins.split(","),parseFloat),u,i,c;r[0]+=marginAdjust;r[2]+=marginAdjust;r[1]-=marginAdjust;r[3]-=marginAdjust;t==undefined&&(t=cert_width);var e=parseFloat(jQuery("#"+n).find("text").attr("x")),o=jQuery("#"+n).find("text").attr("y"),s=parseFloat(o)*96,h=parseFloat(jQuery("#"+n).find("tspan").first().attr("oh")),l=parseFloat(jQuery("#"+n).find("tspan").first().attr("dy0")),a=parseFloat(jQuery("#"+n).find("tspan").first().attr("oh0"));t=Math.max(t,.02083);u=parseFloat(t*96).toFixed(4);i=document.createElementNS("http://www.w3.org/2000/svg","rect");i.setAttributeNS(null,"class","rrx");i.setAttributeNS(null,"x",e+"in");i.setAttributeNS(null,"y",Math.round(s*100)/100);i.setAttributeNS(null,"height",h);i.setAttributeNS(null,"width",u);i.setAttributeNS(null,"style","display:inline");jQuery("#"+n).append(i);c=parseInt($("#"+n).find("tspan").first().attr("n_col"))}function certAccent(n,t){var w=getItem("certCSS"),d=$.map(w[".page-marginsCert"].margins.split(","),parseFloat),rt,o,gt,tt,lt,it,at,u,vt,ii,h,et,ui,f,i,bt;d[0]+=marginAdjust;d[2]+=marginAdjust;d[1]-=marginAdjust;d[3]-=marginAdjust;var ot=d[3],st=d[1],fi=parseFloat(w[".styleCert"]["space-between-columns"]),ht=parseFloat(w[".styleCert"]["line-spacing"]);if(t=="Text_Standout"){if(rt=jQuery(n).find("text").last().find("tspan"),rt[0]!=null){var wt="."+jQuery(n).find("text").last().find("tspan").first().attr("class"),u=certFAccentColor(n,w,null),bt=u.split(":")[0];jQuery(rt).not(".foodsym, .foodsym1, .foodsym2").css("fill","#"+u.split(":")[0]);jQuery(rt).not(".foodsym, .foodsym1, .foodsym2").css("fill-opacity",u.split(":")[1])}}else{var a=accents[t].url,c=accents[t].type,r=accents[t]["heading-padding"],wt="."+jQuery(n).find("text").last().find("tspan").first().attr("class"),kt=jQuery(n).find("text").last().attr("text-anchor"),b=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("th")),ei=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("lh")),oi=jQuery(n).attr("id");oi.indexOf("floatitem")>-1&&(ht=1);ht!=1&&(b-=ei*(ht-1));o=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("dy"));isNaN(o)&&(o=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("lh")));var v=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("od")),li=parseFloat(jQuery(n).find("rect").attr("height")),y=parseFloat(jQuery(n).find("rect").attr("width")),p=parseFloat(jQuery(n).find("rect").attr("y")),l=0,g=0,ct=[];_.each(jQuery(n).find("text").last().find("tspan"),function(n){var t;jQuery(n).attr("class").indexOf("sym")>-1?(g+=parseFloat(jQuery(n).attr("lw"))*96/72,t=0):(t=parseFloat(jQuery(n).attr("lw"))*96/72,ct.push(t))});l=Math.round(_.max(ct)*100)/100;var dt=ct[0],nt=parseFloat(jQuery(n).find("text").last().find("tspan").first().attr("x"))*96,ut=cert_width-ot-st;if(ut*96*.9>y?(gt=2,column_width=(ut+fi)/gt,column_width=parseFloat(parseFloat(column_width).toFixed(4))):column_width=ut,tt=0,kt=="middle"?(tt=nt-dt/2-g,rect_x=nt-l/2):kt=="end"?(tt=nt-dt-g,rect_x=nt-l):(tt=nt-g,rect_x=nt),n.indexOf("fooditem")==-1&&c=="graphic_box"?(it=w[".styleCert"].type,lt=(cert_width-ot-st)*96,(it!="center"||it=="center"&&Math.round(lt/y*100)!=100)&&(l=y,g=0,rect_x=parseFloat(jQuery(n).find("rect").attr("x"))*96)):n.indexOf("fooditem")==-1&&(c=="graphic_divider"||c=="font_divider")&&(it=w[".styleCert"].type,l=y,g=0,rect_x=parseFloat(jQuery(n).find("rect").attr("x"))*96,it=="center"&&Math.round(lt/y*100)!=100&&(l=.75*y,rect_x+=.125*y)),at=parseFloat(w[wt]["font-size"]),u=certFAccentColor(n,w,wt),acc_color=global_acc_color,removeAccent(n),c.indexOf("box")>-1){c.indexOf("graphic")>-1?(vt=accents[t]["stroke-width"],u+=vt+":"):u+="0:";var s=rect_x-r[3],h=p+o-v-r[0],f=l+(r[1]+r[3]),e=b+(r[0]+r[2]);u+=f+":"+e+":";a.indexOf("Oval_3")>-1&&(s-=f*(Math.sqrt(2)-1)/2,h-=e*(Math.sqrt(2)-1)/2,f*=Math.sqrt(2),e*=Math.sqrt(2));i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),s,h,f,e);jQuery(i).attr("alt-text",t);jQuery(i).attr("class","acc_elem");jQuery(n).prepend(i)}else if(c.indexOf("graphic_divider")>-1){var s=rect_x,ni=accents[t]["img-size"],e=ni[1],vt=accents[t]["stroke-width"],f=l;u+=vt+":0:"+e+":";h=r[0]>0?p+o-v-r[0]-e:p+o-v+b+r[2];ni[1]==1&&c=="graphic_divider"&&(e=".0111in");i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),s,h,f,e);jQuery(i).attr("class","acc_elem");jQuery(i).attr("alt-text",t);jQuery(n).prepend(i)}else if(c.indexOf("font_divider")>-1){var k=accents[t]["img-size"],si=accents[t].character,f=l,e=k[1]*at+2,s=parseInt(rect_x);h=r[0]>0?p+o-v-r[0]-e:p+o-v+b+r[2];u+=si+":"+f+":"+at+":";i=imgSVG("https://"+window.location.host+"/svgdot/"+base64.encode(u+"/SVG/"+a),s,h,f,e);jQuery(i).attr("class","acc_elem");jQuery(i).attr("alt-text",t);jQuery(n).prepend(i)}else if(c.indexOf("svg_divider")>-1){var hi=parseFloat(jQuery(n).find("rect").attr("x"))*96,k=accents[t]["img-size"],ti=parseInt($(n).find("rect").attr("width"))/96;ii=ti<ut*.9?Math.min(ti,k[0]):Math.min(cert_width-ot-st,k[0]);var f=ii*96,s=parseInt(hi)+Math.abs((y-f)/2),e=f/k[0]*k[1];h=r[0]>0?p+o-v-r[0]-e:p+o-v+b+r[2];i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),s,h,f,e);jQuery(i).attr("class","acc_elem");jQuery(i).attr("alt-text",t);jQuery(n).prepend(i)}else if(c.indexOf("svg_ornament")>-1){var k=accents[t]["img-size"],ri=parseFloat(accents[t]["scale-factor"]),ft=b*ri,yt=ft*k[0]/k[1];e=ft+(r[0]+r[2]);f=yt+r[3];var s=Math.min(rect_x,tt)-f,h=p+o-v+(1-ri)/2*b-r[0],i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),s,h,yt,ft);jQuery(i).attr("class","acc_elem");jQuery(i).attr("alt-text",t);jQuery(n).prepend(i);s=rect_x+l+r[1];et=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a.replace(/ornaments/,"ornaments/mirrors/")),s,h,yt,ft);jQuery(et).attr("class","acc_elem");jQuery(et).attr("alt-text",t);jQuery(n).prepend(et)}else if(c.indexOf("graphic_ornament")>-1){var h=p+o-v-r[0]+b/2,ci=accents[t]["img-size"],e=ci[1],pt=parseFloat(jQuery(n).find("rect").attr("x"))*96,s=Math.min(rect_x,tt)-r[3],f=s-pt;f>0&&(i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),pt,h,f,e),jQuery(i).attr("class","acc_elem"),jQuery(i).attr("alt-text",t),jQuery(n).prepend(i));ui=pt+y;s=rect_x+l+r[1];f=ui-s;f>0&&(i=imgSVG("https://"+window.location.host+"/svgacc/"+base64.encode(u+"/SVG/"+a),s,h,f,e),jQuery(i).attr("class","acc_elem"),jQuery(i).attr("alt-text",t),jQuery(n).prepend(i))}bt=acc_color==""?"D2B78A":acc_color;t=="Box_Solid_Inverted"&&invertAccent(n,bt)}}function pagespacing_cert(n){var e=getItem("certCSS"),t=$.map(e[".page-marginsCert"].margins.split(","),parseFloat),o;t[0]+=marginAdjust;t[2]+=marginAdjust;t[1]-=marginAdjust;t[3]-=marginAdjust;var i=t[0]*96,r=t[3],u=cert_width-t[1]-t[3],p=t[0],s=t[1],h=t[2],w=t[3],c=certMenu;n==undefined&&(n=0);var l=certMenu.food_item.order,a=cert_height-h,v=a*96,y=cert_width-s,b=y*96,k=c.total_columns,f=parseFloat(e[".styleCert"]["space-between-columns"]);cert_alt_margin=0;o=cert_title_span[0];jQuery.each(l,function(e,s){var g=e>o?(u-f)/2:u,y=parseFloat(jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("dy0")),p=parseFloat(jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("oh0")),c,l,a;n=="reset"&&(n=0);c=jQuery("#certitem_"+s).find("text").last().find("tspan").attr("class")=="small-headingCert"?parseFloat(n)/3:parseFloat(n);var w=y+c,h=p+c,nt=parseFloat(jQuery("#certitem_"+s).find("rect").first().attr("y")),b=parseFloat(jQuery("#certitem_"+s).find("rect").first().attr("x")),k=parseFloat(jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("s_aft")),d=jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("n_col");i+h-k>v&&(i=cert_title_span()[1],r=parseFloat(((cert_width+f)/2).toFixed(6)));d=="1"&&(i=cert_title_span()[1],r=parseFloat((t[3]+(u+f)/2).toFixed(6)));r!=b&&shiftColumn("#certitem_"+s,r);jQuery("#certitem_"+s).find("text").last().attr("y",i/96+"in");jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("dy",w);jQuery("#certitem_"+s).find("text").last().find("tspan").first().attr("oh",h);jQuery("#certitem_"+s).find("rect").first().attr("y",i.toFixed(2));jQuery("#certitem_"+s).find("rect").first().attr("height",h);i+=parseFloat(h);jQuery("#certitem_"+s).find("text").length>1&&certShadow(jQuery("#certitem_"+s));l=jQuery("#certitem_"+s+" .acc_elem").first().attr("alt-text");a=jQuery("#certitem_"+s+" .foodImg_elem").first().attr("xlink:href");a!=undefined;l!=undefined&&certAccent("#certitem_"+s,l)});jQuery("#certPreview g").show()}function cert_title_span(){var t=certMenu,u=_.pluck(t.head_item.header,"head_id"),n="",i,r;return _.every(t.food_item.order,function(i){var f=_.indexOf(u,i),r=t.head_item.header[f].type;return r=="title"||r=="small"?(n=i,!0):!1}),n!=""?(i=parseFloat(jQuery("#certitem_"+n).find("rect").first().attr("y"))||0,r=parseFloat(jQuery("#certitem_"+n).find("rect").first().attr("height"))||0,cert_alt_margin=parseInt((i+r)*10)/10,[_.indexOf(t.food_item.order,n),cert_alt_margin]):[-1,0]}function cert_tidyup(){var n=certMenu.food_item.order.length,t=jQuery("#certPreview g").length;n==t&&(pagespacing_cert(),jQuery("#certPreview g rect").remove(),makeCertActive(),makeOverlineInactive());loadCertPaperColor()}function certFAccentColor(n,t,i){var r,u;if(n.indexOf("certitem")>-1)r=t[i.replace(/Cert/,"")+"-accentCert"].color,u=t[i.replace(/Cert/,"")+"-accentCert"]["fill-opacity"],r=r=="none"?"":r.substr(1,6);else var f=certMenu,o=f.foot_item.foot_tweaks.split(";"),i="."+f.foot_item.type+"-heading",e=tinycolor(o[5]),r=e.toHexString().slice(1),u=e.getAlpha();return""+(r+":"+u+":")}function certBackground(){var i=jQuery("#mp-cert-background").val(),n,r,t;jQuery("#background-cert").remove();jQuery("#background-cert-image").remove();i=="none"||(i=="paper"?(n=document.createElementNS("http://www.w3.org/2000/svg","rect"),r=jQuery("#cert-paper-color").spectrum("get").toHexString("hex6"),n.setAttributeNS(null,"fill",r),n.setAttributeNS(null,"x","0"),n.setAttributeNS(null,"y","0"),n.setAttributeNS(null,"height",cert_height+"in"),n.setAttributeNS(null,"width",cert_width+"in"),n.setAttributeNS(null,"id","background-cert"),jQuery("#certBackground").append(n)):(t=imgSVG("https://"+window.location.host+"/SVG/backgrounds/"+i,0,0,cert_width*96,cert_height*96),jQuery(t).attr("id","background-cert-image"),t.setAttributeNS(null,"preserveAspectRatio","xMinYMin slice"),jQuery("#certBackground").append(t),jQuery("#certBackground").attr("fill","none"),t.setAttributeNS(null,"opacity",1)))}function certBorder(){var n,t,r;if(jQuery("#certBorder").find("image").remove(),n=getItem("certCSS"),t=n[".borderCert"].image,t=="none")return!0;var i=parseFloat(n[".borderCert"]["border-margin"]),u=i*96,f=cert_width-2*i,e=cert_height-2*i,o=n[".borderCert"].color=="none"?"":n[".borderCert"].color.replace("#",""),s=n[".borderCert"].color=="none"?"":n[".borderCert"]["fill-opacity"];bor_url=base64.encode([o,s,"SVG/borders/landscape/"+t].join(":"));r=imgSVG("https://"+window.location.host+"/svgimg/"+bor_url,u,u,f*96,e*96);jQuery("#certBorder").append(r);r.setAttributeNS(null,"opacity",1)}function certShadow(n){var u=getItem("certCSS"),h=jQuery(n).find("text").length,t,i,r;h>1&&jQuery(n).find("text").first().remove();var f=jQuery(n).find("tspan").attr("class"),e=parseInt(u["."+f]["font-size"]),o=u["."+f]["itext-shadow"],s="#d1ced1";o!="none"&&(s=o.split(" ")[3]);t=jQuery(n).find("text").clone();jQuery(t).find(".foodsym").remove();jQuery(t).find("tspan").css("fill",s);jQuery(t).find("tspan").css("fill-opacity",1);jQuery(t).find("tspan").css("stroke-opacity",1);jQuery(t).find("tspan").css("stroke","none");i=parseFloat(jQuery(t).attr("y"));e>34?(r=2/96,jQuery(t).attr("y",i+3/96+"in")):e>14?(r=2/96,jQuery(t).attr("y",i+2/96+"in")):(r=1/96,jQuery(t).attr("y",i+1/96+"in"));jQuery.each(jQuery(t).find("tspan"),function(n,t){var i=parseFloat(jQuery(t).attr("x"));jQuery(t).attr("x",i+r+"in");jQuery(t).attr("class",jQuery(t).attr("class")+" mp_shadow")});jQuery(n).prepend(t)}function certPics(n){var i=getItem("certCSS"),t=$.map(i[".page-marginsCert"].margins.split(","),parseFloat);if(t[0]+=marginAdjust,t[2]+=marginAdjust,t[1]-=marginAdjust,t[3]-=marginAdjust,jQuery("#certImage").find(".certImg_elem").remove(),n=n||jQuery("#myUploadPreviewCEUPLOAD img").attr("src")||jQuery("#myUploadPreviewCE img").attr("src")||"bootstrap/img/68x51b.png",n=="bootstrap/img/68x51b.png")return!1;var u=(parseFloat(i[".styleCert"]["desc-left-indent"])-marginAdjust)*96,f=(parseFloat(i[".styleCert"]["extras-left-indent"])+marginAdjust)*96,r=imgSVG(n,u,f,certPicWidth,certPicHt,"attachCertPhotoLeft");jQuery(r).attr("class","certImg_elem");jQuery("#certImage").prepend(r)}function saveCertMenu(){certMenu.myStyle=$("#mp-cert-style").val();certMenu.cert_background=jQuery("#mp-cert-background").val();certMenu.cert_spectrum=jQuery("#cert-paper-color").spectrum("get").toHexString("hex6");certMenu.cert_logo.image=jQuery("#myUploadPreviewCE img").attr("src");certMenu.cert_logo.idx=jQuery("#myUploadPreviewCE img").attr("class")||0;certMenu.head_item.header[0].heading=encodeURIComponent(jQuery("#mp-cert-title").val());certMenu.head_item.header[7].heading=encodeURIComponent(jQuery("#mp-cert-value").val());certMenu.head_item.header[4].heading=encodeURIComponent(jQuery("#mp-cert-bizname").val());certMenu.head_item.header[5].heading=encodeURIComponent(jQuery("#mp-cert-bizaddress1").val());certMenu.head_item.header[6].heading=encodeURIComponent(jQuery("#mp-cert-bizaddress2").val());certMenu.foot_item.footer=encodeURIComponent(jQuery("#mp-cert-fineprint").val());certMenu.pagesetup.paperformat=$("#mp-cert-pagesize").val()}function loadCertMenu(){jQuery("#mp-cert-background").val(certMenu.cert_background);jQuery("#cert-paper-color").spectrum("set",certMenu.cert_spectrum);jQuery("#myUploadPreviewCE img").attr("src",certMenu.cert_logo.image);jQuery("#myUploadPreviewCE img").attr("class",certMenu.cert_logo.idx);jQuery("#mp-cert-title").val(decodeURIComponent(certMenu.head_item.header[0].heading));jQuery("#mp-cert-value").val(decodeURIComponent(certMenu.head_item.header[7].heading));jQuery("#mp-cert-bizname").val(decodeURIComponent(certMenu.head_item.header[4].heading));jQuery("#mp-cert-bizaddress1").val(decodeURIComponent(certMenu.head_item.header[5].heading));jQuery("#mp-cert-bizaddress2").val(decodeURIComponent(certMenu.head_item.header[6].heading));jQuery("#mp-cert-fineprint").val(decodeURIComponent(certMenu.foot_item.footer));$("#mp-cert-pagesize").val(certMenu.pagesetup.paperformat);certMenu.pagesetup.paperformat.match("A4")?setPaperSize("A4"):setPaperSize("Letter");$("#myUploadPreviewCE img").attr("src")!="bootstrap/img/68x51b.png"?($("#jansyUploadWellCE").hide(),$("#jansyRemoveWellCE").show()):($("#jansyRemoveWellCE").hide(),$("#jansyUploadWellCE").show())}function xmltopdf_gc(){override=getOverrideSS();var n=document.getElementById("imp11-cert"),t=$("#mp-cert-style").val(),i=xmltostring(n),r=$("#mp-cert-pagesize").val(),u=cert_width+"in "+cert_height+"in",f=i.replace("@page {size: US-Letter}","@page {size: "+u+"};"),e=f.replace(/^(<svg.*height=\")(\d+)/im,"$1100%"),o=e.replace(/^(<svg.*width=\")(\d+)/im,"$1100%"),s=o.replace(/ href=/gm," xlink:href="),h=s.replace(/@page/gm,override+"\n@page");jQuery("#genpdf_mySS_gc").val(t);jQuery("#genpdf_mySVG_gc").val(h);jQuery("#genpdf_mySVGWidth_gc").val(cert_width);jQuery("#genpdf_mySVGHeight_gc").val(cert_height);jQuery("#genpdf_mySVGPaper_gc").val(r);jQuery("#genpdf_myPDFMenuTitle_gc").val("iMenuPro Gift Certificate");jQuery("#genpdf-gc").submit()}function makeCertActive(){$("#certPreview g").on("click",function(n){n.preventDefault();var t=n.currentTarget.id;switch(!0){case t.match("certitem_h0")!=null:$("#mp-cert-title").focus();doAlert(300,null,3e3,!0);break;case t.match("certitem_h4")!=null:$("#mp-cert-bizname").focus();doAlert(300,null,3e3,!0);break;case t.match("certitem_h5")!=null:$("#mp-cert-bizaddress1").focus();doAlert(300,null,3e3,!0);break;case t.match("certitem_h6")!=null:$("#mp-cert-bizaddress2").focus();doAlert(300,null,3e3,!0);break;case t.match("certitem_h7")!=null:$("#mp-cert-value").focus();doAlert(300,null,3e3,!0)}})}function makeCertInactive(){$("#certPreview g").off("click",null)}function makeOverlineInactive(){$("#certitem_h1").css("cursor","none").css("pointer-events","none");$("#certitem_h2").css("cursor","none").css("pointer-events","none");$("#certitem_h3").css("cursor","none").css("pointer-events","none")}function certUploadImage(){var n=jQuery("#myUploadPreviewCEUPLOAD img").attr("src");if(n!=undefined&&n.match("data:")&&n.length<4199999){doAlert(106,"",3e3,!0);var i=jQuery("#file-imguploadCE").val().replace(/^.*\\|\.[^.]*$/g,""),r=jQuery("#access_token").val(),t=newXMLHttpRequest(),u="access_token="+r+"&filename="+encodeURIComponent(i)+"&myimage="+n;t.open("POST","/tools/token-S3upload",!0);t.setRequestHeader("Content-type","application/x-www-form-urlencoded");t.send(u);t.onreadystatechange=function(){if(t.readyState==4&&t.status==200){var n=JSON.parse(t.responseText);jQuery("#mp-acct-images").text(n.count);n.error?doAlert(n.error,"danger",8e3,!0):(jQuery("#myUploadPreviewCE img").attr("src",n.success),jQuery("#myUploadPreviewCE img").attr("class",n.idx),certMenu.cert_logo.image=n.success,certMenu.cert_logo.idx=n.idx,doAlert(6,null,1e3,!0),jQuery("#mp-acct-images").text(n.count),importImageData(),jQuery("#jansy-img-uploadCE").fileupload("reset"))}}}else{if(n!=""&&n!=undefined)return n.length>4194499&&doAlert(104,"danger",7e3,!0),!1;$("#myUploadPreviewCEUPLOAD").text()!=""&&doAlert(322,null,6e3,!0);jQuery("#jansy-img-uploadCE").fileupload("reset")}return!0}function certMenuTranslate(){var n=settings.imenupro.userlang;if((certTranslate[n]==undefined||n==undefined||n=="")&&(n="en_US"),certTranslate[n]!=undefined){var t="                                                                                                                                    ",i=decodeURIComponent(certTranslate[n].h1a),r=decodeURIComponent(certTranslate[n].h1b),u=t.length-i.length-r.length;certMenu.head_item.header[1].heading=i+t.substr(0,u)+r;certMenu.head_item.header[2].heading=decodeURIComponent(certTranslate[n].h2);certMenu.head_item.header[3].heading=decodeURIComponent(certTranslate[n].h3)}}var cert_alt_margin=0,cert_height=3.666,cert_width=8.5,y_cert=0,print_isFocus=!1,changeStyle_background=!1,marginAdjust=0,waitingforstyle=!1,certTranslate={en_US:{h1a:"presented%20to",h1b:"issue%20date",h2:"authorization",h3:"from"},en_CA:{h1a:"presented%20to",h1b:"issue%20date",h2:"authorisation",h3:"from"},en_GB:{h1a:"presented%20to",h1b:"issue%20date",h2:"authorisation",h3:"from"},cs:{h1a:"předloženy",h1b:"problémové%20rande",h2:"povolení",h3:"od"},da_DK:{h1a:"forelagt",h1b:"udstedelsesdato",h2:"tilladelse",h3:"fra"},nl:{h1a:"voorgelegd",h1b:"uitgiftedatum",h2:"machtiging",h3:"met%20ingang%20van"},fi_FI:{h1a:"esiteltiin",h1b:"Julkaisuaika",h2:"lupa",h3:"alkaen"},fr:{h1a:"présenté%20à",h1b:"date%20d'émission",h2:"autorisation",h3:"à%20partir%20de"},de_DE:{h1a:"vorgestellt",h1b:"ausgabedatum",h2:"Genehmigung",h3:"von"},el_GR:{h1a:"παρουσιάζονται%20σε",h1b:"ημερομηνία%20έκδοσης",h2:"εξουσιοδότηση",h3:"από%20την"},hu_HU:{h1a:"mutatni",h1b:"kiadás%20dátuma",h2:"engedély",h3:"-tól"},it_IT:{h1a:"presentato%20a",h1b:"data%20di%20rilascio",h2:"autorizzazione",h3:"a%20partire"},pl:{h1a:"przedstawiane",h1b:"data%20wydania",h2:"autoryzacja",h3:"według"},ru_RU:{h1a:"представлены",h1b:"дата%20выпуска",h2:"разрешение",h3:"от"},es:{h1a:"presentado%20a",h1b:"fecha%20de%20expedición",h2:"autorización",h3:"a%20partir%20de"},sv_SE:{h1a:"presenteras%20för",h1b:"utgivningsdatum",h2:"tillstånd",h3:"från"},de_CH:{h1a:"vorgestellt",h1b:"ausgabedatum",h2:"Genehmigung",h3:"von"},uk_UA:{h1a:"представлені",h1b:"дата%20випуску",h2:"дозвіл",h3:"від"}},certMenu={total_columns:"2",menuID:"cert",rect_data:{},cert_logo:{image:"bootstrap/img/68x51b.png",idx:"none"},cert_background:"none",cert_spectrum:"#fff4dc",food_item:{order:["h0","h1","h3","h2","h4","h5","h6","h7"],"default":"none;none;;0;0;1;(none);rgb(210,180,138);;Style;;;;"},head_item:{header:[{head_id:"h0",heading:"Gift%20Certificate",type:"title"},{head_id:"h1",heading:"presented%20to%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20issue%20date",type:"small"},{head_id:"h2",heading:"authorization",type:"small"},{head_id:"h3",heading:"from",type:"small"},{head_id:"h4",heading:"Your%20Business%20Name",type:"normal"},{head_id:"h5",heading:"",type:"small"},{head_id:"h6",heading:"",type:"small"},{head_id:"h7",heading:"amount%20%24",type:"alt-font"}],"default":"none;none;0;0;1;1;(style);(style);rgb(210,180,138);Style;;",h0:"none;none;0;;1;0;(style);(style);;Style;;",h1:"none;none;0;;1;1;left;(style);;Style;;",h2:"none;none;0;;1;1;left;(style);;Style;;",h3:"none;none;0;;1;1;left;(style);;Style;;",h4:"none;none;0;;1;0;(style);(style);;Style;;",h5:"none;none;0;;1;0;(style);(none);;Custom;0in;0in",h6:"none;none;0;;1;0;(style);(none);;Custom;0in;0in",h7:"none;none;1;;1;0;(style);(style);;Style;;"},foot_item:{footer:"",type:"small",foot_tweaks:"none;none;;1;(none);rgb(210, 180, 138);center;0in","default":"none;none;;1;(none);rgb(210,180,138);center;0.25",onmenu:1},pagesetup:{orientation:0,pagespacing:[0,0],pagemarker:[-1,-1],margin:1,papersize:"Custom",customheight:3.66,customwidth:8.5,paperformat:"US-Letter-3"},myStyle:"Brunch_Sunnyside.css"},ESCinput,print_cert,print_cert_footer;jQuery("#jansy-img-uploadCE").on("change.bs.fileinput",function(){certPics()});jQuery("#dialog-giftcert-ok").on("click",function(n){(n.preventDefault(),certUploadImage())&&($("#myGiftCertificateCreator").modal("hide"),saveCertMenu(),releaseStyleDisplay(),storeCertiticate())});jQuery("#mp-cert-style").on("change",function(n){if(n.preventDefault(),!waitingforstyle){var t=$("#mp-cert-style").val();changeStyle_background=!0;t!=null&&t!=undefined&&(changeCertStyle(t),waitingforstyle=!0,setTimeout(function(){releaseStyleDisplay()},300))}});ESCinput=!1;jQuery("#mp-cert-title, #mp-cert-value, #mp-cert-bizname, #mp-cert-bizaddress1, #mp-cert-bizaddress2, #mp-cert-fineprint").on("change",function(){ESCinput||(print_isFocus==!1,miniEngine())});jQuery(".cert-field-one,.cert-field-two,.cert-field-three").keyup(function(){event.which==27&&(ESCinput=!0);print_isFocus="miniEngine"});jQuery("#mp-print-cert-btn").hover(function(){print_isFocus=="miniEngine"&&(print_isFocus="doneEngine",miniEngine())});jQuery("#mp-cert-pagesize").on("change",function(){var n=jQuery("#mp-cert-pagesize").val();n.match("A4")&&marginAdjust==0?(setPaperSize("A4"),miniEngine()):n.match("Letter")&&marginAdjust!=0&&(setPaperSize("Letter"),miniEngine())});jQuery("#mp-create-giftcert").on("click",function(){releaseStyleDisplay();setItem("certMenuRestore",certMenu);ESCinput=!1;changeStyle_background=!1;$("#mp-cert-style").val(certMenu.myStyle);changeCertStyle(certMenu.myStyle);loadCertMenu()});print_cert=function(n,t,i){var u=[],c,p,a,v,ut,w;u.column_width=t?t:cert_width;u.head_id=n;u.myColSpan=i;u.boxline1=0;var s=certMenu,f=getItem("certCSS"),b=_.find(s.head_item.header,function(t){return t.head_id==n}),y=_.indexOf(s.head_item.header,b),h=decodeURIComponent(s.head_item.header[y].heading),e=s.head_item.header[y].type;e=e=="normal"?"headingCert":e+"-headingCert";c=s.head_item[n+""];c||(c=s.head_item["default"]);h_tweaks=c.split(";");h==""&&(h=" ");var r={},k="."+e,ot=f[".styleCert"].type,st=f[".price-optionsCert"].layout,o=f[k],d=o["font-family"].split(",");r.font_family=d[0].replace(/(\"|\')/gm,"").replace(/ /gm,"_");r.font_size=parseInt(o["font-size"]);r.font_style=o["font-style"];r.font_weight=o["font-weight"];r.s_before=parseFloat(o["space-before"]);r.s_after=parseFloat(o["space-after"]);r.justify=o.justification;r.indent=parseFloat(o.indent);r.dr_indent=parseFloat(f[".styleCert"]["desc-right-indent"]);r.letter_sp=parseFloat(o["letter-spacing"])*72/96;r.icaps=o.icaps=="yes"?1:0;var g=f["."+e]["itext-shadow"],nt=parseFloat(f["."+e].indent),l=parseFloat(f[".styleCert"]["desc-right-indent"]);f["."+e].justification=="middle"?(r.indent=0,r.dr_indent=0):f["."+e].justification=="right"&&(r.indent=l,r.dr_indent=nt);h_tweaks[6]=="center"?(r.indent=0,r.dr_indent=0,r.justify="middle"):h_tweaks[6]=="left"?(r.indent=0,r.dr_indent=l,r.justify="left"):h_tweaks[6]=="right"&&(r.indent=l,r.dr_indent=0,r.justify="right");p=h_tweaks[7]=="(style)"?f["."+e.replace(/Cert/,"")+"-accentCert"].name:h_tweaks[7]!="(none)"?h_tweaks[7]:"none";var tt=h_tweaks[5]=="1"?0:1,it=h_tweaks[0]=="none"?"":decodeURIComponent(h_tweaks[0]),rt=h_tweaks[1]=="none"?"":decodeURIComponent(h_tweaks[1]);if(u.usePics=0,u.head_class=e,u.head_text=h,u.css_shadow=g,u.head_accent=p,u.UseLF=tt,u.mySymbol1=it,u.mySymbol2=rt,u.myBinNo="",u.myStyle=r,u.myCSS=f,u.lineheight=f[".styleCert"]["line-spacing"],h_tweaks[9]=="Style"?(a=parseFloat(f["."+e]["space-before"]),v=parseFloat(f["."+e]["space-after"])):(a=parseFloat(h_tweaks[10]),v=parseFloat(h_tweaks[11])),ut=parseInt(h_tweaks[2]),u.space_before=a,u.space_after=v,u.n_col=h_tweaks[2],h){function ft(n,t){n.myURL=getCertUrl(n.head_class,n.head_text,n.myStyle,n);n.store="heading";async_library.getXML(n,t)}function et(n,t){(n.mySymbol1||n.mySymbol2)&&(n.myURL=joinSymbol(n.heading,n.mySymbol1,n.mySymbol2,"",n.head_class,n.styleType,n),n.store="symbol");async_library.getXML(n,t)}w=async.compose(et,ft);w(u,function(n,t){printCert_callback(t)})}};print_cert_footer=function(n){function p(n,i){s&&(n.myURL=getCertUrl(c+"footer",s,t,n),n.store="footer");async_library.getXML(n,i)}function w(n,t){var i=n.footer;i&&(n.mySymbol1||n.mySymbol2)&&(n.myURL=joinSymbol(i,n.mySymbol1,n.mySymbol2,"",n.foot_class,"",n),n.store="symbol");async_library.getXML(n,t)}function b(n,t){var u=n.footer,o=n.myCSS,r=n.f_tweaks,e=n.column_width,f,i;u&&(f=n.yPos+parseFloat(r[7]),i="cfooter",certGroup("#certFooter",i),jQuery("#"+i).append(u),jQuery("#cfooter").find("text").attr("y",f+"in"),certRect(i,e),shiftColumn("#"+i,n.left_cmargin),r[4]!="(none)"&&HeadFloatFootAccent("#"+i,r[4]),jQuery("#cfooter rect").remove());t(null,n)}var e=getItem("certCSS"),u=$.map(e[".page-marginsCert"].margins.split(","),parseFloat),l;u[0]+=marginAdjust;u[2]+=marginAdjust;u[1]-=marginAdjust;u[3]-=marginAdjust;var o=certMenu,i=[];jQuery("#cfooter").remove();i.column_width=cert_width-u[1]-u[3];i.left_cmargin=u[3];i.yPos=cert_height-u[2]+marginAdjust;i.usePics=0;i.boxline1=0;i.print_cb=n;var s=decodeURIComponent(o.foot_item.footer),a=o.foot_item.type,v=o.foot_item.foot_tweaks,r=v.split(";"),h=parseFloat(e[".styleCert"]["desc-right-indent"]),c=a+"-headingCert";i.foot_class=c;i.mySymbol1=r[0]=="none"?"":decodeURIComponent(r[0]);i.mySymbol2=r[1]=="none"?"":decodeURIComponent(r[1]);i.myBinNo="";var t={},k=e[".styleCert"].type,f=e["."+c],y=f["font-family"].split(",");t.font_family=y[0].replace(/(\"|\')/gm,"").replace(/ /gm,"_");t.font_size=parseInt(f["font-size"]);t.font_style=f["font-style"];t.font_weight=f["font-weight"];t.s_before=0;t.s_after=0;t.justify=f.justification;t.indent=0;t.dr_indent=h;t.letter_sp=parseFloat(f["letter-spacing"])*72/96;t.icaps=f.icaps=="yes"?1:0;r[6]=="center"?(t.indent=0,t.dr_indent=0,t.justify="middle"):r[6]=="left"?(t.indent=0,t.dr_indent=h,t.justify="left"):r[6]=="right"&&(t.indent=h,t.dr_indent=0,t.justify="right");i.UseLF=r[3]=="1"?0:1;i.f_text=s;i.f_tweaks=r;i.myStyle=t;i.myCSS=e;l=async.compose(b,w,p);l(i,function(n,t){if(t.print_cb!=undefined){var i=t.print_cb;i(n,"footer done")}})}
//# sourceMappingURL=mp-cert.map