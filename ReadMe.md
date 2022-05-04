# ❄️ Snow Day Plugin

### 🚨 Requires OctoberCMS 2.0

## ✨ What does this plugin do?
Provides the ability to quickly add a cross-site banner using a component.

## ❓ Why would I use this plugin?
Helpful for quick announcements that all website visitors must see. For small business, this is useful if an early closure due to weather or other reason. For larger businesses, this is useful if there a service outage or increased ticket wait times.

## 🖥️ How do I install this plugin?
1. Clone this repository into `plugins/albrightlabs/snowday-plugin`
2. Run the console command `php artisan october:migrate`
3. From the admin area, go to Settings > Snow Day Banner and configure the plugin

## ⏫ How do I update this plugin?
Run either of the following commands:
* From the project root, run `php artisan october:util git pull`
* From the plugin root, run `git pull`

## 🚨 Are there any requirements for this plugin?
You'll need to add the component 'Snow Day Banner' to your theme. It is recommended to add this to a theme's layout, but it can be added to a page if desired. You can have the component added without the banner displaying--the purpose is to enable/disable it from the settings.

## ⚙️ Explanation of settings
* Enable the Snow Day Banner's visibility
* Manage the content of the banner (supports raw HTML; it's recommended to keep the banner simple)
* Set whether the banner can be hidden
* Add any custom CSS

## ✨ Future plans
* None at this time but please send suggestions to support@albrightlabs.com.
