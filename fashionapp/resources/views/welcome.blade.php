{{-- @extends('layouts.layout')

@section('content')
<style>
body {
    overflow-x: auto;
    overflow-y: scroll;
}
body, html {
    height: 100%;
}
@media screen and (max-width: 600px) {
  body {
    width:10000px;
  }
} 
img{
  padding-top: 20px;
  width: 100%; 
  max-height: 30%;
}
.side-bar{
  text-align: justify;
  font-size: 10px;
}
.al-button{
  padding-left: 100px;
}
.btn{
    padding: 10px 20px;
    background-color: white;
    border: 1px solid black
} 
.btn:hover{
  border: 1px solid rgb(136, 66, 66);
}

.mid-section{
  width:100%;
  padding: 100px;
  padding-right,padding-left: 500px;
  background-color: gray;
  text-align: center;
  margin-top: 30px;
  font-family: 'Dancing Script', cursive;
}
 .t-1{
  padding-top:10px;
  margin-top:25px;
} tr{
  padding-right: 15px;
} 
  .fas{ 
 float: right;
}
.card-text{
  text-align: center;
}
.far:hover{
color: red;
}
.site-wrapper-reveal {
    position: relative;
    z-index: 2;
    background: #ffffff;
}
.pt-5 {
    padding-top: 3rem !important;
}
 </style> 
@include('layouts.header')
 <div class="container">
      <div class="row">
        <div class="card-group">
        <div class="col-2">
          <ul class="list-unstyled" style="width: 100%; padding:20px;margin-top:40px" >
            <li> New<i class="fas fa-chevron-right"></i> </li>
            <li> Beauty<i class="fas fa-chevron-right"></i> </li>
            <li> Fashion<i class="fas fa-chevron-right"></i> </li>
            <li> Men<i class="fas fa-chevron-right"></i> </li>
            <li> Women<i class="fas fa-chevron-right"></i> </li>
          </ul>
        </div>
       
        <div class="col">
            <div class="card" style="width:300px; padding:10px; border:none;margin:10px">
              <img itemid="1" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
              <div class="card-body">
                <p class="card-text">20$</p>
                <button type="submit" class="btn" onclick="changePage()">order now</button>
              </div>
            </div>
        </div>
        <div class="col" >
          <div class="card" style="width:300px; padding: 10px; border:none; margin:10px" >
            <img itemid="2" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
            <div class="card-body">
              <p class="card-text">20$</p>
              <button type="submit" class="btn" onclick="changePage()">order now</button>
            </div>
          </div>
        </div>
     
        <div class="col-2"  style=" padding-top: 20px;">
         <div class="card" style="width:300px; border:none; padding-right:10px">
          <img itemid="3" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
          <div class="card-body">
            <p class="card-text">20$</p>
            <button type="submit" class="btn" onclick="changePage()">order now</button>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="card-group" style="padding-left:20px">
    <div class="col-2" style="width: 100%; padding:20px;margin-top:40px" ></div>
    <div class="col">
        <div class="card" style="width:300px; padding:10px; border:none;margin:10px">
          <img itemid="4" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
          <div class="card-body">
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <button type="submit" class="btn" onclick="changePage()">order now</button>
          </div>
        </div>
    </div>
    <div class="col" >
      <div class="card" style="width:300px; padding: 10px; border:none; margin:10px" >
        <img itemid="5" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
        <div class="card-body">
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <button type="submit" class="btn" onclick="changePage()">order now</button>
        </div>
      </div>
    </div>
 
    <div class="col-2"  style=" padding-top: 20px;">
     <div class="card" style="width:300px;border:none; padding-right:10px">
      <img itemid="6" class="card-img-top" src="{{asset('pictures/pexels-monstera-6311579.jpg')}}" style="height: 300px">
      <div class="card-body">
        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        <button type="submit" class="btn" onclick="changePage()">order now</button>
      </div>
    </div>
</div>
</div>
</div>
 </div>
 <div class="mid-section">
  <p> Fashion is the armor to survive the reality of everyday life. </p>
  <figcaption class="blockquote-footer" style="color: black">
    Bill Cunningham
  </figcaption>
</div>
<div class="site-wrapper-reveal pt-5">
  Lorem ipsum dolor sit amet.
</div>
@include('layouts.footer')
@endsection
<script>
  function changePage(){
   
    location.href = "/sale"
  }
  </script> --}}
  
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Establish early connection to external domains -->
  <link rel="preconnect" href="https://cdn.shopify.com" crossorigin>
  <link rel="preconnect" href="https://fonts.shopify.com" crossorigin>
  <link rel="preconnect" href="https://monorail-edge.shopifysvc.com">
  <link rel="preconnect" href="//ajax.googleapis.com" crossorigin /><!-- Preload onDomain stylesheets and script libraries -->
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/stylesheet.css?v=14517184581335763489" as="style">
  <link rel="preload" as="font" href="https://fonts.shopifycdn.com/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=46e9865712707bd30080491d76d2c234eb6edaf493d0019673085ea17c8bd1b4" type="font/woff2" crossorigin>
  <link rel="preload" as="font" href="https://fonts.shopifycdn.com/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=46e9865712707bd30080491d76d2c234eb6edaf493d0019673085ea17c8bd1b4" type="font/woff2" crossorigin>
  <link rel="preload" as="font" href="https://fonts.shopifycdn.com/memphis_soft_rounded/memphissoftrounded_n5.06c0440dab0314b726581bb02fb2ab1beabd20cd.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=e83017c49b159e75bcb058fb789aabe17fa247f2b14a6d3845afd6710ca24003" type="font/woff2" crossorigin>
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/eventemitter3.min.js?v=2793973835332612354" as="script">
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/theme.js?v=9880637329633590853" as="script">
  <link rel="preload" href="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" as="script">
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/ls.rias.min.js?v=1402770684781964143" as="script">
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/ls.bgset.min.js?v=6753403235288137706" as="script">
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/lazysizes.min.js?v=10352781251980287060" as="script">
  <link rel="preload" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/jquery.fancybox.js?v=7804845914269420098" as="script">

  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1058/0630/files/favicon_small_c50cade7-da99-449e-8214-6aa0180912e2_32x32.png?v=1541587032" type="image/png" />
  <link rel="canonical" href="https://www.laviye.com/" />

  <title>L&#39;AVIYE - African Clothing For Women | African Dresses, African Skirts</title>
  <meta name="description" content="African Clothing Store. Shop African dresses, African maxi skirts, Dashiki shirts, African print shoes, handbags, and accessories. Worldwide delivery via DHL." />

  
 <script type="application/ld+json">
   {
   "@context": "https://schema.org",
   "@type": "Organization",
   "name": "L&#39;AVIYE",
   "url": "/",
   
   "contactPoint": {
     "@type": "ContactPoint",
     "contactType": "customer support",
     "email": "laviyeofficial@gmail.com",
     "url": "/"
   },
   "sameAs": [
   	"https://www.laviye.com",
      "https://facebook.com/laviye",
      "https://twitter.com/laviyeofficial",
      "https://pinterest.com/laviyeofficial",
      "https://instagram.com/laviye"
     ]
   }
 </script>


  

<meta property="og:type" content="website">
<meta property="og:title" content="L&#39;AVIYE - African Clothing For Women | African Dresses, African Skirts">
<meta property="og:url" content="https://www.laviye.com/">
<meta property="og:description" content="African Clothing Store. Shop African dresses, African maxi skirts, Dashiki shirts, African print shoes, handbags, and accessories. Worldwide delivery via DHL.">

<meta property="og:site_name" content="L&#39;AVIYE">



<meta name="twitter:card" content="summary">


<meta name="twitter:site" content="@">


<meta name="twitter:title" content="L&#39;AVIYE - African Clothing For Women | African Dresses, African Skirts">
<meta name="twitter:description" content="African Clothing Store. Shop African dresses, African maxi skirts, Dashiki shirts, African print shoes, handbags, and accessories. Worldwide delivery via DHL.">


  <style data-shopify>



  :root {
    --main-family: Questrial;
    --main-weight: 400;
    --font-size: 16px;
    --nav-size: 13px;
    --heading-family: "Memphis Soft Rounded";
    --heading-weight: 500;
    --h1-size: 32px;
    --h2-size: 19px;
    --h3-size: 24px;
    --header-wrapper-background: #ffffff;
    --background: #ffffff;
    --logo-color: rgba(0,0,0,0);
    --header: #000000;
    --hello-color: #ffffff;
    --header-icons: #ffffff;
    --header-icons-hover: #dddddd;
    --mobile-header-icons: #000000;
    --header-color: #1e1e1e;
    --text-color: #1e1e1e;
    --link-color: #6566af;
    --sale-color: #cc0000;
    --dotted-color: #000000;
    --button-color: #0c0b0c;
    --button-hover: #616161;
    --button-text: #ffffff;
    --secondary-button-color: #a29f9b;
    --secondary-button-hover: #000000;
    --secondary-button-text: #ffffff;
    --direction-color: #57197c;
    --direction-background: rgba(0,0,0,0);
    --direction-hover: rgba(0,0,0,0);
    --icons: #0b0b0b;
    --icons-hover: #4e4e4e;
    --footer-border: #57197c;
    --footer-background: #edbe16;
    --footer-text: #1e1e1e;
    --footer-icons-color: #0b0b0b;
    --footer-icons-hover-color: #dddddd;
    --footer-input: #ffffff;
    --footer-input-text: #000000;
    --footer-button: #57197c;
    --footer-button-text: #ffffff;
    --nav-family: Questrial;
    --nav-weight: 400;
    --nav-color: #ffffff;
    --nav-hover-color: #edbe16;
    --nav-background-color: #000000;
    --nav-hover-link-color: #1e1e1e;
    --nav-border-color: #edbe16;
    --dropdown-background-color: #ffffff;
    --dropdown-link-color: #1e1e1e;
    --dropdown-link-hover-color: #a29f9b;
    --dropdown-min-width: 220px;
  }
  @media (max-width: 740px) {
    :root {
      --font-size: calc(16px - (16px * 0.15));
      --nav-size: calc(13px - (13px * 0.15));
      --h1-size: calc(32px - (32px * 0.15));
      --h2-size: calc(19px - (19px * 0.15));
      --h3-size: calc(24px - (24px * 0.15));
    }
  }
</style>


  <link rel="stylesheet" href="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/stylesheet.css?v=14517184581335763489" type="text/css">

  <style>
  @font-face {
  font-family: Questrial;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=46e9865712707bd30080491d76d2c234eb6edaf493d0019673085ea17c8bd1b4") format("woff2"),
       url("https://fonts.shopifycdn.com/questrial/questrial_n4.5abce10d8846bb9326c9741eaffed9667c847692.woff?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=ef3cd43c15978cca9dfe5cdec63f50989bb295a4cb3a75614f5647afd932e5cd") format("woff");
}

  @font-face {
  font-family: Questrial;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=46e9865712707bd30080491d76d2c234eb6edaf493d0019673085ea17c8bd1b4") format("woff2"),
       url("https://fonts.shopifycdn.com/questrial/questrial_n4.5abce10d8846bb9326c9741eaffed9667c847692.woff?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=ef3cd43c15978cca9dfe5cdec63f50989bb295a4cb3a75614f5647afd932e5cd") format("woff");
}

  @font-face {
  font-family: "Memphis Soft Rounded";
  font-weight: 500;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/memphis_soft_rounded/memphissoftrounded_n5.06c0440dab0314b726581bb02fb2ab1beabd20cd.woff2?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=e83017c49b159e75bcb058fb789aabe17fa247f2b14a6d3845afd6710ca24003") format("woff2"),
       url("https://fonts.shopifycdn.com/memphis_soft_rounded/memphissoftrounded_n5.6ee377152e544f0d198b03f8ed6d1511661debd7.woff?h1=bGF2aXllLmNvbQ&h2=bGF2aXllLmNvLnVr&hmac=e580e7492195e624189ce3a55dcec59f2b8500d0b43dbc22dc62b644d9884cb0") format("woff");
}

  
  
  
  </style>

  

  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/10580630/digital_wallets/dialog">
<meta name="shopify-checkout-api-token" content="d2904187d30d40c021033c5e21eab340">
<meta id="in-context-paypal-metadata" data-shop-id="10580630" data-venmo-supported="false" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="GBP">
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script id="apple-pay-shop-capabilities" type="application/json">{"shopId":10580630,"countryCode":"GB","currencyCode":"GBP","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/10580630","merchantName":"L'AVIYE","requiredBillingContactFields":["postalAddress","email","phone"],"requiredShippingContactFields":["postalAddress","email","phone"],"shippingType":"shipping","supportedNetworks":["visa","maestro","masterCard","amex"],"total":{"type":"pending","label":"L'AVIYE","amount":"1.00"}}</script>
<script id="shopify-features" type="application/json">{"accessToken":"d2904187d30d40c021033c5e21eab340","betas":["rich-media-storefront-analytics"],"domain":"www.laviye.com","predictiveSearch":true,"shopId":10580630,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 10580630,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "laviye.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"GBP","rate":"1.0"};
Shopify.country = "GB";
Shopify.theme = {"name":"Testament 22.01.21","id":118377218208,"theme_store_id":623,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.apiHost = "shop.app\/pay";</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["https:\/\/d1buj3lvc9ukyl.cloudfront.net\/intlTelInput.js?shop=laviye.myshopify.com","https:\/\/d1buj3lvc9ukyl.cloudfront.net\/laviye.myshopify.com.js?shop=laviye.myshopify.com","https:\/\/cdn.judge.me\/assets\/installed.js?shop=laviye.myshopify.com","https:\/\/js.smile.io\/v1\/smile-shopify.js?shop=laviye.myshopify.com","https:\/\/cdn.hextom.com\/js\/freeshippingbar.js?shop=laviye.myshopify.com","https:\/\/cdn2.hextom.com\/js\/smartpushmarketing.js?shop=laviye.myshopify.com","https:\/\/static.klaviyo.com\/onsite\/js\/klaviyo.js?company_id=XLG7Ms\u0026shop=laviye.myshopify.com","https:\/\/static.klaviyo.com\/onsite\/js\/klaviyo.js?company_id=XLG7Ms\u0026shop=laviye.myshopify.com","https:\/\/geolocation-recommendations.shopifycloud.com\/locale_bar\/script.js?shop=laviye.myshopify.com","https:\/\/geolocation-recommendations.shopifycloud.com\/selectors\/script.js?shop=laviye.myshopify.com","https:\/\/static.klaviyo.com\/onsite\/js\/klaviyo.js?company_id=SMsJ6V\u0026shop=laviye.myshopify.com","https:\/\/delivery-deadlines.herokuapp.com\/scripts\/delivery-deadlines.js?shop=laviye.myshopify.com","https:\/\/delivery-deadlines.herokuapp.com\/scripts\/delivery-deadlines.js?shop=laviye.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":10580630,"offset":3600,"reqid":"6f65a083-8045-4ca4-aaae-a27d5b6ef01c","pageurl":"www.laviye.com\/","u":"84b61daec28e","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'GBP';
var meta = {"page":{"pageType":"home"},"page_view_event_id":"337408bef9649fc1cad388e322041a66b6ec63a1952511588c6afe9651079f31","cart_event_id":"a61cdf5bbce15fed46093938c1966de83223e0fa1960bdf98b0b94b089f96a37"};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var hasLoggedConversion = function(token) {
    if (token) {
      return document.cookie.indexOf('loggedConversion=' + token) !== -1;
    }
    return false;
  }

  var setCookieIfConversion = function(token) {
    if (token) {
      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var first = document.getElementsByTagName('script')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      var scriptFallback = document.createElement('script');
      scriptFallback.type = 'text/javascript';
      scriptFallback.onerror = function(error) {
              var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
    
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
    
        } // XHR beacon   
    
        var xhr = new XMLHttpRequest();
    
        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
    
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 10580630,
      theme_id: 118377218208,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.d099339e56b2255cd6593b1a659afc02de223a80.min.js"});

      };
      scriptFallback.async = true;
      scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.d099339e56b2255cd6593b1a659afc02de223a80.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/trekkie.storefront.d099339e56b2255cd6593b1a659afc02de223a80.min.js';
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":10580630,"isMerchantRequest":null,"themeId":118377218208,"themeCityHash":"4216244859792579440","contentLanguage":"en","currency":"GBP"},"isServerSideCookieWritingEnabled":true},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Google Analytics":{"trackingId":"UA-105738879-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Facebook Pixel":{"pixelIds":["1732847070279366","252722085081223"],"agent":"plshopify1.2"},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    
      ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.application = "storefront-renderer";
        window.BOOMR.themeName = "Testament";
        window.BOOMR.themeVersion = "7.4.4";
        window.BOOMR.shopId = 10580630;
        window.BOOMR.themeId = 118377218208;
        window.BOOMR.url =
          "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
        var where = document.currentScript || document.getElementsByTagName("script")[0];
        var parentNode = where.parentNode;
        var promoted = false;
        var LOADER_TIMEOUT = 3000;
        function promote() {
          if (promoted) {
            return;
          }
          var script = document.createElement("script");
          script.id = "boomr-scr-as";
          script.src = window.BOOMR.url;
          script.async = true;
          parentNode.appendChild(script);
          promoted = true;
        }
        function iframeLoader(wasFallback) {
          promoted = true;
          var dom, bootstrap, iframe, iframeStyle;
          var doc = document;
          var win = window;
          window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
          bootstrap = function(parent, scriptId) {
            var script = doc.createElement("script");
            script.id = scriptId || "boomr-if-as";
            script.src = window.BOOMR.url;
            BOOMR_lstart = new Date().getTime();
            parent = parent || doc.body;
            parent.appendChild(script);
          };
          if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
            window.BOOMR.snippetMethod = "s";
            bootstrap(parentNode, "boomr-async");
            return;
          }
          iframe = document.createElement("IFRAME");
          iframe.src = "about:blank";
          iframe.title = "";
          iframe.role = "presentation";
          iframe.loading = "eager";
          iframeStyle = (iframe.frameElement || iframe).style;
          iframeStyle.width = 0;
          iframeStyle.height = 0;
          iframeStyle.border = 0;
          iframeStyle.display = "none";
          parentNode.appendChild(iframe);
          try {
            win = iframe.contentWindow;
            doc = win.document.open();
          } catch (e) {
            dom = document.domain;
            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
            win = iframe.contentWindow;
            doc = win.document.open();
          }
          if (dom) {
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
              bootstrap();
            };
            if (win.addEventListener) {
              win.addEventListener("load", win._boomrl, false);
            } else if (win.attachEvent) {
              win.attachEvent("onload", win._boomrl);
            }
          }
          doc.close();
        }
        var link = document.createElement("link");
        if (link.relList &&
          typeof link.relList.supports === "function" &&
          link.relList.supports("preload") &&
          ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
            if (!promoted) {
              iframeLoader(true);
            }
          }, LOADER_TIMEOUT);
          BOOMR_lstart = new Date().getTime();
          parentNode.appendChild(link);
        } else {
          iframeLoader(false);
        }
        function boomerangSaveLoadTime(e) {
          window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
        }
        if (window.addEventListener) {
          window.addEventListener("load", boomerangSaveLoadTime, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", boomerangSaveLoadTime);
        }
        if (document.addEventListener) {
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({
              producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
            if (!e) e=event;
            if (e.propertyName === "onBoomerangLoaded") {
              e.detail.BOOMR.init({
                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                ResourceTiming: {
                  enabled: true,
                  trackedResourceTypes: ["script", "img", "css"]
                },
              });
              e.detail.BOOMR.t_end = new Date().getTime();
            }
          });
        }
      })();
    

    
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"home"},
          "337408bef9649fc1cad388e322041a66b6ec63a1952511588c6afe9651079f31"
        );
      

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-714e2e017903fad17d4471cb27d1f2c8a83b5a7a276f92420f7e5e40dbc9136e.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script>!function(e){e.addEventListener("DOMContentLoaded",function(){var t=['form[action^="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]'].join(",");null!==e.querySelector(t)&&(window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"},(t=e.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.2/index.js"),e.body.appendChild(t))})}(document);</script>
<script integrity="sha256-pVJhp6mHZ0dJmJmDtYierarGeV2NSFSPthRwqW7blSQ=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-a55261a7a987674749989983b5889eadaac6795d8d48548fb61470a96edb9524.js" crossorigin="anonymous"></script>
<script crossorigin="anonymous" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/shopify_pay/storefront-b61f50798075db890698930c4405673937fe89353f7fea7be88b5ce16a9c0af8.js?v=20210208"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>


