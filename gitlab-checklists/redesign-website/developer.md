# Developer Checklist (Redesign)

# Pre-Live

## Discovery

- [ ] Raise a ticket with telecoms to double-check all numbers/setup is complete
- [ ] Add VAT & Registration numbers into website
- [ ] Is this site having any additional products that need adding, like Data Capture or Mouseflow?
- [ ] Ensure you know about domains - primary & aliases
- [ ] Ensure you know how emails will be set up
- [ ] Ensure `thanks@` email address has been set up if possible (or use Formspree or Send In Blue)
- [ ] Do they have a PPC campaign running to their old site? If so, that will need pausing!

## Reviews

- [ ] Does the current site have [Reviews.co.uk](http://resources.adtrak.agency/reviews-co-uk-setup/)?
- [ ] `.htaccess` has /reviews redirect
- [ ] Site has footer widget with stats in it, badge or aside widget with stars - aim to mimic current site

## General

- [ ] Delete unused plugins i.e. Slickplan importer, WooCommerce plugins (if applicable) etc.
- [ ] Update all your plugins & core
- [ ] Browse the site as a potential end user - are there any problems or irregularities?
- [ ] Does the site have a favicon?
- [ ] Ensure that Redirection plugin is active
- [ ] Are you serving the right size of image, rarely using the full image?
- [ ] Is your map's scroll function not interfering with your website scroll?
- [ ] Do you have any parked domains that need copying over?
- [ ] Create staging URL on Salesforce
- [ ] Create `cookies-policy` page
- [ ] Create `404error`
- [ ] Add a user for IM to create blog posts (with user name of CLIENTNAME eg. Accent on Travel)
- [ ] If it's a Breeez site, is it using the Breeez logo in the footer and linking to the Breeez website?

## Design

- [ ] Check hover states for all links
- [ ] On states for all pages (main and sub) - mobile & desktop
- [ ] Check Contact page - ensure contact details aren't buried down the page
- [ ] Links look like links
- [ ] Call to actions - need to link? Don't link to self page?
- [ ] Relevant pictures for each page

## Phone Numbers

- [ ] Site is using numbers supplied by Adtrak (NOT their direct line), unless otherwise instructed
- [ ] Ensure site displays the location dynamics for IM & PM across the whole site and is styled accordingly
- [ ] Ensure the default SEO phone number is the same in the LD and the fallback in Site Specific: Phone & Location
- [ ] Are phone numbers displaying correctly on both mobile and desktop?
- [ ] Ensure phone numbers are clickable

## Scripts & Styles

- [ ] Tidy CSS & HTML
- [ ] Is your CSS and JS being minified?
- [ ] Remove empty folders, unused files, unused images

## Wordpress

- [ ] Ensure the admin and user email in WordPress is `wordpress@adtrak.co.uk`
- [ ] Ensure the user password is no longer `adtrak001` (WordPress)
- [ ] Amend/add to Salesforce
- [ ] Ensure any existing news posts are ported to your new build

## Forms

- [ ] Check the forms on staging - are they sending OK?
- [ ] All fields are relevant (postcode/company) - are any more required?
- [ ] Check the `to` address for each form - will the client get it?
- [ ] Check the messages each form displays - are they in keeping with the tone of the website?
- [ ] Form is sending via an SMTP plugin and `thanks@` OR using `Formspree` or `Brevo`
- [ ] Update tracking code to match your form solution

## Ecommerce
- [ ] WooCommerce store settings have been set up
- [ ] Payment gateways have been set up
- [ ] Taxes have been set up if applicable
- [ ] Shipping zones / fees have been created
- [ ] Product filters / category pages are working and styled appropriately
- [ ] Single Product is working and styled appropriately
- [ ] SinStock management is working correctly (if being used)
- [ ] Product variations are working correctly
- [ ] Basket / Checkout is working and styled appropriately
- [ ] Register/Log in screens are working and styled appropriately
- [ ] My Account is working and styled appropriately
- [ ] Complete a test purchase using 'cash on delivery' payment method, or with a £0.00 product
- [ ] Thank you page for order is styled appropriately
- [ ] Shipping fees are calculated correctly
- [ ] Order Emails are being sent correctly
- [ ] Order Emails are styled appropriately

## Accessibility
- [ ] Conduct a Lighthouse test (using Chrome Dev Tools) and check for any quick accessibility improvements that can be made
- [ ] Ensure all images have explicit widths and heights

Identify and resolve common issues:

- [ ] Make sure buttons have `aria-label` attributes
- [ ] Make sure that the mobile navigation isn't tab-indexable on desktop (Press the tab key from the top of the website and make sure that the tab cursor doesn't go off-canvas). 
- [ ] Make sure buttons and links have descriptive labels (do not use 'Click here' for example)
- [ ] Make sure links have :focus attributes
- [ ] Images have `src` attributes (leave empty if lazyloading) and descriptive `alt` tags and ensure these alt tags are pulled through
- [ ] Ensure the heading elements are in hierarchical order (`h1` > `h2` > `h3` > `h4`) and do not skip levels.
- [ ] Check that the site can be rotated into landscape mode on mobile devices and still looks/functions OK (tip: you can use the `lansdcape:` class to make landscape-specific adjustments)
- [ ] Rerun a lighthouse test to check for improved score

