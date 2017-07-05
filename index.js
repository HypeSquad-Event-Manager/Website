var koa = require('koa');
var userauth = require('koa-userauth');
var session = require('koa-session');
var _ = require('koa-route');
var serve = require('koa-static');
var config = require('./config.json');
var oauth = require('./oauth-discord.js');
var app = new koa();
app.keys = config.koaSecret;
app.use(session(app));
app.use(serve('static', {
    defer: true
}));

app.use(userauth({
    match: '/user',
    loginURLFormatter: function(url) {
        return oauth.getUrl(url);
    },
    getUser: async function(ctx) {
        var code = ctx.query.code;
        if (!code) return null;
        return await oauth.getData(code);
    }
}));

var pages = {
    'user': (ctx) => ctx.body = `
							<html>
							  <head>
								<meta charset="utf-8" />
							  </head>
							<body>
							 Name: ${ctx.session.user.username}#${ctx.session.user.discriminator}
							 </br>
							 ID: ${ctx.session.user.id}
							 </br>
							 Avatar: <img src=https://cdn.discordapp.com/avatars/${ctx.session.user.id}/${ctx.session.user.avatar}.png></img>
							 </body>
							 </html>
							`
}
app.use(_.get('/user', pages.user));

app.listen(80);
console.log('listening on port 80');