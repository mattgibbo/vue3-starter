# Vue3 Starter
A simple Vue3 starter project to use as a base for your project, or as inspiration for putting together your own setup.

## Initialisation
```
npm install
$ npm run serve
```

You will then see the URL for the server to access your project. It should be http://localhost:8080 but nay differ on your setup.

## Hot module replacement (HMR)
Hot module replacement allows you to update templates and modules without the need for a full refresh.

## API ##
I've added a very basic api connection to show how to use PHP within your Vue project. This could be modified to pull in data from an SQL database or anything else you like. This assumes that you're installing this project into the route localhost folder, within the vue3-starter subfolder.

If that's not the case you can update this for your setup in /vue.config.js by changing the value of the "target" property to your local setup.
