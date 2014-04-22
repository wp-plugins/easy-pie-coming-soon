=== Easy Pie Coming Soon ===
Contributors: bobriley
Donate link: http://easypiewp.com/donate/
Tags: coming soon, coming soon page, construction, landing page, launch, launch page, maintenance, maintenance mode, offline, unavailable, under construction, newsletter, email, facebook, twitter, googleplus
Requires at least: 3.5
Tested up to: 3.9
Stable tag: 0.5.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily let website visitors know that your website will be coming soon - and collect emails while it's down!

== Description ==
Need to let your visitors know your site is being worked on while you gather email addresses? The Easy Pie Coming Soon plugin makes it easy. 

### Basic Features
* **Announce your site is 'coming soon'** Inform visitors that your site is coming soon.
* **Collect Emails** Gather name and emails from site visitors!
* **Social Support** Show icons and links to Facebook, Twitter, and Google+.
* **Fully Responsive** Looks great on everything from cell phones to tablets to desktops.
* **No HTML or CSS required.** Don't know HTML or CSS? No problem. The plugin easly lets non-techies make a great looking coming soon page.
* **Built in backgrounds.** Includes several nice looking backgrounds.
* **Use your own background.** You don't like the included backgrounds? No problem - use your own!
* **Add your own logo.** Easily add your own logo using the WordPress Media Library.
* **Preview.** Preview your Coming Soon page before making it live!

### Advanced Features
* **Export Email Addresses to CSV** Need to get the emails into a site like MailChimp, AWeber or some other external system? No problem - simply use CSV export option!
* **Custom CSS.** Easily add CSS from the Admin page to customize the look and feel.

== Installation ==

1. Click Plugins/Add New from the WordPress admin panel
1. Search for "easy pie Coming Soon" and install

-or-

1. Download the .zip package
1. Unzip into the subdirectory 'easy-pie-coming-soon' within your local WordPress plugins directory
1. Refresh plugin page and activate plugin
1. Configure plugin using *settings* link under plugin name or by going to Settings/Coming Soon

== Frequently Asked Questions ==

= Why is my site is still viewable even though I've turned on Coming Soon? =
Coming Soon is only shown to visitors who are not logged in. To verify, use a different browser type than the one you're logged in with to see what Visitors see when they visit (i.e. if you're logged in with Chrome, view the site in Firefox or Internet Explorer or vice versa). 

Alternatively, you view your site using the private mode of the same browser.

= What happens if a search engine hits my site while it's in Coming Soon? =

It depends on the 'Return Code' setting on the Settings Page.  

If set to the default of '503' search engines visiting your site will be returned a '503' status with 'retry later' HTTP header when in Coming Soon. This lets search engines know that your site is temporarily down and to come back 24 hours later.

If you have this set to '200' the search engine will think that this is your normal site and index it, potentially replacing your regular site information in the search engine.  Because of this, it's recommended that you leave this setting at '503' unless you fully understand the ramifications of switching to '200'.

= I can't get out of Coming Soon. Help! =

Every once in a great while other plugins installed on a system can interact with Coming Soon to prevent access to wp-admin. If you find yourself in this unfortunate situation, [please contact me](mailto:bob@easypiewp.com).

= I found a bug or have seen other plugins interfere with Coming Soon. What should I do? =

Please capture as much information you can about your system, specifically use the error log to gather new information if you are comfortable. The [Easy Pie Error Log Guide](http://easypiewp.com/quickly-diagnose-wordpress-problems-using-error-log/) outlines how to do this.
Then, please [let me know](mailto:bob@easypiewp.com) what's going on, with as much detail as you have.

== Screenshots ==

1. Example page 
2. Display configuration
3. Content configuration
4. Settings
5. Subscriber list

== Changelog ==

= 0.5.1 =
* Bug fix: require_once fixed for some Linux installs (thanks Ajith Nair)

= 0.5.0 =
* Initial release

== Upgrade Notice ==

= 0.5.1 =
* Bug fix: require_once fixed for some Linux installs (thanks Ajith Nair)

= 0.5.0 =
* Initial release
