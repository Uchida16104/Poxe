# TODO 🚧

You can publish your app to a Fastly deliver service by following the steps below!

## Setup ⚙️

Your site is set up to publish to Fastly as soon as you have your dev account details sorted. 

🪄 _Soon we'll have buttons in the Glitch editor you can click to publish your app, but while we work on that you can achieve the same effect with a couple of commands!_

### 1. Set up your Fastly account and copy an API token into this project

Follow the steps in **FASTLY.md** to get your account and API token ready. 

### 2. Set up your service and grab the ID

Once you have your token in the `.env`, you're ready to publish:

* Open the **Terminal**
* Enter `npm run setup`

![Setup Command](https://cdn.glitch.global/0c9a51ab-9112-4db8-aa43-9ebb40296f67/publishsetup.png?v=1684514739845)

* Grab the service ID returned in the **Terminal** output and pop it into your `.env` as the value for `FASTLY_SERVICE_ID`

![Env for service id](https://cdn.glitch.global/0c9a51ab-9112-4db8-aa43-9ebb40296f67/Screenshot%202023-05-19%20at%2017.46.15.png?v=1684514786534)

### 3. Publish your project 

* In the **Terminal**, enter `npm run publish`

![Published domain](https://cdn.glitch.global/c6d6dd09-c7cd-44a2-b570-2426d35402bd/publisheddeliver.png?v=1684515343168)

* Open the link displayed in the **Terminal** to see your site deployed to Fastly's CDN (give it a minute if it doesn't show up straight away) 👀

That's it! You don't need to publish again, Fastly will keep serving your site from this URL unless you deactivate the service.

## Keep going! 🏗️

💡 Tip: The scripts in this app publish to a Fastly domain including your project name, for example: <a href="https://fastly-hello-world.global.ssl.fastly.net/" target="_blank">fastly-hello-world.global.ssl.fastly.net</a> – your site will also automatically be available at a `.freetls.fastly.net` domain.

🚧 You can <a href="https://docs.google.com/document/d/144qImobxwY3T95vPZWb-7M8MwCRFuxGNQLoo9JaDAhs/" target="_blank">point your own domain</a> at your site using Fastly too.

⚠️ If you receive an error because your site is attempting to publish to a duplicate name, that might mean the Fastly domain for your Glitch project subdomain isn't available – try changing the Glitch project name, or editing the `publish` script in `package.json` to set the name directly, instead of referencing the project name automatically using `$PROJECT_DOMAIN`.

📈 Use the Fastly app to check out stats for your site – select the __Observability__ tab to track requests in realtime and historically! <a href="https://docs.fastly.com/en/guides/about-the-observability-page" target="_blank">Check out the Fastly docs for more info.</a>
