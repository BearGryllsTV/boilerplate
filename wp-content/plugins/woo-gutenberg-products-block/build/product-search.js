this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-search"]=function(t){function e(e){for(var r,i,u=e[0],l=e[1],a=e[2],b=0,d=[];b<u.length;b++)i=u[b],Object.prototype.hasOwnProperty.call(c,i)&&c[i]&&d.push(c[i][0]),c[i]=0;for(r in l)Object.prototype.hasOwnProperty.call(l,r)&&(t[r]=l[r]);for(s&&s(e);d.length;)d.shift()();return o.push.apply(o,a||[]),n()}function n(){for(var t,e=0;e<o.length;e++){for(var n=o[e],r=!0,u=1;u<n.length;u++){var l=n[u];0!==c[l]&&(r=!1)}r&&(o.splice(e--,1),t=i(i.s=n[0]))}return t}var r={},c={31:0},o=[];function i(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=t,i.c=r,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)i.d(n,r,function(e){return t[e]}.bind(null,r));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="";var u=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],l=u.push.bind(u);u.push=e,u=u.slice();for(var a=0;a<u.length;a++)e(u[a]);var s=l;return o.push([851,0]),n()}({0:function(t,e){!function(){t.exports=this.wp.element}()},1:function(t,e){!function(){t.exports=this.wp.i18n}()},15:function(t,e){!function(){t.exports=this.wp.blockEditor}()},19:function(t,e){!function(){t.exports=this.wp.blocks}()},3:function(t,e){!function(){t.exports=this.wc.wcSettings}()},37:function(t,e){!function(){t.exports=this.wp.isShallowEqual}()},371:function(t,e){},372:function(t,e){},4:function(t,e){!function(){t.exports=this.wp.components}()},5:function(t,e,n){"use strict";n.d(e,"l",(function(){return c})),n.d(e,"J",(function(){return o})),n.d(e,"P",(function(){return i})),n.d(e,"z",(function(){return u})),n.d(e,"B",(function(){return l})),n.d(e,"m",(function(){return a})),n.d(e,"A",(function(){return s})),n.d(e,"D",(function(){return b})),n.d(e,"o",(function(){return d})),n.d(e,"C",(function(){return g})),n.d(e,"n",(function(){return p})),n.d(e,"F",(function(){return f})),n.d(e,"v",(function(){return h})),n.d(e,"x",(function(){return O})),n.d(e,"s",(function(){return m})),n.d(e,"t",(function(){return j})),n.d(e,"u",(function(){return w})),n.d(e,"k",(function(){return S})),n.d(e,"L",(function(){return k})),n.d(e,"Q",(function(){return _})),n.d(e,"q",(function(){return y})),n.d(e,"r",(function(){return v})),n.d(e,"p",(function(){return E})),n.d(e,"I",(function(){return x})),n.d(e,"c",(function(){return P})),n.d(e,"w",(function(){return C})),n.d(e,"T",(function(){return B})),n.d(e,"U",(function(){return T})),n.d(e,"K",(function(){return I})),n.d(e,"a",(function(){return L})),n.d(e,"N",(function(){return z})),n.d(e,"b",(function(){return M})),n.d(e,"M",(function(){return A})),n.d(e,"E",(function(){return D})),n.d(e,"i",(function(){return U})),n.d(e,"O",(function(){return V})),n.d(e,"h",(function(){return W})),n.d(e,"j",(function(){return F})),n.d(e,"H",(function(){return H})),n.d(e,"G",(function(){return J})),n.d(e,"S",(function(){return q})),n.d(e,"R",(function(){return K})),n.d(e,"d",(function(){return Q})),n.d(e,"e",(function(){return X})),n.d(e,"f",(function(){return Y})),n.d(e,"g",(function(){return Z})),n.d(e,"y",(function(){return $})),n.d(e,"X",(function(){return et})),n.d(e,"Y",(function(){return nt})),n.d(e,"V",(function(){return rt})),n.d(e,"W",(function(){return ct}));var r=n(3),c=Object(r.getSetting)("currentUserIsAdmin",!1),o=Object(r.getSetting)("reviewRatingsEnabled",!0),i=Object(r.getSetting)("showAvatars",!0),u=Object(r.getSetting)("max_columns",6),l=Object(r.getSetting)("min_columns",1),a=Object(r.getSetting)("default_columns",3),s=Object(r.getSetting)("max_rows",6),b=Object(r.getSetting)("min_rows",1),d=Object(r.getSetting)("default_rows",3),g=Object(r.getSetting)("min_height",500),p=Object(r.getSetting)("default_height",500),f=Object(r.getSetting)("placeholderImgSrc",""),h=(Object(r.getSetting)("thumbnail_size",300),Object(r.getSetting)("isLargeCatalog")),O=Object(r.getSetting)("limitTags"),m=Object(r.getSetting)("hasProducts",!0),j=Object(r.getSetting)("hasTags",!0),w=Object(r.getSetting)("homeUrl",""),S=Object(r.getSetting)("couponsEnabled",!0),k=Object(r.getSetting)("shippingEnabled",!0),_=Object(r.getSetting)("taxesEnabled",!0),y=Object(r.getSetting)("displayItemizedTaxes",!1),v=Object(r.getSetting)("hasDarkEditorStyleSupport",!1),E=(Object(r.getSetting)("displayShopPricesIncludingTax",!1),Object(r.getSetting)("displayCartPricesIncludingTax",!1)),x=Object(r.getSetting)("productCount",0),P=Object(r.getSetting)("attributes",[]),C=Object(r.getSetting)("isShippingCalculatorEnabled",!0),N=(Object(r.getSetting)("isShippingCostHidden",!1),Object(r.getSetting)("woocommerceBlocksPhase",1)),B=Object(r.getSetting)("wcBlocksAssetUrl",""),T=Object(r.getSetting)("wcBlocksBuildUrl",""),I=Object(r.getSetting)("shippingCountries",{}),L=Object(r.getSetting)("allowedCountries",{}),z=Object(r.getSetting)("shippingStates",{}),M=Object(r.getSetting)("allowedStates",{}),A=Object(r.getSetting)("shippingMethodsExist",!1),D=Object(r.getSetting)("paymentGatewaySortOrder",[]),U=Object(r.getSetting)("checkoutShowLoginReminder",!0),G={id:0,title:"",permalink:""},R=Object(r.getSetting)("storePages",{shop:G,cart:G,checkout:G,privacy:G,terms:G}),V=R.shop.permalink,W=R.checkout.id,F=R.checkout.permalink,H=R.privacy.permalink,J=R.privacy.title,q=R.terms.permalink,K=R.terms.title,Q=R.cart.id,X=R.cart.permalink,Y=Object(r.getSetting)("checkoutAllowsGuest",!1),Z=Object(r.getSetting)("checkoutAllowsSignup",!1),$=Object(r.getSetting)("loginUrl","/wp-login.php"),tt=n(19),et=function(t,e){if(N>2)return Object(tt.registerBlockType)(t,e)},nt=function(t,e){if(N>1)return Object(tt.registerBlockType)(t,e)},rt=function(){return N>2},ct=function(){return N>1}},6:function(t,e){!function(){t.exports=this.React}()},64:function(t,e,n){"use strict";var r=n(9),c=n.n(r),o=n(31),i=n.n(o),u=n(6);n(2);function l(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}e.a=function(t){var e=t.srcElement,n=t.size,r=void 0===n?24:n,o=i()(t,["srcElement","size"]);return Object(u.isValidElement)(e)&&Object(u.cloneElement)(e,function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?l(Object(n),!0).forEach((function(e){c()(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):l(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({width:r,height:r},o))}},7:function(t,e){!function(){t.exports=this.lodash}()},851:function(t,e,n){t.exports=n(943)},852:function(t,e,n){"use strict";var r=n(0),c=n(56),o=Object(r.createElement)(c.b,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(r.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),Object(r.createElement)("path",{d:"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"}));e.a=o},943:function(t,e,n){"use strict";n.r(e);var r=n(0),c=n(1),o=n(19),i=n(64),u=n(852),l=(n(371),n(372),n(8)),a=n.n(l),s=(n(2),n(5)),b=function(t){var e=t.attributes,n=e.label,o=e.placeholder,i=e.formId,u=e.className,l=e.hasLabel,b=e.align,d=a()("wc-block-product-search",b?"align"+b:"",u);return Object(r.createElement)("div",{className:d},Object(r.createElement)("form",{role:"search",method:"get",action:s.u},Object(r.createElement)("label",{htmlFor:i,className:l?"wc-block-product-search__label":"wc-block-product-search__label screen-reader-text"},n),Object(r.createElement)("div",{className:"wc-block-product-search__fields"},Object(r.createElement)("input",{type:"search",id:i,className:"wc-block-product-search__field",placeholder:o,name:"s"}),Object(r.createElement)("input",{type:"hidden",name:"post_type",value:"product"}),Object(r.createElement)("button",{type:"submit",className:"wc-block-product-search__button",label:Object(c.__)("Search","woo-gutenberg-products-block")},Object(r.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},Object(r.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))},d=n(15),g=n(4),p=n(36),f=Object(p.c)((function(t){var e=t.attributes,n=e.label,o=e.placeholder,i=e.formId,u=e.className,l=e.hasLabel,s=e.align,b=t.instanceId,p=t.setAttributes,f=a()("wc-block-product-search",s?"align"+s:"",u);return i||p({formId:"wc-block-product-search-".concat(b)}),Object(r.createElement)(r.Fragment,null,Object(r.createElement)(d.InspectorControls,{key:"inspector"},Object(r.createElement)(g.PanelBody,{title:Object(c.__)("Content","woo-gutenberg-products-block"),initialOpen:!0},Object(r.createElement)(g.ToggleControl,{label:Object(c.__)("Show search field label","woo-gutenberg-products-block"),help:l?Object(c.__)("Label is visible.","woo-gutenberg-products-block"):Object(c.__)("Label is hidden.","woo-gutenberg-products-block"),checked:l,onChange:function(){return p({hasLabel:!l})}}))),Object(r.createElement)("div",{className:f},!!l&&Object(r.createElement)(d.PlainText,{className:"wc-block-product-search__label",value:n,onChange:function(t){return p({label:t})}}),Object(r.createElement)("div",{className:"wc-block-product-search__fields"},Object(r.createElement)(g.TextControl,{className:"wc-block-product-search__field input-control",value:o,onChange:function(t){return p({placeholder:t})}}),Object(r.createElement)("button",{type:"submit",className:"wc-block-product-search__button",label:Object(c.__)("Search","woo-gutenberg-products-block"),onClick:function(t){return t.preventDefault()},tabIndex:"-1"},Object(r.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},Object(r.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))}));Object(o.registerBlockType)("woocommerce/product-search",{title:Object(c.__)("Product Search","woo-gutenberg-products-block"),icon:{src:Object(r.createElement)(i.a,{srcElement:u.a}),foreground:"#96588a"},category:"woocommerce",keywords:[Object(c.__)("WooCommerce","woo-gutenberg-products-block")],description:Object(c.__)("A search box to allow customers to search for products by keyword.","woo-gutenberg-products-block"),supports:{align:["wide","full"]},example:{attributes:{hasLabel:!0}},attributes:{hasLabel:{type:"boolean",default:!0},label:{type:"string",default:Object(c.__)("Search","woo-gutenberg-products-block"),source:"text",selector:"label"},placeholder:{type:"string",default:Object(c.__)("Search products…","woo-gutenberg-products-block"),source:"attribute",selector:"input.wc-block-product-search__field",attribute:"placeholder"},formId:{type:"string",default:""}},edit:f,save:function(t){return Object(r.createElement)("div",null,Object(r.createElement)(b,t))}})}});