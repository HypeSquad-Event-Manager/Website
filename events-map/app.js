'use strict';
var map = require('./controllers/map');
var compress = require('koa-compress');
var logger = require('koa-logger');
var serve = require('koa-static');
var route = require('koa-route');
var koa = require('koa');
var path = require('path');
var app = module.exports = new koa();

// Logger
app.use(logger());

//app.use(route.get('/map/', map.render));
app.use(route.get('/map/list', map.list));
app.use(route.post('/map/', map.add));
app.use(route.put('/map/:id', map.modify));
app.use(route.delete('/map/', map.remove));




// Serve static files
app.use(serve(path.join(__dirname, 'public')));

// Compress
app.use(compress());

if (!module.parent) {
  app.listen(3001);
  console.log('listening on port 3001');
}
