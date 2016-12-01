#EXAMUS MOODLE PLUGIN

## Requirements
1. Examus plugin was tested with Moodle 3.1 version
2. Examus proctoring needs OAuth2 server plugin installed. You can install it from https://github.com/examus/moodle-local_oauth/releases 
3. To install plugin, download zip archive, go into your Moodle admin section, navigate to `Administration→Plugins→Install plugins`, put downloaded zip in box and press `Install` button. 

If you have Oauth2 server installed from another source, **please make sure it allows HTTPS url as Redirect URL**

## Installation
1. Download zip from https://github.com/examus/moodle-availability_examus/releases/, open `Administration→Plugins→Install plugins`, put zip there
2. Go to `Administration→WebServices→Manage Tokens`, Add token for service Examus for Admin User. Examus will use this token for integration.
3. Go to `Administration→Server→OAuth provider settings`, press `Add new client`.
4. You can use any Client identifier, for example 'Examus'. To get 'Redirect URL', please contact us. After saving new client, Examus proctoring service will use your `Client identifier` and generated `Client secret Key` to authenticate your users  

## Usage
1. In course editing mode, `Edit settings` for module, scroll down to `Restrict access`
2. Choose `Add restrictions... → Examus` to enable proctoring for this module. Please, specify duration of proctoring session. If you already have time restriction for module ('Quiz'), proctoring session duration must match time restriction setting. 
