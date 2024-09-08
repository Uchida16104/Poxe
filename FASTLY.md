# Fastly Account Setup ⚙️

You'll need a Fastly account and API token in your project to publish your site.

## Get a Fastly account 

* Sign up for a free <a href="https://www.fastly.com/signup/" target="_blank">Fastly developer account</a>

## Get an API token

![Token setup](https://cdn.glitch.global/0aee1feb-f6aa-4a3e-8585-b0f312670925/create-token.png?v=1715631149729)

Get an API token from the Fastly app (if you don't already have one):

* Select your username at the top right and navigate to **Account**. Open the **Personal profile**, **API Tokens** section from the menu on the left and click the **Create Token** button. 
* Enter the following details:
  * _Name_: A name of your choice
  * _Type_: Automation
  * _Role_: Engineer
  * _TLS Management_: You can leave this unchecked
  * _Scope_: Global (uncheck the _Read-only access_ box)
  * _Access_: All services
  * _Expiration_: Never expire
* Create your token
  * __Copy your token value from the pop-up__ (make sure you copy the value and not the ID!)
  
⚠️ Note that these steps apply to a newly created free Fastly developer account – if you're using an existing account there may be differences depending on your company setup

## Copy your token into Glitch

Back in Glitch:

* Remix this project if you haven't already
* In the `.env` file, add your Fastly API key as the value for `FASTLY_API_TOKEN`

![Env file](https://cdn.glitch.global/267d1048-9239-4a48-903b-e02884465b24/Screenshot%202023-05-19%20at%2017.09.08.png?v=1684512570330)

Once you have your key in the `.env` you're ready to move forward – pop into the __TODO__ for next steps!