<style id="shopify-dynamic-checkout-cart">@media screen and (min-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 50px;
  }
}

@media screen and (max-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 180px;
  }
}
</style><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

  
<!-- Start of Judge.me Core -->
<link rel="dns-prefetch" href="https://cdn.judge.me/">
<script data-cfasync='false' class='jdgm-settings-script'>window.jdgmSettings={"pagination":5,"badge_star_color":"#faf604","hide_badge_preview_if_no_reviews":true,"widget_reviewer_name_as_initial":"last_initial","widget_star_color":"#faf604","verified_badge_placement":"left-of-reviewer-name","widget_hide_border":true,"widget_social_share":true,"widget_thumb":true,"widget_location_format":"full_country_name","all_reviews_include_out_of_store_products":true,"all_reviews_out_of_store_text":"(sold out)","enable_review_pictures":true,"widget_theme":"align","show_pictures_on_all_rev_page_mobile":true,"show_pictures_on_all_rev_page_desktop":true,"floating_tab_hide_mobile_install_preference":true,"floating_tab_button_name":"★ CUSTOMER REVIEWS ★ ","floating_tab_title":"Don't Take Our Word For It, Let customers speak for us","featured_carousel_title":"Don't Take Our Word For It, Let Customers Speak For Us","enable_review_videos":true,"preview_badge_collection_page_install_preference":true,"preview_badge_product_page_install_preference":true,"review_widget_install_preference":"above-related","review_carousel_install_preference":true,"platform":"shopify","reply_name":"L'AVIYE","footer":true,"autopublish":true,"review_dates":false,"enable_custom_form":false};</script> <style class='jdgm-settings-style'>.jdgm-xx{left:0}:not(.jdgm-prev-badge__stars)>.jdgm-star{color:#faf604}.jdgm-preview-badge .jdgm-star.jdgm-star{color:#faf604}.jdgm-prev-badge[data-average-rating='0.00']{display:none !important}.jdgm-widget .jdgm-rev__timestamp,.jdgm-carousel-item__timestamp{display:none !important}.jdgm-widget.jdgm-all-reviews-widget,.jdgm-widget .jdgm-rev-widg{border:none;padding:0}.jdgm-author-fullname{display:none !important}.jdgm-author-all-initials{display:none !important}.jdgm-rev__replier:before{content:'laviye.com'}.jdgm-rev__prod-link-prefix:before{content:'about'}.jdgm-rev__out-of-store-text:before{content:'(sold out)'}.jdgm-all-reviews-page__wrapper .jdgm-rev__content{min-height:120px}@media all and (max-width: 768px){.jdgm-widget .jdgm-revs-tab-btn{display:none}}.jdgm-preview-badge[data-template="index"]{display:none !important}.jdgm-verified-count-badget[data-from-snippet="true"]{display:none !important}.jdgm-all-reviews-text[data-from-snippet="true"]{display:none !important}
</style> <link id="judgeme_widget_align_css" rel="stylesheet" type="text/css" media="all" href="https://cdn.judge.me/shopify_v2/align.css">

  
  
  
  <style class='jdgm-miracle-styles'>
  @-webkit-keyframes jdgm-spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);-ms-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes jdgm-spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);-ms-transform:rotate(359deg);transform:rotate(359deg)}}@font-face{font-family:'JudgemeStar';src:url("data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAScAA0AAAAABrAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAEgAAAABoAAAAcbyQ+3kdERUYAAARgAAAAHgAAACAAMwAGT1MvMgAAAZgAAABGAAAAVi+vS9xjbWFwAAAB8AAAAEAAAAFKwBMjvmdhc3AAAARYAAAACAAAAAj//wADZ2x5ZgAAAkAAAAEJAAABdH33LXtoZWFkAAABMAAAAC0AAAA2BroQKWhoZWEAAAFgAAAAHAAAACQD5QHQaG10eAAAAeAAAAAPAAAAFAYAAABsb2NhAAACMAAAAA4AAAAOAO4AeG1heHAAAAF8AAAAHAAAACAASgAvbmFtZQAAA0wAAADeAAABkorWfVZwb3N0AAAELAAAACkAAABEp3ubLXgBY2BkYADhPPP4OfH8Nl8ZuJkYQODS2fRrCPr/aSYGxq1ALgcDWBoAO60LkwAAAHgBY2BkYGDc+v80gx4TAwgASaAICmABAFB+Arl4AWNgZGBgYGPQYWBiAAIwyQgWc2AAAwAHVQB6eAFjYGRiYJzAwMrAwejDmMbAwOAOpb8ySDK0MDAwMbByMsCBAAMCBKS5pjA4PGB4wMR44P8BBj3GrQymQGFGkBwAjtgK/gAAeAFjYoAAEA1jAwAAZAAHAHgB3crBCcAwDEPRZydkih567CDdf4ZskmLwFBV8xBfCaC4BXkOUmx4sU0h2ngNb9V0vQCxaRKIAevT7fGWuBrEAAAAAAAAAAAA0AHgAugAAeAF9z79Kw1AUx/FzTm7un6QmJtwmQ5Bg1abgEGr/BAqlU6Gju+Cgg1MkQ/sA7Vj7BOnmO/gUvo2Lo14NqIO6/IazfD8HEODtmQCfoANwNsyp2/GJt3WKQrd1NLiYYWx2PBqOsmJMEOznPOTzfSCrhAtbbLdmeFLJV9eKd63WLrZcIcuaEVdssWCKM6pLCfTVOYbz/0pNSMSZKLIZpvh78sAUH6PlMrreTCabP9r+Z/puPZ2ur/RqpQHgh+MIegCnXeM4MRAPjYN//5tj4ZtTjkFqEdmeMShlEJ7tVAly2TAkx6R68Fl4E/aVvn8JqHFQ4JS1434gXKcuL31dDhzs3YbsEOAd/IU88gAAAHgBfY4xTgMxEEVfkk0AgRCioKFxQYd2ZRtpixxgRU2RfhU5q5VWseQ4JdfgAJyBlmNwAM7ABRhZQ0ORwp7nr+eZAa54YwYg9zm3ynPOeFRe8MCrciXOh/KSS76UV5L/iDmrLiS5AeU519wrL3jmSbkS5115yR2fyivJv9kx0ZMZ2RLZw27q87iNQi8EBo5FSPIMw3HqBboi5lKTGAGDp8FKXWP+t9TU01Lj5His1Ba6uM9dTEMwvrFmbf5GC/q2drW3ruXUhhsCiQOjznFlCzYhHUZp4xp76vsvQh89CQAAeAFjYGJABowM6IANLMrEyMTIzMjCXpyRWJBqZshWXJJYBKOMAFHFBucAAAAAAAAB//8AAngBY2BkYGDgA2IJBhBgAvKZGViBJAuYxwAABJsAOgAAeAFjYGBgZACCk535hiD60tn0azAaAEqpB6wAAA==") format("woff");font-weight:normal;font-style:normal}.jdgm-star{font-family:'JudgemeStar';display:inline !important;text-decoration:none !important;padding:0 4px 0 0 !important;margin:0 !important;font-weight:bold;opacity:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.jdgm-star:hover{opacity:1}.jdgm-star:last-of-type{padding:0 !important}.jdgm-star.jdgm--on:before{content:"\e000"}.jdgm-star.jdgm--off:before{content:"\e001"}.jdgm-star.jdgm--half:before{content:"\e002"}.jdgm-widget *{margin:0;line-height:1.4;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-overflow-scrolling:touch}.jdgm-hidden{display:none !important;visibility:hidden !important}.jdgm-temp-hidden{display:none}.jdgm-spinner{width:40px;height:40px;margin:auto;border-radius:50%;border-top:2px solid #eee;border-right:2px solid #eee;border-bottom:2px solid #eee;border-left:2px solid #ccc;-webkit-animation:jdgm-spin 0.8s infinite linear;animation:jdgm-spin 0.8s infinite linear}.jdgm-prev-badge{display:block !important}

</style>


  
  
   
<script data-cfasync="false" type="text/javascript" async src="https://cdn.judge.me/shopify_v2.js"></script>
<link rel="stylesheet" type="text/css" media="nope!" href="https://cdn.judge.me/shopify_v2.css"
      onload="this.media='all',function(){var d=document,e=d.createEvent('Event');e.initEvent('jdgm.doneLoadingCss',!0,!0),d.dispatchEvent(e)}();">
<noscript><link rel="stylesheet" type="text/css" media="all" href="https://cdn.judge.me/shopify_v2.css"></noscript>
<!-- End of Judge.me Core -->


<meta property="og:image" content="https://cdn.shopify.com/s/files/1/1058/0630/files/logo.jpg?height=628&pad_color=ffffff&v=1621277113&width=1200" />
<meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/1058/0630/files/logo.jpg?height=628&pad_color=ffffff&v=1621277113&width=1200" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
</head>
<body class="gridlock index js-slideout-toggle-wrapper">
  <div class="js-slideout-overlay site-overlay"></div>

  <aside class="slideout slideout__drawer-left" data-wau-slideout="mobile-navigation" id="slideout-mobile-navigation">
    <div id="shopify-section-mobile-navigation" class="shopify-section"><nav class="mobile-menu" role="navigation" data-section-id="mobile-navigation" data-section-type="mobile-navigation">
  <div class="slideout__trigger--close">
    <button class="slideout__trigger-mobile-menu js-slideout-close" data-slideout-direction="left" aria-label="Close navigation" tabindex="0" type="button" name="button">
      <div class="icn-close"></div>
    </button>
  </div>
  
    
        <div class="mobile-menu__block mobile-menu__cart-status" >
          <a class="mobile-menu__cart-icon" href="/cart">
            My Cart
            <span class="mobile-menu__cart-count item_count">0</span>

            
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            
          </a>
        </div>
    
  
    
        <ul class="mobile-menu__block mobile-menu__accordion accordion" id="accordion" >
          
          
            
              <li class="mobile-menu__item"><a href="/collections/new-in">NEW ARRIVALS</a></li>
            
          
            
              <li class="mobile-menu__item accordion__toggle" aria-haspopup="true" aria-expanded="false">
                <a href="/collections/women">WOMENSWEAR</a>
              </li>
              <li class="accordion__content">
                <ul class="accordion__submenu-1">
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/clothing">View All African Clothing for Women</a>
                  </li>
                  
                  
                  
                  <li class="accordion__toggle-2" aria-haspopup="true" aria-expanded="false">
                    <a href="/collections/dresses">African Dresses</a>
                  </li>
                  <li class="accordion__content-2">
                    <ul class="accordion__submenu-2">
                      
                      <li class="mobile-menu__item"><a href="/collections/african-maxi-dress">African Print Maxi Dresses</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/african-mid-length-dress">African Print Midi Dresses</a></li>
                      
                    </ul>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/tops">African Print Tops</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/skirts">African Print Skirts</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/jumpsuits-playsuits">African Print Jumpsuits &amp; Rompers</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/jackets">African Print Jackets &amp; Blazers</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/laviye-african-print-infinity-multiway-convertible-dresses-clothing">African Print Infinity Collection</a>
                  </li>
                  
                  
                  
                  <li class="accordion__toggle-2" aria-haspopup="true" aria-expanded="false">
                    <a href="/collections/swimwear">SWIMWEAR</a>
                  </li>
                  <li class="accordion__content-2">
                    <ul class="accordion__submenu-2">
                      
                      <li class="mobile-menu__item"><a href="/collections/swimwear">View All African Print Swimwear & Beachwear</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/swimwear-sets">African Print Swimwear Sets</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/swimsuit">African Print Swimsuits & Bikinis</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/kimono-coverup">African Print Coverups & Kimonos</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/swimwear-headwrap">African Print Headwraps</a></li>
                      
                    </ul>
                  </li>
                  
                  
                </ul>
              </li>
            
          
            
              <li class="mobile-menu__item accordion__toggle" aria-haspopup="true" aria-expanded="false">
                <a href="/collections/african-mens-clothing-online">MENSWEAR</a>
              </li>
              <li class="accordion__content">
                <ul class="accordion__submenu-1">
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-mens-clothing-online">View All African Print Clothing for Men</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-shirts-for-men">African Shirts for Men</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-mens-blazer">African Blazers for Men</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-jackets-for-men">African Jackets for Men</a>
                  </li>
                  
                  
                  
                  <li class="accordion__toggle-2" aria-haspopup="true" aria-expanded="false">
                    <a href="/collections/african-print-accessories-for-men">African Accessories for Men</a>
                  </li>
                  <li class="accordion__content-2">
                    <ul class="accordion__submenu-2">
                      
                      <li class="mobile-menu__item"><a href="/collections/african-print-flower-pins">African Print Flower Pins</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/bow-ties">African Print Bowties</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/neckties">African Print Neckties</a></li>
                      
                    </ul>
                  </li>
                  
                  
                </ul>
              </li>
            
          
            
              <li class="mobile-menu__item"><a href="/collections/matching-african-outfits-for-couples">HIS &amp; HERS</a></li>
            
          
            
              <li class="mobile-menu__item accordion__toggle" aria-haspopup="true" aria-expanded="false">
                <a href="/collections/shoes">SHOES</a>
              </li>
              <li class="accordion__content">
                <ul class="accordion__submenu-1">
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/shoes">View All African Print Shoes</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/shoe-sets">African Print Shoes Set</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/high-heels">African Print Heels</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-sneakers">African Print Sneakers</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/flat-shoes">African Print Slides</a>
                  </li>
                  
                  
                </ul>
              </li>
            
          
            
              <li class="mobile-menu__item accordion__toggle" aria-haspopup="true" aria-expanded="false">
                <a href="/collections/african-print-accessories">ACCESSORIES</a>
              </li>
              <li class="accordion__content">
                <ul class="accordion__submenu-1">
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-accessories">View All African Print Accessories </a>
                  </li>
                  
                  
                  
                  <li class="accordion__toggle-2" aria-haspopup="true" aria-expanded="false">
                    <a href="/collections/african-print-handbags">African Print Bags </a>
                  </li>
                  <li class="accordion__content-2">
                    <ul class="accordion__submenu-2">
                      
                      <li class="mobile-menu__item"><a href="/collections/clutch-purses">African Print Purses</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/african-print-handbag">African Print Handbags</a></li>
                      
                      <li class="mobile-menu__item"><a href="/collections/african-print-backpacks">African Print Backpacks</a></li>
                      
                    </ul>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-headwraps">African Print Headwraps</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-masks">African Print Masks</a>
                  </li>
                  
                  
                  
                  <li class="mobile-menu__item">
                    <a href="/collections/african-print-accessories-for-men">Accessories for Men</a>
                  </li>
                  
                  
                </ul>
              </li>
            
          
            
              <li class="mobile-menu__item"><a href="/collections/sale">SALE</a></li>
            
          
            
              <li class="mobile-menu__item"><a href="/pages/reviews">CUSTOMER REVIEWS</a></li>
            
          
          
            
              <li class="mobile-menu__item"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<a href="/account/login">Log In/Create Account</a></li>
            
          
        </ul>
      
  
    
        <div class="mobile-menu__block mobile-menu__search" >
          <form action="/search" method="get">
            <input type="text" name="q" id="q" placeholder="Search" />
            
              <input type="hidden" name="type" value="product">
            
          </form>
        </div>
      
  
    
        <div class="mobile-menu__block mobile-menu__social text-center" >
          <ul class="social-icons__list">
  
    <li>
      <a href="https://facebook.com/laviye" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="https://instagram.com/laviye" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="https://twitter.com/laviyeofficial" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="https://pinterest.com/laviyeofficial" target="_blank"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="http://laviyeofficial.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="https://youtube.com/laviyeofficial" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
    <li>
      <a href="//snapchat.com/add/laviye" target="_blank"><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i></a>
    </li>
  
  
</ul>

          <style>
            .mobile-menu__social i {
              color: #000000;
            }
            .mobile-menu__social i:hover {
              color: #313131;
            }
          </style>
        </div>
      
  
    
        <div class="mobile-menu__block mobile-menu__featured-text text-center" >
          
        </div>
      
  
  <style>
    .mobile-menu {
      background: #ffffff;
      height: 100vh;
    }
    .slideout__drawer-left,
    .mobile-menu__search input {
      background: #ffffff;
    }
    .mobile-menu .mobile-menu__item,
    .mobile-menu .accordion__toggle,
    .mobile-menu .accordion__toggle-2 {
      border-bottom: 1px solid #000000;
    }
    .mobile-menu__search form input,
    .mobile-menu__cart-icon,
    .mobile-menu__accordion > .mobile-menu__item:first-child {
      border-color: #000000;
    }
    .mobile-menu .mobile-menu__item a,
    .mobile-menu .accordion__toggle a,
    .mobile-menu .accordion__toggle-2 a,
    .mobile-menu .accordion__submenu-2 a,
    .mobile-menu .accordion__submenu-1 a,
    .mobile-menu__cart-status a,
    .accordion__toggle-2:after,
    .accordion__toggle:after,
    .mobile-menu .mobile-menu__item i,
    .mobile-menu__featured-text p,
    .mobile-menu__search input,
    .mobile-menu__search input:focus {
      color: #000000;
    }
    .mobile-menu__search ::-webkit-input-placeholder { /* WebKit browsers */
      color: #000000;
    }
    .mobile-menu__search :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
      color: #000000;
    }
    .mobile-menu__search ::-moz-placeholder { /* Mozilla Firefox 19+ */
      color: #000000;
    }
    .mobile-menu__search :-ms-input-placeholder { /* Internet Explorer 10+ */
      color: #000000;
    }
    .mobile-menu .accordion__toggle-2 a,
    .mobile-menu .accordion__submenu-2 a,
    .mobile-menu .accordion__submenu-1 a,
    .accordion__toggle-2:after {
     opacity: 0.9;
    }
    .mobile-menu .slideout__trigger-mobile-menu .icn-close:after,
    .mobile-menu .slideout__trigger-mobile-menu .icn-close:before {
      border-color: #000000 !important;
    }
    .accordion__toggle:after,
    .accordion__toggle-2:after { border-left: 1px solid #000000; }
  </style>
</nav>


</div>
  </aside>

  <main class="site-wrap" role="main">
    <div class="page-wrap">
      <div id="shopify-section-header" class="shopify-section">






<div class="header-section nav__option-full js-header" data-section-id="header" data-section-type="header-section">
  <header>
    
    <div class="gridlock-fluid">
      <div class="row">
        
        <div class="row" id="upper-content">
          <ul id="social-icons" class="desktop-4 tablet-6 mobile-3">
            <li><a href="https://facebook.com/laviye" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://instagram.com/laviye" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/laviyeofficial" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://pinterest.com/laviyeofficial" target="_blank"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="http://laviyeofficial.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://youtube.com/laviyeofficial" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="//snapchat.com/add/laviye" target="_blank"><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i></a></li>
            
          </ul><div id="hello" class="desktop-4 tablet-6 mobile-3">
                <p>1-3 DAY STANDARD DELIVERY</p>
            </div><ul id="cart" class="desktop-4  tablet-6 mobile-3">
            <li class="mobile-menu__trigger">
              <div class="slideout__trigger--open text-left">
                <button class="slideout__trigger-mobile-menu js-slideout-open" data-wau-slideout-target="mobile-navigation" data-slideout-direction="left" aria-label="Open navigation" tabindex="0" type="button" name="button">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
              </div>
            </li>
            <li class="mobile-menu__logo">
              
<a href="/"><img src="//cdn.shopify.com/s/files/1/1058/0630/files/logo_500x.jpg?v=1621277113" alt="L&#39;AVIYE" itemprop="logo"></a>
              
            </li>
            <li class="seeks">
              <a href="#" class="search__toggle js-search-trigger"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>
              <form action="/search" method="get" id="searchbox" class="animate-hide">
                <input type="text" name="q" class="search-input" id="header-search" placeholder="Search" />
                
                <input type="hidden" name="type" value="product">
                
              </form>
            </li>
            
              
                <li class="cust"><a href="/account/login"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a></li>
              
            
<li class="curr-selector"><form method="post" action="/localization" id="localization_form" accept-charset="UTF-8" class="selectors-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" /><div class="selectors-form__item">
                    <h4 class="visually-hidden" id="currency-heading">
                      Currency
                    </h4>

                    <div class="disclosure" data-disclosure-currency>
                      <button type="button" class="disclosure__toggle" aria-expanded="false" aria-controls="currency-list" aria-describedby="currency-heading" data-disclosure-toggle>
                        GBP £</button>
                      <ul id="currency-list" class="disclosure-list" data-disclosure-list>
                        
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="AUD" data-disclosure-option>
                              AUD $</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="CAD" data-disclosure-option>
                              CAD $</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="DKK" data-disclosure-option>
                              DKK kr.</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="EUR" data-disclosure-option>
                              EUR €</a>
                          </li>
                          <li class="disclosure-list__item disclosure-list__item--current">
                            <a class="disclosure-list__option" href="#" aria-current="true" data-value="GBP" data-disclosure-option>
                              GBP £</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="HKD" data-disclosure-option>
                              HKD $</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="JPY" data-disclosure-option>
                              JPY ¥</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="NZD" data-disclosure-option>
                              NZD $</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="PHP" data-disclosure-option>
                              PHP ₱</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="SEK" data-disclosure-option>
                              SEK kr</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="SGD" data-disclosure-option>
                              SGD $</a>
                          </li>
                          <li class="disclosure-list__item ">
                            <a class="disclosure-list__option" href="#"  data-value="USD" data-disclosure-option>
                              USD $</a>
                          </li></ul>
                      <input type="hidden" name="currency_code" id="CurrencySelector" value="GBP" data-disclosure-input/>
                    </div>
                  </div></form></li><li class="my-cart-link-container"><a class="my-cart-link" href="/cart"><span class="my-cart-text">MY CART&nbsp; </span><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>&nbsp; <span class="item_count">0</span></a></li>
          </ul>
        </div>
        
      </div>
    </div>
    
  </header>
  <div class="js-header-wrapper header-wrapper">
    
      <div class="row">
        
<div id="logo" class="desktop-12 tablet-6 mobile-3">
  
<a href="/">
    <img src="//cdn.shopify.com/s/files/1/1058/0630/files/logo_600x.jpg?v=1621277113" alt="L&#39;AVIYE" itemprop="logo">
  </a>
  
</div>

      </div>
    
    <div class="clear"></div>
    <nav aria-label="Primary Navigation" class="navigation js-navigation" data-sticky-class="navigation--sticky">
      
      
        <ul role="menubar" aria-label="Primary Navigation" id="main-nav" class="navigation__menu  row">
        	
          
            


  <li class="navigation__menuitem" role="none">
    <a class="navigation__menulink js-menu-link" role="menuitem" href="/collections/new-in">NEW ARRIVALS</a>
  </li>


          
            


  <li class="navigation__menuitem navigation__menuitem--dropdown js-menuitem" role="none">
    <a class="navigation__menulink js-menu-link js-aria-expand js-open-dropdown-on-key" role="menuitem" aria-haspop="true" aria-expanded="false" href="/collections/women">WOMENSWEAR</a>
    <ul role="menu" aria-label="WOMENSWEAR" class="dropdown js-dropdown">
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/clothing">View All African Clothing for Women</a>
          </li>
        
      
        
        <li role="none" class="dropdown__menuitem dropdown__menuitem--nested js-menuitem-with-nested-dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="dropdown__menulink js-aria-expand js-menu-link" role="menuitem" href="/collections/dresses">African Dresses</a>
          <ul role="menu" class="dropdown dropdown--nested js-dropdown-nested">
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/african-maxi-dress">African Print Maxi Dresses</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/african-mid-length-dress">African Print Midi Dresses</a>
              </li>
            
          </ul>
        </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/tops">African Print Tops</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/skirts">African Print Skirts</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/jumpsuits-playsuits">African Print Jumpsuits & Rompers</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/jackets">African Print Jackets & Blazers</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/laviye-african-print-infinity-multiway-convertible-dresses-clothing">African Print Infinity Collection</a>
          </li>
        
      
        
        <li role="none" class="dropdown__menuitem dropdown__menuitem--nested js-menuitem-with-nested-dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="dropdown__menulink js-aria-expand js-menu-link" role="menuitem" href="/collections/swimwear">SWIMWEAR</a>
          <ul role="menu" class="dropdown dropdown--nested js-dropdown-nested">
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/swimwear">View All African Print Swimwear & Beachwear</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/swimwear-sets">African Print Swimwear Sets</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/swimsuit">African Print Swimsuits & Bikinis</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/kimono-coverup">African Print Coverups & Kimonos</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/swimwear-headwrap">African Print Headwraps</a>
              </li>
            
          </ul>
        </li>
        
      
    </ul>
  </li>


          
            


  <li class="navigation__menuitem navigation__menuitem--dropdown js-menuitem" role="none">
    <a class="navigation__menulink js-menu-link js-aria-expand js-open-dropdown-on-key" role="menuitem" aria-haspop="true" aria-expanded="false" href="/collections/african-mens-clothing-online">MENSWEAR</a>
    <ul role="menu" aria-label="MENSWEAR" class="dropdown js-dropdown">
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-mens-clothing-online">View All African Print Clothing for Men</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-shirts-for-men">African Shirts for Men</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-mens-blazer">African Blazers for Men</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-jackets-for-men">African Jackets for Men</a>
          </li>
        
      
        
        <li role="none" class="dropdown__menuitem dropdown__menuitem--nested js-menuitem-with-nested-dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="dropdown__menulink js-aria-expand js-menu-link" role="menuitem" href="/collections/african-print-accessories-for-men">African Accessories for Men</a>
          <ul role="menu" class="dropdown dropdown--nested js-dropdown-nested">
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/african-print-flower-pins">African Print Flower Pins</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/bow-ties">African Print Bowties</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/neckties">African Print Neckties</a>
              </li>
            
          </ul>
        </li>
        
      
    </ul>
  </li>


          
            


  <li class="navigation__menuitem" role="none">
    <a class="navigation__menulink js-menu-link" role="menuitem" href="/collections/matching-african-outfits-for-couples">HIS & HERS</a>
  </li>


          
            


  <li class="navigation__menuitem navigation__menuitem--dropdown js-menuitem" role="none">
    <a class="navigation__menulink js-menu-link js-aria-expand js-open-dropdown-on-key" role="menuitem" aria-haspop="true" aria-expanded="false" href="/collections/shoes">SHOES</a>
    <ul role="menu" aria-label="SHOES" class="dropdown js-dropdown">
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/shoes">View All African Print Shoes</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/shoe-sets">African Print Shoes Set</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/high-heels">African Print Heels</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-sneakers">African Print Sneakers</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/flat-shoes">African Print Slides</a>
          </li>
        
      
    </ul>
  </li>


          
            


  <li class="navigation__menuitem navigation__menuitem--dropdown js-menuitem" role="none">
    <a class="navigation__menulink js-menu-link js-aria-expand js-open-dropdown-on-key" role="menuitem" aria-haspop="true" aria-expanded="false" href="/collections/african-print-accessories">ACCESSORIES</a>
    <ul role="menu" aria-label="ACCESSORIES" class="dropdown js-dropdown">
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-accessories">View All African Print Accessories </a>
          </li>
        
      
        
        <li role="none" class="dropdown__menuitem dropdown__menuitem--nested js-menuitem-with-nested-dropdown" aria-haspopup="true" aria-expanded="false">
          <a class="dropdown__menulink js-aria-expand js-menu-link" role="menuitem" href="/collections/african-print-handbags">African Print Bags </a>
          <ul role="menu" class="dropdown dropdown--nested js-dropdown-nested">
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/clutch-purses">African Print Purses</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/african-print-handbag">African Print Handbags</a>
              </li>
            
              <li class="dropdown__menuitem" role="none">
                <a class="dropdown__menulink js-menu-link-inside-dropdown" role="menuitem" href="/collections/african-print-backpacks">African Print Backpacks</a>
              </li>
            
          </ul>
        </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-headwraps">African Print Headwraps</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-masks">African Print Masks</a>
          </li>
        
      
        
          <li class="dropdown__menuitem" role="none">
            <a class="dropdown__menulink js-menu-link" role="menuitem" href="/collections/african-print-accessories-for-men">Accessories for Men</a>
          </li>
        
      
    </ul>
  </li>


          
            


  <li class="navigation__menuitem" role="none">
    <a class="navigation__menulink js-menu-link" role="menuitem" href="/collections/sale">SALE</a>
  </li>


          
            


  <li class="navigation__menuitem" role="none">
    <a class="navigation__menulink js-menu-link" role="menuitem" href="/pages/reviews">CUSTOMER REVIEWS</a>
  </li>


          
        </ul>
        
      
    </nav>
    <div class="clear header-spacer"></div>
  </div>
  <style>
    
      @media screen and ( min-width: 740px ) {
        #logo img { max-width: 130px; }
      }
    
    #hello p,
    ul#cart li a {
      font-size: 12px;
      margin-bottom: 0;
    }
		.navigation {
			border-top: 0px solid var(--nav-border-color);
			border-bottom: 0px solid var(--nav-border-color);
		}
		.navigation__menuitem {
			line-height: 35px;
		}
		@media only screen and (min-width: 980px) {
			.navigation--sticky.navigation + .header-spacer {
				margin-top: 35px;
			}
		}
		.dropdown,
    .megamenu {
			top: 35px;
		}
    
      ul.navigation__menu.row,
      .nav-inner-container {
          width: 98% !important;
      }
    
    

    

    @media screen and (max-width: 740px) {
      .header-wrapper {
        
					margin-top: 110px;
        
      }
    }

		@media screen and (min-width: 740px and max-width: 980px) {
			.header-wrapper {
        
					margin-top: 110px;
        
      }
		}
  </style>

</div>


</div>
      

      <div class="content-wrapper">
        
          <div class="index-sections">
  <!-- BEGIN content_for_index --><div id="shopify-section-1480352639511" class="shopify-section"><section class="index-section slideshow-section animate wow fadeIn no-fouc" data-section-id="1480352639511" data-section-type="slideshow-section">
  
  


    
    <div class="slideshow flickity__section js-slideshow" id="slideshow--1480352639511" data-flickity='{
      "wrapAround":true,
      "dragThreshold":"15",
      "pauseAutoPlayOnHover":false,
      "autoPlay": 6000,
      "fade": true,
      "pageDots":true,
      "prevNextButtons":false
   }'>
      
        <div id="slide--7779d6b6-cc28-4615-8f9c-cebeb20f16c5" data-block-id="7779d6b6-cc28-4615-8f9c-cebeb20f16c5" class="slide--7779d6b6-cc28-4615-8f9c-cebeb20f16c5 slideshow__slide" data-slider-index="0" >
          <a href="/collections/new-in">
          
            <div class="slideshow__slide-desktop">
              
  

  <div class="box-ratio" style="padding-bottom: 46.875%;">
    <img class="lazyload lazyload-fade "
      id="514585559200"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_29_{width}x.png?v=1620213800"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_29_500x.png?v=1620213800"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_29_1024x.png?v=1620213800" alt="" class="slideshow__image slideshow__image--7779d6b6-cc28-4615-8f9c-cebeb20f16c5">
              </noscript>
            </div>
          
          </a>
          
          
          
          <style>
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 .slideshow__caption-wrapper {
              
              
              
              
                background: transparent;
              
              text-align: left;
            }
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 h2.slideshow__title,
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 p {
              color: rgba(0,0,0,0);
            }
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 .slideshow__btn-wrapper a {
              color: #ffffff;
              background: rgba(0,0,0,0);
              border: 1px solid rgba(0,0,0,0);
            }
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 .slideshow__btn-wrapper a:hover {
              color: rgba(0,0,0,0);
            }
            .slideshow__caption.slide-7779d6b6-cc28-4615-8f9c-cebeb20f16c5 {
              top: 50%;
              left: 50%;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              -moz-transform: translate(-50%, -50%);
              -o-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
            }
            @media screen and (max-width: 740px) {

              
                .slide--7779d6b6-cc28-4615-8f9c-cebeb20f16c5 {
                  background-image: url('//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_29_600x.png?v=1620213800') !important;
                  opacity: 1;
                  
                  padding-bottom: 46.875% !important;
                  
                  background-size: contain;
                  bacground-position: top center;
                  background-repeat: no-repeat;
                }
                .slide--7779d6b6-cc28-4615-8f9c-cebeb20f16c5 > a {
                   display: block;
                   width: 100%;
                   padding-bottom: 100%;
                   position: absolute;
                   top: 0;
                   height: 100%;
                 }
                .slide--7779d6b6-cc28-4615-8f9c-cebeb20f16c5 .slideshow__slide-desktop {
                  display: none;
                }
              
              
              
            }
          </style>
        </div>
      
        <div id="slide--d4d428ef-aef5-462a-9bf3-558f9a587f1f" data-block-id="d4d428ef-aef5-462a-9bf3-558f9a587f1f" class="slide--d4d428ef-aef5-462a-9bf3-558f9a587f1f slideshow__slide" data-slider-index="1" >
          <a href="https://www.laviye.com/collections/matching-african-outfits-for-couples">
          
            <div class="slideshow__slide-desktop">
              
  

  <div class="box-ratio" style="padding-bottom: 46.875%;">
    <img class="lazyload lazyload-fade "
      id="479052071072"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_11_{width}x.png?v=1611602054"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_11_500x.png?v=1611602054"alt="African Clothing for Men and Women - LAVIYE ">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_11_1024x.png?v=1611602054" alt="African Clothing for Men and Women - LAVIYE " class="slideshow__image slideshow__image--d4d428ef-aef5-462a-9bf3-558f9a587f1f">
              </noscript>
            </div>
          
          </a>
          
          
          
          <style>
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f .slideshow__caption-wrapper {
              
              
              
              
                background: transparent;
              
              text-align: left;
            }
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f h2.slideshow__title,
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f p {
              color: rgba(0,0,0,0);
            }
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f .slideshow__btn-wrapper a {
              color: rgba(0,0,0,0);
              background: rgba(0,0,0,0);
              border: 1px solid rgba(0,0,0,0);
            }
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f .slideshow__btn-wrapper a:hover {
              color: rgba(0,0,0,0);
            }
            .slideshow__caption.slide-d4d428ef-aef5-462a-9bf3-558f9a587f1f {
              top: 50%;
              left: 50%;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              -moz-transform: translate(-50%, -50%);
              -o-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
            }
            @media screen and (max-width: 740px) {

              
                .slide--d4d428ef-aef5-462a-9bf3-558f9a587f1f {
                  background-image: url('//cdn.shopify.com/s/files/1/1058/0630/files/LAVIYE_Website_Homepage_Banner_11_600x.png?v=1611602054') !important;
                  opacity: 1;
                  
                  padding-bottom: 46.875% !important;
                  
                  background-size: contain;
                  bacground-position: top center;
                  background-repeat: no-repeat;
                }
                .slide--d4d428ef-aef5-462a-9bf3-558f9a587f1f > a {
                   display: block;
                   width: 100%;
                   padding-bottom: 100%;
                   position: absolute;
                   top: 0;
                   height: 100%;
                 }
                .slide--d4d428ef-aef5-462a-9bf3-558f9a587f1f .slideshow__slide-desktop {
                  display: none;
                }
              
              
              
            }
          </style>
        </div>
      
    </div>
    

  

  <style>
    #slideshow--1480352639511 .slideshow__caption h2.slideshow__title {
      font-size: 22px;
    }
    #slideshow--1480352639511 .slideshow__caption p {
      font-size: 14px;
    }
    #slideshow--1480352639511 .slideshow__btn-wrapper a {
      font-size: 14px;
    }
  </style>

