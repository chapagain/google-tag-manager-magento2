# Google Tag Manager - Extension for Magento 2.x

This extension allows you to integrate Google Tag Manager on your Magento site so that you can track
and gather valuable visitor data from your website and make important decisions to grow your
business. This extension also provides e-commerce transaction tracking feature. You just need to enter
your Tag Manager container id in the extension's configuration settings.

[Google Tag Manager](https://support.google.com/tagmanager/answer/6102821?hl=en) allows you to quickly and easily update tags and code snippets on your website or
mobile app, such as those intended for traffic analysis and marketing optimization. You can add and
update AdWords, Google Analytics, Floodlight, and 3rd party or custom tags from the Google Tag
Manager user interface instead of editing site code. This reduces errors, frees you from having to
involve a web developer, and allows you to quickly deploy new features or content onto your site.

Google Tag Manager are FREE of charge services offered by Google. You need to create a separate
Google Tag Manager account from [here](https://tagmanager.google.com/?hl=en#/admin/accounts/create) and link the account with your Magento store by adding the
"Container ID" of your Google Tag Manager account to the current extension's configuration setting.

## Features

- Tracks views of the product
- Tracks categories and price of the product
- Tracks transaction of the product by SKU, name, category, price and quantity
- Tracks the transaction purchase revenue, tax and shipping cost
- Tracks the coupon code

## Installation

1. The module's files should be placed in folder: `app/code/Chapagain/GoogleTagManager`
2. Open terminal/command-prompt
3. Go to your Magento website’s root directory with the following command:
    - `cd /path/to/your/magento/root/directory`
4. Enable the module and clear static content with the following command:
    - `php bin/magento module:enable Chapagain_GoogleTagManager –clear-static-content`
5. Do setup upgrade with the following command:
    - `php bin/magento setup:upgrade`
6. Flush cache with the following command:
    - `php bin/magento cache:flush`
7. That's all. The extension is installed now.

## Configuration Settings

1. Login to your Magento site's admin
2. Go to `STORES → Settings → Configuration` page
3. On left sidebar, click on `CHAPAGAIN EXTENSIONS → Google Tag Manager` menu
4. Here, you will see the following settings from where you can: 
    - Enable/Disable module
    - Enable/Disable data layer 
    - Add container ID of your site from Google Tag Manager
    
## Links

- This extension is also available on Magento Marketplace: [Google Tag Manager on Magento Marketplace](https://marketplace.magento.com/chapagain-googletagmanager2.html)
- BLOG: [http://blog.chapagain.com.np/google-tag-manager-magento-2-extension-free/](http://blog.chapagain.com.np/google-tag-manager-magento-2-extension-free/)
