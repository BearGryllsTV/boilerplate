this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-category"]=function(t){function e(e){for(var n,i,u=e[0],a=e[1],s=e[2],b=0,d=[];b<u.length;b++)i=u[b],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&d.push(o[i][0]),o[i]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(t[n]=a[n]);for(l&&l(e);d.length;)d.shift()();return c.push.apply(c,s||[]),r()}function r(){for(var t,e=0;e<c.length;e++){for(var r=c[e],n=!0,u=1;u<r.length;u++){var a=r[u];0!==o[a]&&(n=!1)}n&&(c.splice(e--,1),t=i(i.s=r[0]))}return t}var n={},o={28:0},c=[];function i(e){if(n[e])return n[e].exports;var r=n[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=t,i.c=n,i.d=function(t,e,r){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)i.d(r,n,function(e){return t[e]}.bind(null,n));return r},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="";var u=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],a=u.push.bind(u);u.push=e,u=u.slice();for(var s=0;s<u.length;s++)e(u[s]);var l=a;return c.push([812,0]),r()}({0:function(t,e){!function(){t.exports=this.wp.element}()},1:function(t,e){!function(){t.exports=this.wp.i18n}()},109:function(t,e){},110:function(t,e){},111:function(t,e){},112:function(t,e){},113:function(t,e){},114:function(t,e){},115:function(t,e){},116:function(t,e){},117:function(t,e){},118:function(t,e){},119:function(t,e){},120:function(t,e){},121:function(t,e){},129:function(t,e,r){"use strict";var n=r(0),o=r(1),c=r(4);r(2);e.a=function(t){var e=t.value,r=t.setAttributes;return Object(n.createElement)(c.SelectControl,{label:Object(o.__)("Order products by","woo-gutenberg-products-block"),value:e,options:[{label:Object(o.__)("Newness - newest first","woo-gutenberg-products-block"),value:"date"},{label:Object(o.__)("Price - low to high","woo-gutenberg-products-block"),value:"price_asc"},{label:Object(o.__)("Price - high to low","woo-gutenberg-products-block"),value:"price_desc"},{label:Object(o.__)("Rating - highest first","woo-gutenberg-products-block"),value:"rating"},{label:Object(o.__)("Sales - most first","woo-gutenberg-products-block"),value:"popularity"},{label:Object(o.__)("Title - alphabetical","woo-gutenberg-products-block"),value:"title"},{label:Object(o.__)("Menu Order","woo-gutenberg-products-block"),value:"menu_order"}],onChange:function(t){return r({orderby:t})}})}},13:function(t,e){!function(){t.exports=this.wp.apiFetch}()},131:function(t,e){},14:function(t,e){!function(){t.exports=this.wp.blockEditor}()},15:function(t,e){!function(){t.exports=this.regeneratorRuntime}()},17:function(t,e){!function(){t.exports=this.wp.blocks}()},177:function(t,e,r){"use strict";r.d(e,"a",(function(){return c}));var n=r(0),o=r(5),c=Object(n.createElement)("img",{src:o.T+"img/grid.svg",alt:"Grid Preview",width:"230",height:"250",style:{width:"100%"}})},18:function(t,e){!function(){t.exports=this.wp.url}()},26:function(t,e){!function(){t.exports=this.wp.compose}()},3:function(t,e){!function(){t.exports=this.wc.wcSettings}()},33:function(t,e){!function(){t.exports=this.wp.htmlEntities}()},35:function(t,e){!function(){t.exports=this.moment}()},4:function(t,e){!function(){t.exports=this.wp.components}()},42:function(t,e,r){"use strict";r.d(e,"h",(function(){return d})),r.d(e,"e",(function(){return g})),r.d(e,"b",(function(){return p})),r.d(e,"i",(function(){return f})),r.d(e,"f",(function(){return O})),r.d(e,"c",(function(){return h})),r.d(e,"d",(function(){return j})),r.d(e,"g",(function(){return m})),r.d(e,"a",(function(){return w}));var n=r(8),o=r.n(n),c=r(18),i=r(13),u=r.n(i),a=r(6),s=r(5);function l(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function b(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?l(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):l(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var d=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=void 0===n?"":n,i=t.queryArgs,l=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=void 0===n?"":n,i=t.queryArgs,u=void 0===i?[]:i,a={per_page:s.v?100:0,catalog_visibility:"any",search:o,orderby:"title",order:"asc"},l=[Object(c.addQueryArgs)("/wc/store/products",b(b({},a),u))];return s.v&&r.length&&l.push(Object(c.addQueryArgs)("/wc/store/products",{catalog_visibility:"any",include:r})),l}({selected:r,search:o,queryArgs:void 0===i?[]:i});return Promise.all(l.map((function(t){return u()({path:t})}))).then((function(t){return Object(a.uniqBy)(Object(a.flatten)(t),"id").map((function(t){return b(b({},t),{},{parent:0})}))})).catch((function(t){throw t}))},g=function(t){return u()({path:"/wc/store/products/".concat(t)})},p=function(){return u()({path:"wc/store/products/attributes"})},f=function(t){return u()({path:"wc/store/products/attributes/".concat(t,"/terms")})},O=function(t){var e=t.selected,r=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=[Object(c.addQueryArgs)("wc/store/products/tags",{per_page:s.x?100:0,orderby:s.x?"count":"name",order:s.x?"desc":"asc",search:n})];return s.x&&r.length&&o.push(Object(c.addQueryArgs)("wc/store/products/tags",{include:r})),o}({selected:void 0===e?[]:e,search:t.search});return Promise.all(r.map((function(t){return u()({path:t})}))).then((function(t){return Object(a.uniqBy)(Object(a.flatten)(t),"id")}))},h=function(t){return u()({path:Object(c.addQueryArgs)("wc/store/products/categories",b({per_page:0},t))})},j=function(t){return u()({path:"wc/store/products/categories/".concat(t)})},m=function(t){return u()({path:Object(c.addQueryArgs)("wc/store/products",{per_page:0,type:"variation",parent:t})})},w=function(t,e){if(!t.title.raw)return t.slug;var r=1===e.filter((function(e){return e.title.raw===t.title.raw})).length;return t.title.raw+(r?"":" - ".concat(t.slug))}},44:function(t,e,r){"use strict";r.d(e,"a",(function(){return u}));var n=r(15),o=r.n(n),c=r(37),i=r.n(c),u=function(){var t=i()(o.a.mark((function t(e){var r;return o.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if("function"!=typeof e.json){t.next=11;break}return t.prev=1,t.next=4,e.json();case 4:return r=t.sent,t.abrupt("return",{message:r.message,type:r.type||"api"});case 8:return t.prev=8,t.t0=t.catch(1),t.abrupt("return",{message:t.t0.message,type:"general"});case 11:return t.abrupt("return",{message:e.message,type:e.type||"general"});case 12:case"end":return t.stop()}}),t,null,[[1,8]])})));return function(e){return t.apply(this,arguments)}}()},47:function(t,e){!function(){t.exports=this.wp.escapeHtml}()},49:function(t,e,r){"use strict";var n=r(0),o=r(1),c=(r(2),r(47));e.a=function(t){var e,r,i,u=t.error;return Object(n.createElement)("div",{className:"wc-block-error-message"},(r=(e=u).message,i=e.type,r?"general"===i?Object(n.createElement)("span",null,Object(o.__)("The following error was returned","woo-gutenberg-products-block"),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(c.escapeHTML)(r))):"api"===i?Object(n.createElement)("span",null,Object(o.__)("The following error was returned from the API","woo-gutenberg-products-block"),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(c.escapeHTML)(r))):r:Object(o.__)("An unknown error occurred which prevented the block from being updated.","woo-gutenberg-products-block")))}},5:function(t,e,r){"use strict";r.d(e,"l",(function(){return o})),r.d(e,"J",(function(){return c})),r.d(e,"P",(function(){return i})),r.d(e,"z",(function(){return u})),r.d(e,"B",(function(){return a})),r.d(e,"m",(function(){return s})),r.d(e,"A",(function(){return l})),r.d(e,"D",(function(){return b})),r.d(e,"o",(function(){return d})),r.d(e,"C",(function(){return g})),r.d(e,"n",(function(){return p})),r.d(e,"F",(function(){return f})),r.d(e,"v",(function(){return O})),r.d(e,"x",(function(){return h})),r.d(e,"s",(function(){return j})),r.d(e,"t",(function(){return m})),r.d(e,"u",(function(){return w})),r.d(e,"k",(function(){return y})),r.d(e,"L",(function(){return v})),r.d(e,"Q",(function(){return _})),r.d(e,"q",(function(){return k})),r.d(e,"r",(function(){return S})),r.d(e,"p",(function(){return E})),r.d(e,"I",(function(){return P})),r.d(e,"c",(function(){return C})),r.d(e,"w",(function(){return x})),r.d(e,"T",(function(){return D})),r.d(e,"U",(function(){return B})),r.d(e,"K",(function(){return T})),r.d(e,"a",(function(){return R})),r.d(e,"N",(function(){return M})),r.d(e,"b",(function(){return N})),r.d(e,"M",(function(){return I})),r.d(e,"E",(function(){return L})),r.d(e,"i",(function(){return V})),r.d(e,"O",(function(){return $})),r.d(e,"h",(function(){return Q})),r.d(e,"j",(function(){return U})),r.d(e,"H",(function(){return q})),r.d(e,"G",(function(){return F})),r.d(e,"S",(function(){return G})),r.d(e,"R",(function(){return W})),r.d(e,"d",(function(){return J})),r.d(e,"e",(function(){return Y})),r.d(e,"f",(function(){return K})),r.d(e,"g",(function(){return X})),r.d(e,"y",(function(){return Z})),r.d(e,"X",(function(){return et})),r.d(e,"Y",(function(){return rt})),r.d(e,"V",(function(){return nt})),r.d(e,"W",(function(){return ot}));var n=r(3),o=Object(n.getSetting)("currentUserIsAdmin",!1),c=Object(n.getSetting)("reviewRatingsEnabled",!0),i=Object(n.getSetting)("showAvatars",!0),u=Object(n.getSetting)("max_columns",6),a=Object(n.getSetting)("min_columns",1),s=Object(n.getSetting)("default_columns",3),l=Object(n.getSetting)("max_rows",6),b=Object(n.getSetting)("min_rows",1),d=Object(n.getSetting)("default_rows",3),g=Object(n.getSetting)("min_height",500),p=Object(n.getSetting)("default_height",500),f=Object(n.getSetting)("placeholderImgSrc",""),O=(Object(n.getSetting)("thumbnail_size",300),Object(n.getSetting)("isLargeCatalog")),h=Object(n.getSetting)("limitTags"),j=Object(n.getSetting)("hasProducts",!0),m=Object(n.getSetting)("hasTags",!0),w=Object(n.getSetting)("homeUrl",""),y=Object(n.getSetting)("couponsEnabled",!0),v=Object(n.getSetting)("shippingEnabled",!0),_=Object(n.getSetting)("taxesEnabled",!0),k=Object(n.getSetting)("displayItemizedTaxes",!1),S=Object(n.getSetting)("hasDarkEditorStyleSupport",!1),E=(Object(n.getSetting)("displayShopPricesIncludingTax",!1),Object(n.getSetting)("displayCartPricesIncludingTax",!1)),P=Object(n.getSetting)("productCount",0),C=Object(n.getSetting)("attributes",[]),x=Object(n.getSetting)("isShippingCalculatorEnabled",!0),A=(Object(n.getSetting)("isShippingCostHidden",!1),Object(n.getSetting)("woocommerceBlocksPhase",1)),D=Object(n.getSetting)("wcBlocksAssetUrl",""),B=Object(n.getSetting)("wcBlocksBuildUrl",""),T=Object(n.getSetting)("shippingCountries",{}),R=Object(n.getSetting)("allowedCountries",{}),M=Object(n.getSetting)("shippingStates",{}),N=Object(n.getSetting)("allowedStates",{}),I=Object(n.getSetting)("shippingMethodsExist",!1),L=Object(n.getSetting)("paymentGatewaySortOrder",[]),V=Object(n.getSetting)("checkoutShowLoginReminder",!0),H={id:0,title:"",permalink:""},z=Object(n.getSetting)("storePages",{shop:H,cart:H,checkout:H,privacy:H,terms:H}),$=z.shop.permalink,Q=z.checkout.id,U=z.checkout.permalink,q=z.privacy.permalink,F=z.privacy.title,G=z.terms.permalink,W=z.terms.title,J=z.cart.id,Y=z.cart.permalink,K=Object(n.getSetting)("checkoutAllowsGuest",!1),X=Object(n.getSetting)("checkoutAllowsSignup",!1),Z=Object(n.getSetting)("loginUrl","/wp-login.php"),tt=r(17),et=function(t,e){if(A>2)return Object(tt.registerBlockType)(t,e)},rt=function(t,e){if(A>1)return Object(tt.registerBlockType)(t,e)},nt=function(){return A>2},ot=function(){return A>1}},54:function(t,e){!function(){t.exports=this.wp.keycodes}()},6:function(t,e){!function(){t.exports=this.lodash}()},61:function(t,e,r){"use strict";var n=r(8),o=r.n(n),c=r(27),i=r.n(c),u=r(9);r(2);function a(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}e.a=function(t){var e=t.srcElement,r=t.size,n=void 0===r?24:r,c=i()(t,["srcElement","size"]);return Object(u.isValidElement)(e)&&Object(u.cloneElement)(e,function(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?a(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}({width:n,height:n},c))}},70:function(t,e){!function(){t.exports=this.wp.editor}()},75:function(t,e){!function(){t.exports=this.wp.hooks}()},77:function(t,e,r){"use strict";r.d(e,"b",(function(){return o}));var n=r(5),o=["woocommerce/product-best-sellers","woocommerce/product-category","woocommerce/product-new","woocommerce/product-on-sale","woocommerce/product-top-rated"];e.a={columns:{type:"number",default:n.m},rows:{type:"number",default:n.o},alignButtons:{type:"boolean",default:!1},categories:{type:"array",default:[]},catOperator:{type:"string",default:"any"},contentVisibility:{type:"object",default:{title:!0,price:!0,rating:!0,button:!0}},isPreview:{type:"boolean",default:!1}}},78:function(t,e){!function(){t.exports=this.ReactDOM}()},79:function(t,e){!function(){t.exports=this.wp.dom}()},80:function(t,e,r){"use strict";var n=r(8),o=r.n(n),c=r(0),i=r(1),u=(r(2),r(4));function a(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function s(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?a(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}e.a=function(t){var e=t.onChange,r=t.settings,n=r.button,o=r.price,a=r.rating,l=r.title;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product title","woo-gutenberg-products-block"),help:l?Object(i.__)("Product title is visible.","woo-gutenberg-products-block"):Object(i.__)("Product title is hidden.","woo-gutenberg-products-block"),checked:l,onChange:function(){return e(s(s({},r),{},{title:!l}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product price","woo-gutenberg-products-block"),help:o?Object(i.__)("Product price is visible.","woo-gutenberg-products-block"):Object(i.__)("Product price is hidden.","woo-gutenberg-products-block"),checked:o,onChange:function(){return e(s(s({},r),{},{price:!o}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product rating","woo-gutenberg-products-block"),help:a?Object(i.__)("Product rating is visible.","woo-gutenberg-products-block"):Object(i.__)("Product rating is hidden.","woo-gutenberg-products-block"),checked:a,onChange:function(){return e(s(s({},r),{},{rating:!a}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Add to Cart button","woo-gutenberg-products-block"),help:n?Object(i.__)("Add to Cart button is visible.","woo-gutenberg-products-block"):Object(i.__)("Add to Cart button is hidden.","woo-gutenberg-products-block"),checked:n,onChange:function(){return e(s(s({},r),{},{button:!n}))}}))}},81:function(t,e,r){"use strict";var n=r(0),o=r(1),c=r(6),i=(r(2),r(4)),u=r(5);e.a=function(t){var e=t.columns,r=t.rows,a=t.setAttributes,s=t.alignButtons;return Object(n.createElement)(n.Fragment,null,Object(n.createElement)(i.RangeControl,{label:Object(o.__)("Columns","woo-gutenberg-products-block"),value:e,onChange:function(t){var e=Object(c.clamp)(t,u.B,u.z);a({columns:Object(c.isNaN)(e)?"":e})},min:u.B,max:u.z}),Object(n.createElement)(i.RangeControl,{label:Object(o.__)("Rows","woo-gutenberg-products-block"),value:r,onChange:function(t){var e=Object(c.clamp)(t,u.D,u.A);a({rows:Object(c.isNaN)(e)?"":e})},min:u.D,max:u.A}),Object(n.createElement)(i.ToggleControl,{label:Object(o.__)("Align Last Block","woo-gutenberg-products-block"),help:s?Object(o.__)("The last inner block will be aligned vertically.","woo-gutenberg-products-block"):Object(o.__)("The last inner block will follow other content.","woo-gutenberg-products-block"),checked:s,onChange:function(){return a({alignButtons:!s})}}))}},812:function(t,e,r){t.exports=r(928)},813:function(t,e){},814:function(t,e,r){"use strict";var n=r(0),o=r(57),c=Object(n.createElement)(o.a,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(n.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),Object(n.createElement)("path",{d:"M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"}));e.a=c},83:function(t,e){!function(){t.exports=this.wp.viewport}()},84:function(t,e,r){"use strict";var n=r(10),o=r.n(n),c=r(0),i=r(1),u=r(6),a=(r(2),r(50)),s=r(4),l=r(15),b=r.n(l),d=r(37),g=r.n(d),p=r(22),f=r.n(p),O=r(25),h=r.n(O),j=r(19),m=r.n(j),w=r(23),y=r.n(w),v=r(24),_=r.n(v),k=r(12),S=r.n(k),E=r(26),P=r(42),C=r(44);function x(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=S()(t);if(e){var o=S()(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return _()(this,r)}}var A=Object(E.createHigherOrderComponent)((function(t){return function(e){y()(n,e);var r=x(n);function n(){var t;return f()(this,n),(t=r.apply(this,arguments)).state={error:null,loading:!1,categories:null},t.loadCategories=t.loadCategories.bind(m()(t)),t}return h()(n,[{key:"componentDidMount",value:function(){this.loadCategories()}},{key:"loadCategories",value:function(){var t=this;this.setState({loading:!0}),Object(P.c)().then((function(e){t.setState({categories:e,loading:!1,error:null})})).catch(function(){var e=g()(b.a.mark((function e(r){var n;return b.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Object(C.a)(r);case 2:n=e.sent,t.setState({categories:null,loading:!1,error:n});case 4:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}())}},{key:"render",value:function(){var e=this.state,r=e.error,n=e.loading,i=e.categories;return Object(c.createElement)(t,o()({},this.props,{error:r,isLoading:n,categories:i}))}}]),n}(c.Component)}),"withCategories"),D=r(49),B=(r(131),function(t){var e=t.categories,r=t.error,n=t.isLoading,l=t.onChange,b=t.onOperatorChange,d=t.operator,g=t.selected,p=t.isSingle,f=t.showReviewCount,O={clear:Object(i.__)("Clear all product categories","woo-gutenberg-products-block"),list:Object(i.__)("Product Categories","woo-gutenberg-products-block"),noItems:Object(i.__)("Your store doesn't have any product categories.","woo-gutenberg-products-block"),search:Object(i.__)("Search for product categories","woo-gutenberg-products-block"),selected:function(t){return Object(i.sprintf)(Object(i._n)("%d category selected","%d categories selected",t,"woo-gutenberg-products-block"),t)},updated:Object(i.__)("Category search results updated.","woo-gutenberg-products-block")};return r?Object(c.createElement)(D.a,{error:r}):Object(c.createElement)(c.Fragment,null,Object(c.createElement)(a.a,{className:"woocommerce-product-categories",list:e,isLoading:n,selected:g.map((function(t){return Object(u.find)(e,{id:t})})).filter(Boolean),onChange:l,renderItem:function(t){var e=t.item,r=t.search,n=t.depth,u=void 0===n?0:n,s=["woocommerce-product-categories__item"];r.length&&s.push("is-searching"),0===u&&0!==e.parent&&s.push("is-skip-level");var l=e.breadcrumbs.length?"".concat(e.breadcrumbs.join(", "),", ").concat(e.name):e.name,b=f?Object(i.sprintf)(Object(i._n)("%1$s, has %2$d review","%1$s, has %2$d reviews",e.review_count,"woo-gutenberg-products-block"),l,e.review_count):Object(i.sprintf)(Object(i._n)("%1$s, has %2$d product","%1$s, has %2$d products",e.count,"woo-gutenberg-products-block"),l,e.count),d=f?Object(i.sprintf)(Object(i._n)("%d Review","%d Reviews",e.review_count,"woo-gutenberg-products-block"),e.review_count):Object(i.sprintf)(Object(i._n)("%d Product","%d Products",e.count,"woo-gutenberg-products-block"),e.count);return Object(c.createElement)(a.b,o()({className:s.join(" ")},t,{showCount:!0,countLabel:d,"aria-label":b}))},messages:O,isHierarchical:!0,isSingle:p}),!!b&&Object(c.createElement)("div",{className:g.length<2?"screen-reader-text":""},Object(c.createElement)(s.SelectControl,{className:"woocommerce-product-categories__operator",label:Object(i.__)("Display products matching","woo-gutenberg-products-block"),help:Object(i.__)("Pick at least two categories to use this setting.","woo-gutenberg-products-block"),value:d,onChange:b,options:[{label:Object(i.__)("Any selected categories","woo-gutenberg-products-block"),value:"any"},{label:Object(i.__)("All selected categories","woo-gutenberg-products-block"),value:"all"}]})))});B.defaultProps={operator:"any",isSingle:!1};e.a=A(B)},9:function(t,e){!function(){t.exports=this.React}()},90:function(t,e,r){"use strict";r.d(e,"a",(function(){return b}));var n=r(0),o=r(7),c=r.n(o),i=r(11),u=r.n(i),a=r(5);function s(t,e){var r;if("undefined"==typeof Symbol||null==t[Symbol.iterator]){if(Array.isArray(t)||(r=function(t,e){if(!t)return;if("string"==typeof t)return l(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(t);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return l(t,e)}(t))||e&&t&&"number"==typeof t.length){r&&(t=r);var n=0,o=function(){};return{s:o,n:function(){return n>=t.length?{done:!0}:{done:!1,value:t[n++]}},e:function(t){throw t},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var c,i=!0,u=!1;return{s:function(){r=t[Symbol.iterator]()},n:function(){var t=r.next();return i=t.done,t},e:function(t){u=!0,c=t},f:function(){try{i||null==r.return||r.return()}finally{if(u)throw c}}}}function l(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}var b=function(t){return function(e){var r=e.attributes,o=r.align,i=r.contentVisibility,l=c()(o?"align".concat(o):"",{"is-hidden-title":!i.title,"is-hidden-price":!i.price,"is-hidden-rating":!i.rating,"is-hidden-button":!i.button});return Object(n.createElement)(n.RawHTML,{className:l},function(t,e){var r=t.attributes,n=r.attributes,o=r.attrOperator,c=r.categories,i=r.catOperator,l=r.orderby,b=r.products,d=r.columns||a.m,g=r.rows||a.o,p=new Map;switch(p.set("limit",g*d),p.set("columns",d),c&&c.length&&(p.set("category",c.join(",")),i&&"all"===i&&p.set("cat_operator","AND")),n&&n.length&&(p.set("terms",n.map((function(t){return t.id})).join(",")),p.set("attribute",n[0].attr_slug),o&&"all"===o&&p.set("terms_operator","AND")),l&&("price_desc"===l?(p.set("orderby","price"),p.set("order","DESC")):"price_asc"===l?(p.set("orderby","price"),p.set("order","ASC")):"date"===l?(p.set("orderby","date"),p.set("order","DESC")):p.set("orderby",l)),e){case"woocommerce/product-best-sellers":p.set("best_selling","1");break;case"woocommerce/product-top-rated":p.set("orderby","rating");break;case"woocommerce/product-on-sale":p.set("on_sale","1");break;case"woocommerce/product-new":p.set("orderby","date"),p.set("order","DESC");break;case"woocommerce/handpicked-products":if(!b.length)return"";p.set("ids",b.join(",")),p.set("limit",b.length);break;case"woocommerce/product-category":if(!c||!c.length)return"";break;case"woocommerce/products-by-attribute":if(!n||!n.length)return""}var f,O="[products",h=s(p);try{for(h.s();!(f=h.n()).done;){var j=u()(f.value,2);O+=" "+j[0]+'="'+j[1]+'"'}}catch(t){h.e(t)}finally{h.f()}return O+="]"}(e,t))}}},928:function(t,e,r){"use strict";r.r(e);var n=r(8),o=r.n(n),c=r(0),i=r(1),u=r(17),a=r(6),s=r(61),l=r(814),b=(r(813),r(22)),d=r.n(b),g=r(25),p=r.n(g),f=r(19),O=r.n(f),h=r(23),j=r.n(h),m=r(24),w=r.n(m),y=r(12),v=r.n(y),_=r(14),k=r(70),S=r(4),E=(r(2),r(80)),P=r(81),C=r(84),x=r(129),A=r(177);function D(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function B(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?D(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):D(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}function T(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=v()(t);if(e){var o=v()(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return w()(this,r)}}var R=function(t){j()(r,t);var e=T(r);function r(){var t;d()(this,r);for(var n=arguments.length,c=new Array(n),i=0;i<n;i++)c[i]=arguments[i];return t=e.call.apply(e,[this].concat(c)),o()(O()(t),"state",{changedAttributes:{},isEditing:!1}),o()(O()(t),"startEditing",(function(){t.setState({isEditing:!0,changedAttributes:{}})})),o()(O()(t),"stopEditing",(function(){t.setState({isEditing:!1,changedAttributes:{}})})),o()(O()(t),"setChangedAttributes",(function(e){t.setState((function(t){return{changedAttributes:B(B({},t.changedAttributes),e)}}))})),o()(O()(t),"save",(function(){var e=t.state.changedAttributes;(0,t.props.setAttributes)(e),t.stopEditing()})),t}return p()(r,[{key:"componentDidMount",value:function(){this.props.attributes.categories.length||this.setState({isEditing:!0})}},{key:"getInspectorControls",value:function(){var t=this,e=this.props,r=e.attributes,n=e.setAttributes,o=this.state.isEditing,u=r.columns,a=r.catOperator,s=r.contentVisibility,l=r.orderby,b=r.rows,d=r.alignButtons;return Object(c.createElement)(_.InspectorControls,{key:"inspector"},Object(c.createElement)(S.PanelBody,{title:Object(i.__)("Product Category","woo-gutenberg-products-block"),initialOpen:!r.categories.length&&!o},Object(c.createElement)(C.a,{selected:r.categories,onChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],r=e.map((function(t){return t.id})),o={categories:r};n(o),t.setChangedAttributes(o)},operator:a,onOperatorChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any",r={catOperator:e};n(r),t.setChangedAttributes(r)}})),Object(c.createElement)(S.PanelBody,{title:Object(i.__)("Layout","woo-gutenberg-products-block"),initialOpen:!0},Object(c.createElement)(P.a,{columns:u,rows:b,alignButtons:d,setAttributes:n})),Object(c.createElement)(S.PanelBody,{title:Object(i.__)("Content","woo-gutenberg-products-block"),initialOpen:!0},Object(c.createElement)(E.a,{settings:s,onChange:function(t){return n({contentVisibility:t})}})),Object(c.createElement)(S.PanelBody,{title:Object(i.__)("Order By","woo-gutenberg-products-block"),initialOpen:!1},Object(c.createElement)(x.a,{setAttributes:n,value:l})))}},{key:"renderEditMode",value:function(){var t=this,e=this.props,r=e.attributes,n=e.debouncedSpeak,o=this.state.changedAttributes,u=B(B({},r),o);return Object(c.createElement)(S.Placeholder,{icon:Object(c.createElement)(s.a,{srcElement:l.a}),label:Object(i.__)("Products by Category","woo-gutenberg-products-block"),className:"wc-block-products-grid wc-block-products-category"},Object(i.__)("Display a grid of products from your selected categories.","woo-gutenberg-products-block"),Object(c.createElement)("div",{className:"wc-block-products-category__selection"},Object(c.createElement)(C.a,{selected:u.categories,onChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],r=e.map((function(t){return t.id}));t.setChangedAttributes({categories:r})},operator:u.catOperator,onOperatorChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return t.setChangedAttributes({catOperator:e})}}),Object(c.createElement)(S.Button,{isPrimary:!0,onClick:function(){t.save(),n(Object(i.__)("Showing Products by Category block preview.","woo-gutenberg-products-block"))}},Object(i.__)("Done","woo-gutenberg-products-block")),Object(c.createElement)(S.Button,{className:"wc-block-products-category__cancel-button",isTertiary:!0,onClick:function(){t.stopEditing(),n(Object(i.__)("Showing Products by Category block preview.","woo-gutenberg-products-block"))}},Object(i.__)("Cancel","woo-gutenberg-products-block"))))}},{key:"renderViewMode",value:function(){var t=this.props,e=t.attributes,r=t.name,n=e.categories.length;return Object(c.createElement)(S.Disabled,null,n?Object(c.createElement)(k.ServerSideRender,{block:r,attributes:e,EmptyResponsePlaceholder:function(){return Object(c.createElement)(S.Placeholder,{icon:Object(c.createElement)(s.a,{srcElement:l.a}),label:Object(i.__)("Products by Category","woo-gutenberg-products-block"),className:"wc-block-products-grid wc-block-products-category"},Object(i.__)("No products were found that matched your selection.","woo-gutenberg-products-block"))}}):Object(i.__)("Select at least one category to display its products.","woo-gutenberg-products-block"))}},{key:"render",value:function(){var t=this,e=this.state.isEditing;return this.props.attributes.isPreview?A.a:Object(c.createElement)(c.Fragment,null,Object(c.createElement)(_.BlockControls,null,Object(c.createElement)(S.Toolbar,{controls:[{icon:"edit",title:Object(i.__)("Edit"),onClick:function(){return e?t.stopEditing():t.startEditing()},isActive:e}]})),this.getInspectorControls(),e?this.renderEditMode():this.renderViewMode())}}]),r}(c.Component),M=Object(S.withSpokenMessages)(R),N=r(90),I=r(77);function L(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function V(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?L(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):L(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}Object(u.registerBlockType)("woocommerce/product-category",{title:Object(i.__)("Products by Category","woo-gutenberg-products-block"),icon:{src:Object(c.createElement)(s.a,{srcElement:l.a}),foreground:"#96588a"},category:"woocommerce",keywords:[Object(i.__)("WooCommerce","woo-gutenberg-products-block")],description:Object(i.__)("Display a grid of products from your selected categories.","woo-gutenberg-products-block"),supports:{align:["wide","full"],html:!1},example:{attributes:{isPreview:!0}},attributes:V(V({},I.a),{},{editMode:{type:"boolean",default:!0},orderby:{type:"string",default:"date"}}),transforms:{from:[{type:"block",blocks:Object(a.without)(I.b,"woocommerce/product-category"),transform:function(t){return Object(u.createBlock)("woocommerce/product-category",V(V({},t),{},{editMode:!1}))}}]},deprecated:[{attributes:V(V({},I.a),{},{editMode:{type:"boolean",default:!0},orderby:{type:"string",default:"date"}}),save:Object(N.a)("woocommerce/product-category")}],edit:function(t){return Object(c.createElement)(M,t)},save:function(){return null}})},94:function(t,e){!function(){t.exports=this.wp.date}()}});