</section>
<div class="clear"></div>


</div><div id="shopify-section-1521604513411" class="shopify-section"><section class="index-section gallery__image-section animate wow fadeIn no-fouc" data-section-id="1521604513411" >

  <div class="row">

    
      
<div class="gallery__item floating__text desktop-4 tablet-2 mobile-3 item-1521604513411-0" >
        <div class="gallery__item-container">
          <a href="/collections/women">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497533911200"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Womens_Clothing_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Womens_Clothing_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Womens_Clothing_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1521604513411-0 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1521604513411-0 .gallery__item-container h3,
        .gallery__item.item-1521604513411-0 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1521604513411-0 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1521604513411-0 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    
      
<div class="gallery__item floating__text desktop-4 tablet-2 mobile-3 item-1521604513411-1" >
        <div class="gallery__item-container">
          <a href="/collections/african-mens-clothing-online">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497534009504"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Mens_Clothing_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Mens_Clothing_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Mens_Clothing_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1521604513411-1 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1521604513411-1 .gallery__item-container h3,
        .gallery__item.item-1521604513411-1 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1521604513411-1 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1521604513411-1 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    
      
<div class="gallery__item floating__text desktop-4 tablet-2 mobile-3 item-1521604513411-2" >
        <div class="gallery__item-container">
          <a href="/collections/matching-african-outfits-for-couples">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497533878432"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Matching_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Matching_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Matching_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1521604513411-2 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1521604513411-2 .gallery__item-container h3,
        .gallery__item.item-1521604513411-2 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1521604513411-2 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1521604513411-2 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    

  </div>
  
  <style>
    #shopify-section-1521604513411 .gallery__item .gallery__item-container h3 {
      font-size: 30px;
    }
    #shopify-section-1521604513411 .gallery__item .gallery__item-container p {
      font-size: 14px;
    }
    #shopify-section-1521604513411 .gallery__item > a {
      display: inline-block;
      width: 100%;
      padding: 1px;
    }
  </style>
</section>
<div class="clear"></div>



</div><div id="shopify-section-1521640547286" class="shopify-section"><section class="index-section rich__text-section--1521640547286 animate wow fadeIn no-fouc" data-section-id="1521640547286" >
  <div class="row">
    <div class="rich__text-container desktop-12 tablet-6 mobile-3 padded">
      <div class="rich__text-content">
        
          <div class="rich__text-column center block-a0d54078-ee46-4dc4-ab52-283a5fe6bf87">
            
              <h3>Welcome to L&#39;AVIYE</h3>
              <div class="clear"></div>
            
            
            <div class="rte">
            <p>If you&#x27;re the sort of person who is proud of your African heritage, who loves to make a statement; and loves to wear outfits that make people stare when you walk into a room, then you&#x27;ve come to the right place &amp; boy do we have products for you!</p>
            </div>
            
            
            
            
            <style>
              .rich__text-column.block-a0d54078-ee46-4dc4-ab52-283a5fe6bf87 {
                
                width: 100%;
                justify-self: center;
                
              }
            </style>
          </div>
        
      </div>
    </div>
  </div>
  <style>
    
    .rich__text-section--1521640547286 {
      padding: 60px 0;
    }
    .rich__text-section--1521640547286 {
      background: rgba(0,0,0,0);
    }
    .rich__text-section--1521640547286 h3,
    .rich__text-section--1521640547286 p,
    .rich__text-section--1521640547286 a {
      color: #000000;
    }
  </style>
</section>



</div><div id="shopify-section-1611278002c56e574d" class="shopify-section"><section class="index-section gallery__image-section animate wow fadeIn no-fouc" data-section-id="1611278002c56e574d" >

  <div class="row">

    
      
<div class="gallery__item floating__text desktop-3 tablet-fourth mobile-3 item-1611278002c56e574d-0" >
        <div class="gallery__item-container">
          <a href="/collections/matching-african-outfits-for-couples">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497534075040"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Clothing_e66642ac-6ce2-4355-be80-abb0c17100a8_{width}x.png?v=1614304683"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Clothing_e66642ac-6ce2-4355-be80-abb0c17100a8_500x.png?v=1614304683"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Clothing_e66642ac-6ce2-4355-be80-abb0c17100a8_1024x.png?v=1614304683" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1611278002c56e574d-0 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1611278002c56e574d-0 .gallery__item-container h3,
        .gallery__item.item-1611278002c56e574d-0 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1611278002c56e574d-0 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1611278002c56e574d-0 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    
      
<div class="gallery__item floating__text desktop-3 tablet-fourth mobile-3 item-1611278002c56e574d-1" >
        <div class="gallery__item-container">
          <a href="/collections/dresses">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497533976736"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Dresses_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Dresses_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Dresses_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1611278002c56e574d-1 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1611278002c56e574d-1 .gallery__item-container h3,
        .gallery__item.item-1611278002c56e574d-1 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1611278002c56e574d-1 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1611278002c56e574d-1 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    
      
<div class="gallery__item floating__text desktop-3 tablet-fourth mobile-3 item-1611278002c56e574d-2" >
        <div class="gallery__item-container">
          <a href="/collections/tops">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497533845664"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Tops_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Tops_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Tops_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-1611278002c56e574d-2 .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-1611278002c56e574d-2 .gallery__item-container h3,
        .gallery__item.item-1611278002c56e574d-2 .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-1611278002c56e574d-2 .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-1611278002c56e574d-2 .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    
      
