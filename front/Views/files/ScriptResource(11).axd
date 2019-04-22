﻿(function(a,c,b,y){var g=".",j="rmGroup",q="rmMultiColumn",r="rmMultiGroup",i="rmGroupColumn",h="rmFirstGroupColumn",t="rmScrollWrap",u="rmSlide",p="rmLevel",k="rmHorizontal",z="rmVertical",s="rmRootLink",m="rmImageOnly",o="rmLeftImage",x="rmToggle",l="rmIcon",w="rmText",d="rmContentTemplate",e="rmDisabled",f="div",v="span",n="img";
c.RadMenuItem=function(){c.RadMenuItem.initializeBase(this);
};
c.RadMenuItem.prototype={_initialize:function(B,A){c.RadMenuItem.callBaseMethod(this,"_initialize",[B,A]);
var C=this.get_menu();
this._groupSettings=new c.RadMenuItemGroupSettings(B.groupSettings||{},C.get_defaultGroupSettings());
this._initializeAnimation();
this._clearNavigateUrl();
this._updateTextElementClass();
this._renderAccessKey();
this._originalExpandMode=this.get_expandMode();
},_initializeRenderedItem:function(){c.RadMenuItem.callBaseMethod(this,"_initializeRenderedItem");
this._initializeAnimation();
this._clearNavigateUrl();
this._updateTextElementClass();
this._updateLinkClass();
this._renderAccessKey();
c.RadMenu._updateChildrenPositionClass(this.get_parent());
c.RadMenu._updateChildrenPositionClass(this);
},_dispose:function(){c.BaseMenuItem.callBaseMethod(this,"_dispose");
if(this._collapseAnimationEndedDelegate){if(this._slide){this._slide.remove_collapseAnimationEnded(this._collapseAnimationEndedDelegate);
}this._collapseAnimationEndedDelegate=null;
}if(this._slide){this._slide.dispose();
this._slide=null;
}if(this._scroller){this._scroller.dispose();
this._scroller=null;
}this._disposeDomElement();
this._clearTimeout();
},get_view:function(){return this._view;
},withView:function(A,B){if(!this.get_view()){if(this.get_menu()){this._view=c.RadMenu.GetView(this.get_menu(),this);
}else{if(B){return B();
}else{return;
}}}return A();
},get_templateElement:function(){var A;
if(!this._templateElement){A=this._getTemplateClassName();
this._templateElement=a(this.get_element()).children(f+g+A).get(0);
}return this._templateElement;
},get_childListElement:function(){if(!this._childListElement){var C=this._getSlideWrapElement();
if(C){var A=C,B=this._getScrollWrapElement();
if(B){A=B;
}this._childListElement=$telerik.getFirstChildByTagName(A,"ul",0);
}}return this._childListElement;
},get_imageElement:function(){if(!this._imageElement){this._imageElement=a(this.get_linkElement()).children(g+o).get(0);
}return this._imageElement;
},get_textElement:function(){if(!this._textElement){this._textElement=a(this.get_linkElement()).children(g+w).get(0);
}return this._textElement;
},get_text:function(){var A=this;
return A.withView(function(){return A.get_view().get_text();
},function(){return c.RadMenuItem.callBaseMethod(A,"get_text");
});
},set_text:function(B){var A=this;
this.withView(function(){A.get_view().set_text(B);
},function(){c.RadMenuItem.callBaseMethod(A,"set_text",[B]);
});
if(this._state!=c.RadMenuItemState.Closed){this._clearWidth();
this._setWidth(this._getWidth()+"px");
}else{if(this._getParentFlow()==c.ItemFlow.Vertical){this._adjustSiblingsWidthOnShow=true;
}}this._updateLinkClass();
},set_navigateUrl:function(B){var A=this;
this._properties.setValue("navigateUrl",B,true);
this.withView(function(){A.get_view().set_navigateUrl(B);
});
this._clearNavigateUrl();
},get_groupSettings:function(){return this._groupSettings;
},set_groupSettings:function(A){this._groupSettings=A;
},get_hoveredImageUrl:function(){return this._properties.getValue("hoveredImageUrl",null);
},set_hoveredImageUrl:function(A){this._properties.setValue("hoveredImageUrl",A,true);
this._updateImageSrc();
},get_clickedImageUrl:function(){return this._properties.getValue("clickedImageUrl",null);
},set_clickedImageUrl:function(A){this._properties.setValue("clickedImageUrl",A,true);
this._updateImageSrc();
},get_selectedImageUrl:function(){return this._properties.getValue("selectedImageUrl",null);
},set_selectedImageUrl:function(A){this._properties.setValue("selectedImageUrl",A,true);
this._updateImageSrc();
},get_imageUrl:function(){if(this._imageUrl){return this._imageUrl;
}this._imageUrl=this._properties.getValue("imageUrl",null);
if(this._imageUrl){return this._imageUrl;
}this._imageUrl=this._getCurrentImageUrl();
return this._imageUrl;
},set_imageUrl:function(A){this._imageUrl=A;
this._properties.setValue("imageUrl",A,true);
if(!A){a(this.get_imageElement()).remove();
this._imageElement=null;
return;
}this._updateImageSrc();
},get_expandedImageUrl:function(){return this._properties.getValue("expandedImageUrl",null);
},set_expandedImageUrl:function(A){this._properties.setValue("expandedImageUrl",A,true);
this._updateImageSrc();
},get_disabledImageUrl:function(){return this._properties.getValue("disabledImageUrl",null);
},set_disabledImageUrl:function(A){this._properties.setValue("disabledImageUrl",A,true);
this._updateImageSrc();
},set_visible:function(H){var I=this.get_visible()!=H;
if(!I){return;
}c.RadMenuItem.callBaseMethod(this,"set_visible",[H]);
var F=this._getParentFlow(),B=this.get_element(),D=this.get_linkElement(),G=this.get_textElement(),A=H?"":"none",C;
if(F===c.ItemFlow.Vertical){this._adjustSiblingsWidthOnShow=true;
}this._clearWidth();
if(D){C=D;
}else{if(G){C=G;
}}if(this.get_isSeparator()||this.get_templated()){C=B.childNodes[0]||B;
}C.style.display=A;
if(C!=B){if(this.get_visible()){B.style.cssText=this._styleCssText;
}else{this._styleCssText=this.get_element().style.cssText;
B.style.cssText="padding:0px;margin:0px;height:0px;overflow:hidden;";
}}if(F===c.ItemFlow.Vertical){if(!H){this._clearSiblingsWidth();
}var E=this.get_parent();
if(E.get_element().offsetWidth>0){c.RadMenu._adjustChildrenWidth(E);
}}},scrollIntoView:function(){var K=this.get_parent();
if(!K){return;
}var M=K._getScrollWrapElement();
if(!M){return;
}var L=K._scroller;
if(!L){return;
}var D=(K._flow!==y&&K._flow!==null)?K._flow:K.get_groupSettings().get_flow();
var F=D==c.ItemFlow.Vertical;
M[F?"scrollTop":"scrollLeft"]=0;
var B=K.get_childListElement();
var I=F?"offsetTop":"offsetLeft";
var Q=F?"offsetHeight":"offsetWidth";
var A=a([K._scroller._decArrow,K._scroller._incArrow]);
var C=F?A.first().height():A.first().width();
var E=F?A.last().height():A.last().width();
var O=-B[I];
var P=M[Q]-E;
var N=O+M[Q];
var H=this.get_element()[I];
var J=this.get_element()[Q];
var G=H+J;
if(H<O+C||G>N-E){if(O-H>G-N){L.set_currentPosition(H-C);
}else{L.set_currentPosition(H-P+J);
}}},focusFirstChild:function(A){var D=this.get_items();
if(D.get_count()==0){return;
}var C=D.getItem(0);
var B=C;
while(!C._canFocus()){C=C._getNextItem();
if(C==B){return;
}}C._transferFocus(A||null);
},focusLastChild:function(A){var C=this.get_items();
if(C.get_count()==0){return;
}var B=C.getItem(C.get_count()-1);
var D=B;
while(!B._canFocus()){B=B._getPreviousItem();
if(B==D){return;
}}B._transferFocus(A||null);
},focusNextItem:function(A){var B=this._getNextItem();
while(!B._canFocus()){B=B._getNextItem();
}B._transferFocus(A||null);
},focusPreviousItem:function(A){var B=this._getPreviousItem();
while(!B._canFocus()){B=B._getPreviousItem();
}B._transferFocus(A||null);
},_render:function(A){var B=this,C=this.withView(function(){return B.get_view();
});
if(this._renderedClientTemplate){this._renderClientTemplate(A);
}else{A[A.length]="<li class='"+this._determineCssClass()+"'>";
C._renderLink(A);
C._renderLinkContent(A);
C._renderLinkEndTag(A);
this._renderChildItems(A);
A[A.length]="</li>";
}},_renderLinkContent:function(A){var C=(this.get_menu().get_showToggleHandle()&&(this.get_items().get_count()>0||this.get_expandMode()===c.MenuItemExpandMode.WebService)),B=C;
if(this.get_imageUrl()||this.get_enableImageSprite()){B=true;
this._renderImage(A);
}if(this.get_menu()._enableItemImagesPreloading){this._renderPreloadImages(A);
}this.get_view()._renderTextElement(A,B);
if(C){this._renderToggleButton(A);
}},_renderClientTemplate:function(A){A[A.length]="<li class='"+this._determineCssClass()+" rmTemplate'>";
A[A.length]="<div class='"+this._getTemplateClassName()+"'>";
A[A.length]=this._renderedClientTemplate;
A[A.length]="</div></li>";
},_renderTextElement:function(A){A[A.length]="<span class='"+w+"'>";
A[A.length]=this.get_text();
A[A.length]="</span>";
},_renderToggleButton:function(A){A[A.length]="<span class='"+x+"'>";
A[A.length]="<span class='"+l+"'>Toggle</span>";
A[A.length]="</span>";
},_renderAccessKey:function(){if(this.get_isSeparator()||this.get_templated()){return;
}var C=this.get_linkElement(),A;
if(!C){return;
}A=C.getAttribute("accessKey");
if(!A){return;
}var E=this.get_textElement()||C,D=E.innerHTML,B=D.toLowerCase().indexOf(A.toLowerCase());
if(D.toLowerCase().indexOf("<u>")!=-1){return;
}if(B==-1){return;
}E.innerHTML=D.substr(0,B)+"<u>"+D.substr(B,1)+"</u>"+D.substr(B+1,D.length);
},_renderImage:function(B){var A=this.get_enableImageSprite(),C=A?"span":"img",E=A?" ":" alt='' src='"+this.get_imageUrl()+"' ",D=new b(B);
D.append("<",C,E).append("class='",o,"' ");
if(!this.get_enabled()){D.append("disabled='disabled'");
}if(A){D.append("></span>");
}else{D.append("/>");
}return B;
},_renderPreloadImages:function(){var B=[this.get_imageUrl(),this.get_hoveredImageUrl(),this.get_expandedImageUrl(),this.get_disabledImageUrl(),this.get_clickedImageUrl(),this.get_selectedImageUrl()];
for(var A=0;
A<B.length;
A++){var C=B[A];
if(C){c.RadMenu._preloadImage(C);
}}},_renderChildItems:function(A,E){var B=this.get_items().toArray();
if(!E&&B.length==0){return;
}var D=new b(A);
D.append("<div class='rmSlide'>");
if(this._getShouldRenderScrollWrap()){this._renderScrollWrap(D);
}var C=this._getGroupCssClass();
if(this._hasMultipleColumns()){this._renderColumns(D,B,C,E);
}else{this._renderChildGroup(D,B,C,E);
}if(this._getShouldRenderScrollWrap()){D.append("</div>");
}D.append("</div>");
},_renderScrollWrap:function(D){D.append("<div class='").append(t," ",j," ").append(p,this._getGroupLevelCssClass()).append("' style='");
var B=this.get_groupSettings();
var C=B.get_width();
if(C){D.append("width :",C,";");
}var A=B.get_height();
if(A){D.append("height :",A,";");
}D.append("'>");
},_renderColumns:function(I,F,D,J){I.append("<ul class='",q,"'>");
var E=this.get_groupSettings();
var K=E.get_repeatColumns();
var H=J?0:Math.min(K,F.length);
var L=E.get_repeatDirection();
for(var A=0;
A<H;
A++){var C="";
if(A==0){C=" "+h;
}I.append("<li class='",i,C,"'>");
var B=L==c.MenuRepeatDirection.Vertical?this._getRowItems(A,K,F):this._getColumnItems(A,K,F);
var G=D+" "+r;
this._renderChildGroup(I,B,G);
I.append("</li>");
}I.append("</ul>");
},_renderChildGroup:function(C,B,A,D){C.append("<ul class='",A,"'>");
if(!D){a.each(B,function(){this._render(C.get_buffer());
});
}C.append("</ul>");
},_determineCssClass:function(){var A=this;
return this.withView(function(){return A.get_view()._determineCssClass();
});
},_getNextItem:function(){var B=this.get_parent().get_items();
var A=this.get_index();
if(A==B.get_count()-1){return B.getItem(0);
}return B.getItem(A+1);
},_getPreviousItem:function(){var B=this.get_parent().get_items();
var A=this.get_index();
if(A==0){return B.getItem(B.get_count()-1);
}return B.getItem(A-1);
},_getTemplateClassName:function(){var A=this;
return this.withView(function(){return A.get_view().get_templateClassClass();
});
},_getGroupLevelCssClass:function(){return p+(this.get_level()+1);
},_getGroupCssClass:function(){var A=new b();
A.append(this._getFlowCssClass());
if(!this._getShouldRenderScrollWrap()){A.append(" ",j," ",this._getGroupLevelCssClass());
}return A.toString();
},_getIsImageOnly:function(){if(this._isImageOnly===null){this._isImageOnly=this.get_imageElement()!=null;
}return this._isImageOnly;
},_getFlowCssClass:function(){if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){return z;
}else{return k;
}},_getCurrentImageUrl:function(){var B=null,A=this.get_imageElement();
if(A){B=A.src;
}return B;
},_getParentFlow:function(){var A=this.get_parent();
if(!A){return null;
}if(A==this.get_menu()){return A._flow;
}else{return A.get_groupSettings().get_flow();
}},_getRowItems:function(F,D,B){var G=[];
for(var E=0;
E<D;
E++){G[E]=[];
}var A=function(){for(var J=G.length-1;
J>0;
J--){var I=G[J];
var H=G[J-1];
if(I.length==H.length){return;
}H.push(I.shift());
}};
var C=G[D-1];
a.each(B,function(){C.push(this);
A();
});
return G[F];
},_getColumnItems:function(A,F,E){var B=[];
var C=0;
for(var D=0;
D<E.length;
D++){if(C==A){B.push(E[D]);
}C=(C+1)%F;
}return B;
},_getColumnForItem:function(D){if(!this._hasMultipleColumns()){return null;
}var A=this.get_childListElement();
var B=a(A).children(".rmGroupColumn");
var C=this.get_groupSettings();
var F=C.get_repeatColumns();
if(B.length<F){return this._createEmptyColumn();
}var E=D.get_index();
if(C.get_repeatDirection()==c.MenuRepeatDirection.Horizontal){return B[E%F];
}else{return B[B.length-1];
}},_getColumnItemCount:function(A){return a(A).children(".rmGroup").children(".rmItem").length;
},_getToggleButtonElement:function(){if(!this._toggleButtonElement){this._toggleButtonElement=a(this.get_linkElement()).children(g+x).get(0);
}return this._toggleButtonElement;
},_getChildElements:function(){var A=a(this.get_childListElement());
if(A.is(".rmMultiColumn")){var B=A.find("> .rmGroupColumn > ul > .rmItem"),C=this.get_groupSettings(),G=C.get_repeatDirection(),F=C.get_repeatColumns();
if(F==1||G==c.MenuRepeatDirection.Vertical){return B;
}var E=[],H=Math.ceil(B.length/F);
for(var D=0;
D<H;
D++){B.filter(".rmItem:nth-child("+(D+1)+")").each(function(){Array.add(E,this);
});
}return E;
}return A.children(".rmItem");
},_getSlideWrapElement:function(){if(!this._slideWrapElement){this._slideWrapElement=a(this.get_element()).children(g+u).get(0);
}return this._slideWrapElement;
},_getScrollWrapElement:function(){if(!this._scrollWrapElement){var A=this._getSlideWrapElement();
if(A){this._scrollWrapElement=a(A).children(g+t).get(0);
}}return this._scrollWrapElement;
},_getAnimationContainer:function(){return this._getSlideWrapElement();
},_getContentTemplateContainer:function(){if(!this._contentTemplateContainer){this._contentTemplateContainer=a(this.get_element()).find(g+d).get(0);
}return this._contentTemplateContainer;
},_getAnimatedElement:function(){if(!this._animatedElement){this._animatedElement=this._getScrollWrapElement()||this.get_childListElement()||this._getContentTemplateContainer();
}return this._animatedElement;
},_createChildControls:function(){c.RadMenuItem.callBaseMethod(this,"_createChildControls");
this._initializeScroller();
},_createChildListElement:function(){var A=[];
this._renderChildItems(A,true);
var B=a(A.join(""));
a(this.get_element()).append(B);
this._initializeAnimation();
this._updateTextElementClass();
if(this._getShouldRenderScrollWrap()){this._initializeScroller();
}return B;
},_createToggleButtonElement:function(){var B=document.createElement(v),A=document.createElement(v);
A.className=l;
A.appendChild(document.createTextNode("Toggle"));
B.className=x;
B.appendChild(A);
this._toggleButtonElement=B;
},_attachChildren:function(){if(this._childrenDetached){var A=this.get_element();
A.appendChild(this._getAnimationContainer());
this._childrenDetached=false;
}},_detachChildren:function(){if(this._childrenDetached){return;
}var C=this.get_parent(),D;
if(this.get_level()==0&&C.get_enableRootItemScroll()){var E=document.createElement("div");
E.className="rmHorizontal rmRootGroup";
if(C.get_enableRoundedCorners()){E.className+=" rmRoundedCorners";
}if(C.get_enableShadows()){E.className+=" rmShadows";
}E.style.position="absolute";
E.style.height="0px";
E.style.width="0px";
E.style.visibility="hidden";
E.style.left="0px";
if(C.get_rightToLeft()){E.style.cssFloat="right";
}var B=document.createElement("div");
B.className=j;
B.style.position="relative";
C.get_element().appendChild(E);
E.appendChild(B);
if($telerik.isIE){E.style.cssText=E.style.cssText;
}D=B;
}else{D=C._getAnimationContainer();
}var A=this._getAnimationContainer();
D.appendChild(A);
this._childrenDetached=true;
A._item=this;
A._itemTypeName=Object.getTypeName(this);
},_getWidth:function(){var A=this.get_linkElement();
if(A){return A.offsetWidth;
}else{return this.get_element().offsetWidth;
}},_setWidth:function(L){var K=this.get_linkElement();
if(!K){K=this.get_element();
}if(!K){return;
}if($telerik.isOpera){this.get_element().style.cssFloat="none";
}var J=parseInt(L,10);
if(isNaN(J)){K.style.width=L;
return;
}var G=J,I=parseFloat(a(K).css("padding-left"))+parseFloat(a(K).css("padding-right")),A=a(K).css("border-left-width"),B=a(K).css("border-right-width"),F=/\d/,C=F.test(A)?parseInt(A,10):0,D=F.test(B)?parseInt(B,10):0,E=C+D;
G-=I+E;
if(G<=0){return;
}var H=K.style.width;
if(!H||G!=H){K.style.width=G+"px";
}},_clearWidth:function(){this._setWidth("auto");
},_initializeAnimation:function(){this._determineExpandDirection();
var A=this._getAnimatedElement();
if(A){var B=this.get_menu();
this._slide=new c.jSlide(A,B.get_expandAnimation(),B.get_collapseAnimation(),B.get_enableOverlay());
this._slide.initialize();
this._slide.set_direction(this._getSlideDirection());
this._collapseAnimationEndedDelegate=Function.createDelegate(this,this._onCollapseAnimationEnded);
this._slide.add_collapseAnimationEnded(this._collapseAnimationEndedDelegate);
}},_doOpen:function(B){var F=this,C=this.get_menu(),E,A,D;
if(!this.get_hasContentTemplate()){this._ensureChildControls();
}E=this.get_parent();
if(E!=C&&E._state!=c.RadMenuItemState.Open){E._open(B);
}A=this._getAnimationContainer();
if(!A){return;
}E._openedItem=this;
this._state=c.RadMenuItemState.Open;
if(this.get_hasContentTemplate()){this._doOpenContentTemplate(A);
}else{this.withView(function(){F.get_view()._doOpen(A);
});
}this._updateLinkClass();
this._updateImageSrc();
D=new c.RadMenuItemOpenedEventArgs(this,B);
this.get_menu()._raiseEvent("itemOpened",D);
},_doOpenContentTemplate:function(A){var C=this,B=C._slide;
this.withView(function(){C.get_view()._ensureDecorationElements();
});
A.style.display="block";
A.style.visibility="hidden";
C._resetAnimatedElementPosition();
B.set_direction(C._getSlideDirection());
B.set_animatedElement(C._getAnimatedElement());
B.updateSize();
C._positionChildContainerBasic();
A.style.visibility="visible";
C._updateZIndex();
B.expand();
},_doClose:function(B){var C,A,D;
if(this._openedItem){this._openedItem._close(B);
}D=this.get_parent();
D._openedItem=null;
if(!this._getAnimationContainer()){return;
}this._state=c.RadMenuItemState.Closed;
if(!this._getIsImageOnly()){this.get_element().style.zIndex=0;
}this._slide.collapse();
this._updateLinkClass();
this._updateImageSrc();
A=new c.RadMenuItemClosedEventArgs(this,B);
C=this.get_menu();
C._raiseEvent("itemClosed",A);
this._closeChildren(B);
},_click:function(C){if(!this.get_enabled()){if($telerik.isSafari&&!$telerik.isChrome){C.preventDefault();
}return;
}var D=this.get_menu(),E=D.get_openedItem(),B=D._getExtendedItemClickingEventArgs(new c.RadMenuItemClickingEventArgs(this,C)),A;
if(D._isUsedOnTouchDevices){if(this._preventDefaultUnderMobile(C)){return;
}}D._raiseEvent("itemClicking",B);
if(B.get_cancel()){if(C&&C.preventDefault){C.preventDefault();
}return;
}if(D._isUsedOnTouchDevices&&!D.get_showToggleHandle()){if(!this._shouldPostBack()){this._toggleState(C);
}}else{if(D.get_clickToOpen()&&this.get_level()==0){if(E&&E!=this){E._close(C);
}if(D.get_clicked()&&(!$telerik.isBlackBerry4&&!$telerik.isBlackBerry5)){this._close(C);
}else{this._open(C);
}D.set_clicked(!D.get_clicked());
}}A=D._getExtendedItemClickedEventArgs(new c.RadMenuItemClickedEventArgs(this,C));
D._raiseEvent("itemClicked",A);
if(this._shouldNavigate()){return;
}this.set_selected(true);
if(this._shouldPostBack()){D._postback(this._getHierarchicalIndex());
}},_toggleState:function(A){if(!this.get_enabled()){return;
}if(this.get_isOpen()){this._close(A);
}else{if(this._shouldOpen()){this._open(A);
}}},_doFocus:function(A){if(!this._canFocus()){return;
}this._ensureChildControls();
var B=this.get_linkElement(),E=this.get_parent(),C=this.get_menu(),D=E.get_openedItem();
if(D&&D!=this){D._close(A);
}if(E._state!=c.RadMenuItemState.Open&&E.open){E._open(A);
}E._focusedItem=this;
if(E!==C){C._focusedItem=this;
}if(!this.get_focused()&&B){B.focus();
}this.scrollIntoView();
this.get_menu()._raiseEvent("itemFocus",new c.RadMenuItemFocusEventArgs(this,A));
},_doBlur:function(A){if(this.get_isSeparator()){return;
}var E=this,B=this.get_linkElement(),D=this.get_parent(),C=this.get_menu();
if(this.get_focused()&&B){B.blur();
}if(D!==C){D._focusedItem=null;
}window.setTimeout(function(){if(C._focusedItem==E){C._focusedItem=null;
}},100);
this.get_menu()._raiseEvent("itemBlur",new c.RadMenuItemBlurEventArgs(this,A));
},_transferFocus:function(A){this._ensureChildControls();
var D=this.get_parent();
var C=D.get_openedItem();
if(C&&C!=this){C._close(A);
}if(D._state!=c.RadMenuItemState.Open&&D.open){D._open(A);
}var B=this.get_linkElement();
if(B){B.focus(A||null);
}},_setFocused:function(B,A){if(B){this._doFocus(A);
}else{this._doBlur(A);
}this._focused=B;
this._updateLinkClass();
},_updateZIndex:function(){var A=this._getAnimationContainer(),B=this.get_parent();
A.style.visibility="visible";
this.get_element().style.zIndex=B.get_items().get_count()-this.get_index();
A.style.zIndex=B.get_items().get_count()+1;
this.get_menu()._incrementZIndex(this._zIndexStep);
},_positionChildContainer:function(){if(!this._autoScrollActive){this._saveAnimationContainerSize();
}var E=this._positionChildContainerBasic();
var C=E.left;
var H=E.top;
var D=this.get_menu();
var A=D.get_enableAutoScroll();
var B=D.get_enableScreenBoundaryDetection();
var G=false;
if(A){if(!this._applyAutoScroll(C,H)){if(this._autoScrollActive){this._removeAutoScroll();
this._autoScrollActive=false;
this._restoreAnimationContainerSize();
E=this._positionChildContainerBasic();
C=E.left;
H=E.top;
}if(B){var F=this._adjustForScreenBoundaries(C,H);
G=true;
this._applyAutoScroll(F.adjustedLeft,F.adjustedTop);
}}if(this._autoScrollActive){this._updateScrollSize();
}}if(B&&!G){this._adjustForScreenBoundaries(C,H);
}this._updateTextElementClass();
},_positionChildContainerBasic:function(){var J=0;
var H=0;
var C=this.get_element();
var F=C.offsetHeight;
var G=C.offsetWidth;
var E=this._getAnimationContainer();
var A=E.offsetHeight;
var B=E.offsetWidth;
var D=this.get_groupSettings().get_expandDirection();
switch(D){case c.ExpandDirection.Up:J=-A;
break;
case c.ExpandDirection.Down:J=F;
break;
case c.ExpandDirection.Left:H=-B;
break;
case c.ExpandDirection.Right:H=G;
break;
}var I=this.get_menu();
if(I.get_rightToLeft()&&this.get_level()==0){H=G-B;
if(this._getParentFlow()==c.ItemFlow.Vertical){H-=G;
}}this._setChildContainerPosition(H,J);
return{left:H,top:J};
},_setChildContainerPosition:function(F,I){var A=this._getAnimationContainer();
var G=this.get_parent();
var H=null;
if(G._getScrollWrapElement){H=G._getScrollWrapElement();
}if(H){this._detachChildren();
var E=this.get_element();
I+=E.offsetTop;
F+=E.offsetLeft;
var B=G.get_childListElement();
var D=parseInt(B.style.top,10);
if(isNaN(D)){D=0;
}if(this.get_groupSettings().get_offsetY()==0){I+=D;
}var C=parseInt(B.style.left,10);
if(isNaN(C)){C=0;
}if(this.get_groupSettings().get_offsetX()==0){F+=C;
if(this._getParentFlow()==c.ItemFlow.Horizontal){F=Math.max(F,0);
}}}A.style.left=(F+this.get_groupSettings().get_offsetX())+"px";
A.style.top=(I+this.get_groupSettings().get_offsetY())+"px";
},_adjustForScreenBoundaries:function(Q,U){var N=this._getAnimationContainer();
var A=N.offsetHeight;
var C=N.offsetWidth;
var K=this.get_element();
var O=K.offsetHeight;
var P=K.offsetWidth;
var M=this.get_groupSettings().get_expandDirection();
var S=M;
var J=c.RadMenu._getViewPortSize();
var I=a().scrollTop();
var B=$telerik.getLocation(N);
var L=$telerik.getLocation(K);
var G=J.width-L.x-K.offsetWidth;
var F=L.x;
var E=J.height-L.y-K.offsetHeight;
var H=L.y-I;
switch(M){case c.ExpandDirection.Up:if($telerik.elementOverflowsTop(N,B)||(B.y<I&&E>H)){S=c.ExpandDirection.Down;
U=O;
}break;
case c.ExpandDirection.Down:if($telerik.elementOverflowsBottom(J,N,B)){if(L.y>N.offsetHeight){S=c.ExpandDirection.Up;
U=-A;
}}break;
case c.ExpandDirection.Left:if(B.x<a(document).scrollLeft()){if(G>F){S=c.ExpandDirection.Right;
Q=P;
}}break;
case c.ExpandDirection.Right:if($telerik.elementOverflowsRight(J,N,B)){if(F>G){S=c.ExpandDirection.Left;
Q=-C;
}}break;
}switch(S){case c.ExpandDirection.Down:case c.ExpandDirection.Up:if($telerik.elementOverflowsRight(J,N)){var D=J.width-(B.x+C);
var R=this.get_menu();
if(R.get_rightToLeft()&&this.get_level()==0){Q+=D;
}else{Q=D;
}}break;
case c.ExpandDirection.Left:case c.ExpandDirection.Right:if($telerik.elementOverflowsBottom(J,N)){var T=Math.min(A,J.height);
U=J.height-(B.y+T)-this._defaultScrollSize;
}break;
}this._setChildContainerPosition(Q,U);
this._slide.set_direction(S);
return{adjustedLeft:Q,adjustedTop:U};
},_resetAnimatedElementPosition:function(){var A=this._getAnimatedElement();
A.style.top="0px";
A.style.left="0px";
},_determineExpandDirection:function(){var A=this.get_groupSettings();
if(A.get_expandDirection()!=c.ExpandDirection.Auto){return;
}var B=this._getParentFlow();
if(B==c.ItemFlow.Vertical){if(this.get_menu().get_rightToLeft()){A.set_expandDirection(c.ExpandDirection.Left);
}else{A.set_expandDirection(c.ExpandDirection.Right);
}}else{A.set_expandDirection(c.ExpandDirection.Down);
}},_getMaximumExpandSize:function(){var F=this._slide.get_direction(),E=c.RadMenu._getViewPortSize(),A=this._getAnimationContainer(),B=$telerik.getLocation(A);
if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){var C;
if(F==c.ExpandDirection.Up){C=A.offsetHeight+B.y;
}else{C=E.height-B.y-this._defaultScrollSize;
}return Math.min(C,E.height-this._defaultScrollSize);
}var D;
if(F==c.ExpandDirection.Left){D=B.x;
}else{D=E.width-B.x;
}return Math.min(D,E.width);
},_saveAnimationContainerSize:function(){var C=this._getAnimationContainer();
var A=C.offsetHeight;
var B=C.offsetWidth;
this._animationContainerOriginalSize={};
this._animationContainerOriginalSize.height=A;
this._animationContainerOriginalSize.width=B;
},_restoreAnimationContainerSize:function(){if(this._animationContainerOriginalSize){var A=this._getAnimationContainer();
A.style.height=this._animationContainerOriginalSize.height+"px";
A.style.width=this._animationContainerOriginalSize.width+"px";
this._animationContainerOriginalSize=null;
}},_getSlideDirection:function(){var A=this.get_groupSettings().get_expandDirection();
if(A==c.ExpandDirection.Auto){return null;
}return A;
},_getExpandClassName:function(){return"rmExpand"+this._getExpandClass();
},_getExpandClass:function(){var A=this._getSlideDirection();
switch(A){case c.jSlideDirection.Up:return"Top";
case c.jSlideDirection.Down:return"Down";
case c.jSlideDirection.Left:return"Left";
case c.jSlideDirection.Right:return"Right";
}},_fitsWindow:function(){var B=this._getMaximumExpandSize();
var A=this._getAnimationContainer();
if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){return A.offsetHeight<=B;
}return A.offsetWidth<=B;
},_updateImageSrc:function(){var B=this.get_imageUrl();
if(this._hovered&&this.get_hoveredImageUrl()){B=this.get_hoveredImageUrl();
}if(this._state==c.RadMenuItemState.Open&&this.get_expandedImageUrl()){B=this.get_expandedImageUrl();
}if(!this.get_enabled()&&this.get_disabledImageUrl()){B=this.get_disabledImageUrl();
}if(this._clicked&&this.get_clickedImageUrl()){B=this.get_clickedImageUrl();
}if(this.get_selected()&&this.get_selectedImageUrl()){B=this.get_selectedImageUrl();
}if(B&&this.get_element()){var A=this.get_imageElement();
if(!A){A=this._createImageElement();
}B=B.replace(/&amp;/ig,"&");
if(B!=A.src){A.src=B;
}}},_applyCssClass:function(C,A){var B=this;
this.withView(function(){B.get_view()._applyCssClass(C,A);
});
},_updateLinkClass:function(){var A=this;
if(this.get_isSeparator()){return;
}this.withView(function(){A.get_view()._updateLinkClass();
});
},_updateTextElementClass:function(){var A=this;
this.withView(function(){A.get_view()._updateTextElementClass();
});
},_updateColumnWrapSize:function(){var A=a(this.get_childListElement());
if(!A.is(".rmMultiColumn")){return;
}var C=0;
var B=0;
a(A).children(".rmGroupColumn").children(".rmGroup").each(function(){C+=this.offsetWidth;
B=Math.max(this.offsetHeight,B);
});
if(C==0||B==0){return;
}A.css("width",C+"px").css("height",B+"px");
},_updateScrollPosition:function(){this._scroller.updateState();
if(this.get_menu().get_rightToLeft()&&this._groupSettings.get_flow()==c.ItemFlow.Horizontal){this.get_childListElement().style.cssFloat="left";
this._scroller.scrollToMaxPosition();
}},_updateChildListWidth:function(){var C=this.get_menu();
if(this._groupSettings.get_flow()==c.ItemFlow.Vertical&&C.get_rightToLeft()&&$telerik.isIE){var A=this.get_childListElement();
var B=a(A).children(".rmItem").get(0);
if(B){A.style.width=B.offsetWidth+"px";
}}},_recalculateColumns:function(){if(this.get_groupSettings().get_repeatDirection()==c.MenuRepeatDirection.Horizontal){return;
}var A=this.get_childListElement();
var C=a(A).children(".rmGroupColumn");
for(var D=C.length-1;
D>0;
D--){var B=C[D];
var E=C[D-1];
if(this._getColumnItemCount(E)==this._getColumnItemCount(B)){return;
}a(E).children(".rmGroup").append(a(B).children(".rmGroup").children(".rmItem").eq(0));
}},_createEmptyColumn:function(){var B=this._getGroupCssClass();
var C=new b();
C.append("<li class='",i,"'>");
this._renderChildGroup(C,[],B);
C.append("</li>");
var A=a(C.toString());
a(this.get_childListElement()).append(A);
return A;
},_createImageElement:function(){var C=this,B=this.get_enableImageSprite()?v:n,A=this.get_linkElement()||this.get_element();
this._imageElement=document.createElement(B);
this._imageElement.className=o;
if(!this.get_enabled()){this._imageElement.disabled="disabled";
}if(A.firstChild){this.withView(function(){C.get_view()._positionImageElement(A);
});
}else{A.appendChild(this._imageElement);
}return this._imageElement;
},_hasMultipleColumns:function(){var A=this.get_groupSettings();
var B=A.get_repeatColumns();
if(B==1){B=this.get_menu().get_defaultGroupSettings().get_repeatColumns();
}return B>1;
},_onCollapseAnimationEnded:function(){var A=this.get_menu();
this.get_element().style.zIndex=0;
A._restoreZIndex();
if(this.get_level()==0&&A.get_rightToLeft()){var B=A.get_element();
B.style.cssText=B.style.cssText;
}},_stopAnimation:function(){if(this._slide){this._slide._stopAnimation();
}},_resolveCssClass:function(B,C){var A=[],D;
if(!this.get_templated()){A.push(B);
if(C&&this.get_text()==""&&a(this.get_textElement()).children().length===0){A.push(m);
}if(C&&this._isRootLink()){A.push(s);
}if(this.get_focused()&&!this.get_templated()){A.push(this.get_focusedCssClass());
}D=this.get_menu();
if(this.get_selected()&&(!D||D.get_enableSelection())){A.push(this.get_selectedCssClass());
}if(this._clicked){A.push(this.get_clickedCssClass());
}A.push(this.get_cssClass());
}if(this._state==c.RadMenuItemState.Open){A.push(this.get_expandedCssClass());
}if(!this.get_enabled()){Array.addRange(A,[e,this.get_disabledCssClass()]);
}return A;
},_preventDefaultUnderMobile:function(A){if(!A){return false;
}var B=!(this._shouldNavigate()||a(this.get_element()).hasClass("rmTemplate")||this._getContentTemplateContainer());
if(B){A.preventDefault();
}else{if(!this.get_menu().get_showToggleHandle()){if(this._shouldOpen()){if(this.get_isOpen()){return true;
}else{A.preventDefault();
}}}}return false;
},_applyTemplate:function(){var A=this;
this.withView(function(){A.get_view()._applyTemplate();
});
},_initializeScroller:function(){var A=this._getScrollWrapElement();
if(A){this._scroller=new c.MenuItemScroller(this,this.get_childListElement(),this.get_groupSettings().get_flow());
this._scroller.initialize();
}},_removeScrollWrapContainer:function(){var A=this.get_menu();
if(A&&((A.get_enableRoundedCorners()&&this._roundedCornersRendered)||(A.get_enableShadows()&&this._shadowsRendered))){c.RadMenu._removeScrollWrapContainer(this);
}},_getShouldRenderScrollWrap:function(){if(this._hasMultipleColumns()){return false;
}var C=this.get_groupSettings();
var A=this.get_menu().get_defaultGroupSettings();
var D=C.get_width();
if(!D){D=A.get_width();
}var B=C.get_height();
if(!B){B=A.get_height();
}return D||B;
},_initializeAutoScroll:function(){this._removeChildListCorners();
this._buildScrollWrap();
this._initializeScroller();
this._animatedElement=null;
this._scrollWrapElement=null;
this._slide.set_animatedElement(this._getAnimatedElement());
this._ensureRoundedCorners();
this._ensureShadows();
},_isAutoScrollPossible:function(){var C=this.get_menu();
var B=this._getMaximumExpandSize();
var A=this._getAnimationContainer();
if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){return(C.get_autoScrollMinimumHeight()<B&&B<=A.offsetHeight);
}else{return(C.get_autoScrollMinimumWidth()<B&&B<=A.offsetWidth);
}},_applyAutoScroll:function(A,B){if(this._isAutoScrollPossible()){if(!this._scroller){this._initializeAutoScroll();
this._autoScrollActive=true;
this._setChildContainerPosition(A,B);
}return true;
}return false;
},_removeAutoScroll:function(){this._removeScrollWrapContainer();
var B=this.get_items();
var C=B.get_count();
for(var D=0;
D<C;
D++){B.getItem(D)._removeAutoScroll();
}this._attachChildren();
if(!this._scroller){return;
}this._scroller.dispose();
this._scroller=null;
var F=this._getSlideWrapElement();
var A=this.get_childListElement();
var E=this._getScrollWrapElement();
F.appendChild(A);
F.removeChild(E);
A.className=String.format("{0} {1} {2}{3}",this._getFlowCssClass(),j,p,this.get_level());
this._animatedElement=null;
this._scrollWrapElement=null;
this._slide.set_animatedElement(this._getAnimatedElement());
this._slide.updateSize();
this._ensureRoundedCorners();
this._ensureShadows();
},_updateScrollSize:function(){var B=this._slide.get_direction();
var A=this._getAnimationContainer();
var D=this._getScrollWrapElement();
D.style.height="";
D.style.width="";
var C=this._getMaximumExpandSize();
if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){$telerik.setSize(D,{height:C,width:parseInt(A.style.width,10)});
if(B==c.ExpandDirection.Up){A.style.top=-C+"px";
}}else{$telerik.setSize(D,{width:C,height:parseInt(A.style.height,10)});
}this._slide.updateSize();
this._scroller.resetState();
},_buildScrollWrap:function(){var C=this._getSlideWrapElement();
var A=this.get_childListElement();
var B=document.createElement("div");
B.style.position="relative";
B.style.overflow="hidden";
A.className=this._getFlowCssClass();
B.className=String.format("{0} {1} {2}{3}",t,j,p,this.get_level());
B.appendChild(A);
C.appendChild(B);
},_updateScrollWrapSize:function(){var B=this._getScrollWrapElement();
var A=this.get_childListElement();
if(!B){return;
}if(!B.style.height){B.style.height=A.offsetHeight+"px";
}if(this.get_groupSettings().get_flow()==c.ItemFlow.Vertical){B.style.width=A.offsetWidth+"px";
}},_adjustSiblingsWidth:function(B){var A=this.get_parent();
if(A){this._clearSiblingsWidth();
c.RadMenu._adjustChildrenWidth(A,B);
}},_clearSiblingsWidth:function(){var B=this.get_parent(),E=B.get_items();
for(var A=0;
A<E.get_count();
A++){var C=E.getItem(A);
if(C!=this){var D=C.get_linkElement();
if(D){D.style.width="auto";
}}if($telerik.isSafari){B.get_childListElement().style.width="auto";
}}},_ensureToggleButton:function(){var B=this,A=this.get_linkElement()||this.get_element();
if(!this._getToggleButtonElement()){this._createToggleButtonElement();
this.withView(function(){B.get_view()._positionToggleButtonElement(A,B._toggleButtonElement);
});
}},_ensureRoundedCorners:function(){var A=this;
this.withView(function(){A.get_view()._ensureRoundedCorners();
});
},_ensureShadows:function(){var A=this;
this.withView(function(){A.get_view()._ensureShadows();
});
},_removeChildListCorners:function(){var A=this;
this.withView(function(){A.get_view()._removeChildListCorners();
});
},_isRootLink:function(){if(this.get_menu()){if(this.get_level()>0){return false;
}if("get_contextMenuElement" in this.get_menu()){return false;
}return true;
}},_createLoadingItem:function(){var B=this.get_menu().get_loadingTemplate();
if(B===""){return;
}var A=new c.RadMenuItem();
this.get_items().add(A);
A.set_text(B);
},_removeLoadingItem:function(){if(this.get_menu().get_loadingTemplate()===""){return;
}var A=this.get_items().getItem(0);
this.get_items().remove(A);
},_onChildrenLoading:function(){this._itemsLoading=true;
this._createLoadingItem();
this._doOpen(null);
},_onChildrenLoaded:function(){this._removeLoadingItem();
this._itemsLoaded=true;
this._itemsLoading=false;
if(this.get_items().get_count()>0){var A=a(this.get_element()).hasClass("rmTemplate");
if(this._hovered||A||$telerik.isTouchDevice){this._doOpen(null);
}else{if(this.get_menu()._renderMode===c.RenderMode.Lite){this._getAnimationContainer().style.width="auto";
}}}},_onChildrenLoadingError:function(){this._close(null);
this._removeLoadingItem();
this._itemsLoaded=false;
this._itemsLoading=false;
}};
c.RadMenuItem.registerClass("Telerik.Web.UI.RadMenuItem",c.BaseMenuItem);
})($telerik.$,Telerik.Web.UI,Telerik.Web.StringBuilder);
