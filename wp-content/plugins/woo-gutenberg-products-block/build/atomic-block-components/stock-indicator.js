(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[14],{533:function(o,c,t){"use strict";t.r(c);var n=t(5),e=t.n(n),r=t(0),s=t(1),a=(t(2),t(8)),i=t.n(a),u=t(39),k=t(66),b=(t(553),function(o){return Object(s.sprintf)(Object(s.__)("%d left in stock","woo-gutenberg-products-block"),o)}),d=function(o,c){return c?Object(s.__)("Available on backorder","woo-gutenberg-products-block"):o?Object(s.__)("In Stock","woo-gutenberg-products-block"):Object(s.__)("Out of Stock","woo-gutenberg-products-block")};c.default=Object(k.withProductDataContext)((function(o){var c,t=o.className,n=Object(u.useInnerBlockLayoutContext)().parentClassName,s=Object(u.useProductDataContext)().product;if(!s.id||!s.is_purchasable)return null;var a=!!s.is_in_stock,k=s.low_stock_remaining,l=s.is_on_backorder;return Object(r.createElement)("div",{className:i()(t,"wc-block-components-product-stock-indicator",(c={},e()(c,"".concat(n,"__stock-indicator"),n),e()(c,"wc-block-components-product-stock-indicator--in-stock",a),e()(c,"wc-block-components-product-stock-indicator--out-of-stock",!a),e()(c,"wc-block-components-product-stock-indicator--low-stock",!!k),e()(c,"wc-block-components-product-stock-indicator--available-on-backorder",!!l),c))},k?b(k):d(a,l))}))},553:function(o,c){}}]);