<div class="gallery__item floating__text desktop-3 tablet-fourth mobile-3 item-f352e5db-f730-403f-b0d5-68459253235b" >
        <div class="gallery__item-container">
          <a href="/collections/skirts">
            
              <div class="gallery__item-image">
              
  

  <div class="box-ratio" style="padding-bottom: 141.4618777567738%;">
    <img class="lazyload lazyload-fade "
      id="497534042272"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Skirts_bd6ba22d-d8fb-45c2-8f6b-3919c3616c47_{width}x.png?v=1614304682"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Skirts_bd6ba22d-d8fb-45c2-8f6b-3919c3616c47_500x.png?v=1614304682"data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512]"alt="">
  </div>
              <noscript>
                <img src="//cdn.shopify.com/s/files/1/1058/0630/files/African_Print_Skirts_bd6ba22d-d8fb-45c2-8f6b-3919c3616c47_1024x.png?v=1614304682" alt="">
              </noscript>
              </div>
            
            <div class="gallery__item-caption">
              
              
            </div>
          </a>
        </div>
      </div>

      <style>
        .gallery__item.item-f352e5db-f730-403f-b0d5-68459253235b .gallery__item-caption {
          text-align: left;
        }
        .gallery__item.item-f352e5db-f730-403f-b0d5-68459253235b .gallery__item-container h3,
        .gallery__item.item-f352e5db-f730-403f-b0d5-68459253235b .gallery__item-container p {
          color: #000000;
        }
        
        .gallery__item.floating__text.item-f352e5db-f730-403f-b0d5-68459253235b .gallery__item-container .gallery__item-caption,
        .gallery__item.floating__text.item-f352e5db-f730-403f-b0d5-68459253235b .gallery__item-container .gallery__item-caption > a {
          position: absolute;
          top: 80%;
          left: 50%;
          -webkit-transform: translate(-50%, -80%);
          -ms-transform: translate(-50%, -80%);
          -moz-transform: translate(-50%, -80%);
          -o-transform: translate(-50%, -80%);
          transform: translate(-50%, -80%);
        }
        
      </style>

      
    

  </div>
  
  <style>
    #shopify-section-1611278002c56e574d .gallery__item .gallery__item-container h3 {
      font-size: 22px;
    }
    #shopify-section-1611278002c56e574d .gallery__item .gallery__item-container p {
      font-size: 14px;
    }
    #shopify-section-1611278002c56e574d .gallery__item > a {
      display: inline-block;
      width: 100%;
      padding: 1px;
    }
  </style>
</section>
<div class="clear"></div>



