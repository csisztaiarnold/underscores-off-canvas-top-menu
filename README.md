# Description

Wraps Underscores WordPress starter theme's header and injects a barebone off-canvas top menu for Underscores' mobile resolution (below 600px).

Tested on Chrome, Firefox, Safari, Opera, IE11+

# Installation

1. Requires a [default Underscores theme](http://underscores.me/). Copy the theme into WordPress' themes folder and enable it in the admin area.
1. Copy the plugin's folder into WordPress' plugin directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add some menu items to the primary menu (or whichever menu you are using)

# Frequently Asked Questions

**Where's my adminbar?**

It's disabled as it conflicts with the off-canvas menu.

**Where's my WordPress tagline?**

Hidden with CSS. Feel free to put it back.

**How do I edit the style of the menu?**

Simply create a new stylesheet in the theme's folder and override the plugin's default styles. **DO NOT** edit the plugin files directly!

There are also some basic styling and functionality options in the plugin's settings page:

![Plugin Settings](http://projects.idevele.com/underscores-off-canvas-top-menu/options.png)

**The plugin isn't working. Why?**

Make sure that you are using an [unchanged Underscores theme](http://underscores.me/). Don't edit the HTML markup inside the **header** tag (unless you know what are you doing) and the **header**'s ID must remain **#masthead**. 

**Will the plugin work with themes other than Underscores?**

As yet, no, unless they're using the same markup for the header as Underscores.

## Changelog

### 0.2
Added basic styling and functionality options to WP's administration area

### 0.1
Initial version

### Upgrade Notice

None so far.

## Thanks To

- **József Mikus** for the straightforward **overflow-y:scroll** hack in case the menu's vertical size exceeds the screen's size.
- **Ćuković Miloš** for testing and ideas.
