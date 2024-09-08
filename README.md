# Poxe
This is mainly written by PHP and introduced with Fastly.

# Fastly: Hello world!

This is a personal website built with Vite, designed for publishing to a Fastly Deliver service that'll serve your content from the CDN. Once you have your website published, it'll benefit from Fastly's performance and security, and you'll be able to access Observability stats in the Fastly app. 🗺📊

While you're working in the editor you'll see your changes update live in the preview. Then when you leave the editor, Glitch will run vite to build your site into a bundle for optimum performance. Then Fastly will deliver this bundle super fast and securely to your users.

___Check out FASTLY.md to set up your account then the TODO to publish your site!___ ⚙️

The TL;DR

* Sign up for a <a href="https://www.fastly.com/signup/" target="_blank">free Fastly developer account</a> and grab an API token
* Pop your token into the `.env`
* Open the **Terminal** and run `npm run setup`
* Grab the service ID from the **Terminal** output and pop it into the `.env`
* Run `npm run publish`
* Grab your published URL from the **Terminal** output and open it 

_You can also point your own domain at your published project using Fastly TLS!_

## What's in this project?

← `assets`: Add images here and copy the links into your code to show them in your site.

← `.env`: Pop your Fastly API token in here, then the service ID after you enter the setup command.

← `.gitignore`: Files we tell git to ignore and that will also be hidden in the Glitch editor (unless you remove them from the list).

← `FASTLY.md`: Guide to getting your Fastly account set up.

← `LICENSE`: Usage and third-party tooling info.

← `README.md`: That’s this file where we tell you all about the project.

← `TODO.md`: Next steps to publish to Fastly.

← `index.html`: This is the main page vite uses to build your site.

← `package.json`: Dependencies for the site and scripts for publishing to Fastly.

← `script.js`: The website JavaScript with some helper code for opening files from the preview.

← `style.css`: Stylesheet for your website.

← `vite.config.js`: The config that Vite uses to bundle your site from the files in the project.

← `watch.json`: A file Glitch uses to build and preview your site.

![Glitch](https://cdn.glitch.com/a9975ea6-8949-4bab-addb-8a95021dc2da%2FLogo_Color.svg?v=1602781328576)

## You built this with Glitch!

<a href="https://glitch.com" target="_blank">Glitch</a> is a friendly community where millions of people come together to build web apps and websites.

- Need more help? <a href="https://help.glitch.com/" target="_blank">Check out our Help Center</a> for answers to any common questions.
- Ready to make it official? <a href="https://glitch.com/pricing" target="_blank">Become a paid Glitch member</a> to boost your app with private sharing, more storage and memory, domains and more.