## Proofing

- [ ] Xenu Link Sleuth / Screaming Frog - check for broken links
- [ ] On staging, do a Lighthouse check - are there any areas you can improve on before you proceed?
- [ ] Image compression - checks images after compression. Are they still good enough?

## Device Testing

[Lambda Test](https://adtrak.lightning.force.com/lightning/r/Password__c/a0J1n00000CwHbeEAF/view)

- [ ] Windows | Edge
- [ ] Windows | Chrome
- [ ] Windows | Firefox
- [ ] Mac | Safari
- [ ] Mac | Chrome
- [ ] Mac | Firefox
- [ ] iOS | iPhone X
- [ ] iOS | iPhone 14
- [ ] Android | Google Pixel 6
- [ ] Android | Samsung Galaxy S22

## Font Licensing

- [ ] Fill out [Font Registration form](https://docs.google.com/forms/d/e/1FAIpQLSdfx_zydJCH0zbfXzipgDVK6KWm3SwRX9UAZeHosKkjsGp-GA/viewform)

## Peer Checklist

- [ ] Set a Project Task to the Copywriter to check the site for spelling errors
- [ ] Create a new Gitlab issue for `Peer Checklist`
- [ ] Set a Project Task to a discipline peer to do their peer checks, and assign the above issue to them

# Go Live

## Discovery

- [ ] Confirm you have confirmation from the IMer to put the site live
- [ ] Confirm you have confirmation from the copywriter it has been checked for spelling errors
- [ ] Ask Paid Marketing Consultant to pause PPC (if applicable)

## Deployment, Emails & DNS

The deployment/emails/DNS process has its own guides and things to do. Please refer to the resource centre.

# Post-Live

## UpdraftPlus
- [ ] Follow [this guide](https://arc.adtrak.co.uk/books/web-design-development/page/updraftplus-backups) to add UpdraftPlus to your website

## Domains Admin

- [ ] Ensure Staging URL is on Salesforce
- [ ] Update Primary URL on Salesforce with any new information (i.e. if it is now running on HTTPS)

## Forms

- [ ] Test each form - confirm receipt
- [ ] Ensure you have thank you page(s) or a script to track conversions
- [ ] Check the form tracking is working with the Internet Marketer

## General

- [ ] Final Lighthouse speed check - can anything be improved?
- [ ] Ecommerce - check ecommerce tracking is working with the Internet Marketer
- [ ] If applicable, let PPC Consultant know they can start their campaign on the new website
- [ ] Liaise with Internet Marketer (and Paid Marketer where relevant) to check everything is performing as expected (i.e. redirects are working)
- [ ] If applicable, check that Engage is recording data
- [ ] Update your time in Salesforce for delivery tasks

## StatusCake

- [ ] Add the website to [StatusCake](https://arc.adtrak.co.uk/books/web-design-development/page/statuscake/), using the FULL url with HTTP(S)

## Admin

- [ ] Archive any old Gitlab projects for the previous site, if applicable
- [ ] Delete any superfluous/old projects in DeployHQ
- [ ] Backup and delete any old dev-server or web-server versions
- [ ] Delete any old staging sites for the old website

## Live Email

- [ ] Visit the ['Site is live' email builder](https://email-builder.adtrak.agency/) and create live email with the relevant details
- [ ] CC Account Manager, Paid Marketer & Internet Marketer; BCC sitelaunch@adtrak.co.uk 
