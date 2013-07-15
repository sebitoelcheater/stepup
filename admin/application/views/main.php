<!-- Manejo de alertas -->
<style>/*
 * Copyright (c) 2013 Thibaut Courouble
 *
 * This code is the result of hours of hard work.
 * Please don't copy unless you own a license.
 *
 * You can purchase a license at:
 * http://www.cssflow.com/ui-kits/colorful
 */

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}input,textarea,select,button,label{margin:0;line-height:normal;font-family:inherit;font-size:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}::-moz-focus-inner{padding:0 !important;border:0 !important}body{font:12px/21px "Lucida Grande",Verdana,Arial,sans-serif;color:#404040;background:#fafaf4}a{color:#007fcc;text-decoration:none}a:hover{color:#0072ba;text-decoration:underline}strong{font-weight:bold}input[type=text],input[type=email],input[type=url],input[type=search],textarea{display:inline-block;vertical-align:top;padding:0 7px;height:29px;color:#666;background:white;border:1px solid #c6c6c6;border-top-color:#bbb;border-radius:3px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4);box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4)}input[type=text]:focus,input[type=email]:focus,input[type=url]:focus,input[type=search]:focus,textarea:focus{color:#404040;background:white;border-color:#51b5fb;outline:none;-webkit-box-shadow:inset 0 0 2px #51b5fb,0 0 3px #51b5fb;box-shadow:inset 0 0 2px #51b5fb,0 0 3px #51b5fb}textarea{padding:4px 7px;height:67px;line-height:19px;overflow:auto;resize:none}:-moz-placeholder{color:#aaa !important}::-moz-placeholder{color:#aaa !important;opacity:1}::-webkit-input-placeholder{color:#aaa}:-ms-input-placeholder{color:#aaa}.lt-ie9 input{line-height:27px}.search{position:relative}.search>input{width:100%;height:29px;padding:0 13px 0 30px;border-radius:15px}.search:before{content:'';position:absolute;top:8px;left:10px;width:6px;height:6px;border:2px solid #aaa;border-radius:8px}.search:after{content:'';position:absolute;top:18px;left:17px;width:6px;height:2px;background:#aaa;border-radius:1px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);-webkit-box-shadow:-1px 0 #aaa;box-shadow:-1px 0 #aaa}input[type=search]{-webkit-appearance:textfield}::-webkit-search-decoration,::-webkit-search-cancel-button{-webkit-appearance:none}.lt-ie9 .search:before,.lt-ie9 .search:after{content:none}.lt-ie9 .search>input{padding:0 7px}.option{display:inline-block;vertical-align:top;position:relative;width:16px;height:16px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.option>input{position:absolute;left:0;width:inherit;height:inherit;opacity:0}.checkbox,.radio{display:block;height:100%;background:#f8f8f8;border:1px solid #c6c6c6;border-top-color:#bbb;border-radius:2px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4);box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4)}.checkbox:before,.radio:before{content:'';display:none}input:focus+.checkbox,input:focus+.radio,input.focus+.checkbox,input.focus+.radio{border-color:#51b5fb;-webkit-box-shadow:inset 0 0 2px rgba(81,181,251,0.8),0 0 3px rgba(81,181,251,0.8);box-shadow:inset 0 0 2px rgba(81,181,251,0.8),0 0 3px rgba(81,181,251,0.8)}input:checked+.checkbox,input:checked+.radio{background:white}input:checked+.checkbox:before,input:checked+.radio:before{display:block}.checkbox:before{position:absolute;top:4px;left:3px;width:7px;height:3px;border:solid #9b9795;border-width:0 0 3px 3px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.radio{border-radius:8px}.radio:before{margin:4px;width:6px;height:6px;background:#9b9795;border-radius:3px}.lt-ie9 .option>input{position:static;padding:0}.lt-ie9 .checkbox,.lt-ie9 .radio{display:none}.select{display:inline-block;vertical-align:top;position:relative;overflow:hidden;width:200px;height:27px;background:#f4f4f4;border:1px solid #ccc;border-bottom-color:#c4c4c4;border-radius:3px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;background-image:-webkit-linear-gradient(top, #fcfcfc,#eee);background-image:-moz-linear-gradient(top, #fcfcfc,#eee);background-image:-o-linear-gradient(top, #fcfcfc,#eee);background-image:linear-gradient(to bottom, #fcfcfc,#eee);-webkit-box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.4),0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.4),0 1px 1px rgba(0,0,0,0.05)}.select>select{display:block;position:relative;width:112%;height:25px;line-height:17px;margin:0;padding:4px;padding-left:9px;color:#62717a;text-shadow:0 1px white;background:transparent;background:rgba(0,0,0,0);border:0;-webkit-appearance:none}.select>select:focus{z-index:2;width:100%;outline:1px solid #51b5fb;outline-offset:-1px}.select>select::-ms-expand{display:none}.select option{text-shadow:none}.select:before,.select:after{content:'';position:absolute;z-index:1;top:8px;right:10px;width:0;height:0;border:3px dashed;border-color:#aaa transparent;border-color:rgba(0,0,0,0.4) transparent;pointer-events:none}.select:before{border-bottom-style:solid;border-top:none}.select:after{margin-top:6px;border-top-style:solid;border-bottom:none}.switch{display:inline-block;vertical-align:top;position:relative;width:54px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.switch>label{display:block;position:relative;height:21px;line-height:19px;font-size:10px;color:#999;text-align:center;text-transform:uppercase;text-shadow:0 1px white;background:white;border:1px solid;border-color:#bbb #c8c8c8 #cbcbcb;border-radius:11px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),inset 0 9px #f6f6f6;box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),inset 0 9px #f6f6f6;-webkit-transition:padding-left 0.15s ease-out;-moz-transition:padding-left 0.15s ease-out;-o-transition:padding-left 0.15s ease-out;transition:padding-left 0.15s ease-out}.switch>label:before{content:'';display:block;width:19px;height:19px;background:#f6f6f6;border-radius:11px;background-image:-webkit-linear-gradient(top, #e8e8e8,#fff);background-image:-moz-linear-gradient(top, #e8e8e8,#fff);background-image:-o-linear-gradient(top, #e8e8e8,#fff);background-image:linear-gradient(to bottom, #e8e8e8,#fff);-webkit-box-shadow:inset 0 0 0 1px rgba(255,255,255,0.4),1px 0 1px rgba(0,0,0,0.3);box-shadow:inset 0 0 0 1px rgba(255,255,255,0.4),1px 0 1px rgba(0,0,0,0.3)}.switch>label:after{content:attr(data-off);position:absolute;top:0;right:0;width:33px}.switch>input{position:absolute;z-index:0;top:2px;left:2px;width:50px;height:17px;padding:0;opacity:0;-webkit-appearance:none}.switch>input:focus{opacity:1;outline:1px solid #51b5fb;outline-offset:3px}.switch>input:checked+label{padding-left:33px;color:white;text-shadow:0 -1px rgba(0,0,0,0.2);background:#33a0e8;border-color:#1867a8 #197ccc #1c81d2;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.08),inset 0 9px #138bf2;box-shadow:inset 0 1px 1px rgba(0,0,0,0.08),inset 0 9px #138bf2}.switch>input:checked+label:before{-webkit-box-shadow:inset 0 0 0 1px rgba(255,255,255,0.4),-1px 0 1px rgba(0,0,0,0.3);box-shadow:inset 0 0 0 1px rgba(255,255,255,0.4),-1px 0 1px rgba(0,0,0,0.3)}.switch>input:checked+label:after{content:attr(data-on);left:0}.switch-square>label{border-radius:2px}.switch-square>label:before{width:25px;border-radius:2px;background-image:-webkit-linear-gradient(top, #fff,#e8e8e8);background-image:-moz-linear-gradient(top, #fff,#e8e8e8);background-image:-o-linear-gradient(top, #fff,#e8e8e8);background-image:linear-gradient(to bottom, #fff,#e8e8e8)}.switch-square>label:after{width:25px}.switch-square>input:checked+label{padding-left:27px}.switch-green>input:checked+label{background:#9dcf4a;border-color:#709a3f #7dab47 #84b54b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.08),inset 0 9px #91bf45;box-shadow:inset 0 1px 1px rgba(0,0,0,0.08),inset 0 9px #91bf45}.lt-ie9 .switch{width:52px;height:19px;background:white;border:1px solid #ccc}.lt-ie9 .switch>label{display:none}.lt-ie9 .switch>input{position:static;width:inherit;height:inherit;vertical-align:top}.valid,.invalid{display:inline-block;vertical-align:top;position:relative}.valid>input:focus,.invalid>input:focus{position:relative;z-index:2}.valid>input{color:#435c26;text-shadow:0 1px rgba(255,255,255,0.3);background:#ddfabf;border-color:#7ba845 #89bc4d #89bc4d}.valid:before{content:'';position:absolute;top:9px;right:8px;width:10px;height:4px;border:solid #508f29;border-width:0 0 3px 3px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.invalid>input{color:#833230;text-shadow:0 1px rgba(255,255,255,0.3);background:#fbd3c4;border-color:#e55d48 #e5725a #e5725a}.invalid:before,.invalid:after{content:'';position:absolute;top:8px;right:12px;width:3px;height:12px;background:#db3e3b;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.invalid:after{-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.lt-ie9 .valid:before,.lt-ie9 .valid:after,.lt-ie9 .invalid:before,.lt-ie9 .invalid:after{display:none}.button{display:inline-block;vertical-align:top;height:30px;line-height:1;padding:0 15px;font-size:12px;color:#666;text-align:center;text-shadow:0 1px rgba(255,255,255,0.5);background:#eee;background-clip:padding-box;border:1px solid;border-color:#cfcfcf #ccc #c6c6c6;border-radius:3px;cursor:pointer;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;background-image:-webkit-linear-gradient(top, #fcfcfc,#e8e8e8);background-image:-moz-linear-gradient(top, #fcfcfc,#e8e8e8);background-image:-o-linear-gradient(top, #fcfcfc,#e8e8e8);background-image:linear-gradient(to bottom, #fcfcfc,#e8e8e8);-webkit-box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.05)}.button:hover{color:#666}.button:active,.button-dropdown:hover>.toggle,.button-dropdown.open>.toggle,.button.active{background:#e8e8e8;border-color:#bfbfbf #c8c8c8 #d6d6d6;background-image:-webkit-linear-gradient(top, #e8e8e8,#fafafa);background-image:-moz-linear-gradient(top, #e8e8e8,#fafafa);background-image:-o-linear-gradient(top, #e8e8e8,#fafafa);background-image:linear-gradient(to bottom, #e8e8e8,#fafafa);-webkit-box-shadow:inset 0 1px 3px rgba(0,0,0,0.15),0 1px rgba(255,255,255,0.1);box-shadow:inset 0 1px 3px rgba(0,0,0,0.15),0 1px rgba(255,255,255,0.1)}a.button{line-height:28px;text-decoration:none}.button-round{border-radius:15px}.button-blue,.button-green,.button-red{color:white;text-shadow:0 -1px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.2),inset 0 0 0 1px rgba(255,255,255,0.1),0 1px 1px rgba(0,0,0,0.06);box-shadow:inset 0 1px rgba(255,255,255,0.2),inset 0 0 0 1px rgba(255,255,255,0.1),0 1px 1px rgba(0,0,0,0.06)}.button-blue:hover,.button-green:hover,.button-red:hover{color:white}.button-blue:active,.button-green:active,.button-red:active,.active.button-blue,.active.button-green,.active.button-red{-webkit-box-shadow:inset 0 1px 3px rgba(0,0,0,0.2),0 1px rgba(255,255,255,0.1);box-shadow:inset 0 1px 3px rgba(0,0,0,0.2),0 1px rgba(255,255,255,0.1)}.button-blue{background:#278cd8;border-color:#1b74bc #1867a8 #165f9b;background-image:-webkit-linear-gradient(top, #33a0e8,#1b7aca);background-image:-moz-linear-gradient(top, #33a0e8,#1b7aca);background-image:-o-linear-gradient(top, #33a0e8,#1b7aca);background-image:linear-gradient(to bottom, #33a0e8,#1b7aca)}.button-blue:active,.button-blue.active{background:#2180ce;border-color:#145b96 #1566af #1a76c2;background-image:-webkit-linear-gradient(top, #2180ce,#33a0e8);background-image:-moz-linear-gradient(top, #2180ce,#33a0e8);background-image:-o-linear-gradient(top, #2180ce,#33a0e8);background-image:linear-gradient(to bottom, #2180ce,#33a0e8)}.button-green{background:#81c33d;border-color:#7ba845 #77a343 #6f983f;background-image:-webkit-linear-gradient(top, #a0d44d,#72ba35);background-image:-moz-linear-gradient(top, #a0d44d,#72ba35);background-image:-o-linear-gradient(top, #a0d44d,#72ba35);background-image:linear-gradient(to bottom, #a0d44d,#72ba35)}.button-green:active,.button-green.active{background:#75bd35;border-color:#678f3a #75a143 #81b049;background-image:-webkit-linear-gradient(top, #75bd35,#a0d44d);background-image:-moz-linear-gradient(top, #75bd35,#a0d44d);background-image:-o-linear-gradient(top, #75bd35,#a0d44d);background-image:linear-gradient(to bottom, #75bd35,#a0d44d)}.button-red{background:#dd362c;border-color:#ac1612 #9d100d #8b0f0b;background-image:-webkit-linear-gradient(top, #fc4138,#ce3026);background-image:-moz-linear-gradient(top, #fc4138,#ce3026);background-image:-o-linear-gradient(top, #fc4138,#ce3026);background-image:linear-gradient(to bottom, #fc4138,#ce3026)}.button-red:active,.button-red.active{background:#cf3025;border-color:#800d09 #8b0f0b #ac1612;background-image:-webkit-linear-gradient(top, #cf3025,#fc4138);background-image:-moz-linear-gradient(top, #cf3025,#fc4138);background-image:-o-linear-gradient(top, #cf3025,#fc4138);background-image:linear-gradient(to bottom, #cf3025,#fc4138)}.button-left,.button-right{position:relative}.button-left:before,.button-right:before{content:'';position:absolute;top:2px;z-index:-1;width:22px;height:22px;background-color:inherit;border:1px solid;border-color:inherit}.button.button-left:active,.button-dropdown:hover>.button-left.toggle,.button-dropdown.open>.button-left.toggle,.button.button-right:active,.button-dropdown:hover>.button-right.toggle,.button-dropdown.open>.button-right.toggle{-webkit-box-shadow:inset 0 1px rgba(0,0,0,0.05),0 1px rgba(255,255,255,0.1);box-shadow:inset 0 1px rgba(0,0,0,0.05),0 1px rgba(255,255,255,0.1)}.button.button-left:active:before,.button-dropdown:hover>.button-left.toggle:before,.button-dropdown.open>.button-left.toggle:before,.button.button-right:active:before,.button-dropdown:hover>.button-right.toggle:before,.button-dropdown.open>.button-right.toggle:before{-webkit-box-shadow:inset 0 1px rgba(0,0,0,0.05),-1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px rgba(0,0,0,0.05),-1px 0 rgba(255,255,255,0.1)}.button-left{padding:0 12px 0 7px;border-left-width:0;border-radius:0 3px 3px 0}.button-left:before{left:-11px;border-radius:2px 5px 0 5px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.button-right{padding:0 7px 0 12px;border-right-width:0;border-radius:3px 0 0 3px}.button-right:before{right:-11px;border-radius:5px 2px 5px 0;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.button.button-left{-webkit-box-shadow:inset 0 1px #fff,inset 0 -1px rgba(255,255,255,0.3),inset -1px 0 rgba(255,255,255,0.3),0 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px #fff,inset 0 -1px rgba(255,255,255,0.3),inset -1px 0 rgba(255,255,255,0.3),0 1px rgba(0,0,0,0.05)}.button.button-left:before{background-image:-webkit-linear-gradient(top right, #fcfcfc,#e8e8e8);background-image:-moz-linear-gradient(top right, #fcfcfc,#e8e8e8);background-image:-o-linear-gradient(top right, #fcfcfc,#e8e8e8);background-image:linear-gradient(to bottom left, #fcfcfc,#e8e8e8);-webkit-box-shadow:inset 0 1px #fff,inset 1px 0 rgba(255,255,255,0.3),-1px 0 rgba(0,0,0,0.03);box-shadow:inset 0 1px #fff,inset 1px 0 rgba(255,255,255,0.3),-1px 0 rgba(0,0,0,0.03)}.button.button-left:active:before,.button-dropdown:hover>.button-left.toggle:before,.button-dropdown.open>.button-left.toggle:before{background-image:-webkit-linear-gradient(top right, #e8e8e8,#fafafa);background-image:-moz-linear-gradient(top right, #e8e8e8,#fafafa);background-image:-o-linear-gradient(top right, #e8e8e8,#fafafa);background-image:linear-gradient(to bottom left, #e8e8e8,#fafafa)}.button.button-right{-webkit-box-shadow:inset 0 1px #fff,inset 0 -1px rgba(255,255,255,0.3),inset 1px 0 rgba(255,255,255,0.3),0 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px #fff,inset 0 -1px rgba(255,255,255,0.3),inset 1px 0 rgba(255,255,255,0.3),0 1px rgba(0,0,0,0.05)}.button.button-right:before{background-image:-webkit-linear-gradient(top left, #fcfcfc,#e8e8e8);background-image:-moz-linear-gradient(top left, #fcfcfc,#e8e8e8);background-image:-o-linear-gradient(top left, #fcfcfc,#e8e8e8);background-image:linear-gradient(to bottom right, #fcfcfc,#e8e8e8);-webkit-box-shadow:inset 0 1px #fff,inset -1px 0 rgba(255,255,255,0.3),1px 0 rgba(0,0,0,0.03);box-shadow:inset 0 1px #fff,inset -1px 0 rgba(255,255,255,0.3),1px 0 rgba(0,0,0,0.03)}.button.button-right:active:before,.button-dropdown:hover>.button-right.toggle:before,.button-dropdown.open>.button-right.toggle:before{background-image:-webkit-linear-gradient(top left, #e8e8e8,#fafafa);background-image:-moz-linear-gradient(top left, #e8e8e8,#fafafa);background-image:-o-linear-gradient(top left, #e8e8e8,#fafafa);background-image:linear-gradient(to bottom right, #e8e8e8,#fafafa)}.button-left.button-blue,.button-left.button-green,.button-left.button-red{-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 -1px rgba(255,255,255,0.1),inset -1px 0 rgba(255,255,255,0.1),0 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 -1px rgba(255,255,255,0.1),inset -1px 0 rgba(255,255,255,0.1),0 1px rgba(0,0,0,0.05)}.button-left.button-blue:before,.button-left.button-green:before,.button-left.button-red:before{-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 1px 0 rgba(255,255,255,0.1),-1px 0 rgba(0,0,0,0.03);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 1px 0 rgba(255,255,255,0.1),-1px 0 rgba(0,0,0,0.03)}.button-right.button-blue,.button-right.button-green,.button-right.button-red{-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 -1px rgba(255,255,255,0.1),inset 1px 0 rgba(255,255,255,0.1),0 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 -1px rgba(255,255,255,0.1),inset 1px 0 rgba(255,255,255,0.1),0 1px rgba(0,0,0,0.05)}.button-right.button-blue:before,.button-right.button-green:before,.button-right.button-red:before{-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset -1px 0 rgba(255,255,255,0.1),1px 0 rgba(0,0,0,0.03);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset -1px 0 rgba(255,255,255,0.1),1px 0 rgba(0,0,0,0.03)}.button-blue.button-left:before{background-image:-webkit-linear-gradient(top right, #33a0e8,#1b7aca);background-image:-moz-linear-gradient(top right, #33a0e8,#1b7aca);background-image:-o-linear-gradient(top right, #33a0e8,#1b7aca);background-image:linear-gradient(to bottom left, #33a0e8,#1b7aca)}.button-blue.button-left:active:before{background-image:-webkit-linear-gradient(top right, #2180ce,#33a0e8);background-image:-moz-linear-gradient(top right, #2180ce,#33a0e8);background-image:-o-linear-gradient(top right, #2180ce,#33a0e8);background-image:linear-gradient(to bottom left, #2180ce,#33a0e8)}.button-blue.button-right:before{background-image:-webkit-linear-gradient(top left, #33a0e8,#1b7aca);background-image:-moz-linear-gradient(top left, #33a0e8,#1b7aca);background-image:-o-linear-gradient(top left, #33a0e8,#1b7aca);background-image:linear-gradient(to bottom right, #33a0e8,#1b7aca)}.button-blue.button-right:active:before{background-image:-webkit-linear-gradient(top left, #2180ce,#33a0e8);background-image:-moz-linear-gradient(top left, #2180ce,#33a0e8);background-image:-o-linear-gradient(top left, #2180ce,#33a0e8);background-image:linear-gradient(to bottom right, #2180ce,#33a0e8)}.button-green.button-left:before{background-image:-webkit-linear-gradient(top right, #a0d44d,#72ba35);background-image:-moz-linear-gradient(top right, #a0d44d,#72ba35);background-image:-o-linear-gradient(top right, #a0d44d,#72ba35);background-image:linear-gradient(to bottom left, #a0d44d,#72ba35)}.button-green.button-left:active:before{background-image:-webkit-linear-gradient(top right, #75bd35,#a0d44d);background-image:-moz-linear-gradient(top right, #75bd35,#a0d44d);background-image:-o-linear-gradient(top right, #75bd35,#a0d44d);background-image:linear-gradient(to bottom left, #75bd35,#a0d44d)}.button-green.button-right:before{background-image:-webkit-linear-gradient(top left, #a0d44d,#72ba35);background-image:-moz-linear-gradient(top left, #a0d44d,#72ba35);background-image:-o-linear-gradient(top left, #a0d44d,#72ba35);background-image:linear-gradient(to bottom right, #a0d44d,#72ba35)}.button-green.button-right:active:before{background-image:-webkit-linear-gradient(top left, #75bd35,#a0d44d);background-image:-moz-linear-gradient(top left, #75bd35,#a0d44d);background-image:-o-linear-gradient(top left, #75bd35,#a0d44d);background-image:linear-gradient(to bottom right, #75bd35,#a0d44d)}.button-red.button-left:before{background-image:-webkit-linear-gradient(top right, #fc4138,#ce3026);background-image:-moz-linear-gradient(top right, #fc4138,#ce3026);background-image:-o-linear-gradient(top right, #fc4138,#ce3026);background-image:linear-gradient(to bottom left, #fc4138,#ce3026)}.button-red.button-left:active:before{background-image:-webkit-linear-gradient(top right, #cf3025,#fc4138);background-image:-moz-linear-gradient(top right, #cf3025,#fc4138);background-image:-o-linear-gradient(top right, #cf3025,#fc4138);background-image:linear-gradient(to bottom left, #cf3025,#fc4138)}.button-red.button-right:before{background-image:-webkit-linear-gradient(top left, #fc4138,#ce3026);background-image:-moz-linear-gradient(top left, #fc4138,#ce3026);background-image:-o-linear-gradient(top left, #fc4138,#ce3026);background-image:linear-gradient(to bottom right, #fc4138,#ce3026)}.button-red.button-right:active:before{background-image:-webkit-linear-gradient(top left, #cf3025,#fc4138);background-image:-moz-linear-gradient(top left, #cf3025,#fc4138);background-image:-o-linear-gradient(top left, #cf3025,#fc4138);background-image:linear-gradient(to bottom right, #cf3025,#fc4138)}.lt-ie9 .button-left,.lt-ie9 .button-right{padding:0 12px;border-width:1px}.lt-ie9 .button-left:before,.lt-ie9 .button-right:after{display:inline;position:static;background:none;border:0}.lt-ie9 .button-left:before{content:'\2190';margin-right:8px}.lt-ie9 .button-right:before{content:none}.lt-ie9 .button-right:after{content:'\2192';margin-left:8px}.button-group{display:inline-block;vertical-align:top;height:30px;font-size:0;white-space:nowrap}.button-group>.button{margin-left:-1px;height:inherit;line-height:28px;padding:0 15px;border-radius:0}.button-group>.button:first-child{margin-left:0;border-radius:3px 0 0 3px}.button-group>.button:last-child{border-radius:0 3px 3px 0}.button-group>.button:focus{position:relative;z-index:1}.button-dropdown{display:inline-block;vertical-align:top;position:relative;height:30px;font-size:0;white-space:nowrap}.button-dropdown>.button{position:relative;z-index:1;height:inherit;line-height:28px;padding:0 12px;border-radius:3px 0 0 3px}.button-dropdown>.toggle{width:29px;font:0/0 serif;color:transparent;border-left-width:0;border-radius:0 3px 3px 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.button-dropdown>.toggle:before,.button-dropdown>.toggle:after{content:'';position:absolute;top:50%;left:50%;margin:-2px 0 0 -5px;width:0;height:0;border:5px solid transparent;border-top-color:#888}.button-dropdown>.toggle:before{margin-top:-1px;border-top-color:rgba(255,255,255,0.5)}.button-dropdown:hover>.dropdown,.button-dropdown.open>.dropdown{display:block}.button-dropdown:hover>.button,.button-dropdown.open>.button{border-bottom-left-radius:0}.button-dropdown:hover>.toggle,.button-dropdown.open>.toggle{border-bottom-right-radius:0}.dropdown{display:none;position:absolute;top:100%;left:0;right:0;margin-top:-1px;font-size:12px;background:#f8f8f8;border:1px solid #ccc;border-radius:0 0 3px 3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.06);box-shadow:0 1px 1px rgba(0,0,0,0.06)}.dropdown:hover{display:block}.dropdown>li>a{display:block;line-height:28px;padding:0 12px;color:#666;text-decoration:none;text-shadow:0 1px white;-webkit-box-shadow:inset 0 0 0 1px #fafafa;box-shadow:inset 0 0 0 1px #fafafa}.dropdown>li>a:hover,.dropdown>li>a:focus{position:relative;z-index:2;color:white;text-shadow:0 1px rgba(0,0,0,0.4);background:#3e91ee;outline:none;background-image:-webkit-linear-gradient(top, #5ea8fc,#2e86e7);background-image:-moz-linear-gradient(top, #5ea8fc,#2e86e7);background-image:-o-linear-gradient(top, #5ea8fc,#2e86e7);background-image:linear-gradient(to bottom, #5ea8fc,#2e86e7);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px #1e6abe,0 0 0 1px #277edd;box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px #1e6abe,0 0 0 1px #277edd}.dropdown>li+li{border-top:1px solid #d6d6d6}.dropdown>li:last-child>a{border-radius:0 0 2px 2px}.heading{overflow:hidden;line-height:33px;padding:0 11px;color:#555;text-shadow:0 1px rgba(255,255,255,0.5);background:#edf0fb;border:1px solid;border-color:#dadef2 #ced8ee #c2ceec;border-radius:3px;background-image:-webkit-linear-gradient(top, #f4f6fc,#e2e6f8);background-image:-moz-linear-gradient(top, #f4f6fc,#e2e6f8);background-image:-o-linear-gradient(top, #f4f6fc,#e2e6f8);background-image:linear-gradient(to bottom, #f4f6fc,#e2e6f8);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.5),inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px rgba(255,255,255,0.5),inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.05)}.heading>h2{float:left;font-size:13px;font-weight:bold}.heading-links{float:right;line-height:18px;margin:8px -11px 0 11px}.heading-links>li{float:left}.heading-links>li>a{display:block;padding:0 11px}.heading-links>li+li{border-left:1px solid #c9d3f2;border-left-color:rgba(183,192,223,0.6);-webkit-box-shadow:inset 1px 0 rgba(255,255,255,0.2),-1px 0 rgba(255,255,255,0.2);box-shadow:inset 1px 0 rgba(255,255,255,0.2),-1px 0 rgba(255,255,255,0.2)}.alert{position:relative;line-height:29px;padding:0 10px;color:#6b6a5a;text-shadow:0 1px rgba(255,255,255,0.5);background:#fcf0b0;border:1px solid #d7cd89;border-bottom-color:#cec986;border-radius:3px;background-image:-webkit-linear-gradient(top, #fef5bd,#faeca4);background-image:-moz-linear-gradient(top, #fef5bd,#faeca4);background-image:-o-linear-gradient(top, #fef5bd,#faeca4);background-image:linear-gradient(to bottom, #fef5bd,#faeca4);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.4),inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.04);box-shadow:inset 0 1px rgba(255,255,255,0.4),inset 0 0 0 1px rgba(255,255,255,0.3),0 1px 1px rgba(0,0,0,0.04)}.alert.notice{color:#526e4f;background:#bff1bc;border-color:#98cf9f #98cf9f #8ec397;background-image:-webkit-linear-gradient(top, #cef4d0,#b2eeaa);background-image:-moz-linear-gradient(top, #cef4d0,#b2eeaa);background-image:-o-linear-gradient(top, #cef4d0,#b2eeaa);background-image:linear-gradient(to bottom, #cef4d0,#b2eeaa)}.alert-close{display:block;position:absolute;top:50%;right:0;margin-top:-9px;padding:inherit;font:bold 18px/18px Arial, sans-serif;color:inherit;opacity:.75}.alert-close:hover{color:inherit;text-decoration:none;opacity:1}.table{width:100%;line-height:29px;text-align:left;background:white;border-collapse:separate;border-radius:3px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.06);box-shadow:0 1px 2px rgba(0,0,0,0.06)}.table-head>tr>th{padding:0 10px;font-weight:bold;color:white;text-shadow:0 1px rgba(0,0,0,0.2);background:#2c92ed;border-width:1px 1px 1px 0;border-style:solid;border-color:#1d87e2 #187ed9 #1670c1;background-image:-webkit-linear-gradient(top, #49a4fc,#208be7);background-image:-moz-linear-gradient(top, #49a4fc,#208be7);background-image:-o-linear-gradient(top, #49a4fc,#208be7);background-image:linear-gradient(to bottom, #49a4fc,#208be7);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.2),inset 0 0 0 1px rgba(255,255,255,0.06),0 1px rgba(0,0,0,0.04);box-shadow:inset 0 1px rgba(255,255,255,0.2),inset 0 0 0 1px rgba(255,255,255,0.06),0 1px rgba(0,0,0,0.04)}.table-head>tr>th:first-child{border-left-width:1px;border-top-left-radius:3px}.table-head>tr>th:last-child{border-top-right-radius:3px}.table-body>tr:nth-child(2n){background:#f9f9f9}.table-body>tr:hover{background:#f4f4f4}.table-body>tr>td{padding:0 10px;text-shadow:0 1px white;border-right:1px solid #eee;border-right-color:rgba(0,0,0,0.07)}.table-body>tr>td:first-child{border-left:1px solid #d2d2d2}.table-body>tr>td:last-child{border-right-color:#d2d2d2}.table-foot>tr>td{position:relative;line-height:26px;padding-left:9px;font-size:11px;color:#777;text-shadow:0 1px rgba(255,255,255,0.5);background:#f4f4f4;border-width:1px 1px 1px 0;border-style:solid;border-color:#dbdbdb #d2d2d2 #ccc;background-image:-webkit-linear-gradient(top, #fbfbfb,#ededed);background-image:-moz-linear-gradient(top, #fbfbfb,#ededed);background-image:-o-linear-gradient(top, #fbfbfb,#ededed);background-image:linear-gradient(to bottom, #fbfbfb,#ededed);-webkit-box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.2);box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.2)}.table-foot>tr>td:first-child{border-left-width:1px;border-bottom-left-radius:3px}.table-foot>tr>td:last-child{border-bottom-right-radius:3px}.table-pager{float:right}.table-pager-link{float:left;position:relative;overflow:hidden;width:26px;height:26px;font:0/0 serif;color:transparent;border-left:1px solid #ddd;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-box-shadow:inset 1px 0 rgba(255,255,255,0.2),-1px 0 rgba(255,255,255,0.2);box-shadow:inset 1px 0 rgba(255,255,255,0.2),-1px 0 rgba(255,255,255,0.2)}.table-pager-link:hover{background:#f2f2f2;background:rgba(0,0,0,0.015)}.table-pager-link:hover:after{border-color:transparent #777}.table-pager-link:active{background:#eee;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.03),0 -1px rgba(0,0,0,0.02),-1px 0 rgba(255,255,255,0.2);box-shadow:inset 0 1px 1px rgba(0,0,0,0.03),0 -1px rgba(0,0,0,0.02),-1px 0 rgba(255,255,255,0.2)}.table-pager-link:active:after{border-color:transparent #999}.table-pager-link:before,.table-pager-link:after{content:'';position:absolute;top:50%;left:50%;margin:-4px 0 0 -2px;width:0;height:0;border-style:solid;border-color:transparent #909090}.table-pager-link:before{margin-top:-3px;border-color:transparent rgba(255,255,255,0.5)}.table-pager-link.prev:before,.table-pager-link.prev:after{border-width:4px 4px 4px 0}.table-pager-link.next:before,.table-pager-link.next:after{border-width:4px 0 4px 4px}.table-pager-link:last-child{border-bottom-right-radius:2px}.progress{position:relative;height:13px;background:white;border:1px solid #c6c6c6;border-top-color:#bbb;border-radius:8px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4);box-shadow:inset 0 1px 1px rgba(0,0,0,0.06),0 1px rgba(255,255,255,0.4)}.progress>span{display:block;position:absolute;top:-1px;bottom:-1px;left:-1px;min-width:13px;background:#ececec;border:1px solid #ccc;border-bottom-color:#c6c6c6;border-radius:8px;background-image:-webkit-linear-gradient(top, #fcfcfc,#e6e6e6);background-image:-moz-linear-gradient(top, #fcfcfc,#e6e6e6);background-image:-o-linear-gradient(top, #fcfcfc,#e6e6e6);background-image:linear-gradient(to bottom, #fcfcfc,#e6e6e6);-webkit-box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.3),1px 1px 1px rgba(0,0,0,0.06);box-shadow:inset 0 1px #fff,inset 0 0 0 1px rgba(255,255,255,0.3),1px 1px 1px rgba(0,0,0,0.06)}.progress-blue>span{background:#3e91ee;border-color:#6898c8 #5a87b5 #4573a1;background-image:-webkit-linear-gradient(top, #5ea8fc,#2e86e7);background-image:-moz-linear-gradient(top, #5ea8fc,#2e86e7);background-image:-o-linear-gradient(top, #5ea8fc,#2e86e7);background-image:linear-gradient(to bottom, #5ea8fc,#2e86e7);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 0 0 1px rgba(255,255,255,0.08),1px 1px 1px rgba(0,0,0,0.1);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 0 0 1px rgba(255,255,255,0.08),1px 1px 1px rgba(0,0,0,0.1)}.progress-green>span{background:#84c43e;border-color:#7ba845 #77a343 #6f983f;background-image:-webkit-linear-gradient(top, #a0d44d,#70b834);background-image:-moz-linear-gradient(top, #a0d44d,#70b834);background-image:-o-linear-gradient(top, #a0d44d,#70b834);background-image:linear-gradient(to bottom, #a0d44d,#70b834);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 0 0 1px rgba(255,255,255,0.1),1px 1px 1px rgba(0,0,0,0.1);box-shadow:inset 0 1px rgba(255,255,255,0.25),inset 0 0 0 1px rgba(255,255,255,0.1),1px 1px 1px rgba(0,0,0,0.1)}.tooltip{position:absolute;z-index:10;padding:4px 10px;max-width:200px;line-height:20px;font-size:11px;color:white;text-align:center;text-shadow:0 1px black;background:#3b3c40;background-clip:padding-box;border:1px solid #19191b;border-bottom-color:#0a0a0b;border-radius:3px;background-image:-webkit-linear-gradient(top, #585a60,#3b3c40);background-image:-moz-linear-gradient(top, #585a60,#3b3c40);background-image:-o-linear-gradient(top, #585a60,#3b3c40);background-image:linear-gradient(to bottom, #585a60,#3b3c40);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.1),inset 0 0 0 1px rgba(255,255,255,0.1),0 1px 2px rgba(0,0,0,0.2);box-shadow:inset 0 1px rgba(255,255,255,0.1),inset 0 0 0 1px rgba(255,255,255,0.1),0 1px 2px rgba(0,0,0,0.2)}.tooltip:before,.tooltip:after,.tooltip>p:before{content:'';position:absolute;width:0;height:0;border:6px solid transparent}.tooltip>p:before{z-index:2}.tooltip-up:before,.tooltip-up:after,.tooltip-up>p:before{left:50%;margin-left:-6px}.tooltip-up:before{bottom:-12px;border-top-color:#0a0a0b}.tooltip-up:after{bottom:-11px;border-top-color:#53555b}.tooltip-up>p:before{bottom:-10px;border-top-color:#3b3c40}.tooltip-down:before,.tooltip-down:after,.tooltip-down>p:before{left:50%;margin-left:-6px}.tooltip-down:before{top:-12px;border-bottom-color:#161718}.tooltip-down:after{top:-11px;border-bottom-color:#787a82}.tooltip-down>p:before{top:-10px;border-bottom-color:#585a60}.tooltip-left:before,.tooltip-left:after,.tooltip-left>p:before{top:50%;margin-top:-6px}.tooltip-left:before{left:-12px;border-right-color:#161718}.tooltip-left:after{left:-11px;border-right-color:#606168}.tooltip-left>p:before{left:-10px;border-right-color:#4a4b50}.tooltip-right:before,.tooltip-right:after,.tooltip-right>p:before{top:50%;margin-top:-6px}.tooltip-right:before{right:-12px;border-left-color:#161718}.tooltip-right:after{right:-11px;border-left-color:#606168}.tooltip-right>p:before{right:-10px;border-left-color:#4a4b50}.lt-ie9 .tooltip:after{content:none}

/* For demo purposes only */

.demo { width: 900px; margin: 0 auto; padding: 30px; overflow: hidden; }

.demo-left { width: 405px; margin-right: 20px; }
.demo-left p { margin-bottom: 25px; white-space: nowrap; }
.demo-left p .button { margin-right: 10px; }
.demo-left p .button-left { margin-left: 13px; }
.demo-left p .button-right { margin-right: 0; }
.demo-left .button-group { float: left; margin-bottom: 23px; }
.demo-left .button-dropdown { float: right; }
.demo-left .heading { clear: both; width: 228px; }
.demo-left .alert { margin: 20px 0 0; }

.demo-center { float: left; width: 200px; }
.demo-center p { margin-bottom: 16px; }
.demo-center p, .demo-center textarea, .demo-center input { width: 100%; }

.demo-right { float: right; width: 255px; text-align: center; }
.demo-right > p { width: 112px; }
.demo-right .demo-switch { float: right; width: auto; margin: 4px 0 0 15px; }
.demo-right .switch { display: block; margin-bottom: 15px; }
.demo-right .option { margin: 6px 4px 8px; }
.demo-right .tooltip { position: relative; margin-top: 10px; width: 90px; }
.demo-right .select { clear: both; width: 100%; margin: 11px 0 19px; }
.demo-right .progress { margin-bottom: 15px; }



</style>
<?php
if ($aviso==1){
?>
<div align='Center'>
<div class="demo"><div class="demo-left" align='Center'>
<p class="alert notice">
	<strong>Listo!</strong> Contenido actualizado correctamente.
	<a href="#" class="alert-close">x</a>
</p>
</div>
</div>
<?php
} else {
?>
<div align="center" style="margin-top: 60px">
<?php	
}

?>
<!-- Tabla de edici�n de contenidos -->
<table>
<?php
$array = array();
foreach ($contenido as $value){
?>
<tr>
	<form method='post' action="<?=base_url()?>index.php/main/updateContent">
		<input type="hidden" name='page_container' value='<?=$value->page_container?>'>
		<input type="hidden" name='name' value='<?=$value->name?>'>
		<td><?=$value->name?></td>
		<td><textarea cols="40" rows="5" name="content"><?=$value->content?></textarea><br><br></td>
		<td><input type="submit" value='Actualizar Contenido'></td>
	</form>
</tr>
<?php }
?>
</table>
</div>