# Content Managment

Content is currently managed by entering variables in the config.php file. This is where things are set like colors, social media links, title etc.
The config file used is set in index.php before any html is output.

The config.php may include other config files from the config folder to conditionaly include configs - for example to use a different config before a release date.

# CSS

There are 2 style sheets. style.css where pretty much all the styles go and campaign.css which can override styles and is where the campaign or theme specific css goes such as colors, banner image, font etc.

style.css is editied manualy but campaign.css is not touched - it is compiled and the css is determined by variables in the config.

campaign.css is created by running...

    php build.php

to build to a differnt css file pass in the file name such as...

    php build.php last_ep

the above would create a file named last_ep.css in the css foler

# Quick Start

1. fill out details in config.php
2. run php build.php

# Todo

- add ability to have a promo section
- add config.example.php with all the properties needed but blank
- when building dent act, add theme to config to use an different template
- make script to resize images
- use one css file and have php concat and minify when build is ran