</div><div id="shopify-section-1521640569297" class="shopify-section"><section class="index-section animate wow fadeIn no-fouc" data-section-id="1521640569297" data-section-type="homepage-products" >
  <div class="row">

    
      <div class="section-title lines  desktop-12 tablet-6 mobile-3"><h2>Statement African Print Dresses</h2></div>
      <div class="clear"></div>
    


    <div id="featured_collection--1521640569297" class="featured__collection product-loop" data-slideout-ignore>
      
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5786232619168" data-product-id="5786232619168" data-alpha="African Print Plunge Neckline Maxi Dress - THALIA" data-price="10000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/african-print-plunge-neckline-maxi-dress-thalia" title="African Print Plunge Neckline Maxi Dress - THALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.8595271210014%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_{width}x.jpg?v=1619094242"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_500x.jpg?v=1619094242"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_500x.jpg?v=1619094242" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.8533834586466%;">
    <img class="lazyload lazyload-fade "
      id="20849418305696"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_{width}x.jpg?v=1618301775"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_500x.jpg?v=1618301775"data-widths="[180, 360, 540]"alt="African Print Plunge Neckline Maxi Dress - THALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_500x.jpg?v=1618301775" alt="African Print Plunge Neckline Maxi Dress - THALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5786232619168" class="fancybox.ajax product-modal" href="/products/african-print-plunge-neckline-maxi-dress-thalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/african-print-plunge-neckline-maxi-dress-thalia">
      
      <span class="prod-title">African Print Plunge Neckline Maxi Dress - THALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5786232619168'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='5.00' data-number-of-reviews='3' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='5.00' tabindex='0' aria-label='5.00 stars' role='button'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 3 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£100.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£100.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5786232619168]={"id":5786232619168,"h":"african-print-plunge-neckline-maxi-dress-thalia","i":"products/M27-351.jpg","t":["African maxi dress","African Wax","Dress","Laviye African Dress","matching","Matching African Outfits For Couples","new in",],"v":[{"id":36811489149088,"m":"shopify","p":"deny","q":3,"r":10000, },{"id":36811489214624,"m":"shopify","p":"deny","q":8,"r":10000, },{"id":36811489280160,"m":"shopify","p":"deny","q":20,"r":10000, },{"id":36811489345696,"m":"shopify","p":"deny","q":6,"r":10000, },{"id":36811489411232,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36811489476768,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36811489542304,"m":"shopify","p":"deny","q":0,"r":10000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5786150863008" data-product-id="5786150863008" data-alpha="Short Sleeved Fit and Flare African Print Midi dress - THALIA" data-price="7000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/short-sleeved-fit-and-flare-african-print-midi-dress-thalia" title="Short Sleeved Fit and Flare African Print Midi dress - THALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.82692908466106%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-332_{width}x.jpg?v=1618299651"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-332_500x.jpg?v=1618299651"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-332_500x.jpg?v=1618299651" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.85826771653544%;">
    <img class="lazyload lazyload-fade "
      id="20849031348384"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-177_{width}x.jpg?v=1618299651"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-177_500x.jpg?v=1618299651"data-widths="[180, 360, 540]"alt="Short Sleeved Fit and Flare African Print Midi dress - THALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-177_500x.jpg?v=1618299651" alt="Short Sleeved Fit and Flare African Print Midi dress - THALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5786150863008" class="fancybox.ajax product-modal" href="/products/short-sleeved-fit-and-flare-african-print-midi-dress-thalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/short-sleeved-fit-and-flare-african-print-midi-dress-thalia">
      
      <span class="prod-title">Short Sleeved Fit and Flare African Print Midi dress - THALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5786150863008'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='5.00' data-number-of-reviews='2' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='5.00' tabindex='0' aria-label='5.00 stars'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 2 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£70.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£70.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5786150863008]={"id":5786150863008,"h":"short-sleeved-fit-and-flare-african-print-midi-dress-thalia","i":"products/M27-332.jpg","t":["African Midi Dress","African Wax","Dress","Laviye african print midi dress","matching","Matching African Outfits For Couples","new in",],"v":[{"id":36811131617440,"m":"shopify","p":"deny","q":4,"r":7000, },{"id":36811131650208,"m":"shopify","p":"deny","q":11,"r":7000, },{"id":36811131682976,"m":"shopify","p":"deny","q":14,"r":7000, },{"id":36811131715744,"m":"shopify","p":"deny","q":8,"r":7000, },{"id":36811131748512,"m":"shopify","p":"deny","q":0,"r":7000, },{"id":36811131781280,"m":"shopify","p":"deny","q":0,"r":7000, },{"id":36811131814048,"m":"shopify","p":"deny","q":0,"r":7000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-631066886172" data-product-id="631066886172" data-alpha="African Print White Floral Pussy-bow Maxi Dress - THALIA" data-price="12000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/african-print-white-floral-pussy-bow-maxi-dress-thalia" title="African Print White Floral Pussy-bow Maxi Dress - THALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.8296568627451%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-288_{width}x.jpg?v=1619370159"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-288_500x.jpg?v=1619370159"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-288_500x.jpg?v=1619370159" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.8771712158809%;">
    <img class="lazyload lazyload-fade "
      id="20997353308320"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-285_{width}x.jpg?v=1619370157"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-285_500x.jpg?v=1619370157"data-widths="[180, 360, 540]"alt="African Print White Floral Pussy-bow Maxi Dress - THALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-285_500x.jpg?v=1619370157" alt="African Print White Floral Pussy-bow Maxi Dress - THALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-631066886172" class="fancybox.ajax product-modal" href="/products/african-print-white-floral-pussy-bow-maxi-dress-thalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/african-print-white-floral-pussy-bow-maxi-dress-thalia">
      
      <span class="prod-title">African Print White Floral Pussy-bow Maxi Dress - THALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='631066886172'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='4.95' data-number-of-reviews='57' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='4.95' tabindex='0' aria-label='4.95 stars' role='button'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 57 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£120.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£120.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[631066886172]={"id":631066886172,"h":"african-print-white-floral-pussy-bow-maxi-dress-thalia","i":"products/M27-288.jpg","t":["African maxi dress","african print maxi dresses","African Wax","Dress","Matching African Outfits For Couples","new in","White",],"v":[{"id":34830300577952,"m":"shopify","p":"deny","q":3,"r":12000, },{"id":34830300610720,"m":"shopify","p":"deny","q":19,"r":12000, },{"id":34830300643488,"m":"shopify","p":"deny","q":37,"r":12000, },{"id":34830300676256,"m":"shopify","p":"deny","q":21,"r":12000, },{"id":34830300709024,"m":"shopify","p":"deny","q":28,"r":12000, },{"id":34830300741792,"m":"shopify","p":"deny","q":4,"r":12000, },{"id":34830300774560,"m":"shopify","p":"deny","q":1,"r":12000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-781663600744" data-product-id="781663600744" data-alpha="African Print White Floral Infinity Multiway Maxi Dress - THALIA" data-price="10000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/african-print-white-floral-infinity-multiway-maxi-dress-thalia" title="African Print White Floral Infinity Multiway Maxi Dress - THALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.82945736434107%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-166_{width}x.jpg?v=1619368636"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-166_500x.jpg?v=1619368636"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-166_500x.jpg?v=1619368636" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.83900928792568%;">
    <img class="lazyload lazyload-fade "
      id="20997205557408"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-142_{width}x.jpg?v=1619368635"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-142_500x.jpg?v=1619368635"data-widths="[180, 360, 540]"alt="African Print White Floral Infinity Multiway Maxi Dress - THALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-142_500x.jpg?v=1619368635" alt="African Print White Floral Infinity Multiway Maxi Dress - THALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-781663600744" class="fancybox.ajax product-modal" href="/products/african-print-white-floral-infinity-multiway-maxi-dress-thalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/african-print-white-floral-infinity-multiway-maxi-dress-thalia">
      
      <span class="prod-title">African Print White Floral Infinity Multiway Maxi Dress - THALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='781663600744'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='4.92' data-number-of-reviews='13' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='4.92' tabindex='0' aria-label='4.92 stars'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 13 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£100.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£100.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[781663600744]={"id":781663600744,"h":"african-print-white-floral-infinity-multiway-maxi-dress-thalia","i":"products/M27-166.jpg","t":["African maxi dress","African Wax","Dress","Infinity/Multiway/Convertible","Matching African Outfits For Couples","new in","White",],"v":[{"id":8177718820968,"m":"shopify","p":"deny","q":7,"r":10000, },{"id":8177718853736,"m":"shopify","p":"deny","q":12,"r":10000, },{"id":8177718886504,"m":"shopify","p":"deny","q":33,"r":10000, },{"id":8177718919272,"m":"shopify","p":"deny","q":18,"r":10000, },{"id":8177718952040,"m":"shopify","p":"deny","q":13,"r":10000, },{"id":8177718984808,"m":"shopify","p":"deny","q":3,"r":10000, },{"id":8177719017576,"m":"shopify","p":"deny","q":3,"r":10000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5846985179296" data-product-id="5846985179296" data-alpha="Ankara Crossfront White Floral Mini Dress - THALIA" data-price="7000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/ankara-crossfront-white-floral-mini-dress-thalia" title="Ankara Crossfront White Floral Mini Dress - THALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.83005441607366%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-387_{width}x.jpg?v=1618304610"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-387_500x.jpg?v=1618304610"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-387_500x.jpg?v=1618304610" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 125.01769285208775%;">
    <img class="lazyload lazyload-fade "
      id="20849960878240"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-391_{width}x.jpg?v=1618304609"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/M27-391_500x.jpg?v=1618304609"data-widths="[180, 360, 540]"alt="Ankara Crossfront White Floral Mini Dress - THALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-391_500x.jpg?v=1618304609" alt="Ankara Crossfront White Floral Mini Dress - THALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5846985179296" class="fancybox.ajax product-modal" href="/products/ankara-crossfront-white-floral-mini-dress-thalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/ankara-crossfront-white-floral-mini-dress-thalia">
      
      <span class="prod-title">Ankara Crossfront White Floral Mini Dress - THALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5846985179296'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='5.00' data-number-of-reviews='2' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='5.00' tabindex='0' aria-label='5.00 stars' role='button'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 2 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£70.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£70.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5846985179296]={"id":5846985179296,"h":"ankara-crossfront-white-floral-mini-dress-thalia","i":"products/M27-387.jpg","t":["African Midi Dress","African Wax","Dress","matching","Matching African Outfits For Couples","new in","white",],"v":[{"id":37100481183904,"m":"shopify","p":"deny","q":3,"r":7000, },{"id":37100481216672,"m":"shopify","p":"deny","q":10,"r":7000, },{"id":37100481249440,"m":"shopify","p":"deny","q":15,"r":7000, },{"id":37100481282208,"m":"shopify","p":"deny","q":8,"r":7000, },{"id":37100481314976,"m":"shopify","p":"deny","q":3,"r":7000, },{"id":37100481347744,"m":"shopify","p":"deny","q":3,"r":7000, },{"id":37100481380512,"m":"shopify","p":"deny","q":2,"r":7000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5807864774816" data-product-id="5807864774816" data-alpha="African Print Cross Front Mini Length Dress - JAMILA" data-price="7000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/african-print-cross-front-mini-length-dress-jamila" title="African Print Cross Front Mini Length Dress - JAMILA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.8531691746466%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-800_{width}x.jpg?v=1606735899"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-800_500x.jpg?v=1606735899"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-800_500x.jpg?v=1606735899" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.84985563041386%;">
    <img class="lazyload lazyload-fade "
      id="12655232123040"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-803_{width}x.jpg?v=1606735903"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-803_500x.jpg?v=1606735903"data-widths="[180, 360, 540]"alt="African Print Cross Front Mini Length Dress - JAMILA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-803_500x.jpg?v=1606735903" alt="African Print Cross Front Mini Length Dress - JAMILA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5807864774816" class="fancybox.ajax product-modal" href="/products/african-print-cross-front-mini-length-dress-jamila?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/african-print-cross-front-mini-length-dress-jamila">
      
      <span class="prod-title">African Print Cross Front Mini Length Dress - JAMILA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5807864774816'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='0.00' data-number-of-reviews='0' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='0.00' tabindex='0' aria-label='0.00 stars'> <span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span> </span> <span class='jdgm-prev-badge__text'> No reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£70.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£70.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5807864774816]={"id":5807864774816,"h":"african-print-cross-front-mini-length-dress-jamila","i":"products/LAV-1511-800.jpg","t":["African Midi Dress","African Wax","Dress","Matching African Outfits For Couples",],"v":[{"id":36911029813408,"m":"shopify","p":"deny","q":7,"r":7000, },{"id":36911029846176,"m":"shopify","p":"deny","q":13,"r":7000, },{"id":36911029878944,"m":"shopify","p":"deny","q":17,"r":7000, },{"id":36911029911712,"m":"shopify","p":"deny","q":2,"r":7000, },{"id":36911029944480,"m":"shopify","p":"deny","q":4,"r":7000, },{"id":36911029977248,"m":"shopify","p":"deny","q":0,"r":7000, },{"id":36911030010016,"m":"shopify","p":"deny","q":0,"r":7000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5807809724576" data-product-id="5807809724576" data-alpha="Ankara Long Dress - African Print Pussy-bow Maxi Dress - JAMILA" data-price="10000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/ankara-long-dress-african-print-pussy-bow-maxi-dress-jamila" title="Ankara Long Dress - African Print Pussy-bow Maxi Dress - JAMILA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.85161519346823%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-764_{width}x.jpg?v=1606735448"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-764_500x.jpg?v=1606735448"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-764_500x.jpg?v=1606735448" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.83586083853703%;">
    <img class="lazyload lazyload-fade "
      id="12655130247328"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-763_{width}x.jpg?v=1606735447"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-763_500x.jpg?v=1606735447"data-widths="[180, 360, 540]"alt="Ankara Long Dress - African Print Pussy-bow Maxi Dress - JAMILA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-763_500x.jpg?v=1606735447" alt="Ankara Long Dress - African Print Pussy-bow Maxi Dress - JAMILA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5807809724576" class="fancybox.ajax product-modal" href="/products/ankara-long-dress-african-print-pussy-bow-maxi-dress-jamila?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/ankara-long-dress-african-print-pussy-bow-maxi-dress-jamila">
      
      <span class="prod-title">Ankara Long Dress - African Print Pussy-bow Maxi Dress - JAMILA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5807809724576'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='5.00' data-number-of-reviews='1' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='5.00' tabindex='0' aria-label='5.00 stars'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 1 review </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£100.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£100.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5807809724576]={"id":5807809724576,"h":"ankara-long-dress-african-print-pussy-bow-maxi-dress-jamila","i":"products/LAV-1511-764.jpg","t":["African maxi dress","african print maxi dresses","African Wax","Dress","Matching African Outfits For Couples",],"v":[{"id":36910669856928,"m":"shopify","p":"deny","q":2,"r":10000, },{"id":36910669889696,"m":"shopify","p":"deny","q":6,"r":10000, },{"id":36910669922464,"m":"shopify","p":"deny","q":16,"r":10000, },{"id":36910669955232,"m":"shopify","p":"deny","q":6,"r":10000, },{"id":36910669988000,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36910670020768,"m":"shopify","p":"deny","q":1,"r":10000, },{"id":36910670053536,"m":"shopify","p":"deny","q":0,"r":10000, },]}
</script></div>

      </div>
      
      <div class="featured__collection-product product-index js-product-listing" id="product-listing-5807818342560" data-product-id="5807818342560" data-alpha="African Print Maxi Dress - Ankara Deep V Neck Maxi Dress - NATALIA" data-price="10000">
        

<div class="product-index-inner">
  
    
      
    
      
    
      
    
      
    
      
    
      
    
    
  
</div>

<div class="js-product-image animated prod-image image_natural">
  <a href="/collections/dresses/products/african-print-maxi-dress-ankara-deep-v-neck-maxi-dress-natalia" title="African Print Maxi Dress - Ankara Deep V Neck Maxi Dress - NATALIA">
    <div class="reveal">

  

  <div class="box-ratio" style="padding-bottom: 153.84279475982532%;">
    <img class="lazyload lazyload-fade first-image"
      id=""
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-519_{width}x.jpg?v=1606458160"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-519_500x.jpg?v=1606458160"data-widths="[180, 360, 540, 720]"alt="">
  </div>

        <noscript>
          <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-519_500x.jpg?v=1606458160" alt="">
        </noscript>
        
          <div class="hidden">
            
  

  <div class="box-ratio" style="padding-bottom: 153.81244522348817%;">
    <img class="lazyload lazyload-fade "
      id="12610909503648"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-518_{width}x.jpg?v=1606458156"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-518_500x.jpg?v=1606458156"data-widths="[180, 360, 540]"alt="African Print Maxi Dress - Ankara Deep V Neck Maxi Dress - NATALIA">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-518_500x.jpg?v=1606458156" alt="African Print Maxi Dress - Ankara Deep V Neck Maxi Dress - NATALIA">
            </noscript>
          </div>
        
</div>
  </a>

  
    
      <a rel="nofollow" data-fancybox="quick-view-5807818342560" class="fancybox.ajax product-modal" href="/products/african-print-maxi-dress-ankara-deep-v-neck-maxi-dress-natalia?view=quick">QUICK VIEW</a>
    
  
</div>

<div class="product-info">
  <div class="product-info-inner">
    <a href="/collections/dresses/products/african-print-maxi-dress-ankara-deep-v-neck-maxi-dress-natalia">
      
      <span class="prod-title">African Print Maxi Dress - Ankara Deep V Neck Maxi Dress - NATALIA</span>

  













<div style='' class='jdgm-widget jdgm-preview-badge' data-id='5807818342560'
data-template='index'
data-auto-install='false'>
  <div style='display:none' class='jdgm-prev-badge' data-average-rating='5.00' data-number-of-reviews='3' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='5.00' tabindex='0' aria-label='5.00 stars'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-prev-badge__text'> 3 reviews </span> </div>
</div>





    </a>

    
<dl class="price price--listing"
><div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Regular Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular">£100.00 GBP
</span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Sale Price</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale">£100.00 GBP
</span>
    </dd>
    <div class="price__compare">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <s class="price-item price-item--regular">
          
        </s>
      </dd>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span></span></dd>
  </div>
</dl>


    
      
    
  </div>
<script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5807818342560]={"id":5807818342560,"h":"african-print-maxi-dress-ankara-deep-v-neck-maxi-dress-natalia","i":"products/LAV-1511-519.jpg","t":["African maxi dress","African Wax","Dress","Laviye African Dress","Matching African Outfits For Couples",],"v":[{"id":36910708293792,"m":"shopify","p":"deny","q":2,"r":10000, },{"id":36910708326560,"m":"shopify","p":"deny","q":7,"r":10000, },{"id":36910708359328,"m":"shopify","p":"deny","q":19,"r":10000, },{"id":36910708392096,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36910708424864,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36910708457632,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36910708490400,"m":"shopify","p":"deny","q":0,"r":10000, },]}
</script></div>

      </div>
      
      
    </div>
  </div>

  

  <style>
  
    #featured_collection--1521640569297.featured__collection {
      display: grid;
      grid-template-columns: repeat(4, 25%);
    }
  
  </style>


</section>
<div class="clear"></div>



</div><div id="shopify-section-1521640705228" class="shopify-section"><section class="imageText__column-section section-1521640705228 index-section" data-section-id="1521640705228">

  <div class="row">

    
    <div class="section-title lines  desktop-12 tablet-6 mobile-3"><h2>Our Bestsellers</h2></div>
    

    <div class="clear"></div>
    

    
<div class="imageText__column-container center desktop-4 tablet-2 mobile-3 text-promo-1521640705228-0" >
        <a href="/collections/african-shirts-for-men">
          
          <div class="imageText__column-image">
            
  

  <div class="box-ratio" style="padding-bottom: 153.8291279327136%;">
    <img class="lazyload lazyload-fade "
      id="483528343712"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/1511-05-178_{width}x.jpg?v=1611279126"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/1511-05-178_500x.jpg?v=1611279126"data-widths="[180, 360, 540, 720, 900, 1080, 1296]"alt="">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/files/1511-05-178_800x.jpg?v=1611279126" alt="">
            </noscript>
          </div>
          
        </a>
        <div class="imageText__column-caption">
          
            <h3>Tailored Men&#39;s Shirts</h3>
          
          
            <p>Look dapper and stay relaxed with our collection of African print men&#x27;s shirts. Keep it casual and classy with the most active inspired African print shirts.</p>
          
          
            <div class="imageText__column-btn-wrapper">
              <a href="/collections/african-shirts-for-men">Shop Shirts</a>
            </div>
          
        </div>
      </div>
    
<div class="imageText__column-container center desktop-4 tablet-2 mobile-3 text-promo-1521640705228-2" >
        <a href="/collections/african-print-accessories-for-men">
          
          <div class="imageText__column-image">
            
  

  <div class="box-ratio" style="padding-bottom: 153.84615384615384%;">
    <img class="lazyload lazyload-fade "
      id="475499856032"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/LAV-1511-5_{width}x.jpg?v=1609768184"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/LAV-1511-5_500x.jpg?v=1609768184"data-widths="[180, 360, 540, 720, 900, 1080, 1296]"alt="African Mens Accessories">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/files/LAV-1511-5_800x.jpg?v=1609768184" alt="African Mens Accessories">
            </noscript>
          </div>
          
        </a>
        <div class="imageText__column-caption">
          
            <h3>Men&#39;s Accessories</h3>
          
          
            <p>Complete your look with our statement African print tie sets. These wonderful five piece Ankara tie sets look great teamed with your favourite suit jacket.</p>
          
          
            <div class="imageText__column-btn-wrapper">
              <a href="/collections/african-print-accessories-for-men">Shop Accessories</a>
            </div>
          
        </div>
      </div>
    
<div class="imageText__column-container center desktop-4 tablet-2 mobile-3 text-promo-1521640705228-1" >
        <a href="/collections/shoes">
          
          <div class="imageText__column-image">
            
  

  <div class="box-ratio" style="padding-bottom: 149.8046875%;">
    <img class="lazyload lazyload-fade "
      id="475494842528"
      data-src="//cdn.shopify.com/s/files/1/1058/0630/files/DSC_3920_edit_{width}x.jpg?v=1609768024"
      data-sizes="auto"
      data-original="//cdn.shopify.com/s/files/1/1058/0630/files/DSC_3920_edit_500x.jpg?v=1609768024"data-widths="[180, 360, 540, 720, 900, 1080, 1296]"alt="African Print Slides">
  </div>
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/1058/0630/files/DSC_3920_edit_800x.jpg?v=1609768024" alt="African Print Slides">
            </noscript>
          </div>
          
        </a>
        <div class="imageText__column-caption">
          
            <h3>Stylish Ankara Footwear</h3>
          
          
            <p>Our ankara shoes are made with high quality African print fabric and a lightly cushioned foot bed to provide enormous comfort, and style! Perfect for all season!</p>
          
          
            <div class="imageText__column-btn-wrapper">
              <a href="/collections/shoes">Shop Shoes</a>
            </div>
          
        </div>
      </div>
    
  </div>

  

</section>

<div class="clear"></div>



</div><div id="shopify-section-16112801972f6c0b72" class="shopify-section"><script>if(typeof pn==="undefined"){pn={};}if(typeof pn.cP==="undefined"){pn.cP={};}pn.cP[5786232619168]={"id":5786232619168,"h":"african-print-plunge-neckline-maxi-dress-thalia","i":"products/M27-351.jpg","t":["African maxi dress","African Wax","Dress","Laviye African Dress","matching","Matching African Outfits For Couples","new in",],"v":[{"id":36811489149088,"m":"shopify","p":"deny","q":3,"r":10000, },{"id":36811489214624,"m":"shopify","p":"deny","q":8,"r":10000, },{"id":36811489280160,"m":"shopify","p":"deny","q":20,"r":10000, },{"id":36811489345696,"m":"shopify","p":"deny","q":6,"r":10000, },{"id":36811489411232,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36811489476768,"m":"shopify","p":"deny","q":0,"r":10000, },{"id":36811489542304,"m":"shopify","p":"deny","q":0,"r":10000, },]}
</script>





<section
class="homepage-featured-product section-16112801972f6c0b72 product-5786232619168 product-page product-template index-section no-fouc"
data-product-id="5786232619168"
data-section-id="16112801972f6c0b72"
data-section-type="product__section">


<div class="row">
  <div class="section-title lines ">
    <h2>
     <a href="/products/african-print-plunge-neckline-maxi-dress-thalia">
       The THALIA Dress
     </a>
    </h2>
  </div>
</div>

<div class="row">

 <script class="product-json" type="application/json">
  {
      "id": 5786232619168,
      "title": "African Print Plunge Neckline Maxi Dress - THALIA",
      "handle": "african-print-plunge-neckline-maxi-dress-thalia",
      "description": "\u003cp\u003eSteal the show with this sexy Ankara Maxi Dress! LAVIYE's African Print maxi dress features a deep plunge neckline design with fashionable glittery waist bands for standout appeal. Our dress also features a hidden side zipper that can be unzipped to create\/reveal a side slit and worn as high or low as you want. Pair this dress with your favourite statement earrings for a show stopping look.\u003c\/p\u003e\n\u003cp\u003eShop Matching Men's Collection\u003cspan\u003e \u003ca title=\"Matching Thalia Collection\" href=\"https:\/\/www.laviye.com\/search?q=thalia\u0026amp;type=product\" target=\"_blank\"\u003e\u003cem\u003e\u003cstrong\u003eHERE.\u003c\/strong\u003e\u003c\/em\u003e\u003c\/a\u003e\u003c\/span\u003e\u003cbr\u003eShop Matching Women's Collection\u003cspan\u003e \u003c\/span\u003e\u003ca title=\"MATCHING COLLECTION\" href=\"https:\/\/www.laviye.com\/search?q=thomas\u0026amp;type=product\" target=\"_blank\"\u003e\u003cspan\u003e\u003cem\u003e\u003cstrong\u003eHERE.\u003c\/strong\u003e\u003c\/em\u003e\u003c\/span\u003e\u003c\/a\u003e\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eFEATURES\u003c\/strong\u003e \u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eAnkara print sleeveless maxi dress made from 100% African wax cotton\u003c\/li\u003e\n\u003cli\u003eStatement plunging neckline with statement gold waist bands\u003c\/li\u003e\n\u003cli\u003eSide zipper slit design till hem\u003c\/li\u003e\n\u003cli\u003e2 side pockets\u003c\/li\u003e\n\u003cli\u003eModels are 5’8” and wears a SMALL.\u003c\/li\u003e\n\u003cli\u003eApproximate length; 60 inches\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cul\u003e\u003c\/ul\u003e\n\u003cp\u003e \u003cstrong\u003eHOW TO CARE FOR AFRICAN WAX FABRICS\u003c\/strong\u003e\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eHand wash separately using a mild detergent.\u003c\/li\u003e\n\u003cli\u003ePress on the reverse side with a cool iron.\u003c\/li\u003e\n\u003cli\u003eDo not machine wash.\u003c\/li\u003e\n\u003cli\u003eDo not bleach.\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cul\u003e\u003c\/ul\u003e\n\u003cul class=\"x-ul-icons\"\u003e\u003c\/ul\u003e",
      "published_at": [3,0,12,30,4,2021,5,120,true,"BST"],
      "created_at": [20,47,13,20,10,2020,2,294,true,"BST"],
      "vendor": "L'AVIYE",
      "type": "DRESS",
      "tags": ["African maxi dress","African Wax","Dress","Laviye African Dress","matching","Matching African Outfits For Couples","new in"],
      "price": 10000,
      "price_min": 10000,
      "price_max": 10000,
      "available": true,
      "price_varies": false,
      "compare_at_price": null,
      "compare_at_price_min": 0,
      "compare_at_price_max": 0,
      "compare_at_price_varies": false,
      "variants": [
        {
          "id": 36811489149088,
          "title": "X-SMALL",
          "option1": "X-SMALL",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-XS",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": true,
          "options": ["X-SMALL"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 3,
          "inventory_policy": "deny",
          "barcode": "89149088",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489214624,
          "title": "SMALL",
          "option1": "SMALL",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-S",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": true,
          "options": ["SMALL"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 8,
          "inventory_policy": "deny",
          "barcode": "89214624",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489280160,
          "title": "MEDIUM",
          "option1": "MEDIUM",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-M",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": true,
          "options": ["MEDIUM"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 20,
          "inventory_policy": "deny",
          "barcode": "89280160",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489345696,
          "title": "LARGE",
          "option1": "LARGE",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-L",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": true,
          "options": ["LARGE"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 6,
          "inventory_policy": "deny",
          "barcode": "89345696",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489411232,
          "title": "X-LARGE",
          "option1": "X-LARGE",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-XL",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": false,
          "options": ["X-LARGE"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 0,
          "inventory_policy": "deny",
          "barcode": "89411232",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489476768,
          "title": "2-XLARGE",
          "option1": "2-XLARGE",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-2XL",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": false,
          "options": ["2-XLARGE"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 0,
          "inventory_policy": "deny",
          "barcode": "89476768",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        },
      
        {
          "id": 36811489542304,
          "title": "3-XLARGE",
          "option1": "3-XLARGE",
          "option2": null,
          "option3": null,
          "sku": "WMN-DRS-MAX-VWB-THALIA-3XL",
          "featured_image": {
              "id": null,
              "product_id": null,
              "position": null,
              "created_at": [3,0,12,30,4,2021,5,120,true,"BST"],
              "updated_at": [20,47,13,20,10,2020,2,294,true,"BST"],
              "alt": null,
              "width": null,
              "height": null,
              "src": null
          },
          "available": false,
          "options": ["3-XLARGE"],
          "price": 10000,
          "unit_price_measurement": {
            "measured_type": null,
            "quantity_unit": null,
            "quantity_value": null,
            "reference_unit": null,
            "reference_value": null
          },
          "unit_price": null,
          "weight": 0,
          "weight_unit": "kg",
          "weight_in_unit": 0.0,
          "compare_at_price": null,
          "inventory_management": "shopify",
          "inventory_quantity": 0,
          "inventory_policy": "deny",
          "barcode": "89542304",
          "featured_media": {
            "alt": null,
            "id": null,
            "position": null,
            "preview_image": {
              "aspect_ratio": null,
              "height": null,
              "width": null
            }
          }
        }
      ],
      "images": ["\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-341.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-277.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-352.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-339.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-343.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-348.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-354.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-355.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-304.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-309.jpg?v=1619094268","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-353.jpg?v=1619094251","\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-359.jpg?v=1619094261"],
      "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094268",
      "featured_media": {"alt":null,"id":20965718229152,"position":1,"preview_image":{"aspect_ratio":0.65,"height":4425,"width":2876,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094242"},"aspect_ratio":0.65,"height":4425,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094242","width":2876},
      "featured_media_id": 20965718229152,
      "options": ["Size"],
      "url": "\/products\/african-print-plunge-neckline-maxi-dress-thalia",
      "media": [
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20965718229152,
          "position": 1,
          "preview_image": {
            "aspect_ratio": 0.6499435028248588,
            "height": 4425,
            "width": 2876
          },
          "aspect_ratio": 0.6499435028248588,
          "height": 4425,
          "media_type": "image",
          "src": {"alt":null,"id":20965718229152,"position":1,"preview_image":{"aspect_ratio":0.65,"height":4425,"width":2876,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094242"},"aspect_ratio":0.65,"height":4425,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-351.jpg?v=1619094242","width":2876},
          "width": 2876
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418305696,
          "position": 2,
          "preview_image": {
            "aspect_ratio": 0.6499694563225412,
            "height": 4911,
            "width": 3192
          },
          "aspect_ratio": 0.6499694563225412,
          "height": 4911,
          "media_type": "image",
          "src": {"alt":null,"id":20849418305696,"position":2,"preview_image":{"aspect_ratio":0.65,"height":4911,"width":3192,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-341.jpg?v=1618301775"},"aspect_ratio":0.65,"height":4911,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-341.jpg?v=1618301775","width":3192},
          "width": 3192
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418174624,
          "position": 3,
          "preview_image": {
            "aspect_ratio": 0.6500705502922798,
            "height": 4961,
            "width": 3225
          },
          "aspect_ratio": 0.6500705502922798,
          "height": 4961,
          "media_type": "image",
          "src": {"alt":null,"id":20849418174624,"position":3,"preview_image":{"aspect_ratio":0.65,"height":4961,"width":3225,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-277.jpg?v=1618301773"},"aspect_ratio":0.65,"height":4961,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-277.jpg?v=1618301773","width":3225},
          "width": 3225
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418404000,
          "position": 4,
          "preview_image": {
            "aspect_ratio": 0.650093808630394,
            "height": 4264,
            "width": 2772
          },
          "aspect_ratio": 0.650093808630394,
          "height": 4264,
          "media_type": "image",
          "src": {"alt":null,"id":20849418404000,"position":4,"preview_image":{"aspect_ratio":0.65,"height":4264,"width":2772,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-352.jpg?v=1618301774"},"aspect_ratio":0.65,"height":4264,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-352.jpg?v=1618301774","width":2772},
          "width": 2772
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418272928,
          "position": 5,
          "preview_image": {
            "aspect_ratio": 0.6500998003992016,
            "height": 5010,
            "width": 3257
          },
          "aspect_ratio": 0.6500998003992016,
          "height": 5010,
          "media_type": "image",
          "src": {"alt":null,"id":20849418272928,"position":5,"preview_image":{"aspect_ratio":0.65,"height":5010,"width":3257,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-339.jpg?v=1618301774"},"aspect_ratio":0.65,"height":5010,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-339.jpg?v=1618301774","width":3257},
          "width": 3257
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418338464,
          "position": 6,
          "preview_image": {
            "aspect_ratio": 0.6499794829708658,
            "height": 4874,
            "width": 3168
          },
          "aspect_ratio": 0.6499794829708658,
          "height": 4874,
          "media_type": "image",
          "src": {"alt":null,"id":20849418338464,"position":6,"preview_image":{"aspect_ratio":0.65,"height":4874,"width":3168,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-343.jpg?v=1618301774"},"aspect_ratio":0.65,"height":4874,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-343.jpg?v=1618301774","width":3168},
          "width": 3168
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418371232,
          "position": 7,
          "preview_image": {
            "aspect_ratio": 0.6500100745516825,
            "height": 4963,
            "width": 3226
          },
          "aspect_ratio": 0.6500100745516825,
          "height": 4963,
          "media_type": "image",
          "src": {"alt":null,"id":20849418371232,"position":7,"preview_image":{"aspect_ratio":0.65,"height":4963,"width":3226,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-348.jpg?v=1618301774"},"aspect_ratio":0.65,"height":4963,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-348.jpg?v=1618301774","width":3226},
          "width": 3226
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418240160,
          "position": 8,
          "preview_image": {
            "aspect_ratio": 0.6500465983224604,
            "height": 4292,
            "width": 2790
          },
          "aspect_ratio": 0.6500465983224604,
          "height": 4292,
          "media_type": "image",
          "src": {"alt":null,"id":20849418240160,"position":8,"preview_image":{"aspect_ratio":0.65,"height":4292,"width":2790,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5.jpg?v=1618301774"},"aspect_ratio":0.65,"height":4292,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5.jpg?v=1618301774","width":2790},
          "width": 2790
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418436768,
          "position": 9,
          "preview_image": {
            "aspect_ratio": 0.650010541851149,
            "height": 4743,
            "width": 3083
          },
          "aspect_ratio": 0.650010541851149,
          "height": 4743,
          "media_type": "image",
          "src": {"alt":null,"id":20849418436768,"position":9,"preview_image":{"aspect_ratio":0.65,"height":4743,"width":3083,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-354.jpg?v=1618301773"},"aspect_ratio":0.65,"height":4743,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-354.jpg?v=1618301773","width":3083},
          "width": 3083
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418469536,
          "position": 10,
          "preview_image": {
            "aspect_ratio": 0.6499800558436378,
            "height": 5014,
            "width": 3259
          },
          "aspect_ratio": 0.6499800558436378,
          "height": 5014,
          "media_type": "image",
          "src": {"alt":null,"id":20849418469536,"position":10,"preview_image":{"aspect_ratio":0.65,"height":5014,"width":3259,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-355.jpg?v=1618301774"},"aspect_ratio":0.65,"height":5014,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-355.jpg?v=1618301774","width":3259},
          "width": 3259
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20849418207392,
          "position": 11,
          "preview_image": {
            "aspect_ratio": 0.6500605082694635,
            "height": 4958,
            "width": 3223
          },
          "aspect_ratio": 0.6500605082694635,
          "height": 4958,
          "media_type": "image",
          "src": {"alt":null,"id":20849418207392,"position":11,"preview_image":{"aspect_ratio":0.65,"height":4958,"width":3223,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7.jpg?v=1618301773"},"aspect_ratio":0.65,"height":4958,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7.jpg?v=1618301773","width":3223},
          "width": 3223
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20965709611168,
          "position": 12,
          "preview_image": {
            "aspect_ratio": 0.6500705502922798,
            "height": 4961,
            "width": 3225
          },
          "aspect_ratio": 0.6500705502922798,
          "height": 4961,
          "media_type": "image",
          "src": {"alt":null,"id":20965709611168,"position":12,"preview_image":{"aspect_ratio":0.65,"height":4961,"width":3225,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-304.jpg?v=1619094194"},"aspect_ratio":0.65,"height":4961,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-304.jpg?v=1619094194","width":3225},
          "width": 3225
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20965708497056,
          "position": 13,
          "preview_image": {
            "aspect_ratio": 0.6498689780286233,
            "height": 4961,
            "width": 3224
          },
          "aspect_ratio": 0.6498689780286233,
          "height": 4961,
          "media_type": "image",
          "src": {"alt":null,"id":20965708497056,"position":13,"preview_image":{"aspect_ratio":0.65,"height":4961,"width":3224,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-309.jpg?v=1619094186"},"aspect_ratio":0.65,"height":4961,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-309.jpg?v=1619094186","width":3224},
          "width": 3224
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20965717573792,
          "position": 14,
          "preview_image": {
            "aspect_ratio": 0.65,
            "height": 3840,
            "width": 2496
          },
          "aspect_ratio": 0.65,
          "height": 3840,
          "media_type": "image",
          "src": {"alt":null,"id":20965717573792,"position":14,"preview_image":{"aspect_ratio":0.65,"height":3840,"width":2496,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-353.jpg?v=1619094240"},"aspect_ratio":0.65,"height":3840,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-353.jpg?v=1619094240","width":2496},
          "width": 2496
        },
    
        {
          "alt": "African Print Plunge Neckline Maxi Dress - THALIA",
          "id": 20965720391840,
          "position": 15,
          "preview_image": {
            "aspect_ratio": 0.6501066098081023,
            "height": 4690,
            "width": 3049
          },
          "aspect_ratio": 0.6501066098081023,
          "height": 4690,
          "media_type": "image",
          "src": {"alt":null,"id":20965720391840,"position":15,"preview_image":{"aspect_ratio":0.65,"height":4690,"width":3049,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-359.jpg?v=1619094261"},"aspect_ratio":0.65,"height":4690,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1058\/0630\/products\/M27-359.jpg?v=1619094261","width":3049},
          "width": 3049
        }
    ]
  }
</script>


 
 
 
 

<div class="product__section-container">
  <div class="product__section-images" data-product-gallery data-product-single-media-group data-gallery-config='{
   "thumbPosition": "right",
   "enableVideoLooping": false,
   "mainSlider": true,
   "thumbSlider": true,
   "productId": 5786232619168,
   "isQuick": false
}'>



  
  
  <div id="slider" class=" desktop-10 tablet-5 mobile-3">
    <ul class="slides product-image-container carousel carousel-main">
      
        <li class="image-slide carousel-cell" data-image-id="20965718229152" data-slide-index="0" tabindex="-1">
          <div class="product-media-container product-media--20965718229152 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20965718229152"
          data-media-id="product-template-20965718229152">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_800x.jpg?v=1619094242"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_{width}x.jpg?v=1619094242"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_2400x.jpg?v=1619094242"
                  data-aspectratio="0.6499435028248588"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_2400x.jpg?v=1619094242" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418305696" data-slide-index="1" tabindex="-1">
          <div class="product-media-container product-media--20849418305696 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418305696"
          data-media-id="product-template-20849418305696">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_800x.jpg?v=1618301775"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_{width}x.jpg?v=1618301775"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_2400x.jpg?v=1618301775"
                  data-aspectratio="0.6499694563225412"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_2400x.jpg?v=1618301775" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418174624" data-slide-index="2" tabindex="-1">
          <div class="product-media-container product-media--20849418174624 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418174624"
          data-media-id="product-template-20849418174624">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_800x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_2400x.jpg?v=1618301773"
                  data-aspectratio="0.6500705502922798"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_2400x.jpg?v=1618301773" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418404000" data-slide-index="3" tabindex="-1">
          <div class="product-media-container product-media--20849418404000 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418404000"
          data-media-id="product-template-20849418404000">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_2400x.jpg?v=1618301774"
                  data-aspectratio="0.650093808630394"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418272928" data-slide-index="4" tabindex="-1">
          <div class="product-media-container product-media--20849418272928 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418272928"
          data-media-id="product-template-20849418272928">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_2400x.jpg?v=1618301774"
                  data-aspectratio="0.6500998003992016"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418338464" data-slide-index="5" tabindex="-1">
          <div class="product-media-container product-media--20849418338464 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418338464"
          data-media-id="product-template-20849418338464">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_2400x.jpg?v=1618301774"
                  data-aspectratio="0.6499794829708658"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418371232" data-slide-index="6" tabindex="-1">
          <div class="product-media-container product-media--20849418371232 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418371232"
          data-media-id="product-template-20849418371232">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_2400x.jpg?v=1618301774"
                  data-aspectratio="0.6500100745516825"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418240160" data-slide-index="7" tabindex="-1">
          <div class="product-media-container product-media--20849418240160 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418240160"
          data-media-id="product-template-20849418240160">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_2400x.jpg?v=1618301774"
                  data-aspectratio="0.6500465983224604"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418436768" data-slide-index="8" tabindex="-1">
          <div class="product-media-container product-media--20849418436768 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418436768"
          data-media-id="product-template-20849418436768">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_800x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_2400x.jpg?v=1618301773"
                  data-aspectratio="0.650010541851149"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_2400x.jpg?v=1618301773" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418469536" data-slide-index="9" tabindex="-1">
          <div class="product-media-container product-media--20849418469536 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418469536"
          data-media-id="product-template-20849418469536">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_800x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_2400x.jpg?v=1618301774"
                  data-aspectratio="0.6499800558436378"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_2400x.jpg?v=1618301774" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20849418207392" data-slide-index="10" tabindex="-1">
          <div class="product-media-container product-media--20849418207392 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20849418207392"
          data-media-id="product-template-20849418207392">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_800x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_2400x.jpg?v=1618301773"
                  data-aspectratio="0.6500605082694635"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_2400x.jpg?v=1618301773" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20965709611168" data-slide-index="11" tabindex="-1">
          <div class="product-media-container product-media--20965709611168 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20965709611168"
          data-media-id="product-template-20965709611168">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_800x.jpg?v=1619094194"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_{width}x.jpg?v=1619094194"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_2400x.jpg?v=1619094194"
                  data-aspectratio="0.6500705502922798"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_2400x.jpg?v=1619094194" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20965708497056" data-slide-index="12" tabindex="-1">
          <div class="product-media-container product-media--20965708497056 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20965708497056"
          data-media-id="product-template-20965708497056">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_800x.jpg?v=1619094186"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_{width}x.jpg?v=1619094186"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_2400x.jpg?v=1619094186"
                  data-aspectratio="0.6498689780286233"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_2400x.jpg?v=1619094186" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20965717573792" data-slide-index="13" tabindex="-1">
          <div class="product-media-container product-media--20965717573792 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20965717573792"
          data-media-id="product-template-20965717573792">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_800x.jpg?v=1619094240"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_{width}x.jpg?v=1619094240"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_2400x.jpg?v=1619094240"
                  data-aspectratio="0.65"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_2400x.jpg?v=1619094240" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
        <li class="image-slide carousel-cell" data-image-id="20965720391840" data-slide-index="14" tabindex="-1">
          <div class="product-media-container product-media--20965720391840 image"
          data-product-single-media-wrapper
          
          
          
          data-thumbnail-id="product-template-20965720391840"
          data-media-id="product-template-20965720391840">
            
                
                <img id="5786232619168" class="product__image lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_800x.jpg?v=1619094261"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_{width}x.jpg?v=1619094261"
                  data-sizes="auto"
                  data-zoom-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_2400x.jpg?v=1619094261"
                  data-aspectratio="0.6501066098081023"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                
                  <a class="zoom_btn" data-fancybox="product-5786232619168" title="click to zoom-in" href="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_2400x.jpg?v=1619094261" itemprop="contentUrl" tabindex="-1">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                
              
          </div>
          <noscript>
            <img id="5786232619168" class="product-main-image" src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_800x.gif" alt='African Print Plunge Neckline Maxi Dress - THALIA'/>
          </noscript>
          
</li>
      
    </ul>
  </div>


  
    

    <div id="thumbnails" class="thumb-slider thumbnail-slider custom vertical-carousel desktop-2 tablet-1 mobile-hide"
    data-thumbnail-position="right">
      <div class="thumb-slider-wrapper" id="thumb-slider-wrapper">
        <ul class="carousel-nav thumb-slider-slides slides product-single__thumbnails-16112801972f6c0b72">
          
            
            {{-- <li class="image-thumbnail product-single__thumbnails-item carousel-cell is-nav-selected" data-slide-index="0"
            data-image-id="20965718229152" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20965718229152">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_150x.jpg?v=1619094242"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_{width}x.jpg?v=1619094242"
                  data-sizes="auto"
                  data-image-id="20965718229152"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-351_100x.jpg?v=1619094242" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li> --}}
          
            
            {{-- <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="1"
            data-image-id="20849418305696" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418305696">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_150x.jpg?v=1618301775"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_{width}x.jpg?v=1618301775"
                  data-sizes="auto"
                  data-image-id="20849418305696"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-341_100x.jpg?v=1618301775" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li> --}}
          
            
            {{-- <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="2"
            data-image-id="20849418174624" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418174624">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_150x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-image-id="20849418174624"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-277_100x.jpg?v=1618301773" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li> --}}
          
            
            {{-- <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="3"
            data-image-id="20849418404000" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418404000">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-image-id="20849418404000"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-352_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li> --}}
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="4"
            data-image-id="20849418272928" tabindex="0">
              {{-- <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418272928">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-image-id="20849418272928"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA"> --}}
                {{-- <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-339_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div> --}}
            </li>
          
            
            {{-- <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="5"
            data-image-id="20849418338464" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418338464">
                {{-- <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_{width}x.jpg?v=1618301774"
                  {{-- data-sizes="auto" 
                  data-image-id="20849418338464"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA"> 
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-343_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li> --}}
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="6"
            data-image-id="20849418371232" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418371232">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-image-id="20849418371232"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-348_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="7"
            data-image-id="20849418240160" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418240160">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-image-id="20849418240160"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-311_e6b354c4-60de-42ea-b61e-079ad7c2f4e5_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="8"
            data-image-id="20849418436768" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418436768">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_150x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-image-id="20849418436768"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-354_100x.jpg?v=1618301773" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="9"
            data-image-id="20849418469536" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418469536">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_150x.jpg?v=1618301774"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_{width}x.jpg?v=1618301774"
                  data-sizes="auto"
                  data-image-id="20849418469536"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-355_100x.jpg?v=1618301774" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="10"
            data-image-id="20849418207392" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20849418207392">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_150x.jpg?v=1618301773"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_{width}x.jpg?v=1618301773"
                  data-sizes="auto"
                  data-image-id="20849418207392"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-279_c32fa2ea-9a9a-4f03-b37d-2e65c51b88f7_100x.jpg?v=1618301773" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="11"
            data-image-id="20965709611168" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20965709611168">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_150x.jpg?v=1619094194"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_{width}x.jpg?v=1619094194"
                  data-sizes="auto"
                  data-image-id="20965709611168"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-304_100x.jpg?v=1619094194" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="12"
            data-image-id="20965708497056" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20965708497056">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_150x.jpg?v=1619094186"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_{width}x.jpg?v=1619094186"
                  data-sizes="auto"
                  data-image-id="20965708497056"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-309_100x.jpg?v=1619094186" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="13"
            data-image-id="20965717573792" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20965717573792">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_150x.jpg?v=1619094240"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_{width}x.jpg?v=1619094240"
                  data-sizes="auto"
                  data-image-id="20965717573792"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-353_100x.jpg?v=1619094240" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
            
            <li class="image-thumbnail product-single__thumbnails-item carousel-cell " data-slide-index="14"
            data-image-id="20965720391840" tabindex="0">
              <div class="product-single__thumbnail product-single__thumbnail--16112801972f6c0b72" data-thumbnail-id="product-template-20965720391840">
                <img class="lazyload lazyload-fade"
                  src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_150x.jpg?v=1619094261"
                  data-src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_{width}x.jpg?v=1619094261"
                  data-sizes="auto"
                  data-image-id="20965720391840"
                  alt="African Print Plunge Neckline Maxi Dress - THALIA">
                <noscript>
                  <img src="//cdn.shopify.com/s/files/1/1058/0630/products/M27-359_100x.jpg?v=1619094261" alt="African Print Plunge Neckline Maxi Dress - THALIA" />
                </noscript></div>
            </li>
          
        </ul>
      </div>
    </div>
  


</div>
  <div class="product__section-contentWrapper">
     <div class="featured-product-form">
       
       <h3 class="product-title product__section-title">
         <a href="/products/african-print-plunge-neckline-maxi-dress-thalia">
           African Print Plunge Neckline Maxi Dress - THALIA
         </a>
       </h3>
      
      



<form method="post" action="/cart/add" id="AddToCartForm" accept-charset="UTF-8" class="product_form" enctype="multipart/form-data" data-product-form="
       { &quot;money_format&quot;: &quot;£{{amount}} GBP&quot;,
         &quot;enable_history&quot;: false,
         &quot;sold_out&quot;: &quot;Sold Out&quot;,
         &quot;button&quot;: &quot;Add to Cart&quot;,
         &quot;unavailable&quot;: &quot;Unavailable&quot;,
         &quot;quickview&quot;: false
        }
      " data-product-id="5786232619168"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
<!-- NBIS installation -->
<script data-app="esc-out-of-stock" type="text/json">[{"id":36811489149088,"title":"X-SMALL","option1":"X-SMALL","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-XS","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":" | escape","public_title":" | escape","options":["X-SMALL"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":3,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89149088"},{"id":36811489214624,"title":"SMALL","option1":"SMALL","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-S","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":" | escape","public_title":" | escape","options":["SMALL"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":8,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89214624"},{"id":36811489280160,"title":"MEDIUM","option1":"MEDIUM","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-M","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":" | escape","public_title":" | escape","options":["MEDIUM"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":20,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89280160"},{"id":36811489345696,"title":"LARGE","option1":"LARGE","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-L","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":" | escape","public_title":" | escape","options":["LARGE"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":6,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89345696"},{"id":36811489411232,"title":"X-LARGE","option1":"X-LARGE","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-XL","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":" | escape","public_title":" | escape","options":["X-LARGE"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89411232"},{"id":36811489476768,"title":"2-XLARGE","option1":"2-XLARGE","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-2XL","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":" | escape","public_title":" | escape","options":["2-XLARGE"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89476768"},{"id":36811489542304,"title":"3-XLARGE","option1":"3-XLARGE","option2":null,"option3":null,"sku":"WMN-DRS-MAX-VWB-THALIA-3XL","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":" | escape","public_title":" | escape","options":["3-XLARGE"],"price":10000,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":"89542304"}]</script>

  
<dl id="product-price" class="price
  
  
  "
  data-price
><div class="price__pricing-group">
    <div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular" data-regular-price>
          £100.00 GBP
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale Price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale" data-sale-price>
          £100.00 GBP
        </span>
      </dd>
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular Price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular" data-regular-price>
          
        </span>
      </dd>
    </div>
    <div class="price__badges">
      <span class="price__badge price__badge--sale" aria-hidden="true">
        <span>SALE</span>
      </span>
      <span class="price__badge price__badge--sold-out">
        <span>Sold Out</span>
      </span>
    </div>
  </div>
  <div class="price__unit">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Unit Price</span>
    </dt>
    <dd class="price-unit-price"><span data-unit-price></span><span aria-hidden="true">/</span><span class="visually-hidden">per&nbsp;</span><span data-unit-price-base-unit></span></dd>
  </div>
</dl>


  
    <div class="select">
      <label>Size</label>
      <select id="16112801972f6c0b72-product-select-5786232619168" name='id'>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-XS" value="36811489149088" selected="selected">
            X-SMALL - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-S" value="36811489214624" >
            SMALL - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-M" value="36811489280160" >
            MEDIUM - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-L" value="36811489345696" >
            LARGE - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-XL" value="36811489411232" >
            X-LARGE - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-2XL" value="36811489476768" >
            2-XLARGE - £100.00 GBP
          </option>
        
          <option data-sku="WMN-DRS-MAX-VWB-THALIA-3XL" value="36811489542304" >
            3-XLARGE - £100.00 GBP
          </option>
        
      </select>
    </div>
    
      
      







<div class="swatches__container" data-option-index="1" data-other-options='["option2","option3"]'>
  <h5 class="swatches__option-name"><strong>Size:</strong> <span id="selected-option-1" class="swatches__option-value">X-SMALL</span></h5>

  
    

    

    

    

    <!-- Checking Availability -->
    
      

      

      

      

      
    
      

      
        
      

      
        
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      

      

      

      

      
    
      
        
      
        
      
        
      
        
      
        
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element ">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-x-small" class="swatches__form--input" name="size" value="X-SMALL" data-position="1" checked="checked" />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-x-small">
          X-SMALL
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      

      

      

      
    
      

      
        
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      

      

      

      

      
    
      
        
      
        
      
        
      
        
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element ">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-small" class="swatches__form--input" name="size" value="SMALL" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-small">
          SMALL
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      
        
      

      

      

      

      
    
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      
        
      

      

      

      

      
    
      
        
      
        
      
        
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element ">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-medium" class="swatches__form--input" name="size" value="MEDIUM" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-medium">
          MEDIUM
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      
        
      

      
        
      

      

      

      

      
    
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      
        
      
        
      

      

      

      

      
    
      
        
      
        
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element ">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-large" class="swatches__form--input" name="size" value="LARGE" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-large">
          LARGE
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      
        
      

      
        
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      
        
      
        
      
        
      

      

      

      

      
    
      
        
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element soldout">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-x-large" class="swatches__form--input" name="size" value="X-LARGE" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-x-large">
          X-LARGE
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      
        
      

      
        
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      
        
      
        
      
        
      
        
      

      

      

      

      
    
      
        

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element soldout">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-2-xlarge" class="swatches__form--input" name="size" value="2-XLARGE" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-2-xlarge">
          2-XLARGE
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
    

    

    

    

    <!-- Checking Availability -->
    
      

      
        
      

      
        
      

      
        
      

      
        
      
        
      
        
      
        

    <!-- Building Variant Image -->
    
      
        
      
        
      
        
      
        
      
        
      
        
      

      

      

      

      
    

    

    

    

    

    

    

    
      
      <div class="swatches__swatch--regular swatch-element soldout">
        
      <input type="radio" id="16112801972f6c0b72-swatch-1-3-xlarge" class="swatches__form--input" name="size" value="3-XLARGE" data-position="1"  />
    

        <label class="swatches__form--label" for="16112801972f6c0b72-swatch-1-3-xlarge">
          3-XLARGE
          
      <img class="swatches__sold-out--image crossed-out" src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/soldout.png?v=10315714777104563048" />
    
        </label>
      </div>
    
    
  
</div>

      
    
  


  

  <div class="product-add">
    
      <div class="qty-selection">
        <h5>Quantity</h5>
        <a class="down quantity-control-down" field="quantity">-</a>
          <input min="1" type="text" name="quantity" class="quantity" value="1" />
        <a class="up quantity-control-up" field="quantity">+</a>
      </div>
    
    <div id="esc-oos-form"></div>
    <input id="addToCart" type="submit" name="button" class="add clearfix AddtoCart " value="Add to Cart"  />
    
  </div>

</form>

      
       <div class="share-icons">
  <a title="Share on Facebook" href="//www.facebook.com/sharer.php?u=https://www.laviye.com" class="facebook" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
  <a title="Share on Twitter"  href="//twitter.com/intent/tweet?text=https://www.laviye.com" title="Share on Twitter" target="_blank" class="twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>

  

  
    <a title="Share on Pinterest" target="blank" href="//pinterest.com/pin/create/button/?url=https://www.laviye.com&amp;media=http://cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_1024x1024.gif" title="Pin This Product" class="pinterest"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a>
  
</div>

      
      
      
      
     </div>
   </div>
 </div>

  <div class="product__section-lowerDescription desktop-8 desktop-push-2 tablet-6 mobile-3">
    <div class="section-title lines "><h3>Details</h3></div>
     <div class="rte">
       <p>Steal the show with this sexy Ankara Maxi Dress! LAVIYE's African Print maxi dress features a deep plunge neckline design with fashionable glittery waist bands for standout appeal. Our dress also features a hidden side zipper that can be unzipped to create/reveal a side slit and worn as high or low as you want. Pair this dress with your favourite statement earrings for a show stopping look.</p>
<p>Shop Matching Men's Collection<span> <a title="Matching Thalia Collection" href="https://www.laviye.com/search?q=thalia&amp;type=product" target="_blank"><em><strong>HERE.</strong></em></a></span><br>Shop Matching Women's Collection<span> </span><a title="MATCHING COLLECTION" href="https://www.laviye.com/search?q=thomas&amp;type=product" target="_blank"><span><em><strong>HERE.</strong></em></span></a></p>
<p><strong>FEATURES</strong> </p>
<ul>
<li>Ankara print sleeveless maxi dress made from 100% African wax cotton</li>
<li>Statement plunging neckline with statement gold waist bands</li>
<li>Side zipper slit design till hem</li>
<li>2 side pockets</li>
<li>Models are 5’8” and wears a SMALL.</li>
<li>Approximate length; 60 inches</li>
</ul>
<ul></ul>
<p> <strong>HOW TO CARE FOR AFRICAN WAX FABRICS</strong></p>
<ul>
<li>Hand wash separately using a mild detergent.</li>
<li>Press on the reverse side with a cool iron.</li>
<li>Do not machine wash.</li>
<li>Do not bleach.</li>
</ul>
<ul></ul>
<ul class="x-ul-icons"></ul>
     </div>
  </div>

</div>


</section>
<div class="clear"></div>

<style>
.homepage-featured-product {
  padding: 20px 0;
}

.homepage-featured-product.section-16112801972f6c0b72 .featured-product-gallery.right {
  float: right !important;
}
.homepage-featured-product.section-16112801972f6c0b72 .product-details {
  background: ;
}

  .homepage-featured-product.section-16112801972f6c0b72 .thumb-slider-slides {
    transition: top 0.5s ease-in-out;
  }


.homepage-featured-product.section-16112801972f6c0b72 .featured-product-form {
  background: #ffffff;
  padding: 20px;
  border: 7px double #f0f0f0;text-align: center;}
@media screen and (max-width: 740px) {
  .homepage-featured-product.section-16112801972f6c0b72 .featured-product-form {
    text-align: center !important;
  }
}

</style>


  <script type="application/json" id="ModelJson-16112801972f6c0b72">
    []
  </script>



</div><!-- END content_for_index -->
</div>













<div class='jdgm-carousel-wrapper'
data-from-snippet='true'
data-auto-install='true' >
  <div class="jdgm-carousel-title-and-link">
    <h2 class='jdgm-carousel-title'>Don&#39;t Take Our Word For It, Let Customers Speak For Us</h2>
    <span class="jdgm-all-reviews-rating-wrapper" href="javascript:void(0)">
      <span style="display:block"  data-score='4.94' class='jdgm-all-reviews-rating' aria-label='4.94 stars' tabindex='0'></span>
      <span style="display: block">
        from 2319 reviews
      </span>
</span>  </div>
  <section class='jdgm-widget jdgm-carousel jdgm-carousel--default-theme'> <style>.jdgm-carousel{display: none}</style> <style> .jdgm-xx{left:0}.jdgm-carousel-wrapper .jdgm-carousel-item__review{height:calc(72% - 4em)}
 </style> <div class='jdgm-carousel__item-container'> <div class='jdgm-carousel__item-wrapper'><div class='jdgm-carousel-item jdgm--shop-review' data-review-id='9f82c1cd-da7d-4606-b87c-0acb6fceb977'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Soo pleased</div> <div class='jdgm-carousel-item__review-body'><p>Firstly I'm very happy with the customer service I received. I can't thank you enough. I ordered two shirts and wanted to exchange one but forgot to write my order number on the return form. L'AVIYE  identified my return and quickly exchanged the item for me with no hassle. I'm truly grateful for this as it was my mistake. The order came the next day. The quality of the shirts are outstanding. The African material is genuine and not flimsy and the shirt itself is also quality. I would definitely order again and be sure to recommend.  I wish all the best success and blessings.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Sashelle M. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/28/2021'> 05/28/2021 </div> </div> <a class='jdgm-carousel-item__product ' href='/#judgeme_product_reviews'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> L&#39;AVIYE </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='21e7940c-7b12-42d7-8cca-2178c6b679a8'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'></div> <div class='jdgm-carousel-item__review-body'><p>I love it! It is beautiful print with a zipper in the front to create a slit and the best part is. It has pockets!  I know I’m gonna look good when I go out</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Lexy </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/28/2021'> 05/28/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-white-floral-pussy-bow-maxi-dress-thalia#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print White Floral Pussy-bow Maxi Dress - THALIA' src='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-288_56x56.jpg?v=1619376615' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-288_112x112.jpg?v=1619376615 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print White Floral Pussy-bow Maxi Dress - THALIA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='0437a0c0-c9bd-47cb-a5f6-b12ae7af7650'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>I love this bag!</div> <div class='jdgm-carousel-item__review-body'><p>Thank you for this chick bag, I love it!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Kimberly S. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/28/2021'> 05/28/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/ankara-ladies-backpack-african-fashion-women-casual-backpack-alexa#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='Ankara Ladies Backpack - African Fashion Women Casual Backpack - ALEXA' src='https://judgeme.imgix.net/l-aviye/1622163607__191319857_3982391665132101_2683743074666163933_n__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1622163607__191319857_3982391665132101_2683743074666163933_n__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> Ankara Ladies Backpack - African Fashion Women Casual Backpack - ALEXA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='b5722127-3573-4d80-bc3f-5ca206322925'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>I love the outfits &lt;3</div> <div class='jdgm-carousel-item__review-body'><p>thank you guys me and husband love the outfits!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Esther K. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/27/2021'> 05/27/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-asymmetric-tube-fold-over-strapless-midi-dress-pamela#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Asymmetric Tube Fold Over Strapless Midi Dress - PAMELA' src='https://judgeme.imgix.net/l-aviye/1622092315__191271692_308767304023082_2374604910072396769_n__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1622092315__191271692_308767304023082_2374604910072396769_n__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Asymmetric Tube Fold Over Strapless Midi Dress - PAMELA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='8ef6b9f5-adf8-4883-92b0-5e93d1627092'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'></div> <div class='jdgm-carousel-item__review-body'><p>thank you guys me and husband love the outfits!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Esther K. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/27/2021'> 05/27/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-shirts-for-men-dashiki-shirt-for-men-grandad-collar-strip-long-sleeve-shirt-patrick#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Fashion for Men | Dashiki shirt for men - Black Grandad Collar Strip Shirt - Patrick' src='https://judgeme.imgix.net/l-aviye/1622092314__191271692_308767304023082_2374604910072396769_n__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1622092314__191271692_308767304023082_2374604910072396769_n__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Fashion for Men | Dashiki shirt for men - Black Grandad Collar Strip Shirt - Patrick </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='3094e15d-62de-4907-acc9-0892e2443669'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Great quality and fits perfect</div> <div class='jdgm-carousel-item__review-body'><p>Satisfied with the Ankara Blazer it is everything. Thank you!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> iamnoirshamel </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/27/2021'> 05/27/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/ankara-print-tuxedo-for-men-tailored-fit-shawl-collar-african-print-tuxedo-for-men-elijah#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Mens Dashiki Blazer - Modern Fit Shawl Collar Men&#39;s African Print Tuxedo for Guys - ELIJAH' src='https://judgeme.imgix.net/l-aviye/1622091160__190571130_1108587226294019_6402896412095128126_n__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1622091160__190571130_1108587226294019_6402896412095128126_n__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Mens Dashiki Blazer - Modern Fit Shawl Collar Men&#39;s African Print Tuxedo for Guys - ELIJAH </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='f19d571e-1f7d-46c3-a691-f9e1cb32898e'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>LOOOVEEE   IIITTT!! &lt;3</div> <div class='jdgm-carousel-item__review-body'><p>LOVEEEEEE my dress!! Got so many compliments 🙂 I’ll be back!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Kimberly R. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-sleeveless-long-dress-turtleneck-dashiki-maxi-dress-petra#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Sleeveless Long Dress - Turtleneck Dashiki Maxi Dress - PETRA' src='https://judgeme.imgix.net/l-aviye/1621985987__191773142_10102408390413648_6342803395458745165_n-(1)__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1621985987__191773142_10102408390413648_6342803395458745165_n-(1)__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Sleeveless Long Dress - Turtleneck Dashiki Maxi Dress - PETRA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='211e4ad0-7857-4112-a309-e522884fc87c'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>HEADS TURN WHEN YOU ENTER THE ROOM!!!</div> <div class='jdgm-carousel-item__review-body'><p>My birthday was last week, and when I say the complements on my dress are still coming, that's an understatement.  This dress caused heads to turn and mouths to drop when I entered the room for my 55th birthday celebration.  It made me feel like the elegant queen that I am.  Great quality and details.  Not, to mention I just purchased 2 more outfits (1 for an upcoming African wedding, and 1 just to keep in my closet for my next show stopper.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Marie C. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/deep-v-turtleneck-ankara-maxi-dress-long-sleeve-maxi-dress-debra#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='Deep V Turtleneck Ankara Maxi Dress - Long Sleeved Maxi Dress - DEBRA' src='https://judgeme.imgix.net/l-aviye/1621983971__pic1__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1621983971__pic1__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> Deep V Turtleneck Ankara Maxi Dress - Long Sleeved Maxi Dress - DEBRA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='d29e6942-f77a-4197-b76e-e3e01e75a85c'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Gorgeous</div> <div class='jdgm-carousel-item__review-body'><p>The dress is a stunner. Beautifully made. Fabric is great quality. I ordered a large and it fit me perfectly..so definitely order your top size..I cant wait to wear this on vacation at a captain's dinner on a cruise.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Customersherry w. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-plunge-neckline-maxi-dress-thalia#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Plunge Neckline Maxi Dress - THALIA' src='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-351_56x56.jpg?v=1619094268' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-351_112x112.jpg?v=1619094268 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Plunge Neckline Maxi Dress - THALIA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='a1788aa6-cd24-4c4b-bc38-db01b5cbf731'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Thank you for processing and shipping this order so quickly!</div> <div class='jdgm-carousel-item__review-body'><p>Thank you for processing and shipping this order so quickly! It has arrived faster than expected and now, we will be able to wear our coordinating items to an event on Saturday.  I will be sure to post pictures on IG.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Toya C. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-kente-mini-skirt-mina#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Kente Mini Skirt - MINA' src='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-454_56x56.jpg?v=1618302848' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-454_112x112.jpg?v=1618302848 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Kente Mini Skirt - MINA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='cc2c6a69-1f1c-4d38-a6a8-1b53348a79c1'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Thank you for processing and shipping this order so quickly!</div> <div class='jdgm-carousel-item__review-body'><p>Thank you for processing and shipping this order so quickly! It has arrived faster than expected and now, we will be able to wear our coordinating items to an event on Saturday.  I will be sure to post pictures on IG.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Toya C. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-asymmetric-tube-fold-over-strapless-midi-dress-pamela#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Asymmetric Tube Fold Over Strapless Midi Dress - PAMELA' src='https://cdn.shopify.com/s/files/1/1058/0630/products/LV-V2-59_56x56.jpg?v=1619364566' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/LV-V2-59_112x112.jpg?v=1619364566 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Asymmetric Tube Fold Over Strapless Midi Dress - PAMELA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='3a69613d-a083-41ac-a1d0-e1af5bc9d15c'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Thank you for processing and shipping this order so quickly!</div> <div class='jdgm-carousel-item__review-body'><p>Thank you for processing and shipping this order so quickly! It has arrived faster than expected and now, we will be able to wear our coordinating items to an event on Saturday.  I will be sure to post pictures on IG.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Toya C. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/25/2021'> 05/25/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-shirts-for-men-dashiki-shirt-for-men-grandad-collar-strip-long-sleeve-shirt-patrick#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Fashion for Men | Dashiki shirt for men - Black Grandad Collar Strip Shirt - Patrick' src='https://cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-740_d7742f89-70e3-475b-994f-1d8732ebb065_56x56.jpg?v=1606754043' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/LAV-1511-740_d7742f89-70e3-475b-994f-1d8732ebb065_112x112.jpg?v=1606754043 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Fashion for Men | Dashiki shirt for men - Black Grandad Collar Strip Shirt - Patrick </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='7e9a37e8-47fb-47f5-b91b-1cdc7b70a000'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Amazing for my wedding</div> <div class='jdgm-carousel-item__review-body'><p>We bought Petra &amp; Peter for our wedding.... What can I say... The guests were speechless. We received so many compliments.... We were the most beautiful newlyweds ever. Thank you LAVIYE!</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Herta A.P. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/24/2021'> 05/24/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-print-deep-v-turtleneck-maxi-dress-petra#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Print Deep V Turtleneck Maxi Dress - PETRA' src='https://judgeme.imgix.net/l-aviye/1621889464__IMG_20210524_181918_edit_543635477528504__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1621889464__IMG_20210524_181918_edit_543635477528504__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Print Deep V Turtleneck Maxi Dress - PETRA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='1b63afe0-30ef-4778-a23b-1e6d03a756f2'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Pretty dress</div> <div class='jdgm-carousel-item__review-body'><p>Such a pretty dress. Very pretty pattern. Nice cut. Elegant. Beautiful material. I had a number of compliments on my dress at the party I attended. Thanks! 😀</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Samantha S. </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/24/2021'> 05/24/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/ankara-crossfront-white-floral-mini-dress-thalia#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='Ankara Crossfront White Floral Mini Dress - THALIA' src='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-387_56x56.jpg?v=1619364504' srcset='https://cdn.shopify.com/s/files/1/1058/0630/products/M27-387_112x112.jpg?v=1619364504 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> Ankara Crossfront White Floral Mini Dress - THALIA </div> </a> </div><div class='jdgm-carousel-item ' data-review-id='d547637d-28a9-4928-ab50-bf63442bd333'> <div class='jdgm-carousel-item__review'> <div class='jdgm-carousel-item__review-rating' tabindex='0' aria-label='5 stars' role='img'> <a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a> </div> <div class='jdgm-carousel-item__review-content'> <div class='jdgm-carousel-item__review-title'>Great product and service!</div> <div class='jdgm-carousel-item__review-body'><p>You didn't fail us with your garments. It's so beautiful.</p></div> </div> </div> <div class='jdgm-carousel-item__reviewer-name-wrapper'> <div class='jdgm-carousel-item__reviewer-name jdgm-ellipsis'> Shaunilia.M </div> <div class='jdgm-carousel-item__timestamp jdgm-ellipsis jdgm-spinner' data-time='05/24/2021'> 05/24/2021 </div> </div> <a class='jdgm-carousel-item__product jdgm--shop-review-has-image' href='/products/african-maxi-dresses-for-women-sleeveless-turtleneck-dress-ella#judgeme_product_reviews'>  <img class='jdgm-carousel-item__product-image' alt='African Maxi Dresses for Women - Sleeveless Turtleneck Dress - ELLA' src='https://judgeme.imgix.net/l-aviye/1621846113__unnamed-(8)__original.jpg?auto=format&amp;w=56' srcset='https://judgeme.imgix.net/l-aviye/1621846113__unnamed-(8)__original.jpg?auto=format&amp;w=112 2x'>  <div class='jdgm-carousel-item__product-title jdgm-ellipsis'> African Maxi Dresses for Women - Sleeveless Turtleneck Dress - ELLA </div> </a> </div></div> </div> <div class='jdgm-carousel__arrows'> <div class='jdgm-carousel__left-arrow' tabindex="0"></div> <div class='jdgm-carousel__right-arrow' tabindex="0"></div> </div> </section>
</div>





        
        
      </div>
    </div>
    <div id="shopify-section-footer" class="shopify-section"><div class="footer-section" data-section-id="footer" data-section-type="footer-section">
<footer>
  <div id="footer-wrapper">
    <div id="footer" class="row" >
      

      
        <section class="footer-block block-1521643282115" >
          
            <div class="footer-sect"><h4>CONTACT US</h4><p><p><strong>LAVIYE LIMITED</strong></p><p>Unit 2A Riverside Avenue West, Dale Hall Industrial Estate, Lawford, Essex. United Kingdom CO11 1UN</p></p><style>
                @media (min-width: 980px) {
                  .footer-block.block-1521643282115 {
                    flex-grow: 2;
                    flex-basis: 400px
                  }
                }
                .footer-block.block-1521643282115 .logo-image {
                  max-width: 240px;
                  width: 240px;
                }
              </style>
            </div>
          
        </section>
      
        <section class="footer-block block-1480352627697" >
          
            <div class="footer-sect">
              <h4>CUSTOMER CARE</h4>
              <ul>
                
                  <li><a href="/pages/about-us" title="">About Us</a></li>
                
                  <li><a href="/pages/contact" title="">Contact Us</a></li>
                
                  <li><a href="/pages/faqs" title="">FAQ's</a></li>
                
                  <li><a href="/pages/shipping-policy" title="">Shipping Policy</a></li>
                
                  <li><a href="/pages/returns-policy" title="">Return & Exchange Policy</a></li>
                
                  <li><a href="/pages/size-chart" title="">Size Guide</a></li>
                
                  <li><a href="/products/gift-card" title="">LAVIYE Gift Cards</a></li>
                
              </ul>
              <style>
                  @media (min-width: 980px) {
                    .footer-block.block-1480352627697 {
                      flex-grow: 1;
                      flex-basis: 180px;
                    }
                  }
                  @media (max-width: 740px) {
                    .footer-block.block-1480352627697 {
                      display: inline-block;
                      width: 49%;
                      margin-top: 40px;
                    }
                  }
              </style>
            </div>
          
        </section>
      
        <section class="footer-block block-1480352634086" >
          
            <div class="footer-sect">
              <h4>CONNECT WITH US</h4>
              <p>Sign up to #ClubLAVIYE for <strong>10% OFF</strong> your first full price order &amp; be the first to know about new product launches, exclusive SALES and more!</p>
              <div id="footer_signup">
                  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
                  
                  
                  <input type="hidden" name="contact[tags]" value="prospect, password page">
                  <input type="email" name="contact[email]" id="footer-EMAIL" placeholder="Enter Email Address">
                  <input type="submit" id="footer-subscribe" value="Join">
                  
                  </form>
                  <style>
                    @media (min-width: 980px) {
                      .footer-block.block-1480352634086 {
                        flex-grow: 2;
                        flex-basis: 400px
                      }
                    }
                    @media (max-width: 740px) {
                      .footer-block.block-1480352634086 {
                        margin-top: 40px;
                      }
                    }
                  </style>
              </div>
            </div>
          
        </section>
      
    </div>
    <div id="bottom-footer" class="row">
      <div class="footer-left">
        
          <div class="clear"></div>
          <ul id="footer-icons" class="desktop-12 tablet-6 mobile-3">
              <li><a href="https://facebook.com/laviye" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="https://instagram.com/laviye" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/laviyeofficial" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="https://pinterest.com/laviyeofficial" target="_blank"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="http://laviyeofficial.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="https://youtube.com/laviyeofficial" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="//snapchat.com/add/laviye" target="_blank"><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i></a></li>
              
          </ul>
        
        
          <div id="copy" class="desktop-12 tablet-6 mobile-3">
            <p>
              Copyright &copy; 2021 <a href="/" title="">L&#39;AVIYE</a>
            </p>
          </div>
        
      </div>
      <div class="footer-right">
        
          <div class="disclosures desktop-12 tablet-6 mobile-3"><form method="post" action="/localization" id="localization_form" accept-charset="UTF-8" class="selectors-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" /><div class="selectors-form__item">
                  <h4 class="visually-hidden" id="currency-heading">
                    Currency
                  </h4>

                  <div class="disclosure" data-disclosure-currency>
                    <button type="button" class="disclosure__toggle" aria-expanded="false" aria-controls="currency-list" aria-describedby="currency-heading" data-disclosure-toggle>
                      GBP £</button>
                    <ul id="currency-list" class="disclosure-list" data-disclosure-list>
                      
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="AUD" data-disclosure-option>
                            AUD $</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="CAD" data-disclosure-option>
                            CAD $</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="DKK" data-disclosure-option>
                            DKK kr.</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="EUR" data-disclosure-option>
                            EUR €</a>
                        </li>
                        <li class="disclosure-list__item disclosure-list__item--current">
                          <a class="disclosure-list__option" href="#" aria-current="true" data-value="GBP" data-disclosure-option>
                            GBP £</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="HKD" data-disclosure-option>
                            HKD $</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="JPY" data-disclosure-option>
                            JPY ¥</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="NZD" data-disclosure-option>
                            NZD $</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="PHP" data-disclosure-option>
                            PHP ₱</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="SEK" data-disclosure-option>
                            SEK kr</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="SGD" data-disclosure-option>
                            SGD $</a>
                        </li>
                        <li class="disclosure-list__item ">
                          <a class="disclosure-list__option" href="#"  data-value="USD" data-disclosure-option>
                            USD $</a>
                        </li></ul>
                    <input type="hidden" name="currency_code" id="CurrencySelector" value="GBP" data-disclosure-input/>
                  </div>
                </div></form></div>
        
        
          <div id="payment" class="credit desktop-12 tablet-6 mobile-3">
            
              <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"/><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"/><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"/></g></svg>

            
              <svg class="payment-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay"><title id="pi-apple_pay">Apple Pay</title><path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z" /><path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875" /><g><g><path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858" /><path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048" /></g><g><path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z" /><path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z" /><path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z" /></g></g></svg>

            
              <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-google_pay"><title id="pi-google_pay">Google Pay</title><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"/><path d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z" fill="#5F6368"/><path d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z" fill="#4285F4"/><path d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z" fill="#34A853"/><path d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z" fill="#FBBC04"/><path d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z" fill="#EA4335"/></svg>

            
              <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-maestro"><title id="pi-maestro">Maestro</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#00A2E5" cx="23" cy="12" r="7"/><path fill="#7375CF" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
            
              <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#F79E1B" cx="23" cy="12" r="7"/><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
            
              <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"/><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"/><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"/></svg>
            
              <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-shopify_pay"><title id="pi-shopify_pay">Shop Pay</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#5A31F4"/><path d="M21.382 9.713c0 1.668-1.177 2.858-2.821 2.858h-1.549a.133.133 0 00-.12.08.127.127 0 00-.01.049v2.192a.129.129 0 01-.13.129h-1.084a.13.13 0 01-.13-.13V6.986a.127.127 0 01.08-.12.129.129 0 01.05-.01h2.9c1.637 0 2.814 1.19 2.814 2.858v-.001zm-1.352 0c0-.958-.658-1.658-1.55-1.658h-1.468a.13.13 0 00-.13.13v3.05a.127.127 0 00.038.092.129.129 0 00.092.038h1.468c.892.005 1.55-.695 1.55-1.652zm1.674 3.791a1.527 1.527 0 01.647-1.317c.423-.316 1.084-.48 2.055-.514l1.033-.036v-.303c0-.607-.41-.863-1.068-.863-.658 0-1.075.231-1.17.61a.127.127 0 01-.125.09h-1.022a.13.13 0 01-.126-.092.125.125 0 01-.004-.055c.152-.898.904-1.58 2.494-1.58 1.692 0 2.303.783 2.303 2.276v3.172a.13.13 0 01-.132.129h-1.03a.13.13 0 01-.13-.13v-.236a.096.096 0 00-.061-.091.1.1 0 00-.107.022c-.31.334-.808.575-1.607.575-1.175 0-1.95-.607-1.95-1.657zm3.735-.687v-.246l-1.339.07c-.705.036-1.115.326-1.115.816 0 .444.376.69 1.034.69.893 0 1.42-.48 1.42-1.33zm2.316 4.6v-.919a.13.13 0 01.049-.1.132.132 0 01.108-.027c.158.029.318.044.479.044a1.229 1.229 0 001.245-.876l.067-.211a.133.133 0 000-.088l-2.145-5.471a.13.13 0 01.06-.165.13.13 0 01.062-.015h1.04a.132.132 0 01.123.085l1.456 3.859a.131.131 0 00.125.088.133.133 0 00.125-.088l1.265-3.848a.13.13 0 01.126-.09h1.076a.134.134 0 01.132.116.134.134 0 01-.008.063l-2.295 6.076c-.528 1.413-1.433 1.773-2.43 1.773a1.959 1.959 0 01-.561-.066.132.132 0 01-.1-.14h.001zM8.57 6.4a5.363 5.363 0 00-3.683 1.427.231.231 0 00-.029.31l.618.839a.236.236 0 00.362.028 3.823 3.823 0 012.738-1.11c2.12 0 3.227 1.584 3.227 3.15 0 1.7-1.163 2.898-2.835 2.921-1.292 0-2.266-.85-2.266-1.974a1.908 1.908 0 01.713-1.48.231.231 0 00.033-.324l-.65-.815a.236.236 0 00-.339-.034 3.43 3.43 0 00-.942 1.183 3.39 3.39 0 00-.337 1.47c0 1.935 1.655 3.452 3.775 3.464h.03c2.517-.032 4.337-1.884 4.337-4.415 0-2.247-1.667-4.64-4.752-4.64z" fill="#fff"/></svg>
            
              <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"/></svg>
            
          </div>
        
      </div>
    </div>
  </div>
</footer>

<style>
  

  #footer .footer-sect {
    text-align: ;
    
  }
  #footer-wrapper {
    text-align: left;
  }

  @media (min-width: 980px) {
    #footer {
  	   display: flex;
    }
    .footer-block + .footer-block {
      margin-left: 3%;
    }
  }

  div#bottom-footer {
    display: flex;
    margin: 0 auto;
    padding-top: 32px;
    border-top: 1px solid #57197c;
    margin-top: 64px;
    align-items: flex-end;
  }

  div#bottom-footer .footer-left {
    width: 50%;
    text-align: left;
  }

  div#bottom-footer .footer-right {
    width: 50%;
    text-align: right;
  }

  div#bottom-footer #copy p {
    text-align: left;
    margin: 0;
  }
  div#bottom-footer #payment {
    text-align: right;
    margin-top: 16px;
  }
  div#bottom-footer .selectors-form {
    justify-content: flex-end;
    margin: 0;
  }
  div#bottom-footer #footer-icons {
    margin: 0;
  }
  div#bottom-footer #footer-icons i {
    font-size: 19px;
  }
  div#bottom-footer div#copy {
    margin-top: 21px;
    text-transform: capitalize;
  }

  @media (min-width: 980px) {
    #footer #payment {
      text-align: left;
    }
    #footer ul#footer-icons {
      text-align: left;
    }
    
      #footer ul#footer-icons li:first-child {
        margin-left: 0;
        padding-left: 0;
      }
      #footer .selectors-form {
        justify-content: flex-start;
        flex-wrap: nowrap;
      }
    
  }
  @media (max-width: 740px) {
    div#bottom-footer {
      flex-wrap: wrap;
    }
    div#bottom-footer .footer-left {
      width: 100%;
      text-align: left;
      order:2;
      margin-top: 31px;
    }
    div#bottom-footer .footer-right {
      width: 100%;
      text-align: left;
      order: 1;
    }
    div#bottom-footer .selectors-form {
      justify-content: flex-start;
      margin: 0;
    }
    div#bottom-footer #payment {
      text-align: left;
    }
    div#bottom-footer  .footer-section .disclosure__toggle {
      height: 44px;
      width: 80px;
    }
    section.footer-block {
      vertical-align: top;
    }
  }
</style>
</div>

</div>
  </main>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/eventemitter3.min.js?v=2793973835332612354"></script>
  <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/theme.js?v=9880637329633590853"></script>
  <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"></script>

  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a>
  
  <div class="fancybox-wrapper"></div>


  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=127142210767229";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  

  <script>
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.minSize = 360;
  </script>

  <script type="text/javascript">
    new WOW().init();
  </script>

  <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/ls.rias.min.js?v=1402770684781964143" defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/ls.bgset.min.js?v=6753403235288137706" defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/lazysizes.min.js?v=10352781251980287060" defer="defer"></script>

  <script>
    document.documentElement.className =
    document.documentElement.className.replace("no-js","js");
  </script>

 <script src="//cdn.shopify.com/s/files/1/1058/0630/t/35/assets/jquery.fancybox.js?v=7804845914269420098" defer="defer"></script>
<script type="text/javascript">if(typeof window.pn === "undefined"){window.pn = {};}if(typeof window.pn.shop === "undefined"){window.pn.shop = {};}window.pn.shop={"id":5051,"shopify_domain":"laviye.myshopify.com","form_selector":"form[action^='/cart/add']","button_selector":"form[action^='/cart/add']:first [type=submit]:visible:first","app_enabled":true,"charge_active":true,"account_status":"installed","custom_css":"","cart_label_text":"Pre-Order Item","button_style_id":null,"description_style_id":null,"cart_label_style_id":null,"badge_style_id":null,"apply_default_to_all":false,"timezone":"Europe/London","product_image_container_selector":"div.product-single__photos:first,#slider-product-template","order_tag":"Pre-order","variant_selector":"form[action^='/cart/add']:first select:visible, .radio-wrapper fieldset, form[action^='/cart/add']:first input[type='radio']","collection_photo_container_selector":"","collection_grid_id_selector_prefix":null,"enable_collection_page_badge":true,"primary_domain":"www.laviye.com","stock_insufficient_message":"Not enough stock. Only {{qty}} remaining.","limit_order_quantity":false,"enable_collection_page_button":true,"add_to_cart_text":"Add to Cart","show_collection_badge_only_if_all_variants_out_of_stock":false,"out_of_stock_text":"Sold Out","notify_when_partial_preorder":true,"notify_when_partial_preorder_message":"Only {{qty}} unit(s) in stock. {{qty}} unit(s) will be filled now and the rest will be on pre-order.","partial_preorder_notice_placement_selector":"","fss_selector_prefix":"","fss_parent_selector":"form","quickview_support_enabled":true,"product_link_selector":"a[href*='/products/']:visible","product_link_selector_has":"img","product_container_handle_element_selector":"a[href*='products/{{handle}}']","product_container_handle_element_selector_has":"img","product_container_handle_element_selector_closest":"div, li, article, figure","money_format":"\u003cspan class=money\u003e£{{amount}} GBP\u003c/span\u003e","left_a_review":false,"display_you_got_a_preorder_popup":true,"display_you_got_a_preorder_reminder":false,"using_settings_method":true,"mixed_cart_warning_title":"Warning: you have pre-order and in-stock items in the same cart","mixed_cart_warning_text":"Shipment of your in-stock items may be delayed until your pre-order item is ready for shipping. To ensure faster delivery of your in-stock items, we recommend making two separate orders - one for your pre-order items and one for your in-stock items. ","mixed_cart_warning_enabled":true,"preorder_emails_enabled":false,"email_credit_remaining":0,"sender_email":"","sender_email_verified":false,"pn_note_label":"PN-Note","preorder_email_cc_enabled":false,"update_pending":false,"ensure_preorder":false,"js_version":1,"never_load_jquery":false,"hide_buy_now_button":false,"plan_id":3,"clickless_quickview_support_enabled":false,"reinit_collection_badges":false,"preorders":4,"total_preorder_product_value":25430,"total_order_value":44758,"always_sync_inventory":false,"product_page_price_selector":"","cart_subtotal_selector":"","checkout_button_selector":"","quantity_button_selector":null,"quantity_field_selector":null,"mutation_ids":"","mutation_classes":"","line_item_original_price_selector":"","line_item_total_price_selector":"","ajax_line_item_original_price_selector":"","ajax_line_item_total_price_selector":"","ajax_cart_item_key":null,"cart_item_key":"","theme_id":2,"enabled_line_item_discount":true,"enabled_ajax_cart":true,"product_page_sale_price_selector":null,"bcc_emails":"laviyeofficial@gmail.com"};window.pn.styles=[{"id":17834,"created_at":"2019-04-24T20:18:10.837Z","updated_at":"2021-01-29T14:14:14.888Z","text_color":"#ffffff","font_size":"20","font_family":"","padding":"","margin":"","background_color":"#ff0000","border_color":"#ffffff","border_radius":"","border_width":"","shape":null,"custom_css":null,"shop_id":5051,"badge_shadow":true,"badge_gradient":true},{"id":17835,"created_at":"2019-04-24T20:18:10.855Z","updated_at":"2019-04-24T21:12:46.861Z","text_color":"","font_size":"0","font_family":"","padding":"0","margin":"","background_color":"","border_color":"","border_radius":"","border_width":"","shape":null,"custom_css":null,"shop_id":5051,"badge_shadow":true,"badge_gradient":true},{"id":17836,"created_at":"2019-04-24T20:18:10.862Z","updated_at":"2021-01-29T14:06:18.488Z","text_color":"#ffffff","font_size":"10","font_family":"","padding":null,"margin":null,"background_color":"#ff0000","border_color":null,"border_radius":null,"border_width":null,"shape":null,"custom_css":null,"shop_id":5051,"badge_shadow":true,"badge_gradient":false},{"id":17837,"created_at":"2019-04-24T20:18:10.886Z","updated_at":"2019-04-24T20:40:50.104Z","text_color":"","font_size":"","font_family":"","padding":"","margin":"","background_color":"","border_color":"","border_radius":"","border_width":"","shape":null,"custom_css":null,"shop_id":5051,"badge_shadow":true,"badge_gradient":true}];</script><script type="text/javascript">window.pn.datastore={"theme_setting":{"id":2,"theme_name":"Default","product_page_price_selector":".price__pricing-group .price__regular .price-item.price-item--regular, .price-item--sale","cart_subtotal_selector":".cart__subtotal:visible, h2.subtotal:visible, p.subtotal_amount:visible, span.total:visible, .mini-cart__total-price:visible, .cart__total:visible, #cartform div.align-right h2:visible, .ajaxcart__subtotal:visible, .cart-total:visible, #basket-right h4:visible, .subtotal .price:visible, .cart-footer__subtotal:visible, .cart-subtotal--price:visible, .cart-drawer__subtotal-price:visible","checkout_button_selector":"input[type='submit'].action_button.right:visible,input[name='checkout']:visible,button[name='checkout']:visible,[href$='checkout']:visible,input[name='goto_pp']:visible,button[name='goto_pp']:visible,input[name='goto_gc']:visible,button[name='goto_gc']:visible,.additional-checkout-button:visible,.google-wallet-button-holder:visible,.amazon-payments-pay-button:visible","quantity_button_selector":"form[action=\"/cart\"] .js--qty-adjuster, form[action=\"/cart\"] .js-qty__adjust","quantity_field_selector":"","mutation_ids":"","mutation_classes":"","line_item_original_price_selector":"{{ item.price | money }},{{ item.original_price | money }}","line_item_total_price_selector":"{{ item.line_price | money }},{{ item.original_line_price | money }}","ajax_line_item_original_price_selector":"","ajax_line_item_total_price_selector":"","ajax_cart_item_key":null,"cart_item_key":"","created_at":"2020-07-13T10:32:45.617Z","updated_at":"2020-07-13T10:32:45.657Z","product_page_sale_price_selector":"span.price-item.price-item--sale, .price__sale.price-item.price-item--regular"}};</script><script src="https://preorder-now.herokuapp.com/widget/javascript?shop=laviye.myshopify.com"></script><style>
div[class*='preorder-container-'].product__image-container{overflow:visible;}
#Collection .grid--view-items{overflow:visible;}
div[class*='preorder-container-'],li[class*='preorder-container-'],td[class*='preorder-container-']{position:relative;}

.preorder-badge.rectangle {
  position: absolute;
  top:20px;
  right:20px;
  padding:10px;
  width:20%;
  text-align: center;
  font-weight: bold;  
  color: #FFF;
  overflow:hidden;
}

.preorder-badge.circle {
  display: table; 
  position: absolute;
  top:20px;
  right:20px;
  padding:10px;
  width:100px;
  height:100px;
  border-radius:50%;
  text-align: center;
  font-weight: bold;  
  color: #FFF;  
  overflow:hidden;
}

.preorder-badge.circle span{
  display: table-cell;
  vertical-align: middle;
}

.preorder-badge.ribbon {
  position: absolute;
  right: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.preorder-badge.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  width: 100px;
  display: block;
  position: absolute;
  top: 19px; right: -21px;
}
.preorder-badge.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #888888;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #888888;
}
.preorder-badge.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #888888;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #888888;
}
.cart__row .preorder-badge{
  display:none;
}
@media only screen and (max-width: 600px) {
	.preorder-badge.circle{
		top: 10px;
		right: 10px;
		padding: 5px;
		width: 60px;
		height: 60px;
		border-radius: 50%;
		text-align: center;
		font-weight: bold;
		overflow: hidden;
		line-height: 16px;
		font-size: 12px;
	}
}

/* PN MIXED CART WARNING MODAL CSS */
.jquery-modal.blocker.current{
  z-index:999999999;
}
.pn-mixed-cart-warning-title{
  margin-top: 30px;
  margin-bottom: 10px;
  text-align:center;
}
.pn-modal {
  opacity:1;
  display:none;
  overflow:visible;
  padding:0px;
}
.pn-manual-modal-container{
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ 
}
.pn-manual-modal-content{
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */  
  max-width:600px;
}
.pn-mixed-cart-warning-content{
  text-align:center;
}
#pn-modal-close-btn{
  float:right;
  font-size:22px;
  cursor:pointer;
}
.loading-image {
  width: 85px;
}
.loader{
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
  overflow: auto;
  right: 0;
  bottom: 0;
  background-color: rgba(255, 255, 255, 0.79);
  display: none;
  align-items: center;
  justify-content: center;
}
.ui-widget-overlay{
  opacity: 0.6 !important;
  background: #fff !important;
}
.ui-dialog{
  position: fixed !important;
  height: auto;
  width: 300px;
  top: 0 !important;
  left: 363.5px;
  display: block;
  z-index: 10000000000;
}

progress {
  text-align: center;
  height: 1.6em;
  width: 100%;
  -webkit-appearance: none;
  border: none;
  
  /* Set the progressbar to relative */
  position:relative;
  border-radius: 4px;
  color: white;
  overflow: hidden;
}
progress:before {
  content: attr(data-label);
  font-size: 0.8em;
  vertical-align: 0;
  
  /*Position text over the progress bar */
  position:absolute;
  left:0;
  right:0;
}
progress::-webkit-progress-bar {
  background-color: #f5f5f5;
}
.nav-progress::-webkit-progress-bar{
  background-color: #ffffff !important;
}
progress::-webkit-progress-value {
  background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
  background-image: -o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
  background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
  background-color: #5cb75c;
}
progress::-moz-progress-bar {
  background-color: #f5f5f5;
}
.progress_percent{
  left: 9px;
  display: flex;
  position: absolute;
  z-index: 100;
  margin-left: 64%;
}
.pg-mg{
  margin-left: 50%;
}
.setting-note{
  padding-left: 20px;
}

.watch-later-btn{
  background-color: #fff;
  border-color: #ccc;
  box-shadow: none;
  color: #333;
  display: flex;
  align-items: center;
}

.watch-later-btn span{
  margin-right: 6px;
  position: relative;
  top: 2px;
}
.watch-later-btn img{
  height: 20px;
  width:20px;
}

.line-through {
   text-decoration: line-through;
}

</style><script type="text/javascript">
  
    window.pn.cart = {};
  	window.pn.cart = {"note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"GBP","items_subtotal_price":0,"cart_level_discount_applications":[]}
    window.pn.cart.items = [];

    

    if (typeof window.pn.cart.items == "object") {
      for (var i=0; i<window.pn.cart.items.length; i++) {
        ["sku", "vendor", "url", "image", "handle", "product_type", "product_description"].map(function(a) {
          delete window.pn.cart.items[i][a]
        })
      }
    }
  
</script>


<script>
if(typeof pn === "undefined"){
  pn = {};
}
if(typeof pn.settings === "undefined"){
  pn.settings = {};
}
pn.settings.defaultSetting={"id":14264858,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"default","n":null,"o":true,"handle":null,"p":null,"y":null,"q":false,"r":true,"s":null,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"};
pn.settings.singleProductSettings=[{"id":14264863,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911069986976","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":0,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264864,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911070019744","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":3,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264865,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911070052512","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":5,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264867,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911070118048","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":0,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264866,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911070085280","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":0,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264862,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911069954208","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":5,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"},{"id":14264859,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"variant","n":"36911069921440","o":true,"handle":"african-print-corset-dress-ankara-sleeveless-corset-knee-dress-jamila","p":"5807872999584","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/jan-100.jpg?v=1612527153","q":false,"r":true,"s":5,"t":null,"u":1,"v":false,"w":"ribbon","tag":null,"x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"}];
pn.settings.tagSettings=[{"id":5496984,"a":"Pre-Order Now","b":true,"c":null,"d":"Out of stock","e":false,"f":"Only {{qty}} remaining","g":"Ships 1st April 2021","h":"below","i":true,"j":"Pre-Order","k":"2021-01-28T22:19:00.000Z","l":"2021-03-31T11:19:00.000Z","m":"tag-parent","n":"26577734857","o":true,"handle":"julia-shoes","p":"8137928329","y":"https://cdn.shopify.com/s/files/1/1058/0630/products/IMG_1110.JPG?v=1484178236","q":false,"r":true,"s":0,"t":null,"u":1,"v":false,"w":"ribbon","tag":"pre-order","x":null,"z":"no_discount","aa":"0.0","ab":0,"price":"0.0","compare_at_price":"0.0"}];
</script>
<style type="text/css">
  .pn-original-subtotal{
    text-decoration: line-through;
    display:inline-block;
  }
  .pn-discounted-subtotal{
    font-weight:bold;
    margin-left:20px;
    display:inline-block;
    font-size: 1.3em;
  }

  .pn-line-item-original-price {
    text-decoration: line-through;
  }

  .pn-line-item-discounted-price {
    font-size: 1.2em;
    margin-left: 8px;
  }
</style>



<div id="pn-mixed-cart-warning" class="pn-modal">
  <div id="pn-mixed-cart-warning-content">
    <span id="pn-modal-close-btn">x</span>
    <h2 id="pn-mixed-cart-warning-title"></h2>
    <div id="pn-mixed-cart-warning-text"></div>
  </div>
</div>
   


<div class="smile-shopify-init"
  data-channel-key="channel_ExKeVMbI0UnQ5mFUMBj0262r"

></div>


</body>
  
</html>
